<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"D:\phpStudy\WWW\scancode\public/../application/index\view\index\index.html";i:1502351388;s:76:"D:\phpStudy\WWW\scancode\public/../application/index\view\common\header.html";i:1502362933;s:76:"D:\phpStudy\WWW\scancode\public/../application/index\view\common\footer.html";i:1502360581;}*/ ?>
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
      中资思看物联网有限公司 | 主页
    </title>

    <!-- Bootstrap core CSS -->
    <link href="__static__/index/css/bootstrap.min.css" rel="stylesheet">
    <link href="__static__/index/css/theme.css" rel="stylesheet">
    <link href="__static__/index/css/bootstrap-reset.css" rel="stylesheet">
    <link href="__static__/index/css/bootstrap.min.css" rel="stylesheet">

    <!--external css-->
    <link href="__static__/index/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="__static__/index/css/flexslider.css"/>
    <link href="__static__/index/assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="__static__/index/css/animate.css">
    <link rel="stylesheet" href="__static__/index/assets/owlcarousel/owl.carousel.css">
    <link rel="stylesheet" href="__static__/index/assets/owlcarousel/owl.theme.css">

    <link href="__static__/index/css/superfish.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="__static__/index/css/seq-slider/sequencejs-theme.apple-style.css" />
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <!--
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
-->

    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="__static__/index/css/component.css">
    <link href="__static__/index/css/style.css" rel="stylesheet">
    <link href="__static__/index/css/style-responsive.css" rel="stylesheet" />


    <!--
<link rel="stylesheet" media="screen" href="__static__/index/css/slider/sequencejs-theme.modern-slide-in.css" />
-->

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

    <div id="sequence-theme">
      <div id="sequence">

        <ul class="controls">
          <li class="status">
          </li>
          <li class="sequence-prev">
          </li>
          <li class="sequence-pause">
          </li>
          <li class="sequence-next">
          </li>
        </ul>

        <ul class="sequence-canvas">
          <li class="animate-in">
            <div class="intro">
              <h1>
                	未来的引领者
              </h1>
              <h2>
                 	您最佳的选择
              </h2>
            </div>
            <img class="iphone" src="__static__/index/img/seq-slider/iphone.png" alt="iPhone4" />
            <img class="iphone-shadow" src="__static__/index/img/seq-slider/iphone-shadow.png" alt="" />
          </li>
          <li>
            <img class="ipad" src="__static__/index/img/seq-slider/ipad.png" alt="iPad" />
            <div class="slide2">
              <h1>
                	十年研发经验
              </h1>
              <h2>
                	上百成功案例
              </h2>
            </div>
            <img class="ipad-shadow" src="__static__/index/img/seq-slider/ipad-shadow.png" alt="" />
          </li>
          <li>
            <div class="slide3">
              <h1>
                	中科院
              </h1>
              <h2>
                	鼎力合作
              </h2>
            </div>
            <img class="iphone2" src="__static__/index/img/seq-slider/iphone.png" alt="iPhone4" />
            <img class="iphone2-shadow" src="__static__/index/img/seq-slider/iphone-shadow.png" alt="" />
            <img class="iphone3" src="__static__/index/img/seq-slider/iphone.png" alt="iPhone4" />
            <img class="iphone3-shadow" src="__static__/index/img/seq-slider/iphone-shadow.png" alt="" />
            <img class="iphone4" src="__static__/index/img/seq-slider/iphone.png" alt="iPhone4" />
            <img class="iphone4-shadow" src="__static__/index/img/seq-slider/iphone-shadow.png" alt="" />
          </li>
        </ul>

      </div>
    </div>

    <!--feature start-->

    <div class="container">
      <div class="row mar-b-50">
        <div class="col-md-12">
          <div class="text-center feature-head wow fadeInDown">
            <h1 class="">
            	欢迎来到  中资思看
            	<p><h3>welcome to scan</h3></p>
            </h1>
