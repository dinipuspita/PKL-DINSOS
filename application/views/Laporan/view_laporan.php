<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Laporan</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="<?php echo base_url() ?>assets/https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">

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
    <!-- summernote CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/summernote/summernote.css">
    <!-- Range Slider CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/themesaller-forms.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/normalize.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/notika-custom-icon.css">
    <!-- bootstrap select CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap-select/bootstrap-select.css">
    <!-- datapicker CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/datapicker/datepicker3.css">
    <!-- Color Picker CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/color-picker/farbtastic.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/chosen/chosen.css">
    <!-- notification CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/notification/notification.css">
    <!-- dropzone CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/dropzone/dropzone.css">
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
                        <li><a data-toggle="tab" href="#Interface"><i class="notika-icon notika-edit"></i>Laporan</a>  
                        </li>   
                        <li><a data-toggle="tab" href="#Page"><i class="notika-icon notika-support"></i>Anggota Tksk</a>
                        <li><a data-toggle="tab" href="#Charts"><i class="notika-icon notika-app"></i>Kecamatan</a>
                        </li>    
                           
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
                                <li><a href='<?php echo base_url("index.php/ListLaporan/"); ?>'>Lihat Laporan Kegiatan</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Page" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href='<?php echo base_url("index.php/ListTksk"); ?>'>Data Anggota Tksk</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Charts" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href='<?php echo base_url("index.php/ListKecamatan"); ?>'>Data Kecamatan</a>
                                </li>
                            </ul>
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
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Form Cetak Laporan </h2>
                                        <p>Laporan Kegiatn TKSK<span class="bread-ntd"></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo form_open('ListLaporan/report'); ?> 
        
        <?php echo validation_errors(); ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <div class="basic-tb-hd">
                            <h2>Print Laporan TKSK</h2><br>
                            <div class="row">
                           <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                </div>
                                <div class="bootstrap-select fm-cmp-mg">
                                        <select name="id_kecamatan" class="selectpicker">
                                        <option value="">Pilih Kecamatan</option>
                                            <?php foreach ($kecamatan as $data ){ ?>
                                            <option value="<?php echo $data['id_kecamatan']; ?>"><?php echo $data['nama_kecamatan']; ?>
                                         </option>
                                             <?php } ?>
                                    </select>
                                    </div>
                                </div>
                            </div>
                        <center>
                            <br>
                            <br>
                            <br>
                            <br>
                            <button type="submit" class="btn btn-success">Submit</button>
                            <a href="<?php echo base_url('index.php/ListLaporan')?>"class="btn btn-danger">Back</a></td>
                        </center>
                    </div>
                </div>
            </div>
        </div>

             
                    </div>
                 </div>

<?php echo form_close(); ?>

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
    <!-- Input Mask JS
        ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/jasny-bootstrap.min.js"></script>
    <!-- icheck JS
        ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/icheck/icheck.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/icheck/icheck-active.js"></script>
    <!-- rangle-slider JS
        ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/rangle-slider/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/rangle-slider/jquery-ui-touch-punch.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/rangle-slider/rangle-active.js"></script>
    <!-- datapicker JS
        ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/datapicker/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url() ?>assets/js/datapicker/datepicker-active.js"></script>
    <!-- bootstrap select JS
        ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap-select/bootstrap-select.js"></script>
    <!--  color-picker JS
        ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/color-picker/farbtastic.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/color-picker/color-picker.js"></script>
    <!--  notification JS
        ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/notification/bootstrap-growl.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/notification/notification-active.js"></script>
    <!--  summernote JS
        ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/summernote/summernote-updated.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/summernote/summernote-active.js"></script>
    <!-- dropzone JS
        ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/dropzone/dropzone.js"></script>
    <!--  wave JS
        ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/wave/waves.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/wave/wave-active.js"></script>
    <!--  chosen JS
        ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/chosen/chosen.jquery.js"></script>
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