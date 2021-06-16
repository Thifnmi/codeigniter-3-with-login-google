<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Quản lý địa chỉ </title>
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
          <div class="pull-left info" style="display: flex;flex-direction: column";>
            <p>Admin </p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <hr>
        </hr>
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">Menu</li>

          <li>
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
              <li><a href="<?= base_url() ?>index.php/Admin/admin/cs_sanpham"><i class="fa fa-circle-o"></i> Chỉnh sửa</a></li>
              <li><a href="<?= base_url() ?>index.php/Admin/admin/themanhspct"><i class="fa fa-circle-o"></i> Thêm ảnh chi tiết</a></li>
            </ul>
          </li>

          <li class="active treeview menu-open">
            <a href="<?= base_url() ?>index.php/Admin/admin/diachi">
              <i class="glyphicon glyphicon-home"></i> <span>Địa chỉ</span>
            </a>
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
              <li><a href="<?= base_url() ?>index.php/Admin/admin/addmember"><i class="fa fa-circle-o"></i> Thêm</a></li>
              <li><a href="<?= base_url() ?>index.php/Admin/admin/editmember"><i class="fa fa-circle-o"></i> Chỉnh sửa</a></li>
            </ul>
          </li>
        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-user"></i> <span>admin</span>
             
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

            <li><a href="<?= base_url() ?>index.php/Admin/admin/addadmin"><i class="fa fa-circle-o"></i> Thêm</a></li>
            <li><a href="<?= base_url() ?>index.php/Admin/admin/editadmin"><i class="fa fa-circle-o"></i> Chỉnh sửa</a></li>

          </ul>
        </li>
        </ul>
      </section>
    </aside>

    <div class="content-wrapper">
 
      <section class="content-header">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Thay đổi địa chỉ </h3>
          </div>
          <form method="post" action="<?= base_url() ?>index.php/Admin/admin/diachi">
            <div class="box-body">
              <div class="form-group">
                  <?php foreach ($data as $value) { ?>
                <input name="diachi" type="Text" class="form-control" value="<?php echo  $value->diachi ;?>">
              </div>
              <?php } ?>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </section>

      <section class="content-header">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Thay đổi số điện thoại </h3>
          </div>
          <form action="<?= base_url() ?>index.php/Admin/admin/diachi" method="post">
            <div class="box-body">
              <div class="form-group">
                <?php foreach ($data as  $value) { ?>
                     <input name="sodienthoai" type="number" class="form-control" value="<?php  echo $value->sodienthoai;?>">
                <?php } ?>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </section>

      <section class="content-header">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Thay đổi email </h3>
          </div>
          <form method="post" action="<?= base_url() ?>index.php/Admin/admin/diachi">
            <div class="box-body">
              <div class="form-group">
                <?php foreach ($data as $value ) {?>
                
                     <input name="email" type="Text" class="form-control" value="<?php echo $value->email ?>">

               <?php }

                ?>
               
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </section>

      <section class="content-header">
        <table class="table table-striped">
          <tr>
            <th style="width: 10px">#</th>
            <th>Địa chỉ</th>
            <th>Mail</th>
            <th>Số điện thoại</th>

          </tr>
          <?php foreach ($data as $value) : ?>

            <tr>
              <td><?= $value->stt ?></td>
              <td><?= $value->diachi ?></td>
              <td><?= $value->email ?></td>
              <td><?= $value->sodienthoai ?></td>
            </tr>


          <?php endforeach; ?>

        </table>
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