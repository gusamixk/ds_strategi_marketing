<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home</title>
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

<!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

  <style>
    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    .content-wrapper {
      flex: 1;
    }

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

    footer {
      background-color: #343a40;
      color: #ffffff;
      text-align: center;
      padding: 1rem 0;
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
              <a class="nav-link " href="./daftarstrategi.php"></i>Daftar Strategi</a>
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

  <div class="content-wrapper">
    <main>
      <section class="py-5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="jumbotron">
                <h1 class="font-weight-bold">Selamat Datang</h1>
                <p class="lead">Kami hadir untuk membantu Anda menemukan solusi terbaik dalam menangani kebutuhan bisnis Anda.</p>
                <hr class="my-4">
                <p>Melalui layanan konsultasi kami, temukan informasi relevan untuk strategi pemasaran digital Anda. Kami siap menjadi tempat terpercaya untuk mencapai tujuan bisnis Anda secara efektif dan efisien.</p>
                <a class="btn konsul-btn btn-lg" href="./konsultasi.php" role="button">Mulai Konsultasi</a>
              </div>
            </div>
            <div class="col-lg-6">
              <img src="assets/img/object.png" class="img-fluid" alt="person">
            </div>
          </div>
        </div>
      </section>
    </main>
  </div>
  
  <div>
    <section class="container my-5">
      <h2 class="text-center mb-4">Eksplor Layanan Kami </h2>
      <p class="text-center mb-5">Gunakan Layanan yang kami sediakan untuk meningkatkan usaha anda dengan digital marketing</p>

      <div class="row row-cols-1 row-cols-md-3 g-4">
        <!-- Feature 1 -->
        <div class="col">
          <div class="feature">
            <div class="icon">
              <i class="fas fa-clock fa-2x"></i>
            </div>
            <h3>Layanan 24/7</h3>
            <p>Tidak ada hari libur, DigiExpert dapat digunakan kapanpun. Jadi jangan khawatir untuk menggunakan layanan DigiExpert setiap saat, karena DigiExpert membuka layanan 24/7</p>
          </div>
        </div>

        <!-- Feature 2 -->
        <div class="col">
          <div class="feature">
            <div class="icon">
              <i class="fas fa-bolt fa-2x"></i>
            </div>
            <h3>Akses Mudah & Cepat</h3>
            <p>Tidak perlu khawatir dengan kerumitan layanannya. DigiExpert dapat digunakan semua kalangan, dengan tampilan yang user friendly akan membuat anda mudah untuk menggunakan semua fitur-fiturnya.</p>
          </div>
        </div>

        <!-- Feature 3 -->
        <div class="col">
          <div class="feature">
            <div class="icon">
              <i class="fas fa-dollar-sign fa-2x"></i>
            </div>
            <h3>Bebas Biaya</h3>
            <p>Nikmati fitur dari DigiExpert tanpa pusing membayar langganan. DigiExpert 100% gratis dan dapat digunakan oleh siapapun dan dimanapun untuk meningkatkan profit menggunakan digital marketing </p>
          </div>
        </div>
      </div>
    </section>
  </div>

  <footer>
    <p>&copy; 2024 Kelompok 3</p>
  </footer>

  <!-- Vendor JS Files -->
  <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="./assets/js/main.js"></script>

</body>

</html>