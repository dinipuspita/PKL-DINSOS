<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Penduduk |Input Data Penduduk</title>
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
                        <li><a data-toggle="tab" href="#Interface"><i class="notika-icon notika-edit"></i>Laporan</a>
                        </li>
                        <li><a data-toggle="tab" href="#Page"><i class="notika-icon notika-support"></i>Profil</a>
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
                                <li><a href='<?php echo base_url("index.php/ListLaporan/create/"); ?>'>Buat Laporan Kegiatan</a>
                                </li>
                                <li><a href='<?php echo base_url("index.php/ListLaporan/"); ?>'>Lihat Laporan Kegiatan</a>
                                </li>
                            </ul>
                        </div>
                         <div id="Page" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href='<?php echo base_url("index.php/ListProfil"); ?>'>Data Profil</a>
                                </li>
                            </ul> 
                </div>
            </div>
        </div>
    </div>
</div>
<br>
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
                                        <h2>Buat Laporan </h2>
                                        <p>Buat Laporan Kegiatan TKSK <span class="bread-ntd"></span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-report">
                                    <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <?php echo form_open_multipart('ListLaporan/update/'.$this->uri->segment(3)); 
        ?>

             <?php echo validation_errors(); ?>

        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <div class="basic-tb-hd">
                            <h2>Data Pelaksanaan</h2><br>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal Kegiatan(DD-MM-YYYY)" value="<?php echo $laporan[0]->tanggal?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-map"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" id="uraian_tempat" name="uraian_tempat" placeholder="Uraian Tempat" value="<?php echo $laporan[0]->uraian_tempat?>">
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" id="pelaksana" name="pelaksana" placeholder="Pelaksana" value="<?php echo $laporan[0]->pelaksana?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" id="sasaran" name="sasaran" placeholder="Sasaran" value="<?php echo $laporan[0]->sasaran?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" id="materi" name="materi" placeholder="Materi" value="<?php echo $laporan[0]->materi?>">
                                    </div>
                                </div>
                            </div>
                         </div>
                     <br>
                     <font color="red"><i>* Wajib diisi</i></font>
                    <br>
                </div>
            </div>
        </div>
            <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <div class="basic-tb-hd">
                            <h2>Data Kegiatan</h2><br>
                            <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" id="hasil_kegiatan" name="hasil_kegiatan" placeholder="Hasil Kegiatan"value="<?php echo $laporan[0]->hasil_kegiatan?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" id="faktor_pendukung_penghambat" name="faktor_pendukung_penghambat" placeholder="Faktor Pendukung & Penghambat" value="<?php echo $laporan[0]->faktor_pendukung_penghambat?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" id="upaya_pemecahan" name="upaya_pemecahan" placeholder="Upaya Pemecahan Masalah" value="<?php echo $laporan[0]->upaya_pemecahan?>">
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" id="rencana_kerja" name="rencana_kerja" placeholder="Rencana Kerja" value="<?php echo $laporan[0]->rencana_kerja?>">
                                    </div>
                                </div>
                            </div>
                             <label for="">Foto Kegiatan</label>
                            <img src="<?php echo base_url('assets/uploads/'.$laporan[0]->gambar) ?>" width=200; height=200>
                            <input type="file" name="gambar" size="20"/>
                         </div>
                    <br>
                     <font color="red"><i>* Wajib diisi</i></font>
                    <br>
                    <center>
                    <button type="submit" class="btn btn-success">Submit <span class="glyphicon glyphicon-send"></button></span>
                            <a href="<?php echo base_url('index.php/ListLaporan')?>"class="btn btn-danger">Back <span class="glyphicon glyphicon-arrow-left"></a></span></td>
                        </center>
                        </div>
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
</body>

</html>