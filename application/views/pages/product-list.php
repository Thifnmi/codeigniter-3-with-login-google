    
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item active">Product List</li>
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
                           
                            <?php foreach ($product_all as $value) : ?>
                            <div class="col-md-4">

                                <div class="product-item">
                                    <div class="product-title">
                                      
                                        <a href="product_detail/getDetailProduct/<?=$value['masanpham']?>"><?=$value['tensanpham']?></a>
                                       
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="#">
                                            <img class="anhsanpham" src="<?=$value['link_hinhanh']?>" alt="Product Image">
                                        </a>
                                        
                                    </div>
                                    <div class="product-price">
                                        <span><?=($value['giasanpham']-$value['giamgia'])?></span>
                                
                                <h3 class="fontsize"><strike ><?=$value['giasanpham']?></strike></h3>
                                        <a class="btn" href="<?= base_url() ?>index.php/cart/insert/<?=$value['id']?>"><i class="fa fa-shopping-cart"></i>Buy</a>
                                    </div>
                                </div>
                            </div>
                            
                             <?php endforeach ?>
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
                        
                        <div class="sidebar-widget widget-slider">
                            <div class="sidebar-slider normal-slider">
                                <?php foreach ($product_all as $value) : ?>
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
                                            <img class="anhsanpham" src="<?=$value['link_hinhanh']?>" alt="Product Image">
                                        </a>
                                        
                                    </div>
                                    <div class="product-price">
                                       <span><?=($value['giasanpham']-$value['giamgia'])?></span>
                                
                                        <h3 class="fontsize"><strike ><?=$value['giasanpham']?></strike></h3>
                                        <a class="btn" href="<?= base_url() ?>index.php/cart/insert/<?=$value['id']?>">
                                        <i class="fa fa-shopping-cart"></i>Buy Now</a>
                                    </div>
                                </div>
                                 <?php endforeach ?>
                            
                        </div>
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
        <!-- Brand End -->
  