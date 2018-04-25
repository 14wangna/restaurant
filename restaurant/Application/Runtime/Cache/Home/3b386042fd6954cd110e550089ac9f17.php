<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>首页</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/restaurant1/restaurant/Public/home/css/nav.css">
	<link rel="stylesheet" type="text/css" href="/restaurant1/restaurant/Public/home/css/index.css">
	<link rel="stylesheet" type="text/css" href="/restaurant1/restaurant/Public/home/css/about.css">
	<!-- <link rel="stylesheet" type="text/css" href="/restaurant1/restaurant/Public/home/css/manage.css"> -->
	<link rel="stylesheet" type="text/css" href="/restaurant1/restaurant/Public/home/css/menu-content.css">
	<link rel="stylesheet" type="text/css" href="/restaurant1/restaurant/Public/home/css/menu.css">
	<link rel="stylesheet" type="text/css" href="/restaurant1/restaurant/Public/home/css/news.css">
	<link rel="stylesheet" type="text/css" href="/restaurant1/restaurant/Public/home/css/order.css">
	<link rel="stylesheet" type="text/css" href="/restaurant1/restaurant/Public/home/css/person.css">
	<link rel="stylesheet" type="text/css" href="/restaurant1/restaurant/Public/home/css/common.css">
	<link rel="stylesheet" href="/restaurant1/restaurant/Public/home/css/bootstrap.css">
	<script src="/restaurant1/restaurant/Public/home/js/jquery-1.11.3.js"></script>
	<script type="text/javascript" src="/restaurant1/restaurant/Public/home/js/bootstrap.js"></script>
	<script type="text/javascript" src="/restaurant1/restaurant/Public/home/js/index.js"></script>
	<script type="text/javascript" src="/restaurant1/restaurant/Public/home/js/news.js"></script>
		
</head>
<body>
	<div class="head">
		<div class="head-left">
			<ul class="xm-nav">
				<li><img src="/restaurant1/restaurant/Public/home/images/ms03.png" width="100%" height="100%">
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
						<img src="/restaurant1/restaurant/Public/home/images/ms02.png" alt="" width="100%" height="100%">
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
		
		<!-- 导航 结束 -->
		<div class="page-content">
			<div class="page-left">
				<div class="left-header">
					<h4>个人中心</h4>
				</div>
				<div class="left-mes">
					<div class="mes-img">
						<img src="/restaurant1/restaurant/Public/<?php echo ($user["thumb"]); ?>" width="100%" height="100%">
					</div>
					<div class="mes-name"><?php echo ($user["username"]); ?></div>
				</div>
				<div class="left-content"></div>	
			</div>
			<div class="page-person">
				<div class="person-setting">
					<p class="title">个人信息</p>
					<p class="des">账号设置</p>
				</div>
				<div class="person-item">
					<div class="item-name">
						<p>头像</p>
					</div>
					<form action="/restaurant1/restaurant/index.php/Home/Person/doEdit" method="POST" id="myform" name="myform" enctype="multipart/form-data">
					<div class="item-img">
						<img src="/restaurant1/restaurant/Public/<?php echo ($user["thumb"]); ?>" id="imghead" width="48px" height="48px">
					</div>
					<div class="btn-upload">
						
						<input type="file" onchange="previewImage(this)"  name="thumb" id="thumb" style="display: none">
						<button type="button" class="btn-change" id="change" onclick="$('#thumb').click()">修改</button>
					</div>
					<div class="clear"></div>
				</div>
				<div class="person-item" style="background-color:#FFFAF0">
					<div class="item-name">
						<p>真实姓名</p>
					</div>
					<div class="item-img">
						<input type="text" class="value" value="<?php echo ($user["truename"]); ?>" name="truename" readonly>
					</div>
					<div class="clear"></div>
				</div>
				<div class="person-item" >
					<div class="item-name">
						<p>工号</p>
					</div>
					<div class="item-img">
						<input type="text" class="value" value="<?php echo ($user["number"]); ?>" name="number" readonly>
					</div>
					<div class="clear"></div>
				</div>
				<div class="person-item" style="background-color:#FFFAF0">
					<div class="item-name">
						<p>用户名</p>
					</div>
					<div class="item-img">
						<input type="text" class="value" value="<?php echo ($user["username"]); ?>" name="username">
					</div>
					<div class="clear"></div>
				</div>
				<div class="person-item" >
					<div class="item-name">
						<p>所属部门</p>
					</div>
					<div class="item-img">
						<input type="text" class="value" value="<?php echo ($user["branch"]); ?>" name="branch">
					</div>
				
					<div class="clear"></div>
				</div>
				<div class="person-item" style="background-color:#FFFAF0">
					<div class="item-name">
						<p>职位</p>
					</div>
					<div class="item-img">
						<input type="text" class="value" value="<?php echo ($user["job"]); ?>" name="job">
					</div>
					
					<div class="clear"></div>

				</div>

				<div class="person-item">
					<div class="item-name">
						<p>登录密码</p>
					</div>
					<div class="item-img">
						<input type="password" class="value" value="<?php echo ($user["password"]); ?>" name="password">
					</div>
					
					<div class="clear"></div>
				</div>
				<button class="btn-change" type="submit">修改</button>
				 <!-- <div class="person-items">
				 	<a class="link-update" href="/restaurant1/restaurant/index.php/Home/Person/edit/id/<?php echo ($user["id"]); ?>">修改</a>
				 </div> -->
			</form>
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