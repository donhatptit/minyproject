<!-- start banner -->
<?php  
$id = isset($_GET["id"]) ? $_GET["id"]:0;
$sub_id=$this->model->get_a_record("select * from tbl_subject where subject_id = '$id'");
$subject_id = $sub_id->class_id;
$sub_class = $this->model->get_a_record("select * from tbl_class where class_id='$subject_id'");

?>
<div id="banner" style="width: 100%;">
	<div class="banner_container">
		<ul class="breadcrumb">
			<li><a href="index.php">Trang chủ</a></li>
			<li><a href="index.php?controller=category&id=<?php echo $sub_class->class_id; ?>"><?php echo $sub_class->class; ?></a></li>
			<li><?php echo $sub_id->name_subject; ?></a></li>
		</ul>
		<div class="title"><?php echo $sub_id->name_subject; ?></div>
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
			
			<div class="subject">
				<div class="title-content">
					<div class="title-heading">
						<?php echo $sub_id->name_subject; ?>
						
					</div>
					<div class="btn-group">
						
					</div>

					<div class="view-all"><a href="">Xem tất cả <img src="public/frontend/images/trang-chu/icon-view-all.png"></a></div>
				</div>
				<div class="line-heading"></div>
				
				<div class="text_post">
					
					<div class="post_news">
						<?php 
						$id_post=$sub_id->subject_id;
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

					
				</div>
			</div>

			
			<div class="page_link1" style="text-align: center;">
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