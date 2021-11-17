
<!DOCTYPE html>
<html >
<!-- Mirrored from truelysell-admin.dreamguystech.com/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Jun 2021 14:21:50 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <title>Admin</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="../assets/admin/img/favicon.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
          href="../assets/admin/plugins/bootstrap/css/bootstrap.min.css" />

    <!-- Fontawesome CSS -->
    <link rel="stylesheet"
          href="../assets/admin/plugins/fontawesome/css/fontawesome.min.css" />
    <link rel="stylesheet" href="../assets/admin/plugins/fontawesome/css/all.min.css" />

    <!-- Animate CSS -->
    <link rel="stylesheet" href="../assets/admin/css/animate.min.css" />

    <!-- Select CSS -->
    <link rel="stylesheet" href="../assets/admin/css/select2.min.css" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="../assets/admin/css/admin.css" />
    <link href="../assets/admin/css/toastr.css" rel="stylesheet" />
    <!-- add ckeditor-->
    <script type="text/javascript" src="../assets/admin/ckeditor/ckeditor.js"></script>


</head>

<body>
    <div class="main-wrapper">
        <!-- Header -->
        <div class="header">
            <div class="header-left">
                <a href="/admin" class="logo logo-small">
                    <img src="../assets/admin/img/logo-icon.png"
                         alt="Logo"
                         width="30"
                         height="30" />
                </a>
            </div>
            <a href="javascript:void(0);" id="toggle_btn">
                <i class="fas fa-align-left"></i>
            </a>
            <a class="mobile_btn" id="mobile_btn" href="javascript:void(0);">
                <i class="fas fa-align-left"></i>
            </a>

            <ul class="nav user-menu">
                <!-- User Menu -->
                <li class="nav-item dropdown">
                    <a href="javascript:void(0)"
                       class="dropdown-toggle user-link nav-link"
                       data-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle"
                                 src="../assets/admin/img/user.jpg"
                                 width="40"
                                 alt="Admin" />
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="login.html">Đăng xuất</a>
                    </div>
                </li>
                <!-- /User Menu -->
            </ul>
        </div>
        <!-- /Header -->
        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-logo">
                <a href="/admin">
                    <img src="../assets/admin/img/logo.png"
                         class="img-fluid"
                         alt="" />
                </a>
            </div>
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>

                        <li class="active">
                            <a href="index.php">
                                <i class="fas fa-columns"></i> 
                                <span>Thống kê</span>
                            </a>
                        </li>
                        <li class="active" >
                            <a href="index.php?controller=categories" >
                                <i class="fas fa-layer-group"></i>
                                <span>Quản lý danh mục</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="index.php?controller=products">
                                <i class="fab fa-buffer"></i>
                                <span>Quản lý sản phẩm</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="index.php?controller=orders">
                                <i class="fas fa-shopping-cart"></i>
                                <span>Quản lý đơn hàng</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="index.php?controller=users">
                                <i class="fas fa-user"></i>
                                <span>Quản lý tài khoản </span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="index.php?controller=news">
                                <i class="fas fa-newspaper"></i>
                                 <span>Quản lý tin tức</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="index.php?controller=login&action=logout">
                                <i class="fas fa-user-alt-slash"></i> 
                                <span>Đăng xuất</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!-- /Sidebar -->

        <div class="page-wrapper">
           

 <?php echo $this->view; ?>  
 
 
        </div>
    </div>

    <!-- jQuery -->
    <script src="../assets/admin/script/jquery-3.5.0.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="../assets/admin/script/popper.min.js"></script>
    <script src="../assets/admin/plugins/bootstrap/js/bootstrap.min..js"></script>

    <!-- Datepicker Core JS -->
    <script src="../assets/admin/script/moment.min.js"></script>
    <script src="../assets/admin/script/bootstrap-datetimepicker.min.js"></script>

    <!-- Datatables JS -->
    <script src="../assets/admin/plugins/datatables/datatable.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="../assets/admin/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../assets/admin/script/bootstrapValidator.min.html"></script>

    <!-- Select2 JS -->
    <script src="../assets/admin/script/select2.min.js"></script>

    <!-- Custom JS -->
    <script src="../assets/admin/script/admin.js"></script>
    <script src="../assets/admin/script/toastr.js"></script>


    

</body>

</html>


