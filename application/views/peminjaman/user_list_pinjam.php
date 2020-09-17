<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Inner Page - KnightOne Bootstrap Template</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url()?>assets/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url()?>assets/assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center justify-content-between">
        <h1 class="logo"><a href="<?php echo base_url()?>/">JD.Co</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav class="nav-menu d-none d-lg-block">
          <ul>
          <li ><a href="#">Home</a></li>
              <li><a href="<?php echo base_url()?>#cariBarang">Cari Barang</a></li>
              <li><a href="<?php echo base_url()?>#Barang">Barang</a></li>
              <li class="active"><a href="<?php echo base_url()?>peminjaman/user_list">Riwayat</a></li>
            </ul>
          </nav><!-- .nav-menu -->

          <a href="#about" class="get-started-btn scrollto">Login</a>
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="inner-page">
      <div class="container">
            <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"><h5>Riwayat Peminjaman</h5></li>
        </ol>
            </nav>

            <!-- table riwayat  -->
    <table class="table">
        <thead class="thead-dark">
            <tr>
            
            <th scope="col">Nama Barang</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Tanggal Pinjam</th>
            <th scope="col">Tanggal Kembali </th>
            <th scope="col">Status </th>
            </tr>
        </thead>
        <tbody id="tcontainer">
        </tbody>
        <tbody>
    
    </div>
    <!-- end breadcrumbs     -->
</table>
    <!-- end tabel riwayat -->
    </section>
  </main><!-- End #main -->
  <br><br><br><br><br><br>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>JD.Co</h3>
      <div class="copyright">
        &copy; Copyright <strong><span>JD.Co</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->


    <!-- Vendor JS Files -->
    <script src="<?php echo base_url()?>assets/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url()?>assets/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url()?>assets/assets/vendor/jquery.easing/jquery.easing.min.js"></script>

  <script src="<?php echo base_url()?>assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url()?>assets/assets/vendor/php-email-form/validate.js"></script>  
  <script src="<?php echo base_url()?>assets/assets/vendor/counterup/counterup.min.js"></script>
  <script src="<?php echo base_url()?>assets/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url()?>assets/assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?php echo base_url()?>assets/assets/vendor/owl.carousel/owl.carousel.min.js"></script>

    <!-- Datepicker -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/> 

  <!-- Template Main JS File -->
  <script src="<?php echo base_url()?>assets/assets/js/main.js"></script>
  <script src="<?php echo base_url()?>assets/assets/js/ajax.js"></script>

  <script>
    
  </script>
</body>

</html>