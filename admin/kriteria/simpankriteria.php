<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">
  <title>Simpan Data Kriteria</title>
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body>
  <?php
  include "../koneksi.php";
  $kdkriteria = $_POST['kdkriteria'];
  $kriteria = $_POST['kriteria'];

  //cek keberadaan data
  $sqlrs = mysqli_query($koneksi, "SELECT kdkriteria FROM tb_kriteria WHERE kdkriteria='$kdkriteria'");
  $rs = mysqli_num_rows($sqlrs);
  if ($rs == 0) {
    $perintah = "INSERT INTO tb_kriteria (kdkriteria,kriteria) VALUES ('$kdkriteria','$kriteria')";
    $berhasil = mysqli_query($koneksi, $perintah);

    //jika data berhasil disimpan
    if ($berhasil) {
      echo "<table style='margin-top:150px;' align='center'><tr><td>";
      echo "<div style='width:500px; height:50px auto; border:1px solid #CCC; font-family:Poppins; padding:3px 3px 3px 3px;'>";
      echo "<center>terima kasih, data berhasil disimpan</center><br>";
      echo "<center><a href='./kriteria.php' class='btn btn-primary btn-sm'>OK</a></center>";
      echo "</div>";
      echo "</td></tr></table>";
    } else {
      echo "<center><font color='#ff0000'><strong>Maaf Penyimpanan Gagal</strong></font></center><br>";
      echo "<center><a href='./kriteria.php' class='btn btn-danger btn-sm'>Kembali</a></center>";
    }
  } else {
    echo "<table style='margin-top:150px;' align='center'><tr><td>";
    echo "<div style='width:500px; height:50px auto; border:1px solid #CCC; color:#F90; padding:3px 3px 3px 3px;'>";
    echo "<center><font>Maaf kode kriteria $kdkriteria <strong>Telah ada di database, Masukkan Kode kriteria yang lain!</strong></font></center><br>";
    echo "<center><a href='./kriteria.php' class='btn btn-danger btn-sm'>Kembali</a></center>";
    echo "</div>";
    echo "</td></tr></table>";
  }
  ?>
</body>

</html>