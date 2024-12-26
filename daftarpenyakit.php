<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Daftar Penyakit</title>
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

  <!-- Template Main CSS File -->
  <link href="./assets/css/style.css" rel="stylesheet">

  <style>
    .card {
      border-radius: 10px;
    }

    .warning {
      color: #daa812;
    }
  </style>
</head>

<body>
  <?php include './admin/koneksi.php'; ?>

  <section>
    <div class="container mt-4">
      <div class="card">
        <div class="card-body">
          <div class="mt-4">
            <a href="./index.php" class="btn btn-outline-danger btn-sm ms-3"><i class="bi bi-box-arrow-left"></i> Kembali</a>
          </div>
          <div class="table-responsive mt-4">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th class="text-center">No</th>
                  <th class="text-center">Deskripsi Strategi Digital Marketing</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $sql = "SELECT * FROM tb_penyakit ORDER BY kdpenyakit";
                $qry = mysqli_query($koneksi, $sql) or die("SQL Error" . mysqli_error($koneksi));
                $no = 0;
                while ($data = mysqli_fetch_array($qry)) {
                  $no++;
                ?>
                  <tr>
                    <td class="text-center"><?php echo $no; ?></td>
                    <td>
                      <h4><?php echo "<em>$data[nama_penyakit]</em>"; ?></h4>
                      <ul>
                        <li><strong>Definisi Strategi:</strong>
                          <p class="text-info"><?php echo $data['definisi']; ?></p>
                        </li>
                        <li><strong>Saran:</strong>
                          <p class="warning"><?php echo $data['solusi']; ?></p>
                        </li>
                      </ul>
                    </td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>
