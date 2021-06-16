<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LIBRARY</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link href="<?= base_url() ?>public/img/favicon.ico" rel="icon">
    <link href="<?= base_url() ?>public/css/reset.css" rel="stylesheet" />

    <link href="<?= base_url() ?>public/admin/unicode.css" type="text/css" rel="StyleSheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?= base_url() ?>public/css/stylee.css" rel="stylesheet">
    <link href="<?= base_url() ?>public/css/style1.css" rel="stylesheet">
    <link rel="stylesheet" href=" <?= base_url() ?>public/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href=" <?= base_url() ?>public/bower_components/Ionicons/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href=" <?= base_url() ?>public/bower_components/jvectormap/jquery-jvectormap.css">
    <style>
    .login {
        background: linear-gradient(120deg, #4ea0d6, #a780b8, #4db2f5);
        background-size: 200%;
    }
    .footer {
        background: linear-gradient(120deg, #4ea0d6, #a780b8, #4db2f5);
        background-size: 200%;
    }
    </style>
</head>

<body>

    <!-- Top bar Start -->
    <div class="top-bar">

        <div class="container-fluid">
            <!-- <div class="row">
                    <div class="col-sm-6">                       
                          
                        <i class="fa fa-envelope"></i>
                            <?php foreach ($shop as $row)
                                     { ?>
                          <?php  echo $row->email; ?>
                             <?php   } ?>
                    </div>
                    <div class="col-sm-6">
                      
                                   
                        <i class="fa fa-phone-alt"></i>
                                        <?php foreach ($shop as $row)
                                     { ?>
                          <?php  echo $row->sodienthoai; ?>
                             <?php   } ?>
                                         
                    </div>
                </div> -->
        </div>
    </div>
    <!-- Top bar End -->

    <!-- Nav Bar Start -->
    <div class="nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                <a href="#" class="navbar-brand">MENU</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto">
                        <a href="<?= base_url() ?>index.php/User/user" class="nav-item nav-link active">Home</a>
                        <a href="<?= base_url() ?>index.php/User/user/muonsach" class="nav-item nav-link">Mượn Sách</a>
                        <!-- <a href="<?= base_url() ?>index.php/Product_detail" class="nav-item nav-link">Product Detail</a> -->
                        <?php  if(isset($_SESSION['tb'])){  ?>
                        <a href="<?= base_url() ?>index.php/User/user/my_account" class="nav-item nav-link">My
                            Account</a>
                        <?php       }
                            else{
                                
                            }
                            ;                                        ?>


                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">More Pages</a>
                            <div class="dropdown-menu">
                                <a href="<?= base_url() ?>index.php/Contact" class="dropdown-item">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="navbar-nav ml-auto">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php 
                        if( isset($_SESSION['tb']) ){

                          ?>
                                <?php
                          echo $_SESSION['tb'];
                      }
                      else{
                        echo "MENU";
                    }
                    ;
                    ?>

                            </a>

                            <div class="dropdown-menu">
                                <a href="<?= base_url()?>index.php/User/Login " class="dropdown-item">Login</a>
                                <a href="<?= base_url() ?>index.php/User/Register " class="dropdown-item">Register</a>
                                <a href="<?= base_url() ?>index.php/User/Logout" class="dropdown-item">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Nav Bar End -->

    <!-- Bottom Bar Start -->
    <div class="bottom-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <div class="logo">
                        <!-- <a href="index.html">
                              <?php foreach ($shop as $row) {?>                              
                              
                                <img src="<?php echo $row->logo ?>" alt="Logo">
                              <?php  } ?>
                            </a> -->
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Xử lý tìm kiếm theo tên sản phẩm -->
                    <form action="<?= base_url()?>index.php/user/Search" method="post">
                        <div class="search">
                            <input type="text" name="search" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                            <!-- <input type="submit" name="search"></div> -->
                        </div>
                    </form>
                    <!--Kết thúc Xử lý tìm kiếm theo tên sản phẩm -->
                </div>

            </div>
        </div>
    </div>
    <!-- Bottom Bar End -->