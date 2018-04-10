<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <link rel="stylesheet" type="text/css" href="/restaurant/Public/home/css/nav.css">
    <link rel="stylesheet" type="text/css" href="/restaurant/Public/home/css/login.css">
    <link rel="stylesheet" href="/restaurant/Public/home/css/bootstrap.css">
    <script src="/restaurant/Public/home/js/jquery-1.11.3.js"></script>
    <script src="/restaurant/Public/home/js/bootstrap.js"></script>
    <script type="text/javascript" src="/restaurant/Public/home/js/index.js"></script>
</head>
<body>
    <div class="head">
        <div class="head-left">
            <ul class="xm-nav">
                <li><img src="/restaurant/Public/home/images/ms02.png"></li>
                <li><a href="#">首页</a></li>
                <li><a href="#">订单查询</a></li>
                <li><a href="#">个人中心</a></li>
                <li><a href="#">管理中心</a></li>
                <li><a href="#">关于我们</a></li>
                <div class="clear"></div>
            </ul>
        </div>
        <div class="head-right">
            <div class="xm-sign">
                <a href="#">登录</a>/<a href="#">注册</a>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="page-theme" >
        <div class="banner">
            <img src="/restaurant/Public/home/images/banner5.jpg" width="100%" height="100%">
        </div>
        <div class="xm-content">
            <div class="content-header">
                    <a href="#" id="login" class="actived" style="color:#fff" onclick="login()">登录</a>
                    <a href="#" id="register" onclick="register()">注册</a>
                    <div class="clear"></div>
            </div>
            <div class="content-login" >
                <div class="xm-input-box">
                    <span class="xm-icon-size">
                        <img src="/restaurant/Public/home/images/name_icon.png" alt="">
                    </span>
                    <input type="text" placeholder="工号">
                </div>
                <div class="xm-input-box">
                    <span class="xm-icon-size">
                        <img src="/restaurant/Public/home/images/name_icon.png" alt="">
                    </span>
                    <input type="text" placeholder="密码">
                </div>
                <div class="xm-dlu"><input  type="button" value="登录"></div>
                <!-- <div class="signup-guide"><p>还没有账号？<a href="#">免费注册</a></p></div> -->
            </div>
            <div class="content-register" >
                <div class="xm-input-box">
                    <span class="xm-icon-size">
                        <img src="/restaurant/Public/home/images/name_icon.png" alt="">
                    </span>
                    <input type="text" placeholder="工号">
                </div>
                <div class="xm-input-box">
                    <span class="xm-icon-size">
                        <img src="/restaurant/Public/home/images/name_icon.png" alt="">
                    </span>
                    <input type="text" placeholder="密码">
                </div>
                <div class="xm-input-box">
                    <span class="xm-icon-size">
                        <img src="/restaurant/Public/home/images/name_icon.png" alt="">
                    </span>
                    <input type="text" placeholder="确认密码">
                </div>
                <div class="xm-dlu"><input type="button" value="注册"></div>
            </div>

        </div>
    </div>
</div>
</body>
</html>