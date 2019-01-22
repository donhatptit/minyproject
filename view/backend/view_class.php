	<div class="container">
<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->
		

		<div class="card border-default">
			
			<div class="card card-header badge-default text-black" style="padding:7px !important;">
				<div class="row">
					<div class="col-md-6">
						<h2>Quản Lý Lớp</h2>
					</div>
					<div class="col-md-6 text-right">
					<a href="admin.php?controller=add_edit_class&act=add" class="btn btn-primary">Thêm</a>
					</div>
				</div>
			</div>

				<div class="card-body">
				<!-- table -->
				<table class="table table-hover table-bordered">
					<tr>
						<th style="width: 250px; text-align: center;">Tên Lớp</th>
						
						<th style="width: 150px;text-align: center;">Hành Động</th>
					</tr>
					
					<?php
						foreach ($arr as $rows): 
					?>
					
					<tr>
						<td><?php echo $rows->class; ?></td>
						
						<td style="text-align: center;">
							<a href="admin.php?controller=add_edit_class&act=edit&id=<?php echo $rows->class_id; ?>" class="btn btn-default"><i class="fas fa-pencil-alt"></i></a> &nbsp;&nbsp;
							<a href="admin.php?controller=add_edit_class&act=delete&id=<?php echo $rows->class_id; ?>" onclick="return window.confirm('Are you sure ?')" class="btn btn-danger"><em class="fa fa-trash"></em></a>
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
						<li class="page-item"><a class="page-link" href="admin.php?controller=class&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
						<?php endfor; ?>
					</ul>
				</div>
			</div>
		</div>
		<!-- end card -->
	</div>
	</div>