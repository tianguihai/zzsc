<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
class Index extends controller
{

    public function __construct(){
        parent::__construct();
        $news=Db::name('news')->where('kind','行业新闻')->order('time','desc')->select();
        $this->assign('news',$news);

        $cates=Db::name('cate')->where('status',1)->where('parentid',0)->order('order')->select();
        foreach ($cates as $k => $v) {
            $childs=Db::name('cate')->where('status',1)->where('parentid',$v['id'])->select();
            if($childs){
                $cates[$k]['childs']=$childs;
            }
        }
        $this->assign('cates',$cates);

    }

    public function index()
    {
       return $this->fetch();
    }

    public function about()
    {
        return $this->fetch();
    }

    public function enterprises()
    {
        $news=Db::name('news')->where('kind','企业动态')->order('time','desc')->select();
        $this->assign('news',$news);
        return $this->fetch();
    }

    public function news()
    {
        //构造方法里面有
        // $news=Db::name('news')->where('kind','行业新闻')->order('time','desc')->select();
        // $this->assign('news',$news);
        return $this->fetch();
    }

    public function newsdetail()
    {
        $id=input('id');
        $new=Db::name('news')->where('id',$id)->find();
        $this->assign('new',$new);
        return $this->fetch();
    }

    public function qianzhan()
    {
        $qianzhan=Db::name('news')->where('kind','前瞻')->select();
        $this->assign('qianzhan',$qianzhan);
        return $this->fetch();
    }

    //导航显示方法
    public function header()
    {
        $cates=Db::name('cate')->order('order')->select();
        $this->view->assign("cates",$cates);
        return view('common/header');
    }

    public function contact()
    {
       return $this->fetch();
    }

    //添加留言方法
    public function contacts()
    {
        if(!empty($_POST)){
            $post=input('post.');
            $result=model('feedback')->add($post);
            if($result['status']){
                $this->success($result['msg'],url('index/contact'));
            }else{
                $this->error($result['msg']);
            }
        }
    }



}
