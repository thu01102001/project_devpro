<?php 
	trait SlidesModel{
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
			$query = $conn->query("select * from slide order by id desc limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
		}
		//tinh tong so ban ghi
		public function modelTotalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from slide");
			//tra ve so luong ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi tuong ung voi id truyen vao
		public function modelGetRecord(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("select * from slide where id=:var_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id]);
			//tra ve mot ban ghi
			return $query->fetch();
		}
		public function modelUpdate(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			$name = $_POST["name"];			
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("update slide set name=:var_name where id=:var_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id,"var_name"=>$name]);
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
				$oldPhoto = $conn->query("select photo from slide where id=$id");
				if($oldPhoto->rowCount() > 0){
					$record = $oldPhoto->fetch();
					//xoa anh
					if($record->photo != "" && file_exists("../assets/upload/slides/".$record->photo))
						unlink("../assets/upload/slides/".$record->photo);
				}
				//---
				$photo = time()."_".$_FILES["photo"]["name"];
				move_uploaded_file($_FILES["photo"]["tmp_name"],"../assets/upload/slides/$photo");
				$query = $conn->prepare("update slide set photo=:var_photo where id=$id");
				$query->execute(array("var_photo"=>$photo));
			}
			//---
		}
		public function modelCreate(){
			$name = $_POST["name"];
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
				move_uploaded_file($_FILES["photo"]["tmp_name"],"../assets/upload/slides/$photo");
			}
			//---		
			//update name			
			//chuan bi truy van
			$query = $conn->prepare("insert into slide set name=:var_name,photo=:var_photo");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_name"=>$name,"var_photo"=>$photo]);
			
		}
		
		public function modelDelete(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//---
			//lay anh cu de xoa
			$oldPhoto = $conn->query("select photo from slide where id=$id");
			if($oldPhoto->rowCount() > 0){
				$record = $oldPhoto->fetch();
				//xoa anh
				if($record->photo != "" && file_exists("../assets/upload/slides/".$record->photo))
					unlink("../assets/upload/slide/".$record->photo);
			}
			//---
			//chuan bi truy van
			$query = $conn->prepare("delete from slide where id=:var_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id]);
		}
	}
 ?>