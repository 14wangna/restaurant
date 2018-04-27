<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>首页</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/restaurant/restaurant/Public/home/css/nav.css">
	<link rel="stylesheet" type="text/css" href="/restaurant/restaurant/Public/home/css/index.css">
	<link rel="stylesheet" type="text/css" href="/restaurant/restaurant/Public/home/css/about.css">
	<!-- <link rel="stylesheet" type="text/css" href="/restaurant/restaurant/Public/home/css/manage.css"> -->
	<link rel="stylesheet" type="text/css" href="/restaurant/restaurant/Public/home/css/menu-content.css">
	<link rel="stylesheet" type="text/css" href="/restaurant/restaurant/Public/home/css/menu.css">
	<link rel="stylesheet" type="text/css" href="/restaurant/restaurant/Public/home/css/news.css">
	<link rel="stylesheet" type="text/css" href="/restaurant/restaurant/Public/home/css/order.css">
	<link rel="stylesheet" type="text/css" href="/restaurant/restaurant/Public/home/css/person.css">
	<link rel="stylesheet" type="text/css" href="/restaurant/restaurant/Public/home/css/common.css">
	<link rel="stylesheet" href="/restaurant/restaurant/Public/home/css/bootstrap.css">
	<script src="/restaurant/restaurant/Public/home/js/jquery-1.11.3.js"></script>
	<script type="text/javascript" src="/restaurant/restaurant/Public/home/js/bootstrap.js"></script>
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
		
	<!--主体部分 开始-->

		<!--导航 结束-->

		<!--轮播图 开始-->
		<div class="page-theme-banner">
			<div class="page-theme-banner-left">
				<ul>
					<li><a href="/restaurant/restaurant/index.php/Home/menu/menu" class="la">早餐</a>
						<ul>
						<?php if(is_array($fooda)): $i = 0; $__LIST__ = array_slice($fooda,0,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li><a href="/restaurant/restaurant/index.php/Home/Menu/contents/id/<?php echo ($data["id"]); ?>"><?php echo ($data["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>	
							<li><a href="javascript:void(0)">
								<img src="/restaurant/restaurant/Public/home/images/mamapai.jpg">
							</a></li>			
							<div class="clear"></div>
						</ul>
					</li>
					<li><a href="/restaurant/restaurant/index.php/Home/menu/menu" class="la">午餐</a>
						<ul>
						<?php if(is_array($foodb)): $i = 0; $__LIST__ = array_slice($foodb,0,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li><a href="/restaurant/restaurant/index.php/Home/Menu/contents/id/<?php echo ($data["id"]); ?>"><?php echo ($data["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
							<li><a href="javascript:void(0)">
								<img src="/restaurant/restaurant/Public/home/images/mamapai.jpg">
							</a></li>
							<div class="clear"></div>
						</ul>
					</li>
					<li><a href="/restaurant/restaurant/index.php/Home/menu/menu" class="la">下午茶</a>
						<ul>
						<?php if(is_array($foodc)): $i = 0; $__LIST__ = array_slice($foodc,0,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li><a href="/restaurant/restaurant/index.php/Home/Menu/contents/id/<?php echo ($data["id"]); ?>"><?php echo ($data["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
							<li><a href="javascript:void(0)">
								<img src="/restaurant/restaurant/Public/home/images/mamapai.jpg">
							</a></li>
							<div class="clear"></div>
						</ul>
					</li>
					<li><a href="/restaurant/restaurant/index.php/Home/menu/menu" class="la">晚餐</a>
						<ul>
						<?php if(is_array($foodd)): $i = 0; $__LIST__ = array_slice($foodd,0,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li><a href="/restaurant/restaurant/index.php/Home/Menu/contents/id/<?php echo ($data["id"]); ?>"><?php echo ($data["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
							<li><a href="javascript:void(0)">
								<img src="/restaurant/restaurant/Public/home/images/mamapai.jpg">
							</a></li>
							<div class="clear"></div>
						</ul>
					</li>
					<li><a href="/restaurant/restaurant/index.php/Home/menu/menu" class="la">甜品饮品</a>
						<ul>
						<?php if(is_array($foode)): $i = 0; $__LIST__ = array_slice($foode,0,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li><a href="/restaurant/restaurant/index.php/Home/Menu/contents/id/<?php echo ($data["id"]); ?>"><?php echo ($data["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
							<li><a href="javascript:void(0)">
								<img src="/restaurant/restaurant/Public/home/images/mamapai.jpg">
							</a></li>
							<div class="clear"></div>
						</ul>
					</li>
					<li><a href="/restaurant/restaurant/index.php/Home/menu/menu" class="la">小吃夜宵</a>
						<ul>
						<?php if(is_array($foodf)): $i = 0; $__LIST__ = array_slice($foodf,0,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li><a href="/restaurant/restaurant/index.php/Home/Menu/contents/id/<?php echo ($data["id"]); ?>"><?php echo ($data["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
							<li><a href="javascript:void(0)">
								<img src="/restaurant/restaurant/Public/home/images/mamapai.jpg">
							</a></li>
							<div class="clear"></div>
						</ul>
					</li>
					<div class="clear"></div>
				</ul> 
			</div>
			<div class="page-theme-banner-right">
					<!-- <div class="row clearfix">
						<div class="col-md-12 column"> -->
							<div class="carousel slide" id="carousel-912679">
								<ol class="carousel-indicators">
									<li class="active" data-slide-to="0" data-target="#carousel-912679">
									</li>
									<li data-slide-to="1" data-target="#carousel-912679">
									</li>
									<li data-slide-to="2" data-target="#carousel-912679">
									</li>
								</ol>
								<div class="carousel-inner">
									<div class="item active">
										<img alt="" src="/restaurant/restaurant/Public/home/images/banner1.jpg" />
										<div class="carousel-caption">
											
										</div>
									</div>
									<div class="item">
										<img alt="" src="/restaurant/restaurant/Public/home/images/banner2.jpg" />
										<div class="carousel-caption">
											
										</div>
									</div>
									<div class="item">
										<img alt="" src="/restaurant/restaurant/Public/home/images/banner3.jpg" />
										<div class="carousel-caption">
											
										</div>
									</div>
							</div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		<!--轮播图 结束-->
		<!-- 新闻 开始 -->
		<div class="page-news">
			<div class="page-news-item">
				<div class="w-1">
					<p class="w-news">健康饮食</p>
					<div class="line"></div>
				</div>
				<div class="w-2">
					<img src="/restaurant/restaurant/Public/home/images/w-1.jpg" width="100%" height="124px">
				</div>
				<div class="w-3">
					<ul>
						<?php if(is_array($newsa)): $i = 0; $__LIST__ = $newsa;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li><a href="/restaurant/restaurant/index.php/Home/News/content/id/<?php echo ($data["id"]); ?>"><?php echo ($data["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
			</div>
			<div class="page-news-item step">
				<div class="w-1">
					<p class="w-news">饮食咨询</p>
					<div class="line"></div>
				</div>
				<div class="w-2">
					<img src="/restaurant/restaurant/Public/home/images/w-2.jpg" width="100%" height="124px">
				</div>
				<div class="w-3">
					<ul>
					<?php if(is_array($newsb)): $i = 0; $__LIST__ = $newsb;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li><a href="/restaurant/restaurant/index.php/Home/News/content/id/<?php echo ($data["id"]); ?>"><?php echo ($data["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
			</div>
			<div class="page-news-item">
				<div class="w-1">
					<p class="w-news">为您推荐</p>
					<div class="line"></div>
				</div>
				<div class="w-2">
					<img src="/restaurant/restaurant/Public/home/images/w-3.jpg" width="100%" height="124px">
				</div>
				<div class="w-3">
					<ul>
						<?php if(is_array($newsc)): $i = 0; $__LIST__ = $newsc;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li><a href="/restaurant/restaurant/index.php/Home/News/content/id/<?php echo ($data["id"]); ?>"><?php echo ($data["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<!-- 新闻  结束 -->
		<!-- 菜单 开始 -->
		<div class="page-menu">
			<div class="page-menu-item">
				<ul>
					<li id="menu" onclick="menu()" class="actived"><a href="javascript:void(0)">今日菜单</a></li>
					<li id="hot" onclick="hot()"><a href="javascript:void(0)">一周热门</a></li>
					<div class="clear"></div>
				</ul>
			</div>
			<div class="page-menu-food">
				<ul>
				<?php if(is_array($todayfood)): $i = 0; $__LIST__ = $todayfood;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li>
						<a href="/restaurant/restaurant/index.php/Home/Menu/content/id/<?php echo ($data["id"]); ?>">
							<img src="/restaurant/restaurant/Public/<?php echo ($data["thumb"]); ?>" width="100%" height="100%">
						</a>
						<p><?php echo ($data["name"]); ?></p>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
					<div class="clear"></div>
				</ul>
			</div>
			<div class="page-menu-food2" style="display: none;">
				<ul>
				<?php if(is_array($food)): $i = 0; $__LIST__ = $food;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li>
						<a href="/restaurant/restaurant/index.php/Home/Menu/content/id/<?php echo ($data["id"]); ?>">
							<img src="/restaurant/restaurant/Public/<?php echo ($data["thumb"]); ?>" width="100%" height="100%">
						</a>
						<p><?php echo ($data["name"]); ?></p>
						<!-- <p class="bmbox">fsdasffffffff</p> -->
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
					
					<div class="clear"></div>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
		<!-- 菜单 结束 -->
	</div>
	<!--主体部分 结束-->
	<!-- 返回顶部 -->
	<div class="back-top" onclick="back()">
		<a><img src="/restaurant/restaurant/Public/home/images/back.png"></a>
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