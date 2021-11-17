
<?php 
	// include file model vào đây
	include "models/NewsModel.php";
	class NewsController extends Controller{
		//kế thừa class NewsModel
		use NewsModel;
		public function index(){
			//quy định số bản ghi trên một trsng
			$recordPerPage =20;
			//tính số trang
			$numPage = ceil($this->modelTotalRecord()/$recordPerPage);
			//lấy dữ liệu từ model
			$data = $this->modelRead($recordPerPage);
			//gọi view, truyền dữ liệu ra view
			
			$this->loadView("NewsView.php", ["data"=>$data, "numPage"=>$numPage]);

		}
		public function update(){
			$id= isset($_GET["id"]) && $_GET["id"] >0 ? $_GET["id"] : 0;
			//lấy một bản ghi
			$record = $this->modelGetRecord();
			//tạo biến $action để biến được khi ấn submit thì trang sẽ subkmit đến đâu
			$action ="index.php?controller=news&action=updatePost&id=$id";
			//gọi view, truyền dữ liệu ra view
			$this->loadView("NewsFormView.php", ["record"=>$record,"action"=>$action]);

		}
		public function updatePost(){
			$id= isset($_GET["id"]) && $_GET["id"] >0 ? $_GET["id"] : 0;
			//gọi hàm modelUpdate để Update bản ghi
			$this->modelUpdate();
			//quay trở lại trang news
			header("location:index.php?controller=news");
		}
		public function create(){
			//tại biến $action để biết được khi ấn nút submit thì trang sẽ submit đến đâu
			$action ="index.php?controller=news&action=createPost";
			//gọi view, truyền dữ liệu ra view
			$this->loadView("NewsFormView.php", ["action"=>$action]);
		}
		public function createPost(){
			
			//gọi hàm modelCreate để Update bản ghi
			$this->modelCreate();
			//quay trở lại trang news
			header("location:index.php?controller=news");
		}
		public function delete(){
			$id= isset($_GET["id"]) && $_GET["id"] >0 ? $_GET["id"] : 0;
			//gọi hàm modelUpdate để update bản ghi
			$this->modelDelete();
			//quay trở lại trang news
			header("location:index.php?controller=news");
		}
		
	}
 ?>