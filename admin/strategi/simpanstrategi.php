<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">
  <title>Simpan Data Strategi</title>
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body>
  <?php
  include "../koneksi.php";
  $kdstrategi = $_POST['kdstrategi'];
  $nama_strategi = $_POST['nama_strategi'];
  $definisi = $_POST['definisi'];
  $solusi = $_POST['solusi'];

  //cek keberadaan data
  $sqlrs = mysqli_query($koneksi, "SELECT kdstrategi FROM tb_strategi WHERE kdstrategi='$kdstrategi'");
  $rs = mysqli_num_rows($sqlrs);
  if ($rs == 0) {
    $perintah = "INSERT INTO tb_strategi(kdstrategi,nama_strategi,definisi,solusi)VALUES('$kdstrategi','$nama_strategi','$definisi','$solusi')";
    $berhasil = mysqli_query($koneksi, $perintah);

    //jika data berhasil disimpan
    if ($berhasil) {
      echo "<table style='margin-top:150px;' align='center'><tr><td>";
      echo "<div style='width:500px; height:50px auto; border:1px solid #CCC; font-family:Poppins; padding:3px 3px 3px 3px;'>";
      echo "<center>terima kasih, data berhasil disimpan</center><br>";
      echo "<center><a href='./strategi.php' class='btn btn-primary btn-sm'>OK</a></center>";
      echo "</div>";
      echo "</td></tr></table>";
    } else {
      echo "<center><font color='#ff0000'><strong>Maaf Penyimpanan Gagal</strong></font></center><br>";
      echo "<center><a href='./strategi.php' class='btn btn-danger btn-sm'>Kembali</a></center>";
    }
  } else {
    echo "<table style='margin-top:150px;' align='center'><tr><td>";
    echo "<div style='width:500px; height:50px auto; border:1px solid #CCC; color:#F90; padding:3px 3px 3px 3px;'>";
    echo "<center><font>Maaf kode strategi $kdstrategi <strong>Telah ada di database, Masukkan Kode strategi yang lain!</strong></font></center><br>";
    echo "<center><a href='./strategi.php' class='btn btn-danger btn-sm'>Kembali</a></center>";
    echo "</div>";
    echo "</td></tr></table>";
  }
  ?>
</body>

</html>