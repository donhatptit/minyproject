<?php
class controller_post{
	public $model;
	public function __construct(){
		$this->model = new model();
		// phân trang
			$record_per_page = 4;
			$total = $this->model->num_rows("select post_id from tbl_post");
			$num_page = ceil($total/$record_per_page);
			$p = isset($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1) : 0;
			$from = $p * $record_per_page;
		$arr = $this->model->get_all("select * from tbl_post order by post_id desc limit $from, $record_per_page");
		include "view/backend/view_post.php";
	}
}
new controller_post();
?>