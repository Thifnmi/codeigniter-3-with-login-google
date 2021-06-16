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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
    <aside class="main-sidebar">
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-left image">
                    <img src=" <?= base_url() ?>public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info" style="display: flex;flex-direction: column" ;>
                    <?php echo $_SESSION['tb'] ?>
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

                <li class="active ">
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
        <section class="content">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tạo phiếu mượn</h3>
                    </div>
                    <div class="box-body">
                        <form method="post" class="row" action="<?= base_url() ?>index.php/admin/tao_pm" enctype="multipart/form-data">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Mượn sách</label>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Sách
                                        </button>
                                        <div class="dropdown-menu scrollable-menu">
                                            <?php foreach ($dt as $value) : ?>
                                                <input class="dropdown-item" name="masach[]" type="checkbox" value="<?= $value->masach ?>">
                                                <label for="<?= $value->masach ?>">
                                                    <?= $value->tensach ?></label><br>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Thông tin người mượn</label>
                                        <input name="id_account" type="text" list="user" class="form-control">
                                        <datalist id="user">
                                            <?php foreach ($dt2 as $value) : ?>
                                                <option value="<?= $value->id_account ?>">
                                                    <?= $value->fullname ?>,<?= $value->phone ?>
                                                <?php endforeach; ?>
                                        </datalist>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Ngày trả</label>
                                        <input name="ngaytra" type="date" class="form-control" list="nxb">

                                    </div>

                                    <div>
                                        <input type="submit" name="them" value="ADD" class="btn btn-primary"></input>
                                    </div>

                                    <div class="form-group" style="visibility: hidden;">
                                        <label for="exampleInputPassword1">Người cho mượn</label>
                                        <input name="quanlythuvien" type="text" list="admin" class="form-control" value="<?php echo $_SESSION['tb'] ?>" id="exampleInputPassword1">
                                    </div>
                        </form>
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                <div class="col-md-12">
                    <section class="content-header" style="overflow-y: auto;height: 300px;">
                        <h3 class="box-title">Bảng phiếu mượn</h3>
                        <form action="#" method="post" class="sidebar-form">
                            <div class="input-group">
                                <input type="text" id="myInput" name="searchma" class="form-control" placeholder="Nhập tên">
                                <span class="input-group-btn">
                                    <button type="submit" name="search" class="btn btn-flat"><i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                        <table class="table table-striped">
                            <tr>
                                <th style="width: 10px;">STT</th>
                                <th> Tên </th>
                                <th>Ngày mượn</th>
                                <th> Ngày trả</th>
                                <th>Quản lý thư viện</th>
                                <th>Thao tác</th>
                                <th>Update</th>


                            </tr>
                            <div>
                                <?php $i = 0;
                                foreach ($data5 as $value) : ?>
                                    <form method="post" action="#">
                                        <tbody id="myTable">
                                            <tr role="row" class="odd">

                                            <tr><td style="display:none"><input name="id_muon" type="text" value="<?= $value->id_muon ?>"></td>
                                                <td><?= ++$i ?></td>
                                                <td><?= $value->fullname  ?></td>
                                                <td><?= $value->ngaymuon ?></td>
                                                <td><?= $value->ngaytra ?></td>
                                                <td><?= $value->quanlythuvien ?></td>
                                                <td><a href="<?= base_url() ?>index.php/admin/tao_pm?id_muon=<?= $value->id_muon ?>"><i class="glyphicon glyphicon-erase"></i></a>
                                                    <a href="<?= base_url() ?>index.php/admin/phieumuonchitiet/phieumuonchitiet/<?= $value->id_muon ?>">
                                                        <i class="glyphicon glyphicon-tag"></i>
                                                    </a>
                                                </td>
                                        <td><input type="submit" name="cap_nhat" value="ok" class="btn btn-primary">
                                                </td>
                                                
                                            </tr>
                                            </tr>
                                        </tbody>
                                    </form>


                                <?php endforeach; ?>
                            </div>

                        </table>
                    </section>
                </div>

                <div class="col-md-12" style="
    border: 1px solid;
">
                    <h3 class="box-title" style="padding-left: 15px;padding-bottom: 4px;border-bottom: 2px #222d32 solid;">Bảng phiếu mượn chờ xác nhận</h3>
                    <section class="content-header" style="overflow-y: auto;height: 300px;">
                        <table class="table table-striped">
                            <tr>
                                <th style="width: 10px">STT</th>
                                <th> Tên </th>
                                <th>Ngày mượn</th>
                                <th> Ngày trả</th>
                                <th>Xác nhận/Chi tiết</th>

                            </tr>
                            <?php $i = 0;
                            foreach ($dt4 as $value) : ?>
                                <form action="#" method="post">
                                    <tr>
                                        <td style="display:none"><input name="id_muon2" type="text" value="<?= $value->id_muon ?>"></td>
                                        <td style="display:none"><input name="nguoitao" type="text" value="<?= $_SESSION['tb'] ?>"></td>
                                        <td style="display:none"><input name="masach" type="text" value="<?= $value->masach ?>"></td>
                                        <td style="display:none"><input name="id_account" type="text" value="<?= $value->id_account ?>"></td>
                                        <td style="display:none"><input name="ngaytra" type="text" value="<?= $value->ngaytra ?>"></td>
                                        <td style="display:none"><input name="quanlythuvien" type="text" value="<?= $value->quanlythuvien ?>"></td>


                                        <td><?= ++$i ?></td>
                                        <td><?= $value->fullname ?></td>
                                        <td><?= $value->ngaymuon ?></td>
                                        <td><?= $value->ngaytra ?></td>
                                        <td><input type="submit" name="xac_nhan" value="ok" class="btn btn-primary">
                                            
                                            <a href="<?= base_url() ?>index.php/admin/phieumuonchitiet/phieumuonchitiet/<?= $value->id_muon ?>">
                                                <i class="glyphicon glyphicon-tag"></i>
                                                </a>
                                        </td>

                                    </tr>
                                </form>

                            <?php endforeach; ?>

                        </table>
                    </section>
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