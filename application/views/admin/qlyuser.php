<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quản lý Người dùng </title>
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
                        <?php echo $_SESSION['tb'] ?>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <hr>
                </hr>
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">Menu</li>

                    <li>
                        <a href="<?= base_url() ?>index.php/Admin/admin">
                            <i class="fa fa-dashboard"></i> <span>Thống kê</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="<?= base_url() ?>index.php/admin/tao_pm">
                            <i class="fa fa-dashboard"></i> <span>Phiếu mượn</span>
                        </a>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="glyphicon glyphicon-list-alt"></i> <span>Sách</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?= base_url() ?>index.php/admin/themmoi"><i class="fa fa-circle-o"></i> Thêm
                                    mới</a></li>
                            <li><a href="<?= base_url() ?>index.php/admin/Cs_Sach"><i class="fa fa-circle-o"></i> Chỉnh
                                    sửa</a></li>
                            <li><a href="<?= base_url() ?>index.php/admin/sachmuon"><i class="fa fa-circle-o"></i> Sách
                                    đang mượn</a></li>
                        </ul>
                    </li>

                    <li class="treeview active">
                        <a href="#">
                            <i class="glyphicon glyphicon-user"></i> <span>Member</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu active">
                            <li class="active"><a href="<?= base_url() ?>index.php/admin/qlyuser"><i class="fa fa-circle-o"></i> User</a></li>
                            <li><a href="<?= base_url() ?>index.php/admin/addmember"><i class="fa fa-circle-o"></i>
                                    Thêm</a></li>

                        </ul>
                    </li>

                </ul>
            </section>
        </aside>

        <div class="content-wrapper">
            <section class="content-header">
                <div>
                    <h2>Danh sach user muon sach</h2>
                </div>
                <table class="table table-striped">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>FullName</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>TT</th>

                    </tr>
                    <?php $i = 0;
                    foreach ($data5 as $value) : ?>
                        <form action="#" method="post">

                            <tr>
                                <td style="display:none"><input name="id_account1" type="text" value="<?= $value->id_account ?>"></td>
                                <td><?= ++$i ?></td>
                                <td><?= $value->fullname ?></td>
                                <td><?= $value->email ?></td>
                                <td><?= $value->phone ?></td>
                                <td><input type="submit" name="sua" value="sửa" class="btn btn-primary">
                                    <a href="<?= base_url() ?>index.php/admin/qlyuser?id_account1=<?= $value->id_account ?>">
                                        <i class="glyphicon glyphicon-remove"></i>
                                    </a>
                                </td>
                            </tr>

                        </form>

                    <?php endforeach; ?>

                </table>
            </section>

            <div class="content-header">
                <div>
                    <h2>Danh sach user cho duyet tao tk</h2>
                </div>
                <table class="table table-striped">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>FullName</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>username</th>
                        <th>password</th>
                        <th>TT</th>

                    </tr>
                    <?php $i = 0;
                    foreach ($data4 as $value) : ?>
                        <form action="#" method="post">
                            <tr>

                                <td style="display:none"><input name="id_account" type="text" value="<?= $value->id_account ?>"></td>
                                <td><?= ++$i ?></td>
                                <td><?= $value->fullname ?></td>
                                <td><?= $value->email ?></td>
                                <td><?= $value->phone ?></td>
                                <td><?= $value->username ?></td>
                                <td><?= $value->password ?></td>
                                <td><input type="submit" name="xac_nhan" value="ok" class="btn btn-primary">
                                    <a href="<?= base_url() ?>index.php/admin/qlyuser?id_account=<?= $value->id_account ?>">
                                        <i class="glyphicon glyphicon-remove"></i>
                                    </a>
                                </td>
                            </tr>
                        </form>
                    <?php endforeach; ?>

                </table>
            </div>
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