<?php
	class controller_class{
		public $model;
		public function __construct(){
			$this->model = new model();
			// phân trang
			$record_per_page = 5;
			$total = $this->model->num_rows("select class_id from tbl_class");
			$num_page = ceil($total/$record_per_page);
			$p = isset($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1) : 0;
			$from = $p * $record_per_page;
			$arr = $this->model->get_all("select * from tbl_class order by class_id desc limit $from, $record_per_page");
			include "view/backend/view_class.php";
		}
	}
	new controller_class();
?>