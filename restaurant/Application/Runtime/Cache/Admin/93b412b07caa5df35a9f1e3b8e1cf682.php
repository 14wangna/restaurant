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
                <li><a href="/shanghua/index.php/Admin/Indexen/indexe" class="top-a">Back home</a></li>
                <li><a href="<?php echo U('Home/Index/indexe');?>" class="top-a">Front page</a></li>
                <li><a href="<?php echo U('Admin/Index/index');?>" class="top-a">Chinese version</a></li>
                <li><a href="/shanghua/index.php/Admin/Indexen/loginouten" class="top-a">Sign out</a></li>
            </ul>
        </div>
    </div>
</div>
    <aside class="accordion" style="float:left">
        <h1><i class="icon-font">&#xe001;</i>News</h1>
        <div>
            <h2><a href="<?php echo U('Newen/listsen?p=1');?>"><i class="icon-font">&#xe050;</i>News list</a></h2>
            <h2><a href="<?php echo U('Newen/adden');?>"><i class="icon-font">&#xe026;</i>Add news</a></h2>
        </div>
        <h1><i class="icon-font">&#xe005;</i>Industry</h1>
        <div>
            <h2><a href="<?php echo U('Industryen/listsen?p=1');?>"><i class="icon-font">&#xe050;</i>Consulting list</a></h2>
            <h2><a href="<?php echo U('Industryen/adden');?>"><i class="icon-font">&#xe026;</i>Add</a></h2>
        </div>
        <h1><i class="icon-font">&#xe018;</i>Product</h1>
        <div>
            <h2><a href="<?php echo U('Producten/listsen?p=1');?>"><i class="icon-font">&#xe050;</i>Product list</a></h2>
            <h2><a href="<?php echo U('Producten/adden');?>"><i class="icon-font">&#xe026;</i>Add product</a></h2>
        </div>
        <h1><i class="icon-font">&#xe060;</i>Successful case</h1>
        <div>
            <h2><a href="<?php echo U('Caseen/listsen?p=1');?>"><i class="icon-font">&#xe050;</i>Case list</a></h2>
            <h2><a href="<?php echo U('Caseen/adden');?>"><i class="icon-font">&#xe026;</i>New case</a></h2>
        </div>
        <h1><i class="icon-font">&#xe002;</i>Application</h1>
        <div>
            <h2><a href="<?php echo U('Applyen/listsen?p=1');?>"><i class="icon-font">&#xe050;</i>Application</a></h2>
        </div>
        <h1><i class="icon-font">&#xe051;</i>Honor</h1>
        <div>
            <h2><a href="<?php echo U('Honoren/listsen?p=1');?>"><i class="icon-font">&#xe050;</i>Honor list</a></h2>
            <h2><a href="<?php echo U('Honoren/adden');?>"><i class="icon-font">&#xe026;</i>Add honor</a></h2>
        </div>
        <h1><i class="icon-font">&#xe003;</i>Position</h1>
        <div>
            <h2><a href="<?php echo U('Joben/listsen?p=1');?>"><i class="icon-font">&#xe050;</i>Position list</a></h2>
            <h2><a href="<?php echo U('Joben/adden');?>"><i class="icon-font">&#xe026;</i>New job</a></h2>
        </div>
        <h1><i class="icon-font">&#xe014;</i>Consulting</h1>
        <div>
            <h2><a href="<?php echo U('Adviceen/listsen?p=1');?>"><i class="icon-font">&#xe050;</i>Consulting list</a></h2>
        </div>
    </aside>
    <!-- {__CONTENT__} -->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/shanghua/index.php/Admin/Indexen/index">Home page</a><span class="crumb-step">&gt;</span><span class="crumb-name"><a href="/shanghua/index.php/Admin/Adviceen/listsen">Consulting list</a></span><span class="crumb-step">&gt;</span><span class="crumb-name">Latest consultation</span></div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" action="/shanghua/index.php/Admin/Adviceen/deleteen">
                <div class="result-title">
                    <div class="result-list">
                        
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="6%"><input class="allChoose" name="checkall[]" type="checkbox" id="chkall" onclick='selectcheckbox(this.form)'></th>
                            <th width="10%">NAME</th>
                            <th width="15%">UNIT NAME</th>
                            <th width="17%">EMAIL</th>
                            <th width="17%">TELEPHONE</th>
                            <th width="15%">PROBLEMS</th>
                            <th width="12%">OPERATION</th>
                        </tr>
                        <?php if(is_array($adviceen)): $i = 0; $__LIST__ = $adviceen;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
                            <td><input type="checkbox" name="adviceenId[]" id="checkbox" value="<?php echo ($data["id"]); ?>"><label for="checkbox"></label></td>
                            <td><?php echo ($data["name"]); ?></td>
                            <td><?php echo ($data["unit"]); ?></td>
                            <td><?php echo ($data["email"]); ?></td>
                            <td><?php echo ($data["phone"]); ?></td>
                            <td><?php echo (msubstr($data["question"],0,5,'utf-8',ture)); ?></td>
                            <td>
                                <a class="link-del" href="/shanghua/index.php/Admin/Adviceen/deleteen/adviceenId/<?php echo ($data["id"]); ?>">delete</a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                    <div id="alldelete">

                    <button type="submit" id="batchDel" class="btn btn-danger " href="/shanghua/index.php/Admin/Adviceen/deleteen">Batch delete</button> 
                     </div>
                    <div class="list-page">  <?php echo ($page); ?></div>
                </div>
            </form>
        </div>
</div>


<script src="/shanghua/Public/admin/js/jquery-1.8.3.min.js"></script>
<script src="/shanghua/Public/admin/js/index.js"></script>
</body>
</html>