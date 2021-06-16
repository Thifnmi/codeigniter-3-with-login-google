<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Chỉnh sửa sản phẩm </title>
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
    <link rel="stylesheet" href=" <?= base_url() ?>public/dist/css/skins/_all-skins.min.css">
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> -->
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href=" <?= base_url() ?>public/dist/css/skins/_all-skins.min.css">
    <style type="text/css">
        #example2_wrapper {
            overflow-y: auto;
            height: 800px;
            overflow: auto;
            overflow-x: hidden;
        }

        #example2_wrapper thead th {
            position: sticky;
            top: 0;
            z-index: 999;
        }

        #example2_wrapper thead th {
            background: #fff;
        }

        .sizeinput {
            width: 50px;
        }

        .sizegia {
            width: 100px;
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

</head>

<body class="hold-transition skin-blue sidebar-mini" style="overflow: hidden;">
    <div class="wrapper">
        <aside class="main-sidebar">
            <section class="sidebar">
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src=" <?= base_url() ?>public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info" style="display: flex;flex-direction: column" ; style="display: flex;flex-direction: column" ;>
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
                            <i class="fa fa-dashboard"></i> <span>Thống Kê</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="<?= base_url() ?>index.php/admin/tao_pm">
                            <i class="fa fa-dashboard"></i> <span>Phiếu mượn</span>
                        </a>
                    </li>

                    <li class="active treeview menu-open">
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
                            <li class="active"><a href="<?= base_url() ?>index.php/admin/Cs_Sach"><i class="fa fa-circle-o"></i> Chỉnh sửa</a></li>
                            <li><a href="<?= base_url() ?>index.php/admin/sachmuon"><i class="fa fa-circle-o"></i> Sách
                                    đang mượn</a></li>
                        </ul>
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
                            <li><a href="<?= base_url() ?>index.php/admin/qlyuser"><i class="fa fa-circle-o"></i>
                                    User</a></li>
                            <li><a href="<?= base_url() ?>index.php/admin/addmember"><i class="fa fa-circle-o"></i>
                                    Thêm</a></li>
                        </ul>
                    </li>
                </ul>
            </section>
        </aside>

        <div class="content-wrapper">
            <section class="content">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Bảng sản phẩm</h3>
                            <form action="#" method="post" class="sidebar-form">
                                <div class="input-group">
                                    <input type="text" id="myInput" name="searchma" class="form-control" placeholder="Nhập Mã SP">
                                    <span class="input-group-btn">
                                        <button type="submit" name="search" class="btn btn-flat"><i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>

                        <div class="box-body">
                            <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                            <thead>
                                                <tr role="row">
                                                    <th style="visibility:hidden;display: none;"></th>
                                                    <th>id</th>
                                                    <th>img</th>
                                                    <th>Mã</th>
                                                    <th>Tên Sách</th>
                                                    <th>Tên nhà cung cấp</th>
                                                    <th>Tên nhà xuất bản</th>
                                                    <th>Loại</th>
                                                    <th>Tình trạng</th>
                                                    <th>Sl_tong</th>
                                                    <th>Sl_conlai</th>
                                                    <th></th>
                                                </tr>
                                            </thead>


                                            <?php foreach ($data3 as $value) : ?>
                                                <form method="post" action="#">
                                                    <tbody id="myTable">
                                                        <tr role="row" class="odd">

                                                            <td style="visibility:hidden;display: none;"><input name="id_book" type="hidden" value="<?= $value->id_book ?>"></td>
                                                            <td><?= $value->id_book ?></td>
                                                            <td><img src="<?= $value->imgb ?>" alt="" width="100px" height="100px" class="img-circle"></td>
                                                            <td><?= $value->masach ?></td>
                                                            <td><?= $value->tensach ?></td>
                                                            <td><?= $value->ten_ncc ?></td>
                                                            <td><?= $value->ten_nxb ?> </td>
                                                            <td><?= $value->loaisach ?> </td>
                                                            <td><?= $value->tinhtrang ?></td>
                                                            <td><?= $value->sl_tong ?></td>
                                                            <td><?= $value->sl_conlai ?></td>
                                                            <td><a href="<?= base_url() ?>index.php/admin/Cs_Sach?id_book=<?= $value->id_book ?>"><i class="glyphicon glyphicon-remove"></i></a>
                                                                <a href="<?= base_url() ?>index.php/admin/sach_edit/index/<?= $value->id_book ?>"><i class="glyphicon glyphicon-tag"></i></a>
                                                            </td>


                                                            <di style="visibility:hidden;display: none;">
                                                                <?= $value->id_book ?></td>
                                                                <td style="visibility:hidden;display: none;">
                                                                    <?= $value->masach ?></td>
                                                                <td style="visibility:hidden;display: none;">
                                                                    <?= $value->tensach ?></td>
                                                                <td style="visibility:hidden;display: none;">
                                                                    <?= $value->id_ncc ?></td>
                                                                <td style="visibility:hidden;display: none;">
                                                                    <?= $value->id_nxb ?></td>
                                                                <td style="visibility:hidden;display: none;">
                                                                    <?= $value->id_loai ?></td>
                                                                <td style="visibility:hidden;display: none;">
                                                                    <?= $value->tinhtrang ?></td>
                                                                <td style="visibility:hidden;display: none;">
                                                                    <?= $value->sl_tong ?></td>
                                                                <td style="visibility:hidden;display: none;">
                                                                    <?= $value->sl_conlai ?></td>

                                                        </tr>
                                                    </tbody>
                                                </form>
                                            <?php endforeach; ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
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