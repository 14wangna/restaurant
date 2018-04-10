<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>北京上华软件</title>
    <link rel="stylesheet" type="text/css" href="/hotel/Public/admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/hotel/Public/admin/css/main.css"/>
    <script type="text/javascript" src="js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="<?php echo U('Admin/index/index');?>" class="navbar-brand">后台管理</a></h1>
            <img src="/hotel/Public/admin/images/logo.jpg" height="45px;" >
            <!-- <ul class="navbar-list clearfix">
                <li><a class="on" href="<?php echo U('Admin/index/index');?>">首页</a></li>
                <li><a href="#" target="<?php echo U('Home/index/index');?>">网站首页</a></li>
            </ul> -->
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="#">欢迎：admin</a></li>
                <li><a href="#">后台首页</a></li>
                <li><a href="#">前台首页</a></li>
                <li><a href="#">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content"> 
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe001;</i>新闻管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/room/index');?>"><i class="icon-font">&#xe008;</i>新闻列表</a></li>
                        <li><a href="<?php echo U('Admin/room/create');?>"><i class="icon-font">&#xe026;</i>添加新闻</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>产品管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/category/index');?>"><i class="icon-font">&#xe008;</i>产品列表</a></li>
                        <li><a href="<?php echo U('Admin/category/create');?>"><i class="icon-font">&#xe026;</i>添加产品</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe060;</i>成功案例</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/new/index');?>"><i class="icon-font">&#xe008;</i>成功案列列表</a></li>
                        <li><a href="<?php echo U('Admin/new/create');?>"><i class="icon-font">&#xe026;</i>新增成功案列</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe002;</i>申请试用</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/meeting/index');?>"><i class="icon-font">&#xe008;</i>申请列表</a></li>
                        
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe051;</i>荣誉管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/meeting/index');?>"><i class="icon-font">&#xe008;</i>荣誉列表</a></li>
                        <li><a href="<?php echo U('Admin/meeting/index');?>"><i class="icon-font">&#xe026;</i>新增荣誉</a></li>
                        
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>职位管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/meeting/index');?>"><i class="icon-font">&#xe008;</i>职位列表</a></li>
                        <li><a href="<?php echo U('Admin/meeting/index');?>"><i class="icon-font">&#xe026;</i>新增职位</a></li>
                        
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe014;</i>咨询管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/meeting/index');?>"><i class="icon-font">&#xe008;</i>咨询列表</a></li>
                        
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    
<div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="index.html">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="allNewses.html">新闻管理</a><span class="crumb-step">&gt;</span><span>新增新闻</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="<?php echo U('Admin/new/store');?>" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>标题：</th>
                                <td>
                                    <input class="common-text required" id="title" name="title" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red"></i>发布时间：</th>
                                <td>
                                    <input class="common-text required" id="title" name="title" size="50" value="" type="text" placeholder="2016-11-30">
                                </td>
                            </tr>
                            <tr>
                                <th>内容：</th>
                                <td><textarea name="content" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="10"></textarea></td>
                            </tr>
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
    <!--/main-->
</div>
</body>
</html>