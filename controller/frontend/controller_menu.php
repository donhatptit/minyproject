<?php
	class controller_menu{
		public $model;
		public function __construct(){
			$this->model=new model();
			include "view/frontend/view_menu.php";
		}
	}
	new controller_menu();
?>