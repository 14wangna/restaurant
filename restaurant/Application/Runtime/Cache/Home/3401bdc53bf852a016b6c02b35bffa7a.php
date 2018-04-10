<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE>
<html>
  <head>
    <meta charset="UTF-8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>运维</title>
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
       <img src="/shanghua/Public/home/images/logo.jpg" height="50px">
    </div>
    <div id="nav-center">
    <div class="nav">
        <ul>
            <li><a href="<?php echo U('Index/index');?>">首页</a></li>
        </ul>
    </div>
    <div class="nav">
        <ul>
            <li><a href="<?php echo U('Honor/jianjie');?>">关于上华</a>
              <ul>
                <li><a href="<?php echo U('Honor/jianjie');?>">公司简介</a></li>
                <li><a href="<?php echo U('Honor/wenhua');?>">公司文化</a></li>
                <li><a href="<?php echo U('Honor/rongyu');?>">公司荣誉</a></li>
                <li><a href="<?php echo U('Job/join?p=1');?>">加入我们</a></li>
              </ul>
            </li>
        </ul>
    </div>
    <div class="nav">
        <ul>
            <li><a href="<?php echo U('Product/product');?>">产品服务</a>
              <ul>
                <li><a href="<?php echo U('Product/intergrade');?>">设计软件</a></li>
                <li><a href="<?php echo U('Product/operation');?>">运维系统</a></li>
                <li><a href="<?php echo U('Product/lvse');?>">绿色建筑</a></li>
                <li><a href="<?php echo U('Product/zhushou');?>">DWGHelp</a></li>
                <li><a href="<?php echo U('Product/zonghe');?>">PDMS综合</a></li>
                <li><a href="<?php echo U('Product/fengli');?>">PDMS风力</a></li>
                <li><a href="<?php echo U('Product/gongyi');?>">工艺设计</a></li>
               </ul>
            </li>
        </ul>
    </div>
    <div class="nav">
        <ul>
            <li><a href="<?php echo U('New/company?p=1');?>">新闻中心</a>
               <ul>
                <li><a href="<?php echo U('New/company?p=1');?>">公司新闻</a></li>
                <li><a href="<?php echo U('Industry/industry?p=1');?>">行业资讯</a></li> 
               </ul>
            </li>
        </ul>
    </div>
    <div class="nav">
        <ul>
            <li><a href="<?php echo U('Success/gl');?>">成功案例</a>
               <ul>
                <li><a href="<?php echo U('Success/gl');?>">管廊</a></li>
                <li><a href="<?php echo U('Success/VE');?>">VE</a></li>
               </ul>
            </li>
        </ul>
    </div>
    <div class="nav">
        <ul>
            <li><a href="<?php echo U('Apply/apply');?>">在线咨询</a>
               <ul>
                <li><a href="<?php echo U('Apply/apply');?>">申请试用</a></li>
                <li><a href="<?php echo U('Advice/suggest');?>">咨询或建议</a></li>
               </ul>
            </li>
        </ul>
    </div>
    <div class="nav">
        <ul>
            <li><a href="<?php echo U('Contact/contact');?>">联系我们</a></li>
        </ul>
    </div>
    </div>
    <div id="nav-right">
      <p><a href="<?php echo U('Product/operation');?>">中文&nbsp;</a>|<a href="<?php echo U('Product/operatione');?>">&nbsp;English</a></p>
    </div>
  </div>
  <div id="nav-banner" style="margin-top:-5px;">
    <img src="/shanghua/Public/home/images/operation.jpg">
  </div>
  <div id="bread">
    <div id="bread-left">产品服务</div>
      <div id="bread-right"><a href="<?php echo U('Index/index');?>">首页&nbsp;</a><span style="color:black;">>></span><a href="<?php echo U('Product/product');?>">&nbsp;产品服务&nbsp;</a><span style="color:black;">>></span>&nbsp;<span style="color:#3c3c3c;">运维系统</span></div>
  </div>
    <div class="container">
      <div class="content">
        <?php if(is_array($product)): $i = 0; $__LIST__ = array_slice($product,37,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><h2 style="text-align:center;color:#3c3c3c"><?php echo ($vo["title"]); ?></h2><?php endforeach; endif; else: echo "" ;endif; ?>
        <div class="grid"style="padding-top:60px">
          <figure class="effect-julia">
            <img src="/shanghua/Public/home/images/operation1.jpg" alt="img21"/>
            <figcaption>
              <h2>综合 <span>管廊</span></h2>
              <div>
                <p>兼容多个版本，并支持win7及64位系统</p>
                <p>软件提供更多的快捷命令和智能化应用</p>
                <p>快速、准确、高效的设计管廊精品</p>
                <p>实现地下管廊的设计与运营</p>
              </div>
            </figcaption>     
          </figure>
          <figure class="effect-moses">
            <img src="/shanghua/Public/home/images/operation2.jpg" alt="img24"/>
            <figcaption>
              <h2>BIM&nbsp;<span>技术支撑</span></h2>
              <p>建立起三维的建筑模型，通过数字信息仿真模拟建筑物所具有的真实信息。</p>
            </figcaption>     
          </figure>
        </div>
        <div class="grid">
          <figure class="effect-dexter">
            <img src="/shanghua/Public/home/images/operation3.jpg" alt="img12"/>
            <figcaption>
              <h2>GIS&nbsp;&nbsp;<span>技术支撑</span></h2>
              <p>采集、存贮、管理、分析和显示有关地理现象信息的综合技术系统，更有效地实现综合管廊后期数字标准化运维管理。</p>
            </figcaption>     
          </figure>
          <figure class="effect-sarah">
            <img src="/shanghua/Public/home/images/operation4.jpg" alt="img20"/>
            <figcaption>
              <h2>运维&nbsp;<span>数字化</span></h2>
              <p>采用GIS技术与BIM技术相结合开发,&nbsp;有效地实现综合管廊后期数字标准化运维管理</p>
            </figcaption>     
          </figure>
          
        </div>
      </div>
    </div><!-- /container -->
    <div id="footer">
    <div class="footer-top">
      <h5>关于上华</h5>
      <hr class="footer-hr">
      <p>&nbsp;&nbsp;北京上华软件有限公司是一家服务于勘察设计信息化发展领域的新型高科技信息化公司。其团队核心工程师拥有本行业十余年的资历,曾经开发过在市面上具备垄断水平的多款软件产品。</p>
    </div>
    <div id="footer-top2">
        <ul>
          <li style="list-style-type:none"><h5>行业链接</h5></li>
          <hr class="footer-hr">
          <li><a href="http://www.chszxh.org/">中国市政工程行业协会</a></li>
          <li><a href="http://www.chinaeda.org/">中国勘察设计</a></li>
          <li><a href="http://www.supec.org/">上海规划局</a></li>
          <li><a href="http://www.chinabim.com/">中国BIM门户</a></li>
          <li><a href="http://www.planning.org.cn/">中国城市规划学会</a></li>
        </ul>
    </div>
    <div class="footer-top3">
        <ul>
          <li><h5>联系我们</h5></li>
          <hr class="footer-hr">
          <li><img src="/shanghua/Public/home/images/footer1.png"height="12px"width="12px">&nbsp;北京市丰台区建华街道</li>
          <li><img src="/shanghua/Public/home/images/footer2.png"height="12px"width="12px">&nbsp;15289016539</li>
          <li><img src="/shanghua/Public/home/images/footer3.png"height="12px"width="12px">&nbsp;802742100</li>
          <li><img src="/shanghua/Public/home/images/footer4.png"height="12px"width="12px">&nbsp;www.shanghua.com</li>
          <li><img src="/shanghua/Public/home/images/footer4.png"height="12px"width="12px">&nbsp;shanghua@163.com</li>
        </ul>
    </div>
    <div class="footer-top4" >
        <ul>
          <li><h5>产品展示</h5></li>
          <hr class="footer-hr">
          <li class="footer-img"><a href="<?php echo U('Product/fengli');?>"><img src="/shanghua/Public/home/images/1.jpg" width="50px" height="50px"></a></li>
          <li class="footer-img"><a href="<?php echo U('Product/gongyi');?>"><img src="/shanghua/Public/home/images/3.jpg" width="50px" height="50px"></a></li>
          <li class="footer-img"><a href="<?php echo U('Product/intergrade');?>"><img src="/shanghua/Public/home/images/4.jpg" width="50px" height="50px"></a></li>
        </ul>
        <ul class="footer-imgss">
          <li class="footer-img"><a href="<?php echo U('Product/operation');?>"><img src="/shanghua/Public/home/images/5.png" width="50px" height="50px"></a></li>
          <li class="footer-img"><a href="<?php echo U('Product/zhushou');?>"><img src="/shanghua/Public/home/images/6.png" width="50px" height="50px"></a></li>
          <li class="footer-img"><a href="<?php echo U('Product/lvse');?>"><img src="/shanghua/Public/home/images/7.png" width="50px" height="50px"></a></li>
        </ul>
    </div>
    <div id="footer-bottom">
      <div id="footer-bottom1"><p><br/>
     本页面内容为网站演示数据，前台页面内容都可以在后台修改。</p></div>
    </div>
  </div>
  <div id="top"></div>
  </body>
</html>