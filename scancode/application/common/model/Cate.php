<?php
namespace app\common\model;

use think\Model;
use think\Validate;
class Cate extends Model
{
	// 添加分类
	public function add($post){
		$post['time']=date('Y-m-d H:i:s');
		// 信息验证开始
		$rule = [
			'catename' =>'require|max:25',
			'order' =>'require',
			'url' =>'require',
			
		];
		$msg = [
			'catename.require' => '名称必须填写',
			'catename.max' => '名称最多25个字符',
			'order' =>'排序必须填写',
			'url' =>'链接地址必须填写',
			
		];
		$validate = new Validate($rule, $msg);
		if (!$validate->check($post)) {
		    return array('status'=>false,'msg'=>$validate->getError());
		}
		//信息验证结束
		$cate=new Cate($post);
		$cate->save();
		if($cate){
			return array('status'=>true,'msg'=>'添加成功！');
		}else{
			return array('status'=>false,'msg'=>'添加失败！');
		}
	}

	//修改分类
	public function edit($post,$id){
		$post['time']=date('Y-m-d H:i:s');
		$cate=new Cate;
		$result=$cate->update($post);

		if($result){
			return array('status'=>true,'msg'=>'修改成功！');
		}else{
			return array('status'=>false,'msg'=>'修改失败！');
		}
	}

}