<?php 
	//start session
	session_start();
	//load file Connection.php
	include "application/Connection.php";

	//load file Controller.php
	include "application/Controller.php";
 ?>

<?php 
	// load động mvc dựa vào tham số controller truyền lên url
	/*
		controller = ChucDanh
		ghép chuỗi để biến thành đường dẫn file
		fileController = controllers/ChucDanhController.php
		include file để
	*/
	$controller = isset($_GET["controller"])? $_GET["controller"]: "Home";
	$action = isset($_GET["action"])? $_GET["action"]: "index";
	//tạo đường dẫn vật lý của file controller trong mVC, vd: controllers/PhongBanController.php
	/*
	- hosting
	- hosting windows: chạy bằng hệ điều hành windows
		- tên file: khong phân biệt hoa thường
	- hosting linux: chạy bằng hệ điều hành linux
		- tên file: phân biệt hoa thường, nếu viết nhầm hoa thường thì sẽ không load file đúng
	*/
		//hàm ucfirst(string) sẽ viết hoa ký tự đầu tiên
	$controllerFile="controllers/".ucfirst($controller)."Controller.php";
	//file_exitst(đường dẫn) trả về true nếu file tồn tại, ngược lại trả về false
	if(file_exists($controllerFile)){
		include $controllerFile;
		$controllerClass = $controller."Controller";
		//khởi tạo obj của class
		$obj = new $controllerClass();
		//gọi đến action
		$obj->$action();

	}
	else die("File $controllerFile không tồn tại");
	//hàm die("chuỗi") xuất ra thông báo chuỗi
 ?>
