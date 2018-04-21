<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>登录注册</title>
	<link rel="stylesheet" type="text/css" href="/restaurant/restaurant/Public/home/css/nav.css">
    <link rel="stylesheet" type="text/css" href="/restaurant/restaurant/Public/home/css/register.css">
    <link rel="stylesheet" href="/restaurant/restaurant/Public/home/css/bootstrap.css">
    <script src="/restaurant/restaurant/Public/home/js/jquery-1.11.3.js"></script>
    <script src="/restaurant/restaurant/Public/home/js/bootstrap.js"></script>
    <script type="text/javascript" src="/restaurant/restaurant/Public/home/js/index.js"></script>
    <script type="text/javascript">  

     var code ; //在全局 定义验证码   
     function createCode()   
     {    
       code = "";   
       var codeLength = 4;//验证码的长度   
       var checkCode = document.getElementById("checkCode");   
       var selectChar = new Array(0,1,2,3,4,5,6,7,8,9);//所有候选组成验证码的字符，当然也可以用中文的   

       for(var i=0;i<codeLength;i++)   
       {   

           
       var charIndex = Math.floor(Math.random()*10);   
       code +=selectChar[charIndex];   

          
       }   
//       alert(code);   
       if(checkCode)   
       {   
         checkCode.className="code";   
         checkCode.value = code;   
       }   

     }   

      function validate ()   
     {   
       var inputCode = document.getElementById("input1").value;   
       if(inputCode.length <=0)   
       {   
           alert("请输入验证码！");   
       }   
       else if(inputCode != code )   
       {   
          alert("验证码输入错误！");   
          createCode();//刷新验证码   
       }    

       }   
    </script>
</head>
<body onload="createCode()">
	<div class="head">
        <div class="head-left">
            <ul class="xm-nav">
                <li><img src="/restaurant/restaurant/Public/home/images/ms03.png"></li>
                <li><a href="#">首页</a></li>
                <li><a href="#">订单查询</a></li>
                <li><a href="#">个人中心</a></li>
                <li><a href="#">新闻中心</a></li>
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
    <div class="page-theme">
    	<div class="register_banner">
    		<img src="/restaurant/restaurant/Public/home/images/banner26.png" width="100%" >
    	</div>
    	<div class="xm-content">
            <div class="content-header">
                <a href="#" id="login" class="actived" style="color:#fff" onclick="login()">登录</a>
                <a href="#" id="register" onclick="register()">注册</a>
                <div class="clear"></div>
            </div>
            <form action="" name="myform" method="post">
            <div class="content-login" >
                <div class="xm-input-box">
                    <span class="xm-icon-size">
                        <img src="/restaurant/restaurant/Public/home/images/name_icon.png" alt="">
                    </span>
                    <input type="text" placeholder="工号" id="number" name="number">
                </div>
                <div class="xm-input-box">
                    <span class="xm-icon-size">
                        <img src="/restaurant/restaurant/Public/home/images/name_icon.png" alt="">
                    </span>
                    <input type="password"  placeholder="密码" id="password" name="password">
                </div>
                <div class="xm-input-box1">
                    <input  type="text"   id="input1" />  
                    <input type="text" onclick="createCode()" readonly="readonly" id="checkCode" class="unchanged" style="width: 70px"  />  
                </div>
                <div class="xm-dlu"><input type="submit" id="Button1"  onclick="validate();" value="登录" ></div>
                <!-- <div class="signup-guide"><p>还没有账号？<a href="#">免费注册</a></p></div> -->
            </div>
            </form>
            <div class="content-register" >
                <div class="xm-input-box">
                    <span class="xm-icon-size">
                        <img src="/restaurant/restaurant/Public/home/images/name_icon.png" alt="">
                    </span>
                    <input type="text" placeholder="工号">
                </div>
                <div class="xm-input-box">
                    <span class="xm-icon-size">
                        <img src="/restaurant/restaurant/Public/home/images/name_icon.png" alt="">
                    </span>
                    <input type="text" placeholder="密码">
                </div>
                <div class="xm-input-box">
                    <span class="xm-icon-size">
                        <img src="/restaurant/restaurant/Public/home/images/name_icon.png" alt="">
                    </span>
                    <input type="text" placeholder="确认密码">
                </div>
                <!-- <div class="xm-input-box">
                    <input  type="text"   id="input1" />  
                    <input type="text" onclick="createCode()" readonly="readonly" id="checkCode" class="unchanged" style="width: 80px"  /><br />  
                </div> -->
                <div class="xm-dlu"><input type="button" id="Button1"  onclick="validate();" value="注册"></div>
            </div>
        </div>
    </div>
</body>
</html>