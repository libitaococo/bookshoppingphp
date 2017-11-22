<?php
namespace Home\Controller;
use Think\Controller;

/**
 * Class LoginController
 * @package Home\Controller
 */
Class LoginController extends Controller{
	/**
	 * 用户登录
	 */
	public function login()
	{
	$username=I('user'); // 获取用户名
    $password=I('password');   // 获取密码
    if(isset($_POST['button2'])){
    if(!empty($username)&&!empty($password)){//如果用户名和密码非空
          $user=M('user');// 实例化模型
          $select=$user->query("select *from bookshop_user where user='$username' and password='$password'"); // 执行查询
          if($select){// 如果存在该用户
          //将用户名和密码保存在session中
          session_start();
          $_SESSION['uid']=$select[0]['uid'];
          $_SESSION['user']=$username;
          $_SESSION['password']=$password;
          //跳转到用户中心
          $this->redirect('Index/index','',5,'登录成功！前往用户中心!...页面跳转中...');
          }else{  
          	// 如果用户不存在
            $this->redirect('Index/login','',5,'用户名或密码错误!...页面跳转中...');
          }
 
   }else{ 
   	// 如果用户名或密码未填写
        $this->redirect('Index/login','',5,'请填写用户名或密码!...页面跳转中...');
  }
 
}
	}
	
	/**
	 * 用户注册
	 */
	public function register()
	{
		// 判断提交方式 做不同处理
		if(IS_POST){
			// 实例化User对象
			$user=D('user');
			// 自动验证 创建数据集
			if(!$data=$user->create()){
				// 防止输出中文乱码
				header("Content-type: text/html; charset=utf-8");
				exit($user->getError());
			}
			
			//插入数据库
			if($id=$user->add($data)){
				$this->success('注册成功!',U('Index/login'),2);
			}else {
				$this->error('注册失败!');
			}
		}else {
			$this->display();
		}
	}
			
	/**
	 * 用户注销
	 */
	/*退出登录*/
	public function logout(){
		if(session('user')){
			session('user',null);
			session('uid',null);
			session('password',null);
			$this->success('您已成功退出，请重新登录。',U('Index/login'));
		}else{
			$this->error('您还未登录，请登录。',U('Index/login'));
		}
	}
	
} 
