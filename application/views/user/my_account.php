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
                     <!-- <a class="nav-link active" id="dashboard-nav" data-toggle="pill" href="#dashboard-tab" role="tab"><i class="fa fa-tachometer-alt"></i>Dashboard</a> -->
                     <a class="nav-link" id="orders-nav" data-toggle="pill" href="#orders-tab" role="tab"><i
                             class="fa fa-shopping-bag"></i>Orders</a>                     
                     <a class="nav-link" id="account-nav" data-toggle="pill" href="#account-tab" role="tab"><i
                             class="fa fa-user"></i>Account Details</a>
                     <a class="nav-link" href="<?= base_url() ?>index.php/User/Logout"><i
                             class="fa fa-sign-out-alt"></i>Logout</a>
                 </div>
             </div>
             <div class="col-md-9">
                 <div class="tab-content">
                     <div class="tab-pane fade " id="orders-tab" role="tabpanel" aria-labelledby="orders-nav">
                         <div class="table-responsive">
                             <table class="table table-bordered">
                                 <thead class="thead-dark">
                                     <tr>
                                         <th>STT</th>
                                         <th>Mã mượn</th>
                                         <th>Tên sách</th>
                                         <th>Ngày mượn</th>
                                         <th>Ngày trả</th>
                                         <th>Quản lý </th>
                                         
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php $i=1; foreach ($book as $row) {
                                            if ($_SESSION['id']== $row->id_account) {                                                
                                            
                                            ?>

                                     <tr>
                                         <td><?php echo $i++ ?></td>
                                         <td><?php echo $row->id_muon ?></td>
                                         <td><?php echo $row->tensach ?></td>
                                         <td><?php echo $row->ngaymuon ?></td>
                                         <td><?php echo $row->ngaytra ?></td>
                                         <td><?php echo $row->quanlythuvien ?></td>

                                     </tr>
                                     <?php   } } ?>
                                 </tbody>
                             </table>
                         </div>
                     </div>
                     <div class="tab-pane fade " id="account-tab" role="tabpanel" aria-labelledby="account-nav">
                         <h4>Account Details</h4>
                         <div class="row">
                             <!--  kiểm tra session em có tồn tại hay không  -->
                             <div class="col-md-6">
                                 <form method="post">
                                     <input class="form-control" name="fullname" value="<?php echo $fullname?>"
                                         type="text">

                             </div>
                             <div class="col-md-6">
                                 <input class="form-control" name="phone" value="<?php echo $phone?>" type="text">
                             </div>
                             <div class="col-md-6">
                                 <input class="form-control" name="email" value="<?php echo $email?>" type="text">
                             </div>
                             <div class="col-md-12">
                                 <input type="submit" name="upda" class="btn" value="Update Account">
                                 <br><br>
                             </div>


                         </div>
                         <h4>Password change</h4>
                         <div class="row">
                             <div class="col-md-12">
                                 <input class="form-control" type="password" value="<?php echo $password?>" ;=""
                                     name="password" placeholder="Current Password">
                             </div>
                             </form>

                             <div class="col-md-6">
                                 <form method="post">
                                     <input class="form-control" type="password" name="pass1"
                                         placeholder="New Password">
                                 
                             </div>
                             <div class="col-md-6">
                                 <input class="form-control" type="password" name="pass2"
                                     placeholder="Confirm  Password">
                             </div>

                             <div class="col-md-12">
                                 <input name="save" type="submit" class="btn" value="Save Changes">
                             </div>
                             </form>
                         </div>

                         <!-- Xóa tài khoản -->
                         <br>
                         <h4>Xóa tài khoản</h4>
                         <div class="row">
                             <form method="post">
                                 <div class="col-md-12">
                                     <input name="xoataikhoan" type="submit" class="btn" value="Xóa">
                                 </div>
                             </form>
                         </div>

                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 </div>
 <!-- My Account End -->