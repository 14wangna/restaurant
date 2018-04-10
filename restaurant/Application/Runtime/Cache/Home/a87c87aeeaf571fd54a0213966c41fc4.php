<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE>
<html>
  <head>
    <meta charset="UTF-8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>operation</title>
    <link href="/shanghua/Public/home/css/nav.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/shanghua/Public/home/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="/shanghua/Public/home/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="/shanghua/Public/home/css/set1.css" />
    <link rel="stylesheet" type="text/css" href="/shanghua/Public/home/css/set2.css" />
    <link href="/shanghua/Public/home/css/touch.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/shanghua/Public/home/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript">
    var img = '/shanghua/Public/home/images/weixin.jpg';
  </script>
    <script type="text/javascript" src="/shanghua/Public/home/js/touch.js"></script>
  </head>
  <body style="background-color:rgb(249,249,249);">

    <div id="nav-header">
    <div id="img">
       <img src="/shanghua/Public/home/images/logo.jpg" width="100%" height="45px">
    </div>
    <div id="nav-center">
    <div class="nav">
        <ul>
            <li><a href="<?php echo U('Index/indexe');?>">Home</a></li>
        </ul>
    </div>
    <div class="nav">
        <ul>
            <li><a href="<?php echo U('Honor/jianjiee');?>">About&nbsp;SH</a>
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
      <p><a href="<?php echo U('Product/operation');?>">中文&nbsp;</a>|<a href="<?php echo U('Product/operatione');?>">&nbsp;English</a></p>
    </div>
     
  </div>
  <div id="nav-banner">
    <img src="/shanghua/Public/home/images/operation.jpg">
  </div>
  <div id="bread">
    <div id="bread-left">Products</div>
      <div id="bread-right"><a href="<?php echo U('Index/indexe');?>">Home&nbsp;</a><span style="color:black;">>></span><a href="<?php echo U('Product/producte');?>">&nbsp;Products&nbsp;</a><span style="color:black;">>></span>&nbsp;Maintenance</div>
  </div>
    <div class="container">
      <div class="content">
        <?php if(is_array($producten)): $i = 0; $__LIST__ = array_slice($producten,37,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><h2 style="text-align:center;color:#3c3c3c"><?php echo ($vo["title"]); ?></h2><?php endforeach; endif; else: echo "" ;endif; ?>
        <div class="grid"style="padding-top:60px">
          <figure class="effect-julia">
            <img src="/shanghua/Public/home/images/operation1.jpg" alt="img21"/>
            <figcaption>
              <h2>comprehensive <span>Pipe gallery</span></h2>
              <div>
                <p>supports win7 and 64bit systems</p>
                <p>provides commands applications</p>
                <p>Fast, accurate and efficient gallery</p>
                <p>operation of underground gallery</p>
              </div>
            </figcaption>     
          </figure>
          <figure class="effect-moses">
            <img src="/shanghua/Public/home/images/operation2.jpg" alt="img24"/>
            <figcaption>
              <h2>BIM&nbsp;<br/><span>Techn suport</span></h2>
              <p>A three dimensional is built.</p>
            </figcaption>     
          </figure>
        </div>
        <div class="grid">
          <figure class="effect-dexter">
            <img src="/shanghua/Public/home/images/operation3.jpg" alt="img12"/>
            <figcaption>
              <h2>GIS&nbsp;&nbsp;<span>Technical support</span></h2>
              <p>Collection, storage, management, analysis and display of the geographical information of the integrated pipe management.</p>
              <a href="http://www.htmleaf.com/">View more</a>
            </figcaption>     
          </figure>
          <figure class="effect-sarah">
            <img src="/shanghua/Public/home/images/operation4.jpg" alt="img20"/>
            <figcaption>
              <h2>Peration and maintenance&nbsp;<span>Digitization</span></h2>
              <p>The use of GIS technology and BIM technology, combined with the development of,the effective implementation of the comprehensive pipe gallery digital standard operation and maintenance management</p>
            </figcaption>     
          </figure>
          
        </div>
      </div>
    </div><!-- /container -->
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
    <div class="footer-top3">
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
        </ul>
        <ul class="footer-imgss">
          <li class="footer-img"><a href="<?php echo U('Product/operatione');?>"><img src="/shanghua/Public/home/images/5.png" width="50px" height="50px"></a></li>
          <li class="footer-img"><a href="<?php echo U('Product/zhushoue');?>"><img src="/shanghua/Public/home/images/6.png" width="50px" height="50px"></a></li>
          <li class="footer-img"><a href="<?php echo U('Product/lvsee');?>"><img src="/shanghua/Public/home/images/7.png" width="50px" height="50px"></a></li>
        </ul>
    </div>
    <div id="footer-bottom">
      <div id="footer-bottom1"><p><br/>This page content for the website demonstration data, front page content can be modified in the background.</p></div>
    </div>
  </div>
  <div id="top"></div>
  </body>
</html>