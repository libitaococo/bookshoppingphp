<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends Controller{
	/*管理员信息列表*/
	public function listAdmin(){
		$listAdmin=M('admin');
		$count=$listAdmin->where('id')->count();
		$Page=new \Think\Page($count,5);
		$show=$Page->show();
		$select=$listAdmin->where('id')->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('select',$select);
		$this->assign('page',$show);
		$this->display();
	
	}
	
	/*管理员添加*/
	public function addAdmin(){
		$this->display();
	}
	public function add(){
		$addAdmin=D('admin');
		if($addAdmin->create()){
			$adminname=I('adminname');
			$adminpassword=I('adminpassword');
			$data=array(
					'id'=>NULL,
					'adminname'=>$adminname,
					'adminpassword'=>$adminpassword,
			);
			$insert=$addAdmin->add($data);
			if($insert){
				$this->success('添加成功。',U('Admin/listAdmin'));
			}else{
				$this->error('添加失败，请稍候重试。',U('Admin/addAdmin'));
			}
				
		}else{
			$this->redirect('Admin/addAdmin','',1,$addAdmin->getError());
		}
	}

	/*修改操作*/
	public function editAdmin(){
		$editAdmin=M('admin');
		$id=$_GET['id'];
		$select=$editAdmin->where("id={$id}")->select();
		$this->assign('select',$select);
		$this->display();
	}
	public function edit(){
		//实现修改操作
		$editAdmin=M('admin');
		$id=$_POST['id'];
		$where['id']=$id;
		$adminname=I('adminname');
		$password=I('adminpassword');
		$data=array(
				'adminname'=>$adminname,
				'adminpassword'=>$password,
		);
		$re=$editAdmin->where($where)->save($data);
		if($re){
			$_SESSION['adminname']=$adminname;
			$_SESSION['adminpassword']=$adminpassword;
			$this->redirect('Admin/listAdmin',null,3,'修改成功，正在跳转中...');
		}else{
			$this->redirect('Admin/editAdmin',null,3,'修改失败，正在跳转中...');
		}		
		}
		
		/*删除操作*/
     public function delAdmin(){
         $id=$_GET['id'];
         $delAdmin=M('admin');
         $re=$delAdmin->where("id={$id}")->delete();
         if($re){
         $this->redirect("Admin/listAdmin",null,3,"删除成功，正在跳转中。。。");
         }else{
            $this->redirect("Admin/listAdmin",null,3,"删除失败，正在跳转中。。。");
         }
         }

}
	
	

