<?php
namespace app\scancode\controller;
use \think\Controller;
use \think\Db;
class Login extends Controller
{
    public function index()
    {
       return $this->fetch();
    }

    public function checklogin(){
    	if(!empty($_POST)){
    		$post=input('post.');
    		$user=Db::name('admin')->where('username',$post['username'])->find();
    		if($user){
    			if(md5($post['password']) == $user['password']){
    				session('admin.id',$user['id']);
    				$this->success('登陆成功！',url('index/index'));
    			}else{
    				$this->error('登录账号或密码错误！');
    			}
    		}else{
    			$this->error('登录账号或密码错误！');
    		}
    	}
    }

    public function checkout(){
    	session('admin.id',null);
    	$this->success('退出成功！',url('login/index'));
    }

}
