<?php 
	//start session
	session_start();
	//load file Connection.php
	include "../application/Connection.php";
	//load file Controller.php
	include "../application/Controller.php";
 ?>

<?php 
	//load dong mvc du vao tham so controller truyen len url
	$controller = isset($_GET["controller"]) ? $_GET['controller']:"Home";
	$action = isset($_GET["action"]) ? $_GET['action']:"index";	
	//tao duong dan vat ly cua file controller trong MVC. VD: controllers/PhongBanController.php
	//ham ucfirst(string) se viet hoa ky tu dau tien
	$controllerFile = "controllers/".ucfirst($controller)."Controller.php";
	//file_exists(duongdan) tra ve true neu file ton tai, nguoc lai tra ve false
	if(file_exists($controllerFile)){
		include $controllerFile;
		$controllerClass = ucfirst($controller)."Controller";
		//khoi tao object cua class
		$obj = new $controllerClass();
		//goi den action
		$obj->$action();
	}else die("File $controllerFile không tồn tại");
	//ham die("chuoi") xuat ra thong bao chuoi
 ?>