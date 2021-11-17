<?php 
	class Controller{
		public $fileName = null;
		public $fileLayout = null;
		public $view = null;
		public function loadView($fileName, $data= null){
			if( $data != null)
				extract($data);
			//kiểm tra xem đường dẫn file có tồn tại không
			if( file_exists("views/$fileName")){
				$this->fileName = $fileName;
				//đọc nội dung của fileName gán vào một biến
				ob_start();
					include"views/$fileName";
					$this->view = ob_get_contents();
				ob_get_clean();
				//kiểm tra nếu biến $this->fileLayout không null thì include nó
				if( $this->fileLayout != null)
					include "views/$this->fileLayout";
				else
					echo $this->view;
			}
			
		}
		//hàm kiểm tra đăng nhập( sử dụng cho trang admin)
			public function authentication(){
				if(isset($_SESSION["email"]) == false)
					header("location:index.php?controller=login");
			}
	}
 ?>