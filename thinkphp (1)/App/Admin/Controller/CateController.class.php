<?php
namespace Admin\Controller;
use Think\Controller;
class CateController extends Controller{
	/*分类信息列表*/
	public function listCate(){
		$listCate=M('cate');
		$count=$listCate->where('cid')->count();
		$Page=new \Think\Page($count,3);
		$show=$Page->show();
		$select=$listCate->where('cid')->order('cid desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('select',$select);
		$this->assign('page',$show);
		$this->display();
	
	}
	
	/*分类添加*/
	public function addCate(){
		$this->display();
	}
	public function add(){
		$addCate=D('cate');
		if($addCate->create()){
			$cname=I('cname');
			$data=array(
					'cid'=>NULL,
					'cname'=>$cname,
			);
			$insert=$addCate->add($data);
			if($insert){
				$this->success('添加成功。',U('Cate/listCate'));
			}else{
				$this->error('添加失败，请稍候重试。',U('Cate/addCate'));
			}
	
		}else{
			$this->redirect('Cate/addCate','',1,$addCate->getError());
		}
	}
	
	/*修改操作*/
	public function editCate(){
		$cid=$_GET['cid'];
		$editCate=M('cate');
		$select=$editCate->where("cid={$cid}")->select();
		$this->assign('select',$select);
		$this->display();
	}
	public function edit(){
		//实现修改操作
		$editCate=M('cate');
		$cid=$_POST['cid'];
		$where['cid']=$cid;
		$cname=I('cname');
		$data=array(
				'cname'=>$cname,
		);
		$re=$editCate->where($where)->save($data);
		if($re){
			$_SESSION['cname']=$cname;
			$this->redirect('Cate/listCate',null,3,'修改成功，正在跳转中...');
		}else{
			$this->redirect('Cate/editCate',null,3,'修改失败，正在跳转中...');
		}		
		}
	
	/*删除操作*/
        public function delCate(){
         $cid=$_GET['cid'];
         $delCate=M('cate');
         $re=$delCate->where("cid={$cid}")->delete();
         if($re){
         $this->redirect("Cate/listCate",null,3,"删除成功，正在跳转中。。。");
         }else{
            $this->redirect("Cate/listCate",null,3,"删除失败，正在跳转中。。。");
         }
         }
}