<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <!-- font awesome CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.transitions.css">
    <!-- meanmenu CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animation/animation-custom.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/normalize.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/notika-custom-icon.css">
    <!-- wave CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/wave/waves.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
</head>

<body>
<div class="breadcomb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-20 col-md-20 col-sm-20 col-xs-20">
                <div class="breadcomb-list">
                    <center><h1>Detail Laporan</h1></center>
                        <div class="basic-tb-hd">
                            <div class="bsc-tbl-bdr">
                                <table class="table table-bordered">
                                <thead>
                                <tr class="success">
                                <th>Data</th>
                                <th>Keterangan</th><tr>  
                                <?php foreach ($laporan  as $key) {
                                ?>

<th>Tanggal</th>            <td><?php echo $key['tanggal'] ?></td><br> 
<tr>                                 
<th>Uraian Tempat</th>      <td><?php echo $key['uraian_tempat'] ?>           </td><br>
<tr>   
<th>Pelaksana</th>          <td><?php echo $key['pelaksana'] ?>         </td><br>
<tr>                     
<th>Sasaran </th>           <td><?php echo $key['sasaran'] ?>  </td><br>
<tr>                             
<th>Materi</th>             <td><?php echo $key['materi'] ?> </td><br>     
<tr>                           
<th>Hasil Kegiatan</th>     <td><?php echo $key['hasil_kegiatan'] ?> </td><br>
<tr> 
<th>Faktor Pendukung & Penghambat</th>      <td><?php echo $key['faktor_pendukung_penghambat'] ?>         </td><br><tr>

<th>Gambar Kegiatan</th>  <td><img src="<?php echo base_url('assets/uploads/'.$key['gambar']) ?>" width=150; height=150></td>
<tr>     
<th>Upaya Pemecahan</th>      <td><?php echo $key['upaya_pemecahan'] ?></td><br>
<tr> </tr>         

<?php  } ?>                                                                                      
</table>
    <center>
        <a href="<?php echo base_url('index.php/ListLaporan')?>"class="btn btn-danger">Back</a>
</center>
                               
</div>
</div>
</div>
</div>
</div>
</div>
    <!-- End Realtime sts area-->
    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">     
          <div class="col-md">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="https://www.google.com/maps/place/Social+Service+Batu+City/@-7.8661852,112.5132408,15z/data=!4m5!3m4!1s0x0:0xadce265e5e9d00de!8m2!3d-7.8661852!4d112.5132408" class="py-2 d-block"><font color="black"><h5>Alamat:</h5></font> Balai Kota Among Tani, Jl. Panglima Sudirman No.507, Pesanggrahan, Kec. Batu, Kota Batu, Jawa Timur 65314</a></li><br>
               
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <h2 class="ftco-heading-2">Jam Buka</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Thursday    7:30AM–4PM</a></li>
                <li><a href="#" class="py-2 d-block">Friday  7AM–2PM</a></li>
                <li><a href="#" class="py-2 d-block">Saturday    Closed</a></li>
                <li><a href="#" class="py-2 d-block">Sunday  Closed</a></li>
                <li><a href="#" class="py-2 d-block">Monday  7:30AM–4PM</a></li>
                <li><a href="#" class="py-2 d-block">Tuesday 7:30AM–4PM</a></li>
                <li><a href="#" class="py-2 d-block">Wednesday   7:30AM–4PM</a></li>

              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <h2 class="ftco-heading-2">Contact Us</h2>
                <div class="block-23 mb-3">
                  <ul>
                 <li><a href="#" class="py-2 d-block"><font color="black"><h5>Telepon:</h5></font>(0341) 592200</a></li>


                  </ul>
                </div>
            </div>
          </div>
        </div>
    <!-- End Footer area-->
    <!-- jquery
    ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!-- bootstrap JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <!-- wow JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/wow.min.js"></script>
    <!-- price-slider JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/counterup/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/counterup/waypoints.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- jvectormap JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jvectormap/jvectormap-active.js"></script>
    <!-- sparkline JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/sparkline/sparkline-active.js"></script>
    <!-- sparkline JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url() ?>assets/js/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url() ?>assets/js/flot/curvedLines.js"></script>
    <script src="<?php echo base_url() ?>assets/js/flot/flot-active.js"></script>
    <!-- knob JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/knob/jquery.knob.js"></script>
    <script src="<?php echo base_url() ?>assets/js/knob/jquery.appear.js"></script>
    <script src="<?php echo base_url() ?>assets/js/knob/knob-active.js"></script>
    <!--  wave JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/wave/waves.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/wave/wave-active.js"></script>
    <!--  todo JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/todo/jquery.todo.js"></script>
    <!-- plugins JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/plugins.js"></script>
  <!--  Chat JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/chat/moment.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/chat/jquery.chat.js"></script>
    <!-- main JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/main.js"></script>
  <!-- tawk chat JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/tawk-chat.js"></script>
</body>

</html>