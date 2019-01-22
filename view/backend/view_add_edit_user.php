<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->		
		<div class="card  border-default">
			<div class="card card-header badge-default text-black"><h3>Thêm_sửa User</h3></div>
			<div class="card-body">
				<form method="post" action="<?php echo $form_action; ?>">
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Full name</div>
							<div class="col-md-10">
								<input type="text" name="fullname" value="<?php echo isset($record->fullname)?$record->fullname:""; ?>" class="form-control">
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Email</div>
							<div class="col-md-10">
								<input type="text" name="email" value="<?php echo isset($record->email)?$record->email:""; ?>" class="form-control">
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Username</div>
							<div class="col-md-10">
								<input <?php if(isset($record->username)): ?> disabled <?php else: ?> required <?php endif; ?>  type="username" name="username" class="form-control">
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Password</div>
							<div class="col-md-10">
							<input type="password" name="password" <?php if(isset($record->password)): ?>  placeholder="Nhập pass mới nếu muốn đổi pass" <?php else: ?> required <?php endif; ?> class="form-control">
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