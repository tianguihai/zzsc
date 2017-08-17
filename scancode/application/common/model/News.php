<?php
namespace app\common\model;

use think\Model;
use think\Validate;
class News extends Model
{
	// 添加新闻
	public function add($post){
		$post['time']=date('Y-m-d H:i:s');
		// 信息验证开始
		$rule = [
			'title' =>'require|max:100'
			
		];
		$msg = [
			'title.require' => '标题必须填写',
			'title.max' => '标题最多100个字符'
			
		];
		$validate = new Validate($rule, $msg);
		if (!$validate->check($post)) {
		    return array('status'=>false,'msg'=>$validate->getError());
		}
		//信息验证结束
		$news=new News($post);
		$news->save();
		if($news){
			return array('status'=>true,'msg'=>'添加成功！');
		}else{
			return array('status'=>false,'msg'=>'添加失败！');
		}
	}

	//修改新闻
	public function edit($post,$id){
		$post['time']=date('Y-m-d H:i:s');
		$news=new News;
		$result=$news->update($post);

		if($result){
			return array('status'=>true,'msg'=>'修改成功！');
		}else{
			return array('status'=>false,'msg'=>'修改失败！');
		}
	}

	//删除新闻
	public function del($id){
		$result=News::where('id',$id)->delete();
		if($result){
			return array('status'=>true,'msg'=>'删除成功！');
		}else{
			return array('status'=>false,'msg'=>'删除失败！');
		}
	}

}