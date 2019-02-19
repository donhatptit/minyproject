<?php
	class ControllerSearch{
		public $model;
		public function __construct(){
            $this->model = new model();
        	$key = $_GET["key"];
        if (empty($key)) {
            echo "<script>alert('Bạn chưa nhập thông tin cần tìm kiếm')</script>";
            echo "<script>location.href='trang-chu'</script>";
        } else {
            
            $record_num_page = 4;
            $total = $this->model->num_rows("select * from tbl_post where name like '%$key%'");
            $result_page = ceil($total/$record_num_page);
            $p = isset($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1):0;
            $from = $p * $record_num_page;
           $arr = $this->model->get_all("select * from tbl_post where name like '%$key%' limit $from, $record_num_page");
        include "view/frontend/view_search.php";
    }
}
}
	new ControllerSearch();
?>

