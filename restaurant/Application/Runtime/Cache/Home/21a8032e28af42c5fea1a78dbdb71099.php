<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>订单</title>
	<link rel="stylesheet" type="text/css" href="/restaurant/Public/home/css/nav.css">
	<link rel="stylesheet" type="text/css" href="/restaurant/Public/home/css/order.css">
	<link rel="stylesheet" href="/restaurant/Public/home/css/bootstrap.css">
	<script type="text/javascript" src="/restaurant/Public/home/js/jquery-1.11.3.js"></script>
	<script type="text/javascript" src="/restaurant/Public/home/js/index.js"></script>
</head>
<body>
	<div class="head">
		<div class="head-left">
			<ul class="xm-nav">
				<li><img src="/restaurant/Public/home/images/logo.png"></li>
				<li><a href="#">首页</a></li>
				<li><a href="#">订单查询</a></li>
				<li><a href="#">个人中心</a></li>
				<li><a href="#">话题讨论</a></li>
				<li><a href="#">关于我们</a></li>
				<div class="clear"></div>
			</ul>
		</div>
		<div class="head-right">
			<div class="xm-sign">
				<a href="#">登录</a>/<a href="#">注册</a>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<!--主体部分 开始-->
	<div class="page-theme">
		<!--导航 开始-->
		<div class="nav">
			<ul class="nav-theme">
				<li>
					<a class="nav-theme-logo" href="javascript: void (0);">
						<img src="/restaurant/Public/home/images/logo.png" alt="">
					</a>
				</li>
				<li class="nav-theme-nav">
					<a href="javascript: void (0);">首页</a>
					<a href="javascript: void (0);">订单查询</a>
					<a href="javascript: void (0);">个人中心</a>
					<a href="javascript: void (0);">话题讨论</a>
					<a href="javascript: void (0);">关于我们</a>
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
		<div class="menu-theme">
			<div class="item-order">我的订单</div>
		</div>
		<div class="menu-list">
			<ul>
				<li>
					<img src="/restaurant/Public/home/images/06.jpg" width="150px" height="150px">
					<p>鱼香肉丝</p>
					<p style="color:red">￥25</p>
					<div class="menu-number">
						<button type="button" value="＋" onclick="add()">＋</button>
						<input  type="text" name="" value="3" id="text">
						<button type="button" value="＋" onclick="reduce()">－</button>
					</div>
					<a href="javascript: void (0);"style="color:red">取消订单</a>
				</li>
				<li>
					<img src="/restaurant/Public/home/images/06.jpg" width="150px" height="150px">
					<p>鱼香肉丝</p>
					<p>￥25</p>
					<div class="menu-number">
						<button type="button" value="＋">＋</button>
						<input type="text" name="" value="3">
						<button type="button" value="＋">－</button>
					</div>
					<a href="javascript: void (0);">取消订单</a>
				</li>
				<li>
					<img src="/restaurant/Public/home/images/1.jpg" width="150px" height="150px">
					<p>鱼香肉丝</p>
					<p>￥25</p>
					<div class="menu-number">
						<button type="button" value="＋">＋</button>
						<input type="text" name="" value="3">
						<button type="button" value="＋">－</button>
					</div>
					<a href="javascript: void (0);">取消订单</a>
				</li>
				<li>
					<img src="/restaurant/Public/home/images/1.jpg" width="150px" height="150px">
					<p>鱼香肉丝</p>
					<p>￥25</p>
					<div class="menu-number">
						<button type="button" value="＋">＋</button>
						<input type="text" name="" value="3">
						<button type="button" value="＋">－</button>
					</div>
					<a href="javascript: void (0);">取消订单</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="footers">
		<div class="footer">
			<div class="footer-left">
				<p class="feel">职工餐厅-公司给您家的感觉</p>
				<ul>
					<li><a href="#">网站首页</a></li>
					<li><a href="#">订单查询</a></li>
					<li><a href="#">个人中心</a></li>
					<li><a href="#">管理中心</a></li>
					<li><a href="#">关于我们</a></li>
					<li class="clear"></li>
				</ul>
				<p>联系电话：0000-000000</p>
			</div>
			<div class="footer-right">
				<p class="feel">餐厅展景</p>
				<ul>
					<li><img src="/restaurant/Public/home/images/restaurant/1.jpg"></li>
					<li><img src="/restaurant/Public/home/images/restaurant/1.jpg"></li>
					<li><img src="/restaurant/Public/home/images/restaurant/1.jpg"></li>
					<li><img src="/restaurant/Public/home/images/restaurant/1.jpg"></li>
					<div class="clear"></div>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</body>
</html>