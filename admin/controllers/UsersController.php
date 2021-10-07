<?php 
	//include file model vao day
	include "models/UsersModel.php";
	class UsersController extends Controller{
		//ke thua class UsersModel
		use UsersModel;
		public function index(){
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 4;
			//tinh so trang
			$numPage = ceil($this->modelTotalRecord()/$recordPerPage);
			//lay du lieu tu model
			$data = $this->modelRead($recordPerPage);
			//goi view, truyen du lieu ra view
			$this->loadView("UsersView.php",["data"=>$data,"numPage"=>$numPage]);
		}
		public function update(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			//lay mot ban ghi
			$record = $this->modelGetRecord();
			//tao bien $action de biet duoc khi an nut submit thi trang se submit den dau
			$action = "index.php?controller=users&action=updatePost&id=$id";
			//goi view, truyen du lieu ra view
			$this->loadView("UsersFormView.php",["record"=>$record,"action"=>$action]);
		}
		public function updatePost(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			//goi ham modelUpdate de update ban ghi
			$this->modelUpdate();
			//quay tro lai trang users
			header("location:index.php?controller=users");
		}
		public function create(){
			//tao bien $action de biet duoc khi an nut submit thi trang se submit den dau
			$action = "index.php?controller=users&action=createPost";
			//goi view, truyen du lieu ra view
			$this->loadView("UsersFormView.php",["action"=>$action]);
		}
		public function createPost(){
			//goi ham modelCreate de create ban ghi
			$this->modelCreate();
			//quay tro lai trang users
			//header("location:index.php?controller=users");
		}
		public function delete(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			//goi ham modelUpdate de update ban ghi
			$this->modelDelete();
			//quay tro lai trang users
			header("location:index.php?controller=users");
		}
	}
 ?>