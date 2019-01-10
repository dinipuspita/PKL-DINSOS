<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Laporan|Data Laporan</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.transitions.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/meanmenu/meanmenu.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jvectormap/jquery-jvectormap-2.0.3.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/notika-custom-icon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/wave/waves.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/wave/waves.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/wave/button.css">
    <script src="<?php echo base_url() ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    
       <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="<?php echo base_url() ?>assets/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <div align="left"><h4><a href="#"><img src="<?php echo base_url() ?>assets/img/logo/satu.png" alt="" width="50px" height="50px"/></a>
                        </div>
                            <div align="left"><h4><b>Dinas Sosial Kota Batu</b></h4>
                                 <font color="white">
                                <h5>Lembaga Swadaya Masyarakat (LSM) Jawa Timur</p>
                                    Balaikota Amongtani Gedung B Lantai 2</p>
                                    Jl.Panglima Sudirman No.507, Pesanggrahan Kec.Batu, Kota Batu, Jawa Timur 65314</h5></font></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->

    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li class="active"><a data-toggle="tab" href="#Home"><i class="notika-icon notika-house"></i> Home</a>
                        </li>
                        <li><a data-toggle="tab" href="#Interface"><i class="notika-icon notika-edit"></i> Buat Laporan</a>
                        </li>
                       <!--  <li><a data-toggle="tab" href="#Charts"><i class="notika-icon notika-app"></i> Bantuan</a>
                        </li>
                        <li><a data-toggle="tab" href="#Tables"><i class="notika-icon notika-windows"></i> Desa</a>
                        </li>
                        <li><a data-toggle="tab" href="#Page"><i class="notika-icon notika-support"></i> Penduduk</a>
                        </li> -->
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
                                <li><a href='<?php echo base_url("index.php/ListLaporan/create/"); ?>'>Buat Laporan Kegiatan</a>
                                </li>
                                <li><a href='<?php echo base_url("index.php/ListLaporan/"); ?>'>Lihat Laporan Kegiatan</a>
                                </li>
                            </ul>
                        </div>
                       <!--  <div id="Charts" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href='<?php echo base_url("index.php/ListBantuan"); ?>'>Data Bantuan</a>
                                </li>
                                <li><a href="bar-charts.html">Syarat & Ketentuan</a>
                                </li>
                                <li><a href="line-charts.html">Cek Penduduk</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Tables" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href='<?php echo base_url("index.php/ListDesa"); ?>'>Data Desa</a>
                                </li>
                                <li><a href='<?php echo base_url("index.php/ListKepalaDesa"); ?>'>Data Kepala Desa</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Forms" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="form-elements.html">Form Elements</a>
                                </li>
                                <li><a href="form-components.html">Form Components</a>
                                </li>
                                <li><a href="form-examples.html">Form Examples</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Page" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href='<?php echo base_url("index.php/ListPenduduk"); ?>'>Data Penduduk</a>
                                </li>
                                <li><a href="invoice.html">Tambah Penduduk</a>
                                </li>
                                <li><a href="typography.html">Cek Penduduk</a>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
   <div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Data Laporan</h2>
                                        <p>Data Laporan Kegiatan Tenaga Kesejahteraan Sosial Masyarakat(TKSK) <span class="bread-ntd"></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                       <div class="normal-table-list mg-t-30">
                         <div class="basic-tb-hd">
                              <div class="bsc-tbl-bdr">
                                 <table class="table table-bordered">

                                <br><br>
                                    <thead>
                                        <tr>
                                            <tr class="success">
                                            <th>No</td>
                                            <th>Hari/Tanggal</th>
                                            <th>Uraian dan Tempat Kegiatan</th>
                                            <th>Pelaksana Kegiatan</th>
                                            <th>Sasaran 1) dan Pihak yang dilibatkan 2)</th>
                                            <th>Materi</th>
                                            <th>Hasil Kegiatan</th>
                                            <th>Faktor Pendukung & Penghambat</th>
                                            <th>upaya Pemecahan Masalah</th>
                                            <th>Rencana Kerja Berikut</th>
                                            <th>Options</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php $no=1; ?>
                                               <?php foreach ($laporan as $key) {
                                            ?>
                                        
                                          <td><?php echo $no ?></td>
                                          <td><?php echo $key['tanggal'] ?></td>
                                          <td><?php echo $key['uraian_tempat'] ?></td>
                                          <td><?php echo $key['pelaksana'] ?></td>
                                          <td><?php echo $key['sasaran'] ?></td>
                                          <td><?php echo $key['materi'] ?></td>
                                          <td><?php echo $key['hasil_kegiatan'] ?></td>
                                          <td><?php echo $key['faktor_pendukung_penghambat'] ?></td>
                                          <td><?php echo $key['upaya_pemecahan'] ?></td>
                                          <td><?php echo $key['rencana_kerja'] ?></td>

                                      <!--   <div class="button-icon-btn button-icon-btn-cl sm-res-mg-t-30">

                                        <td><a href="<?php echo base_url('index.php/listLaporan/update/'.$key['id_laporan'])?>" class="btn btn-cyan cyan-icon-notika btn-reco-mg btn-button-mg" data-toggle="tooltip" data-placement="left" title="Edit Data"><i class="notika-icon notika-checked"></i></button></a>

                                        <a href="<?php echo base_url('index.php/listLaporan/delete/'.$key['id_laporan'])?>" class="btn btn-danger danger-icon-notika btn-reco-mg btn-button-mg" data-toggle="tooltip" data-placement="bottom" title="Delete Data"><i class="notika-icon notika-close"></i></button></a>
                                        </div> -->
                                            
                                            </td>
                                              <td><a href="<?php echo base_url('index.php/ListLaporan/update/' .$key['id_laporan'])?>" class="btn btn-info">Edit <span class="glyphicon glyphicon-pencil"></a>

                                            
                                              <a href="<?php echo base_url('index.php/ListLaporan/delete/' .$key['id_laporan'])?>" class="btn btn-danger">Delete<span class="glyphicon glyphicon-trash"></a></td>    
                                      </tr> 
                                    </tbody>
                                <?php $no++ ?>
                                    <?php  } ?>
                                </table>
                            </div>
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
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2018 
. Sistem Pelayanan Bantuan dan Pengajuan SKTM</a>.</p>
                    </div>
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
    <script src="<?php echo base_url() ?>assets/js/tawk-chat.js"></script>
</body>

</html>