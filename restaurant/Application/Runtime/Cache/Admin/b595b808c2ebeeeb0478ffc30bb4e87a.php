<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>北京上华软件</title>
    <link rel="stylesheet" type="text/css" href="/restaurant/restaurant/Public/admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/restaurant/restaurant/Public/admin/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="/restaurant/restaurant/Public/admin/css/mycss.css"/>
    <link rel="stylesheet" href="/restaurant/restaurant/Public/admin/css/style.css">
    <script type="text/javascript" src="/restaurant/restaurant/Public/admin/js/modernizr.min.js"></script>
    <script type="text/javascript" src="/restaurant/restaurant/Public/admin/js/showdate.js"></script>
    <script type="text/javascript" src="/restaurant/restaurant/Public/admin/js/quanxuan.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <!-- <h1 class="topbar-logo none"><a href="#" class="navbar-brand">后台管理</a></h1> -->
            <img src="/restaurant/restaurant/Public/admin/images/logo.jpg" height="45px;" >
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="<?php echo U('Index/index');?>" class="top-a">后台首页</a></li>
                <li><a href="<?php echo U('Home/Index/index');?>" class="top-a">前台首页</a></li>
                <li><a href="<?php echo U('Index/loginout');?>" class="top-a">退出</a></li>
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

        <h1><i class="icon-font">&#xe001;</i>新闻管理</h1>
        <div>
            <h2><a href="<?php echo U('New/lists?p=1');?>"><i class="icon-font">&#xe050;</i>新闻列表</a></h2>
            <h2><a href="<?php echo U('New/add');?>"><i class="icon-font">&#xe026;</i>添加新闻</a></h2>
        </div>

        <h1><i class="icon-font">&#xe005;</i>菜品管理</h1>
        <div>
            <h2><a href="<?php echo U('Food/lists?p=1');?>"><i class="icon-font">&#xe050;</i>菜品列表</a></h2>
            <h2><a href="<?php echo U('Food/add');?>"><i class="icon-font">&#xe026;</i>新增菜品</a></h2>
        </div>

        <h1><i class="icon-font">&#xe018;</i>评价管理</h1>
        <div>
            <h2><a href="<?php echo U('Evaluate/lists?p=1');?>"><i class="icon-font">&#xe050;</i>评价列表</a></h2>
            <!-- <h2><a href="<?php echo U('Product/add');?>"><i class="icon-font">&#xe026;</i>添加产品</a></h2> -->
        </div>

        <h1><i class="icon-font">&#xe060;</i>留言簿</h1>
        <div>
            <h2><a href="<?php echo U('Advice/lists?p=1');?>"><i class="icon-font">&#xe050;</i>留言列表</a></h2>
            <!-- <h2><a href="<?php echo U('Case/add');?>"><i class="icon-font">&#xe026;</i>新增案列</a></h2> -->
        </div>

        <!-- <h1><i class="icon-font">&#xe002;</i>申请试用</h1>
        <div>
            <h2><a href="<?php echo U('Apply/lists?p=1');?>"><i class="icon-font">&#xe050;</i>申请列表</a></h2>
        </div>

        <h1><i class="icon-font">&#xe051;</i>荣誉管理</h1>
        <div>
            <h2><a href="<?php echo U('Honor/lists?p=1');?>"><i class="icon-font">&#xe050;</i>荣誉列表</a></h2>
            <h2><a href="<?php echo U('Honor/add');?>"><i class="icon-font">&#xe026;</i>新增荣誉</a></h2>
        </div>

        <h1><i class="icon-font">&#xe003;</i>职位管理</h1>
        <div>
            <h2><a href="<?php echo U('Job/lists?p=1');?>"><i class="icon-font">&#xe050;</i>职位列表</a></h2>
            <h2><a href="<?php echo U('Job/add');?>"><i class="icon-font">&#xe026;</i>新增职位</a></h2>
        </div>

        <h1><i class="icon-font">&#xe014;</i>咨询管理</h1>
        <div>
            <h2><a href="<?php echo U('Advice/lists?p=1');?>"><i class="icon-font">&#xe050;</i>咨询列表</a></h2>
        </div> -->
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
                        <li><div class="short-img"><img src="/restaurant/restaurant/Public/admin/images/010.png" height="40px" width="50px"></div><div class="short-list1"><a href="<?php echo U('Users/lists?p=1');?>">用户管理</a></div></li>
                        <li><div class="short-img"><img src="/restaurant/restaurant/Public/admin/images/011.png" height="40px" width="50px"></div><div class="short-list1"><a href="<?php echo U('New/lists?p=1');?>">新闻列表</a></div></li>
                        <li><div class="short-img"><img src="/restaurant/restaurant/Public/admin/images/006.png" height="40px" width="50px"></div><div class="short-list1"><a href="<?php echo U('Industry/lists?p=1');?>">菜品管理</a></div></li>
                    </ul>
                    <ul class="short-list">
                        <li><div class="short-img"><img src="/restaurant/restaurant/Public/admin/images/008.png" height="40px" width="50px"></div><div class="short-list1"><a href="<?php echo U('Product/lists?p=1');?>">产品列表</a></div></li>
                        <li><div class="short-img"><img src="/restaurant/restaurant/Public/admin/images/001.png" height="40px" width="50px"></div><div class="short-list1"><a href="<?php echo U('Case/lists?p=1');?>">成功案例</a></div></li>
                        <li><div class="short-img"><img src="/restaurant/restaurant/Public/admin/images/012.png" height="40px" width="50px"></div><div class="short-list1"><a href="<?php echo U('Apply/lists?p=1');?>">申请试用</a></div></li>
                    </ul>
                    <ul class="short-list">
                        <li><div class="short-img"><img src="/restaurant/restaurant/Public/admin/images/003.png" height="40px" width="50px"></div><div class="short-list1"><a href="<?php echo U('Honor/lists?p=1');?>">荣誉列表</a></div></li>
                        <li><div class="short-img"><img src="/restaurant/restaurant/Public/admin/images/013.png" height="40px" width="50px"></div><div class="short-list1"><a href="<?php echo U('Job/lists?p=1');?>">职位列表</a></div></li>
                        <li><div class="short-img"><img src="/restaurant/restaurant/Public/admin/images/005.png" height="40px" width="50px"></div><div class="short-list1"><a href="<?php echo U('Advice/lists?p=1');?>">咨询列表</a></div></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>简介</h1>
            </div>
            <div class="result-content1">
                <h6>介绍</h6>
                <p>北京上华软件有限公司是一家服务于勘察设计信息化发展领域的新型高科技信息化公司。</p>
                <h6>主要产品</h6>
                <p>各种软件</p>
                <h6>地址</h6>
                <p>北京市丰台区建华街道上华软件有限公司</p>
                <h6>联系方式</h6>
                <p>400-700-3609</p>
                <h6>网址</h6>
                <p>www.shanghua.com</p> 
            </div>
        </div>
        
    </div>


<script src="/restaurant/restaurant/Public/admin/js/jquery-1.8.3.min.js"></script>
<script src="/restaurant/restaurant/Public/admin/js/index.js"></script>
</body>
</html>