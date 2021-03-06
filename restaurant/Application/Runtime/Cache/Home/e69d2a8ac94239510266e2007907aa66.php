<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <title>公司荣誉</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="/shanghua/Public/home/css/nav.css" type="text/css" rel="stylesheet" />
  <link href="/shanghua/Public/home/css/gysh.css" type="text/css" rel="stylesheet" />
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
      <p><a href="<?php echo U('Honor/rongyu');?>">中文&nbsp;</a>|<a href="<?php echo U('Honor/rongyue');?>">&nbsp;English</a></p>
    </div>
  </div>
  <div id="nav-banner">
    <img src="/shanghua/Public/home/images/rongyu.jpg">
  </div>
  <div id="bread">
    <div id="bread-left">公司荣誉</div>
      <div id="bread-right"><a href="<?php echo U('Index/index');?>">首页&nbsp;</a>>><a href="<?php echo U('Honor/jianjie');?>">&nbsp;关于上华&nbsp;</a>>>&nbsp;公司荣誉</div>
  </div>

  <div>
      <div class="container">
        
          <div class="col-md-4">
          
            <h4 class="ecopc">关于上华</h4>
            <hr style="border:none;border-top:2px ridge orange;width:40px;margin-top:5px;position:absolute;" /><br/>
              <ul class="p0 category_item met_aside_list ecopc">

                <li><a href="<?php echo U('Honor/jianjie');?>" title="公司简介" target='_self'><i class="fa fa-angle-right"></i><em class="em2"></em>&nbsp;&nbsp;公司简介</a> 
             
                </li>

                <li><a href="<?php echo U('Honor/wenhua');?>"  title="公司文化" target='_self'><i class="fa fa-angle-right"></i><em class="em2"></em>&nbsp;&nbsp;公司文化</a> 
             
                </li>

                <li><a href="<?php echo U('Honor/rongyu');?>" class='active'  title="公司荣誉" target='_self'><i class="fa fa-angle-right"></i><em class="em1"></em>&nbsp;&nbsp;公司荣誉</a> 
             
                </li>

                <li><a href="<?php echo U('Job/join?p=1');?>"  title="加入我们" target='_self'><i class="fa fa-angle-right"></i><em class="em2"></em>&nbsp;&nbsp;加入我们</a> 
             
                </li>

              </ul>
              <br/><br/>
              <h4 class="ecopc">推荐产品</h4>
            <hr style="border:none;border-top:2px ridge orange;width:40px;margin-top:5px;position:absolute;" /><br/>
             <div  class="ecobadding15">
                <div class="single_product_item">
                  <a  href="<?php echo U('Success/gl');?>" title="智慧管廊" target='_self'><img src="/shanghua/Public/home/images/4.jpg" alt="智慧管廊" title="智慧管廊"></a> 
                  <p>智慧管廊</p>
                    <a  href="<?php echo U('Success/gl');?>" title="智慧管廊" target='_self'>MORE</a>
                </div>
                

                
                <div class="single_product_item">
                  <a  href="<?php echo U('Product/lvse');?>" title="VE" target='_self'><img src="/shanghua/Public/home/images/5.png" alt="VE" title="VE"></a> 
                  <p>绿色建筑</p>
                    <a  href="<?php echo U('Product/lvse');?>" title="VE" target='_self'>MORE</a>
                </div>
                

                
                <div class="single_product_item">
                  <a  href="<?php echo U('Product/gongyi');?>" title="工艺设计软件" target='_self'><img src="/shanghua/Public/home/images/7.png" alt="工艺设计软件" title="工艺设计软件"></a> 
                  <p>设计软件</p>
                    <a  href="<?php echo U('Product/gongyi');?>" title="工艺设计软件" target='_self'>MORE</a>
                </div>
                </div>
                <br/><br/><br/>
                <div>
                <h4 id="hot">热门关键词</h4>
                <hr style="border:none;border-top:2px ridge orange;width:40px;margin-top:5px;position:absolute;" /><br/>
                <ul class="p0 clouds">

                  <li><a href="<?php echo U('Success/VE');?>" target='_self'>VE</a></li>

                  <li><a href="<?php echo U('Success/gl');?>" target='_self'>管廊</a></li>

                  <li><a href="<?php echo U('Product/gongyi');?>" target='_self'>工艺设计软件</a></li>

                  <li><a href="<?php echo U('Product/lvse');?>" target='_self'>绿色建筑</a></li>

                  <li><a href="<?php echo U('Product/zhushou');?>" target='_self'>设计助手</a></li>

                  <li><a href="<?php echo U('Product/fengli');?>" target='_self'>风管水力计算</a></li>

                </ul>
          </div>
          </div>


          <div class="col-md-7 shop-page-content">
          
            <div class="section-title-style-2">
              <h1>公司荣誉</h1>
              <hr style="border:none;border-top:3px ridge orange;width:50px;margin-top:5px;position:absolute;" /><br/>
            </div>
             <?php if(is_array($honor)): $i = 0; $__LIST__ = $honor;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="img2">
            <ul>
          <li><img src="/shanghua/Public/<?php echo ($vo["thumb"]); ?>"></li>
          <!--<li><img src="/shanghua/Public/home/images/honor1.png"></li>
          <li><img src="/shanghua/Public/home/images/honor2.png"></li>

          </ul>
          <ul>
          <li><img src="/shanghua/Public/home/images/honor3.png"></li>
          <li><img src="/shanghua/Public/home/images/honor4.png"></li>          
          <li><img src="/shanghua/Public/home/images/honor6.jpg"></li>
          </ul>
          <ul>
          <li><img src="/shanghua/Public/home/images/honor7.png"></li>
          <li><img src="/shanghua/Public/home/images/honor5.jpg"></li>-->
          </ul>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
          
          </div>
        
      </div>
    </div>
  
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