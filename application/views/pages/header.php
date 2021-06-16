<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>MĂNG TÔ SHOP</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
      
        <!-- Favicon -->
        <link href="<?= base_url() ?>public/img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>public/lib/slick/slick.css" rel="stylesheet">
        <link href="<?= base_url() ?>public/lib/slick/slick-theme.css" rel="stylesheet">
        <!-- Stylesheet -->
        <link href="<?= base_url() ?>public/css/stylee.css" rel="stylesheet">
    <!--     <script src="https://code.jquery.com/jquery-3.5.0.js"></script> -->
          <script
                  src="https://code.jquery.com/jquery-3.2.1.min.js"
                  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
                  crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

 <style type="text/css"> 

        .anhdaidien{
           width: 30px;
           height: 30px;
           border-radius:50%;
       }
       .anhtrangtri1{
        width: 275px;
        height: 400px;
       }
       .anhtrangtri2{
        width: 275px;
        height: 200px;
       }
       .anhtrungbay{
        width: 450px;
        height: 250px;
       }
       .anhnho{
        width: 100px;
        height: 150px;
       }
       .fontsize{
        font-size: 15px;
       }
       .anhsanpham
       {
         width: 170px;
        height: 310px;
       }


   </style>
    </head>

    <body>
        <!-- Top bar Start -->
        <div class="top-bar">
           
            <div class="container-fluid">
                <div class="row">
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
                </div>
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
                            <a href="<?= base_url() ?>index.php/Home" class="nav-item nav-link active">Home</a>
                            <a href="<?= base_url() ?>index.php/Product_list" class="nav-item nav-link">Products</a>
                            <!-- <a href="<?= base_url() ?>index.php/Product_detail" class="nav-item nav-link">Product Detail</a> -->
                            <?php  if(isset($_SESSION['tb'])){  ?>
                            <a href="<?= base_url() ?>index.php/Cart" class="nav-item nav-link">Cart</a>

                            <a href="<?= base_url() ?>index.php/Checkout" class="nav-item nav-link">Checkout</a>
                            <a href="<?= base_url() ?>index.php/My_account" class="nav-item nav-link">My Account</a>
                          <?php       }
                            else{
                                
                            }
                            ;
                             ?>
                          

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
                        if( isset($_SESSION['picture'])  && isset($_SESSION['tb']) ){

                          ?>

                          <img src="  <?php  echo $_SESSION['picture']; ?>"  border="2" solid class="anhdaidien"> </img>

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
                                    <a href="<?= base_url()?>index.php/Login " class="dropdown-item">Login</a>
                                    <a href="<?= base_url() ?>index.php/Register " class="dropdown-item">Register</a>
                                     <a  href="<?= base_url() ?>index.php/Logout" class="dropdown-item">Logout</a>
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
                            <a href="index.html">
                              <?php foreach ($shop as $row) {?>
                               
                              
                                <img src="<?php echo $row->logo ?>" alt="Logo">
                              <?php  } ?>
                            </a>
                        </div>
                    </div>
                   <div class="col-md-6">
                <!-- Xử lý tìm kiếm theo tên sản phẩm -->
                <form action="<?= base_url()?>index.php/Search" method="post">
                    <div class="search" >
                        <input type="text" name="search" placeholder="Search" >
                        <button ><i class="fa fa-search"></i></button> 
                        <!-- <input type="submit" name="search"></div> -->
                    </div>
                </form>
                <!--Kết thúc Xử lý tìm kiếm theo tên sản phẩm -->
            </div>
                  
                </div>
            </div>
        </div>
        <!-- Bottom Bar End -->  
