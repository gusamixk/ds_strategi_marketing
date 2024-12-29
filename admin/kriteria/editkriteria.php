<?php
include "../koneksi.php";
$id = $_GET['id'];
if ($id != "") {
  #menampilkan data
  $sql = "SELECT * FROM tb_kriteria WHERE id='$id'";
  $qry = mysqli_query($koneksi, $sql)
    or die("SQL ERROR" . mysqli_error($koneksi));
  $data = mysqli_fetch_array($qry);
  #samakan dengan variabel form
  $id = $data['id'];
  $edit_kdkriteria = $data['kdkriteria'];
  $edit_kriteria = $data['kriteria'];

}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">
  <title>Edit data Kriteria</title>
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

</head>

<body>

  <div class="card col-md-5 mx-auto mt-5">
    <div class="card-body">
      <h4 class="text-center">Edit Data Kriteria</h4>
      <form method="post" action="editkriteria2.php">
        <div class="form-group mb-2">
          <label for="kdkriteria">Kode Kriteria :</label>
          <input type="text" class="form-control" id="kdkriteria" name="kdkriteria" value="<?php echo $edit_kdkriteria; ?>">
          <input name="kdkriteria" type="hidden" id="kdkriteria" value="<?php echo $id; ?>">
        </div>
        <div class="form-group mb-2">
          <label for="edit_kriteria">Nama Kriteria :</label>
          <input type="text" class="form-control" id="edit_kriteria" name="edit_kriteria" value="<?php echo $edit_kriteria; ?>">
        </div>
        <div class="d-grid gap-2">
          <button type="submit" name="simpan" id="simpan" class="btn btn-primary mt-4 btn-sm">Update</button>
          <a href="./kriteria.php" type="button" class="btn btn-danger btn-sm" name="batal" id="batal">Batal</a>
        </div>
      </form>
    </div>
  </div>

</body>

</html>