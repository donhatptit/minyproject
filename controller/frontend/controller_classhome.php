<?php
	class controller_classhome{
		public $model;
		public function __construct(){
			$this->model = new model();
			include "view/frontend/view_classhome.php";
		}
	}
	new controller_classhome();
?>