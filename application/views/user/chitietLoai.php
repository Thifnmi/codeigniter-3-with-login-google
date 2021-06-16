<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>

<head>
    <title>wpSearchSimple</title>
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
</head>

<body leftmargin="0" topmargin="0" ms_positioning="GridLayout">
    <form name="Form2" method="post" action="wpSearchListEdataGroup.aspx?Id=1" id="Form2">

        <div class="centerPage">
            <div class="box-center">
                <h1>
                    <img src="<?= base_url() ?>public/images/icon-libol.png" width="30" height="35" />BỘ SƯU TẬP TÀI
                    LIỆU SỐ
                </h1>
                <div id="panDetail">
                    <table cellspacing="2" cellpadding="2" width="99%" border="0" align="center">
                        <!-- <?php foreach($detail as $row){?>
                        <tr>
                            <td align="center">
                                <span id="lblName" style="font-size:18px;font-weight:bold;"><?= $row->loaisach ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <img id="imgAttach" src="<?= $row->img ?>"
                                    style="border-width:0px;height: 250px; border-width: 0px;" />
                            </td>
                        </tr>
                        <?php
                    }?> -->

                        <tr>
                            <td>
                                <span id="lblContent">
                                    <p><span style="font-size:18px"><span
                                                style="font-family:Times New Roman,Times,serif"><strong>BST Địa chí Hà
                                                    Nội </strong>bao gồm <strong>2.596</strong>&nbsp;tên sách
                                                với&nbsp;<strong>241.276</strong>&nbsp;trang&nbsp;tài liệu về Hà Nội với
                                                nhiều loại hình (</span><span
                                                style="font-family:Times New Roman,Times,serif">bản đồ, văn bia, thần
                                                tích, thần sắc, hương ước&hellip;)</span></span></p>
                                </span>
                            </td>
                        </tr>
                        <tr style="display: none;">
                            <td>
                                <b>Danh sách
                                    <span id="lblTotal" style="color:Red;font-weight:bold;">2557</span>
                                    tài liệu số:</b>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table width="98.5%" align="center" cellpadding="2" cellspacing="2"
                                    style="margin-left: 10px; margin-right: 10px;">
                                    <tr>
                                        <td width="100%">
                                            <div id="updData">
                                                <div class="list-doc-page">

                                                    <div class="row display-flex">
                                                        <?php foreach($detail as $row){?>
                                                        <div class="col-md-2">
                                                            <table style="padding-top: 3px;" width="100%"
                                                                onmouseover="this.style.backgroundColor='#e0efff';"
                                                                onmouseout="this.style.backgroundColor='#fff';">
                                                                <tr>

                                                                    <td width="120px" align="center" valign="top">
                                                                        <a id="dlstEdataFile_ctl01_lnkImage"
                                                                            title="<?= $row->tensach ?>"
                                                                            href="wpDetail.aspx?Id=4049"><img
                                                                                id="dlstEdataFile_ctl01_imgImage"
                                                                                border="0" class="bookname"
                                                                                src="<?= $row->img?>"
                                                                                style="height:120px;border-width:0px;" /></a>
                                                                    </td>


                                                                </tr>
                                                                <tr>
                                                                    <td valign="top" width="100%"
                                                                        style="vertical-align: top;" align="center">
                                                                        <a id="dlstEdataFile_ctl01_lnkTitle"
                                                                            class="bookname"
                                                                            href="wpDetail.aspx?Id=4049"
                                                                            style="color:Blue;font-weight:bold;"><?= $row->tensach ?></a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                <?php
                                                                    if( isset($_SESSION['tb']) ){
                                                                    ?>                                                                 
                                                                    <td><input type="submit" name="muon" value="Mượn"></td>
                                                                    <?php 
                                                                    }else{ ?> 
                                                                    <td><input type="hidden" name="muon" value="Mượn"></td>
                                                                    <?php }?>                                                            
                                                                                                                                       
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        <?php
                                                                }?>

                                                        

                                                    </div>

                                                    <br />

                                                </div>
                                            </div>


    </form>
</body>

</html>