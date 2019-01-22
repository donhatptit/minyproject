<?php
class controller_lastest{
	public $model;
	public function __construct(){
		$this->model = new model();
		include "view/frontend/view_lastest.php";
	}
}
new controller_lastest();
?>