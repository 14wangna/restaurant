<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>北京上华软件</title>
    <link rel="stylesheet" type="text/css" href="/shanghua/Public/admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/shanghua/Public/admin/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="/shanghua/Public/admin/css/mycss.css"/>
    <script type="text/javascript" src="/shanghua/Public/admin/js/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <!-- <h1 class="topbar-logo none"><a href="#" class="navbar-brand">后台管理</a></h1> -->
            <img src="/shanghua/Public/admin/images/logo.jpg" height="45px;" >
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="/shanghua/index.php/Admin/Index/index" class="top-a">后台首页</a></li>
                <li><a href="#" class="top-a">前台首页</a></li>
                <li><a href="#" class="top-a">退出</a></li>
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
                    <a href="#"><i class="icon-font">&#xe051;</i>账户管理</a>
                    <ul class="sub-menu">
                        <li><a href="/shanghua/index.php/Admin/Users/lists"><i class="icon-font">&#xe050;</i>用户管理</a></li>
                        <li><a href="/shanghua/index.php/Admin/Users/add"><i class="icon-font">&#xe026;</i>添加用户</a></li>
                        <li><a href="/shanghua/index.php/Admin/Users/pass"><i class="icon-font">&#xe051;</i>修改个人密码</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe001;</i>新闻管理</a>
                    <ul class="sub-menu">
                        <li><a href="/shanghua/index.php/Admin/New/lists"><i class="icon-font">&#xe050;</i>新闻列表</a></li>
                        <li><a href="/shanghua/index.php/Admin/New/add"><i class="icon-font">&#xe026;</i>添加新闻</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>产品管理</a>
                    <ul class="sub-menu">
                        <li><a href="/shanghua/index.php/Admin/Product/lists"><i class="icon-font">&#xe050;</i>产品列表</a></li>
                        <li><a href="/shanghua/index.php/Admin/Product/add"><i class="icon-font">&#xe026;</i>添加产品</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe060;</i>成功案例</a>
                    <ul class="sub-menu">
                        <li><a href="/shanghua/index.php/Admin/Case/lists"><i class="icon-font">&#xe050;</i>成功案列列表</a></li>
                        <li><a href="/shanghua/index.php/Admin/Case/add"><i class="icon-font">&#xe026;</i>新增成功案列</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe002;</i>申请试用</a>
                    <ul class="sub-menu">
                        <li><a href="/shanghua/index.php/Admin/Apply/lists"><i class="icon-font">&#xe050;</i>申请列表</a></li>
                        
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe051;</i>荣誉管理</a>
                    <ul class="sub-menu">
                        <li><a href="/shanghua/index.php/Admin/Honor/lists"><i class="icon-font">&#xe050;</i>荣誉列表</a></li>
                        <li><a href="/shanghua/index.php/Admin/Honor/add"><i class="icon-font">&#xe026;</i>新增荣誉</a></li>
                        
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>职位管理</a>
                    <ul class="sub-menu">
                        <li><a href="/shanghua/index.php/Admin/Job/lists"><i class="icon-font">&#xe050;</i>职位列表</a></li>
                        <li><a href="/shanghua/index.php/Admin/Job/add"><i class="icon-font">&#xe026;</i>新增职位</a></li>
                        
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe014;</i>咨询管理</a>
                    <ul class="sub-menu">
                        <li><a href="/shanghua/index.php/Admin/Advice/lists"><i class="icon-font">&#xe050;</i>咨询列表</a></li>
                        
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    
<div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="index.html">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="allNewses.html">职位管理</a><span class="crumb-step">&gt;</span><span>新增职位</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="/shanghua/index.php/Admin/Job/doEdit" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr><td>
                                <input type="hidden" name="id" value="<?php echo ($job["id"]); ?>">
                            </td></tr>
                            <tr>
                                <th>职位：</th>
                                <td>
                                    <input class="common-text required" id="title" name="title" size="50" value="<?php echo ($job["title"]); ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th>发布时间：</th>
                                <td>
                                    <input class="common-text required" id="read-style" size="50" name="time" value="<?php echo ($time); ?>" type="text" readonly>
                                </td>
                            </tr>
                            <tr>
                                <th>工作地点：</th>
                                <td>
                                    <input class="common-text required" id="title" name="place" size="50" value="<?php echo ($job["place"]); ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th>招聘人数：</th>
                                <td>
                                    <input class="common-text required" id="title" name="num" size="50" value="<?php echo ($job["num"]); ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th>工作内容：</th>
                                <td><textarea name="content" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="10"><?php echo ($job["content"]); ?></textarea></td>
                            </tr>
                            <tr>
                                <th>岗位要求：</th>
                                <td><textarea name="demand" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="10"><?php echo ($job["demand"]); ?></textarea></td>
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