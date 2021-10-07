<?php 
	class HomeController extends Controller{
		//ham tao
		public function __construct(){
			//kiem tra xem user da dang nhap chua
			$this->authentication();
		}
		public function index(){
			//load view
			$this->loadView("HomeView.php");
		}
	}
 ?>