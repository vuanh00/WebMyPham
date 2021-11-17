

<header class="header" role="banner">
    <div class="header-middle">
        <div class="container">
            <div class="left">
                <div id="quickSearch">
                  <div class="form-field">
                      <div style="display: flex; width: 350px;">
                        <input style="position: relative;" autocomplete="off" class="form-input" id="key"placeholder="Tìm kiếm sản phẩm" >
                        <button style="background-color: white; position: absolute; margin-left: 320px;margin-top: 10px;"  type="submit"> <i class="fa fa-search" id="btnSearch"></i> </button>
                      </div>
                     <div class="smart-search">
                      <ul>
                        <li><img src="assets/upload/products/1629722045_1629293184_132218025766776697_7.jpg"><a href="#">17 - 16 - MACBOOK PRO 16 TOUCH BAR 2.6GHZ CORE I7-16GB-</a></li>
                        <li><img src="assets/upload/products/1629722045_1629293184_132218025766776697_7.jpg"><a href="#">17 - 16 - MACBOOK PRO 16 TOUCH BAR 2.6GHZ CORE I7-16GB-</a></li>
                        <li><img src="assets/upload/products/1629722045_1629293184_132218025766776697_7.jpg"><a href="#">17 - 16 - MACBOOK PRO 16 TOUCH BAR 2.6GHZ CORE I7-16GB-</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                 <style type="text/css">
                 .form-field{margin-top:25px; position: relative;}
                .smart-search{position: absolute; width: 350px; background: white; height: 350px; overflow: scroll; z-index: 1; display: none; }
                .smart-search ul{ padding: 0px;margin: 0px; list-style: none;
                }
                .smart-search ul li{
                  border-bottom: 1px solid #dddddd;
                }
                .smart-search img{width: 70px; margin-right: 5px;}
              </style>
              <script type="text/javascript">
                //tính năng này phải dùng kết hợp với jquery ->phải load thư viện jquerry( nếu bài chưa load jquerry, kiểm tra jquerry có hoạt động không bằng  cách thêm alert("ok") vào bên trong tag này)
                $(document).ready(function(){
                  //bắt sựn kiện click của id=btndSearch
                  $("#btnSearch").click(function(){
                    var key = $("#key").val();
                    //di chuyển đến url tìm kiếm
                    location.href ="index.php?controller=search&action=name&key="+key;

                  });
                  // smart search
                  $(".form-input").keyup(function(){
                      var strkey = $("#key").val();
                      if(strkey.trim() =="")
                        $(".smart-search").attr("style", "display:none");
                      else{
                        $(".smart-search").attr("style", "display:block");
                        //sử dụng ẫ để lấy dữ liệu
                        $.get("index.php?controller=search&action=ajaxSearch&key="+strkey, function(data){
                          //clear các thẻ li bên trong thẻ ul
                          $(".smart-search ul").empty();
                          //thêm dữ liệu vừa lấy được bằng ẫ vào thẻ ul
                          $(".smart-search ul").append(data);
                        });
                      }
                  })
                }); 
              </script>
            </div>

            <div class="center">
                <h1 class="header-logo">
                <a href="index.html">
                  <img class="header-logo-image" src="assets/frontend/images/beautica-logo_1503892881__02505.original.png" alt="Beautica" title="Beautica">
                </a>
                </h1>            
            </div>

            <div class="right">

              <div class="customer-dropdown-login hidden-xs hidden-sm">
                <div class="say-hi"><span>Xin chào,</span></div>
                <div class="customer-login">
                    <?php   if(isset($_SESSION['customer_email'])): ?>
                    <a href="#"><?php  echo $_SESSION['customer_email']; ?></a>&nbsp; &nbsp;<a href="index.php?controller=account&action=logout">Đăng xuất</a>
                  <?php   else: ?>
                      <a href="index.php?controller=account&action=login">Đăng nhập</a>&nbsp; &nbsp;<a href="index.php?controller=account&action=register">Đăng ký</a>
                  <?php   endif; ?>
                    <!-- <a href="javascript:void(0);" class="toggle-dropdown-login">Đăng nhập</a> or <a href="logind85d.html?action=create_account">Đăng ký</a> -->
                    <!-- <div id="dropdown-login">
                        <h3>Login</h3>
                        <form class="login-popup" id="loginForm" action="https://keen-demo.mybigcommerce.com/login.php?action=check_login" method="post" name="mainLoginForm">
                            <fieldset class="form-fieldset">
                                <div class="form-field">
                                    <input class="form-input" name="login_email" id="login_email" type="email" placeholder="Email address">
                                </div>
                                <div class="form-field">
                                    <input class="form-input" id="login_pass" type="password" name="login_pass" placeholder="Password">
                                </div>
                                <p style="text-align: center;display: none;" id="popup-loading"><img src="assets/frontend/s-tphjucml/stencil/3cd4e730-d571-0139-7941-62e43660c985/e/38323d20-d594-0139-1e5d-3a208d481fb5/img/vendor/jstree/throbber.gif"></p>
                                <div class="form-actions">
                                    <input type="submit" class="btn btn-alt" value="Login">
                                </div>
                            </fieldset>
                        </form>
                        <div class="separated-form">
                            <a class="forgot-password" href="login8311.html?action=reset_password">Forgot your password?</a>
                            <a href="logind85d.html?action=create_account" class="btn btn-primary"><span>Create Account</span></a>
                        </div>
                    </div> -->
                </div>
              </div>

              <div class="wishlist-link">
                  <a href="login830b.html" title="Wish lists"><i class="fa fa-heart"></i></a>
              </div>
              <?php 
                  $ProductNumberInCart = 0;
                  if(isset($_SESSION['cart']) != NULL)
                    foreach($_SESSION['cart'] as $product)
                      $ProductNumberInCart++;
               ?>
              
              <div class="customer-dropdown-login hidden-xs hidden-sm">
                <div class="customer-login top-cart" id="top-cart">
                    <a href="javascript:void(0);" class="toggle-dropdown-login"><svg><use xlink:href="#my-cart-icon" /></svg><span class="countPill cart-quantity"><?php echo $ProductNumberInCart; ?></span></a> 
                    <div id="dropdown-login" style="width: 400px; padding: 10px;">
                        <ul class="list-unstyled">
                        <?php if(isset($_SESSION['cart']) != NULL): ?>
                          <?php foreach($_SESSION['cart'] as $product): ?>
                        <li class="menu-product" id="">
                          <div style="margin-right: 5px;  width: 25%" class="image"> <a href="index.php?controller=products&action=detail&id=<?php echo $product["id"]; ?>"> <img alt="<?php echo $product["name"]; ?>" src="assets/upload/products/<?php echo $product["photo"]; ?>" title="<?php echo $product["name"]; ?>" class="img-responsive"> </a> </div>
                          <div style="margin-right: 5px; width: 70%;" class="info">
                            <p><a href="index.php?controller=products&action=detail&id=<?php echo $product["id"]; ?>"><?php echo $product["name"]; ?></a></br>
                           <?php echo $product["number"]; ?> x <?php echo number_format($product["price"]); ?>₫</p>
                          </div>
                          <div style="width: 5%"> <a href="index.php?controller=cart&action=delete&id=<?php echo $product["id"]; ?>"> <i class="fa fa-times"></i></a> </div>
                        </li><hr>
                          <?php endforeach; ?>
                        <?php endif; ?>
                      </ul>
                        
                    </div>
                </div>
              </div>
            </div>

        </div>
    </div>
    <div class="navPages-container" id="menu" data-menu>
       
        <div class="container">
            <nav class="navPages">
              <ul class="navPages-list">
                  <li class="navPages-item">
                      <a class="navPages-action" href="index.php">Trang chủ</a>
                  </li>
                  <li class="navPages-item">
                      <a class="navPages-action" href="makeup/index.html">Giới thiệu</a>
                  </li>
                  
                  <li class="navPages-item">
                      <a class="navPages-action has-subMenu" href="body-art/index.html">
                        <span>sản phẩm</span>
                        <span class="triangle-with-shadow"></span>
                      </a>
                      <div class="navPage-subMenu" id="navPages-60" tabindex="-1">
                          <ul class="navPage-subMenu-list">
                            <?php 
                                $conn = Connection::getInstance();
                                $query = $conn->query("select * from categories where parent_id = 0 order by id desc");
                                $categories = $query->fetchAll();
                             ?>  
                             <?php foreach($categories as $rows): ?>
                              <li class="navPage-subMenu-item">
                                  <a class="navPage-subMenu-action navPages-action has-subMenu" href="index.php?controller=products&action=category&id=<?php echo $rows->id; ?>">
                                      <span><?php echo $rows->name; ?></span>
                                  </a>
                                  <ul class="navPage-childList" id="navPages-68">
                                    <?php 
                                        $querySub = $conn->query("select * from categories where parent_id = {$rows->id} order by id desc");
                                        $categoriesSub = $querySub->fetchAll();
                                     ?>
                                      <?php foreach($categoriesSub as $rowsSub): ?>
                                      <li class="navPage-childList-item">
                                          <a class="navPage-childList-action navPages-action" href="index.php?controller=products&action=category&id=<?php echo $rowsSub->id; ?>"><span><?php echo $rowsSub->name; ?></span></a>
                                      </li>
                                      <?php endforeach; ?>
                                      
                                  </ul>
                              </li>
                            <?php endforeach; ?>
                          </ul>
                      </div>
                  </li>
                  
                  <li class="navPages-item">
                      <a class="navPages-action" href="index.php?controller=news">tin tức</a>
                  </li>
                  <li class="navPages-item">
                      <a class="navPages-action" href="index.php?controller=contact">Bản đồ</a>
                  </li>    
                  <li class="navPages-item">
                      <a class="navPages-action" href="index.php?controller=contact">Liên hệ</a>
                  </li>    
              </ul>
            </nav>
        </div>
    </div>
</header>
