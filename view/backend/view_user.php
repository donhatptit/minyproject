<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quản lý User</title>
	<link rel="stylesheet" type="text/css" href="public/backend/css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->
		

		<div class="card border-default">
			
			<div class="card card-header badge-default text-black" style="padding:7px !important;">
				<div class="row">
					<div class="col-md-6">
						<h2>Quản Lý người dùng</h2>
					</div>
					<div class="col-md-6 text-right">
					<a href="admin.php?controller=add_edit_user&act=add" class="btn btn-primary">Thêm</a>
					</div>
				</div>
			</div>

				<div class="card-body">
				<!-- table -->
				<table class="table table-hover table-bordered">
					<tr>
						<th style="width: 250px;">Username</th>
						<th>Fullname</th>
						<th style="width: 300px;">Email</th>
						
						<th style="width: 150px;">Hành Động</th>
					</tr>
					
				<?php
				foreach ($arr as $rows): ?>		
					
					<tr>
						<td><?php echo $rows->username; ?></td>
						
						<td><?php echo $rows->fullname; ?></td>
						<td><?php echo $rows->email; ?></td>
						<td style="text-align: center;">
							<a href="admin.php?controller=add_edit_user&act=edit&id=<?php echo $rows->id_user; ?>" class="btn btn-default"><i class="fas fa-pencil-alt"></i></a> &nbsp;&nbsp;
							<a href="admin.php?controller=add_edit_user&act=delete&id=<?php echo $rows->id_user; ?>" onclick="return window.confirm('Are you sure ?')" class="btn btn-danger"><em class="fa fa-trash"></em></a>
						</td>
					</tr>
				<?php endforeach; ?>
				</table>
				<!-- end table -->
				</div>
			<div class="card-footer" style="padding:7px !important">
					<ul class="pagination">
						<li class="page-item"><a class="page-link" href="#">Trang</a></li>
						<?php  for($i = 1; $i<=$num_page; $i++): ?>
						<li class="page-item"><a class="page-link" href="admin.php?controller=user&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
						<?php endfor; ?>
					</ul>
				</div>
			</div>
		</div>
		<!-- end card -->
	</div>
	</div>
</div>
</body>
</html>