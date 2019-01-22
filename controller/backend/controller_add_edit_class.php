<?php
	class controller_add_edit_class{
		public $model;
		public function __construct(){
			$this->model = new model();
			$act = isset($_GET["act"]) ? $_GET["act"]:"";
			//lay bien id tu url
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			switch($act){
				case "edit":
					$form_action = "admin.php?controller=add_edit_class&act=do_edit&id=$id";
					//lay ban ghi co id truyen vao
					$arr = $this->model->get_a_record("select * from tbl_class where class_id=$id");
				break;
				case "do_edit":
					$class = $_POST["class"];
					
					
					//update ban ghi co id truyen vao
					$this->model->execute("update tbl_class set class='$class' where class_id=$id");
					
					//-----------
					//header("location:admin.php?controller=class");
					echo "<script>location.href='admin.php?controller=class'; </script>";
				break;
				case "add":
					$form_action = "admin.php?controller=add_edit_class&act=do_add";					
				break;
				case "do_add":
					$class = $_POST["class"];
				
					
					//insert ban ghi
					$this->model->execute("insert into tbl_class(class) values('$class')");
					// header("location:admin.php?controller=class");
					 echo "<script>location.href='admin.php?controller=class'; </script>";
					
				break;
				case 'delete':
						//xóa các bản ghi
					$this->model->execute("delete from tbl_class where class_id=$id");
					//di chuyển trang đến user
					//header("location:admin.php?controller=user");
					echo "<script>location.href='admin.php?controller=class'; </script>";
			}
			include "view/backend/view_add_edit_class.php";
		}
	}
	new controller_add_edit_class();

?>