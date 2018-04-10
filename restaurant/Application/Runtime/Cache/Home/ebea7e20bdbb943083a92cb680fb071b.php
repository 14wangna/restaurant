<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <title>Profile</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="/shanghua/Public/home/css/touch.css" rel="stylesheet" type="text/css">
  <link href="/shanghua/Public/home/css/nav.css" type="text/css" rel="stylesheet" />
  <link href="/shanghua/Public/home/css/gysh.css" type="text/css" rel="stylesheet" />
  <script src="/shanghua/Public/home/js/jquery-1.8.3.min.js"></script> 
  <script type="text/javascript">
    var img = '/shanghua/Public/home/images/weixin.jpg';
  </script>
  <script src="/shanghua/Public/home/js/touch.js"></script> 
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
      <p><a href="<?php echo U('Honor/jianjie');?>">中文&nbsp;</a>|<a href="<?php echo U('Honor/jianjiee');?>">&nbsp;English</a></p>
    </div>
     
  </div>
  <div id="nav-banner">
    <img src="/shanghua/Public/home/images/jianjie.jpg">
  </div>
  <div id="bread">
    <div id="bread-left">Company Profile</div>
      <div id="bread-right"><a href="<?php echo U('Index/indexe');?>">Home&nbsp;</a>>><a href="<?php echo U('Honor/jianjiee');?>">&nbsp;About Shanghua&nbsp;</a>>>&nbsp;Company Profile</div>
  </div>
     <div>
      <div class="container">
        
          <div class="col-md-4">
          
            <h4 class="ecopc">About Shanghua</h4>
            <hr style="border:none;border-top:2px ridge orange;width:40px;margin-top:5px;position:absolute;" /><br/>
              <ul class="p0 category_item met_aside_list ecopc">

                <li><a href="<?php echo U('Honor/jianjiee');?>" class='active' title="公司简介" target='_self'><i class="fa fa-angle-right"></i><em class="em1"></em>&nbsp;&nbsp;Company Profile</a> 
             
                </li>

                <li><a href="<?php echo U('Honor/wenhuae');?>"  title="公司文化" target='_self'><i class="fa fa-angle-right"></i><em class="em2"></em>&nbsp;&nbsp;Company Culture</a> 
             
                </li>

                <li><a href="<?php echo U('Honor/rongyue');?>"  title="公司荣誉" target='_self'><i class="fa fa-angle-right"></i><em class="em2"></em>&nbsp;&nbsp;Company Honor</a> 
             
                </li>

                <li><a href="<?php echo U('Job/joine?p=1');?>"  title="加入我们" target='_self'><i class="fa fa-angle-right"></i><em class="em2"></em>&nbsp;&nbsp;Join Us</a> 
             
                </li>

              </ul>
              <br/><br/>
              <h4 class="ecopc">Recommended products</h4>
            <hr style="border:none;border-top:2px ridge orange;width:40px;margin-top:5px;position:absolute;" /><br/>
             <div  class="ecobadding15">
                <div class="single_product_item">
                  <a  href="<?php echo U('Success/gle');?>" title="智慧管廊" target='_self'><img src="/shanghua/Public/home/images/4.jpg" alt="智慧管廊" title="智慧管廊"></a> 
                  <p>Intelligent pipe gallery</p>
                    <a  href="<?php echo U('Success/gle');?>" title="智慧管廊" target='_self'>MORE</a>
                </div>
                

                
                <div class="single_product_item">
                  <a  href="<?php echo U('Product/lvsee');?>" title="VE" target='_self'><img src="/shanghua/Public/home/images/5.png" alt="VE" title="VE"></a> 
                  <p>Green building</p><br/>
                    <a  href="<?php echo U('Product/lvsee');?>" title="VE" target='_self'>MORE</a>
                </div>
                

                
                <div class="single_product_item">
                  <a  href="<?php echo U('Product/gongyie');?>" title="工艺设计软件" target='_self'><img src="/shanghua/Public/home/images/7.png" alt="工艺设计软件" title="工艺设计软件"></a> 
                  <p>Process design software</p>
                    <a  href="<?php echo U('Product/gongyie');?>" title="工艺设计软件" target='_self'>MORE</a>
                </div>
                </div>
                <br/><br/><br/>
                <div>
                <h4 id="hot">Hot key words</h4>
                <hr style="border:none;border-top:2px ridge orange;width:40px;margin-top:5px;position:absolute;" /><br/>
                <ul class="p0 clouds">

                  <li><a href="<?php echo U('Success/VEe');?>"   target='_self'>VE</a></li>

                  <li><a href="<?php echo U('Success/gle');?>"   target='_self'>Intelligent pipe gallery</a></li>

                  <li><a href="<?php echo U('Product/gongyie');?>"   target='_self'>Process design software</a></li>

                  <li><a href="<?php echo U('Product/lvsee');?>"   target='_self'>Green building</a></li>

                  <li><a href="<?php echo U('Product/zhushoue');?>"   target='_self'>Design assistant</a></li>

                  <li><a href="<?php echo U('Product/fenglie');?>"   target='_self'>Hydraulic calculation of wind pipe</a></li>

                </ul>
          </div>
          </div>


          <div class="col-md-7 shop-page-content">
          
            <div class="section-title-style-2">
              <h1>Company Profile</h1>
              <hr style="border:none;border-top:3px ridge orange;width:50px;margin-top:5px;position:absolute;" /><br/>
            </div>  
          <p>Beijing Shanghua Software Co., Ltd. is a new high-tech information company, a service in the field of development survey and design information. Its core team of engineers have more than ten years of experience in the industry, has developed a variety of software products on the market with a monopoly level. Today, they are committed to the use of the latest technology model to lead the industry's information technology as its development goals.</p>
          <p>As China holding member enterprises to finance financial intelligence of small and medium-sized enterprises, promote the development of the real economy as its mission, and to become: </p><p>

    ● The first-class SME financing service providers, financial industry benchmark and leader; </p><p>

    ● The value of shareholders, customers, and partners - partners and employees of long-term cooperation and win-win; </p><p>

    ●  A trusted, respected and influential in the domestic financial holding company.</p><p>

    </p>
          <p>At present, the company has 5 independent research and development products, involving municipal, civil construction, - power, rail, rail transportation, nuclear industry, petroleum, chemical, metallurgy, coal, education and many other fields.</p>
          <p>Among them, the company uses BIM technology independent research and development of integrated pipe gallery design system for the current domestic only can quickly build a three-dimensional model, and can be a two-dimensional construction plans of quality software. Get the industry wide acclaim.</p>
          <p>The company adopts GIS technology and BIM technology combined with digital integrated pipe gallery operation system development, operation and maintenance management from the pipe gallery of foreign advanced experience, can effectively realize the comprehensive pipe gallery post digital standardization management.</p>
          <p>At the same time, the company has the United Kingdom IES (VE) green building products in the Greater China region a proxy. The product has the world leading technology in the field of green building, can be achieved (including the United States, Germany, Britain, Canada, India, Japan, Australia, Singapore, Arabia, Qatar, etc.) many green building certification. The product has been applied in many colleges and universities and large design institutes.</p>
          <p>Beijing Shanghua Software Co., Ltd is a software company, the rapid development of new information technology. Externally, the company adhering to the "with advanced technology to the customer the perfect experience, with first-class service to the customer warm feeling" for the idea. Internally, the company adhering to the "open, fair and sharing" as the corporate culture.</p><br>

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
      <div id="footer-bottom1"><p><br/> This page content for the website demonstration data, front page content can be modified in the background.</p></div>
    </div>
    </div>
    <div id="top"></div>
  </body>
</html>