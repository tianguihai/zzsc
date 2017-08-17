<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"D:\phpStudy\WWW\scancode\public/../application/index\view\index\about.html";i:1502349829;s:76:"D:\phpStudy\WWW\scancode\public/../application/index\view\common\header.html";i:1502362933;s:76:"D:\phpStudy\WWW\scancode\public/../application/index\view\common\footer.html";i:1502360581;}*/ ?>
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
      	关于我们 | 中资思看
    </title>

    <!-- Bootstrap core CSS -->
    <link href="__static__/index/css/bootstrap.min.css" rel="stylesheet">
    <link href="__static__/index/css/theme.css" rel="stylesheet">
    <link href="__static__/index/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="__static__/index/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="__static__/index/css/flexslider.css"/>
    <link href="__static__/index/assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="__static__/index/css/animate.css">
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
              About us
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
               	 关于我们
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
        <div class="col-lg-5">
          <div class="about-carousel wow fadeInLeft">
            <div id="myCarousel" class="carousel slide">
              <!-- Carousel items -->
              <div class="carousel-inner">
                <div class="active item">
                  <img src="__static__/index/img/service3.jpg" alt="">
                  <div class="carousel-caption">
                    <p>
                     	 合作
                    </p>
                  </div>
                </div>
                <div class="item">
                  <img src="__static__/index/img/chuangxin.jpg" alt="">
                  <div class="carousel-caption">
                    <p>
                      	创新
                    </p>
                  </div>
                </div>
                <div class="item">
                  <img src="__static__/index/img/weilai.jpg" alt="">
                  <div class="carousel-caption">
                    <p>
                      	未来
                    </p>
                  </div>
                </div>
              </div>
              <!-- Carousel nav -->
              <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                <i class="fa fa-angle-left">
                </i>
              </a>
              <a class="carousel-control right" href="#myCarousel" data-slide="next">
                <i class="fa fa-angle-right">
                </i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-7 about wow fadeInRight">

          <h1><small>WHO ARE WE&nbsp;</small>我们是谁</h1>
          <p>中资思看物联网有限公司，互联网内容提供商，创立于1999年。由深圳风格广告有限公司与南方数据网络科技有限公司并购而成。多年来我们专注于为客户提供互联网应用技术支持、平面拓展、解决方案和跨平台推广。已成功服务超过3000家企业、事业单位；这些服务包罗万象：IDC/ISP/电子商务/新媒体整合/CIS/移动客户端开发/AD及拓展/影音技术/网络推广/商业调查/印刷制作....</p>
          <p>我们是一个平凡务实的团队，潜心为客户创造价值。在关注纷繁复杂与日趋多元的市场需求的同时，我们愿为您和您的品牌提供基础后台和多元传播。</p>     
        </div>
      </div>
      
      <div class="row">
      	<div class="hiring">
      		 <div class="box">
      <div class="container">
        <div class="row">
          <div class="text-center feature-head">
            <h1>
              	我们做什么
            </h1>           
          </div>
          <div class="services">
            <div class="col-lg-6 col-sm-6">
              <div class="icon-wrap ico-bg round-five wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                <i class="fa fa-desktop">
                </i>
              </div>
              <div class="content">
                <h3 class="title">
                  	系统开发
                </h3>
                <p>
                 		APP客户端，服务器。
                </p>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="icon-wrap ico-bg round-five wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                <i class="fa fa-shopping-cart">
                </i>
              </div>
              <div class="content">
                <h3 class="title">
                  	电子商务
                </h3>
                <p>
                  	跨境电商，商城开发，微商城。
                </p>
              </div>
            </div>
          </div>
          <div class="services">
            <div class="col-lg-6 col-sm-6">
              <div class="icon-wrap ico-bg round-five wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".5s">
                <i class="fa fa-html5">
                </i>
              </div>
              <div class="content">
                <h3 class="title">
                  	企业建站
                </h3>
                <p>
                   	形象展示，网络推广，域名。
                </p>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="icon-wrap ico-bg round-five wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".7s">
                <i class="fa fa-book">
                </i>
              </div>
              <div class="content">
                <h3 class="title">
                   	平面设计
                </h3>
                <p>
                  	画册，包装，VIS，印刷。
                </p>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
      	</div>
      </div>
      
   	<div class="property">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-sm-6 text-center wow fadeInLeft">
            <img src="__static__/index/images/wzjs.jpg" alt="">
          </div>
          <div class="col-lg-6 col-sm-6 wow fadeInRight">
            <h1>
              	企业建站 <span><h4>ENTERPRISE WEBSITE</h4></span>
            </h1>
            <hr>
            <p>
              <i class="fa fa-check fa-lg pr-10">
              </i>
							在纷繁的网络服务市场中，我们仅选择高端市场,我们为各行业提供品牌网站的定制服务,我们的服务不是一次性的，而是与客户共同成长,我们选择设计风格和程序新技术应用时,更注重的是互联网和移动互联网的分享与客户体验,中资思看  为制造品牌而存在；
            </p>
            <p>
              <i class="fa fa-check fa-lg pr-10">
              </i>
              	我们采用最新Html5+CSS3技术；
            </p>
            <p>
              <i class="fa fa-check fa-lg pr-10">
              </i>
               	实现一个官网同时兼容多种屏幕视觉 达到4网合一的效果：PC＋平板＋手机＋微官网。
            </p>
          </div>
        </div>
      </div>
    </div>     
      
      
      <div class="property">
      <div class="container">
        <div class="row">
        	<div class="col-lg-6 col-sm-6 wow fadeInLeft">
            <h1>
              	系统开发 <span><h4>SYSTEM DEVELOPMENT</h4></span>
            </h1>
            <hr>
            <p>
              <i class="fa fa-check fa-lg pr-10">
              </i>
							拥有多年实践经验的系统开发工程师，通过行业最新技术语言(ASP/PHP/sap.net/JSP/XML/SSLT/javascript/Ajax/jQuery）为您提供专业的解决方案：网站维护更新系统/会员系统/产品展示系统/财务管理系统/主流电商程序/API数据交换系统/在线支付系统/物流ERP/商品管理ERP/配套数据库，同时搭建安全数据空间（SQL SERVICE/MYSQL）；
            </p>
            <p>
              <i class="fa fa-check fa-lg pr-10">
              </i>
              	我们为您优选离岸高速服务器；
            </p>
            <p>
              <i class="fa fa-check fa-lg pr-10">
              </i>
               	保障您的网站访问流畅不受地域影响  提高安全性。
            </p>
          </div>
          <div class="col-lg-6 col-sm-6 text-center wow fadeInRight">
            <img src="__static__/index/images/xtkf.jpg" alt="">
          </div>         
        </div>
      </div>
    </div>
     
		<div class="property">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-sm-6 text-center wow fadeInLeft">
            <img src="__static__/index/images/uisj.jpg" alt="">
          </div>
          <div class="col-lg-6 col-sm-6 wow fadeInRight">
            <h1>
              	平面/视觉/UI设计 <span><h4>PLANE/VISION/UI DESIGN</h4></span>
            </h1>
            <hr>
            <p>
              <h4>战略即执行  所想即所得</h4>								
            </p>
            <p>
              <i class="fa fa-check fa-lg pr-10">
              </i>
              	 我们用15年时间建立了<big>一体化</big>的服务模式；
            </p>
            <p>
              <i class="fa fa-check fa-lg pr-10">
              </i>
               	 <big>专业</big>化团队，分工明确，紧密协作；
            </p>
            <p>
              <i class="fa fa-check fa-lg pr-10">
              </i>
               	 打造中国的品牌<big>策划与设计</big>服务，历练成熟与全面；
            </p>
            <p>
              <i class="fa fa-check fa-lg pr-10">
              </i>
               	  专业项目经理将详细询问您的需求，给出正确建议，帮助您解决问题。
            </p>
          </div>
        </div>
      </div>
    </div>	
      
      
      
      
      
      <div class="row">
        <div class="hiring">
          <h2 class="wow flipInX">
             	我们需要您
          </h2>
          <div class="col-lg-6 col-sm-6 about-hiring">
            <div class="icon-wrap ico-bg round-five wow zoomIn" data-wow-duration="1s" data-wow-delay=".1s">
              <i class="fa fa-user">
              </i>
            </div>
            <div class="content">
              <h3 class="title wow flipInX">
                UI 开发者
              </h3>
              <p>
                1、有一定设计理论知识和足够的审美能力，对流行趋势设计有灵敏触觉和领悟能力； 2 有平面设计与UI设计经验，线上线下均可手到擒来； 3、从事设计行业工作5年以上，美术院校毕业； 4 独立完成20个以上（如一个网站或一本画册算1个）； 5、熟练 PS、AI、Keynote、墨刀等设计工具； 6 能吃苦耐劳，团队合作融洽，接受加班，尽可能长时间稳定与公司一起发展。
              </p>
            </div>
          </div>
          <div class="col-lg-6 col-sm-6 about-hiring">
            <div class="icon-wrap ico-bg round-five wow zoomIn" data-wow-duration="1s" data-wow-delay=".3s">
              <i class="fa fa-user">
              </i>
            </div>
            <div class="content">
              <h3 class="title wow flipInX">
                 	Android 开发者
              </h3>
              <p>
                	 1、1-3年以上手机智能终端软件开发经验； 2、熟悉相应架构，熟悉Java，同时有C++与Cocos2dx开发经验优先； 3、熟悉HTTP、TCP/IP通讯协议，有手机终端软件设计和规划能力，有较好界面开发经验； 4、最好有完整并且上线运营的项目经验； 5、乐于专研和学习，对性能优化，框架设计和代码规范有一定理解； 6、能沉下心工作和提高自己，频繁换工作者不考虑。
              </p>
            </div>
          </div>

          <div class="col-lg-6 col-sm-6 about-hiring">
            <div class="icon-wrap ico-bg round-five wow zoomIn" data-wow-duration="1s" data-wow-delay=".5s">
              <i class="fa fa-user">
              </i>
            </div>
            <div class="content">
              <h3 class="title wow flipInX">
                PHP 工程师
              </h3>
              <p>
                1、3年以上的PHP项目开发经验，具备良好的代码编程习惯及较强的文档编写能力； 2、精通精通thinkphp 、php关系模型、PHP语言，熟练掌握HTML语言、JavaScript脚本语言，熟练掌握mysql； 3、熟练掌握lamp ，熟悉linux服务器搭建与管理； 4、有MySQL优化经验、PHP缓存技术、静态化设计方面的经验者优先； 5、精通Tinkphp框架 熟悉主流框架。
              </p>
            </div>
          </div>
          <div class="col-lg-6 col-sm-6 about-hiring">
            <div class="icon-wrap ico-bg round-five wow zoomIn" data-wow-duration="1s" data-wow-delay=".7s">
              <i class="fa fa-user">
              </i>
            </div>
            <div class="content">
              <h3 class="title wow flipInX" >
                	前端工程师
              </h3>
              <p>
                1、精通HTML5/__static__/index/css/JavaScript/ajax/jquery等 Web 前端技术； 2、熟练开发各种pc端、移动端网站前端页面； 3、掌握各种网络新技术；有美工基础、有跨界开发能力； 4、3年以上工作经验，一直处于工作状态； 5、优秀的逻辑思维能力和分析能力； 6、能独立完成任务又善于团队合作。
              </p>
            </div>
          </div>
        </div>
        <div align="center">
        <button class="btn btn-default" ><a href="<?php echo url('index/contact'); ?>">联系我们</a></button>
        </div>
        <hr />
      </div>
    </div>


    <div class="container" id="tourpackages-carousel">

      <div class="row" data-wow-duration="1s" data-wow-delay=".7s">
        <div class="profile">
          <h2>
            	我们的团队
          </h2>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="thumbnail wow fadeInUp" data-wow-delay=".1s">
              <img src="__static__/index/img/team/member1.jpg" alt="">
              <div class="caption">
                <h4>
                  Thumbnail label
                </h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit
                </p>
                <div class="team-social-link">
                  <a href="#">
                    <i class="fa fa-facebook">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-twitter">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-pinterest">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-linkedin">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-google-plus">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-github">
                    </i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="thumbnail wow fadeInUp" data-wow-delay=".3s">
              <img src="__static__/index/img/team/member2.jpg" alt="">
              <div class="caption">
                <h4>
                  Thumbnail label
                </h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit
                </p>
                <div class="team-social-link">
                  <a href="#">
                    <i class="fa fa-facebook">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-twitter">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-pinterest">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-linkedin">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-google-plus">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-github">
                    </i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="thumbnail wow fadeInUp" data-wow-delay=".5s">
              <img src="__static__/index/img/team/member3.jpg" alt="">
              <div class="caption">
                <h4>
                  Thumbnail label
                </h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit
                </p>
                <div class="team-social-link">
                  <a href="#">
                    <i class="fa fa-facebook">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-twitter">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-pinterest">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-linkedin">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-google-plus">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-github">
                    </i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="thumbnail wow fadeInUp" data-wow-delay=".7s">
              <img src="__static__/index/img/team/member4.jpg" alt="">
              <div class="caption">
                <h4>
                  Thumbnail label
                </h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit
                </p>
                <div class="team-social-link">
                  <a href="#">
                    <i class="fa fa-facebook">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-twitter">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-pinterest">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-linkedin">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-google-plus">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-github">
                    </i>
                  </a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- End row -->

      </div>
      <!-- End container -->
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
