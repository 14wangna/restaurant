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
                <li><a href="#" class="top-a">欢迎：admin</a></li>
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
                        <li><a href="/shanghua/index.php/Admin/Users/lists"><i class="icon-font">&#xe008;</i>用户管理</a></li>
                        <li><a href="/shanghua/index.php/Admin/Users/add"><i class="icon-font">&#xe026;</i>添加用户</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe001;</i>新闻管理</a>
                    <ul class="sub-menu">
                        <li><a href="/shanghua/index.php/Admin/New/lists"><i class="icon-font">&#xe008;</i>新闻列表</a></li>
                        <li><a href="/shanghua/index.php/Admin/New/add"><i class="icon-font">&#xe026;</i>添加新闻</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>产品管理</a>
                    <ul class="sub-menu">
                        <li><a href="/shanghua/index.php/Admin/Product/lists"><i class="icon-font">&#xe008;</i>产品列表</a></li>
                        <li><a href="/shanghua/index.php/Admin/Product/add"><i class="icon-font">&#xe026;</i>添加产品</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe060;</i>成功案例</a>
                    <ul class="sub-menu">
                        <li><a href="/shanghua/index.php/Admin/Success/lists"><i class="icon-font">&#xe008;</i>成功案列列表</a></li>
                        <li><a href="/shanghua/index.php/Admin/Success/add"><i class="icon-font">&#xe026;</i>新增成功案列</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe002;</i>申请试用</a>
                    <ul class="sub-menu">
                        <li><a href="/shanghua/index.php/Admin/Apply/lists"><i class="icon-font">&#xe008;</i>申请列表</a></li>
                        
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe051;</i>荣誉管理</a>
                    <ul class="sub-menu">
                        <li><a href="/shanghua/index.php/Admin/Honor/lists"><i class="icon-font">&#xe008;</i>荣誉列表</a></li>
                        <li><a href="/shanghua/index.php/Admin/Honor/add"><i class="icon-font">&#xe026;</i>新增荣誉</a></li>
                        
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>职位管理</a>
                    <ul class="sub-menu">
                        <li><a href="/shanghua/index.php/Admin/Job/lists"><i class="icon-font">&#xe008;</i>职位列表</a></li>
                        <li><a href="/shanghua/index.php/Admin/Job/add"><i class="icon-font">&#xe026;</i>新增职位</a></li>
                        
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe014;</i>咨询管理</a>
                    <ul class="sub-menu">
                        <li><a href="/shanghua/index.php/Admin/Advice/lists"><i class="icon-font">&#xe008;</i>咨询列表</a></li>
                        
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    
<div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/shanghua/index.php/Admin/Index/index">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">成功案例管理</span></div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="/shanghua/index.php/Admin/Successful/add"><i class="icon-font"></i>新增案例</a>
                        <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                        <a id="updateOrd" href="javascript:void(0)"><i class="icon-font"></i>更新排序</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="6%"><input class="allChoose" name="" type="checkbox">全选</th>
                            <th width="20%">案例标题</th>
                            <th width="40%">案例内容</th>
                            <th width="12%">操作</th>
                        </tr>
                        <?php if(is_array($successful)): $i = 0; $__LIST__ = $successful;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
                            <td><input type="checkbox" name="successfulId[]" id="checkbox" value="<?php echo ($data["successful_id"]); ?>"><label for="checkbox"></label></td>
                            <td><?php echo ($data["title"]); ?></td>
                            <td><?php echo ($data["content"]); ?></td>
                            <td>
                                <a class="link-update" href="/shanghua/index.php/Admin/Successful/edit/id/<?php echo ($data["id"]); ?>">修改</a>
                                <a class="link-del" href="/shanghua/index.php/Admin/Successful/delete/successfulId/<?php echo ($data["id"]); ?>">删除</a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                    <div class="list-page"> 2 条 1/1 页</div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>