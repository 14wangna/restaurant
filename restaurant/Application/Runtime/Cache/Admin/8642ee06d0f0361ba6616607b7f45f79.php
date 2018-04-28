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
            <div class="crumb-list"><i class="icon-font"></i><a href="/restaurant/restaurant/index.php/Admin/Index/index">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">今日菜品列表</span></div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" action="/restaurant/restaurant/index.php/Admin/Todayfood/delete">
                <div class="result-title">
                    <div class="result-list">
                        <a href="/restaurant/restaurant/index.php/Admin/Todayfood/add"><i class="icon-font"></i>新增菜品</a>
                        
                    </div>
                </div>
                <!-- <div>
                    <?php if(is_array($todayfood)): $i = 0; $__LIST__ = $todayfood;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><button type="submit" id="<?php echo ($data["id"]); ?>" class="btn btn-primary" onclick="choice(this)"><?php echo ($data["name"]); ?></button><?php endforeach; endif; else: echo "" ;endif; ?>
                </div> -->



                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="6%"><input class="allChoose" name="checkall[]" type="checkbox" id="chkall" onclick='selectcheckbox(this.form)'></th>
                            <th width="12%">菜品配图</th>
                            <th width="12%">菜品类型</th>
                            <th width="12%">菜品名称</th>
                            <th width="12%">菜品价格</th>
                            <th width="12%">菜品配料</th>
                            <th width="12%">菜品功能</th>
                            <th width="12%">添加时间</th>
                            <th width="12%">操作</th>
                        </tr>
                        <?php if(is_array($food)): $i = 0; $__LIST__ = $food;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
                            <td><input type="checkbox" name="foodId[]" id="checkbox" value="<?php echo ($data["id"]); ?>"><label for="checkbox"></label></td>
                            <td><img src="/restaurant/restaurant/Public/<?php echo ($data["thumb"]); ?>" width="60px" height="60px"></td>
                            <td><?php echo ($data["type"]); ?></td>
                            <td><?php echo (msubstr($data["name"],0,8,'utf-8',ture)); ?></td>
                            <td><?php echo ($data["price"]); ?></td>
                            <td><?php echo (msubstr($data["batch"],0,8,'utf-8',ture)); ?></td>
                            <td><?php echo (msubstr($data["function"],0,8,'utf-8',ture)); ?></td>
                            <td><?php echo ($data["time"]); ?></td>
                            <td>
                                <a class="link-update" href="/restaurant/restaurant/index.php/Admin/Todayfood/edit/id/<?php echo ($data["id"]); ?>">修改</a>
                                <a class="link-del" href="/restaurant/restaurant/index.php/Admin/Todayfood/delete/foodId/<?php echo ($data["id"]); ?>">删除</a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                    <div id="alldelete">
                        <button type="submit" id="batchDel" class="btn btn-danger " href="/restaurant/restaurant/index.php/Admin/Todayfood/delete">批量删除</button> 
                    </div>
                    <div class="list-page"><?php echo ($page); ?></div>
                </div>
            </form>
        </div>
    </div>
<script type="text/javascript">
    choice = function(res){
            var id = res.id;
            console.log(id)
            $.ajax({
                type:"POST",
                url:"/restaurant/restaurant/index.php/Admin/Todayfood/lists",
                data:{id:id},
                dataType: "json",
                success:function(res){
                    console.log(res)
                    // if(res){
                    //     window.location.href="<?php echo U('admin/Todayfood/lists?p=1');?>";
                    // }
                }
            });
        }
</script>


<!-- <script src="/restaurant/restaurant/Public/admin/js/jquery-1.8.3.min.js"></script> -->
<script src="/restaurant/restaurant/Public/admin/js/index.js"></script>
</body>
</html>