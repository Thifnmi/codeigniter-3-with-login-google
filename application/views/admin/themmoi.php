<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Thêm sản phẩm </title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<style>
    #options {
        display: none;
        height: 50px;
        text-align: center;
        border: 1px solid red;
        overflow-y: scroll;
    }

    #options>p {
        margin-top: 10px;
        margin-bottom: 10px;
        cursor: pointer;
    }
</style>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
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
                            <li class="active"><a href="<?= base_url() ?>index.php/admin/themmoi"><i class="fa fa-circle-o"></i> Thêm mới</a></li>
                            <li><a href="<?= base_url() ?>index.php/admin/Cs_Sach"><i class="fa fa-circle-o"></i> Chỉnh
                                    sửa</a></li>
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
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Thêm sản phẩm</h3>
                        </div>
                        <div class="box-body">
                            <form method="post" class="row" action="<?= base_url() ?>index.php/admin/Themmoi" enctype="multipart/form-data">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleI    nputPassword1">Tên</label>
                                        <input name="tensach" type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleI    nputPassword1">Nha cung cap</label>
                                        <input name="id_ncc" type="text" list="ncc" class="form-control" required>

                                        <datalist id="ncc" class="datalist scrollable" style="max-height: 50px;overflow-y: auto;">
                                            <div>
                                                <?php foreach ($data as $value) : ?>
                                                    <option value="<?= $value->id_ncc ?>"><?= $value->ten_ncc ?>

                                                    <?php endforeach; ?>
                                            </div>
                                        </datalist>
                                        <!-- <div id="options">
                                        </div> -->


                                    </div>
                                    <div class="form-group">
                                        <label for="exampleI    nputPassword1">Loai Sach</label>
                                        <input name="id_loai" type="text" list="tl" class="form-control" required>
                                        <div>
                                            <datalist id="tl">

                                                <?php foreach ($data1 as $value) : ?>
                                                    <option value="<?= $value->id_loai ?>"><?= $value->loaisach ?>

                                                    <?php endforeach; ?>

                                            </datalist>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleI    nputPassword1">Nha xuat ban</label>
                                        <input name="id_nxb" type="text" class="form-control" list="nxb" required>
                                        <datalist id="nxb">
                                            <?php foreach ($data2 as $value) : ?>
                                                <option value="<?= $value->id_nxb ?>"><?= $value->ten_nxb ?>

                                                <?php endforeach; ?>
                                        </datalist>
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="exampleI    nputPassword1">Tinh trạng</label>
                                        <input name="tinhtrang" type="text" class="form-control" required id="exampleInputPassword1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleI    nputPassword1">Số lượng</label>
                                        <input name="sl_tong" type="number" class="form-control" required id="exampleInputPassword1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleI    nputPassword1">Ảnh</label>
                                        <input name="img" type="file" class="form-control" id="exampleInputPassword1" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="them" value="ADD" class="btn btn-primary"></input>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
    <script>
        $('#ncc option').each(function() {
            $('#options').append('<p>' + $(this).val() + '</p>');
        })

        $('#options').css({
            'width': $('input[name="id_ncc"]').width()
        });
        $('input[name="id_ncc"]').click(function() {
            $('#options').show();
        });
        $('input[name="id_ncc"]').keyup(function() {
            $('#options').hide();
        });
        $('#options p').click(function() {
            $('input[name="id_ncc"]').val($(this).text());
            $('#options').hide();
        })
    </script>


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