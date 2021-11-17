<?php 
    //load file Layout.php vào đây
    $this->fileLayout ="Layout.php";
 ?>
 <div class="content container-fluid">
    <div class="row">
        <div class="col-xl-8 offset-xl-2">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Thông tin tài khoản</h3>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="card">
                <div class="card-body">
                    <!-- Form -->
                    <form method="post" action="<?php echo $action; ?>">
                        <div class="form-group">
                            <label>Họ tên</label>
                            <input class="form-control text-box single-line"  id="name" name="name"  type="text" value="<?php echo isset($record->name)?$record->name:""; ?>"/>
                            
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control text-box single-line"  id="email" name="email" type="email" value="<?php echo isset($record->email)?$record->email:""; ?>" <?php if(isset($record->email)): ?> disabled <?php else: ?> required <?php endif; ?> />
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input class="form-control text-box single-line"  id="phone" name="phone" type="text" value="<?php echo isset($record->phone)?$record->phone:""; ?>"/>
                            
                        </div>
                        
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input class="form-control text-box single-line" id="address" name="address"  type="text" value="<?php echo isset($record->address)?$record->address:""; ?>" />
                           
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <input type="password" name="password" <?php if(isset($record->email)): ?> placeholder="Không đổi password thì không nhập thông tin vào ô textbox này" <?php else: ?> required <?php endif; ?> class="form-control" />
                           
                        </div>
                        
                        <div class="mt-4">
                            <button class="btn btn-primary" type="submit">
                                Cập nhật
                            </button>
                            <button class="btn btn-primary" type="submit">
                               <a href="index.php?controller=users" style="text-decoration: none ;color: white;">Huỷ</a>
                            </button>
                            
                        </div>
                    </form>
                    <!-- Form -->
                </div>
            </div>
        </div>
    </div>
</div>