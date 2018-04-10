<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>北京上华软件</title>
    <link rel="stylesheet" type="text/css" href="/restaurant1/restaurant/Public/admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/restaurant1/restaurant/Public/admin/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="/restaurant1/restaurant/Public/admin/css/mycss.css"/>
    <link rel="stylesheet" href="/restaurant1/restaurant/Public/admin/css/style.css">
    <script type="text/javascript" src="/restaurant1/restaurant/Public/admin/js/modernizr.min.js"></script>
    <script type="text/javascript" src="/restaurant1/restaurant/Public/admin/js/showdate.js"></script>
    <script type="text/javascript" src="/restaurant1/restaurant/Public/admin/js/quanxuan.js"></script>
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
                <li><a href="<?php echo U('Index/index');?>" class="top-a">后台首页</a></li>
                <li><a href="<?php echo U('Home/Index/index');?>" class="top-a">前台首页</a></li>
                <li><a href="<?php echo U('Admin/Indexen/index');?>" class="top-a">英文版</a></li>
                <li><a href="<?php echo U('Index/loginout');?>" class="top-a">退出</a></li>
            </ul>
        </div>
    </div>
</div>


    <aside class="accordion" style="float:left">
        <h1><i class="icon-font">&#xe051;</i>账户管理</h1>
        <div class="opened-for-codepen">
            <h2><a href="<?php echo U('Users/lists?p=1');?>"><i class="icon-font">&#xe050;</i>用户管理</a></h2>
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
            <div class="crumb-list"><i class="icon-font"></i><a href="/restaurant1/restaurant/index.php/Admin/Index/index">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">菜品列表</span></div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" action="/restaurant1/restaurant/index.php/Admin/Food/delete">
                <div class="result-title">
                    <div class="result-list">
                        <a href="/restaurant1/restaurant/index.php/Admin/Food/add"><i class="icon-font"></i>新增菜品</a>
                        <!-- <input type="text" placeholder="请输入关键字..."/>
                        <a href="/restaurant1/restaurant/index.php/Admin/Food/search"><input type="button" value="搜索" /></a> -->
                        
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="6%"><input class="allChoose" name="checkall[]" type="checkbox" id="chkall" onclick='selectcheckbox(this.form)'></th>
                            <th width="12%">菜品配图</th>
                            <th width="12%">菜品名称</th>
                            <th width="12%">菜品价格</th>
                            <th width="12%">菜品配料</th>
                            <th width="12%">菜品功能</th>
                            <th width="12%">添加时间</th>
                            <th width="12%">操作</th>
                        </tr>
                        <?php if(is_array($food)): $i = 0; $__LIST__ = $food;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
                            <td><input type="checkbox" name="foodId[]" id="checkbox" value="<?php echo ($data["id"]); ?>"><label for="checkbox"></label></td>
                            <td><img src="/restaurant1/restaurant/Public/<?php echo ($data["thumb"]); ?>" width="60px" height="60px"></td>
                            <td><?php echo (msubstr($data["title"],0,8,'utf-8',ture)); ?></td>
                            <td><?php echo ($data["price"]); ?></td>
                            <td><?php echo (msubstr($data["batch"],0,8,'utf-8',ture)); ?></td>
                            <td><?php echo (msubstr($data["function"],0,8,'utf-8',ture)); ?></td>
                            <td><?php echo ($data["time"]); ?></td>
                            <td>
                                <a class="link-update" href="/restaurant1/restaurant/index.php/Admin/Food/edit/id/<?php echo ($data["id"]); ?>">修改</a>
                                <a class="link-del" href="/restaurant1/restaurant/index.php/Admin/Food/delete/foodId/<?php echo ($data["id"]); ?>">删除</a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                    <div id="alldelete">
                        <button type="submit" id="batchDel" class="btn btn-danger " href="/restaurant1/restaurant/index.php/Admin/Food/delete">批量删除</button> 
                    </div>
                    <div class="list-page"><?php echo ($page); ?></div>
                </div>
            </form>
        </div>
    </div>


<script src="/restaurant1/restaurant/Public/admin/js/jquery-1.8.3.min.js"></script>
<script src="/restaurant1/restaurant/Public/admin/js/index.js"></script>
</body>
</html>