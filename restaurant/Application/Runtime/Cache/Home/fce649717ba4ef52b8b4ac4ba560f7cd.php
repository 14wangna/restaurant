<?php if (!defined('THINK_PATH')) exit();?>﻿<html>
<head>
  <title>Apply</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="/shanghua/Public/home/css/nav.css" type="text/css" rel="stylesheet" />
  <link href="/shanghua/Public/home/css/touch.css" type="text/css" rel="stylesheet" />
  <script type="text/javascript" src="/shanghua/Public/home/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="/shanghua/Public/home/js/touch.js"></script>
  <script type="text/javascript">
     var img="/shanghua/Public/home/images/weixin.jpg"
  </script>
  <link href="/shanghua/Public/home/css/consulting.css" type="text/css" rel="stylesheet" />
</head>
<body>
  <div id="top"></div>
  <div id="nav-header">
    <div id="img">
       <img src="/shanghua/Public/home/images/logo.jpg" height="50px">
    </div>
    <div id="nav-center">
    <div class="nav">
        <ul>
            <li><a href="<?php echo U('Index/indexe');?>">Home</a></li>
        </ul>
    </div>
    <div class="nav">
        <ul>
            <li><a href="<?php echo U('Honor/jianjie');?>">About&nbsp;SH</a>
              <ul>
                <li><a href="<?php echo U('Honor/jianjiee');?>">Profile</a></li>
                <li><a href="<?php echo U('Honor/wenhuae');?>">Culture</a></li>
                <li><a href="<?php echo U('Honor/rongyue');?>">Honor</a></li>
                <li><a href="<?php echo U('Job/joine?p=1');?>">Join&nbsp;Us</a></li>
              </ul>
            </li>
        </ul>
    </div>
    <div class="nav">
        <ul>
            <li><a href="<?php echo U('Product/producte');?>">Products</a>
              <ul>
                <li><a href="<?php echo U('Product/intergradee');?>">Integrated</a></li>
                <li><a href="<?php echo U('Product/operatione');?>">Maintenance</a></li>
                <li><a href="<?php echo U('Product/lvsee');?>">Green&nbsp;Building</a></li>
                <li><a href="<?php echo U('Product/zhushoue');?>">DWGHelp</a></li>
                <li><a href="<?php echo U('Product/zonghee');?>">PDMS&nbsp;Synthetic</a></li>
                <li><a href="<?php echo U('Product/fenglie');?>">PDMS&nbsp;Wind</a></li>
                <li><a href="<?php echo U('Product/gongyie');?>">Process</a></li>
               </ul>
            </li>
        </ul>
    </div>
    <div class="nav">
        <ul>
            <li><a href="<?php echo U('New/companye?p=1');?>">News</a>
               <ul>
                <li><a href="<?php echo U('New/companye?p=1');?>">Company</a></li>
                <li><a href="<?php echo U('Industry/industrye?p=1');?>">Industry</a></li> 
               </ul>
            </li>
        </ul>
    </div>
    <div class="nav">
        <ul>
            <li><a href="<?php echo U('Success/gle');?>">Success</a>
               <ul>
                <li><a href="<?php echo U('Success/gle');?>">Pipe&nbsp;Sallery</a></li>
                <li><a href="<?php echo U('Success/VEe');?>">VE</a></li>
               </ul>
            </li>
        </ul>
    </div>
    <div class="nav">
        <ul>
            <li><a href="<?php echo U('Apply/applye');?>">Consulting</a>
               <ul>
                <li><a href="<?php echo U('Apply/applye');?>">Apply</a></li>
                <li><a href="<?php echo U('Advice/suggeste');?>">Advice</a></li>
               </ul>
            </li>
        </ul>
    </div>
    <div class="nav">
        <ul>
            <li><a href="<?php echo U('Contact/contacte');?>">Contact</a></li>
        </ul>
    </div>
    </div>
    <div id="nav-right">
      <p><a href="<?php echo U('Apply/apply');?>">中文&nbsp;</a>|<a href="<?php echo U('Apply/applye');?>">&nbsp;English</a></p>
    </div>
     
  </div>
  </div>
  <div id="nav-banner">
    <img src="/shanghua/Public/home/images/apply.jpg">
  </div>
  <div id="bread">
    <div id="bread-left">Contact</div>
      <div id="bread-right"><a href="<?php echo U('Index/indexe');?>">Home&nbsp;</a>>><a href="<?php echo U('Apply/applye');?>">&nbsp;Consulting&nbsp;</a>>>&nbsp;Apply</div>
  </div>
  <div class="consulting-container">
      <div class="consulting-container-left">
            <div class="table">

              <form>
                <h6>Please complete the following information<br>submit the application to obtain a software trial</h6><br/>
                <h5>Your Name：</h5>
                <input type="text" name="firstname" style="width:200px"><p>&nbsp;&nbsp;&nbsp;</p>
                <h5>Your Unit：</h5>
                <input type="text" name="firstname" style="width:200px"><p>&nbsp;&nbsp;&nbsp;</p>
                <h5>Your Job：</h5>
                <input type="text" name="firstname" style="width:200px"><p>&nbsp;&nbsp;&nbsp;</p>
                <h5>Your Email（important）：</h5>
                <input type="text" name="firstname" style="width:200px"><p>&nbsp;&nbsp;&nbsp;</p>
                <h5>Your Telephone：</h5>
                <input type="text" name="firstname" style="width:200px"><p>&nbsp;&nbsp;&nbsp;</p>
                <h5>Application for use：</h5>
                <input type="text" name="firstname" style="width:200px"><br/>
                <p>&nbsp;&nbsp;&nbsp;</p>
                <p>Required software:</p><br>
                <input type="checkbox" name="vehicle" value="Bike">PDMS integrated material automatic typesetting system<br><br>
                <input type="checkbox" name="vehicle" value="Car">PDMS wind pipe resistance calculation<br><br>
                <input type="checkbox" name="vehicle" value="Car">Design assistant DWGHelp<br><br>
                <input type="checkbox" name="vehicle" value="Car">Process design software<br><br>
                <input type="checkbox" name="vehicle" value="Car">IESVE FOR ENGINEERS<br><br>
                <input type="checkbox" name="vehicle" value="Car">Shanghua tunnel operation Sh-Uto<br><br>
                <input type="checkbox" name="vehicle" value="Car">Shanghua pipe gallery design Sh-Utp<br><br>
                <input type="submit" value="Submit" style="width:90px;height:30px">
              </form>
            </div>
            </div>
            <div class="consulting-container-right">
            <div class="table-right" >
              <h4>Welcome to apply Shanghua software free trial version
            We will provide the software according to your request
              You will get a free trial version of Shanghua software, user manual and sample scene and terrain data. The sample data for Shanghua trial software can not be used for any commercial purpose</h4>
              <div class="table-bottom">
               <ul>
                  <li>PDMS integrated material automatic typesetting system:</li><p>&nbsp;&nbsp;&nbsp;&nbsp;PDMS is the factory design software, the most important function is the three-dimensional pipe design. Can automatically generate equipment floor plan, piping layout, ISO diagram, comprehensive material table, etc..</p>
                  <li>PDMS wind pipe resistance calculation:</li><p>&nbsp;&nbsp;&nbsp;&nbsp;The software is based on the BIM model, which is based on the development of the off-line navigation platform. The software is in accordance with the calculation function of the domestic design code.</p>
                  <li>DWGHelp:</li><p>&nbsp;&nbsp;&nbsp;&nbsp;Design assistant DWGHelp (or name: drawing assistant DWGHelp) is designed for digital mapping and research and development of professional tools</p>
                  <li>Process design software:</li><p>&nbsp;&nbsp;&nbsp;&nbsp;CADPS is a set of integrated pipeline design system, which is introduced in the field of pipeline design, which is a set of two-dimensional pipeline design and material management.</p>
                  <li>IESVE FOR ENGINEERS:</li><p>&nbsp;&nbsp;&nbsp;&nbsp;Is developed by the British IES company integrated building performance simulation analysis software, currently ranked first in Europe and the United States similar software.</p>
                  <li>Shanghua tunnel operation Sh-Uto:</li><p>&nbsp;&nbsp;&nbsp;&nbsp;By using GIS technology and BIM technology combined with digital integrated pipe gallery operation system development, operation and maintenance management from the pipe gallery of foreign advanced experience, can effectively realize the comprehensive pipe gallery post digital standardization management.</p>
                  <li>Shanghua pipe gallery design Sh-Utp:</li><p>&nbsp;&nbsp;&nbsp;&nbsp;Software provides more quick command call and intelligent application, and assist the engineer to fast, accurate and efficient design of pipe gallery.</p>
                </ul>
              </div>
            </div>
            
            
            
            </div>
      </div>








  <div id="footer">
  <div id="footer1">
    <div class="footer-top">
      <h5>About&nbsp;SH</h5>
      <hr class="footer-hr">
      <p>&nbsp;&nbsp;Beijing Shanghua Software Co., Ltd. is a new high-tech information company, a service in the field of development survey and design information.</p>
    </div>
    <div id="footer-top2">
        <ul>
          <li style="list-style-type:none"><h5>Industry link</h5></li>
          <hr class="footer-hr">
          <li><a href="http://www.chszxh.org/">China Municipal Engineering Association</a></li>
          <li><a href="http://www.chinaeda.org/">Survey and design of China</a></li>
          <li><a href="http://www.supec.org/">Shanghai Planning Bureau</a></li>
          <li><a href="http://www.chinabim.com/">China BIM portal</a></li>
          
        </ul>
    </div>
    <div class="footer-top">
        <ul>
          <li><h5>Contact</h5></li>
          <hr class="footer-hr">
          <li><img src="/shanghua/Public/home/images/footer1.png"height="12px"width="12px">&nbsp;Beijing City, Fengtai District Jianhua Street</li>
          <li><img src="/shanghua/Public/home/images/footer2.png"height="12px"width="12px">&nbsp;15289016539</li>
          <li><img src="/shanghua/Public/home/images/footer3.png"height="12px"width="12px">&nbsp;802742100</li>
          <li><img src="/shanghua/Public/home/images/footer4.png"height="12px"width="12px">&nbsp;www.shanghua.com</li>
          
        </ul>
    </div>
    <div class="footer-top4" >
        <ul>
          <li><h5>Product</h5></li>
          <hr class="footer-hr">
          <li class="footer-img"><a href="<?php echo U('Product/fenglie');?>"><img src="/shanghua/Public/home/images/1.jpg" width="50px" height="50px"></a></li>
          <li class="footer-img"><a href="<?php echo U('Product/gongyie');?>"><img src="/shanghua/Public/home/images/3.jpg" width="50px" height="50px"></a></li>
          <li class="footer-img"><a href="<?php echo U('Product/intergradee');?>"><img src="/shanghua/Public/home/images/4.jpg" width="50px" height="50px"></a></li>
          <li class="footer-img"><a href="<?php echo U('Product/operatione');?>"><img src="/shanghua/Public/home/images/5.png" width="50px" height="50px"></a></li>
          <li class="footer-img"><a href="<?php echo U('Product/zhushoue');?>"><img src="/shanghua/Public/home/images/6.png" width="50px" height="50px"></a></li>
          <li class="footer-img"><a href="<?php echo U('Product/lvsee');?>"><img src="/shanghua/Public/home/images/7.png" width="50px" height="50px"></a></li>
        </ul>
    </div>
    </div>
    <div id="footer-bottom">
      <div id="footer-bottom1"><p><br/>This page content for the website demonstration data, front page content can be modified in the background.
      </p></div>
    </div>
    </div>
  </body>
</html>