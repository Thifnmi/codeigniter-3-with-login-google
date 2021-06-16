<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Phiếu mượn </title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href=" <?= base_url() ?>public/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href=" <?= base_url() ?>public/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href=" <?= base_url() ?>public/bower_components/Ionicons/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href=" <?= base_url() ?>public/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href=" <?= base_url() ?>public/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href=" <?= base_url() ?>public/dist/css/skins/_all-skins.min.css">
    <link href="<?= base_url() ?>public/img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>public/lib/slick/slick.css" rel="stylesheet">
    <link href="<?= base_url() ?>public/lib/slick/slick-theme.css" rel="stylesheet">
    <!-- Stylesheet -->
    <link href="<?= base_url() ?>public/css/stylee.css" rel="stylesheet">
    <!--     <script src="https://code.jquery.com/jquery-3.5.0.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>    
    
    <style type="text/css">
    .table-dark th {
        position: sticky;
        top: 0;
        background-color: #fff;
    }
    .scrollable-menu {
    height: auto;
    max-height: 200px;
    overflow-x: hidden;
    width: 400px;
}
    </style>
</head>

<body class="hold-transition skin-blue sidebar-mini" style="overflow: hidden;">
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
                <a href="<?= base_url() ?>index.php/User/user/my_account" class="nav-item nav-link">My Account</a>
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
                        <a href="<?= base_url() ?>index.php/Register " class="dropdown-item">Register</a>
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
            <form action="<?= base_url()?>index.php/Search" method="post">
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
    <div class="content-wrapper">
        <section class="content">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tạo phiếu mượn</h3>
                    </div>
                    <div class="box-body">
                        <form method="post" class="row" action="<?= base_url() ?>index.php/User/user/muonsach"
                            enctype="multipart/form-data">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Mã sách</label>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-secondary dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Sách
                                        </button>
                                        <div class="dropdown-menu scrollable-menu">
                                            <?php foreach ($dt as $value) : ?>
                                            <input class="dropdown-item"name="masach[]" type="checkbox" value="<?= $value->masach ?>">
                                            <label for="<?= $value->masach ?>">
                                                <?= $value->tensach ?></label><br>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleI    nputPassword1">Thong tin nguoi muon</label>                                    
                                    <?php if(isset($_SESSION['tb'])){ ?>  
                                        <input name="name" type="text" value="<?=  $_SESSION['tb'] ?> " class="form-control">
                                        <input name="id_account" type="hidden" value="<?=  $_SESSION['id'] ?> " class="form-control">

                                    <?php }?>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="exampleI    nputPassword1">Nguoi cho muon</label>
                                    <input name="quanlythuvien" type="text" list="admin" class="form-control"
                                        id="exampleInputPassword1">
                                    <datalist id="admin">
                                        <?php foreach ($dt3 as $value) : ?>
                                        <option value="<?= $value->fullname?>">
                                            <?php endforeach; ?>
                                    </datalist>
                                </div>
                                <div>
                                    <input type="submit" name="them" value="ADD" class="btn btn-primary"></input>
                                </div>
                            </div>                            
                                
                        </form>
                    </div>
                </div>
            </div>


        </section>
    </div>

    <!-- jQuery 3 -->
    <script src=" <?= base_url() ?>public/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src=" <?= base_url() ?>public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src=" <?= base_url() ?>public/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src=" <?= base_url() ?>public/dist/js/adminlte.min.js"></script>
    <!-- Sparkline -->
    <script src=" <?= base_url() ?>public/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- jvectormap  -->
    <script src="<?= base_url() ?>public/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?= base_url() ?>public/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- SlimScroll -->
    <script src=" <?= base_url() ?>public/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- ChartJS -->
    <script src=" <?= base_url() ?>public/bower_components/chart.js/Chart.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src=" <?= base_url() ?>public/dist/js/pages/dashboard2.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=" <?= base_url() ?>public/dist/js/demo.js"></script>
</body>

</html>