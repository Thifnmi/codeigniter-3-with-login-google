<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Thêm thành viên </title>
    <!-- Tell the browser to be responsive to screen width -->
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
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href=" <?= base_url() ?>public/dist/css/skins/_all-skins.min.css">

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <aside class="main-sidebar">
            <section class="sidebar">
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src=" <?= base_url() ?>public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info" style="display: flex;flex-direction: column;">
                        <p>Admin </p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <hr>
                </hr>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu</li>
        <li class=" ">
          <a href="<?= base_url() ?>index.php/Admin/admin">
            <i class="fa fa-dashboard"></i> <span>Thống Kê</span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-list-alt"></i> <span>Sản phẩm</span>
            <span class="label label-success"><?= $data3[0]->dem ?></span> 
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url() ?>index.php/admin/themmoi"><i class="fa fa-circle-o"></i> Thêm mới</a></li>
            <li><a href="<?= base_url() ?>index.php/admin/cs_sanpham"><i class="fa fa-circle-o"></i> Chỉnh sửa</a></li>
            <li><a href="<?= base_url() ?>index.php/admin/themanhspct"><i class="fa fa-circle-o"></i> Thêm ảnh chi tiết</a></li>
          </ul>
        </li>
       
        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-user"></i> <span>Member</span>
            <span class="label label-success"><?= $data4[0]->dem2 ?></span> 
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

            <li><a href="<?= base_url() ?>index.php/admin/addmember"><i class="fa fa-circle-o"></i> Thêm</a></li>
            <li><a href="<?= base_url() ?>index.php/admin/editmember"><i class="fa fa-circle-o"></i> Chỉnh sửa</a></li>

          </ul>
        </li>
        <!-- admin -->
        <li class="active treeview menu-open">
          <a href="#">
            <i class="glyphicon glyphicon-user"></i> <span>admin</span>
             
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

            <li class="active"><a href="<?= base_url() ?>index.php/admin/addadmin"><i class="fa fa-circle-o"></i> Thêm</a></li>
            <li><a href="<?= base_url() ?>index.php/admin/editadmin"><i class="fa fa-circle-o"></i> Chỉnh sửa</a></li>

          </ul>
        </li>

      </ul>
            </section>
        </aside>

        <div class="content-wrapper">
            <section class="content">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Thêm tài khoản admin</h3>
                        </div>

                        <div class="box-body">
                            <form method="post" action="#">
                                <div class="form-group">
                                    <label>username</label>
                                    <input name="username" type="text" class="form-control" placeholder="nhập username">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleI    nputPassword1">Password</label>
                                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="nhập Password">
                                </div>
                                <div>
                                    <input type="submit" name="them" value="ADD" class="btn btn-success "></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>

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