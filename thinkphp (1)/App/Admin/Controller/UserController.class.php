<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
	public function listUser(){
		/*用户信息列表*/
		$listUser=M('user');
		$count=$listUser->where('uid')->count();
		$Page=new \Think\Page($count,2);
		$show=$Page->show();
		$select=$listUser->where('uid')->order('uid desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('select',$select);
		$this->assign('page',$show);
		$this->display();;

	}
		/*删除操作*/
     public function delUser(){
         $uid=$_GET['uid'];
         $delUser=M('user');
         $re=$delUser->where("uid={$uid}")->delete();
         if($re){
         $this->redirect("User/listUser",null,3,"删除成功，正在跳转中。。。");
         }else{
            $this->redirect("User/listUser",null,3,"删除失败，正在跳转中。。。");
         }
         }
}