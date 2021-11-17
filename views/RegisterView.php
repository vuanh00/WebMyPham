<?php 
  //load file LayoutTrangChu.php
  $this->fileLayout = "LayoutTrangTrong.php";
 ?>
 <h1>Đăng ký tài khoản</h1>
      <?php if(isset($_GET["notify"])&&$_GET["notify"]=="error"): ?>
      <p style="color:red;">Đăng ký chưa thành công, bạn hãy kiểm tra lại thông tin!</p>
      <?php else: ?>
      <p> Nếu bạn chưa có tài khoản, hãy đăng ký ngay để nhận thông tin ưu đãi cùng những ưu đãi từ cửa hàng.</p>
      <?php endif; ?>
<div class="login-row row">
    <form class="login-form form col-sm-5" method='post' action="index.php?controller=account&action=registerPost">
        <p class="title"><span>Đăng ký tài khoản</span></p>
        <div class="form-field">
          <label class="form-label">Họ và tên:</label>
          <input type="text" name="name" class="form-input">
        </div>
        <div class="form-field">
          <label class="form-label">Email:<b style="color: red;">*</b></label>
          <input type="text" name="email" class="form-input" required>
        </div>
        <div class="form-field">
          <label class="form-label">Địa chỉ:</label>
          <input type="text" name="address" class="form-input">
        </div>
        <div class="form-field">
          <label class="form-label">Điện thoại:</label>
          <input type="text" name="phone" class="form-input">
        </div>
        <div class="form-field">
          <label class="form-label">Mật khẩu:<b style="color: red;">*</b></label>
          <input type="password" name="password" class="form-input" required="">
        </div>
        <div class="form-field">
          <input type="submit" class="btn btn-primary" value="Đăng ký">
        </div>
        
    </form>
    <div class="new-customer col-sm-4">
        <div class="panel">
            <div class="panel-header">
                <h2 class="panel-title">Sign in</h2>
            </div>
            <div class="panel-body">
                <p>Đăng nhập tài khoản nếu bạn đã có tài khoản. Đăng nhập tài khoản để theo dõi đơn đặt hàng, vận chuyển và đặt hàng được thuận lợi.</p>
                <a href="index.php?controller=account&action=login"><button class="btn btn-checkout">Sign in</button></a>
            </div>
        </div>
    </div>
</div>
