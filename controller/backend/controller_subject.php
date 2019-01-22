<?php
	class controller_subject{
		public $model;
		public function __construct(){
			$this->model = new model();
			// phân trang
			$record_per_page = 10;
			$total = $this->model->num_rows("select subject_id from tbl_subject");
			$num_page = ceil($total/$record_per_page);
			$p = isset($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1) : 0;
			$from = $p * $record_per_page;
			$arr = $this->model->get_all("select * from tbl_subject order by subject_id desc limit $from, $record_per_page");
			include "view/backend/view_subject.php";
		}
	}
	new controller_subject();
 ?>
