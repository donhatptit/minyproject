<?php
	class ControllerLastestDetail{
		public $model;
		public function __construct(){
			$this->model = new model();
			$record_per_page = 6;
			$id = isset($_GET["id"]) ? $_GET["id"]:"";
			$total = $this->model->num_rows("select * from tbl_post");
			
			$num_page = ceil($total/$record_per_page);
			$p = isset($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1):0;
			$from = $p * $record_per_page;
			$arr = $this->model->get_all("select * from tbl_post order by post_id desc limit $from, $record_per_page");
			include "view/frontend/view_lastest_detail.php";
		}
	}
	new ControllerLastestDetail();
?>