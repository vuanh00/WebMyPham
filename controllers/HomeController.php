<?php 
	//load file model
	include "models/HomeModel.php";
	class HomeController extends Controller{
		//Kế thừa model
		use HomeModel;
		//nếu action không được truyền lên url thì mặc định action= index
		public function index(){
			
			$this->loadView("HomeView.php");
		}
	}
 ?>