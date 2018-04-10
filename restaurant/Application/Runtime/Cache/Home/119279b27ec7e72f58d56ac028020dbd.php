<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>公司新闻</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="/shanghua/Public/home/css/new-company.css" type="text/css" rel="stylesheet" />
	<link href="/shanghua/Public/home/css/nav.css" type="text/css" rel="stylesheet" />
  <link rel="stylesheet" href="/shanghua/Public/home/css/pagnation.css" type="text/css">
	<script type="text/javascript" src="/shanghua/Public/home/js/jquery.min.js"></script>
	<link href="/shanghua/Public/home/css/touch.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="/shanghua/Public/home/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript">
    var img = '/shanghua/Public/home/images/weixin.jpg';
  </script>
  <script type="text/javascript" src="/shanghua/Public/home/js/touch.js"></script>
	<script>
$(function () {
$(".box ul li").hover(
	function () {
		$(this).find(".dask").stop().delay(50).animate({"top":0,opacity:0.6},300)
	 },
	function () {
		$(this).find(".dask").stop().animate({"top":-200,opacity:0},300)
	}
	
)
});
</script>

  <style type="text/css">
  .nav ul li a{
    color: white;
    text-decoration: none;
  }
  </style>
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
      <p><a href="<?php echo U('New/company?p=1');?>">中文&nbsp;</a>|<a href="<?php echo U('New/companye?p=1');?>">&nbsp;English</a></p>
    </div>
  </div>
  <div id="nav-banner">
    <img src="/shanghua/Public/home/images/industry1.jpg">
  </div>
  <div id="bread">
    <div id="bread-left">新闻中心</div>
      <div id="bread-right"><a href="<?php echo U('Index/index');?>">首页&nbsp;</a>>><a href="<?php echo U('New/company?p=1');?>">&nbsp;新闻中心&nbsp;</a>>>&nbsp;公司新闻</div>
  </div>

	<div id="new-company">
		<div id="new-company-left">
			<div id="new-company-new">
				<h4>新闻中心</h4>
				<HR align="left" width="10%" color="#FFBB77" SIZE="3" style="margin-top:10px;">
				<ul class="new">
					<li><a href="<?php echo U('New/company?p=1');?>" class='active' style="color:#FFBB77"><em class='em1'></em>公司新闻</a></li>
					
					<li><a href="<?php echo U('Industry/industry?p=1');?>"><em class="em2"></em>行业咨询</a></li>
				</ul>
			</div>
			<div id="new-company-product">
				<h4>推荐产品</h4>
				<HR align="left" width="10%" color="#FFBB77" SIZE="3" style="margin-top:10px;">
				<ul>
					<li class="new-company-img1"><a href="<?php echo U('Product/zonghe');?>"><img src="/shanghua/Public/home/images/left1.jpg"></a>
						<p class="new-goods">PDMS</p>
						<p class="new-more"><a href="<?php echo U('Product/zonghe');?>" id="product1">MORE</a></p>
					</li>
					<li class="new-company-img2"><a href="<?php echo U('Product/lvse');?>"><img src="/shanghua/Public/home/images/left2.jpg"></a>
						<p class="new-goods">绿色建筑</p>
						<p class="new-more"><a href="<?php echo U('Product/lvse');?>" id="product2">MORE</a><p>
					</li>
					<li class="new-company-img3"><a href="<?php echo U('Product/intergrade');?>"><img src="/shanghua/Public/home/images/left3.png"></a>
						<p class="new-goods">设计软件</p>
						<p class="new-more"><a href="<?php echo U('Product/intergrade');?>" id="product3">MORE</a></p>
					</li>
				</ul>
			</div>
      <div id="new-company-hot">
         <h4>热门关键词搜索</h4>
         <HR align="left" width="10%" color="#FFBB77" SIZE="3" style="margin-top:10px;">
          <ul class="p0 clouds">
              <li><a href="<?php echo U('Success/VE');?>" target='_self'>VE</a></li>
              <li><a href="<?php echo U('Success/gl');?>" target='_self'>智慧管廊</a></li>
              <li><a href="<?php echo U('Product/gongyi');?>" target='_self'>工艺设计软件</a></li>
              <li><a href="<?php echo U('Product/lvse');?>" target='_self'>绿色建筑</a></li>
              <li><a href="<?php echo U('Product/zhushou');?>" target='_self'>设计助手</a></li>
              <li><a href="<?php echo U('Product/fengli');?>" target='_self'>风管水力计算</a></li>
          </ul>
      </div>
		</div>
		<div id="new-company-right">
			<h3>公司新闻</h3>
			<HR align="left" width="5%" color="#FFBB77" SIZE="3" style="margin-top:10px;">
				<div id="new-company-content">
        
          <?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><div class="box">
						<ul>
							<li>
								<a href="/shanghua/index.php/Home/New/content/id/<?php echo ($d["id"]); ?>"><img src="/shanghua/Public/<?php echo ($d["thumb"]); ?>" alt="" /></a>
								<div class="dask">
								</div>
								<div>
									<div class="new-company-article-time">
										<p><?php echo (date("jS",strtotime($d["time"]))); ?><br/><?php echo (date("F",strtotime($d["time"]))); ?></p>
									</div>
									<div class="new-company-article-title">
										<h4><a href="/shanghua/index.php/Home/New/content/id/<?php echo ($d["id"]); ?>">
                    <?php echo (msubstr($d["title"],0,30,'utf-8',false)); ?></a></h4>
										<p><?php echo (date("Y年m月d日",strtotime($d["time"]))); ?></p>
									</div>
									<div class="new-company-article-content" >
										<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php echo (msubstr($d["content"],0,120,'utf-8',ture)); ?></p>
									</div>
									
								</div>
							</li>
						</ul>
            <div class="new-company-btn">
                    
                    <a href="/shanghua/index.php/Home/New/content/id/<?php echo ($d["id"]); ?>" id="more1">查看更多&nbsp;>></a>
            </div>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
        <div class="pagnation">
          <?php echo ($page); ?>
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
<script>
  var pagnation=$("#pagnation");
  $(document).on("keydown",function(event){
    switch(event.keyCode){
       case 37 : window.location.href = pagnation.find(".page-prev").attr("href");break;
       case 39 : window.location.href = pagnation.find(".page-next").attr("href");break
    }
  });
</script>
</html>