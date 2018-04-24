<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>首页</title>
	<link rel="stylesheet" type="text/css" href="/restaurant/restaurant/Public/home/css/nav.css">
	<link rel="stylesheet" type="text/css" href="/restaurant/restaurant/Public/home/css/index.css">
	<link rel="stylesheet" type="text/css" href="/restaurant/restaurant/Public/home/css/about.css">
	<!-- <link rel="stylesheet" type="text/css" href="/restaurant/restaurant/Public/home/css/manage.css"> -->
	<link rel="stylesheet" type="text/css" href="/restaurant/restaurant/Public/home/css/menu-content.css">
	<link rel="stylesheet" type="text/css" href="/restaurant/restaurant/Public/home/css/menu.css">
	<link rel="stylesheet" type="text/css" href="/restaurant/restaurant/Public/home/css/news.css">
	<link rel="stylesheet" type="text/css" href="/restaurant/restaurant/Public/home/css/order.css">
	<link rel="stylesheet" type="text/css" href="/restaurant/restaurant/Public/home/css/person.css">
	<link rel="stylesheet" href="/restaurant/restaurant/Public/home/css/bootstrap.css">
	<script src="/restaurant/restaurant/Public/home/js/jquery-1.11.3.js"></script>
	<script src="/restaurant/restaurant/Public/home/js/bootstrap.js"></script>
	<script type="text/javascript" src="/restaurant/restaurant/Public/home/js/index.js"></script>
	<script type="text/javascript" src="/restaurant/restaurant/Public/home/js/news.js"></script>
		
