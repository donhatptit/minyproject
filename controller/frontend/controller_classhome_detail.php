<?php
	class ControllerClasshomeDetail{
		public $model;
		public function __construct(){
			$this->model = new model();
			$record_per_page = 4;
			$id = isset($_GET["id"]) ? $_GET["id"]:"";
			$class = $this->model->get_a_record("select * from tbl_class where class_id = $id");
			$total = $this->model->num_rows("select * from tbl_post where subject_id in (select subject_id from tbl_subject where class_id = $id )");
			$num_page = ceil($total/$record_per_page);
			$p = isset($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1):0;
			$from = $p * $record_per_page;
			$arr = $this->model->get_all("select * from tbl_post where subject_id in (select subject_id from tbl_subject where class_id = $id ) limit $from, $record_per_page");
			include "view/frontend/view_classhome_detail.php";
		}
	}
	new ControllerClasshomeDetail();
?>