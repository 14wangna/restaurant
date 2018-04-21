<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>首页</title>
	<link rel="stylesheet" type="text/css" href="/restaurant1/restaurant/Public/home/css/nav.css">
	<link rel="stylesheet" type="text/css" href="/restaurant1/restaurant/Public/home/css/index.css">
	<link rel="stylesheet" type="text/css" href="/restaurant1/restaurant/Public/home/css/about.css">
	<!-- <link rel="stylesheet" type="text/css" href="/restaurant1/restaurant/Public/home/css/manage.css"> -->
	<link rel="stylesheet" type="text/css" href="/restaurant1/restaurant/Public/home/css/menu-content.css">
	<link rel="stylesheet" type="text/css" href="/restaurant1/restaurant/Public/home/css/menu.css">
	<link rel="stylesheet" type="text/css" href="/restaurant1/restaurant/Public/home/css/news.css">
	<link rel="stylesheet" type="text/css" href="/restaurant1/restaurant/Public/home/css/order.css">
	<link rel="stylesheet" type="text/css" href="/restaurant1/restaurant/Public/home/css/person.css">
	<link rel="stylesheet" href="/restaurant1/restaurant/Public/home/css/bootstrap.css">
	<script src="/restaurant1/restaurant/Public/home/js/jquery-1.11.3.js"></script>
	<script src="/restaurant1/restaurant/Public/home/js/bootstrap.js"></script>
	<script type="text/javascript" src="/restaurant1/restaurant/Public/home/js/index.js"></script>
	<script type="text/javascript" src="/restaurant1/restaurant/Public/home/js/news.js"></script>
		
</head>
<body>
	<div class="head">
		<div class="head-left">
			<ul class="xm-nav">
				<li><img src="/restaurant1/restaurant/Public/home/images/ms03.png" width="100%" height="100%">
				<li><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
				<li><a href="<?php echo U('Home/News/news');?>">新闻中心</a></li>
				<li><a href="<?php echo U('Home/Order/order');?>">订单查询</a></li>
				<li><a href="<?php echo U('Home/Person/person');?>">个人中心</a></li>
				<li><a href="<?php echo U('Home/About/about');?>">关于我们</a></li>
				<div class="clear"></div>
			</ul>
		</div>
		<div class="head-right">
			<div class="xm-sign">
			<?php if(isLogin()): ?><a style="color:#fff"><?php echo (session('number')); ?></a>
				<a href="<?php echo U('Index/loginout');?>">退出</a>
			<?php else: ?>
			<a href="<?php echo U('Home/Login/login');?>">登录</a>/<a href="<?php echo U('Home/Login/login');?>">注册</a><?php endif; ?>
			</div>
		
		</div>
		<div class="clear"></div>
	</div>
	<!--主体部分 开始-->
	<div class="page-theme">
		<!--导航 开始-->
		<div class="nav">
			<ul class="nav-theme">
				<li class="nav-theme-logo">
					<a href="javascript: void (0);">
						<img src="/restaurant1/restaurant/Public/home/images/ms02.png" alt="" width="100%" height="100%">
					</a>
				</li>
				<li class="nav-theme-nav">
					<a href="<?php echo U('Home/Index/index');?>">首页</a>
					<a href="<?php echo U('Home/News/news');?>">新闻中心</a>
					<a href="<?php echo U('Home/Order/order');?>">订单查询</a>
					<a href="<?php echo U('Home/Person/person');?>">个人中心</a>
					<a href="<?php echo U('Home/About/about');?>">关于我们</a>
				</li>
				<li class="nav-theme-search">
					<div class="nav-theme-search-input">
						<input type="text">
						<a href="javascript: void (0);">搜索</a>
					</div>
				</li>
				<div class="clear"></div>
			</ul>
		</div>
		

		<!-- 导航结束 -->
		<div class="menu_list">
			<div class="menu-item">
				<ul>
					<li class="item-actived"><a href="#">早餐</a></li>
					<li><a href="#">午餐</a></li>
					<li><a href="#">晚餐</a></li>
					<li><a href="#">下午茶</a></li>
					<li><a href="#">甜品饮品</a></li>
					<li><a href="#">小吃夜宵</a></li>
					<div class="clear"></div>
				</ul>
			</div>
			<div class="page-menu-food">
				<ul>
					<li>
						<a href="javascript:void(0)">
							<img src="/restaurant1/restaurant/Public/home/images/1.jpg" width="100%" height="100%">
						</a>
						<p>馅饼</p>
					</li>
					<li>
						<a href="javascript:void(0)">
							<img src="/restaurant1/restaurant/Public/home/images/1.jpg" width="100%" height="100%">
							
						</a>
						<p>豆浆</p>
					</li>
					<li>
						<a href="javascript:void(0)">
							<img src="/restaurant1/restaurant/Public/home/images/1.jpg" width="100%" height="100%">
							
						</a>
						<p>咸菜</p>
					</li>
					<li>
						<a href="javascript:void(0)">
							<img src="/restaurant1/restaurant/Public/home/images/1.jpg" width="100%" height="100%">
							
						</a>
						<p>小米粥</p>
					</li>
					<li>
						<a href="javascript:void(0)">
							<img src="/restaurant1/restaurant/Public/home/images/1.jpg" width="100%" height="100%">
						</a>
						<p>麻蓉包</p>
					</li>
					<div class="clear"></div>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	
		<div class="footers">
		<div class="footer">
			<div class="footer-left">
				<p class="feel">职工餐厅-公司给您家的感觉</p>
				<ul>
					<li><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
					<li><a href="<?php echo U('Home/News/news');?>">新闻中心</a></li>
					<li><a href="<?php echo U('Home/Order/order');?>">订单查询</a></li>
					<li><a href="<?php echo U('Home/Person/person');?>">个人中心</a></li>
					<li><a href="<?php echo U('Home/About/about');?>">关于我们</a></li>
					<li class="clear"></li>
				</ul>
				<p>联系电话：0000-000000</p>
			</div>
			<div class="footer-right">
				<p class="feel">餐厅展景</p>
				<ul>
					<li><img src="/restaurant1/restaurant/Public/home/images/restaurant/1.jpg"></li>
					<li><img src="/restaurant1/restaurant/Public/home/images/restaurant/1.jpg"></li>
					<li><img src="/restaurant1/restaurant/Public/home/images/restaurant/1.jpg"></li>
					<li><img src="/restaurant1/restaurant/Public/home/images/restaurant/1.jpg"></li>
					<div class="clear"></div>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</body>
</html>