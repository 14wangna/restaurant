<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>北京上华软件</title>
    <link rel="stylesheet" type="text/css" href="/shanghua/Public/admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/shanghua/Public/admin/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="/shanghua/Public/admin/css/mycss.css"/>
    <link rel="stylesheet" href="/shanghua/Public/admin/css/style.css">
    <script type="text/javascript" src="/shanghua/Public/admin/js/modernizr.min.js"></script>
    <script type="text/javascript" src="/shanghua/Public/admin/js/showdate.js"></script>
    <script type="text/javascript" src="/shanghua/Public/admin/js/quanxuan.js"></script>
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

        <h1><i class="icon-font">&#xe005;</i>行业资讯</h1>
        <div>
            <h2><a href="<?php echo U('Industry/lists?p=1');?>"><i class="icon-font">&#xe050;</i>咨询列表</a></h2>
            <h2><a href="<?php echo U('Industry/add');?>"><i class="icon-font">&#xe026;</i>新增咨询</a></h2>
        </div>

        <h1><i class="icon-font">&#xe018;</i>产品管理</h1>
        <div>
            <h2><a href="<?php echo U('Product/lists?p=1');?>"><i class="icon-font">&#xe050;</i>产品列表</a></h2>
            <h2><a href="<?php echo U('Product/add');?>"><i class="icon-font">&#xe026;</i>添加产品</a></h2>
        </div>

        <h1><i class="icon-font">&#xe060;</i>成功案例</h1>
        <div>
            <h2><a href="<?php echo U('Case/lists?p=1');?>"><i class="icon-font">&#xe050;</i>案列列表</a></h2>
            <h2><a href="<?php echo U('Case/add');?>"><i class="icon-font">&#xe026;</i>新增案列</a></h2>
        </div>

        <h1><i class="icon-font">&#xe002;</i>申请试用</h1>
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
        </div>
    </aside>

    
<div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/shanghua/index.php/Admin/Index/index">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">产品管理</span></div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" action="/shanghua/index.php/Admin/Product/delete">
                <div class="result-title">
                    <div class="result-list">
                        <a href="/shanghua/index.php/Admin/Product/add"><i class="icon-font"></i>新增产品</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="6%"><input class="allChoose" name="checkall[]" type="checkbox" id="chkall" onclick='selectcheckbox(this.form)'            
                            ></th>
                            <th width="20%">产品配图</th>
                            <th width="20%">产品标题</th>
                            <th width="40%">产品内容</th>
                            <th width="12%">操作</th>
                        </tr>
                        <?php if(is_array($product)): $i = 0; $__LIST__ = $product;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
                            <td><input type="checkbox" name="productId[]" id="checkbox" value="<?php echo ($data["id"]); ?>"><label for="checkbox"></label></td>
                            <td><img src="/shanghua/Public/<?php echo ($data["thumb"]); ?>" width="60px" height="60px"></td>
                            <td><?php echo (msubstr($data["title"],0,10,'utf-8',ture)); ?></td>
                            <td><?php echo (msubstr($data["content"],0,10,'utf-8',ture)); ?></td>
                            <td>
                                <a class="link-update" href="/shanghua/index.php/Admin/Product/edit/id/<?php echo ($data["id"]); ?>">修改</a>
                                <a class="link-del" href="/shanghua/index.php/Admin/Product/delete/productId/<?php echo ($data["id"]); ?>">删除</a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                     <div id="alldelete">

                    <button type="submit" id="batchDel" class="btn btn-danger " href="/shanghua/index.php/Admin/Product/delete">批量删除</button> 
                     </div>
                    <div class="list-page"> <?php echo ($page); ?></div>
                </div>
            </form>
        </div>
    </div>


<script src="/shanghua/Public/admin/js/jquery-1.8.3.min.js"></script>
<script src="/shanghua/Public/admin/js/index.js"></script>
</body>
</html>