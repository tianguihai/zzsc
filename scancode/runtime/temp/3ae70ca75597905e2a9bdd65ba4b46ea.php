<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"D:\phpStudy\WWW\scancode\public/../application/scancode\view\login\index.html";i:1502450791;}*/ ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>中资思看后台管理系统登录</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="__static__/admin/img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="__static__/admin/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Fonts from Font Awsome -->
    <link rel="stylesheet" href="__static__/admin/css//font-awesome.min.css">
    <!-- CSS Animate -->
    <link rel="stylesheet" href="__static__/admin/css//animate.css">
    <!-- Custom styles for this theme -->
    <link rel="stylesheet" href="__static__/admin/css//main.min.css">
    <!-- Fonts -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> -->
    <!-- Feature detection -->
    <script src="__static__/admin/js/modernizr-2.6.2.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="__static__/admin/js/html5shiv.js"></script>
    <script src="__static__/admin/js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="loginbg">
    <section id="login-container">
        <div class="row">
            <div class="col-md-3" id="login-wrapper">
                <div class="panel panel-primary animated flipInY">
                    <div class="panel-heading loginheader">
                        <h3 class="panel-title">
                            后台会员登录
                        </h3>
                    </div>
                    <div class="panel-body">
                        <p>请在此输入您的登陆信息</p>
                        <form class="form-horizontal logininput" role="form" method="post" action="<?php echo url('login/checklogin'); ?>">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" name="username" class="form-control"  placeholder="登陆账号" required="">
                                    <i class="fa fa-user"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="登陆密码" required="">
                                    <i class="fa fa-lock"></i>
                                </div>
                            </div>
                           <!--  <div class="form-group">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" name="code" placeholder="验证码" required="" >
                                            <i class="fa fa-lock"></i></div>
                                        <div class="col-md-5">
                                            <div class="logincode"><img src="<?php echo captcha_src(); ?>" alt="captcha" /></div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-block loginsub">登陆</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="beian">粤ICP备88888888号</div>
            </div>
        </div>
    </section>
    <!--Global JS-->
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/2.2.0/jquery.min.js"></script>
    <!-- <script src="__static__/admin/js/jquery-1.10.2.min.js"></script> -->
    <script src="__static__/admin/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="__static__/admin/plugins/waypoints/waypoints.min.js"></script>
    <script src="__static__/admin/plugins/nanoScroller/jquery.nanoscroller.min.js"></script>
    <script src="__static__/admin/plugins/layer/layer.js"></script>
    <script src="__static__/admin/js/application.js"></script>
</body>

</html>
