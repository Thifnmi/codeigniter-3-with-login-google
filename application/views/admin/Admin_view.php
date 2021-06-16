<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home </title>
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
    <style type="text/css">
    .table-dark th {
        position: sticky;
        top: 0;
        background-color: #fff;
    }
    </style>
</head>

<body class="hold-transition skin-blue sidebar-mini" style="overflow: hidden;">
    <aside class="main-sidebar">
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-left image">
                    <img src=" <?= base_url() ?>public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info" style="display: flex;flex-direction: column";>
                    <?php echo $_SESSION['tb'] ?>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <hr>
            </hr>
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">Menu</li>
                <li class="active ">
                    <a href="<?= base_url() ?>index.php/Admin/admin">
                        <i class="fa fa-dashboard"></i> <span>Thống Kê</span>
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
                        <span class="label label-success"></span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?= base_url() ?>index.php/admin/themmoi"><i class="fa fa-circle-o"></i> Thêm
                                mới</a></li>
                        <li><a href="<?= base_url() ?>index.php/admin/Cs_Sach"><i class="fa fa-circle-o"></i> Chỉnh
                                sửa</a></li>
                        <li><a href="<?= base_url() ?>index.php/admin/sachmuon"><i class="fa fa-circle-o"></i> Sách đang
                                mượn </a></li>
                    </ul>
                </li>
                <li>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="glyphicon glyphicon-user"></i> <span>Member</span>
                        <span class="label label-success"></span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?= base_url() ?>index.php/admin/qlyuser"><i class="fa fa-circle-o"></i> User</a>
                        </li>
                        <li><a href="<?= base_url() ?>index.php/admin/addmember"><i class="fa fa-circle-o"></i> Thêm</a>
                        </li>

                    </ul>
                </li>
            </ul>
        </section>
    </aside>

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Thống kê
            </h1>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Số mã sản phẩm</span>
                            <span class="info-box-number"><?= $data1[0]->dem ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Số tài khoản</span>
                            <span class="info-box-number"><?= $data[0]->dem ?></span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12" style="overflow-y: auto;height: 800px;">
                    <table class="table">
                        <thead class="table table-dark">
                            <tr role="row">
                                <th></th>
                                <th>masach</th>
                                <th>tensach</th>
                                <th>ten_ncc</th>
                                <th>ten_nxb</th>
                                <th>loaisach</th>
                                <th>tinhtrang</th>
                                <th>sl_tong</th>
                                <th>sl_conlai</th>
                                <th>img</th>
                            </tr>
                        </thead>
                        <?php $i = 0;
            foreach ($data2 as $value) {
              if ($i % 2 == 0) { ?>

                        <form method="post" action="<?= base_url() ?>index.php/Admin/admin">
                            <tbody>
                                <tr role="row" class="active">
                                    <td><input type="hidden" name="stt" value="<?= $value->id_book ?>"></td>
                                    <td><?= $value->masach ?></td>
                                    <td><?= $value->tensach ?></td>
                                    <td><?= $value->ten_ncc ?></td>
                                    <td><?= $value->ten_nxb ?></td>
                                    <td><?= $value->loaisach ?></td>
                                    <td><?= $value->tinhtrang ?></td>
                                    <td><?= $value->sl_tong ?></td>
                                    <td><?= $value->sl_conlai ?></td>
                                    <td><img src="<?= $value->imgb ?>" alt="" width="100px" height="100px"
                                            class="img-circle"></td>
                                </tr>
                            </tbody>
                        </form>
                        <?php } else {
              ?><form method="post" action="<?= base_url() ?>index.php/Admin/admin">
                            <tbody>
                                <tr role="row" class="warning">
                                    <td><input type="hidden" name="stt" value="<?= $value->id_book ?>"></td>
                                    <td><?= $value->masach ?></td>
                                    <td><?= $value->tensach ?></td>
                                    <td><?= $value->ten_ncc ?></td>
                                    <td><?= $value->ten_nxb ?></td>
                                    <td><?= $value->loaisach ?></td>
                                    <td><?= $value->tinhtrang ?></td>
                                    <td><?= $value->sl_tong ?></td>
                                    <td><?= $value->sl_conlai ?></td>
                                    <td><img src="<?= $value->imgb ?>" alt="" width="100px" height="100px"
                                            class="img-circle"></td>
                                </tr>
                            </tbody>
                        </form>
                        <?php }
              $i++;
            } ?>
                    </table>
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