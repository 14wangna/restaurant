<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>后台登陆</title>
	<link rel="stylesheet" type="text/css" href="/restaurant1/restaurant/Public/admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/restaurant1/restaurant/Public/admin/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="/restaurant1/restaurant/Public/admin/css/mycss.css"/>
    <link rel="stylesheet" type="text/css" href="/restaurant1/restaurant/Public/admin/css/login.css"/>
    <script type="text/javascript" src="/restaurant1/restaurant/Public/admin/js/modernizr.min.js"></script>
    <script type="text/javascript" src="/restaurant1/restaurant/Public/admin/js/login.js"></script>
</head>
<body style="background-color:rgb(249,249,249)">
<div >
	<div class="topbar-wrap white">
    	<div class="topbar-inner clearfix">
	        <div class="topbar-logo-wrap clearfix">
	            <img src="/restaurant1/restaurant/Public/admin/images/logo.jpg" height="45px;" >
	        </div>
	        <div class="top-info-wrap">
	            <ul class="top-info-list clearfix">
	                <li><a href="/restaurant1/restaurant/index.php/Admin/Index/index" class="top-a">后台首页</a></li>
	                <li><a href="#" class="top-a">前台首页</a></li>
	                <li><a href="#" class="top-a">退出</a></li>
	            </ul>
	        </div>
    	</div>
	</div>
	<div class="container">
	<section id="content">
		<form role="form" method="post" action="">
			<h1>登陆</h1>
			<div>
				<input type="text" name="username" placeholder="用户名" id="username" />
			</div>
			<div>
				<input type="password" name="password" placeholder="密码" id="password" />
			</div>
			<div id="button">
				<input type="submit" value="登陆"/>
			</div>
		</form>
	</section>
	</div>
</div>
</body>
</html>