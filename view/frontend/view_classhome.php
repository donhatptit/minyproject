<?php
$class = $this->model->get_all("select * from tbl_class order by class_id desc limit 3,2");
foreach ($class as $rows): 
	?>

	<div class="content-1">
		<div class="title-content">
			<div class="title-heading">
				<?php echo $rows->class; ?>
			</div>
			<div class="btn-group">
				
				<?php 
				$outline_id = $rows->class_id;
				$btn_outline = $this->model->get_all("select * from tbl_subject where class_id = '$outline_id' limit 0,4");
				foreach ($btn_outline as $subject): 

					?>
					<a href="index.php?controller=subject&id=<?php echo $subject->subject_id; ?>" class="outline"><?php echo $subject->name_subject; ?></a>
					<?php endforeach; ?>
				</div>

				<div class="view-all"><a href="https://donhatptit.github.io/category.html">Xem tất cả <img src="public/frontend/images/trang-chu/icon-view-all.png"></a></div>
			</div>
			<div class="line-heading"></div>
			<div style="clear: both;"></div>
			<div class="post">
				<?php
				$id = $rows->class_id;
				$post = $this->model->get_all("select * from tbl_post where subject_id in (select subject_id from tbl_subject where class_id = $id ) limit 0,6");
				foreach ($post as $pt): 
					?>
					<a href="index.php?controller=detail&id=<?php echo $pt->post_id; ?>" class="post-content">

						<div class="card-post">
							<div class="title-post" title="<?php echo $pt->name; ?>"><?php echo $pt->name; ?></div>
							<div class="text-author">
								<div class="author">
									<?php echo $pt->athour; ?>
								</div>
								<div class="favorite" style="display: flex; justify-content:flex-end;">
									<div><img src="public/frontend/images/trang-chu/icon-view.png" alt="icon-view">&nbsp;<?php echo $pt->view; ?></div>&nbsp;&nbsp;
									<div><img src="public/frontend/images/trang-chu/icon-favorite.png" alt="icon-like">&nbsp;<?php echo $pt->favorite; ?></div>

								</div>
							</div>
							<div class="text-content"><?php echo $pt->content; ?></div>

						</div>
					</a>

				<?php endforeach; ?>

			</div>
		</div>

		<?php endforeach; ?>