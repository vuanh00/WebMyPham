
<!DOCTYPE html>
<html >

<!-- Mirrored from truelysell-admin.dreamguystech.com/template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Jun 2021 14:22:17 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Đăng nhâp quản trị</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="../assets/admin/img/favicon.png">

    <!-- Fontawesome CSS -->
    <link href="../assets/admin/plugins/fontawesome/css/fontawesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/admin/plugins/fontawesome/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/admin/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="../assets/admin/css/admin.css">

</head>

<body>
    <div class="main-wrapper">

        <div class="login-page">
            <div class="login-body container">
                <div class="loginbox">
                    <div class="login-right-wrap">
                        <div class="account-header">
                            <div class="account-logo text-center mb-4">
                                <a href="">
                                    <img src="../assets/admin/img/logo-icon.png" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="login-header">

                            <h3>Đăng nhập <span>Perfume Rise </span></h3>
                            <p class="text-muted">Truy cập trang quản trị</p>
                        </div>
                        <form method="post" action="index.php?controller=login&action=login" >
                            <input name="__RequestVerificationToken" type="hidden" value="pc0KarNRxMdLR4Kl2s2nl8f8q0mOgQSw-2wqPJamzcysJ6NmVJZOu4tc_6CCSv5sJ3PUfG15MPGSH7U7VU7mAGI9wstWrEf1hy3QkCBgFuY1" />
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input name="email" class="form-control" type="text" placeholder="Nhập địa chỉ email">
                            </div>
                            <div class="form-group mb-4">
                                <label class="control-label">Mật khẩu</label>
                                <input name="password" class="form-control" type="password" placeholder="Nhập mật khẩu">
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary btn-block account-btn" type="submit" value=""><span style="color:white; text-decoration: none;">Đăng nhập</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../assets/admin/script/jquery-3.5.0.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="../assets/admin/script/popper.min.js"></script>
    <script src="../assets/admin/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="../assets/admin/script/admin.js"></script>

</body>


</html>