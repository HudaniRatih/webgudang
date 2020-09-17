<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <title>Loading data remotely in Select2 – CodeIgniter</title>

   <!-- Select2 CSS -->
   <!-- <link href="<?= base_url() ?>assets/select2/dist/css/select2.min.css" rel="stylesheet" /> -->

   <!-- jQuery library -->
   <!-- <script src="<?= base_url() ?>assets/jquery-3.3.1.min.js"></script> -->

   <!-- Select2 JS -->
   <!-- <script src="<?= base_url() ?>assets/select2/dist/js/select2.min.js"></script> -->
   
   
   <!-- CDN -->
   <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
   <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
  
</head>
<body>

   <!-- Select Element -->
   <select id='selUser' style='width: 200px;'>
      <option value='0'>-- Select user --</option>
   </select>

   <!-- Script -->
   <script type="text/javascript">
   
   $(document).ready(function(){

      $("#selUser").select2({
         ajax: { 
           url: 'http://localhost:8080/backend_gudang/barang/getBarang',
           type: "post",
           dataType: 'json',
           delay: 250,
           data: function (params) {
              return {
                searchTerm: params.term
              };
           },
           processResults: function (response) {
              return {
                 results: response
              };
           },
           cache: true
         }
     });
   });
   </script>
</body>
</html>