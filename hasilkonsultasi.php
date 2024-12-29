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

  <title>Saran Strategi
  </title>
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
  <link href="./assets/css/konsultasi.css" rel="stylesheet">
</head>

<body> 
  <div class="container bg-info bg-gradient rounded-2" style="--bs-bg-opacity: .3;">
    <h1 
    class="text-center mt-5 border border-2 border-dark border-start-0 border-end-0 border-top-0"
    >Hasil</h1>
    <?php
    $koneksi = mysqli_connect("localhost", "root", "", "db_strategimarketing_ds");

    // cek koneksi
    if (mysqli_connect_errno()) {
      echo "Koneksi database gagal : " . mysqli_connect_error();
    }
    ?>
    <?php
    //Mengambil Nilai Belief Gejala Yang dipilih
    if (isset($_POST['bukti'])) { {
        echo "<div class='form'><p><b class='text-primary'>Strategi Yang dipilih :</b></p>";
        $kriteriadipilih = $_POST['bukti'];
        foreach ($kriteriadipilih as $krtplh) {
          echo $krtplh . " | ";
          $qry = mysqli_query($koneksi, "SELECT * FROM tb_kriteria WHERE id='$krtplh' ");
          while ($data = mysqli_fetch_array($qry)) {
            echo $data['kriteria'] . "<br>";
          }
        }
        echo "</div>";
        $sql = "SELECT GROUP_CONCAT(b.kdstrategi), a.belief
                FROM tb_rules a
                JOIN tb_strategi b ON a.id_strategi=b.id
                WHERE a.id_kriteria IN(" . implode(',', $_POST['bukti']) . ") 
                GROUP BY a.id_kriteria";
        $result = $koneksi->query($sql);
        $bukti = array();
        while ($row = $result->fetch_row()) {
          $bukti[] = $row;
        }

        $sql = "SELECT GROUP_CONCAT(kdstrategi) FROM tb_strategi";
        $result = $koneksi->query($sql);
        $row = $result->fetch_row();
        $fod = $row[0];

        //menentukan nilai densitas
        // echo "<br>";
        // echo "<b>Nilai Densitas </b>\n";
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
          // print_r($densitas_baru);
        }
        //menentukan urutan penyakit
        // menghancurkan variabel yang ditentukan
        unset($densitas_baru["&theta;"]);
        // mengurutkan array berdasarkan nilai
        arsort($densitas_baru);
        // print_r($densitas_baru);
    ?>

    <?php
        $arrPenyakit = array();
        $qry = mysqli_query($koneksi, "SELECT * FROM tb_strategi");
        while ($data = mysqli_fetch_array($qry)) {
          $arrPenyakit["$data[kdstrategi]"] = $data['nama_strategi'];
        }
        $datasolusi = array();
        $datasolusi = array_intersect_key($arrPenyakit, $densitas_baru);
        foreach ($datasolusi as $k => $a) {
          foreach ($densitas_baru as $kdpenyakit => $ranking) {
              if ($k == $kdpenyakit) {
                  // Mengambil solusi penyakit
                  $strS = mysqli_query($koneksi, "SELECT * FROM tb_strategi WHERE kdstrategi='$k'");
      
                  if ($dataS = mysqli_fetch_array($strS)) {
                      // Menampilkan solusi jika data ditemukan
                  } else {
                      // Pesan error jika data tidak ditemukan
                      echo "<p style='margin: 10px; color: red;'>Solusi tidak ditemukan untuk kode strategi: $k</p>";
                  }
              }
          }
      }
      
        //menampilkan hasil
        echo "<br>";
        echo "<p style = 'text-align:center;'>";
        $codes = array_keys($densitas_baru);
        $final_codes = explode(',', $codes[0]);
        $sql = "SELECT GROUP_CONCAT(nama_strategi)  
        FROM tb_strategi
        WHERE kdstrategi IN('" . implode("','", $final_codes) . "')";
        $result = $koneksi->query($sql);
        $row = $result->fetch_row();

        // Tampilkan proses perhitungan densitas
          echo "<div class='perhitungan-densitas'>";
          echo "<h3>Perhitungan Densitas :</h3>";
          foreach ($densitas_baru as $k => $nilai) {
            global $dataS;
            echo "<p>Densitas untuk <strong> <u>$k</u> = $nilai</strong></p>
            ";
}   
        echo "<br>";
        echo "<br>";
        echo "<b class='text-primary'>Saran yang Diberikan :</b>";
        echo "<br>";
        // echo "<br>";
        echo " <p class=\"diagnosa\">Saran yang diberikan <b>{$row[0]}</b> dengan derajat kepercayaan sebesar <b>" . round($densitas_baru[$codes[0]] * 100, 2) . "%</b></p>";
        echo "<br>";
        // echo "<br>";
        echo "<b><p style = 'text-align:center;'> Rincian Strategi :</b></p> ";
        echo "<p style='margin: 10px;max-height:300px;overflow:auto; border:3px solid rgb(234, 106, 106) ; letter-spacing:2px;'>" . $dataS['solusi'] . "</p>";
      }
    }
    ?>

    <div class=" d-flex justify-content-center">
      <a href="./konsultasi.php" class="btn btn-outline-danger mt-2">Klik disini untuk kembali</a>
    </div>
  </div>

</body>

</html>