<?php
session_start();
include "./koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Login - Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="../../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="..//vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">
  <style>
    <style>
  /* Latar belakang gradien */
  body {
    background: linear-gradient(135deg, #00d988, #0056b3);
    font-family: 'Poppins', sans-serif;
  }

  /* Style untuk tombol login */
  .login {
    background-color: rgb(0, 33, 217);
    border: none;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    font-weight: bold;
    transition: background-color 0.3s ease, transform 0.3s ease;
  }

  /* Efek hover pada tombol login */
  .login:hover {
    background-color: #003b99;
    transform: translateY(-3px); /* Efek angkat tombol sedikit */
  }

  /* Style untuk card login */
  .card {
    border-radius: 10px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    background-color: white;
  }

  /* Gaya teks judul pada card */
  .card-title {
    color: rgb(0, 33, 217);
    font-size: 24px;
    font-weight: 600;
  }

  /* Gaya teks instruksi login */
  .form-label {
    font-weight: bold;
    color: #333;
  }

  /* Menambahkan padding pada form */
  .form-control {
    border-radius: 5px;
    border: 1px solid #ccc;
    padding: 12px;
  }

  /* Gaya untuk tampilan pesan error */
  .error-message {
    font-style: italic;
    color: #f44336;
  }

  /* Style untuk footer */
  .credits {
    margin-top: 20px;
    text-align: center;
    color: #aaa;
  }

  /* Style untuk link Kembali */
  .credits a {
    text-decoration: none;
    color: #0056b3;
    font-weight: bold;
  }

  .credits a:hover {
    text-decoration: underline;
  }
</style>

  </style>
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
              <div class="d-flex justify-content-center py-4">
                <h5 class="d-none d-lg-block">Login dan Atur Data Sekarang</h5>
              </div>

              <div class="card mb-3">
                <div class="card-body">
                  <h5 class="card-title text-center fs-4 ">Login Admin</h5>
                  <?php
                  if (isset($_GET['pesan'])) {
                    echo '<p class="text-center text-danger" style="font-style: italic;">Maaf, Username / Password Salah</p>';
                  }
                  ?>

                  <form action="./loginkoneksi.php" method="POST" class="row g-3">
                    <div class="col-12">
                      <label for="username" class="form-label">Username</label>
                      <input type="text" name="username" class="form-control" id="username" autofocus placeholder="Masukkan username" required>
                    </div>

                    <div class="col-12">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan password" required>
                    </div>

                    <div class="col-12 pt-2">
                      <button class="login w-100 mb-3" type="submit">Login</button>
                      <a href="../index.php" class="text-danger d-block"><i class="bi bi-backspace"></i> Kembali</a>
                    </div>
                  </form>
                </div>
              </div>

              <div class="credits">
                Dempster Shafer <a href="#"></a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>

  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.min.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.min.js"></script>
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/js/main.js"></script>

</body>

</html>
