
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item active">Cart</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Cart Start -->
        <div class="cart-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cart-page-inner">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody class="align-middle">
                                        <!--16/12/2020 yến-->
                                    <form action="<?=base_url()?>index.php/cart/update" method="POST">
                                        <?php if(isset($cart_list))
                                        
                                            foreach ( $cart_list as $value): ?>
                                       
                                        <tr>
                                            <td>
                                                <div class="img">
                                                    <a href="#"><img src="<?=$value['link_hinhanh']?>" alt="Image"></a>
                                                    <p><?=$value['name']?></p>
                                                </div>
                                            </td>
                                            <td><?=$value['price'] ?></td>
                                            <td>
                                                <div class="qty">
                                                    
                                                    <input type="text" name="qty_<?=$value['id']?>" value="<?= $value['qty'] ?>">
                                                    
                                                </div>
                                            </td>
                                            <td><?= $value['subtotal']?></td>
                                            <td><a href="<?= base_url() ?>index.php/cart/delete/<?= $value['rowid']?>"><i class="fa fa-trash"></i></td>
                                        </tr>
                                        <?php endforeach ?>

                                  
                                            <!--16/12/2020-->

                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cart-page-inner">
                            <div class="row">
                                
                                <div class="col-md-12">
                                    <div class="cart-summary">

                                        <div class="cart-content">
                                            <h1>Cart Summary</h1>
                                            <?php foreach ($cart_list as $value): ?>
                                                <p><?= $value['name']?> </p>
                                                <p>số lượng: <?=$value['qty'] ?><span><?= $value['subtotal']?></span></p>
                                            <?php endforeach ?>
                                            <h2>Grand Total<span><?php echo $this->cart->total(); ?></span></h2>
                                            
                                        </div>
                                        <br>
                                        <div align="center" class="cart-btn">
                                            <input class="btn" id="update-cart" type="submit" value="Update">
                                            </form>

                                           <form method="post" action="<?=base_url()?>index.php/checkout"> 
                                                <input class="btn" type="submit" value="checkout">
                                              
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart End -->
  