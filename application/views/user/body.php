<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6" style="padding-right: 0px; padding-left: 0px;" id="divLeft">
                <div class="center">
                    <div class=" box-center" style="vertical-align: top !important;">
                        <table width="100%">
                            <tr>
                                <td>
                                    <h1>
                                        <img src="<?= base_url() ?>public/images/icon-libol.png" width="40"
                                            height="35" /><a href="#" target="_blank" style="color: #ff6400">CSDL Tài
                                            liệu </a>
                                    </h1>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="thongketailieu">
                                        <ul>
                                            <li>Tổng số ấn phẩm đơn bản:
                                                <span id="lblTotalSingleItemsValue" class="lbLabel"
                                                    class="orange-text"><b>236.731</b></span>&nbsp;&nbsp;&nbsp;&nbsp;
                                                Tổng số xếp giá:
                                                <span id="lblTotalCopyNumberItemsValue" class="lbLabel"
                                                    class="orange-text"><b>637.701</b></span>
                                            </li>
                                            <li>Tổng số ấn phẩm định kỳ:
                                                <span id="lblTotalSerialItemsValue" class="lbLabel"
                                                    class="orange-text"><b>5.317</b></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp;


                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table class="heading-box-tailieu">
                                        <tr>
                                            <td>
                                                <h2>
                                                    <img src="<?= base_url() ?>public/images/icon-heading-center.png"
                                                        style="width: 18px; height: 16px;" />Tài liệu mới
                                                </h2>
                                            </td>
                                            <td>
                                                <div class="read-more">
                                                    <a id="lblViewDetail" class="lbLinkFunction"
                                                        href="javascript:__doPostBack(&#39;lblViewDetail&#39;,&#39;&#39;)">Xem
                                                        thêm</a>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table class="lbGrid" cellspacing="0" rules="all" border="1" id="dgrNewItems"
                                        style="border-collapse:collapse;">
                                        <tr class="lbGridHeader">
                                            <td style="width:3%;">STT</td>
                                            <td style="width:97%;">Nhan đề</td>
                                        </tr>

                                        <?php $i = 1; foreach ($book as $row)
                                     { ?>
                                        <tr class="lbGridCell">
                                            <td align="right"><?php echo $i++ ?></td>
                                            <td><A
                                                    Href="WShowDetail.aspx?intItemID=244183"><?php echo $row -> tensach ?></A>
                                            </td>
                                        </tr> <?php } ?>

                                        <tr class="lbGridCell">
                                            <td align="right">1</td>
                                            <td><A Href="WShowDetail.aspx?intItemID=244183"> Cha con và Tổ quốc: Tập
                                                    truyện/ Vũ
                                                    Tuyết Mây</A></td>
                                        </tr>

                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table class="heading-box-tailieu">
                                        <tr>
                                            <td>
                                                <h2>
                                                    <img src="<?= base_url() ?>public/images/icon-heading-center.png"
                                                        style="width: 18px; height: 16px;" />Tài liệu được mượn nhiều
                                                    nhất
                                                </h2>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table class="lbGrid" cellspacing="0" rules="all" border="1" id="dgrStatisticTop"
                                        style="border-collapse:collapse;">
                                        <tr class="lbGridHeader">
                                            <td style="width:3%;">STT</td>
                                            <td style="width:97%;">Nhan đề</td>
                                        </tr>
                                        <?php $i = 1; foreach ($countbk as $row)
                                     { ?>
                                        <tr class="lbGridCell">
                                            <td align="right"><?php echo $i++ ?></td>
                                            <td><A Href="WShowDetail.aspx?intItemID=244183"><?php echo $row -> tensach ?>
                                                    (<B>
                                                        <Font color="CC0000"><?php echo $row -> ss ?></Font>
                                                    </B>)</A></td>
                                        </tr> <?php } ?>
                                        <tr class="lbGridAlterCell">
                                            <td align="right">2</td>
                                            <td><A Href="WShowDetail.aspx?intItemID=233264"> Mắt biếc: Truyện dài/
                                                    Nguyễn Nhật
                                                    Ánh</A> (<B>
                                                    <Font color="CC0000">62</Font>
                                                </B>)</td>
                                        </tr>

                                    </table>
                            </tr>

                        </table>
                        </td>
                        </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6 SetBorder" style="padding-right: 0px; padding-left: 0px; height: auto;" id="divCenter">
                <table width="100%">
                    <tbody>
                        <tr>
                            <td valign="top" style="vertical-align: top !important;" class="center">
                                <div class="box-center">

                                    <table width="100%">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h1>
                                                        <img src="<?= base_url() ?>public/images/icon-libol.png"
                                                            width="40" height="35">
                                                        <a href="#" target="_blank" style="color: #ff6400">CSDL Tài liệu
                                                        </a>
                                                    </h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="thongketailieu">
                                                        <ul>
                                                            <li>Tổng số tài liệu số: <span class="orange-text">
                                                                    <span id="lblEdataCount"
                                                                        class="lbLabel">3.964</span></span>
                                                            </li>
                                                            <li style="display: none;">Tổng số tệp tin điện tử: <span
                                                                    class="orange-text">
                                                                    <span id="lblEdataDetailsCount"
                                                                        class="lbLabel">1.034</span></span></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table class="heading-box-tailieu" style="margin-bottom: 10px;">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <h2>
                                                                        <img src="<?= base_url() ?>public/images/icon-heading-center.png"
                                                                            style="width: 18px; height: 16px;">Bộ sưu
                                                                        tập tài liệu
                                                                    </h2>
                                                                </td>
                                                                <td>
                                                                    <div class="read-more">
                                                                        <a id="ucTvsBoSuuTapTaiLieu_linkViewMore"
                                                                            class="lbLinkFunction"
                                                                            href="javascript:__doPostBack('ucTvsBoSuuTapTaiLieu$linkViewMore','')">Xem
                                                                            thêm</a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="content-box-tailieu  row display-flex">
                                                        <?php foreach($loai as $row){?>
                                                        <div class="col-md-4" style="height: 160px">
                                                            <p class="product-img">
                                                                <a
                                                                    href="<?= base_url() ?>index.php/User/user/chitietLoai/<?= $row->id_loai ?>">
                                                                    <img id="ucTvsBoSuuTapTaiLieu_rptEdata_ctl00_imgBook"
                                                                        title="<?= $row->loaisach ?>"
                                                                        src="<?= $row->img ?>"
                                                                        style="border-width:0px;height: 90px; width: 80px; border-width: 0px; ">
                                                                </a>
                                                            </p>
                                                            <p class="title-product">
                                                                <a
                                                                    href="<?= base_url() ?>index.php/User/user/chitietLoai/<?= $row->id_loai ?>">
                                                                    <span
                                                                        id="ucTvsBoSuuTapTaiLieu_rptEdata_ctl00_lblTitle"
                                                                        title="<?= $row->loaisach ?>"><?= $row->loaisach ?></span>

                                                                </a>
                                                            </p>
                                                        </div>
                                                        <?php
                                            }?>


                                                        <div class="clear">
                                                        </div>
                                                    </div>


                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
    </div>
</div>