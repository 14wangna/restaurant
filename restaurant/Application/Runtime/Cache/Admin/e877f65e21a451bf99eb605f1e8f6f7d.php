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
            <div class="crumb-list"><i class="icon-font"></i><a href="/restaurant/restaurant/index.php/Admin/Index/index">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/restaurant/restaurant/index.php/Admin/Food/lists?p=1">菜品管理</a><span class="crumb-step">&gt;</span><span>修改菜品</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="/restaurant/restaurant/index.php/Admin/Food/doEdit" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                             <tr><td>
                                <input type="hidden" name="id" value="<?php echo ($food["id"]); ?>">
                            </td></tr>
                            <tr>
                                <th><i class="require-red">*</i>名称</th>
                                <td>
                                    <input class="common-text required" id="name" name="name" size="50" value="<?php echo ($food["name"]); ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>价格</th>
                                <td>
                                    <input class="common-text required" id="price" name="price" size="50" value="<?php echo ($food["price"]); ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>配料</th>
                                <td>
                                    <input class="common-text required" id="price" name="batch" size="50" value="<?php echo ($food["batch"]); ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>类型：</th>
                                <td>
                                    <select  class="common-text required" id="type" name="type" value="" style="width:200px">
                                        <?php if(is_array($foodtypes)): $i = 0; $__LIST__ = $foodtypes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i; if($food[type] == $data[name]): ?><option value="<?php echo ($data["name"]); ?>" selected="selected"><?php echo ($data["name"]); ?></option>
                                            <?php else: ?>
                                               <option value="<?php echo ($data["name"]); ?>"><?php echo ($data["name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </td>
                            </tr> 
                            <tr>
                                <th>菜品配图：</th>
                                <td>
                                <img src="/restaurant/restaurant/Public/<?php echo ($food["thumb"]); ?>" width="60px" height="60px">
                                <input name="thumb" id="" type="file"></td>
                            </tr>
                            <tr>
                                <th>发布时间：</th>
                                <td>
                                    <input class="common-text required" id="read-style" size="50" name="time" value="<?php echo ($time); ?>" type="text" readonly>
                                </td>
                            </tr>
                            <!-- <tr>
                                <th><i class="require-red">*</i>类型：</th>
                                <td>
                                    <select  class="common-text required" id="type" name="type" value="" style="width:200px">
                                        <?php if(is_array($foodtypes)): $i = 0; $__LIST__ = $foodtypes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i; if($food[type] == $data[name]): ?><option value="<?php echo ($data["name"]); ?>" selected="selected"><?php echo ($data["name"]); ?></option>
                                            <?php else: ?>
                                               <option value="<?php echo ($data["name"]); ?>"><?php echo ($data["name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </td>
                            </tr>  -->
                            <tr>
                                <th>菜品功能：</th>
                                <td><textarea name="content" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="10"><?php echo ($food["content"]); ?></textarea></td>
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


<!-- <script src="/restaurant/restaurant/Public/admin/js/jquery-1.8.3.min.js"></script> -->
<script src="/restaurant/restaurant/Public/admin/js/index.js"></script>
</body>
</html>