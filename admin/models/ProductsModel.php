<?php 
	trait ProductsModel{
		//lay ve danh sach cac ban ghi
		public function modelRead($recordPerPage){
			//lay bien page truyen tu url
			$page = isset($_GET["p"])&& $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products order by id desc limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
		}
		//tinh tong so ban ghi
		public function modelTotalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products");
			//tra ve so luong ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi tuong ung voi id truyen vao
		public function modelGetRecord(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("select * from products where id=:var_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id]);
			//tra ve mot ban ghi
			return $query->fetch();
		}
		public function modelUpdate(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			$name = $_POST["name"];
			$author = $_POST["author"];
			$description = $_POST["description"];
			$content = $_POST["content"];
			$hot = isset($_POST["hot"]) ? 1 : 0;	
			$price = $_POST["price"];	
			$discount = $_POST["discount"];	
			$category_id = $_POST["category_id"];			
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("update products set name=:var_name,author=:var_author,description=:var_description,content=:var_content,hot=:var_hot ,price=:var_price,discount=:var_discount,category_id=:var_category_id where id=:var_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id,"var_name"=>$name,"var_author"=>$author,"var_description"=>$description,"var_content"=>$content,"var_hot"=>$hot,"var_price"=>$price,"var_discount"=>$discount,"var_category_id"=>$category_id]);
			//---
			//neu user upload anh thi thuc hien upload			
			$photo = "";
			/*
				- $_FILES["photo"]["name"] -> lay ten file
				- time() -> tra ve mot so nguyen chi thoi gian hien tai
				- $_FILES["photo"]["tmp_name"] -> khi an nut submit thi file se duoc dua len thu muc tmp cua bo cai php (co duoi la .tmp)
				- move_uploaded_file -> chuyen file tu thu muc tmp sang thu muc muon upload
				- unlink(duongdanfile) -> xoa ten file
			*/
			if($_FILES["photo"]["name"] != ""){
				//---
				//lay anh cu de xoa
				$oldPhoto = $conn->query("select photo from products where id=$id");
				if($oldPhoto->rowCount() > 0){
					$record = $oldPhoto->fetch();
					//xoa anh
					if($record->photo != "" && file_exists("../assets/upload/products/".$record->photo))
						unlink("../assets/upload/products/".$record->photo);
				}
				//---
				$photo = time()."_".$_FILES["photo"]["name"];
				move_uploaded_file($_FILES["photo"]["tmp_name"],"../assets/upload/products/$photo");
				$query = $conn->prepare("update products set photo=:var_photo where id=$id");
				$query->execute(array("var_photo"=>$photo));
			}
			//---
		}
		public function modelCreate(){
			$name = $_POST["name"];
			$author = $_POST["author"];
			$description = $_POST["description"];
			$content = $_POST["content"];
			$hot = isset($_POST["hot"]) ? 1 : 0;	
			$price = $_POST["price"];	
			$discount = $_POST["discount"];	
			$category_id = $_POST["category_id"];
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//neu user upload anh thi thuc hien upload			
			$photo = "";
			/*
				- $_FILES["photo"]["name"] -> lay ten file
				- time() -> tra ve mot so nguyen chi thoi gian hien tai
				- $_FILES["photo"]["tmp_name"] -> khi an nut submit thi file se duoc dua len thu muc tmp cua bo cai php (co duoi la .tmp)
				- move_uploaded_file -> chuyen file tu thu muc tmp sang thu muc muon upload
				- unlink(duongdanfile) -> xoa ten file
			*/
			if($_FILES["photo"]["name"] != ""){
				$photo = time()."_".$_FILES["photo"]["name"];
				move_uploaded_file($_FILES["photo"]["tmp_name"],"../assets/upload/products/$photo");
			}
			//---		
			//update name			
			//chuan bi truy van
			$query = $conn->prepare("insert into products set name=:var_name,author=:var_author,description=:var_description,content=:var_content,hot=:var_hot,photo=:var_photo,price=:var_price,discount=:var_discount,category_id=:var_category_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_name"=>$name,"var_author"=>$author,"var_description"=>$description,"var_content"=>$content,"var_hot"=>$hot,"var_photo"=>$photo,"var_price"=>$price,"var_discount"=>$discount,"var_category_id"=>$category_id]);
			
		}
		public function modelDelete(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//---
			//lay anh cu de xoa
			$oldPhoto = $conn->query("select photo from products where id=$id");
			if($oldPhoto->rowCount() > 0){
				$record = $oldPhoto->fetch();
				//xoa anh
				if($record->photo != "" && file_exists("../assets/upload/products/".$record->photo))
					unlink("../assets/upload/products/".$record->photo);
			}
			//---
			//chuan bi truy van
			$query = $conn->prepare("delete from products where id=:var_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id]);
		}
		//liet ke cac danh muc cap 1 (cap con cua cap cha)
		public function modelCategoriesSub($category_id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id = $category_id order by id desc");
			//tra ve tat ca cac ket qua lay duoc
			return $query->fetchAll();
		}
		//liet ke cac danh muc cap 0
		public function modelCategories(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id = 0 order by id desc");
			//tra ve tat ca cac ket qua lay duoc
			return $query->fetchAll();
		}
	}
 ?>