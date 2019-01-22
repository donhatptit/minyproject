<?php
$id = isset($_GET["id"]) ? $_GET["id"]:0;
$this->model->execute("update tbl_post set view=view+1 where post_id = $id");
?>
<div class="content-1">
	<div class="title-content">
		<div class="title-heading">
			Mới nhất

		</div>
		<div class="btn-group">

		</div>

		<div class="view-all"><a href="https://donhatptit.github.io/category.html">Xem tất cả <img src="public/frontend/images/trang-chu/icon-view-all.png"></a></div>
	</div>
	<div class="line-heading"></div>
	<div style="clear: both;"></div>
	<div class="post">
		<?php
		$lastest = $this->model->get_all("select * from tbl_post order by post_id desc limit 0,6");
		foreach ($lastest as $rows){

			?>
			<a href="index.php?controller=detail&id=<?php echo $rows->post_id; ?>" class="post-content">
				
					<div class="card-post">
						 <div class="title-post" title="<?php echo $rows->name; ?>">
								<?php echo $rows->name; ?>
						</div> 
						<div class="text-author">
							<div class="author">
								<?php echo $rows->athour; ?>
							</div>
							<div class="favorite" style="display: flex; justify-content:flex-end;">
								<div><img src="public/frontend/images/trang-chu/icon-view.png" alt="icon-view">&nbsp;<?php echo $rows->view; ?></div>&nbsp;&nbsp;
								<div><img src="public/frontend/images/trang-chu/icon-favorite.png" alt="icon-like">&nbsp;<?php echo $rows->favorite; ?></div>

							</div>
						</div>
						<div class="text-content"><?php echo $rows->content; ?></div>

					</div>
				</a>
			
		<?php } ?>

	</div>
</div>
