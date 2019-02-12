	<div class="container">
<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->
		

		<div class="card border-default">
			
			<div class="card card-header badge-default text-black" style="padding:7px !important;">
				<div class="row">
					<div class="col-md-6">
						<h2>Quản Lý Môn Học</h2>
					</div>
					<div class="col-md-6 text-right">
					<div class="row">
									<div class="col-md-8 tim_kiem">
										<input type="text" name="" class="timkiem form-control" placeholder="Tìm kiếm ...">
									</div>
									<div class="col-md-4">
										<a href="admin.php?controller=add_edit_subject&act=add" class="btn btn-primary">Thêm</a>
									</div>
								</div>
					</div>
				</div>
			</div>

				<div class="card-body">
				<!-- table -->
				<table class="table table-hover table-bordered">
					<thead>
					<tr>
						<th style="width: 250px; text-align: center;">Tên Môn Học</th>
						
						<th style="width: 150px;text-align: center;">Hành Động</th>
					</tr>
				</thead>
					<tbody class="danhsach">
					<?php
						foreach ($arr as $rows): 
					?>
					
					<tr>
						<td><?php echo $rows->name_subject; ?></td>
						
						<td style="text-align: center;">
							<a href="admin.php?controller=add_edit_subject&act=edit&id=<?php echo $rows->subject_id; ?>" class="btn btn-default"><i class="fas fa-pencil-alt"></i></a> &nbsp;&nbsp;
							<a href="admin.php?controller=add_edit_subject&act=delete&id=<?php echo $rows->subject_id; ?>" onclick="return window.confirm('Are you sure ?')" class="btn btn-danger"><em class="fa fa-trash"></em></a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
				</table>
				<!-- end table -->
				</div>
				<div class="card-footer" style="padding:7px !important">
					<ul class="pagination">
						<li class="page-item"><a class="page-link" href="#">Trang</a></li>
						<?php  for($i = 1; $i<=$num_page; $i++): ?>
						<li class="page-item"><a class="page-link" href="admin.php?controller=subject&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
						<?php endfor; ?>
					</ul>
				</div>
			</div>
		</div>
		<!-- end card -->
	</div>
	</div>
	<script type="text/javascript" src="public/backend/js/sub.js"></script>