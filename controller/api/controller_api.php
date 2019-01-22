<?php
class controller_api{
	public $model;
	public function __construct(){
		$this->model = new model();
		$subject_id = $_GET["subject_id"];
		$num_rows = $this->model->num_rows("select * from tbl_post where subject_id =$subject_id");
		$result = $this->model->get_all("select * from tbl_post where subject_id =$subject_id limit 2,2");
		die (json_encode($result));
	}
}
new controller_api();
?>