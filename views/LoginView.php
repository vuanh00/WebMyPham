<?php 
  //load file LayoutTrangChu.php
  $this->fileLayout = "LayoutTrangTrong.php";
 ?>
 <h1 class="page-content">Sign in</h1>
<div class="login-row row">
    <form class="login-form form col-sm-5" action="index.php?controller=account&action=loginPost" method="post">
        <div class="form-field">
            <label class="form-label" for="login_email">Email Address:</label>
            <input class="form-input" name="email" id="login_email" type="email">
        </div>
        <div class="form-field">
            <label class="form-label" for="login_pass">Password:</label>
            <input class="form-input" id="login_pass" type="password" name="password">
        </div>
        <div class="form-actions">
            <input type="submit" class="btn btn-primary" value="Sign in">
            <a class="forgot-password" href="login8311.html?action=reset_password">Forgot your password?</a>
        </div>
    </form>
    <div class="new-customer col-sm-4">
        <div class="panel">
            <div class="panel-header">
                <h2 class="panel-title">New Customer?</h2>
            </div>
            <div class="panel-body">
                <p class="new-customer-intro">Create an account with us and you&#x27;ll be able to:</p>
                <ul class="new-customer-fact-list">
                    <li class="new-customer-fact">Check out faster</li>
                    <li class="new-customer-fact">Save multiple shipping addresses</li>
                    <li class="new-customer-fact">Access your order history</li>
                    <li class="new-customer-fact">Track new orders</li>
                    <li class="new-customer-fact">Save items to your wish list</li>
                </ul>
                <a href="index.php?controller=account&action=register"><button class="btn btn-checkout">Create Account</button></a>
            </div>
        </div>
    </div>
</div>