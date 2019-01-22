<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->		
		<div class="card  border-default">
			<div class="card card-header badge-default text-black"><h3>Thêm Sửa Bài Viết</h3></div>
			<div class="card-body">
				<!-- neu muon upload duoc file, phai co thuoc tinh enctype="multipart/form-data" -->
				<form method="post" enctype="multipart/form-data" action="<?php echo $form_action; ?>">
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Tiêu đề</div>
							<div class="col-md-10">
								<input type="text" name="name" value="<?php echo isset($arr->name)?$arr->name:""; ?>" required class="form-control">
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Môn Học</div>
							<div class="col-md-10">
								<select name="subject_id">
									<?php 
									$subject = $this->model->get_all("select * from tbl_subject order by subject_id desc");
									foreach($subject as $rows)
									{
										?>
										<option <?php if(isset($arr->subject_id)&&$arr->subject_id==$rows->subject_id) { ?> selected <?php } ?> value="<?php echo $rows->subject_id; ?>"><?php echo $rows->name_subject; ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
						</div>
						<!-- end form group -->
						
						
						<!-- form group -->
						<div class="form-group">
							<div class="row">
								<div class="col-md-2 text-right">Nội dung</div>
								<div class="col-md-10">
									<textarea name="content">
										<?php echo isset($arr->content)?$arr->content:''; ?>
									</textarea>
									<script type="text/javascript">
										CKEDITOR.replace("content");
									</script>
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