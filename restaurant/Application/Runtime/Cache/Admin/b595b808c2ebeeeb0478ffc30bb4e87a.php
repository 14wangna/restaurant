<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>职工订餐系统</title>
    <link rel="stylesheet" type="text/css" href="/restaurant1/restaurant/Public/admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/restaurant1/restaurant/Public/admin/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="/restaurant1/restaurant/Public/admin/css/mycss.css"/>
    <link rel="stylesheet" href="/restaurant1/restaurant/Public/admin/css/style.css">
    <script type="text/javascript" src="/restaurant1/restaurant/Public/admin/js/modernizr.min.js"></script>
    
    <script type="text/javascript" src="/restaurant1/restaurant/Public/admin/js/quanxuan.js"></script>
     <script type="text/javascript" src="/restaurant1/restaurant/Public/admin/js/jquery-1.11.3.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <!-- <h1 class="topbar-logo none"><a href="#" class="navbar-brand">后台管理</a></h1> -->
            <img src="/restaurant1/restaurant/Public/admin/images/logo.jpg" height="45px;" >
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <?php if(isLogin()): ?><a style="color:#fff">欢迎：<?php echo (session('username')); ?></a>
                <a href="<?php echo U('Index/loginout');?>">退出</a>
                <?php else: ?>
                <a href="<?php echo U('Home/Login/login');?>">登录</a>/<a href="<?php echo U('Home/Login/login');?>">注册</a><?php endif; ?>
            </ul>
        </div>
    </div>
</div>


    <aside class="accordion" style="float:left">
        <h1><i class="icon-font">&#xe001;</i>管理员管理</h1>
        <div class="opened-for-codepen">
            <h2><a href="<?php echo U('Admin/lists?p=1');?>"><i class="icon-font">&#xe050;</i>管理员列表</a></h2>
            <h2><a href="<?php echo U('Admin/add');?>"><i class="icon-font">&#xe026;</i>添加管理员</a></h2>
            <h2><a href="<?php echo U('Admin/pass');?>"><i class="icon-font">&#xe051;</i>修改个人密码</a></h2>
        </div>
        <h1><i class="icon-font">&#xe051;</i>用户管理</h1>
        <div >
            <h2><a href="<?php echo U('Users/lists?p=1');?>"><i class="icon-font">&#xe050;</i>用户列表</a></h2>
            <h2><a href="<?php echo U('Users/add');?>"><i class="icon-font">&#xe026;</i>添加用户</a></h2>
        </div>

        <h1><i class="icon-font">&#xe005;</i>每日菜单管理</h1>
        <div>
            <h2><a href="<?php echo U('Todayfood/lists?p=1');?>"><i class="icon-font">&#xe050;</i>菜品列表</a></h2>
            <h2><a href="<?php echo U('Todayfood/add');?>"><i class="icon-font">&#xe026;</i>新增菜品</a></h2>
        </div>

        <h1><i class="icon-font">&#xe005;</i>菜品管理</h1>
        <div>
            <h2><a href="<?php echo U('Food/lists?p=1');?>"><i class="icon-font">&#xe050;</i>菜品列表</a></h2>
            <h2><a href="<?php echo U('Food/add');?>"><i class="icon-font">&#xe026;</i>新增菜品</a></h2>
        </div>
        
        <h1><i class="icon-font">&#xe001;</i>新闻管理</h1>
        <div>
            <h2><a href="<?php echo U('New/lists?p=1');?>"><i class="icon-font">&#xe050;</i>新闻列表</a></h2>
            <h2><a href="<?php echo U('New/add');?>"><i class="icon-font">&#xe026;</i>添加新闻</a></h2>
        </div>

        <h1><i class="icon-font">&#xe018;</i>评价管理</h1>
        <div>
            <h2><a href="<?php echo U('Evaluate/lists?p=1');?>"><i class="icon-font">&#xe050;</i>评价列表</a></h2>
        </div>

        <h1><i class="icon-font">&#xe060;</i>留言簿</h1>
        <div>
            <h2><a href="<?php echo U('Advice/lists?p=1');?>"><i class="icon-font">&#xe050;</i>留言列表</a></h2>
        </div>
        </div>
    </aside>

    
<div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list">
                <i class="icon-font"></i>
                <span>首页</span>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>快捷操作</h1>
            </div>
            <div class="result-content">
                <div class="short-wrap">
                    <ul class="short-list">
                        <li><div class="short-img"><img src="/restaurant1/restaurant/Public/admin/images/010.png" height="40px" width="50px"></div><div class="short-list1"><a href="<?php echo U('Users/lists?p=1');?>">管理员管理</a></div></li>
                        <li><div class="short-img"><img src="/restaurant1/restaurant/Public/admin/images/011.png" height="40px" width="50px"></div><div class="short-list1"><a href="<?php echo U('New/lists?p=1');?>">用户管理</a></div></li>
                        <li><div class="short-img"><img src="/restaurant1/restaurant/Public/admin/images/006.png" height="40px" width="50px"></div><div class="short-list1"><a href="<?php echo U('Industry/lists?p=1');?>">新闻管理</a></div></li>
                    </ul>
                    <ul class="short-list">
                        <li><div class="short-img"><img src="/restaurant1/restaurant/Public/admin/images/008.png" height="40px" width="50px"></div><div class="short-list1"><a href="<?php echo U('Product/lists?p=1');?>">每日菜单管理</a></div></li>
                        <li><div class="short-img"><img src="/restaurant1/restaurant/Public/admin/images/001.png" height="40px" width="50px"></div><div class="short-list1"><a href="<?php echo U('Case/lists?p=1');?>">菜品管理</a></div></li>
                        <li><div class="short-img"><img src="/restaurant1/restaurant/Public/admin/images/012.png" height="40px" width="50px"></div><div class="short-list1"><a href="<?php echo U('Apply/lists?p=1');?>">评价管理</a></div></li>
                    </ul>
                    <ul class="short-list">
                        <li><div class="short-img"><img src="/restaurant1/restaurant/Public/admin/images/003.png" height="40px" width="50px"></div><div class="short-list1"><a href="<?php echo U('Honor/lists?p=1');?>">留言簿</a></div></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-content1">
                <h6>项目背景</h6>
                <p>很多公司都有自己的职工餐厅，职工餐厅是员工的福利。但是职工餐厅不像外面的餐馆针对所有人开放，职工餐厅的服务群体是本公司的员工。面对特定的群体就有可以灵活把控的范围，譬如菜单的内容，餐量的多少。这些因素可以使员工餐做的更人性化，更便捷。也为团结公司力量做出一份贡献，使公司成为每个员工温暖的大家庭。其中的关键点就在于餐厅和员工有足够的交流和互动。</p>
                <p>目前大多数公司的职工餐厅和员工是缺乏交流和沟通的，本系统意在解决这个问题。</p>
            </div>
        </div>
        
    </div>


<!-- <script src="/restaurant1/restaurant/Public/admin/js/jquery-1.8.3.min.js"></script> -->
<script src="/restaurant1/restaurant/Public/admin/js/index.js"></script>
</body>
</html>