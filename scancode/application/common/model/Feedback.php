<?php
namespace app\common\model;

use think\Model;
use think\Validate;
class Feedback extends Model
{	

	//添加留言模型
	public function add($post){
		$post['time']=date('Y-m-d H:i:s');
		//信息验证开始
		$rule = [
			'name' =>'require|max:25',
			'email' => 'email',
			'phone' => 'number|length:11',
		];
		$msg = [
			'name.require' => '姓名必须填写',
			'name.max' => '姓名最多25个字符',
			'email' => '邮箱格式错误',
			'phone.number' => '手机号码须为数字',
			'phone.length' => '手机号码格式错误',
		];
		$validate = new Validate($rule, $msg);
		if (!$validate->check($post)) {
		    return array('status'=>false,'msg'=>$validate->getError());
		}
		//信息验证结束
		$feedback=new Feedback($post);
		$feedback->save();
		if($feedback){
			return array('status'=>true,'msg'=>'添加成功！');
		}else{
			return array('status'=>false,'msg'=>'添加失败！');
		}


		
	}
}