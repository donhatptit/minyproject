<?php
	class controller_login{
		public $model;
		public function __construct(){
			$this->model = new model();
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$username = $_POST["username"];
				$password = $_POST["password"];
				$password = md5($password);
				$record = $this->model->get_a_record("SELECT * FROM tbl_user WHERE username = '$username'");
				// print_r($password);
				if(isset($record->username)){
					if($password == $record->password){
						$_SESSION["username"] = $record->fullname;
					}
				}
				header("location:admin.php");
			}
			include "view/backend/view_login.php";
		}
	}
	new controller_login();
?>