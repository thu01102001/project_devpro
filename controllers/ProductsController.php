<?php 
	include "models/ProductsModel.php";
	class ProductsController extends Controller{
		//ke thua
		use ProductsModel;
		public function category(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 8;
			//tinh so trang
			$numPage = ceil($this->modelTotalRecord()/$recordPerPage);
			//lay du lieu tu model
			$data = $this->modelRead($recordPerPage);
			//goi view, truyen du lieu ra view
			$this->loadView("CategoryProductsView.php",["data"=>$data,"numPage"=>$numPage, "id"=>$id]);
		}
		//chi tiet san pham
		public function detail(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			$record = $this->modelGetProduct($id);	
			//goi view, truyen du lieu ra view
			$this->loadView("DetailProductsView.php",["record"=>$record,"id"=>$id]);
		}
		//danh gia so sao
		public function rating(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			$this->modelRating();
			//di chuye den trang chi tiet san pham
			header("location:index.php?controller=products&action=detail&id=$id");
		}
		public function modelSameProduct(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products order by id desc limit 5,8");
			return $query->fetchAll();
		}
		public function modelSeenProduct(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products order by id desc limit 12,8");
			return $query->fetchAll();
		}
	}
 ?>