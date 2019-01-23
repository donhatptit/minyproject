<?php
	class Controller_subject{
		public $model;
		public function __construct(){
			$this->model = new model;
			include "view/frontend/view_subject.php";
		}
	}
	new controller_subject();
?>