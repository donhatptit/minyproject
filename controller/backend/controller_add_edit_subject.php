<?php
	class controller_add_edit_subject{
		public $model;
		public function __construct(){
			$this->model = new model();
			$act = isset($_GET["act"]) ? $_GET["act"]:"";
			//lay bien id tu url
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			switch($act){
				case "edit":
					$form_action = "admin.php?controller=add_edit_subject&act=do_edit&id=$id";
					//lay ban ghi co id truyen vao
					$arr = $this->model->get_a_record("select * from tbl_subject where subject_id=$id");
				break;
				case "do_edit":
					$name_subject = $_POST["name_subject"];
					$class_id = $_POST["class_id"];
					
					//update ban ghi co id truyen vao
					$this->model->execute("update tbl_subject set class_id=$class_id,name_subject='$name_subject' where subject_id=$id");
					
					//-----------
					//header("location:admin.php?controller=subject");
					echo "<script>location.href='admin.php?controller=subject'; </script>";
				break;
				case "add":
					$form_action = "admin.php?controller=add_edit_subject&act=do_add";					
				break;
				case "do_add":
					$name_subject = $_POST["name_subject"];
					$class_id = $_POST["class_id"];
					
					//insert ban ghi
					$this->model->execute("insert into tbl_subject(name_subject,class_id) values('$name_subject','$class_id')");
					// header("location:admin.php?controller=subject");
					 echo "<script>location.href='admin.php?controller=subject'; </script>";
					
				break;
				case 'delete':
						//xóa các bản ghi
					$this->model->execute("delete from tbl_subject where subject_id=$id");
					//di chuyển trang đến user
					//header("location:admin.php?controller=user");
					echo "<script>location.href='admin.php?controller=subject'; </script>";
			}
			include "view/backend/view_add_edit_subject.php";
		}
	}
	new controller_add_edit_subject();

?>