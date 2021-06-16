         
        <!-- Breadcrumb Start -->
 
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item active">Checkout</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Checkout Start -->
     
        <form method="post">
        <div class="checkout">
            <div class="container-fluid"> 
                <div class="row">
                    <div class="col-lg-8">
                        <div class="checkout-inner">
                            <div class="billing-address">
                               
                                <h2>Billing Address</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>First Name</label>
                                        <input class="form-control" required name="firstname" type="text" placeholder="First Name">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Last Name</label>
                                        <input class="form-control" required name="lastname" type="text" placeholder="Last Name">
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label>Mobile </label>
                                        <input class="form-control" required name="mobile" type="text" placeholder="Mobile ">
                                    </div>
                                    <!--  <div class="form-row"> -->
                        <div class="form-group col-md-4">
                                                     
                            <label for="inputCity">Tỉnh/Thành phố</label>
                            <select  name="tinh"  id="tinh" class="form-control"> 
                                <option select>Chọn Tỉnh/Thành Phố</option>
                                <?php
                                 foreach ($tinh as $row) {
                                   
                                        echo "<option value='". $row->matp ."'>"  . $row->name . "</option>";
                                      

                                    }

                                ?>

                            </select>
                                </div>
                                <div class="form-group col-md-4">
                                    
                                    <label for="inputState">Huyện</label>
                                    <select name="huyen" id="huyen" class="form-control"> 
                                        <option >Chọn Huyện</option>
                                      
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputZip">Xã</label>
                                    <select  name="xa" id="xa" class="form-control"> <!-- xa -->
                                        <option selected>Chọn Xã</option>
                                    
                                    </select>
                              
                                        </div>

                               
                                        </div>
                            </div>








                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="checkout-inner">
                            <div class="checkout-summary">
                                <h1>Cart Total</h1>
                                <?php 
                                            foreach ($cart_list as $value): ?>
                                                  <hr>
                                                <p>Tên: <?= $value['name']?> </p>
                                                <hr>
                                                <p>Số lượng: <?=$value['qty'] ?><span><?= $value['subtotal']?></span></p>

                                            <?php endforeach ?>
                                            <!-- Hiển thị giá ship -->
                                <p class="ship-cost">Shipping Cost<span id="gia" ></span> </p>

                                <h2>Tiền hàng <span id="tienhang">  <?= $tienhang= $this->cart->total()?> </span></h2>
                             
                                  <?php $_SESSION['tienhang'] =$tienhang ;?>
                              <h2>Grand Total<span id="total"></span></h2>
                             
                            </div>

                            <!-- lưu các tên sản phẩm vào 1 mảng -->
                                <?php 
                                          $items = array();
                                          $luutensanpham="";

                                            foreach ($cart_list as $value){

                                                $items[] =  $value['name'];
                                              }
                                            
                                                // duyệt mảng chỉ in ra tên sản phẩm
                                                foreach( $items as $k){
                                                  if ($luutensanpham!='') {
                                                   
                                                  $luutensanpham = $luutensanpham .",".$k;
                                               }
                                               else {
                                                $luutensanpham=$k;
                                               }
                                                }
                                               $_SESSION['tensp'] =$luutensanpham ;

                                                //?>

                                  <!-- Lưu số lượng vào 1 mảng -->

                                   <?php 
                                          $soluong = array();
                                          $luusoluong="";

                                            foreach ($cart_list as $value){

                                                $soluong[] =  $value['qty'];
                                              }
                                            
                                                // duyệt mảng chỉ in ra số lượng
                                                foreach( $soluong as $k){
                                                  if ($luusoluong!='') {
                                                   
                                                  $luusoluong = $luusoluong .",".$k;
                                                     }
                                                     else {
                                                      $luusoluong=$k;
                                                     }
                                                }
                                                $_SESSION['mangsluong'] =$luusoluong ;

                                                //?>
                        
                            <div class="checkout-payment">
                             
                                      <div class="payment-method">
                                            <h1>Payment Methods</h1>
                                      <?php foreach ($vanc as $row) {
                                        
                                       ?>

                                    
                                        <div class="custom-control custom-radio">
                                            <input  type="radio" class="custom-control-input" id="<?php echo $row->id ?>" name="payment" value="<?php echo $row->gia_ship ?>">
                                            <label class="custom-control-label" for="<?php echo $row->id ?>"><?php echo $row->ten ?></label>
                                        </div>
                                        <div class="payment-content" id="<?php echo $row->id ;?>-show">
                                            <p>
                                             <?php echo $row->mota ?>
                                              

                                            </p>
                                        </div>
                                              <?php }?>

                                    </div>


                                 

                                <div align="center" >
                                    <input  class="btn " type="submit" name="dathang" value=" Place Order"></input>
                                </div>
                            </div>


 </form>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Checkout End -->
 


  <!-- xử lý tỉnh huyện xã  -->

  <script>
$(document).ready(function(){
 $('#tinh').change(function(){
  var matp = $(this).val();
  if(matp != '')
          {
         
            
           $.ajax({
            url:"checkout/fetch_huyen",
            method:"POST",
            data:{matp:matp},
            success:function(data)
            {
              console.log(data);
             $('#huyen').html(data);
             $('#xa').html('<option value="">Chọn xã</option>');
            }
           });
          }
          else
          {
             $('#huyen').html('<option value="">Select huyen</option>');
           $('#xa').html('<option value="">Select xa</option>');
          }

         });
});
</script>

<script >
    $(document).ready(function(){

    $('#huyen').change(function(){
  var maqh = $(this).val();
  
  if(maqh != '')
  {

   $.ajax({
    url:"checkout/fetch_xa",
    method:"POST",
    data:{maqh:maqh},
    success:function(data)
    {
     $('#xa').html(data);
    }
   });
  }
  else
  {
   $('#xa').html('<option value="">Select xã</option>');
  }
 });

});
</script>


<!--  xử lý giá ship -->

<script type="text/javascript">
    

    $(function() {
  $("input[type=radio]").change(function () {
    $("#gia").html($(this).val());
    var tienhang = document.getElementById("tienhang");
    var total = document.getElementById("total"); //để gán cho totalPrice
    var gia = document.getElementById("gia");
    var totalPrice = parseInt(tienhang.textContent) + parseInt(gia.textContent);
    total.innerHTML = totalPrice;

  });   

})
</script>