</head>
<body>
	<div class="head">
		<div class="head-left">
			<ul class="xm-nav">
				<li><img src="/restaurant/restaurant/Public/home/images/ms03.png" width="100%" height="100%">
				<li><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
				<li><a href="<?php echo U('Home/Tmenu/menu');?>">每日菜单</a></li>
				<li><a href="<?php echo U('Home/News/news');?>">新闻中心</a></li>
				<li><a href="<?php echo U('Home/Order/order');?>">订单查询</a></li>
				<li><a href="<?php echo U('Home/Person/person');?>">个人中心</a></li>
				<li><a href="<?php echo U('Home/About/about');?>">关于我们</a></li>
				<div class="clear"></div>
			</ul>
		</div>
		<div class="head-right">
			<div class="xm-sign">
			<?php if(isLogin()): ?><a style="color:#fff">欢迎：<?php echo (session('number')); ?></a>
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
						<img src="/restaurant/restaurant/Public/home/images/ms02.png" alt="" width="100%" height="100%">
					</a>
				</li>
				<li class="nav-theme-nav">
					<a href="<?php echo U('Home/Index/index');?>">首页</a>
					<a href="<?php echo U('Home/Tmenu/menu');?>">每日菜单</a>
					<a href="<?php echo U('Home/News/news');?>">新闻中心</a>
					<a href="<?php echo U('Home/Order/order');?>">订单查询</a>
					<a href="<?php echo U('Home/Person/person');?>">个人中心</a>
					<a href="<?php echo U('Home/About/about');?>">关于我们</a>
				</li>
				<!-- <li class="nav-theme-search">
					<div class="nav-theme-search-input">
						<input type="text">
						<a href="javascript: void (0);">搜索</a>
					</div>
				</li> -->
				<div class="clear"></div>
			</ul>
		</div>
		
		<div class="page-menu">
 			<div class="menu-left">
 				<div class="content-top">
 					<div class="top-img">
 						<img src="/restaurant/restaurant/Public/home/images/lunch/1.jpg" width="100%" height="100%">
 					</div>
 					<div class="top-intr">
 						<h3><?php echo ($food["title"]); ?></h3>
 						<h4>￥25</h4>
 						<p>“过年不可少的菜哦哦”</p>
 						<p>主要食材：可乐，鸡翅，姜，料酒</p>
 					</div>
 					<div class="clear"></div>
 				</div>
 				<h3>菜品评价</h3>
 				<div class="content_evaluate">
 					<div class="evaluate_whole">
	 					<div class="evaluate_left">
	 						<img src="/restaurant/restaurant/Public/home/images/touxiang.png" width="" height="">
	 						<p>王小二</p>
	 					</div>
	 					<div class="evaluate_right">
	 						<p>菜很好吃，价格很便宜，很赞。</p>
	 						<p>2018-04-12</p>
	 					</div>
	 					<div class="clear"></div>
 					</div>
 					<div class="evaluate_whole">
	 					<div class="evaluate_left">
	 						<img src="/restaurant/restaurant/Public/home/images/touxiang.png" width="" height="">
	 						<p>王小二</p>
	 					</div>
	 					<div class="evaluate_right">
	 						<p>菜很好吃，价格很便宜，很赞。</p>
	 						<p>2018-04-12</p>
	 					</div>
	 					<div class="clear"></div>
 					</div>
 					<div class="evaluate_whole">
	 					<div class="evaluate_left">
	 						<img src="/restaurant/restaurant/Public/home/images/touxiang.png" width="" height="">
	 						<p>王小二</p>
	 					</div>
	 					<div class="evaluate_right">
	 						<p>菜很好吃，价格很便宜，很赞。</p>
	 						<p>2018-04-12</p>
	 					</div>
	 					<div class="clear"></div>
 					</div>
 				</div>
				<div class="content-rec">
					<h3>热门饮品推荐</h3>
					<ul class="drink">
						<li>
							<div class="img"><img src="/restaurant/restaurant/Public/home/images/1.jpg" width="100%"></div>
							<p>柠檬水</p>
							<p>￥10</p>
							<button>订购</button>
						</li>
						<li>
							<div class="img"><img src="/restaurant/restaurant/Public/home/images/1.jpg" width="100%"></div>
							<p>柠檬水</p>
							<p>￥10</p>
							<button>订购</button>
						</li>
						<li>
							<div class="img"><img src="/restaurant/restaurant/Public/home/images/1.jpg" width="100%"></div>
							<p>柠檬水</p>
							<p>￥10</p>
							<button>订购</button>
						</li>
						<li>
							<div class="img"><img src="/restaurant/restaurant/Public/home/images/1.jpg" width="100%"></div>
							<p>柠檬水</p>
							<p>￥10</p>
							<button>订购</button>
						</li>
					</ul>
					<ul class="drink">
						<li>
							<div class="img"><img src="/restaurant/restaurant/Public/home/images/1.jpg" width="100%"></div>
							<p>柠檬水</p>
							<p>￥10</p>
							<button>订购</button>
						</li>
						<li>
							<div class="img"><img src="/restaurant/restaurant/Public/home/images/1.jpg" width="100%"></div>
							<p>柠檬水</p>
							<p>￥10</p>
							<button>订购</button>
						</li>
						<li>
							<div class="img"><img src="/restaurant/restaurant/Public/home/images/1.jpg" width="100%"></div>
							<p>柠檬水</p>
							<p>￥10</p>
							<button>订购</button>
						</li>
						<li>
							<div class="img"><img src="/restaurant/restaurant/Public/home/images/1.jpg" width="100%"></div>
							<p>柠檬水</p>
							<p>￥10</p>
							<button>订购</button>
						</li>
					</ul>
				</div>
			</div>
			<div class="menu-right">
				<div class="menu-news">
					<div class="news-title">
						<p>健康饮食</p>
					</div>
					<ul class="news-list">
						<li><a href="javascript:void(0)">日常健脑补脑的15种食物</a></li>
						<li><a href="javascript:void(0)">日常健脑补脑的15种食物</a></li>
						<li><a href="javascript:void(0)">日常健脑补脑的15种食物</a></li>
						<li><a href="javascript:void(0)">日常健脑补脑的15种食物</a></li>
						<li><a href="javascript:void(0)">日常健脑补脑的15种食物</a></li>
						<li><a href="javascript:void(0)">日常健脑补脑的15种食物</a></li>
						<div class="clear"></div>
					</ul>
				</div>
				<div class="menu-news">
					<div class="news-title">
						<p>健康饮食</p>
					</div>
					<ul class="news-list">
						<li><a href="javascript:void(0)">日常健脑补脑的15种食物</a></li>
						<li><a href="javascript:void(0)">日常健脑补脑的15种食物</a></li>
						<li><a href="javascript:void(0)">日常健脑补脑的15种食物</a></li>
						<li><a href="javascript:void(0)">日常健脑补脑的15种食物</a></li>
						<li><a href="javascript:void(0)">日常健脑补脑的15种食物</a></li>
						<li><a href="javascript:void(0)">日常健脑补脑的15种食物</a></li>
						<div class="clear"></div>
					</ul>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<!--导航 结束-->
	</div>
	<!-- 页脚 -->
	
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
					<li><img src="/restaurant/restaurant/Public/home/images/restaurant/1.jpg"></li>
					<li><img src="/restaurant/restaurant/Public/home/images/restaurant/1.jpg"></li>
					<li><img src="/restaurant/restaurant/Public/home/images/restaurant/1.jpg"></li>
					<li><img src="/restaurant/restaurant/Public/home/images/restaurant/1.jpg"></li>
					<div class="clear"></div>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</body>
</html>