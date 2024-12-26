<?php
include './admin/koneksi.php';
// mengaktifkan session
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hasil Strategi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="./assets/img/favicon.png" rel="icon">
  <link href="./assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="./assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link href="./assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="./assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="./assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="./assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="./assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="./assets/css/style.css" rel="stylesheet">

  <style>
    .gejala {
      color: red;
      padding: 5px;
      display: flex;
      justify-content: center;
    }

    .form {
      margin-top: 70px;
    }

    .diagnosa {
      margin: 10px;
      max-height: 300px;
      overflow: auto;
      border: 3px solid #a3f0ff;
      letter-spacing: 2px;
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1 class="text-center mt-5">Hasil Konsultasi Strategi</h1>
    <?php
    $koneksi = mysqli_connect("localhost", "root", "", "db_penyakit_ds");

    // cek koneksi
    if (mysqli_connect_errno()) {
      echo "Koneksi database gagal : " . mysqli_connect_error();
    }
    ?>
    <?php
    // Mengambil Nilai Belief Gejala Yang dipilih
    if (isset($_POST['bukti'])) {
        echo "<div class='form'><p><b>Kriteria yang dipilih :</b></p>";
        $gejaladipilih = $_POST['bukti'];
        foreach ($gejaladipilih as $gjlplh) {
            echo $gjlplh . " | ";
            $qry = mysqli_query($koneksi, "SELECT DISTINCT * FROM tb_gejala WHERE id='$gjlplh'");
            while ($data = mysqli_fetch_array($qry)) {
                echo $data['gejala'] . "<br>";
            }
        }
        echo "</div>";

        $sql = "SELECT GROUP_CONCAT(b.kdpenyakit), a.belief
                FROM tb_rules a
                JOIN tb_penyakit b ON a.id_penyakit=b.id
                WHERE a.id_gejala IN(" . implode(',', $_POST['bukti']) . ") 
                GROUP BY a.id_gejala";
        $result = $koneksi->query($sql);
        $bukti = array();
        while ($row = $result->fetch_row()) {
            $bukti[] = $row;
        }

        $sql = "SELECT GROUP_CONCAT(kdpenyakit) FROM tb_penyakit";
        $result = $koneksi->query($sql);
        $row = $result->fetch_row();
        $fod = $row[0];

        // menentukan nilai densitas
        $densitas_baru = array();
        while (!empty($bukti)) {
            $densitas1[0] = array_shift($bukti);
            $densitas1[1] = array($fod, 1 - $densitas1[0][1]);
            $densitas2 = array();
            if (empty($densitas_baru)) {
                $densitas2[0] = array_shift($bukti);
            } else {
                foreach ($densitas_baru as $k => $r) {
                    if ($k != "&theta;") {
                        $densitas2[] = array($k, $r);
                    }
                }
            }
            $theta = 1;
            foreach ($densitas2 as $d) $theta -= $d[1];
            $densitas2[] = array($fod, $theta);
            $m = count($densitas2);
            $densitas_baru = array();
            for ($y = 0; $y < $m; $y++) {
                for ($x = 0; $x < 2; $x++) {
                    if (!($y == $m - 1 && $x == 1)) {
                        $v = explode(',', $densitas1[$x][0]);
                        $w = explode(',', $densitas2[$y][0]);
                        sort($v);
                        sort($w);
                        $vw = array_intersect($v, $w);
                        if (empty($vw)) {
                            $k = "&theta;";
                        } else {
                            $k = implode(',', $vw);
                        }
                        if (!isset($densitas_baru[$k])) {
                            $densitas_baru[$k] = $densitas1[$x][1] * $densitas2[$y][1];
                        } else {
                            $densitas_baru[$k] += $densitas1[$x][1] * $densitas2[$y][1];
                        }
                    }
                }
            }
            foreach ($densitas_baru as $k => $d) {
                if ($k != "&theta;") {
                    $densitas_baru[$k] = $d / (1 - (isset($densitas_baru["&theta;"]) ? $densitas_baru["&theta;"] : 0));
                }
            }
        }

        unset($densitas_baru["&theta;"]);
        arsort($densitas_baru);

        // Ambil strategi dengan densitas tertinggi
        $highest = key($densitas_baru);
        $final_codes = explode(',', $highest);

        // Ambil nama strategi dari kdpenyakit dengan densitas tertinggi
        $sql = "SELECT nama_penyakit FROM tb_penyakit WHERE kdpenyakit = '" . $final_codes[0] . "'";
        $result = $koneksi->query($sql);
        $row = $result->fetch_row();

        // Tampilkan hasil strategi
        echo "<div class='perhitungan-densitas'>";
        echo "<h3>Perhitungan Densitas</h3>";
        foreach ($densitas_baru as $k => $nilai) {
            echo "<p>Densitas untuk <strong>$k</strong>: $nilai</p>";
        }
        echo "</div>";

        echo "<br><br>";
        echo "<b>Kesimpulan Hasil :</b><br>";
        echo "<p class=\"diagnosa\">Strategi yang anda bisa gunakan adalah <b>{$row[0]}</b> dengan derajat kepercayaan sebesar <b>" . round($densitas_baru[$highest] * 100, 2) . "%</b></p>";

        // Tampilkan saran berdasarkan strategi tertinggi
        $strS = mysqli_query($koneksi, "SELECT solusi FROM tb_penyakit WHERE kdpenyakit='" . $final_codes[0] . "'");
        $dataS = mysqli_fetch_array($strS);
        echo "<p style='margin: 10px; max-height:300px; overflow:auto; border:3px solid #a3f0ff; letter-spacing:2px;'>{$dataS['solusi']}</p>";
    }
    ?>

    <div class="d-flex justify-content-center">
      <a href="./konsultasi.php" class="btn btn-outline-danger mt-2">Klik disini untuk kembali</a>
    </div>
  </div>
</body>

</html>
