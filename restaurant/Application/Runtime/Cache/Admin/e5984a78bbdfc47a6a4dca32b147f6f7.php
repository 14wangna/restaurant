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
                <li><a href="/shanghua/index.php/Admin/Indexen/index" class="top-a">Back home</a></li>
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
    <div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list">
                <i class="icon-font"></i>
                <span>Home page</span>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>Shortcut operation</h1>
            </div>
            <div class="result-content">
                <div class="short-wrap">
                    <ul class="short-list">
                        <li><div class="short-img"><img src="/shanghua/Public/admin/images/010.png" height="40px" width="50px"></div><div class="short-list1"><a href="<?php echo U('Users/lists?p=1');?>">User&nbsp;list </a></div></li>
                        <li><div class="short-img"><img src="/shanghua/Public/admin/images/011.png" height="40px" width="50px"></div><div class="short-list1"><a href="<?php echo U('Newen/listsen?p=1');?>">News list</a></div></li>
                        <li><div class="short-img"><img src="/shanghua/Public/admin/images/006.png" height="40px" width="50px"></div><div class="short-list1"><a href="<?php echo U('Industryen/listsen?p=1');?>">Industry</a></div></li>
                    </ul>
                    <ul class="short-list">
                        <li><div class="short-img"><img src="/shanghua/Public/admin/images/008.png" height="40px" width="50px"></div><div class="short-list1"><a href="<?php echo U('Producten/listsen?p=1');?>">Product list</a></div></li>
                        <li><div class="short-img"><img src="/shanghua/Public/admin/images/001.png" height="40px" width="50px"></div><div class="short-list1"><a href="<?php echo U('Caseen/listsen?p=1');?>">Successful case</a></div></li>
                        <li><div class="short-img"><img src="/shanghua/Public/admin/images/012.png" height="40px" width="50px"></div><div class="short-list1"><a href="<?php echo U('Applyen/listsen?p=1');?>">Apply</a></div></li>
                    </ul>
                    <ul class="short-list">
                        <li><div class="short-img"><img src="/shanghua/Public/admin/images/003.png" height="40px" width="50px"></div><div class="short-list1"><a href="<?php echo U('Honoren/listsen?p=1');?>">Honor list</a></div></li>
                        <li><div class="short-img"><img src="/shanghua/Public/admin/images/013.png" height="40px" width="50px"></div><div class="short-list1"><a href="<?php echo U('Joben/listsen?p=1');?>">Job list</a></div></li>
                        <li><div class="short-img"><img src="/shanghua/Public/admin/images/005.png" height="40px" width="50px"></div><div class="short-list1"><a href="<?php echo U('Adviceen/listsen?p=1');?>">Consulting list</a></div></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>Introduction</h1>
            </div>
            <div class="result-content1">
                <h6>Introduction</h6>
                <p>Beijing Shanghua Software Co., Ltd. is a new high-tech information company, a service in the field of development survey and <br/>design information.</p>
                <h6>Main products</h6>
                <p>Various software</p>
                <h6>Address</h6>
                <p>Beijing City, Fengtai District Jianhua Street Shanghua Software Co. Ltd.</p>
                <h6>Contact information</h6>
                <p>400-700-3609</p>
                <h6>Website</h6>
                <p>www.shanghua.com</p> 
            </div>
        </div>
        
    </div>


<script src="/shanghua/Public/admin/js/jquery-1.8.3.min.js"></script>
<script src="/shanghua/Public/admin/js/index.js"></script>
</body>
</html>