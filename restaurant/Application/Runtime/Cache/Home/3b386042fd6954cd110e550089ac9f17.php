<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>管理中心</title>
	<link rel="stylesheet" type="text/css" href="/restaurant/Public/home/css/nav.css">
	<link rel="stylesheet" type="text/css" href="/restaurant/Public/home/css/person.css">
	<link rel="stylesheet" href="/restaurant/Public/home/css/bootstrap.css">
	<script type="text/javascript" src="/restaurant/Public/home/js/jquery-1.11.3.js"></script>
	<script type="text/javascript" src="/restaurant/Public/home/js/index.js"></script>
</head>
<body>
	<div class="head">
		<div class="head-left">
			<ul class="xm-nav">
				<li><img src="/restaurant/Public/home/images/ms02.png"></li>
				<li><a href="#">首页</a></li>
				<li><a href="#">订单查询</a></li>
				<li><a href="#">个人中心</a></li>
				<li><a href="#">管理中心</a></li>
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
	<div class="page-theme">
		<!--导航 开始-->
		<div class="nav">
			<ul class="nav-theme">
				<li class="nav-theme-logo">
					<a href="javascript: void (0);">
						<img src="/restaurant/Public/home/images/ms02.png" alt="" width="100%" height="100%">
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
		<!-- 导航 结束 -->
		<div class="page-content">
			<div class="page-left">
				<div class="left-header">
					<h4>个人中心</h4>
				</div>
				<div class="left-mes">
					<div class="mes-img">
						<img src="/restaurant/Public/home/images/timg.png" width="100%" height="100%">
					</div>
					<div class="mes-name">张三</div>
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
					<div class="item-img">
						<img src="/restaurant/Public/home/images/timg.png" id="imghead" width="48px" height="48px">
					</div>
					<div class="btn-upload">
						<input id="previewImg" type="file" onchange="previewImage(this)" style="display: none">
						<button class="btn-change" id="change" onclick="$('#previewImg').click()">修改</button>
					</div>
					<div class="clear"></div>
				</div>
				<div class="person-item" style="background-color:#FFFAF0">
					<div class="item-name">
						<p>姓名</p>
					</div>
					<div class="item-img">
						<p class="value">张三</p>
					</div>
					<div class="clear"></div>
				</div>
				<div class="person-item" >
					<div class="item-name">
						<p>工号</p>
					</div>
					<div class="item-img">
						<p class="value">2014011722</p>
					</div>
					<div class="clear"></div>
				</div>
				<div class="person-item" style="background-color:#FFFAF0">
					<div class="item-name">
						<p>所属部门</p>
					</div>
					<div class="item-img">
						<p class="value">技术部</p>
					</div>
					<div class="btn-upload">
						<button class="btn-change" onclick="branch()">修改</button>
					</div>
					<div class="clear"></div>
				</div>
				<div class="person-item" >
					<div class="item-name">
						<p>职位</p>
					</div>
					<div class="item-img">
						<p class="value">技术员</p>
					</div>
					<div class="btn-upload">
						<button class="btn-change" onclick="job()">修改</button>
					</div>
					<div class="clear"></div>
				</div>
				<div class="person-item" style="background-color:#FFFAF0">
					<div class="item-name">
						<p>登录密码</p>
					</div>
					<div class="item-img">
						<p>******</p>
					</div>
					<div class="btn-upload">
						<button class="btn-change" onclick="password()">修改</button>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="change-branch" id="branch">
			<div class="branch-content" >
				<div class="branch-header">
					<div class="header-left">
						<p>修改所属部门</p>
					</div>
					<div class="header-right"><a href="javascript: void (0);" onclick="closeBranch()">×</a></div>
					<div class="clear"></div>
				</div>
				<div class="branch-center">
					<div class="row">
						<label class="field-name">当前所在部门</label>
						<span class="field-value">技术部</span>
					</div>
					<div class="row">
						<label class="field-name">新部门</label>
						<input type="text">
					</div>
				</div>
				<div class="branch-bottom">
					<button class="button button-ok button-disabled">确认修改</button>
					<button class="button button-cancel" onclick="closeBranch()">取消</button>
				</div>
			</div>
		</div>
		<div class="change-job" id="job">
			<div class="branch-content">
				<div class="branch-header">
					<div class="header-left">
						<p>修改职位</p>
					</div>
					<div class="header-right"><a href="javascript: void (0);" onclick="closeJob()">×</a></div>
					<div class="clear"></div>
				</div>
				<div class="branch-center">
					<div class="row">
						<label class="field-name">当前职位</label>
						<span class="field-value">程序员</span>
					</div>
					<div class="row">
						<label class="field-name">新职位</label>
						<input type="text">
					</div>
				</div>
				<div class="branch-bottom">
					<button class="button button-ok button-disabled">确认修改</button>
					<button class="button button-cancel" onclick="closeJob()">取消</button>
				</div>
			</div>
		</div>
		<div class="change-password" id="password">
			<div class="branch-content">
				<div class="branch-header">
					<div class="header-left">
						<p>修改密码</p>
					</div>
					<div class="header-right"><a href="javascript: void (0);" onclick="closePassword()">×</a></div>
					<div class="clear"></div>
				</div>
				<div class="branch-center">
					<div class="row">
						<label class="field-name">当前密码</label>
						<input type="text">
					</div>
					<div class="row">
						<label class="field-name">新密码</label>
						<input type="text">
					</div>
					<div class="row">
						<label class="field-name">确认密码</label>
						<input type="text">
					</div>
				</div>
				<div class="branch-bottom">
					<button class="button button-ok button-disabled">确认修改</button>
					<button class="button button-cancel" onclick="closePassword()">取消</button>
				</div>
			</div>
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