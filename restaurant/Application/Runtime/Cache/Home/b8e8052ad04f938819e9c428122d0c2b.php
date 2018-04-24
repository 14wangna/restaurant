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
 						<img src="/restaurant/restaurant/Public/<?php echo ($food["thumb"]); ?>" width="100%" height="100%">
 					</div>
 					<div class="top-intr">
 						<h3><?php echo ($food["name"]); ?></h3>
 						<h4 style="color:red;">￥<?php echo ($food["price"]); ?></h4>
 						<p>“<?php echo ($food["function"]); ?>”</p>
 						<p>主要食材：<?php echo ($food["batch"]); ?></p>
 						
 					</div>
 					<div class="clear"></div>
 				</div>
 				
 				<h3>菜品评价</h3>
 				<div class="content_evaluate">
 					<?php if(is_array($ass)): $i = 0; $__LIST__ = $ass;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div class="evaluate_whole">
		 					<div class="evaluate_left">
		 						<img src="/restaurant/restaurant/Public/<?php echo ($data["thumb"]); ?>" width="" height="">
		 						<p><?php echo ($data["username"]); ?></p>
		 					</div>
		 					<div class="evaluate_right">
		 						<p><?php echo ($data["content"]); ?></p>
		 						<p><?php echo ($data["time"]); ?></p>
		 					</div>
		 					<div class="clear"></div>
	 					</div><?php endforeach; endif; else: echo "" ;endif; ?>
 				</div>
				<div class="content-rec">
					<h3>热门饮品推荐</h3>
					<ul class="drink">
						<?php if(is_array($drink)): $i = 0; $__LIST__ = $drink;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li>
							<div class="img"><img src="/restaurant/restaurant/Public/<?php echo ($data["thumb"]); ?>" style="width:83.48px;height:83.48px;"></div>
							<p><?php echo ($data["name"]); ?></p>
							<p>￥<?php echo ($data["price"]); ?></p>
							
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
			</div>
			<div class="menu-right">
				<div class="menu-news">
					<div class="news-title">
						<p>健康饮食</p>
					</div>
					<ul class="news-list">
						<?php if(is_array($newsa)): $i = 0; $__LIST__ = $newsa;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li><a href="/restaurant/restaurant/index.php/Home/News/content/id/<?php echo ($data["id"]); ?>"><?php echo ($data["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
						<div class="clear"></div>
					</ul>
				</div>
				<div class="menu-news">
					<div class="news-title">
						<p>饮食咨询</p>
					</div>
					<ul class="news-list">
						<?php if(is_array($newsb)): $i = 0; $__LIST__ = $newsb;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li><a href="/restaurant/restaurant/index.php/Home/News/content/id/<?php echo ($data["id"]); ?>"><?php echo ($data["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
						<div class="clear"></div>
					</ul>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<!--导航 结束-->
	</div>
	<div class="change-branch" id="branch">
			<div class="branch-content" >
				<div class="branch-header">
					<div class="header-left">
						<p>菜品评价</p>
					</div>
					<div class="header-right"><a href="javascript: void (0);" onclick="closeBranch()">×</a></div>
					<div class="clear"></div>
				</div>
				<div class="branch-center">
					<div class="row">
						
					</div>
					<div class="row">
						<label class="field-name">评价：</label>
						<textarea type="textarea" id="content" style="height:150px;width:220px"></textarea>
					</div>
				</div>
				<div class="branch-bottom">
					<button class="button button-ok button-disabled" id="<?php echo ($food["id"]); ?>" onclick="esti(this)">确认</button>
				</div>
			</div>
		</div>
	<!-- 页脚 -->
	<script type="text/javascript">
		order = function(res){
			var id = res.id;
			$.ajax({
                type:"POST",
                url:"/restaurant/restaurant/index.php/Home/Menu/add",
                data:{id:id},
                dataType: "json",
                success:function(res){
                	if(res == 1){
                		window.location.href="<?php echo U('Home/Order/order');?>";
                	}
                }
            });
   		}
   		food = function(res){
   			var id = res.id;
   			$.ajax({
                type:"POST",
                url:"/restaurant/restaurant/index.php/Home/Menu/doAdd",
                data:{id:id},
                dataType: "json",
                success:function(res){
                	if(res == 1){
                		window.location.href="<?php echo U('Home/Order/order');?>";
                	}
                }
            });
   		}
   		assess = function(res){
   			var id = res.id;
   			$(".change-branch").css("display","block")

   			
   		}
   		esti = function(res){
   			var id = res.id;
   			var content = $("#content").val();	
   			$.ajax({
                type:"POST",
                url:"/restaurant/restaurant/index.php/Home/Menu/assAdd",
                data:{id:id,content:content},
                dataType: "json",
                success:function(res){
                	console.log(res)
                	  location.reload() 
                }
            });
   		}
	</script>
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