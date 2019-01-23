<!-- start banner -->
<?php  
$id = isset($_GET["id"]) ? $_GET["id"]:0;
$cate_class = $this->model->get_a_record("select * from tbl_class where class_id = '$id'");
?>
<div id="banner" style="width: 100%;">
	<div class="banner_container">
		<ul class="breadcrumb">
			<li><a href="index.php">Trang chủ</a></li>
			<li><a href="index.php?controller=subject&id=<?php echo $cate_class->class_id; ?>"><?php echo $cate_class->class; ?></a></li>
		</ul>
		<div class="title"><?php echo $cate_class->class; ?> - Giải bài tập <?php echo $cate_class->class; ?></div>
		<div class="circle_2"></div>
		<div class="circle_1"></div>
	</div>

</div>
<!-- end banner -->
<div style="clear: both;"></div>
<!-- start content -->
<div class="content">
	<div class="container">
		<div class="container-left">

			<div style="clear: both;"></div>
			<?php
			$sj = $this->model->get_all("select *from tbl_subject where class_id = $id limit 0,3");
			foreach($sj as $rows) :
				?>
								<div class="subject">
						<div class="title-content">
							<div class="title-heading">
								<?php echo $rows->name_subject; ?>
								
							</div>
							<div class="btn-group">
								
							</div>

							<div class="view-all"><a href="">Xem tất cả <img src="public/frontend/images/trang-chu/icon-view-all.png"></a></div>
						</div>
						<div class="line-heading"></div>
						
						<div class="text_post">
					
							<div class="post_news">
										<?php 
							$id_post=$rows->subject_id;
							$card_post=$this->model->get_all("select * from tbl_post where subject_id = $id_post limit 0,2");
							foreach ($card_post as $rows):
						 ?>
								<div class="post_content">
								<a href="index.php?controller=detail&id=<?php echo $rows->post_id; ?>" >
									<div class="card-post">
										<div class="title-post"><?php echo $rows->name; ?></div>
										<div class="text-author">
											<div class="author">
												<?php echo $rows->athour; ?>
											</div>
											<div class="favorite" style="display: flex; justify-content:flex-end;">
												<div><img src="public/frontend/images/trang-chu/icon-view.png" alt="icon-view">&nbsp;<?php echo $rows->view; ?></div>&nbsp;&nbsp;
												<div><img src="public/frontend/images/trang-chu/icon-favorite.png" alt="icon-like">&nbsp;<?php echo $rows->favorite; ?></div>&nbsp;&nbsp;

											</div>
										</div>
										<div class="text-content">

											<?php echo $rows->content; ?>

										</div>

									</div>
								</a>
</div>
							<?php endforeach; ?>	
							</div>

							<div class="read_more">Xem thêm</div>
						
					</div>
					</div>
			<?php endforeach; ?>
			<div class="loading">
				<i class="fa fa-spinner fa-pulse fa-1x fa-fw"></i>
			</div>
			<div class="page_link">
				<div class="next_page" style="background-color: #ffaa00;"><a href="" style="color: white;">1</a></div>
				<div class="next_page"><a href="">2</a></div>
				<div class="next_page"><a href="">3</a></div>
				<div class="next_page"><a href="">4</a></div>
			</div>
		</div>
		<div style="clear: both;"></div>
		<div class="container-right">
			<div class="adv">
				<img src="public/frontend/images/chi-tiet/adv.png">
			</div>
		</div>

	</div>

</div>
		<!-- end content -->