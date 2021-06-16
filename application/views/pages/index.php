
   
        <!-- Main Slider Start -->
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                       <!--  vất ảnh chỉ 1 ảnh thôi -->
                       <img src="<?= base_url() ?>picture/anh1.jpg"  class="anhtrangtri1" />
                    </div>
                    <div class="col-md-6">
                        <div class="header-slider normal-slider">
                            <div class="header-slider-item">
                                <img width="500" height="402" src="../picture/thu4.jpg" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p>Mẫu mới về</p>
                                    
                                </div>
                            </div>
                            <div class="header-slider-item">
                                <img width="500" height="402" src="../picture/thu5.jfif" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p>Sản phẩm mới ra mắt</p>
                                   
                                </div>
                            </div>
                            <div class="header-slider-item">
                                <img width="500" height="402" src="../picture/thu6.jpg" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p>Hàng tháng 10</p>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="header-img">
                            <div class="img-item">
                                <img src="<?= base_url() ?>picture/anh2.jpg" class="anhtrangtri2" />
                                <a class="img-text" href="">
                                    <p>Sản phẩm bán chạy nhất</p>
                                </a>
                            </div>
                            <div class="img-item">
                                <img src="<?= base_url() ?>picture/anh3.jpg" class="anhtrangtri2" />
                                <a class="img-text" href="">
                                    <p>Sản phẩm mới ra mắt</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Slider End -->      
        
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
        
      
          
        
        <!-- Call to Action Start -->
        <div class="call-to-action">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1>call us for any queries</h1>
                    </div>
                    <div class="col-md-6">
                        <?php foreach ($shop as $row) {
                            ?>
                       
                        <h2><?php echo $row->sodienthoai;
                         ?></h2>
                       <?php   } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->       
        
        <!-- Featured Product Start -->
        <div class="featured-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h1>Featured Product</h1>
                </div>
                <div class="row align-items-center product-slider product-slider-4">
                    <?php
                    foreach ($product_all as $value): ?>
                    <div class="col-lg-6">
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
                                    <a href="product-detail.html"></a>
                                    <img class="anhsanpham"src="<?=$value['link_hinhanh']?>" alt="Product Image">
                                </a>
                              
                            </div>
                            <div class="product-price">
                                <span><?=($value['giasanpham']-$value['giamgia'])?></span>
                                
                                <h3 class="fontsize"><strike ><?=$value['giasanpham']?></strike></h3>
                                <a class="btn" href="<?= base_url() ?>index.php/cart/insert/<?=$value['id']?>"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        <!-- Featured Product End -->       
        
        
        
        
        
       
           <!-- Feature Start-->
        <div class="feature">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fab fa-cc-mastercard"></i>
                            <h2>Secure Payment</h2>
                          <!--   <p>
                                Lorem ipsum dolor sit amet consectetur elit
                            </p> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-truck"></i>
                            <h2>Worldwide Delivery</h2>
                         <!--    <p>
                                Lorem ipsum dolor sit amet consectetur elit
                            </p> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-sync-alt"></i>
                            <h2>90 Days Return</h2>
                          <!--   <p>
                                Lorem ipsum dolor sit amet consectetur elit
                            </p> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-comments"></i>
                            <h2>24/7 Support</h2>
                           <!--  <p>
                                Lorem ipsum dolor sit amet consectetur elit
                            </p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End-->            
        
    