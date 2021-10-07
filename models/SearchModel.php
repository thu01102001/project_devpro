<?php
    trait SearchModel {
        public function modelRead($recordPerPage){
            $key= isset($_GET["key"]) ? $_GET["key"] : 0;
			//lay bien page truyen tu url
			$page = isset($_GET["p"])&& $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products where name like '%$key%' order by id desc limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
		}
		//tinh tong so ban ghi
		public function modelTotalRecord(){
            $key= isset($_GET["key"]) ? $_GET["key"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products where name like '%$key%'");
			//tra ve so luong ban ghi
			return $query->rowCount();
		}
        //lay ve danh sach cac ban ghi
		public function modelReadSearchPrice($recordPerPage){
			$fromPrice = isset($_GET["fromPrice"]) ? $_GET["fromPrice"] : 0;
			$toPrice = isset($_GET["toPrice"]) ? $_GET["toPrice"] : 0;
			//lay bien page truyen tu url
			$page = isset($_GET["p"])&& $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products where price >= $fromPrice and price <= $toPrice order by id desc limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
		}
		//tinh tong so ban ghi
		public function modelTotalRecordSearchPrice(){
			$fromPrice = isset($_GET["fromPrice"]) ? $_GET["fromPrice"] : 0;
			$toPrice = isset($_GET["toPrice"]) ? $_GET["toPrice"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products where price >= $fromPrice and price <= $toPrice");
			//tra ve so luong ban ghi
			return $query->rowCount();
		}
        public function modelAjaxSearch() {
			//lay bien ket noi csdl
            $key = isset($_GET["key"]) ? $_GET["key"] : "";
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products where name like '%$key%'");
			//tra ve tất ban ghi
			return $query->fetchAll();
		}
    }
?>