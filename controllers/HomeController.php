<?php 
	//load file model
	include "models/HomeModel.php";
	class HomeController extends Controller{
		//ke thua model
		use HomeModel;
		//neu action khong duoc truyen len url thi mac dinh action=index
		public function index(){
			$this->loadView("HomeView.php");
		}
	}
 ?>