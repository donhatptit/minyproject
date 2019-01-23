<?php
	class controler_category{
		public $model;
		public function __construct(){
			$this->model = new model();
			include "view/frontend/view_category.php";
		}
	}
	new controler_category();
?>