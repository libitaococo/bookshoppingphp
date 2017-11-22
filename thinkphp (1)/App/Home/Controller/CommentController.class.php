<?php
namespace Home\Controller;
use Think\Controller;

class CommentController extends Controller{
	/**
	 * 评论提交
	 */
	public function handle()
	{
           $add=M('comment');
           $score=I('score');
           $content=I('content');
           $pid=I('pid');
           $cid=I('cid');
           $uid=$_SESSION['uid'];
           if(isset($_SESSION['uid'])){
           if($add->create()){
           	$date=array(
           			'coid'=>NULL,
           			'score'=>$score,
           			'content'=>$content,
           			'pid'=>$pid,
           			'uid'=>$uid
           	);
           	$insert=$add->add($date);
           	if($insert){
           		$this->success('添加成功！',U('Product/detailpro',array('pid'=>$pid,'cid'=>$cid)),3);
           	}else{
           		$this->error('添加失败！',U('Product/detailpro',array('pid'=>$pid,'cid'=>$cid)),3);
           	}
           }else{
           	    $this->redirect('Product/detailpro','',2,$add->getError());
           }}else{
           	     $this->error('没登录，请登录后再留言！',U('Index/login'),3);
           }  
	}
	
	public function del($coid,$pid,$cid){
		$del=M('comment');
		$uid=$_SESSION['uid'];
		if(isset($_SESSION['uid'])){
			$re=$del->where("coid={$coid} and uid={$uid}")->delete();
			if($re){
				$this->success('删除成功！',U('Product/detailpro',array('pid'=>$pid,'cid'=>$cid)),3);
			}else{
				$this->error('你无权删除！',U('Product/detailpro',array('pid'=>$pid,'cid'=>$cid)),3);
			}
		}else{
			$this->error('没登录，请登录',U('Index/login'),3);
		}
		
	}

	
	
}