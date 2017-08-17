<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:76:"D:\phpStudy\WWW\scancode\public/../application/index\view\index\contact.html";i:1502346732;s:76:"D:\phpStudy\WWW\scancode\public/../application/index\view\common\header.html";i:1502362933;s:76:"D:\phpStudy\WWW\scancode\public/../application/index\view\common\footer.html";i:1502360581;}*/ ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Developed By M Abdur Rokib Promy">
    <meta name="author" content="cosmic">
    <meta name="keywords" content="Bootstrap 3, Template, Theme, Responsive, Corporate, Business">
    <link rel="shortcut icon" href="__static__/index/img/favicon.png">

    <title>
      	联系我们 | 中资思看
    </title>

    <!-- Bootstrap core CSS -->
    <link href="__static__/index/css/bootstrap.min.css" rel="stylesheet">
    <link href="__static__/index/css/theme.css" rel="stylesheet">
    <link href="__static__/index/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="__static__/index/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="__static__/index/css/flexslider.css"/>
    <link href="__static__/index/assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="__static__/index/css/animate.css">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>


    <!-- Custom styles for this template -->
    <link href="__static__/index/css/style.css" rel="stylesheet">
    <link href="__static__/index/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
<script src="__static__/index/js/html5shiv.js">
</script>
<script src="__static__/index/js/respond.min.js">
</script>
<![endif]-->
  </head>

  <body>
    <!--header start-->
    <header class="head-section">
      <div class="navbar navbar-default navbar-static-top container">
          <div class="navbar-header">
              <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse"
              type="button"><span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span></button> <a class="navbar-brand" href="index.html">中资<span>思看</span></a>
          </div>

          <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                   <?php if(is_array($cates) || $cates instanceof \think\Collection || $cates instanceof \think\Paginator): if( count($cates)==0 ) : echo "" ;else: foreach($cates as $key=>$vo): ?>
                  <li class="">
                      <?php if(!isset($vo['childs'])): ?>
                      <a href="<?php echo $vo['url']; ?>"><b><?php echo $vo['catename']; ?></b></a>
                      <?php else: ?>
                      <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover="dropdown" data-toggle="dropdown" href="<?php echo $vo['url']; ?>"><b><?php echo $vo['catename']; ?></b> <i class="fa fa-angle-down"></i>
                      </a>

                      <ul class="dropdown-menu">
                      <?php if(is_array($vo['childs']) || $vo['childs'] instanceof \think\Collection || $vo['childs'] instanceof \think\Paginator): if( count($vo['childs'])==0 ) : echo "" ;else: foreach($vo['childs'] as $key=>$c): ?>
                          <li>
                              <a href="<?php echo $c['url']; ?>" target="_blank"><?php echo $c['catename']; ?></a>
                          </li>
                      <?php endforeach; endif; else: echo "" ;endif; ?>    
                      </ul>
                      <?php endif; ?>
                  </li> 
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                 
                 <!--  <li class="dropdown">
                      <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover="dropdown" data-toggle="dropdown" href="project.html"><b>项目</b> <i class="fa fa-angle-down"></i>
                      </a>

                      <ul class="dropdown-menu">
                          <li>
                              <a href="http://19710601.com" target="_blank">扫码科技</a>
                          </li>

                          <li>
                              <a href="http://yh.19880619.com" target="_blank">银河系统</a>
                          </li>

                          <li>
                              <a href="http://777.top:8080" target="_blank">跨境电商</a>
                          </li>
                          
                      </ul>
                  </li> -->

                 <!--  <li class="dropdown">
                      <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover="dropdown" data-toggle="dropdown" href="#"><b>资讯</b> <i class="fa fa-angle-down"></i>
                      </a>

                      <ul class="dropdown-menu">
                          <li>
                              <a href="news.html">行业新闻</a>
                          </li>
                          
                          <li>
                              <a href="enterprises.html">企业动态</a>
                          </li>

                         
                      </ul>
                  </li>

                  <li class="">
                      <a href="qianzhan.html"><b>前瞻</b></a>
                  </li>

                  <li class="">
                      <a href="contact.html"><b>联系我们</b></a>
                  </li> -->

              </ul>
          </div>
      </div>
    </header>
    <!--header end-->

    <!--breadcrumbs start-->
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-4">
            <h1>
              CONTACTS
            </h1>
          </div>
          <div class="col-lg-8 col-sm-8">
            <ol class="breadcrumb pull-right">
              <li>
                <a href="index.html">
                  	首页
                </a>
              </li>
              <li class="active">
                 	联系我们
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!--breadcrumbs end-->



    <!--container start-->
    <div class="container">


      <div class="row">
        <div class="col-lg-5 col-sm-5 address">
          <section class="contact-infos">
            <h4 class="title custom-font text-black">
               	地址
            </h4>
            <address>
              	南山区铜鼓路5号华润置地大厦E座1603
              <br>
               	深圳，中国
              <br>
            </address>
          </section>
          <br />
          <section class="contact-infos">
            <h4 class="title custom-font text-black">
               	工作时间
            </h4>
            <p>
              	周一  至  周五
              <br>
               	9:30  至  18:30
              <br>
            </p>
          </section>
          <br />
          <section class="contact-infos">
            <h4>
               	联系电话
            </h4>
            <p>
              	（0755） 8653 7292
            </p>


          </section>
        </div>
        <div class="col-lg-7 col-sm-7 address">
          <h4>
            	联系我们，以便我们能听到你的声音
          </h4>
          <div class="contact-form">
            <form role="form" method="POST" action="<?php echo url('index/contacts'); ?>">
              <div class="form-group">
                <label for="name">
                   	姓名
                </label>
                <input type="text" placeholder="" name="name" id="name" class="form-control">
              </div>
              <div class="form-group">
                <label for="email">
                   	邮箱
                </label>
                <input type="text" placeholder="" name="email" id="email" class="form-control">
              </div>
              <div class="form-group">
                <label for="phone">
                   	手机号码
                </label>
                <input type="text" name="phone" id="phone" class="form-control">
              </div>
              <div class="form-group">
                <label for="phone">
                   	留言
                </label>
                <textarea placeholder="" name="content" rows="5" class="form-control">
                </textarea>
              </div>
              <button class="btn btn-info" type="submit">
                 	确认提交
              </button>
            </form>

          </div>
        </div>
      </div>

    </div>
    <!--container end-->

    <!--footer start-->
    <footer class="footer">
      <div class="container">
        <div class="row">
                  
          <div class="col-lg-3 col-sm-3 address wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
            <h1 style="text-align:left;">
              	SCANCODE
            </h1>
            <hr>
              <p><small>思看科技SCANCODE，于2015年2月成立扫码科技硅谷物联实验室，并与银河计算机公司合作建立扫码科技项目组，研发新一代物联网通道入口，与中科院电子所刘洋博士合作探索扫码科技技术下的主动式社交+O2O的剩余价值开发模式，未来可实现的是万物相连人人相连，构成体系后将实现：主动型社交+O2O、直商+智商+M2C、AI智能、ID物联追踪的一体化体验，2017年初正式落地深圳南山科技园区，开始融投与运营上市之路。</small></p>
          </div>
          
           <div class="col-lg-3 col-sm-3 address wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
              <h1 style="text-align:left;">
                	友情链接
              </h1>
              <hr>
              <div style="text-align: left;">
              	<a style="color: #FFFFFF;" href="http://19710601.com" target="_blank">扫码科技</a>/
              	<a style="color: #FFFFFF;" href="#" target="_blank">通用积分</a>/
              	<a style="color: #FFFFFF;" href="http://yh.19880619.com" target="_blank">银河系统</a>/
     						<a style="color: #FFFFFF;" href="http://777.top:8080" target="_blank">跨境电商</a>/
              	<a style="color: #FFFFFF;" href="#" target="_blank">时间银行</a>/
     						<a style="color: #FFFFFF;" href="http://www.boilercloud.com" target="_blank">锅炉云平台</a>/
								<a style="color: #FFFFFF;" href="http://www.heleasy.com" target="_blank">微信分销系统</a>/
								<a style="color: #FFFFFF;" href="http://www.lx598.com" target="_blank">短信接口</a>/
								<a style="color: #FFFFFF;" href="http://www.mt4xt.com" target="_blank">微盘平台开发</a>/
								<a style="color: #FFFFFF;" href="http://www.iprbank.cn" target="_blank">专利申请网</a>/
								<a style="color: #FFFFFF;" href="http://www.ants-city.com" target="_blank">跨境电商ERP系统</a>/
								<a style="color: #FFFFFF;" href="http://www.easywork365.com/" target="_blank">微信企业号</a>/
								<a style="color: #FFFFFF;" href="http://www.zhuotop.com" target="_blank">微信商城系统</a>/
								<a style="color: #FFFFFF;" href="http://www.yimisoft.com" target="_blank">seo软件</a>/
								<a style="color: #FFFFFF;" href="http://www.51cdz.cn" target="_blank">香港空间</a>/
								<a style="color: #FFFFFF;" href="http://www.xiazai.com/ios" target="_blank">苹果软件下载</a>/
								<a style="color: #FFFFFF;" href="http://www.xianlue.com" target="_blank">可行性研究报告</a>/
								<a style="color: #FFFFFF;" href="http://www.yunmai.cn" target="_blank">票据识别</a>/
								<a style="color: #FFFFFF;" href="http://www.jxh01.com" target="_blank">绩效红外勤管理系统</a>/
								<a style="color: #FFFFFF;" href="http://www.yhz66.com" target="_blank">企业网盘</a>/
								<a style="color: #FFFFFF;" href="http://www.che01.cn" target="_blank">洗车会员管理系统</a>/
							  <a style="color: #FFFFFF;" href="http://chaoliu.jiameng.com" target="_blank">通讯软件加盟</a>/
							  <a style="color: #FFFFFF;" href="http://www.51mianbeian.com" target="_blank">免备案空间</a>/
              </div>
          </div>
          <div class="col-lg-3 col-sm-3 address wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
              <h1 style="text-align:left;">
                	资讯
              </h1>
              <hr>
              <div style="text-align: left;">
              	<ul>
                  <?php if(is_array($news) || $news instanceof \think\Collection || $news instanceof \think\Paginator): if( count($news)==0 ) : echo "" ;else: foreach($news as $key=>$vo): ?>
                  <li><a style="color: #FFFFFF;" href="<?php echo url('index/newsdetail',array('id'=>$vo['id'])); ?>" target="_blank"><?php echo $vo['title']; ?></a></li>
                  <?php endforeach; endif; else: echo "" ;endif; ?>
                  
                </ul> 
              </div>  
          </div>
          
          <div class="col-lg-3 col-sm-3 address wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
            <h1 style="text-align:left;">
              	联系我们
            </h1>
            <hr>
            <address>
              <p><i class="fa fa-home pr-10"></i>地址：深圳市南山区铜鼓路5号华润置地大厦E座1603</p>
              <p><i class="fa fa-phone pr-10"></i>电话 : (0755) 8653 7292 </p>
              <p><i class="fa fa-envelope pr-10"></i>Email: copy@vip.126.com</p>
            </address>
          </div>
                  
        </div>
      </div>
    </footer>
    <!-- footer end -->
    <!--small footer start -->
    <footer class="footer-small">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 pull-right">
                    <ul class="social-link-footer list-unstyled">
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".1s"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".2s"><a href="#"><i class="fa fa-qq"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".3s"><a href="#"><i class="fa fa-wechat"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".4s"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".5s"><a href="#"><i class="fa fa-github"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                  <div class="copyright"> <p><small>Copyright&nbsp;&nbsp;&copy;&nbsp;&nbsp;2017&nbsp;&nbsp;SCANCODE&nbsp;&nbsp;扫码科技&nbsp;&nbsp;All&nbsp;&nbsp;rights&nbsp;&nbsp;reserved.&nbsp;&nbsp;粤ICP备17051282号-6</small></p>
                  </div>
                </div>
            </div>
        </div>
    </footer>
    <!--small footer end-->
    
		<!-- js placed at the end of the document so the pages load faster
    <script src="__static__/index/js/jquery.js"></script>-->
    <script src="__static__/index/js/jquery-1.8.3.min.js"></script>
    <script src="__static__/index/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="__static__/index/js/hover-dropdown.js"></script>
    <script defer src="__static__/index/js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="__static__/index/assets/bxslider/jquery.bxslider.js"></script>

    <script type="text/javascript" src="__static__/index/js/jquery.parallax-1.1.3.js"></script>
    <script src="__static__/index/js/wow.min.js"></script>
    <script src="__static__/index/assets/owlcarousel/owl.carousel.js"></script>

    <script src="__static__/index/js/jquery.easing.min.js"></script>
    <script src="__static__/index/js/link-hover.js"></script>
    <script src="__static__/index/js/superfish.js"></script>




    <!--common script for all pages-->
    <script src="__static__/index/js/common-scripts.js"></script>



    <!-- Sequence Moder -slider js -->
    <script src="__static__/index/js/seq-slider/jquery.sequence-min.js"></script>
    <!--<script src="__static__/index/js/slider/sequencejs-options.modern-slide-in.js"></script>-->
    <script src="__static__/index/js/seq-slider/sequencejs-options.apple-style.js"></script>
    <!-- end of sequence slider js-->

    <script>
      $('a.info').tooltip();
      $(window).load(function() {
        $('.flexslider').flexslider({
          animation: "slide",
          start: function(slider) {
            $('body').removeClass('loading');
          }
        });
      });

      $(document).ready(function() {

        $("#owl-demo").owlCarousel({

          items : 4

        });

      });

      jQuery(document).ready(function(){
        jQuery('ul.superfish').superfish();
      });

      new WOW().init();
    </script>
  </body>
</html>
