<?php
	class controller_logout{
		public function __construct(){
			unset($_SESSION['username']);
			session_destroy();
			header('Location:admin.php');
		}
	}
	new controller_logout();
?>