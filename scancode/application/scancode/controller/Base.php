<?php
namespace app\scancode\controller;
use \think\Controller;
class Base extends Controller
{
	public function __construct(){
		parent::__construct();
		$this->checklogin();
	}

    public function checklogin()
    {
       if(!session('admin.id')){
       		return $this->error("请先登录",url("login/index"));
       }
    }
}