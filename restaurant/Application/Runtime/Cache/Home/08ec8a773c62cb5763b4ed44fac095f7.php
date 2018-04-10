<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
  <title>Green&nbsp;Building</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="/shanghua/Public/home/css/nav.css" type="text/css" rel="stylesheet" />
  <link rel="stylesheet" href="/shanghua/Public/home/css/styleNews.css">
  <link href="/shanghua/Public/home/css/touch.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="/shanghua/Public/home/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript">
    var img = '/shanghua/Public/home/images/weixin.jpg';
  </script>
  <script type="text/javascript" src="/shanghua/Public/home/js/touch.js"></script>
</head>
<body>

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
     <p><a href="<?php echo U('Product/lvse');?>">中文&nbsp;</a>|<a href="<?php echo U('Product/lvsee');?>">&nbsp;English</a></p>
    </div>
  </div>
  <div id="nav-banner">
    <img src="/shanghua/Public/home/images/lvse.jpg">
  </div>
  <div id="bread">
    <div id="bread-left">Products</div>
      <div id="bread-right"><a href="<?php echo U('Index/indexe');?>">Home&nbsp;</a>>><a href="<?php echo U('Product/producte');?>">&nbsp;Products&nbsp;</a>>>&nbsp;Green Buliding</div>
  </div>
  

  <div class="product-content">
      <div class="product-v1" >
          <?php if(is_array($producten)): $i = 0; $__LIST__ = array_slice($producten,7,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><h2><?php echo ($vo["title"]); ?></h2><?php endforeach; endif; else: echo "" ;endif; ?>
      </div>
      <div class="product-v2">
        <?php if(is_array($producten)): $i = 0; $__LIST__ = array_slice($producten,8,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="div-a">
              <img src='/shanghua/Public/<?php echo ($vo["thumb"]); ?>' width="75%"height="100%">  
          </div>
          <div class="div-b" >
              <h2>SOFTWARE INTRODUCTION</h2>
              <h3>软件简介</h3><p> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($vo["content"]); ?></p>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
      </div>
      
      <div class="product-v3">
         <div class="v3">
              <h2>THE MAIN FUNCTION</h2>
              <h3>主要功能</h3>   <br/>
          </div>
          <div >
            <?php if(is_array($producten)): $i = 0; $__LIST__ = array_slice($producten,9,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="product-wrap">
                  <div class="product-photo">
                      <a href="#"><img src='/shanghua/Public/<?php echo ($vo["thumb"]); ?>' style="width:100% " alt=""/><span><h2>THE MAIN FUNCTION</h2><h2>主要功能特点</h2><?php echo ($vo["content"]); ?></span></a>
                  </div>
              </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
      </div>
      <div class="product-v4" >
        <h2>THE WIDE USE OF SOFTWARE</h2>
        <h3>软件的广泛使用</h3><br/>
        <ul>
        <?php if(is_array($producten)): $i = 0; $__LIST__ = array_slice($producten,10,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li> 
            <a href="#" target="_blank" rel="nofollow">
              <div class="thum animate">
               <img src='/shanghua/Public/<?php echo ($vo["thumb"]); ?>' class="animate" width="100%" alt="<?php echo ($vo["title"]); ?>"> 
              </div>
            </a>
            <div class="name animate">
              <p class="animate"></p>
              <strong class="animate"><?php echo ($vo["title"]); ?></strong>
            </div>
          </li><?php endforeach; endif; else: echo "" ;endif; ?>
          <li class="three">
          <?php if(is_array($producten)): $i = 0; $__LIST__ = array_slice($producten,12,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="#" target="_blank" rel="nofollow">
              <div class="thum animate">
               <img src='/shanghua/Public/<?php echo ($vo["thumb"]); ?>' class="animate" width="100%" alt="<?php echo ($vo["title"]); ?>"> 
               </div>
            </a>
            <div class="name animate">
              <p class="animate"></p>
              <strong class="animate"><?php echo ($vo["title"]); ?></strong>
            </div>
          </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        
      </div>
      <div class="product-v5">
      <?php if(is_array($producten)): $i = 0; $__LIST__ = array_slice($producten,13,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="div-a" >
              <h2>GENENAL INTRODUCTION</h2>
              <h3>总体介绍</h3><br/>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($vo["content"]); ?></p>  
          </div>
          <div class="div-b">
              <img src='/shanghua/Public/<?php echo ($vo["thumb"]); ?>' width="90%" >
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
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
    </div>
    <div id="footer-bottom">
      <div id="footer-bottom1"><p><br/>This page content for the website demonstration data, front page content can be modified in the background.</p></div>
    </div>
    </div>
    <div id="top"></div>
  </body>
</html>