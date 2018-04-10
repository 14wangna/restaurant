<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
  <title>suggest</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="/shanghua/Public/home/css/nav.css" type="text/css" rel="stylesheet" />
  <link href="/shanghua/Public/home/css/suggest.css" type="text/css" rel="stylesheet" />
  <link href="/shanghua/Public/home/css/touch.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="/shanghua/Public/home/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript">
     var img="/shanghua/Public/home/images/weixin.jpg"
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
      <p><a href="<?php echo U('Advice/suggest');?>">中文&nbsp;</a>|<a href="<?php echo U('Advice/suggeste');?>">&nbsp;English</a></p>
    </div>
     
  </div>
  <div id="nav-banner">
    <img src="/shanghua/Public/home/images/suggest.jpg">
  </div>
  <div id="bread">
    <div id="bread-left">Consulting</div>
      <div id="bread-right"><a href="<?php echo U('Index/indexe');?>">Home&nbsp;</a>>><a href="<?php echo U('Apply/applye');?>">&nbsp;Consulting&nbsp;</a>>>&nbsp;Advice</div>
  </div>

 
 <div id="suggest-content">
    <div id="new-company-left">
      <div id="new-company-new">
        <h4>Couslting</h4>
        <HR align="left" width="10%" color="#FFBB77" SIZE="3" style="margin-top:10px;"></HR>
        <ul class="new">
          <li><a href="<?php echo U('Apply/applye');?>" ><em class='em2'></em>Apply</a></li>
          <li><a href="<?php echo U('Advice/suggeste');?>" class='active' style="color:#FFBB77"><em class='em1'></em>Suggest</a></li>

        </ul>
      </div>
      <div id="new-company-product">
        <h4>Recommended products</h4>
        <HR align="left" width="10%" color="#FFBB77" SIZE="3" style="margin-top:10px;">
        <ul>
          <li class="new-company-img1"><a href="<?php echo U('Product/zonghee');?>"><img src="/shanghua/Public/home/images/4.jpg"></a>
            <p class="new-goods">Intelligent</p>
            <p class="new-more"><a href="<?php echo U('Product/zonghee');?>" id="product1">MORE</a></p>
          </li>
          <li class="new-company-img2"><a href="<?php echo U('Product/lvsee');?>"><img src="/shanghua/Public/home/images/5.png"></a>
            <p class="new-goods">Building</p>
            <p class="new-more"><a href="<?php echo U('Product/lvsee');?>" id="product2">MORE</a><p>
          </li>
          <li class="new-company-img3"><a href="<?php echo U('Product/intergradee');?>"><img src="/shanghua/Public/home/images/7.png"></a>
            <p class="new-goods">Design</p>
            <p class="new-more"><a href="<?php echo U('Product/intergradee');?>" id="product2">MORE</a></p>
          </li>
        </ul>
      </div>
      <div id="new-company-hot">
         <h4>Hot key words</h4>
         <HR align="left" width="10%" color="#FFBB77" SIZE="3" style="margin-top:10px;">
          <ul class="p0 clouds">
              <li><a href="<?php echo U('Success/VEe');?>" target='_self'>VE</a></li>
              <li><a href="<?php echo U('Success/gle');?>" target='_self'>Intelligent pipe gallery</a></li>
              <li><a href="<?php echo U('Product/gongyie');?>" target='_self'>Process design software</a></li>
              <li><a href="<?php echo U('Product/lvsee');?>" target='_self'>Green building</a></li>
              <li><a href="<?php echo U('Product/zhushoue');?>" target='_self'>Design assistant</a></li>
              <li><a href="<?php echo U('Product/fenglie');?>" target='_self'>Hydraulic calculation of wind pipe</a></li>
          </ul>
      </div>
    </div>
    <div id="suggest-content-right">
      <p>For faster, more effective solution to your problem, please fill in the following details, we will answer as soon as possible for you</p>
      <form method="post">
        <div>
          <label for="inputname">Your name<span style="color:red;">*</span>:</label>
          <input type="text" id="inputname" />
        </div>
        <div>
          <label for="inputsite">Name of your unit<span style="color:red;">*</span>:</label>
          <input type="text"id="inputsite" />
        </div>
        <div>
          <label for="inputemail">Your email<span style="color:red;">*</span>:</label>
          <input type="text"id="inputemail" />
        </div>
        <div>
          <label for="inputphone">Your phone<span style="color:red;">*</span>:</label>
          <input type="text"id="inputphone" />
        </div>
        <div style="padding-right:32%">
          <label for="inputquestion">The question you asked<span style="color:red;">*</span>:</label>
          <textarea id="inputquestion" cols="20" rows="10" style="vertical-align:top;"></textarea> 
        </div>
        <div>
          <button type="submit">Submit</button>
        </div>
        
      </form>
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