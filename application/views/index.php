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
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 100%;
 /* Should be removed. Only for demonstration */
}
.column2 {
  float: right;
  margin-top:-110px;
  width: 100%;
  }

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>


<body>

    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="<?php echo base_url() ?>assets/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                 <div class="column">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <div align="left"><h4><a href="#"><img src="<?php echo base_url() ?>assets/img/logo/satu.png" alt="" width="75px" height="75px"/></a>
                        </div>
                    </div>
                <div class="row">
                    <div class="column2">
                        <div align="right"><h4><b>Dinas Sosial Kota Batu</b></h4>
                                 <font color="white">
                                <h5>Lembaga Swadaya Masyarakat (LSM) Jawa Timur</p>
                                    <p>Balaikota Amongtani Gedung B Lantai 2</p>
                                    Jl.Panglima Sudirman No.507, Pesanggrahan Kec.Batu, Kota Batu, Jawa Timur 65314</h5></font></div>
                        <div align="right">
                        <ul class="nav navbar-top-links navbar-right pull-right">
                        <a href="<?php echo base_url('index.php/logout/out')?>" class="btn btn-danger" style="height: 50px;"><h4 style="color: white"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i>Logout</h4></a><br></ul></div>   
                        </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
</div>

    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li class="active"><a data-toggle="tab" href="#Home"><i class="notika-icon notika-house"></i> Home</a>
                        </li>
                        <?php foreach ($user as $key) { ?>
                         <?php if($key['level'] == '2') { ?> 
                        <li><a data-toggle="tab" href="#Interface"><i class="notika-icon notika-edit"></i>Laporan</a>
                        <?php } } ?>

                         <?php foreach ($user as $key) { ?>
                         <?php if($key['level'] == '1') { ?>    
                        <li><a data-toggle="tab" href="#Interface"><i class="notika-icon notika-edit"></i>Laporan</a>    
                        </li>
                        
                        <li><a data-toggle="tab" href="#Page"><i class="notika-icon notika-support"></i>Data</a>
                              <?php } } ?>
                        </li>
                        <?php foreach ($user as $key) { ?>
                        <?php if($key['level'] == '2') { ?>    
                        <li><a data-toggle="tab" href="#Page"><i class="notika-icon notika-support"></i>Profil</a>
                              <?php } } ?>
                        </li>
                        <?php foreach ($user as $key) { ?>
                        <?php if($key['level'] == '1') { ?>   
                        <li><a data-toggle="tab" href="#Charts"><i class="notika-icon notika-app"></i>Kecamatan</a>
                        <?php } } ?>    
                        </li>    
                           
                    </ul>
                  
                    <div class="tab-content custom-menu-content">
                        <div id="Home" class="tab-pane in active notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                             <li><a href='<?php echo base_url("index.php/Admin"); ?>'>Dashboard</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Interface" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <?php foreach ($user as $key) { ?>
                                <?php if($key['level'] == '2') { ?>
                                <li><a href='<?php echo base_url("index.php/ListLaporan/create/"); ?>'>Buat Laporan Kegiatan</a>
                                <?php } } ?>
                                </li>
                                <li><a href='<?php echo base_url("index.php/ListLaporan/"); ?>'>Lihat Laporan Kegiatan</a>
                                </li>
                            </ul>
                        </div>
                        <?php foreach ($user as $key) { ?>
                        <?php if($key['level'] == '1') { ?>
                        <div id="Page" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href='<?php echo base_url("index.php/ListTksk"); ?>'>Data Anggota TKSK</a>
                                </li>
                                <li><a href='<?php echo base_url("index.php/ListProfil"); ?>'>Data Profil</a>
                                </li>

                            </ul>                     
                        <?php } } ?>

                        <?php foreach ($user as $key) { ?>
                        <?php if($key['level'] == '2') { ?>
                        <div id="Page" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href='<?php echo base_url("index.php/ListProfil"); ?>'>Data Profil</a>
                                </li>
                            </ul> 
                        <?php } } ?>  
                        </div>
                        <?php foreach ($user as $key) { ?>
                        <?php if($key['level'] == '1') { ?>
                         <div id="Charts" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href='<?php echo base_url("index.php/ListKecamatan"); ?>'>Data Kecamatan</a>
                                </li>
                            </ul>
                        <?php } } ?>
                         </div>

                    </div>
                 </div>
                   
            </div>
        </div>
    </div>
 </div>
<br>
<br>
     <div class="wrapper">
        <div class="notika-status-area">
            <div class="container">
                 <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?php echo base_url() ?>assets/images/2.jpg" alt="Chania">
      <div class="carousel-caption">
        <h3>Balaikota Among Tani</h3>
        <p>Kota Batu</p>
      </div>
    </div>

    <div class="item">
      <img src="<?php echo base_url() ?>assets/images/3.jpg" alt="Chicago">
      <div class="carousel-caption">
        <h3>Shining Batu</h3>
        <p>Beautiful Batu</p>
      </div>
    </div>

    <div class="item">
      <img src="<?php echo base_url() ?>assets/images/7.jpg" alt="New York">
      <div class="carousel-caption">
        <h3>Panorama Batu</h3>
        <p>Kota Batu</p>
      </div>
    </div>
  </div>



  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
    <!-- Main Menu area End-->
    <!-- Start Status area -->
    <br>
    <?php foreach ($user as $key) { ?>
    <?php if($key['level'] == '1') { ?>
<div class="wrapper">
    <div class="notika-status-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h1>
                                <?php foreach ($jumlahtksk as $login) { ?>
                                <i class="ti-arrow-up text-success"></i> <span class="counter text-success"><?php echo $login ?></span></li>
                                <?php } ?></h1>
                            <p>Jumlah Anggota TKSK</p>
                        </div>
                        <div class="sparkline-bar-stats2">1,4,8,3,5,6,4,8,3,3,9,5</div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h1>
                                <?php foreach ($jumlahlaporan as $laporan) { ?>
                                <i class="ti-arrow-up text-success"></i> <span class="counter text-success"><?php echo $laporan ?></span></li>
                                <?php } ?></h1>
                            <p>Jumlah Laporan</p>
                        </div>
                        <div class="sparkline-bar-stats1">9,4,8,6,5,6,4,8,3,5,9,5</div>
                    </div>
                </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h1>
                                <?php foreach ($jumlahkecamatan as $kecamatan) { ?>
                                <i class="ti-arrow-up text-success"></i> <span class="counter text-success"><?php echo $kecamatan?></span></li>
                                <?php } ?></h1>
                            <p>Jumlah Kecamatan</p>
                        </div>
                        <div class="sparkline-bar-stats4">2,4,8,4,5,7,4,7,3,5,7,5</div>
                        </div>
                    </div>
               <?php } } ?>
            </div>
        </div>
    </div>
<br>
 
           
   
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
    <!-- sparkline JS
        ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
        ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url() ?>assets/js/flot/jquery.flot.resize.js"></script>
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
    <!--  animation JS
        ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/animation/animation-active.js"></script>
    <!--  Chat JS
        ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/chat/jquery.chat.js"></script>
    <!--  todo JS
        ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/todo/jquery.todo.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/main.js"></script>
    <!-- tawk chat JS
        ============================================ -->
   
</body>

</html>