<?php 
  trait UsersModel{
    //lấy về danh sách các bản ghi
    public function modelRead($recordPerPage){
      //lấy biến page truyêfn từ url
      $page = isset($_GET["p"]) && $_GET["p"] >0 ? $_GET["p"]-1 : 0;
      //lấy từ bản ghi nào
      $from = $page * $recordPerPage;
      //lấy biến kết nối csdl
      $conn = Connection::getInstance();
      //thực hiện truy vấn
      $query = $conn->query("select * from users order by id desc limit $from, $recordPerPage");
      //trả về nhiều bản ghi
      return $query->fetchAll();
    }
    //tính tổng số bản ghi
    public function modelTotalRecord(){
      //lấy biến kết nối csdl;
      $conn = Connection::getInstance();
      //thực hiện truy vấn
      $query = $conn->query("select * from users");
      //trả về số lượng bản ghi
      return $query->rowCount();
    }
    //lấy một bản ghi tương ứng với id truyền vào
    public function modelGetRecord(){
      $id= isset($_GET["id"]) && $_GET["id"] >0 ? $_GET["id"] : 0;
      //lấy biến kết nối csdl
      $conn = Connection::getInstance();
      //chuẩn bị truy vấn
      $query = $conn->prepare("select * from users where id=:var_id");
      //thực thi truy vấn, có truyền tham số vào câu lệnh sql
      $query->execute(["var_id"=>$id]);
      //trả về một bản ghi
      return $query->fetch();
    }
    public function modelUpdate(){
      $id= isset($_GET["id"]) && $_GET["id"] >0 ? $_GET["id"] : 0;
      $name = $_POST["name"];
      $password = $_POST["password"];
      $phone = $_POST["phone"];
      $address = $_POST["address"];
      //update name
      //lấy biến kết nối csdl
      $conn = Connection::getInstance();
      //chuẩn bị truy vấn
      $query = $conn->prepare("update users set name=:var_name, phone=:var_phone, address=:var_address where id=:var_id");
      //thực thi truy vấn, có truyền tham số vào câu lệnh sql
      $query->execute(["var_id"=>$id, "var_name"=>$name, "var_phone"=>$phone, "var_address"=>$address]);
      
      //nếu password không rỗng thì update password
      if($password != ""){
        //mã hóa password
        $password = md5($password);
        //chuẩn bị truy vấn
        $query = $conn->prepare("update users set password=:var_password where id=:var_id");
        //thực thi truy vấn, có truyền tham số vào câu lệnh sql
        $query->execute(["var_id"=>$id, "var_password"=>$password]);
      }
    }
    public function modelCreate(){
      $name = $_POST["name"];
      $email = $_POST["email"];
      $phone = $_POST["phone"];
      $password = $_POST["password"];
      $address = $_POST["address"];
      //ma hoa password
      $password = md5($password);
      //update name
      //lay bien ket noi csdl
      $conn = Connection::getInstance();
      //kiem tra xem email co trung voi email da co trong csdl khong
      $queryEmail = $conn->prepare("select email from users where email=:var_email");
      $queryEmail->execute(["var_email"=>$email]);
      if($queryEmail->rowCount() == 0){
        //chuan bi truy van
        $query = $conn->prepare("insert into users set name=:var_name,email=:var_email,phone=:var_phone,password=:var_password, address=:var_address");
        //thuc thi truy van, co truyen tham so vao cau lenh sql
        $query->execute(["var_name"=>$name,"var_email"=>$email,"var_phone"=>$phone,"var_password"=>$password, "var_address"=>$address]); 
        header("location:index.php?controller=users");
      }else{
        header("location:index.php?controller=users&action=create&notify=email-exists");  
      }
    }

    public function modelDelete(){
      $id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
      //lay bien ket noi csdl
      $conn = Connection::getInstance();
      //chuan bi truy van
      $query = $conn->prepare("delete from users where id=:var_id");
      //thuc thi truy van, co truyen tham so vao cau lenh sql
      $query->execute(["var_id"=>$id]);
    } 
    

  }
 ?>