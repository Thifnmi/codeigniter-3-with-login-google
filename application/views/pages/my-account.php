 
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item active">My Account</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- My Account Start -->
        <div class="my-account">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                           <!--  <a class="nav-link active" id="dashboard-nav" data-toggle="pill" href="#dashboard-tab" role="tab"><i class="fa fa-tachometer-alt"></i>Dashboard</a> -->
                            <a class="nav-link" id="orders-nav" data-toggle="pill" href="#orders-tab" role="tab"><i class="fa fa-shopping-bag"></i>Orders</a>
                          
                            <a class="nav-link" id="address-nav" data-toggle="pill" href="#address-tab" role="tab"><i class="fa fa-map-marker-alt"></i>address</a>
                            <a class="nav-link" id="account-nav" data-toggle="pill" href="#account-tab" role="tab"><i class="fa fa-user"></i>Account Details</a>
                            <a class="nav-link" href="<?= base_url() ?>index.php/Logout"><i class="fa fa-sign-out-alt"></i>Logout</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                          
                            <div class="tab-pane fade" id="orders-tab" role="tabpanel" aria-labelledby="orders-nav">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>STT</th>
                                                <th>Mã Hóa Đơn</th>
                                                <th>Tên sản phẩm</th>
                                                <th>Số lượng</th>
                                                <th>Tiền ship</th>
                                                <th>Tiền hàng</th>
                                                <th>Tổng tiền</th>
                                              
                                                <th>Trạng thái</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1; foreach ($hoadon as $row) {
                                                if ($_SESSION['em']== $row->email) {
                                                    
                                                
                                                ?>
                                            
                                            <tr>
                                                <td><?php echo $i++ ?></td>
                                                <td><?php echo $row->stt ?></td>
                                                <td><?php echo $row->tensp ?></td>
                                                <td><?php echo $row->soluong ?></td>
                                                <td><?php echo $row->tienship ?></td>
                                                <td><?php echo $row->tienhang ?></td>
                                                <td><?php echo $row->tongtien ?></td>
                                                <td><?php echo $row->trangthai ?></td>
                                               
                                            </tr>
                                        <?php   } } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                           
                            <div class="tab-pane fade" id="address-tab" role="tabpanel" aria-labelledby="address-nav">

                                <h4 style="color: #7168f2" align="center">Address</h4>
                                <div class="row">
                                   <div class="col-md-12">

                                    <h5 style="color: #7168f2" align="center">Payment Address</h5>
                                      <?php  foreach ($hoadon as $row) {
                                      if ($_SESSION['em']== $row->email) {
                                      ?>

                                        <hr>
                                        <p><?php echo $row->address ?></p>
                                        <p><?php echo $row->mobile ?></p>
                                       <?php   } } ?>
                                    </div>
                                   
                                </div>
                            </div>

                            <div class="tab-pane fade" id="account-tab" role="tabpanel" aria-labelledby="account-nav">
                                <h4>Account Details</h4>
                                <div class="row">
                                  <!--  kiểm tra session em có tồn tại hay không  -->
                                                             

                                    <div class="col-md-6">
                                          <form method="post">

                                        <input class="form-control" name="firstname" 
                                        value=" <?php  echo $firstname; ?>"
                                         type="text" >
                                       </input>

                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" name="lastname"   value="<?php  echo $lastname; ?>" 
                                         type="text" ></input>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" name="mobile" value=" <?php  echo $mobile; ?>"
                                         type="text" ></input>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" name="email" value=" <?php  echo $email; ?>"
                                        type="text" ></input>
                                    </div>

                                 
                                 
                                    <div class="col-md-12">
                                        <input type="submit" name="upda" class="btn" value="Update Account"></input>
                                        <br><br>
                                    </div>
                                           
                                   
                                </div>
                                <h4>Password change</h4>
                                <div class="row">
                                      <div class="col-md-12">
                                      
                                        <input class="form-control" type="password" value="<?php  echo $password; ?>";
                                         name="password" placeholder="Current Password">
                                    </div>
                                     </form>
                                
                                    <div class="col-md-6">
                                        <form method="post">
                                        <input class="form-control" type="password" name="pass1" type="text" placeholder="New Password">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="password" name="pass2" type="text" placeholder="Confirm  Password">
                                    </div>
                                   
                                    <div class="col-md-12">
                                        <input name="save" type="submit" class="btn" value="Save Changes"></input>
                                    </div>
                                     </form>
                                </div>

                                <!-- Xóa tài khoản -->
                                <br>
                                 <h4 >Xóa tài khoản</h4>
                                <div class="row"  >
                                  <form method="post">
                                        <div class="col-md-12">
                                            
                                             <input name="xoataikhoan" type="submit" class="btn" value="Xóa"></input>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- My Account End -->
        
   