<hr>
          </div>


          <div class="feature-box">
            <div class="col-md-4 col-sm-4 text-center wow fadeInUp">
              <div class="feature-box-heading">
                <em>
                <img src="__static__/index/img/1.png" alt="" width="100" height="100">

                </em>
                <h2>
                  <b>量身定制</b>
                </h2>
              </div>
              <p class="text-center">
              	<h5>上百家成功案例经验，量身定制最合理的开发方案</h5>
              </p>
            </div>
            <div class="col-md-4 col-sm-4 text-center wow fadeInUp">
              <div class="feature-box-heading">
                <em>
                  <img src="__static__/index/img/2.png" alt="" width="100" height="100">
                </em>
                <h2>
                  <b>全方位服务</b>
                </h2>
              </div>
              <p class="text-center">
                <h5>提供更加灵活的方案，匹配企业不同成长阶段需求，降低开发及运维成本，根据企业的实际需求定制全方位的服务</h5>
              </p>
            </div>
            <div class="col-md-4 col-sm-4 text-center wow fadeInUp">
              <div class="feature-box-heading">
                <em>
                  <img src="__static__/index/img/3.png" alt="" width="100" height="100">
                </em>
                <h2>
                  <b>交付准时</b>
                </h2>
              </div>
              <p class="text-center">
                <h5>十多年开发经验的专业外包团队，精准把控整个开发流程</h5>
              </p>
            </div>
          </div>

          <!--feature end-->
        </div>
        </div>
    </div>


    <!--property start-->
    <div class="property">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-sm-6 text-center wow fadeInLeft">
            <img src="__static__/index/img/tab1.png" alt="">
          </div>
          <div class="col-lg-6 col-sm-6 wow fadeInRight">
            <h1>
              	企业人员成长与技能提升管理计划 <span><h4>Skill Upgrading</h4></span>
            </h1>
            <hr>
            <p>
              <i class="fa fa-check fa-lg pr-10">
              </i>
								人员培训：入职培训、技能培训、职场情商培训等一系列持续的培训措施，为员工提供了技术、业务或管理方向的发展空间，也促进了员工高效而稳定的工作。
            </p>
            <p>
              <i class="fa fa-check fa-lg pr-10">
              </i>
              	人员管理：严格的保密制度、纪律管理制度、考勤 / 考评制度，是员工管理的重要依据。
            </p>
            <p>
              <i class="fa fa-check fa-lg pr-10">
              </i>
               	安排专人负责合作员工的管理和沟通以及月度考评工作，是另一项有效的管理措施，它极大限度的减少了客户的管理工作，降低了客户的管理成本。
            </p>
            <hr>
            <a href="<?php echo url('index/about'); ?>" class="btn btn-purchase">
              	关于我们 
            </a>
          </div>
        </div>
      </div>
    </div>
    <!--property end-->

    <!--recent work start-->
    <div class="bg-lg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 recent">
            <h3 class="recent-work">
              	recent work
            </h3>
            <p>我们的一些项目</p>
            <div id="owl-demo" class="owl-carousel owl-theme wow fadeIn">

              <div class="item view view-tenth">
                <img src="__static__/index/img/works/img8.jpg" alt="work Image">
                <div class="mask">
                  <a href="#" class="info" data-toggle="tooltip" data-placement="top" title="Details">
                    <i class="fa fa-link">
                    </i>
                  </a>
                </div>
              </div>
              <div class="item view view-tenth">
                <img src="__static__/index/img/works/img9.jpg" alt="work Image">
                <div class="mask">
                  <a href="#" class="info" data-toggle="tooltip" data-placement="top" title="Details">
                    <i class="fa fa-link">
                    </i>
                  </a>
                </div>
              </div>
              <div class="item view view-tenth">
                <img src="__static__/index/img/works/img10.jpg" alt="work Image">
                <div class="mask">
                  <a href="#" class="info" data-toggle="tooltip" data-placement="top" title="Details">
                    <i class="fa fa-link">
                    </i>
                  </a>
                </div>
              </div>
              <div class="item view view-tenth">
                <img src="__static__/index/img/works/img11.jpg" alt="work Image">
                <div class="mask">
                  <a href="#" class="info" data-toggle="tooltip" data-placement="top" title="Details">
                    <i class="fa fa-link">
                    </i>
                  </a>
                </div>
              </div>
              <div class="item view view-tenth">
                <img src="__static__/index/img/works/img12.jpg" alt="work Image">
                <div class="mask">
                  <a href="#" class="info" data-toggle="tooltip" data-placement="top" title="Details">
                    <i class="fa fa-link">
                    </i>
                  </a>
                </div>
              </div>
              <div class="item view view-tenth">
                <img src="__static__/index/img/works/img13.jpg" alt="work Image">
                <div class="mask">
                  <a href="#" class="info" data-toggle="tooltip" data-placement="top" title="Details">
                    <i class="fa fa-link">
                    </i>
                  </a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!--recent work end-->
    </div>



    <div id="home-services">

      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>
             	如果您需要任何帮助
            </h2>
          </div>

          <div class="col-md-4">
            <div class="h-service">
              <div class="icon-wrap ico-bg round-fifty wow fadeInDown">
                <i class="fa fa-question">
                </i>
              </div>
              <div class="h-service-content wow fadeInUp">
                <h3>
                   	提出问题
                </h3>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="h-service">
              <div class="icon-wrap ico-bg round-fifty wow fadeInDown">
                <i class="fa fa-h-square">
                </i>
              </div>
              <div class="h-service-content wow fadeInUp">
                <h3>
                  	技术支持
                </h3>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="h-service">
              <div class="icon-wrap ico-bg round-fifty wow fadeInDown">
                <i class="fa fa-users">
                </i>
              </div>
              <div class="h-service-content wow fadeInUp">
                <h3>
                  	查看论坛
                </h3>
              </div>
            </div>
          </div>
        </div>
    </div>
    
		<!--名人名言开始-->
		 <div class="container">
      <div class="row">
        <div class='col-md-offset-2 col-md-8 text-center'>
          <h2>
           	 名人名言
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-offset-2 col-md-8 mar-b-30">
          <div class="carousel slide" data-ride="carousel" id="quote-carousel">
            <!-- Bottom Carousel Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#quote-carousel" data-slide-to="0" class="active">
              </li>
              <li data-target="#quote-carousel" data-slide-to="1">
              </li>
              <li data-target="#quote-carousel" data-slide-to="2">
              </li>
            </ol>

            <!-- Carousel Slides / Quotes -->
            <div class="carousel-inner">

              <!-- Quote 1 -->
              <div class="item active">
                <blockquote>
                  <div class="row">
                    <div class="col-sm-3 text-center">
                      <img class="img-circle" src="__static__/index/images/Steve Jobs.jpg" style="width: 100px;height:100px;" alt="">
                    </div>
                    <div class="col-sm-9">
                      <p>          
													领袖和跟风者的区别就在于创新。
                      </p>
                      <small>
                        	史蒂夫乔布斯（美国苹果公司联合创始人）
                      </small>
                    </div>
                  </div>
                </blockquote>
              </div>
              <!-- Quote 2 -->
              <div class="item">
                <blockquote>
                  <div class="row">
                    <div class="col-sm-3 text-center">
                      <img class="img-circle" src="__static__/index/images/mayun.jpg" style="width: 100px;height:100px;" alt="">
                    </div>
                    <div class="col-sm-9">
                      <p>
                        	不想当将军的士兵不是好士兵，但是一个当不好士兵的将军一定不是好将军。
                      </p>
                      <small>
                        	马云（阿里巴巴集团创始人）
                      </small>
                    </div>
                  </div>
                </blockquote>
              </div>
              <!-- Quote 3 -->
              <div class="item">
                <blockquote>
                  <div class="row">
                    <div class="col-sm-3 text-center">
                      <img class="img-circle" src="__static__/index/images/bill gates.jpg" style="width: 100px;height:100px;" alt="">
                    </div>
                    <div class="col-sm-9">
                      <p>
                        	好的习惯是一笔财富，一旦你拥有它，你就会受益终生。养成立即行动的习惯，你的人生将变得更有意义。
                      </p>
                      <small>
                         	比尔盖茨（美国微软公司联合创始人）
                      </small>
                    </div>
                  </div>
                </blockquote>
              </div>
            </div>


          </div>

        </div>
      </div>
    </div>
		<!--名人名言结束-->

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

    <script type="text/javascript">
      jQuery(document).ready(function() {


        $('.bxslider1').bxSlider({
          minSlides: 5,
          maxSlides: 6,
          slideWidth: 360,
          slideMargin: 2,
          moveSlides: 1,
          responsive: true,
          nextSelector: '#slider-next',
          prevSelector: '#slider-prev',
          nextText: 'Onward →',
          prevText: '← Go back'
        });

      });


    </script>
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