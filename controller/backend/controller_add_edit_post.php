<?php
	class Controller_add_edit_post{
		public $model;
		public function __construct(){
			$this->model = new model();
			$act = isset($_GET["act"]) ? $_GET["act"]:"";
			//lay bien id tu url
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			switch($act){
				case "edit":
					$form_action = "admin.php?controller=add_edit_post&act=do_edit&id=$id";
					//lay ban ghi co id truyen vao
					$arr = $this->model->get_a_record("select * from tbl_post where post_id=$id");
				break;
				case "do_edit":
					$name = $_POST["name"];
					$subject_id = $_POST["subject_id"];
					$content = $_POST["content"];
					//update ban ghi co id truyen vao
					$this->model->execute("update tbl_post set subject_id=$subject_id, name='$name',content='$content' where post_id=$id");
				
					//header("location:admin.php?controller=post");
					echo "<script>location.href='admin.php?controller=post'; </script>";
				break;
				case "add":
					$form_action = "admin.php?controller=add_edit_post&act=do_add";					
				break;
				case "do_add":
					$name = $_POST["name"];
					$subject_id = $_POST["subject_id"];
					$content = $_POST["content"];
					$poster = $_SESSION["username"];
					
					//insert ban ghi
					$this->model->execute("insert into tbl_post(name,subject_id,content, athour) values('$name','$subject_id','$content', '$poster')");
					// header("location:admin.php?controller=post");
					 echo "<script>location.href='admin.php?controller=post'; </script>";
					
				break;
			}
			include "view/backend/view_add_edit_post.php";
		}
	}
	new Controller_add_edit_post();
?>