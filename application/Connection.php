<?php 
	//kết nối csdl
	class Connection{
		//hàm kết nối csdl, trả về kết quả một biến -> biến này là biến obj
		public static function getInstance(){
			//new PDO(host, username;pasword)
			// $conn= new PDO("mysql:host=sql304.byethost33.com;dbname=b33_29697211_project_vuanh","b33_29697211","Vukimanh2300@");
			$conn= new PDO("mysql:hostname=localhost;dbname=project_vuanh","root","");
			//lấy dữ liệu theo kiểu unicode
			$conn->exec("set names utf8");
			//lấy kết quả trả về theo obj
			$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
			return $conn;
		}
	}
 ?>
 