<?php 
	//include file model vao day
	include "models/SlidesModel.php";
	class SlidesController extends Controller{
		//ke thua class SlidesModel
		use SlidesModel;
		public function index(){
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 20;
			//tinh so trang
			$numPage = ceil($this->modelTotalRecord()/$recordPerPage);
			//lay du lieu tu model
			$data = $this->modelRead($recordPerPage);
			//goi view, truyen du lieu ra view
			$this->loadView("SlidesView.php",["data"=>$data,"numPage"=>$numPage]);
		}
		public function update(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			//lay mot ban ghi
			$record = $this->modelGetRecord();
			//tao bien $action de biet duoc khi an nut submit thi trang se submit den dau
			$action = "index.php?controller=slides&action=updatePost&id=$id";
			//goi view, truyen du lieu ra view
			$this->loadView("SlidesFormView.php",["record"=>$record,"action"=>$action]);
		}
		public function updatePost(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			//goi ham modelUpdate de update ban ghi
			$this->modelUpdate();
			//quay tro lai trang slides
			header("location:index.php?controller=slides");
		}
		public function create(){
			//tao bien $action de biet duoc khi an nut submit thi trang se submit den dau
			$action = "index.php?controller=slides&action=createPost";
			//goi view, truyen du lieu ra view
			$this->loadView("SlidesFormView.php",["action"=>$action]);
		}
		public function createPost(){
			//goi ham modelCreate de create ban ghi
			$this->modelCreate();
			//quay tro lai trang slides
			header("location:index.php?controller=slides");
		}
		public function delete(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			//goi ham modelUpdate de update ban ghi
			$this->modelDelete();
			//quay tro lai trang slides
			header("location:index.php?controller=slides");
		}
	}
 ?>