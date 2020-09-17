<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login V16</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/login/images/icons/favicon.ico"/>
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/login/vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/login/vendor/animate/animate.css">
  <!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/login/vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/login/vendor/animsition/css/animsition.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/login/vendor/select2/select2.min.css">
  <!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css"href="<?php echo base_url()?>assets/login/vendor/daterangepicker/daterangepicker.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/login/css/util.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/login/css/main.css">
  <!--===============================================================================================-->
</head>
<body>

  <div class="limiter">
    <div class="container-login100" style="background-image: url('<?php echo base_url()?>assets/login/images/bg-02.jpg');">
      <div class="wrap-login100 p-t-30 p-b-50">
        <span class="login100-form-title p-b-41">
          Account Login
        </span>
        <form class="login100-form validate-form p-b-33 p-t-5" id="formLogin">

          <div class="form-group">
            <label for="example-email" class="col-md-12">Email</label>
            <div class="col-md-12">
              <input type="email" placeholder="email" class="form-control form-control-line form-user-input" name="email" id="example-email">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-12">Password</label>
            <div class="col-md-12">
              <input type="password" value="" name="current-password" class="form-control form-control-line form-user-input">
            </div>
          </div>

          <div class="container-login100-form-btn m-t-32">
            <button class="login100-form-btn">
              Login
            </button>
          </div>

        </form>
      </div>
    </div>
  </div>
  

  <div id="dropDownSelect1"></div>
  
  <!--===============================================================================================-->
  <script src="<?php echo base_url()?>assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  <script src="<?php echo base_url()?>assets/login/vendor/animsition/js/animsition.min.js"></script>
  <!--===============================================================================================-->
  <script src="<?php echo base_url()?>assets/login/vendor/bootstrap/js/popper.js"></script>
  <script src="<?php echo base_url()?>assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  <script src="<?php echo base_url()?>assets/login/vendor/select2/select2.min.js"></script>
  <!--===============================================================================================-->
  <script src="<?php echo base_url()?>assets/login/vendor/daterangepicker/moment.min.js"></script>
  <script src="<?php echo base_url()?>assets/login/vendor/daterangepicker/daterangepicker.js"></script>
  <!--===============================================================================================-->
  <script src="<?php echo base_url()?>assets/login/vendor/countdowntime/countdowntime.js"></script>
  <!--===============================================================================================-->
  <script src="<?php echo base_url()?>assets/login/js/main.js"></script>

  <script type="text/javascript">
  //  $("#formLogin").on('submit', function (e) {
  //    e.preventDefault();
  //    checkLogin();
  //  });

  //  function checkLogin() {
  //   var link = "http://localhost:8080/backend_gudang/user/check_login/";
  //   var dataForm = {};
  //   var allInput = $('.form-user-input');
  //   $.each(allInput, function (i, val) {
  //     dataForm[val['name']] = val['value'];
  //   });
  //   $.ajax(link, {
  //     type: 'POST',
  //     data: dataForm,
  //     success: function (data, status, xhr) {
  //       var data_str = JSON.parse(data);
  //       alert(data_str['pesan']);
  //       if (data_str['sukses'] == 'Ya') {
  //         location.replace('http://localhost:8080/client_gudang/index.php/home');
  //      }
  //    },
  //    error: function (jqXHR, textStatus, errorMsg) {
  //     alert('Error : ' + errorMsg);
  //   }
  // });
  // }

  // function setSession(user) {
  //   var link = "http://localhost:8080/client_gudang/index.php/login/setSession";
  //   var dataForm = {};
  //   dataForm['id_user'] = user['id_admin'];
  //   dataForm['email'] = user['email'];
  //   dataForm['role'] = user['role'];
  //   dataForm['username'] = user['username'];
  //   $.ajax(link, {
  //     type: 'POST',
  //     data: dataForm,
  //     success: function (data, status, xhr) {
  //       location.replace('http://localhost:8080/client_gudang/index.php/home');
  //     },
  //     error: function (jqXHR, textStatus, errorMsg) {
  //       alert('Error : ' + errorMsg);
  //     }
  //   });
  // }
</script>
