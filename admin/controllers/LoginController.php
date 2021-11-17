
<?php 
	//load LoginModel.php
	include "models/LoginModel.php";
	class LoginController extends Controller{
		//kế thừa class LoginModel
		use LoginModel;
		public function index(){
			$this->loadView("LoginView.php");
		}
		public function login(){
			//gọi hàm modelLogin trong class LoginModel
			$this->modelLogin();
		}
		//đăng xuất
		public function logout(){
			//hủy biến session
			unset($_SESSION['email']);
			//di chuyển đến một url khác
			header("location:index.php");
		}
	}
 ?>