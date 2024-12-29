<?php
include "../koneksi.php";
$kdubah = $_GET['kdubah'];
if ($kdubah != "") {
  #menampilkan data
  $sql = "SELECT * FROM tb_strategi WHERE id='$kdubah'";
  $qry = mysqli_query($koneksi, $sql)
    or die("SQL ERROR" . mysqli_error($koneksi));
  $data = mysqli_fetch_array($qry);
  #samakan dengan variabel form
  $id = $data['id'];
  $edit_kdstrategi = $data['kdstrategi'];
  $edit_strategi = $data['nama_strategi'];
  $edit_definisi = $data['definisi'];
  $edit_solusi = $data['solusi'];
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">
  <title>Edit data strategi</title>
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

</head>

<body>

  <div class="card col-md-6 mx-auto mt-5">
    <div class="card-body">
      <h4 class="text-center">Edit Data Strategi & Solusi</h4>
      <form method="post" action="./editstrategi2.php">
        <div class="form-group mb-2">
          <label for="kdstrategi">Kode Strategi :</label>
          <input type="text" class="form-control" id="kdstrategi" name="kdstrategi" value="<?php echo $edit_kdstrategi; ?>">
          <input name="kdstrategi" type="hidden" id="kdstrategi" value="<?php echo $id; ?>">
        </div>
        <div class="form-group mb-2">
          <label for="nama_strategi">Nama Strategi :</label>
          <input type="text" class="form-control" id="edit_strategi" name="edit_strategi" value="<?php echo $edit_strategi; ?>">
        </div>
        <div class="form-group mb-2">
          <label for="definisi">Definisi Strategi :</label>
          <textarea class="form-control" rows="3" id="edit_definisi" name="edit_definisi"><?php echo $edit_definisi; ?></textarea>
        </div>
        <div class="form-group">
          <label for="solusi">Solusi Strategi :</label>
          <textarea class="form-control" rows="3" id="edit_solusi" name="edit_solusi"><?php echo $edit_solusi; ?></textarea>
        </div>
        <div class="d-grid gap-2">
          <button type="submit" name="simpan" id="simpan" class="btn btn-primary mt-4 btn-sm">Update</button>
          <a href="./strategi.php" type="button" class="btn btn-danger btn-sm" name="batal" id="batal">Batal</a>
        </div>
      </form>
    </div>
  </div>

</body>

</html>