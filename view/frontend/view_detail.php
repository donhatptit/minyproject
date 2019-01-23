  <!-- start banner -->

  <?php
$id = isset($_GET["id"]) ? $_GET["id"]:0;

  $post_detail = $this->model->get_a_record("select * from tbl_post where post_id='$id' ");
  $sub = $post_detail->subject_id;
  $subject = $this->model->get_a_record("select * from tbl_subject where subject_id = $sub");
  $cla = $subject->class_id;
    $class = $this->model->get_a_record("select * from tbl_class where class_id = $cla");
  ?>
  <div id="banner" style="width: 100%;">
  	<div class="banner_container">
  		<ul class="breadcrumb">
  			<li><a href="index.php">Trang chủ</a></li>
  			<li><a href="index.php?controller=category&id=<?php echo $class->class_id; ?>"><?php echo $class->class; ?></a></li>
  			<li><a href="index.php?controller=subject&id=<?php echo $subject->subject_id; ?>"><?php echo $subject->name_subject; ?></a></li>
  			<li><?php echo $post_detail->name; ?></li>
  		</ul>
  		
  		<div class="title"><?php echo $post_detail->name; ?></div>

  		
  		<div class="circle_2"></div>
  		<div class="circle_1"></div>
  		
  	</div>
  	
  </div>
  <!-- end banner -->
  <div style="clear: both;"></div>
  <!-- start content -->
  <div class="content">
  	<div class="container_ct">
  		<div class="container_top">
  			<!-- content-left -->
  			<div class="container_left">
  				<div class="new_post">
  					
  					<div class="panel_heading">
  						<div class="info_athour">
  							<div class="img_athour"></div>
  							<div class="name_athour"><?php echo $post_detail->athour; ?></div>
  						</div>
  						<div class="view_favo">
  							<div class="view"><img src="public/frontend/images/trang-chu/icon-view.png">&nbsp;<?php echo $post_detail->view; ?></div>&nbsp;&nbsp;
  							<div class="favo"><img src="public/frontend/images/trang-chu/icon-favorite.png">&nbsp;<?php echo $post_detail->favorite; ?>&nbsp;&nbsp;&nbsp;&nbsp;</div>
  						</div>
  					</div>
  					<div class="panel_body">
  						<div class="body_news">
  							<?php echo $post_detail->content; ?>
  						</div>
  					</div>
  				</div>
  				<div class="comment-form">
  					<h4>Post Comment</h4>
  					<fb:comments href="https://donhatptit.github.io/chitiet.html" colorscheme="light" numposts="5" data-width="100%"></fb:comments>
  				</div>
  				

  			</div>
  			<!-- end container_left -->
  			<!-- container-right -->
  			<div class="container_right">
  				<div class="news">
  					<div class="new_1">
  						<div class="news_title">Bạn muốn tìm thêm với</div>
  						<div class="tab_line" ></div>
  						<div class="news_content">
  							<ul>
  								<?php
  								$card_post = $this->model->get_all("select * from tbl_post order by post_id limit 0,8");
  								foreach ($card_post as $rows): 
  									?>
  									<li><a href=""><?php echo $rows->name; ?></a></li>
  									
  								<?php endforeach; ?>
  							</ul>
  						</div>
  					</div>
  				</div>
  				<div id="adv">
  					<img src="public/frontend/images/chi-tiet/adv.png">
  				</div>
  			</div>
  			<!-- end container-right -->
  		</div>

  		<div class="content-1">
  			<div class="title-content">
  				<div class="title-heading">
  					Có thể bạn quan tâm
  					
  				</div>
  				<div class="btn-group">
  					
  				</div>

  				<div class="view-all"><a href="">Xem tất cả <img src="public/frontend/images/trang-chu/icon-view-all.png"></a></div>
  			</div>
  			<div class="line-heading"></div>
  			<div style="clear: both;"></div>
  			<div class="post">
  				<?php
  				$card_post = $this->model->get_all("select * from tbl_post order by post_id limit 0,6");
  				foreach ($card_post as $rows): 
  					?>
  					<div class="post-content">
  						<a href="index.php?controller=detail&id=<?php echo $rows->post_id; ?>">
  							<div class="card-post">
  								<div class="title-post"><?php echo $rows->name; ?></div>
  								<div class="text-author">
  									<div class="author">
  										<?php echo $rows->athour; ?>
  									</div>
  									<div class="favorite" style="display: flex; justify-content:flex-end;">
  										<div><img src="public/frontend/images/trang-chu/icon-view.png" alt="icon-view">&nbsp;<?php echo $rows->view; ?></div>&nbsp;&nbsp;
  										<div><img src="public/frontend/images/trang-chu/icon-favorite.png" alt="icon-like">&nbsp;<?php echo$rows->favorite; ?></div>
  										
  									</div>
  								</div>
  								<div class="text-content"><?php echo $rows->content; ?></div>

  							</div>
  						</a>
  					</div>
  				<?php endforeach; ?>
  			</div>
  		</div>
  	</div>
  </div>
		<!-- end content -->