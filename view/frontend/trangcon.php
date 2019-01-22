<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trang chủ</title>
	<link rel="stylesheet" type="text/css" href="public/frontend/css/style.css">
	<link rel="stylesheet" type="text/css" href="public/frontend/css/chitiet.css">
	<link rel="stylesheet" type="text/css" href="public/frontend/css/category.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="shortcut icon" href="public/frontend/images/trang-chu/logo.png">

</head>

<body>

	<div id="wrap">
		<div class="layer_opacity"></div>
		<!-- start header -->
		<div class="header">
			<div class="header-left">
				<div class="images-logo">
					<a href="https://donhatptit.github.io/layout.html"><img src="public/frontend/images/trang-chu/logo.png"></a>
				</div>
				<button href="">
					<img src="public/frontend/images/trang-chu/header-subject.png" alt="icon-menu">
					<p>Danh mục</p>
				</button>

			</div>
			<div class="header-right">
				<div class="search-container">
					<i class=" icon fa fa-search"></i>
					<input class="f-regular-14" type="text" id="search" placeholder="Tìm kiếm câu hỏi">
				</div>
			</div>
		</div>
		<!-- end header -->
		<div style="clear: both;"></div>
		<div class="mobile-header d-none">
			<!-- Icon NavBar - Mobile -->
			<div id="icon-nav"><i class="fa fa-bars"></i></div>
			<!-- NavSearch - Mobile -->
			<div class="search-container">
				<i class="icon fa fa-search"></i>
				<input class="f-regular-12" type="text" id="search" placeholder="Tìm kiếm câu hỏi">
			</div>
		</div>
		<!-- start menu -->
		
		<div style="clear: both;">
			
		</div>
			
		<div class="menu">
			<div class="logo">
					<a class="d-none" href=""><img src="public/frontend/images/trang-chu/logo.png" alt=""></a>
					<i class="close-nav-mobile d-none fa fa-arrow-left"></i>
					
				</div>
				<div class=" menu-name">
					<p>Danh mục</p>
				</div>
			<div class="menu-primary">
				<ul>
					<?php
						include "controller/frontend/controller_menu.php";
					?>
					
				</ul>
			</div>
		</div>
			<!-- end menu -->
<?php
	if(file_exists($file_controller))
                        include $file_controller;
?>
		<!-- start footer -->
		<div class="footer">
			<div class="logo-ft">
				<img src="public/frontend/images/trang-chu/logo.png">
			</div>
			<!-- start menu-ft -->
			<div class="menu-ft">
				<ul>
					<li><a href="">Toán học</a></li>
					<li>|</li>
					<li><a href="">Văn học</a></li>
					<li>|</li>
					<li><a href="">Giáo dục công dân</a></li>
					<li>|</li>
					<li><a href="">Lịch sử</a></li>
					<li>|</li>
					<li><a href="">Địa Lý</a></li>
					<li>|</li>
					<li><a href="">Tiếng Anh</a></li>
					<li>|</li>
					<li><a href="">Soạn văn</a></li>
				</ul>

			</div>
			<!-- end menu-ft -->
			<div style="text-align: center; color: #acafb5; margin-top: 20px; font-size: 12px; ">Copyright &copy 2018 Miny. Design by 123DOC</div>
		</div>
		<!-- end footer -->
		<div id="goto-top">
			<img src="public/frontend/images/trang-chu/arrow66.png">
		</div>
	</div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=2243494985940244&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
<script src="public/frontend/js/layout.js"></script>
<script src="public/frontend/js/cate.js"></script>
<script src="http://118.70.13.36:6288/js/debucsser.js"></script>
<script src=""></script>

</html>