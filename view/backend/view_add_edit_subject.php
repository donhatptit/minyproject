<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->		
		<div class="card  border-default">
			<div class="card card-header badge-default text-black"><h3>Thêm_sửa Môn học</h3></div>
			<div class="card-body">
				<form method="post" action="<?php echo $form_action; ?>">
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Tên môn học</div>
							<div class="col-md-10">
								<input type="text" name="name_subject" value="<?php echo isset($arr->name_subject)?$arr->name_subject:""; ?>" class="form-control">
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Lớp</div>
							<div class="col-md-10">
								<select name="class_id">
									<?php 
									$class = $this->model->get_all("select * from tbl_class order by class_id desc");
									foreach($class as $rows)
									{
										?>
										<option <?php if(isset($arr->class_id)&&$arr->class_id==$rows->class_id) { ?> selected <?php } ?> value="<?php echo $rows->class_id; ?>"><?php echo $rows->class; ?></option>
										<?php } ?>
									</select>
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