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
		
		<div class="page_news">
			<div class="Box_con clearfix">
                <span class="btnl btn" id="btnl"></span>
                <span class="btnr btn" id="btnr"></span>
                <div class="conbox" id="BoxUl">
                    <ul>
                        <li class="cur"><img src="/restaurant/restaurant/Public/home/images/drink/可乐.jpg" alt="" /></li>                        
                        <li class="cur"><img src="/restaurant/restaurant/Public/home/images/drink/拿铁.jpg" alt=""/></li>                       
                        <li class="cur"><img src="/restaurant/restaurant/Public/home/images/drink/巧克力蛋糕.jpg" alt=""/></li>                    
                        <li class="cur"><img src="/restaurant/restaurant/Public/home/images/drink/泡芙.jpg" alt=""/></li>
                        <li class="cur"><img src="/restaurant/restaurant/Public/home/images/drink/绿茶.jpg" alt=""/></li>
                        <li class="cur"><img src="/restaurant/restaurant/Public/home/images/drink/西瓜汁.jpg" alt=""/></li>                    
                        <li class="cur"><img src="/restaurant/restaurant/Public/home/images/drink/柠檬水.jpg" alt=""/></li>
                        <div class="clear"></div>
                    </ul>
                </div>               
            </div>
		</div>
        <div class="news_type">
            <div class="type_left">
                <div class="left_type">
                    <ul id="tabs">
                        <li><a href="#" title="tab1" class="actived">健康饮食</a></li>
                        <li><a href="#" title="tab2">饮食咨询</a></li>
                        <li><a href="#" title="tab3">为您推荐</a></li>
                        <div class="clear"></div>
                    </ul>
                </div>
                <div class="left_content" id="content">
                    <ul id="tab1">
                    <?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li>
                            <div class="content_img">
                                <img src="/restaurant/restaurant/Public/<?php echo ($data["thumb"]); ?>" width="100%" height="100%">
                            </div>
                            <div class="content_text">
                                <h4><?php echo ($data["title"]); ?></h4>
                                
                                <p><?php echo (msubstr($data["content"],0,80,'utf-8',ture)); ?></p>
                                <div >
                                    <span style="float:left"><?php echo ($data["time"]); ?></span>
                                    <a href="/restaurant/restaurant/index.php/Home/News/content/id/<?php echo ($data["id"]); ?>" style="color:#ff6767;float: right;font-size:16px;">查看更多>></a>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                    <ul id="tab2">
                        <?php if(is_array($news2)): $i = 0; $__LIST__ = $news2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li>
                            <div class="content_img">
                                <img src="/restaurant/restaurant/Public/<?php echo ($data["thumb"]); ?>" width="100%" height="100%">
                            </div>
                            <div class="content_text">
                                <h4><?php echo ($data["title"]); ?></h4>
                                
                                <p><?php echo (msubstr($data["content"],0,80,'utf-8',ture)); ?></p>
                                <div >
                                    <span style="float:left"><?php echo ($data["time"]); ?></span>
                                    <a href="/restaurant/restaurant/index.php/Home/News/content/id/<?php echo ($data["id"]); ?>" style="color:#ff6767;float: right;font-size:16px;">查看更多>></a>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                    <ul id="tab3">
                        <?php if(is_array($news3)): $i = 0; $__LIST__ = $news3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li>
                            <div class="content_img">
                                <img src="/restaurant/restaurant/Public/<?php echo ($data["thumb"]); ?>" width="100%" height="100%">
                            </div>
                            <div class="content_text">
                                <h4><?php echo ($data["title"]); ?></h4>
                                
                                <p><?php echo (msubstr($data["content"],0,80,'utf-8',ture)); ?></p>
                                <div >
                                    <span style="float:left"><?php echo ($data["time"]); ?></span>
                                    <a href="/restaurant/restaurant/index.php/Home/News/content/id/<?php echo ($data["id"]); ?>" style="color:#ff6767;float: right;font-size:16px;">查看更多>></a>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
            <!-- <span class="type_hot">一周热门</span> -->
            
            <div class="type_right">
                <span class="type_hot">一周热门</span>
                <ul>
                    <?php if(is_array($news1)): $i = 0; $__LIST__ = $news1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li>
                        <div class="right_img">
                            <img src="/restaurant/restaurant/Public/<?php echo ($data["thumb"]); ?>" width="100%" height="100%">
                        </div>
                        <div class="right_text">
                            <a href="/restaurant/restaurant/index.php/Home/News/content/id/<?php echo ($data["id"]); ?>"><?php echo ($data["title"]); ?></a>
                            <span style="text-align: right"><?php echo ($data["time"]); ?></span>
                        </div>
                             <div class="clear"></div>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>

                </ul>
            </div>
           
            <div class="clear"></div>
        </div>
	</div>
</div>
<script type="text/javascript">
        //滚动元素id，左切换按钮，右切换按钮，切换元素个数id,滚动方式，切换方向，是否自动滚动，滚动距离，滚动时间，滚动间隔，显示个数
        LbMove('BoxUl','btnl','btnr','BoxSwitch',true,'left',true,187,1000,2000,4);
        $(document).ready(function() {
            $("#content ul").hide(); // Initially hide all content
            $("#tabs li:first").attr("id","current"); // Activate first tab
            $("#tabs li a:first").attr("class","actived"); //Reset id's
            $("#content ul:first").fadeIn(); // Show first tab content
            
            $('#tabs a').click(function(e) {
                e.preventDefault();        
                $("#content ul").hide(); //Hide all content
                $("#tabs li").attr("id",""); //Reset id's
                $(this).parent().attr("id","current"); // Activate this
                $("#tabs li a").attr("class",""); //Reset id's
                $(this).attr("class","actived"); // Activate this
                $('#' + $(this).attr('title')).fadeIn(); // Show content for current tab
            });
        });
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