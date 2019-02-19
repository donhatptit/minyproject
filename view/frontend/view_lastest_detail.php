<!-- start banner -->

<div id="banner" style="width: 100%;">
	<div class="banner_container">
		<ul class="breadcrumb">
			<li><a href="trang-chu">Trang chủ</a></li>
			
			<li>Mới nhất</li>
		</ul>
		<div class="title">Mới Nhất</div>
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
						Mới nhất
					</div>
					<div class="btn-group">	
					</div>
					<div class="view-all"><a href="trang-chu">Quay lại <img src="public/frontend/images/trang-chu/icon-view-all.png"></a></div>
				</div>

				<div class="line-heading"></div>
				
				<div class="text_post">
					
					<div class="post-news">
						<?php 
						
						foreach ($arr as $rows):
							?>
							<div class="post_content">
								<a href="chi-tiet/bai-viet-<?php echo $rows->post_id; ?>/<?php echo remove_Unicode($rows->name); ?>" >
									<div class="card-post">
										<div class="title-post" title="<?php echo $rows->name; ?>"><?php echo $rows->name; ?></div>
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
			<div class="page_link1" style="text-align: center; margin-bottom: 15px;">
				<?php
				for( $i =1 ; $i <= $num_page ; $i++):
					?>
					<div class="next_page"
						<?php
							$select_p = isset($_GET["p"]) ? $_GET["p"]:"1";
							if($select_p == $i){
								echo "style=' color:white; background-color:#ffbb33;'";
							}
						?>
					><a href="tat-ca-bai-viet-moi-nhat&p=<?php echo $i; ?>">
						<?php echo $i; ?>
					</a></div>
				<?php endfor; ?>
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