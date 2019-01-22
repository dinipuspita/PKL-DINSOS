<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Form Login</title>
    <link rel="stylesheet" media="all"  type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" media="all"  type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.css">
    <link rel="stylesheet" media="all"  type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap-theme.css">
    </head>
    <body>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login System</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color:#eee;
        }
        .row {
            margin:100px auto;
            width:300px;
            text-align:center;
        }
        .login {
            background-color:#fff;
            padding:20px;
            margin-top:-180px;
        }
        body {
            background-image: url('uploads/profil.png');
        }
    </style>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body> 
<center>
     <div class="row">
            <div class="body">

    <h4><img src="<?php echo base_url() ?>assets/img/logo/satu.png" width="100px" height="120px"/></a>  
<font color="teal"><div align="center"><h4><b>Dinas Sosial Kota Batu</b></h4></font> 
                    
                    <h5>Lembaga Swadaya Masyarakat (LSM) Jawa Timur</p>
                        Balaikota Amongtani Gedung B Lantai 2</p>
                        Jl.Panglima Sudirman No.507, Pesanggrahan </p>
                    Kec.Batu, Kota Batu, Jawa Timur 65314</h5></font></div>
            </center> 

     <?php echo form_open('Register/create') ?>
        <?php echo validation_errors(); ?>     
    
    <div class="container">
        <div class="row">
            <div class="login">
                <div class="form-group">

    <font color="teal"><div align="center"><h2><b>Form Registrasi</b></h2></font><br>
                    <label form="kecamatan">Pilih Kecamatan</label>
            <select name="fk_kecamatan" class="form-control">
                <option value="">-----pilih------</option>
                <?php foreach ($kecamatan as $data ){ ?>
                <option value="<?php echo $data['id_kecamatan']; ?>"><?php echo $data['nama_kecamatan'] ?>
                    
                </option>
                
                <?php } ?>
            </select>
            <br>

            <form role="form" action="" method="post">
                    <div class="form-group">
                        <input type="text"  id="nama_lengkap" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" required autofocus />
                    </div>
                    <div class="form-group">
                        <input type="text"  id="username" name="username"  class="form-control" id="username" placeholder="Username" required autofocus />
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required autofocus />
                    </div>
                    <div class="form-group">
                        <input type="password" id="konfirmasi" name="konfirmasi"  class="form-control" id="password" placeholder="Konfirmasi Password" required autofocus />
                    </div>
                    <div class="form-group">
                        <input type="text" id="email" name="email" class="form-control"  placeholder="Email" required autofocus />
                    </div>
                
                <br>
                <button type="submit" class="btn btn-success">Register</button>
                <a href="<?php echo base_url('index.php/login/')?>" class="btn btn-danger" >Back</a></td>

        </div>
                    </div> 
                </div>
            </div>

    <?php echo form_close(); ?>
    <!-- Login Register area End-->
    <!-- jquery
        ============================================ -->
 <!--  -->
</body>

</html>