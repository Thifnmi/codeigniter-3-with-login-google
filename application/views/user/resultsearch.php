<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Kết quả</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Product List Start -->
<div class="product-view">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">

                    <?php foreach ($product as $value) {   ?>
                        <div class="col-md-4">

                            <div class="product-item">
                                <div class="product-title">

                                    <a href=""><?= $value['tensach']?></a>                                  
                                </div>
                                <div class="product-image">
                                    <a href="#">
                                        <img src="<?=$value['img']?>" alt="Product Image">
                                    </a>

                                </div>                                
                            </div>
                        </div>

                    <?php } ?>
                </div>

                <!-- Pagination Start -->
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
                                <a class="nav-link" href="#"><i class="fa fa-child"></i>Kids & Babies Clothes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-tshirt"></i>Men & Women Clothes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-mobile-alt"></i>Gadgets & Accessories</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-microchip"></i>Electronics & Accessories</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- <div class="sidebar-widget widget-slider">
                     <?php foreach ($product as $value) :
                            if(is_array($value)){
                         ?>
                    <div class="sidebar-slider normal-slider">
                       
                            <div class="product-item">
                                <div class="product-title">
                                    <a href="product_detail.html"><?=$value['tensanpham']?></a>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <div class="product-image">
                                    <a href="product_detail.html">
                                        <img src="<?=$value['link_hinhanh']?>" alt="Product Image">
                                    </a>
                                   
                                </div>
                                <div class="product-price">
                                 <span><?=($value['giasanpham']-$value['giamgia'])?></span>
                                 <a class="btn" href="<?= base_url() ?>index.php/cart/insert/<?=$value['id']?>">
                                    <i class="fa fa-shopping-cart"></i>Buy Now</a>
                                </div>
                            </div>
                      
                    </div>
                      <?php } endforeach ?>
                        
                </div> -->
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
                    <h2 class="title">Tags Cloud</h2>
                    <a href="#">Lorem ipsum</a>
                    <a href="#">Vivamus</a>
                    <a href="#">Phasellus</a>
                    <a href="#">pulvinar</a>
                    <a href="#">Curabitur</a>
                    <a href="#">Fusce</a>
                    <a href="#">Sem quis</a>
                    <a href="#">Mollis metus</a>
                    <a href="#">Sit amet</a>
                    <a href="#">Vel posuere</a>
                    <a href="#">orci luctus</a>
                    <a href="#">Nam lorem</a>
                </div>
            </div>
            <!-- Side Bar End -->
        </div>
    </div>
</div>
</div>
<!-- Product List End -->  

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