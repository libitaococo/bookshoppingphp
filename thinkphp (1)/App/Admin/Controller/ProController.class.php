<?php
namespace Admin\Controller;
use Think\Controller;

class ProController extends Controller{
	/*商品信息列表*/
	public function listPro(){
		  $cate=M('cate');
		  $select=$cate->select();
		  $this->assign('select',$select);
		  $cid=I('cid');
		  $condition['cid']=$cid;
		  
			$listPro=M('pro');
			if(empty($cid)){
				$count=$listPro->table('__PRO__ as a')->join('__CATE__ as b ON b.cid=a.cid')->field('a.pid,a.pname,b.cname as cid,pname,cname,psn,pubtime,mprice,vprice')->count();
				$Page=new \Think\Page($count,4);
				$show=$Page->show();
				$list=$listPro->table('__PRO__ as a')->join('__CATE__ as b ON b.cid=a.cid')->field('a.pid,a.pname,b.cname as cid,pname,cname,psn,pubtime,mprice,vprice')->order('pid desc')->limit($Page->firstRow.','.$Page->listRows)->select();
				
			}else{
				$count=$listPro->table('__PRO__ as a')->join('__CATE__ as b ON b.cid=a.cid')->where($condition)->field('a.pid,a.pname,b.cname as cid,pname,cname,psn,pubtime,mprice,vprice')->count();
				$Page=new \Think\Page($count,4);
				$show=$Page->show();
				$list=$listPro->table('__PRO__ as a')->join('__CATE__ as b ON b.cid=a.cid')->where($condition)->field('a.pid,a.pname,b.cname as cid,pname,cname,psn,pubtime,mprice,vprice')->order('pid desc')->limit($Page->firstRow.','.$Page->listRows)->select();
				
			}		
			$this->assign('select',$list);	
			$this->assign('page',$show);
			$this->display();
		}
		
		/*商品添加*/
		public function addPro(){
			$list=M('cate');
			$select=$list->select();
			$this->assign('select',$select);
			$this->display();
		}
		public function add(){
			$addPro=D('pro');
			if(!$addPro->create()){
				$this->redirect('Pro/addPro','',1,$addPro->getError());
				}
				$pname=I('pname');
				$cname=I('cname');
				$cid=I('cid');
				$psn=I('psn');
				$pnum=I('pnum');
				$pubtime=date("Y-m-d H:i:s");
				$mprice=I('mprice');
				$vprice=I('vprice');
				$pdesc=I('pdesc');
				
				$config=array(
						'maxSize'=>3145728,//最大文件大小（字节为单位）
						'rootPath'=>'./Public/',
						'savePath'=>'/Upload/Pro/',//上传文件保存路径
						'saveName'=>array('uniqid',''),//上传文件保存规则
						'exts'=>array('jpg','gif','png','jpeg'),//允许上传文件后缀
						'autoSub'=>flase,
				
				);
				$upload=new \Think\Upload($config);//实例化上传类
				$info=$upload->upload();
				if(!$info){//上传失败
					$this->error($upload->getError());
				}else{
					//保存表单信息，包括附加数据
					$addPro->create();
					for($i=0;$i<count($info);$i++){
						$path[$i]='/thinkphp/Public'.$info[$i]["savepath"].$info[$i]["savename"];
					}
					
				$data=array(
						'pid'=>NULL,
						'pname'=>$pname,
						'cname'=>$cname,
						'cid'=>$cid,
						'psn'=>$psn,
						'pnum'=>$pnum,
						'pubtime'=>$pubtime,
						'mprice'=>$mprice,
						'vprice'=>$vprice,
						'pdesc'=>$pdesc,
						'image1'=>$path[0],
				);
				$insert=$addPro->add($data);
				if($insert){
					$this->success('添加成功。',U('Pro/listPro'));
				}else{
					$this->error('添加失败，请稍候重试。',U('Pro/addPro'));
				}
			}
		}
		/*商品详情*/
		public function detailPro(){
		        $detailPro=M('pro');
		        $pid=$_GET['pid'];
		        $lidt=$detailPro->join("__CATE__ as b ON __PRO__.cid=b.cid")->where("pid={$pid}")->field("bookshop_pro.*,b.cname as cname")->select();
		        $this->assign('select',$lidt);
		        $this->display();
		}
		
		/*修改操作*/
		public function editPro(){
			    $list=M('cate');
			    $select=$list->select();
			    $this->assign('info',$select);
			    
				$editPro=M('pro');
		        $pid=$_GET['pid'];
		        $lidt=$editPro->where("pid={$pid}")->select();
		        $this->assign('select',$lidt);
		        $this->display();
		}
		public function edit(){
			$pid=I('pid');
			$cid=I('cid');
			$pname=I('pname');
			$cname=I('cname');
			$psn=I('psn');
			$pnum=I('pnum');
			$mprice=I('mprice');
			$vprice=I('vprice');
			$pdesc=I('pdesc');
            $image1=I('image1');
			
			$editpro=M('pro');
			
		$config=array(
						'maxSize'=>3145728,//最大文件大小（字节为单位）
						'rootPath'=>'./Public/',
						'savePath'=>'/Upload/Pro/',//上传文件保存路径
						'saveName'=>array('uniqid',''),//上传文件保存规则
						'exts'=>array('jpg','gif','png','jpeg'),//允许上传文件后缀
						'autoSub'=>flase,
				
				);
				$upload=new \Think\Upload($config);//实例化上传类
				$info=$upload->upload();
				if(!$info){//上传失败
					$this->error($upload->getError());
				}else{
					//保存表单信息，包括附加数据
					for($i=0;$i<count($info);$i++){
						$path[$i]='/thinkphp/Public'.$info[$i]["savepath"].$info[$i]["savename"];
					}
								
				$data=array(
						'pid'=>$pid,
						'pname'=>$pname,
						'cname'=>$cname,
						'cid'=>$cid,
						'psn'=>$psn,
						'pnum'=>$pnum,
						'mprice'=>$mprice,
						'vprice'=>$vprice,
						'pdesc'=>$pdesc,
						'image1'=>$path[0],
				);
				}
				$where['pid']=$pid;
				$result=$editpro->where($where)->save($data);//写入数据库
				if($result){
					$this->success('修改成功',U('Pro/listpro'));
				}else{
					$this->error('修改失败',U('Pro/listpro'));
				}
			
		}
		
		/*删除操作*/
		public function delPro(){
			$pid=$_GET['pid'];
			$delPro=M('pro');
			$re=$delPro->where("pid={$pid}")->delete();
			if($re){
				$this->redirect("Pro/listPro",null,3,"删除成功，正在跳转中。。。");
			}else{
				$this->redirect("Pro/listPro",null,3,"删除失败，正在跳转中。。。");
			}
		}
}