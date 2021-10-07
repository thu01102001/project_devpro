<?php 
	trait HomeModel{
		//san pham noi bat (8 san pham)
		public function modelSaleProduct(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where hot = 1 order by id desc limit 0,8");
			return $query->fetchAll();
		}
		//lấy 8 sp ở sản phẩm sale
		public function modelHotProduct(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products order by id desc limit 5,8");
			return $query->fetchAll();
		}
		//lấy 4 sp ở sản phẩm ở sách sắp phát hành
		public function modelNewProduct(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products order by id desc limit 0,4");
			return $query->fetchAll();
		}
		//lay cac danh muc co chua san pham ben trong
		public function modelCategories(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where id in (select category_id from products)");
			return $query->fetchAll();
		}
		//lay cac san pham thuoc danh muc
		public function modelProducts($category_id){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where category_id = $category_id order by id desc limit 0,8");
			return $query->fetchAll();
		}
		//láy tin tức ở trang sách nên đọc
		public function modelHotNews(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from news where hot = 1 order by id desc limit 0,5");
			return $query->fetchAll();
		}
	}
 ?>