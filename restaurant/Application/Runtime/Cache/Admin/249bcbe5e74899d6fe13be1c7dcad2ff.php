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
                <li><a href="<?php echo U('Admin/Indexen/index');?>" class="top-a">英文版</a></li>
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
            <h2><a href="<?php echo U('Users/pass');?>"><i class="icon-font">&#xe051;</i>修改个人密码</a></h2>
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
            <h2><a href="<?php echo U('Product/lists?p=1');?>"><i class="icon-font">&#xe050;</i>评价列表</a></h2>
            <!-- <h2><a href="<?php echo U('Product/add');?>"><i class="icon-font">&#xe026;</i>添加产品</a></h2> -->
        </div>

        <h1><i class="icon-font">&#xe060;</i>留言簿</h1>
        <div>
            <h2><a href="<?php echo U('Case/lists?p=1');?>"><i class="icon-font">&#xe050;</i>留言列表</a></h2>
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
            <div class="crumb-list"><i class="icon-font"></i><a href="/restaurant/restaurant/index.php/Admin/Index/index">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/restaurant/restaurant/index.php/Admin/Users/lists">用户管理</a><span class="crumb-step">&gt;</span><span>修改用户</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="/restaurant/restaurant/index.php/Admin/Users/doEdit" method="post" role="form">
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr><td>
                                <input type="hidden" name="id" value="<?php echo ($users["id"]); ?>">
                            </td></tr>
                            <tr>
                                <th>工号：</th>
                                <td>
                                    <input class="common-text required" id="read-style" size="50" value="<?php echo ($users["number"]); ?>" type="text" readonly>
                                </td>
                            </tr>
                            <tr>
                                <th>用户名：</th>
                                <td>
                                    <input class="common-text required" id="read-style" size="50" value="<?php echo ($users["username"]); ?>" type="text" readonly>
                                </td>
                            </tr>
                            <tr>
                                <th>真实姓名：</th>
                                <td>
                                    <input class="common-text required" name="truename" size="50" value="<?php echo ($users["truename"]); ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th>所属部门：</th>
                                <td>
                                    <input class="common-text required" name="branch" size="50" value="<?php echo ($users["branch"]); ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th>职位：</th>
                                <td>
                                    <input class="common-text required" name="job" size="50" value="<?php echo ($users["job"]); ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th>手机号码：</th>
                                <td>
                                    <input class="common-text required" name="phone" size="50" value="<?php echo ($users["phone"]); ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th>添加时间：</th>
                                <td>
                                    <input class="common-text required" id="read-style"size="50" type="text" value="<?php echo ($time); ?>" readonly>
                                </td>
                            </tr>
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


<script src="/restaurant/restaurant/Public/admin/js/jquery-1.8.3.min.js"></script>
<script src="/restaurant/restaurant/Public/admin/js/index.js"></script>
</body>
</html>