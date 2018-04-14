<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>首页</title>
	<link rel="stylesheet" type="text/css" href="/restaurant1/restaurant/Public/home/css/nav.css">
	<link rel="stylesheet" type="text/css" href="/restaurant1/restaurant/Public/home/css/index.css">
	<link rel="stylesheet" type="text/css" href="/restaurant1/restaurant/Public/home/css/about.css">
	<link rel="stylesheet" type="text/css" href="/restaurant1/restaurant/Public/home/css/manage.css">
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
				<li><a href="<?php echo U('Home/Order/order');?>">订单查询</a></li>
				<li><a href="<?php echo U('Home/Person/person');?>">个人中心</a></li>
				<li><a href="<?php echo U('Home/News/news');?>">新闻中心</a></li>
				<li><a href="<?php echo U('Home/About/about');?>">关于我们</a></li>
				<div class="clear"></div>
			</ul>
		</div>
		<div class="head-right">
			<div class="xm-sign">
				<a href="<?php echo U('Home/Login/login');?>">登录</a>/<a href="<?php echo U('Home/Login/login');?>">注册</a>
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
					<a href="<?php echo U('Home/Order/order');?>">订单查询</a>
					<a href="<?php echo U('Home/Person/person');?>">个人中心</a>
					<a href="<?php echo U('Home/News/news');?>">新闻中心</a>
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
		
		<div class="page_news">
			<div class="Box_con clearfix">
                <span class="btnl btn" id="btnl"></span>
                <span class="btnr btn" id="btnr"></span>
                <div class="conbox" id="BoxUl">
                    <ul>
                        <li class="cur"><img src="/restaurant1/restaurant/Public/home/images/drink/可乐.jpg" alt="" /></li>                        
                        <li class="cur"><img src="/restaurant1/restaurant/Public/home/images/drink/拿铁.jpg" alt=""/></li>                       
                        <li class="cur"><img src="/restaurant1/restaurant/Public/home/images/drink/巧克力蛋糕.jpg" alt=""/></li>                    
                        <li class="cur"><img src="/restaurant1/restaurant/Public/home/images/drink/泡芙.jpg" alt=""/></li>
                        <li class="cur"><img src="/restaurant1/restaurant/Public/home/images/drink/绿茶.jpg" alt=""/></li>
                        <li class="cur"><img src="/restaurant1/restaurant/Public/home/images/drink/西瓜汁.jpg" alt=""/></li>                    
                        <li class="cur"><img src="/restaurant1/restaurant/Public/home/images/drink/柠檬水.jpg" alt=""/></li>
                        <div class="clear"></div>
                    </ul>
                </div>               
            </div>
		</div>
	</div>
	<script type="text/javascript">
        //滚动元素id，左切换按钮，右切换按钮，切换元素个数id,滚动方式，切换方向，是否自动滚动，滚动距离，滚动时间，滚动间隔，显示个数
        LbMove('BoxUl','btnl','btnr','BoxSwitch',true,'left',true,305,1000,5000,4);
    </script>

		<div class="footers">
		<div class="footer">
			<div class="footer-left">
				<p class="feel">职工餐厅-公司给您家的感觉</p>
				<ul>
					<li><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
					<li><a href="<?php echo U('Home/Order/order');?>">订单查询</a></li>
					<li><a href="<?php echo U('Home/Person/person');?>">个人中心</a></li>
					<li><a href="<?php echo U('Home/News/news');?>">新闻中心</a></li>
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