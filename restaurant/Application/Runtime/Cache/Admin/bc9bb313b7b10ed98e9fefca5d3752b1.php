<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>职工订餐系统</title>
    <link rel="stylesheet" type="text/css" href="/restaurant/restaurant/Public/admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/restaurant/restaurant/Public/admin/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="/restaurant/restaurant/Public/admin/css/mycss.css"/>
    <link rel="stylesheet" href="/restaurant/restaurant/Public/admin/css/style.css">
    <script type="text/javascript" src="/restaurant/restaurant/Public/admin/js/modernizr.min.js"></script>
    
    <script type="text/javascript" src="/restaurant/restaurant/Public/admin/js/quanxuan.js"></script>
     <script type="text/javascript" src="/restaurant/restaurant/Public/admin/js/jquery-1.11.3.js"></script>
     <script type="text/javascript" charset="utf-8" src="/restaurant/restaurant/Public/ueditor/ueditor.config.js"></script>  
<script type="text/javascript" charset="utf-8" src="/restaurant/restaurant/Public/ueditor/ueditor.all.js"></script> 
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
        <h1><i class="icon-font">&#xe018;</i>菜品统计</h1>
        <div>
            <h2><a href="<?php echo U('Sum/lists?p=1');?>"><i class="icon-font">&#xe050;</i>统计列表</a></h2>
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
            <div class="crumb-list"><i class="icon-font"></i><a href="/restaurant/restaurant/index.php/Admin/Index/index">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/restaurant/restaurant/index.php/Admin/Users/lists?p=1">用户管理</a><span class="crumb-step">&gt;</span><span>添加用户</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="/restaurant/restaurant/index.php/Admin/Users/doAdd" method="post" role="form">
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th>工号：</th>
                                <td>
                                    <input class="common-text required" id="num" name="num" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th>添加时间：</th>
                                <td>
                                    <input class="common-text required" id="read-style" size="50" name="createtime" value="<?php echo ($time); ?>" type="text" readonly>
                                </td>
                            </tr>
                            <!-- <tr>
                                <th>真实姓名：</th>
                                <td>
                                    <input class="common-text required" name="truename" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th>手机号码：</th>
                                <td>
                                    <input class="common-text required" name="phonenum" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th>电子邮箱：</th>
                                <td>
                                    <input class="common-text required" name="email" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th>添加时间：</th>
                                <td>
                                    <input class="common-text required" id="read-style" size="50" name="createtime" value="<?php echo ($time); ?>" type="text" readonly>
                                </td>
                            </tr>
                            <tr>
                                <th>设置密码：</th>
                                <td>
                                    <input class="common-text required" name="password" size="50" type="password">
                                </td>
                            </tr>
                            <tr>
                                <th>确认密码：</th>
                                <td>
                                    <input class="common-text required" size="50" name="repassword" value="" type="password">
                                </td>
                            </tr> -->
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="保存" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>


<!-- <script src="/restaurant/restaurant/Public/admin/js/jquery-1.8.3.min.js"></script> -->
<script src="/restaurant/restaurant/Public/admin/js/index.js"></script>
</body>
</html>