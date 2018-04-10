<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
  <title>industry</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="/shanghua/Public/home/css/nav.css" type="text/css" rel="stylesheet" />
  <link href="/shanghua/Public/home/css/new-content.css" type="text/css" rel="stylesheet" />
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
                <li><a href="<?php echo U('Apply/suggeste');?>">Advice</a></li>
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
      <p><a href="<?php echo U('New/content?id=2');?>">中文&nbsp;</a>|<a href="<?php echo U('New/contente?id=2');?>">&nbsp;English</a></p>
    </div>
  </div>
  <div id="nav-banner">
    <img src="/shanghua/Public/home/images/company-content.jpg">
  </div>
  <div id="bread">
    <div id="bread-left">News</div>
      <div id="bread-right"><a href="<?php echo U('Index/indexe');?>">Home&nbsp;</a>>><a href="<?php echo U('New/companye?p=1');?>">&nbsp;Company&nbsp;</a>>>&nbsp;Industry</div>
  </div>

  <div id="new-content-content">
    <h1><?php echo ($newsen["title"]); ?></h1>
    <p>&nbsp;&nbsp; <?php echo ($newsen["content"]); ?></p>
    <div id="content-foot">
      <ul>
        <li>Last one:
            <?php if($prev == 'None'): ?>None
                <?php else: ?>
                <a href="/shanghua/index.php/Home/New/contente/id/<?php echo ($prev["id"]); ?>"><?php echo ($prev["title"]); ?></a><?php endif; ?>
        </li>
        <li>Next article:
            <?php if($next == 'None'): ?>None
                <?php else: ?>
                <a href="/shanghua/index.php/Home/New/contente/id/<?php echo ($next["id"]); ?>"><?php echo ($next["title"]); ?></a><?php endif; ?>
        </li>
      </ul>
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