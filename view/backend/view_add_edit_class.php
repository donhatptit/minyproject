<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->		
		<div class="card  border-default">
			<div class="card card-header badge-default text-black"><h3>Thêm_sửa Lớp</h3></div>
			<div class="card-body">
				<form method="post" action="<?php echo $form_action; ?>">
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Tên Lớp</div>
							<div class="col-md-10">
								<input type="text" name="class" value="<?php echo isset($arr->class)?$arr->class:""; ?>" class="form-control">
							</div>
						</div>
					</div>
					<!-- end form group -->
					

					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right"></div>
							<div class="col-md-10">
								<input type="submit" value="Process" class="btn btn-primary"> <input type="reset" value="Reset" class="btn btn-danger" style="width: 80px;">
							</div>
						</div>
					</div>
					<!-- end form group -->
					
				</form>
			</div>
		</div>
		<!-- end card -->
	</div>
</div>