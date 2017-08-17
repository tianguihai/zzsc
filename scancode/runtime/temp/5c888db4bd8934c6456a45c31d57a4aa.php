<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:79:"D:\phpStudy\WWW\scancode\public/../application/scancode\view\index\addnews.html";i:1502343235;s:79:"D:\phpStudy\WWW\scancode\public/../application/scancode\view\common\header.html";i:1502248770;s:78:"D:\phpStudy\WWW\scancode\public/../application/scancode\view\common\aside.html";i:1502275551;s:82:"D:\phpStudy\WWW\scancode\public/../application/scancode\view\common\copyright.html";i:1502104224;s:79:"D:\phpStudy\WWW\scancode\public/../application/scancode\view\common\footer.html";i:1502097616;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>中资思看后台管理系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    
</head>

<body>
    <section id="container">
        <!-- Favicon -->
<link rel="shortcut icon" href="__static__/admin/img/favicon.ico" type="image/x-icon">
<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="__static__/admin/plugins/bootstrap/css/bootstrap.min.css">
<!-- Fonts from Font Awsome -->
<link rel="stylesheet" href="__static__/admin/css/font-awesome.min.css">
<!-- CSS Animate -->
<link rel="stylesheet" href="__static__/admin/css/animate.css">
<!-- Custom styles for this theme -->
<link rel="stylesheet" href="__static__/admin/css/main.min.css">
<!-- Vector Map  -->
<link rel="stylesheet" href="__static__/admin/plugins/jvectormap/css/jquery-jvectormap-1.2.2.css">
<!-- ToDos  -->
<link rel="stylesheet" href="__static__/admin/plugins/todo/css/todos.css">
<!-- Morris  -->
<link rel="stylesheet" href="__static__/admin/plugins/morris/css/morris.css">
<!-- iCheck-->
<link rel="stylesheet" href="__static__/admin/plugins/icheck/css/_all.css">
<!-- Fonts -->
<link rel="stylesheet" href="__static__/admin/css/toastr.css">
<script src="__static__/admin/js/modernizr-2.6.2.min.js"></script>
<header id="header">
    <!--logo start-->
    <div class="brand">
        <a href="index.html" class="logo">中资思看系统</a>
    </div>
    <!--logo end-->
    <div class="toggle-navigation toggle-left">
        <button type="button" class="btn btn-default" id="toggle-left" data-toggle="tooltip" data-placement="right" title="打开/折叠菜单">
            <i class="fa fa-bars"></i>
        </button>
    </div>
    <!-- <div class="user-nav">
        <ul>
            <li class="dropdown messages">
                <span class="badge badge-danager animated bounceIn" id="new-messages">5</span>
                <button type="button" class="btn btn-default dropdown-toggle options" id="toggle-mail" data-toggle="dropdown">
                    <i class="fa fa-envelope"></i>
                </button>
            </li>
            <li class="profile-photo">
                <img src="__static__/admin/img/avatar1.gif" alt="" class="img-circle">
            </li>
            <li class="dropdown settings">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      username <i class="fa fa-angle-down"></i>
                    </a>
                <ul class="dropdown-menu animated fadeInDown">
                    <li>
                        <a href="#"><i class="fa fa-cog"></i> 修改密码</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-power-off"></i> 安全退出</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div> -->
</header>

        <aside class="sidebar">
    <div id="leftside-navigation" class="nano">
        <ul class="nano-content">
            <li class="sub-menu active">
                <a href="<?php echo url('index'); ?>"><i class="fa fa-home"></i><span>用户首页</span></a>
            </li>
            <li class="sub-menu">
                <a href="javascript:void(0);"><i class="fa fa-cog"></i><span>分类管理</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                <ul>
                    <li><a href="<?php echo url('index/cate'); ?>">分类</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:void(0);"><i class="fa fa-shopping-cart"></i><span>新闻管理</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                <ul>
                    <li><a href="<?php echo url('index/news'); ?>">新闻</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:void(0);"><i class="fa fa-credit-card"></i><span>反馈</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                <ul>
                    <li><a href="<?php echo url('feedback/index'); ?>">反馈</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="<?php echo url('login/checkout'); ?>"><i class="fa fa-sign-out"></i><span>安全退出</span></a>
            </li>
        </ul>
    </div>
</aside>



        <!--#include file="header.html"-->
        <!--#include file="aside.html"-->
        <section class="main-content-wrapper">
            <section id="main-content">              
            	<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>发布新闻</h5>
                    </div>
                    <div class="ibox-content">
                        <form class="form-horizontal" id="signupForm" method="POST" action="<?php echo url('index/addnews'); ?>" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">标题：</label>
                                <div class="col-sm-8">
                                    <input name="title" class="form-control"  value="" type="text" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">选择分类：</label>
                                <div class="col-sm-8">
                                    <select name="kind" class="form-control">
                                        <?php if(is_array($cates) || $cates instanceof \think\Collection || $cates instanceof \think\Paginator): if( count($cates)==0 ) : echo "" ;else: foreach($cates as $key=>$vo): ?>
                                        <option value="<?php echo $vo['catename']; ?>" >
                                            <?php echo $vo['catename']; ?> 
                                        </option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>
                           <div class="form-group">
                                <label class="col-sm-3 control-label">封面图：</label>
                                <div class="col-sm-8">
                                <ul id="warp">
                                    <li class="ehsanbay-upload-file positive">
                                        <input type="file" multiple="true" name="img">
                                    </li>
                                </ul>    
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">简介：</label>
                                <div class="col-sm-8">
                                   <textarea class="form-control" rows="6" name="summary" ></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">内容：</label>
                                <div class="col-sm-8">
                                   <script id="editor" name="content" type="text/plain" style="width:100%;height:400px;">
                                   </script> 
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-3">
                                    <button class="btn btn-primary" type="submit">确认操作</button>
                                    <a class="btn btn-info" href="javascript:history.go(-1);">取消返回</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <br>
        <br>
            </section>    
            <!--#include file="copyright.html"-->
             <footer>
    <div class="copyright">Copyright &copy 中资思看 2017 All Rights Reserved</div>
</footer>

        </section>
    </section>


    <!--#include file="footer.html"-->
     <script src="__static__/admin/js/jquery-1.10.2.min.js"></script>
<script src="__static__/admin/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="__static__/admin/js/application.js"></script>
<!--菜单cookie记忆-->
<script src="__static__/admin/js/jquery.cookie.js"></script>
<script src="__static__/admin/js/menucookie.js"></script>
<!--表单验证-->
<script src="__static__/admin/js/jquery.validate.min.js"></script>
<script src="__static__/admin/js/form-validate.min.js"></script>
<script src="__static__/admin/js/messages_zh.min.js"></script>
<!--toastr消息提示-->
<script src="__static__/admin/js/toastr.min.js"></script>
<!--复制内容插件-->
<script src="__static__/admin/js/jquery.zclip.js"></script>
<!--icheck-->
<script src="__static__/admin/plugins/icheck/js/icheck.min.js"></script>
<!--自定义js信息-->
<script src="__static__/admin/js/main.js"></script>
     <script type="text/javascript" src="__static__/admin/ueditor/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="__static__/admin/ueditor/ueditor.all.js"></script>
   <script type="text/javascript">
        var ue = UE.getEditor('editor');
    </script>
</body>

</html>
