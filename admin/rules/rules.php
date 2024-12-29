<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../assets/img/favicon.png" rel="icon">
  <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../assets/css/style.css" rel="stylesheet">

  <style>
    .setrule {
      background-color: #4154f1;
      border: none;
      color: white;
      padding: 5px 20px;
      border-radius: 3px;
    }

    .setrule:hover {
      background-color: #717ff5;
      border: none;
      color: white;
      padding: 5px 20px;
      border-radius: 3px;
    }

    .reset {
      background-color: #dc3545;
      border: none;
      color: white;
      padding: 5px 20px;
      border-radius: 3px;
    }

    .reset:hover {
      background-color: #d76873;
      border: none;
      color: white;
      padding: 5px 20px;
      border-radius: 3px;
    }

    .cekbok {
      cursor: pointer;
      width: 18px;
      height: 18px;
    }

    .back-to-top {
      display: block;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      /* tambahkan ini untuk membuat bentuk bulat */
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      /* tambahkan ini untuk menambahkan shadow */
      text-align: center;
      line-height: 40px;
    }

    .back-to-top i {
      font-size: 20px;
      color: #fff;
    }
  </style>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.back-to-top').click(function() {
        $('html, body').animate({
          scrollTop: 0
        }, 'slow');
      });
    });
  </script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="../index.php" class="logo d-flex align-items-center">
        <img src="../../assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">DigiExpert</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed " href="../index.php">
          <i class="bi bi-house"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-database"></i><span>Master Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../strategi/strategi.php">
              <span>Data Strategi dan Solusi</span>
            </a>
          </li>
          <li>
            <a href="../kriteria/kriteria.php">
              <span>Data Kriteria</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link" href="../rules/rules.php">
          <i class="bi bi-boxes"></i>
          <span>Rule Dempster Shafer</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../laporan/lapkriteria.php">
              <span>Laporan Strategi</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="javascript:;" data-bs-toggle="modal" data-bs-target="#logoutmodal">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Login Page Nav -->
    </ul>
  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Rule Dempster Shafer</h1>
      <nav style="--bs-breadcrumb-divider: '>';">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../index.php">Admin</a></li>
          <li class="breadcrumb-item active">Rule Dempster Shafer</li>
        </ol>
      </nav>
      <hr>
    </div><!-- End Page Title -->

    <section>
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">

            <div class="konten">
              <form id="form1" name="form1" method="post" action="./simpanrules.php" enctype="multipart/form-data" onsubmit="return validateForm()">
                <h5 class="text-center">Tambah Rule Data Strategi Digital Marketing</h5>
                <table class="tab" width="700" border="0" align="center" cellpadding="4" cellspacing="1" bordercolor="#F0F0F0" bgcolor="#fff">
                  <tr bgcolor="#FFFFFF">
                    <td><strong class="ms-2">Pilih Kriteria</strong></td>
                    <!-- <td>&nbsp;</td> -->
                  </tr>
                  <tr bgcolor="#FFFFFF">
                    <td colspan="2">
                      <ul style="list-style:none;">
                        <?php
                        include "../koneksi.php";
                        $arrStrategi = array();
                        $arrKriteria = array();
                        $query = mysqli_query($koneksi, "SELECT * FROM tb_kriteria ORDER BY id") or die("Query Error..!" . mysqli_error($koneksi));
                        while ($row = mysqli_fetch_array($query)) {
                          $arrKriteria["$row[id]"] = $row['kdkriteria'] . "," . $row['kriteria'];
                        ?>
                          <!-- element label dengan attribute for sama dengan id element checkbox -->
                          <li style="margin: 5px 0;">
                            <label for="kriteria<?php echo $row['id']; ?>" style="cursor: pointer;">
                              <!-- element checkbox dengan attribute id sama dengan for element label -->
                              <input class="cekbok" type="checkbox" id="kriteria<?php echo $row['id']; ?>" name="kriteria[]" value="<?php echo $row['id']; ?>">
                              &ensp; <?php echo $row['kdkriteria'] . "<strong>&nbsp;|&nbsp;</strong>" . $row['kriteria']; ?>
                              <span class="check"></span>
                            </label>
                          </li>
                        <?php } ?>
                      </ul>
                      <strong>&nbsp;&nbsp;Pilih Strategi
                        <select name="daftarstrategi" id="daftarstrategi">
                          <option value="NULL">Daftar Strategi</option>
                          <?php
                          $sqlp = "SELECT * FROM tb_strategi ORDER BY id";
                          $qryp = mysqli_query($koneksi, $sqlp)
                            or die("SQL Error: " . mysqli_error($koneksi));
                          while ($datap = mysqli_fetch_array($qryp)) {
                            if ($datap['id'] == $kdmarket) {
                              $cek = "selected";
                            } else {
                              $cek = "";
                            }
                            $arrStrategi["$datap[id]"] = $datap['nama_strategi'];
                            echo "<option value='$datap[id]' $cek>$datap[id]&nbsp;|&nbsp;$datap[nama_strategi]</option>";
                          }
                          ?>
                        </select><br><br>&nbsp;&nbsp;Nilai Belief
                        <input type="text" name="belief" size="5" class="ms-4">
                      </strong>
                    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>
                      <div class="mt-3">
                        <input class="setrule" type="submit" name="Submit" value="Tambah Rule" />
                        <input class="reset" type="reset" name="Submit2" value="Reset" />
                      </div>
                    </td>
                  </tr>
                </table>
              </form>
            </div>
            <table class="table table-striped table-hover table-bordered mt-4">
              <thead>
                <tr>
                  <th>No</th>
                  <th class="text-center">Kode Kriteria | Nama Kriteria</th>
                  <?php
                  include "../koneksi.php";
                  $query_p = mysqli_query($koneksi, "SELECT id_strategi FROM tb_rules GROUP BY id_strategi");
                  while ($data_p = mysqli_fetch_array($query_p)) {
                  ?>
                    <th class="text-center">
                      <?php $idp = $data_p['id_strategi'];
                      echo "$idp | ";
                      print_r($arrStrategi["$idp"]); ?><br><a href="./editrules.php?kdstrategi=<?php echo $data_p['id_strategi']; ?>">Edit Rule</a></th><?php } ?>
                </tr>
              </thead>
              <tbody>
                <?php
                $query = mysqli_query($koneksi, "SELECT * FROM tb_rules GROUP BY id_kriteria ORDER BY id_kriteria ASC ") or die(mysqli_error($koneksi));
                $no = 0;
                while ($row = mysqli_fetch_array($query)) {
                  $idstrategi = $row['id_strategi'];
                  $no++;
                ?>
                  <tr>
                    <td valign="top" class="text-center"><?php echo $row['id_kriteria']; ?></td>
                    <td>
                      <?php $idG = $row['id_kriteria'];
                      print_r($arrKriteria["$idG"]);
                      ?></td>
                    <?php $query_pb = mysqli_query($koneksi, "SELECT id_strategi FROM tb_rules GROUP BY id_strategi ");
                    while ($data_pb = mysqli_fetch_array($query_pb)) {
                    ?>
                      <td>
                        <?php
                        $kdstrategi_B = $data_pb['id_strategi'];
                        $kdkriteria_B = $row['id_kriteria'];
                        $query_CG = mysqli_query($koneksi, "SELECT * FROM tb_rules WHERE id_strategi='$kdstrategi_B' AND id_kriteria='$kdkriteria_B' ");
                        while ($data_GB = mysqli_fetch_array($query_CG)) {
                          echo "<center><strong><a title='Edit Nilai Belief' href='./editbelief.php?id_strategi=$kdstrategi_B&id_kriteria=$kdkriteria_B&belief=$data_GB[belief]'>$data_GB[belief]</a></strong></center>";
                        }
                        ?></td><?php } ?>
                  </tr>
                <?php } ?>
              </tbody>
            </table>

          </div>
        </div>
      </div>

    </section>
  </main><!-- End #main -->

  <!-- Logout Modal -->
  <div class="modal fade" id="logoutmodal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Apakah Anda yakin ingin keluar ?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-footer">
          <a href="../login.php" type="button" class="btn btn-success btn-sm"><i class="bi bi-check-lg"></i> Ya</a>
          <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal"><i class="bi bi-x"></i> Tidak</button>
        </div>
      </div>
    </div>
  </div><!-- End Logout Modal-->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script>
    function validateForm() {
      // Ambil semua checkbox yang memiliki nama "gejala[]"
      var checkboxes = document.getElementsByName("kriteria[]");
      // Inisialisasi counter untuk menghitung jumlah checkbox yang tercentang
      var count = 0;
      // Iterasi setiap checkbox
      for (var i = 0; i < checkboxes.length; i++) {
        // Jika checkbox tercentang, tambah counter
        if (checkboxes[i].checked) count++;
      }
      // Jika tidak ada checkbox yang tercentang, tampilkan pesan error
      if (count == 0) {
        alert("Anda harus memilih minimal 1 kriteria!");
        return false;
      }
      // Jika validasi berhasil, submit form
      return true;
    }
  </script>

  <!-- Vendor JS Files -->
  <script src="../../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/chart.js/chart.min.js"></script>
  <script src="../../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../../assets/vendor/quill/quill.min.js"></script>
  <script src="../../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../../assets/vendor/php-email-form/validate.js"></script>
  <script src="../../assets/js/jquery.min.js"></script>
  <script src="../../assets/js/jquery.truncatable.js"></script>

  <!-- Template Main JS File -->
  <script src="../../assets/js/main.js"></script>

</body>

</html>