<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <title>Chỉnh Sửa Sách</title>
</head>

<body>
    <div class="container ">
        <div class="row mt-5 ms-5 me-5 border border-success " style="/* height: 70%; */width: 70%;position: fixed;top: 100px;left: auto;right: auto;">
            <div class="col-md-1  " style="
            padding-left: 0;
        ">
                <a href="<?= base_url() ?>index.php/admin/Cs_Sach">
                    <div style="
                width: 33px;
                height: 100%;
                background-color: #7fff003b;
                position: relative;
            "><i class="fas fa-chevron-left" style="
    font-size: 40px;    
    position: absolute;
    top: 190px;
"></i></div>
                </a>
            </div>
            <div class="col-md-3 mt-3 mb-3 d-flex flex-column justify-content-center">
            <?php foreach ($data3 as $value) : ?>
                <img src="<?= $value->imgb?>" class="img-fluid" alt="..." style="
    max-height: 366px;
">
                <?php endforeach; ?>
            </div>
            <div class="col-md-8 pt-2 pb-2">
            
                <form action="#" method="post" class="d-flex justify-content-between">
                <?php foreach ($data3 as $value) : ?>
                    <div style="width: 90%;" class="me-3">
                        <label for="formGroupExampleInput" class="form-label">Mã Sách</label>
                        <input class="form-control" type="text" placeholder="Disabled input" aria-label="Disabled input example" disabled value="<?= $value->masach ?>" id="masach">
                        <input type="hidden" class="form-control" name="id_book" value="<?= $value->id_book?>">
                        <div class="mb-3 mt-3">
                            <label for="formGroupExampleInput2" class="form-label">Tên Sách</label>
                            <input type="text" class="form-control" name="tensach" placeholder="Tên sách" value="<?= $value->tensach?>">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Nhà cung cấp</label>
                            <input list="ncc" type="text" class="form-control" name="id_ncc" placeholder="Nhà cung cấp" value="<?= $value->id_ncc?>">
                            <datalist id="ncc"">
                                <?php foreach ($data as $value1) : ?>
                                    <option value="<?= $value1->id_ncc ?>">
                                        <?= $value1->ten_ncc ?>
                                    <?php endforeach; ?>
                            </datalist>
                        </div>
                        <div>
                            <label for="formGroupExampleInput2" class="form-label">Nhà xuất bản</label>
                            <input list="nxb" type="text" class="form-control" name="id_nxb" placeholder="Nhà xuất bản" value="<?= $value->id_nxb?>">
                            <datalist id="nxb">
                                <?php foreach ($data2 as $value2) : ?>
                                    <option value="<?= $value2->id_nxb ?>">
                                        <?= $value2->ten_nxb ?>
                                    <?php endforeach; ?>
                            </datalist>
                        </div>
                    </div>
                    <div style=" width: 90%;">
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Loại</label>
                            <input name="loaisach" type="text" list="tl" class="form-control" placeholder="Loại" value="<?= $value->id_loai?>">
                            <datalist id="tl"">
                            <?php foreach ($data1 as $value3) : ?>
                                <option value=" <?= $value3->id_loai ?>">
                                <?= $value3->loaisach ?>
                            <?php endforeach; ?>
                            </datalist>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Tình trạng</label>
                            <input type="text" class="form-control" name="tinhtrang" placeholder="Tình trạng" value="<?= $value->tinhtrang?>" >
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">SL tổng</label>
                            <input type="number" class="form-control" name="sl_tong" placeholder="SL tổng" value="<?= $value->sl_tong?>">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">SL còn</label>
                            <input type="number" class="form-control" name="sl_conlai" placeholder="SL còn" value="<?= $value->sl_conlai?>">
                        </div>
                        <input type="submit" class="btn btn-primary" name="update" value="OK"></input>
                    </div>
                    <?php endforeach; ?>
                </form>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</html>