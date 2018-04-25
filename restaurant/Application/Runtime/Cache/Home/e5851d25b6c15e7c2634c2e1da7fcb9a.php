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
		
<div class="main-wrap">
    <div class="result-wrap">
        <div class="result-content">
            <form action="/restaurant1/restaurant/index.php/Home/Person/doEdit" method="post" id="myform" name="myform" enctype="multipart/form-data">
                <table class="insert-tab" width="100%">
                    <tbody>
                         <tr><td>
                            <input type="hidden" name="id" value="<?php echo ($user["id"]); ?>">
                        </td></tr>
                        <tr>
                            <th>头像：</th>
                            <td>
                            <img src="/restaurant1/restaurant/Public/<?php echo ($user["thumb"]); ?>" width="60px" height="60px">
                            <input name="thumb" id="thumb" type="file"></td>
                        </tr>
                         <tr>
                            <th><!-- <i class="require-red">*</i> -->真实姓名：</th>
                            <td>
                                <input class="common-text required" id="truename" name="truename" size="50" value="<?php echo ($user["truename"]); ?>" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th>工号：</th>
                            <td>
                                <input class="common-text required" id="read-style" size="50" name="number" value="<?php echo ($user["number"]); ?>" type="text" readonly>
                            </td>
                        </tr>
                       <tr>
                            <th>用户名：</th>
                            <td>
                                <input class="common-text required" id="username" size="50" name="username" value="<?php echo ($user["username"]); ?>" type="text" >
                            </td>
                        </tr>
                        <tr>
                            <th>所述部门：</th>
                            <td>
                                <input class="common-text required" id="branch" size="50" name="branch" value="<?php echo ($user["branch"]); ?>" type="text" >
                            </td>
                        </tr>
                        <tr>
                            <th>职位：</th>
                            <td>
                                <input class="common-text required" id="job" size="50" name="job" value="<?php echo ($user["job"]); ?>" type="text" >
                            </td>
                        </tr>
                        <!-- <tr>
                            <th>旧密码：</th>
                            <td>
                                <input class="common-text required"  size="50" type="password">
                            </td>
                        </tr>
                        <tr>
                            <th>新密码：</th>
                            <td>
                                <input class="common-text required" name="password" size="50" type="password">
                            </td>
                        </tr>
                        <tr>
                            <th>确认密码：</th>
                            <td>
                                 <input class="common-text required" name="repassword" size="50" type="password">
                            </td>
                        </tr> -->
                        <tr>
                            <th></th>
                            <td>
                                <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                            </td>
                        </tr>
                    </tbody></table>
            </form>
        </div>
    </div>
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