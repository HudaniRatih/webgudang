<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gudang JD.CO</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url()?>assets/assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url()?>assets/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
  <header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center justify-content-between">
          <h1 class="logo"><a href="#">JD.Co</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#cariBarang">Cari Barang</a></li>
              <li><a href="#Barang">Barang</a></li>
              <li><a href="<?php echo base_url()?>peminjaman/user_list">Riwayat</a></li>
              
            </ul>
          </nav><!-- .nav-menu -->
          
          <a href="<?= base_url() ?>login" class="get-started-btn scrollto">Login</a>
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <h1>Gudang JD.CO</h1>
          <h2>Temukan Barang Barang Keperluanmu Disini</h2>
          
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="cariBarang" class="cari">
      <div class="container">

        <div class="section-title">
          <h2>Cari Barang Kebutuhanmu Disini</h2>
          <input class="form-control form-control-lg boxSearch" type="text" placeholder="Cari Barang.. "> <br><br><br>

          <!-- container box barang  -->
          <div class="services">
          <div class="row" id="barang_box"></div></div>
          <!-- end container box barang  -->

        </div>
      </div>
    </section>
    <!-- End About Us Section -->

    <!-- ======= Riwayat  Section ======= -->
    <section id="Barang" class="services">
      <div class="container">
        <div class="section-title">
          <h2>Riwayat Peminjaman</h2>
          <p>Belum ada baragn yang dipinjam</p>
        </div>
      </div>
    </section>
    <!-- End Riwayat Section -->
    
    
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="text-center title">
          <h3>Laporan Barang</h3>
          
        </div>

        <div class="row counters">
          <div class="col-lg-3 col-6 text-center mx-auto">
            <span data-toggle="counter-up">1,463</span>
            
            <p>Jumlah Barang</p>
          </div>
          <div class="col-lg-3 col-6 text-center mx-auto">
            <span data-toggle="counter-up">15</span>
            <p>Jumlah Barang yang di pinjam</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

  </main><!-- End #main -->
  

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>JD.Co</h3>
      <div class="copyright">
        &copy; Copyright <strong><span>JD.Co</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>


  <!-- Modal -->
 




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

  <!-- Template Main JS File -->
  <script src="<?php echo base_url()?>assets/assets/js/main.js"></script>


  <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->

  <!-- load Data barang -->
  <script>
    function loadKonten(url) {
                $.ajax(url, {
                    type: 'GET',
                    success: function (data, status, xhr) {
                        var objData = JSON.parse(data);

                        $('#barang_box').html(objData.konten);
                        reload_event();
                    },
                    error: function (jqXHR, textStatus, errorMsg) {
                        alert('Error : ' + errorMsg);
                    }
                }) 
            }
            loadKonten('http://localhost:8080/backend_gudang/barang/box');
          // <!-- end load data barang  -->


          

        $(".jumlah").click(function() {
        $(".id_barang").val($(this).attr('data-id'));
        });
      
        // datemodal
        // $(document).ready(function(){
        // var date_input=$('input[name="date"]'); //our date input has the name "date"
        // var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        // date_input.datepicker({
        //   format: 'yyyy/mm/dd',
        //   container: container,
        //   todayHighlight: true,
        //   autoclose: true,
        // })
        // })
  </script>
  <!-- <script src="<?php echo base_url()?>assets/assets/js/ajax.js"></script> -->


  
</body>

</html>