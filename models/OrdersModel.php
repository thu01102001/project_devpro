<?php 
	trait OrderModel{
		//lay ve danh sach cac ban ghi
		public function modelRead($recordPerPage){
			//lay bien page truyen tu url
			$page = isset($_GET["p"])&& $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			$customer_id = $_SESSION['customer_id'];
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from orders where customer_id = $customer_id order by id desc limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
		}
		//tinh tong so ban ghi
		public function modelTotalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from orders");
			//tra ve so luong ban ghi
			return $query->rowCount();
		}
		//lấy bản ghi họ và tên
		public function modelGetCustomer($customer_id) {
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select name, email, address, phone from customers where id = $customer_id");
			//tra ve so luong ban ghi
			return $query->fetch();
		}
		//chi tiet don hang
		public function modelOrdersDetail($order_id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from orderdetails where order_id=$order_id");
			//tra ve mot ban ghi
			return $query->fetchAll();
		}
		public function modelGetProduct($product_id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products where id=$product_id");
			//tra ve nhieu ban ghi
			return $query->fetch();
		}
        //giao hàng
        public function modelDelivery($id) {
            //lay bien ket noi csdl
			$conn = Connection::getInstance();
            //thực hiện truy vấn
            $query = $conn->query("update orders set status = 1 where id=$id");
        }
		//đã nhận
        public function modelDelivery1($id) {
            //lay bien ket noi csdl
			$conn = Connection::getInstance();
            //thực hiện truy vấn
            $query = $conn->query("update orders set hot = 1 where id=$id");
        }
	}
 ?>