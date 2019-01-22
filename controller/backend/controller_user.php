<?php
	class controller_user{
		public $model;
		public function __construct(){
			$this->model = new model();
			// phân trang
			$record_per_page = 2;
			$total = $this->model->num_rows("select id_user from tbl_user");
			$num_page = ceil($total/$record_per_page);
			$p = isset($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1) : 0;
			$from = $p * $record_per_page;
			$arr = $this->model->get_all("select * from tbl_user order by id_user desc limit $from, $record_per_page");
			include "view/backend/view_user.php";
		}
	}
	new controller_user();
?>