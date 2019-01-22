<?php
	class controler_subject{
		public $model;
		public function __construct(){
			$this->model = new model();
			include "view/frontend/view_subject.php";
		}
	}
	new controler_subject();
?>