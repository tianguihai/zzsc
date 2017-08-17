<?php
namespace app\scancode\controller;
use think\Controller;
use think\Db;
class Feedback extends Base
{
	
    public function index(){

        $feedbacks=model('feedback')->order('time','desc')->select();
        $this->assign("feedbacks",$feedbacks);
    	return view();
    }
    //删除留言方法
    public function delcontact()
    {
        $id=input('id');
        if(!empty($id)){
            if(Db::name('feedback')->where('id',$id)->delete()){
                $this->success('删除成功！',url('feedback/index'));
            }else{
                $this->error('删除失败！');
            }
        }
    }
    //查看留言方法
    public function reply(){
        $id=input('id');
        $feedback=Db::name('feedback')->where('id',$id)->find();
        Db::name('feedback')->where('id',$id)->update(['status'=>0]);
        $this->assign('feedback',$feedback);
    	return view();
    }
    
}
