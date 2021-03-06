<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:76:"D:\phpStudy\WWW\scancode\public/../application/scancode\view\index\cate.html";i:1502192776;s:79:"D:\phpStudy\WWW\scancode\public/../application/scancode\view\common\header.html";i:1502248770;s:78:"D:\phpStudy\WWW\scancode\public/../application/scancode\view\common\aside.html";i:1502275551;s:82:"D:\phpStudy\WWW\scancode\public/../application/scancode\view\common\copyright.html";i:1502104224;s:79:"D:\phpStudy\WWW\scancode\public/../application/scancode\view\common\footer.html";i:1502097616;}*/ ?>
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
            	<div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <a class="btn btn-sm btn-primary" href="<?php echo url('index/addcate'); ?>"><i class="fa fa-plus"></i> 添加分类</a>
                    </div>
                    <div class="ibox-content table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example newslist" id="logtable">
                            <thead>
                                <tr>
                                    <th>编号</th>
                                    <th>分类名</th>
                                    <th>父ID</th>
                                    <th>排序</th>
                                    <th>状态</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if(is_array($cates) || $cates instanceof \think\Collection || $cates instanceof \think\Paginator): if( count($cates)==0 ) : echo "" ;else: foreach($cates as $key=>$c): ?>
                                <tr>
                                    <td><?php echo $c['id']; ?></td>
                                    <td><?php echo $c['catename']; ?></td>
                                    <td><?php echo $c['parentid']; ?></td>
                                    <td><?php echo $c['order']; ?></td>
                                    <td>
                                    <?php if($c['status']==1): ?> 开启
                                    <?php else: ?> 关闭
                                    <?php endif; ?>
                                    </td>
                                    <td>
                                       <a  href ="<?php echo url('index/editcate',array('id'=>$c['id'])); ?>" class="btn btn-primary">编辑</a>
                                       <a href ="<?php echo url('index/deletecate',array('id'=>$c['id'])); ?>" class="btn btn-danger">删除</a>
                                    </td>
                                </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


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
    <script src="assets/js/echarts.min.js"></script>
    <script>
    var myChart = echarts.init(document.getElementById('main'));
    option = {
        title: {
            text: ''
        },
        tooltip: {},
        animationDurationUpdate: 1500,
        animationEasingUpdate: 'quinticInOut',
        label: {
            normal: {
                show: true,
                textStyle: {
                    fontSize: 12
                },
            }
        },
        series: [

            {
                type: 'graph',
                layout: 'force',
                symbolSize: 45,
                focusNodeAdjacency: false,
                roam: true,
                categories: [{
                    name: '1级',
                    itemStyle: {
                        normal: {
                            color: "#eb605f",
                        }
                    }
                }, {
                    name: '2级',
                    itemStyle: {
                        normal: {
                            color: "#4e89c6",
                        }
                    }
                }],
                label: {
                    normal: {
                        show: true,
                        textStyle: {
                            fontSize: 10
                        },
                    }
                },
                force: {
                    repulsion: 800
                },
                edgeSymbolSize: [4, 50],
                edgeLabel: {
                    normal: {
                        show: true,
                        textStyle: {
                            fontSize: 10
                        },
                        formatter: "{c}"
                    }
                },
                data: [{
                    //数据部分
                    /*
                    name:真实姓名
                    draggable:是否可拖动
                    category:默认1
                    */
                    "name": "我",
                    "draggable": true,
                }, {
                    "name": "001",
                    "category": 1,
                    "draggable": true,
                }, {
                    "name": "002",
                    "category": 1,
                    "draggable": true,
                }, {
                    "name": "003",
                    "category": 1,
                    "draggable": true,
                }, {
                    "name": "004",
                    "category": 1,
                    "draggable": true,
                }, {
                    "name": "005",
                    "category": 1,
                    "draggable": true,
                }, {
                    "name": "006",
                    "category": 1,
                    "draggable": true,
                }, {
                    "name": "007",
                    "category": 1,
                    "draggable": true,
                }],
                links: [{
                    //关系部分
                    /*
                    source:对应以上数据name的i值,如link里面第12条数据里的source为1，则此人在data数据第2条的名下；
                    target:设为i值即可
                    value:关系
                    */
                    "source": 0,
                    "target": 1,
                    "value": "推荐"
                }, {
                    "source": 0,
                    "target": 2,
                    "value": "推荐"
                }, {
                    "source": 0,
                    "target": 3,
                    "value": "推荐"
                }, {
                    "source": 0,
                    "target": 4,
                    "value": "推荐"
                }, {
                    "source": 1,
                    "target": 5,
                    "value": "推荐"
                }, {
                    "source": 0,
                    "target": 6,
                    "value": "推荐"
                }, {
                    "source": 4,
                    "target": 7,
                    "value": "推荐"
                }]

            }
        ]
    };
    myChart.setOption(option)
    </script>
</body>

</html>
