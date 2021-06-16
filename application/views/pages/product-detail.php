

<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Products</a></li>
            <li class="breadcrumb-item active">Product Detail</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Product Detail Start -->
<div class="product-detail">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="product-detail-top">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                           <!-- yến 23/12/2020-->
                           
                                <div class="product-slider-single normal-slider">

                                    <img src="<?=$detail_product['link_hinhanh']?>"alt="Product Image"> 

                                </div>
                                <br>
                                
                        </div>
                        <div class="col-md-7">
                            <div class="product-content">



                                <div class="title"><h2><?=$detail_product['tensanpham']?></h2></div>


                                
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div>màu sắc: <?=$detail_product['mausac']?></div>
                                <div>size: <?=$detail_product['size']?></div>
                                <div class="price">
                                    <h4>Price:</h4>
                                    <p><?=($detail_product ['giasanpham']-$detail_product ['giamgia'])?><span><?=$detail_product ['giasanpham']?></span></p>
                                </div>



                                <div class="action">
                                    <a class="btn" href="<?= base_url() ?>index.php/cart/insert/<?=$detail_product ['id']?>"><i class="fa fa-shopping-bag"></i>Buy Now</a>
                                </div>
                                <div>lượt mua: <?=$detail_product['luotmua']?></div>
                            </div>
                        </div>
                        <?php foreach ($detail_listanh as $value) {

                              if(is_array($value)){ ?>
                                <div>
                                    <img  class="anhnho" src="<?=$value['link_anh']?>" alt="Product Image">

                                </div>
                            <?php }}?>
                    </div>
                </div>

                <div class="row product-detail-bottom">
                    <div class="col-lg-12">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#description">Description</a>
                            </li>

                        </ul>

                        <div class="tab-content">
                            <div id="description" class="container tab-pane active">
                                <h4>Product description</h4>
                                <p><?=$detail_product ['motasanpham']?></p>
                            </div>
                            <div id="specification" class="container tab-pane fade">
                                <h4>Product specification</h4>
                                <ul>
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Lorem ipsum dolor sit amet</li>
                                </ul>
                            </div>
                            <div id="reviews" class="container tab-pane fade">
                                <div class="reviews-submitted">
                                    <div class="reviewer">Phasellus Gravida - <span>01 Jan 2020</span></div>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p>
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                                    </p>
                                </div>
                                <div class="reviews-submit">
                                    <h4>Give your Review:</h4>
                                    <div class="ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="row form">
                                        <div class="col-sm-6">
                                            <input type="text" placeholder="Name">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="email" placeholder="Email">
                                        </div>
                                        <div class="col-sm-12">
                                            <textarea placeholder="Review"></textarea>
                                        </div>
                                        <div class="col-sm-12">
                                            <button>Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product">
                    <div class="section-header">
                        <h1>Related Products</h1>
                    </div>

                    <div class="row align-items-center product-slider product-slider-3">

                        <?php foreach ($product_all as $value) : ?>

                            <div class="col-lg-3">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#"><?=$value['tensanpham']?></a>

                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img class="anhsanpham" src="<?=$value['link_hinhanh']?>" alt="Product Image" >
                                        </a>

                                    </div>
                                    <div class="product-price">
                                        <span><?=($value['giasanpham']-$value['giamgia'])?></span>
                                
                                
                                        <a class="btn" href="<?= base_url() ?>index.php/cart/insert/<?=$value['id']?>">
                                            <i class="fa fa-shopping-cart"></i>buy</a>
                                        </div>
                                    </div>
                                </div>
                            <?php  endforeach ?>
                        </div>
                    </div>
                </div>

                <!-- Side Bar Start -->
                <div class="col-lg-4 sidebar">
                    <div class="sidebar-widget category">
                        <h2 class="title">Category</h2>
                        <nav class="navbar bg-light">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-female"></i>Fashion & Beauty</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-tshirt"></i>Men & Women Clothes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-mobile-alt"></i>Gadgets & Accessories</a>
                                </li>

                            </ul>
                        </nav>
                    </div>
                    <? foreach ($product_all as $value):?>
                        <div class="sidebar-widget widget-slider">

                            <div class="sidebar-slider normal-slider">

                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#"><?=$value['tensanpham']?></a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img class="anhsanpham" src="<?=$value['link_hinhanh']?>" alt="Product Image">
                                        </a>
                                    </div>
                                    <div class="product-price">
                                        <span><?=($value['giasanpham']-$value['giamgia'])?></span>
                                
                                <h3 class="fontsize"><strike ><?=$value['giasanpham']?></strike></h3>
                                        <a class="btn" href="<?= base_url() ?>index.php/cart/insert/<?=$value['id']?>"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    <? endforeach?>

                    <div class="sidebar-widget brands">
                        <h2 class="title">Our Brands</h2>
                        <ul>
                            <li><a href="#">Nulla </a><span>(45)</span></li>
                            <li><a href="#">Curabitur </a><span>(34)</span></li>
                            <li><a href="#">Nunc </a><span>(67)</span></li>
                            <li><a href="#">Ullamcorper</a><span>(74)</span></li>
                            <li><a href="#">Fusce </a><span>(89)</span></li>
                            <li><a href="#">Sagittis</a><span>(28)</span></li>
                        </ul>
                    </div>

                    <div class="sidebar-widget tag">
                        <h2 class="title">Măng tô dài</h2>
                        <a href="#">Măng tô ngắn</a>
                        <a href="#">Nam</a>
                        <a href="#">Nữ</a>
                        <a href="#">Màu nâu</a>
                        <a href="#">Nổi bật</a>

                    </div>
                </div>
                <!-- Side Bar End -->
            </div>

        </div>
    </div>
    <!-- Product Detail End -->

    <!-- Brand Start -->
    <div class="brand">
        <div class="container-fluid">
            <div class="brand-slider">
                <div class="brand-item"><img src="../public/img/brand-1.png" alt=""></div>
                <div class="brand-item"><img src="../public/img/brand-2.png" alt=""></div>
                <div class="brand-item"><img src="../public/img/brand-3.png" alt=""></div>
                <div class="brand-item"><img src="../public/img/brand-4.png" alt=""></div>
                <div class="brand-item"><img src="../public/img/brand-5.png" alt=""></div>
                <div class="brand-item"><img src="../public/img/brand-6.png" alt=""></div>
            </div>
        </div>
    </div>
    <!-- Brand End -->

