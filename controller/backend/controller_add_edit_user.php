<?php
	class controller_add_edit_user{
		public $model;
		public function __construct(){
			$this->model = new model();
			$act = isset($_GET["act"]) ? $_GET["act"] : "";
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : "";
			switch ($act) {
				case 'edit':
					$record = $this->model->get_a_record("select * from tbl_user where id_user = $id");
					$form_action = "admin.php?controller=add_edit_user&act=do_edit&id=$id";
					include "view/backend/view_add_edit_user.php";
					break;
				case 'do_edit':
				$fullname = $_POST["fullname"];
				$email = $_POST["email"];
				$password = $_POST["password"];
				
				$fullname = str_replace("'", "\'",$fullname);
					$username = str_replace("'", "\'",$username);
					$email = str_replace("'", "\'",$email);
				//nếu password không bằng rỗng thì update pasword
					if($password != ""){
						//mã hóa pass
						$password = md5($password);
						
					}//update bản ghi
						$this->model->execute("update tbl_user set fullname='$fullname',email ='$email' where id_user=$id");
					//di chuyển trang đến trang user
					//header("location:admin.php?controller=user");
						header("location:admin.php?controller=user");
					# code...
					break;
				case 'add':
						$form_action = "admin.php?controller=add_edit_user&act=do_add&id=$id";
						//load view
						include "view/backend/view_add_edit_user.php";
						break;
					case 'do_add':
						$fullname = $_POST["fullname"];
						$email= $_POST["email"];
						$username = $_POST["username"];
						$password = $_POST["password"];
						
						//mã hóa pass
						$password = md5($password);
						//insert bản ghi
						$this->model->execute("insert into tbl_user(fullname, email, username, password) values('$fullname','$email','$username','$password')");
						//di chuyển trag đến trang user
						echo "<script>location.href='admin.php?controller=user'; </script>";
						break;
					case 'delete':
						//xóa các bản ghi
					$this->model->execute("delete from tbl_user where id_user=$id");
					//di chuyển trang đến user
					//header("location:admin.php?controller=user");
					echo "<script>location.href='admin.php?controller=user'; </script>";
						break;
				default:
					# code...
					break;
			}
			
		}
	}
	new controller_add_edit_user();
?>