<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <title>content</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="/shanghua/Public/home/css/nav.css" type="text/css" rel="stylesheet" />
  <link href="/shanghua/Public/home/css/gysh.css" type="text/css" rel="stylesheet" />
  <link href="/shanghua/Public/home/css/touch.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="/shanghua/Public/home/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="/shanghua/Public/home/js/touch.js"></script>
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
      <p><a href="<?php echo U('Job/content');?>">中文&nbsp;</a>|<a href="<?php echo U('Job/contente?p=1');?>">&nbsp;English</a></p>
    </div>
  </div>
  <div id="nav-banner">
    <img src="/shanghua/Public/home/images/join-content.jpg">
  </div>
  <div id="bread">
    <div id="bread-left">PHP技术支持</div>
      <div id="bread-right"><a href="<?php echo U('Index/index');?>">首页&nbsp;</a>>><a href="<?php echo U('Honor/jianjie');?>">&nbsp;关于上华&nbsp;</a>>><a href="<?php echo U('Job/join?p=1');?>">&nbsp;加入我们&nbsp;</a></div>
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

                <li><a href="<?php echo U('Honor/rongyu');?>"  title="公司荣誉" target='_self'><i class="fa fa-angle-right"></i><em class="em2"></em>&nbsp;&nbsp;公司荣誉</a> 
             
                </li>

                <li><a href="<?php echo U('Job/join?p=1');?>" class='active'  title="加入我们" target='_self'><i class="fa fa-angle-right"></i><em class="em1"></em>&nbsp;&nbsp;加入我们</a> 
             
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

                  <li><a href="<?php echo U('Success/VE');?>" title="金融"  target='_self'>VE</a></li>

                  <li><a href="<?php echo U('Success/gl');?>" title="融资业务"  target='_self'>管廊</a></li>

                  <li><a href="<?php echo U('Product/gongyi');?>" title="信用担保"  target='_self'>工艺设计软件</a></li>

                  <li><a href="<?php echo U('Product/lvse');?>" title="典当服务"  target='_self'>绿色建筑</a></li>

                  <li><a href="<?php echo U('Product/zhushou');?>" title="融资租赁"  target='_self'>设计助手</a></li>

                  <li><a href="<?php echo U('Product/fengli');?>" title="理财咨询"  target='_self'>风管水力计算</a></li>

                </ul>
          </div>
          </div>


            <div class="col-md-7 shop-page-content">
          
            <div class="section-title-style-2">
              <h1>加入我们</h1>
              <hr style="border:none;border-top:3px ridge orange;width:50px;margin-top:5px;position:absolute;" /><br/>
            </div>  
            
            <div class="clearfix resshowjob">
           
  <h2 class="h1"><?php echo ($job["title"]); ?></h2>

  <div class="panel panel-default">

    <ul class="list-group">
      <li class="list-group-item">招聘人数：<?php echo ($job["num"]); ?></li>
      <li class="list-group-item">工作地点：<?php echo ($job["place"]); ?></li>
      <li class="list-group-item">工资待遇：<?php echo ($job["afford"]); ?></li>
      <li class="list-group-item">发布日期：<?php echo ($job["time"]); ?></li>
      <li class="list-group-item">有效期：<?php echo ($job["deadline"]); ?> </li>
      
    </ul>



    <div class="panel-heading">
      <strong>职位描述</strong>
    </div>

    <div class="panel-body met_editor">
       <span style="font-size:16px;"><strong>主要工作内容：</strong></span><div><?php echo ($job["content"]); ?></div><div>&nbsp;</div><div><span style="font-size:16px;"><strong>岗位要求：&nbsp;</strong></span></div><ol><?php echo ($job["demand"]); ?></ol>
    </div>

    <div class="panel-footer">

      <div class="met_tools">
        <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div><script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName("head")[0]||body).appendChild(createElement("script")).src="http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion="+~(-new Date()/36e5)];</script>
        <ul class="met_page">
        <li>上一篇：
            <?php if($prev == '没有了'): ?>没有了
                <?php else: ?>
                <a href="/shanghua/index.php/Home/Job/content/id/<?php echo ($prev["id"]); ?>"><?php echo ($prev["title"]); ?></a><?php endif; ?>
        </li>
        <li >下一篇：
            <?php if($next == '没有了'): ?>没有了
                <?php else: ?>
                <a href="/shanghua/index.php/Home/Job/content/id/<?php echo ($next["id"]); ?>"><?php echo ($next["title"]); ?></a><?php endif; ?>
        </li>
        </ul>
      </div>

    </div>
  </div>

</div>
          </div>
         
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