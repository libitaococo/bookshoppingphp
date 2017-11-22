<?php
//管理员登录登出功能
namespace Admin\Controller;
use Think\Controller;
class LogController extends Controller {

	/*登录*/
	public function login(){
		header("Content-Type:text/html;charset=utf-8");
		$adminname=I('adminname');
		$adminpassword=I('adminpassword');
		if(isset($_POST['submit'])){
			if(!empty($adminname)&&!empty($adminpassword)){
					$admin=M('admin');
					$select=$admin->query("select * from bookshop_admin where adminname='$adminname' and adminpassword='$adminpassword'");
					if($select){
						////将用户名和密码保存在session中
						session_start();
						$_SESSION['adminname']=$adminname;
						$_SESSION['adminpasword']=$adminpassword;
						$this->redirect('Index/home','',5,"登陆成功！前往后台管理中心");
					}else{
						$this->redirect('Index/index','',5,"用户名或者密码错误");
					}
			}else{
				$this->redirect('Index/index','',5,"请填写用户名以及密码");
			}
		}
	}

	/*退出登录*/
	public function logout(){
		if(session('?adminname')){
			session('adminname',null);
			session('adminpassword',null);
			$this->success('您已成功退出，请重新登录。',U('Index/login'));
		}else{
			$this->error('您还未登录，请登录。',U('Index/login'));
		}
	}
}