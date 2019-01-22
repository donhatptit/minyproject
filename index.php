<?php
	session_start();
	include "config.php";
	include "model/model.php";
	//lấy biến controller truyền từ url
		$controller = isset($_GET["controller"]) ? $_GET["controller"] : "home";
		//nối các thành phần để ra đường dẫn vật lý
		$file_controller = "controller/frontend/controller_$controller.php";
		//load file master
		//kiểm tra nếu tồn tại MVC ở phần main load file master_trangchu.php, còn nếu k tồn tại MVC ở phần main thì load file master_trangchu.php
		if(file_exists($file_controller))
			include "view/frontend/trangcon.php";
		else
			include "view/frontend/trang-chu.php";
?>