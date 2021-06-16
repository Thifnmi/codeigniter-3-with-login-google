<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>

<head>
    <title>Phiếu mượn chi tiết</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
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
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href=" <?= base_url() ?>public/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href=" <?= base_url() ?>public/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href=" <?= base_url() ?>public/bower_components/Ionicons/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href=" <?= base_url() ?>public/bower_components/jvectormap/jquery-jvectormap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
   
     
</head>
<body >
   <a href="<?= base_url() ?>index.php/admin/tao_pm" class="btn btn-info btn-lg" >
          <span class="glyphicon glyphicon-chevron-left"></span>Trở về </a>
         <h1 style="color:black; text-align: center;">Thông tin phiếu mượn</h1>

        <div class="row mt-5 ms-5 me-5 border border-success " >
           
            <div class=".col-md-12">
               
                <table class="table table-bordered" style="color: #191b1b; background-color: #caedea;"  >
                        <tr style="background-color: #61949f;" >
                            <th > Tên sách</th>
                            <th>Ngày mượn</th>
                            <th> Ngày trả</th>
                            <th>Hình ảnh</th>
                            <th>Quản lý thư viện</th>

                        </tr>
                        <div>
                        <?php foreach ($detail as $value) : ?>
                        
                        <tr>
                            <td><?= $value->tensach  ?></td>
                            <td><?= $value->ngaymuon ?></td>
                            <td><?= $value->ngaytra ?></td>
                            <td><img src="<?= $value->imgb ?>" alt="" width="100px" height="100px" class="img-circle"></td>
                            <td><?= $value->quanlythuvien ?></td>
                             
                        </tr>


                        <?php endforeach; ?>
                        </div>

                    </table>
            </div>     
    </div>
    </div>
  
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>