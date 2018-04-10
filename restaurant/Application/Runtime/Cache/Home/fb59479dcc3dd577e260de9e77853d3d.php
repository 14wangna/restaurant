<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
  <title>申请试用</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="/shanghua/Public/home/css/nav.css" type="text/css" rel="stylesheet" />
  <link href="/shanghua/Public/home/css/consulting.css" type="text/css" rel="stylesheet" />
  <link href="/shanghua/Public/home/css/touch.css" type="text/css" rel="stylesheet" />
  <script type="text/javascript" src="/shanghua/Public/home/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript">
     var img="/shanghua/Public/home/images/weixin.jpg"
  </script>
  <script type="text/javascript" src="/shanghua/Public/home/js/touch.js"></script>
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
      <p><a href="<?php echo U('Apply/apply');?>">中文&nbsp;</a>|<a href="<?php echo U('Apply/applye');?>">&nbsp;English</a></p>
    </div>
  </div>
  <div id="nav-banner" >
    <img src="/shanghua/Public/home/images/apply.jpg">
  </div>

  <div id="bread">
    <div id="bread-left">申请试用</div>
      <div id="bread-right"><a href="<?php echo U('Index/index');?>">首页&nbsp;</a>>><a href="<?php echo U('Apply/apply');?>">&nbsp;在线咨询&nbsp;</a>>>&nbsp;申请试用</div>
  </div>
  <div class="consulting-container">
      <div class="consulting-container-left">
            <div class="table">

              <form method="post" ><br/>
                <h5>请完整填写以下信息，并提交申请,获得软件试用版</h5><br/>
                <h5>您的姓名：</h5>
                <input type="text" name="firstname" style="width:200px"><p>&nbsp;&nbsp;&nbsp;</p>
                <h5>您的单位：</h5>
                <input type="text" name="firstname" style="width:200px"><p>&nbsp;&nbsp;&nbsp;</p>
                <h5>您的职业：</h5>
                <input type="text" name="firstname" style="width:200px"><p>&nbsp;&nbsp;&nbsp;</p>
                <h5>您的email（非常重要）：</h5>
                <input type="text" name="firstname" style="width:200px"><p>&nbsp;&nbsp;&nbsp;</p>
                <h5>您的电话：</h5>
                <input type="text" name="firstname" style="width:200px"><p>&nbsp;&nbsp;&nbsp;</p>
                <h5>申请用途：</h5>
                <input type="text" name="firstname" style="width:200px"><br/>
                <p>&nbsp;&nbsp;&nbsp;</p>
                <p>所需软件:</p><br>
                <input type="checkbox" name="vehicle" value="Bike">PDMS综合材料自动排版系统<br><br>
                <input type="checkbox" name="vehicle" value="Car">PDMS风管阻力计算<br><br>
                <input type="checkbox" name="vehicle" value="Car">设计助手DWGHelp<br><br>
                <input type="checkbox" name="vehicle" value="Car">工艺设计软件<br><br>
                <input type="checkbox" name="vehicle" value="Car">IESVE FOR ENGINEERS<br><br>
                <input type="checkbox" name="vehicle" value="Car">上华管廊运维Sh-Uto<br><br>
                <input type="checkbox" name="vehicle" value="Car">上华管廊设计Sh-Utp<br><br>
                <input type="submit" value="提交" style="width:90px;height:25px;color:black;">
              </form>
            </div>
            </div>
            <div class="consulting-container-right">
            <div class="table-right">
              <h4>欢迎申请上华软件免费试用版
              我们会根据您的要求提供相适应的软件
              您将获得上华软件免费试用版，用户手册以及样例场景和地形数据。样例数据仅供上华软件试用，不可用于其他商业用途</h4>
              <div class="table-bottom">
                <ul>
                  <li>PDMS综合材料自动排版系统:</li><p>&nbsp;&nbsp;&nbsp;&nbsp;PDMS是工厂设计软件，最主要的功能是三维管道设计。能自动 生成设备平面布置图、管道平面布置图、ISO图、综合材料表等。</p>
                  <li>PDMS风管阻力计算:</li><p>&nbsp;&nbsp;&nbsp;&nbsp;本软件基于BIM模型离线导航平台开发，本软件符合国内设计规范的计算功能</p>
                  <li>设计助手DWGHelp:</li><p>&nbsp;&nbsp;&nbsp;&nbsp;设计助手DWGHelp（或名称：图纸助手DWGHelp）是专门为数字化出图而研发的专业工具</p>
                  <li>工艺设计软件:</li><p>&nbsp;&nbsp;&nbsp;&nbsp;CADPS是面向管道设计领域推出的集二维管道设计、材料管理为一体的综合管道设计系统。</p>
                  <li>IESVE FOR ENGINEERS:</li><p>&nbsp;&nbsp;&nbsp;&nbsp;是由英国IES公司开发的集成化建筑性能模拟分析软件，目前在欧美同类软件中排名第一。</p>
                  <li>上华管廊运维Sh-Uto：</li><p>&nbsp;&nbsp;&nbsp;&nbsp;采用GIS技术与BIM技术相结合开发的数字化综合管廊运维系统，借鉴了国外先进的管廊运维管理经验，可以有效地实现综合管廊后期数字标准化运维管理。</p>
                  <li>上华管廊设计Sh-Utp：</li><p>&nbsp;&nbsp;&nbsp;&nbsp;软件提供更多的快捷命令调用和智能化应用，辅助工程师快速、准确、高效的设计管廊精品。</p>
                </ul>
              </div>
            </div>
            </div>
      </div>
    
  <div id="footer" style="margin-top:30px">
  <div id="footer1">
    <div class="footer-top">
      <h5>关于上华</h5>
      <hr class="footer-hr">
      <p>&nbsp;&nbsp;北京上华软件有限公司是一家服务于勘察设计信息化发展领域的新型高科技信息化公司。其团队核心工程师拥有本行业十余年的资历。</p>
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
          <li class="footer-img"><a href="<?php echo U('Product/operation');?>"><img src="/shanghua/Public/home/images/5.png" width="50px" height="50px"></a></li>
          <li class="footer-img"><a href="<?php echo U('Product/zhushou');?>"><img src="/shanghua/Public/home/images/6.png" width="50px" height="50px"></a></li>
          <li class="footer-img"><a href="<?php echo U('Product/lvse');?>"><img src="/shanghua/Public/home/images/7.png" width="50px" height="50px"></a></li>
        </ul>
    </div>
    </div>
    <div id="footer-bottom">
      <div id="footer-bottom1"><p><br/>
     本页面内容为网站演示数据，前台页面内容都可以在后台修改。<br/>
      </p></div>
    </div>
    </div>
  </body>
</html>