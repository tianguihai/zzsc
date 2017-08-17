<?php
namespace app\scancode\controller;
use think\Controller;
use \think\Db;

class Index extends Base
{

    public function index()
    {
       return $this->fetch();
    }

    public function cate()
    {
        $cates=Db::name('cate')->order('order')->select();
        $this->assign("cates",$cates);
        return view();
    }

    //为获取父级分类而准备
    public function addcate(){
        $cates=Db::name('cate')->where('parentid',0)->order('order')->select();
        $this->assign('cates',$cates);
    	return view();
    }

    //使用model添加分类方法
    public function addcates(){
        if(!empty($_POST)){
            $post=input('post.');
            $result=model('cate')->add($post);
            if($result['status']){
                $this->success($result['msg'],url('index/cate'));
            }else{
                $this->error($result['msg']);
            }
        }
    }

    //不使用model删除分类方法
     public function deletecate(){
        $id=input('id');
        if(!empty($id)){
            if(Db::name('cate')->where('id',$id)->delete()){
                $this->success('删除成功！',url('index/cate'));
            }else{
                $this->error('删除失败！');
            }
        }
     }
     //使用model编辑分类方法
     public function editcate(){
        $id=input('id');
        if(!empty($_POST)){
            $post=input('post.');
            $result=model('cate')->edit($post,$id);
            if($result['status']){
                $this->success($result['msg'],url('index/cate'));
            }else{
                $this->error($result['msg']);
            }
        }
        $cates=Db::name('cate')->where('parentid',0)->order('order')->select();
        $this->assign("cates",$cates);
        
        if(!empty($id)){
            $cate=Db::name('cate')->where('id',$id)->find();
            $this->assign('cate',$cate);
        }
        return $this->fetch();
     }

    public function news(){
        $news=Db::name('news')->order('time','desc')->select();
        $this->assign("news",$news);
    	return view();
    }
    //使用model发布新闻
    public function addnews(){
        $news=Db::name('news')->order('time')->select();
        $this->assign("news",$news);

        $cates=Db::name('cate')->order('order')->select();
        $this->assign("cates",$cates);
        //上传图片
        $img = "";

        if (isset($_FILES['img'])) {
            $file=$_FILES['img'];

            $array = explode('.',$_FILES['img']['name']);

            $ext = $array[1]; //文件后缀

            $file_name = date('YmdHis').".".$ext;
           
            $upload_path = ROOT_PATH."/public/"."/upload/img/".date('Y-m-d');
            $img_path = "/upload/img/".date('Y-m-d')."/".$file_name;

            if (!file_exists($upload_path)){
                mkdir($upload_path,0777,true);
            } 

            if(move_uploaded_file($file['tmp_name'], $upload_path."/".$file_name)){
                $img = $upload_path."/".$file_name; //图片路径
            }else{
                return $this->error("图片上传失败，请重新操作");
            }
        }
        //上传图片结束
        if(!empty($_POST)){
            $post=input('post.');
            $post['img'] = $img_path;//图片保存路径
            $result=model('news')->add($post);

            if($result['status']){
                $this->success($result['msg'],url('index/news'));
            }else{
                $this->error($result['msg']);
            }
        }

    	return $this->fetch();
    }
    //使用model编辑新闻
    public function editnews(){
        $id=input('id');

        $img = "";

        if (isset($_FILES['img'])) {
            $file=$_FILES['img'];

            $array = explode('.',$_FILES['img']['name']);

            $ext = $array[1]; //文件后缀

            $file_name = date('YmdHis').".".$ext;
           
            $upload_path = ROOT_PATH."/public/"."/upload/img/".date('Y-m-d');
            $img_path = "/upload/img/".date('Y-m-d')."/".$file_name;

            if (!file_exists($upload_path)){
                mkdir($upload_path,0777,true);
            } 

            if(move_uploaded_file($file['tmp_name'], $upload_path."/".$file_name)){
                $img = $upload_path."/".$file_name; //图片路径
            }else{
                return $this->error("图片上传失败，请重新操作");
            }
        }
        if(!empty($_POST)){
            $post=input('post.');
            $post['img'] = $img_path;
            $result=model('news')->edit($post,$id);
            if($result['status']){
                $this->success($result['msg'],url('index/news'));
            }else{
                $this->error($result['msg']);
            }
        }
        $news=Db::name('news')->select();
        $this->assign("news",$news);
        
        $cates=Db::name('cate')->order('order')->select();
        $this->assign("cates",$cates);

        if(!empty($id)){
            $new=Db::name('news')->where('id',$id)->find();
            $this->assign('new',$new);
        }
        return $this->fetch();
    }
    //使用model删除新闻
     public function deletenews(){
        $id=input('id');
        if(!empty($id)){
        $result=model('news')->del($id);
            if($result['status']){
              $this->success($result['msg'],url('index/news'));
            }else{
                $this->error($result['msg']);
            }
        }
     }



}
