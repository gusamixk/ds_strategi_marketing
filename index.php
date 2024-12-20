<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>home</title>
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="./assets/css/style.css" rel="stylesheet">

  <style>
    .jumbotron {
      background-color: #f8f9fa;
      padding: 2rem 1rem;
      border-radius: 10px;
    }

    .konsul-btn {
      background-color: #007bff;
      border-color: #007bff;
      color: #fff;
    }

    .konsul-btn:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }
  </style>
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <a class="navbar-brand" href="#">DigiExpert</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./index.php"><i class="bi bi-house-fill"></i> Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="./daftarpenyakit.php"></i>Daftar Strategi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./konsultasi.php">Konsultasi</a>
            </li>
          </ul>
          <a href="./admin/login.php" class="btn btn-outline-light"><i class="bi bi-box-arrow-in-right"></i> Login Admin</a>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <section class="py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="jumbotron">
              <h1 class="display-4">Selamat Datang</h1>
              <p class="lead">Kami hadir untuk membantu Anda menemukan solusi terbaik dalam menangani kebutuhan bisnis Anda. </p>
              <hr class="my-4">
              <p>Melalui layanan konsultasi kami, temukan informasi relevan untuk strategi pemasaran digital Anda. Kami siap menjadi tempat terpercaya untuk mencapai tujuan bisnis Anda secara efektif dan efisien.</p>
              <a class="btn konsul-btn btn-lg" href="./konsultasi.php" role="button">Mulai Konsultasi</a>
            </div>
          </div>
          <div class="col-lg-6">
            <img src="assets/img/person.png" class="img-fluid rounded-circle" alt="person">
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2024 Kelompok 3</p>
  </footer>

  <!-- Vendor JS Files -->
  <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="./assets/js/main.js"></script>

</body>

</html>
