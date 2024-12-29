<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Daftar Strategi Digital Marketing</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="./assets/img/favicon.png" rel="icon">
  <link href="./assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="./assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

  <!-- Template Main CSS File -->
  <link href="./assets/css/style.css" rel="stylesheet">
  <link href="./assets/css/konsultasi.css" rel="stylesheet">

  <!-- Custom Styles -->
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fa;
      margin: 0;
      padding: 0;
      height: 100vh;
    }

    .container {
      max-width: 1100px;
      margin: 40px auto;
      padding: 20px;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    }

    .card {
      border: none;
    }

    .card-body {
      padding: 30px;
    }

    .btn-outline-danger {
      border-radius: 5px;
      border-color: #e74c3c;
      color: #e74c3c;
      padding: 10px 20px;
      transition: background-color 0.3s ease;
    }

    .btn-outline-danger:hover {
      background-color: #e74c3c;
      color: white;
    }

    h4 {
      font-size: 1.2rem;
      color: #333;
      font-weight: 600;
      margin-bottom: 15px;
    }

    ul {
      list-style-type: none;
      padding: 0;
    }

    li {
      margin-bottom: 20px;
    }

    li strong {
      color: #2c3e50;
      font-weight: bold;
    }

    p {
      color: #7f8c8d;
      font-size: 1rem;
      line-height: 1.6;
      text-align: justify;
    }

    .text-info {
      color: #333;  /* Mengganti warna ke warna netral */
    }

    .warning {
      color: #333;  /* Mengganti warna ke warna netral */
    }

    .table {
      width: 100%;
      margin-top: 30px;
      border-collapse: collapse;
    }

    .table th, .table td {
      padding: 15px;
      text-align: left;
      font-size: 1rem;
      border-bottom: 1px solid #ddd;
    }

    .table th {
      background-color: #2c3e50;
      color: white;
      font-weight: bold;
    }

    .table-striped tbody tr:nth-child(odd) {
      background-color: #f9f9f9;
    }

    .table-hover tbody tr:hover {
      background-color: #f1f1f1;
    }

    /* Responsive Design */
    @media (max-width: 767px) {
      .container {
        padding: 15px;
      }

      h4 {
        font-size: 1.1rem;
      }

      .table th, .table td {
        font-size: 0.9rem;
      }
    }
  </style>
</head>

<body>

  <?php include './admin/koneksi.php'; ?>

  <section>
    <div class="container">
      <div class="card">
        <div class="card-body">
          <div class="mt-4">
            <a href="./index.php" class="btn btn-outline-danger btn-sm ms-3"><i class="bi bi-box-arrow-left"></i> Kembali</a>
          </div>
          <div class="table-responsive mt-4">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Deskripsi Strategi Digital Marketing</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $sql = "SELECT * FROM tb_strategi ORDER BY kdstrategi";
                $qry = mysqli_query($koneksi, $sql) or die("SQL Error" . mysqli_error($koneksi));
                $no = 0;
                while ($data = mysqli_fetch_array($qry)) {
                  $no++;
                ?>
                  <tr>
                    <td class="text-center"><?php echo $no; ?></td>
                    <td>
                      <h4><em><?php echo $data['nama_strategi']; ?></em></h4>
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
