<?php
namespace Home\Controller;
use Think\Controller;
class ProductController extends Controller{
	
	public function detailpro($pid,$cid){
		$cate=M('cate');
		//$select=$cate->select();
		$select=$cate->query("select cid,cname from bookshop_cate where cid=$cid");
		$this->assign('u',$select);
		
		 $pro=M('pro');
		 $list=$pro->query("select pid,pname,pnum,psn,mprice,vprice,image1,pdesc from bookshop_pro where pid=$pid");
		 $this->assign('s',$list);
		 
		 $comment=M('comment');
		// $info=$comment->table("__COMMENT__ as a,__USER__ as b")->where("a.uid=b.uid and a.pid=$pid")->field("a.*,b.*")->select();
		 
		 $count=$comment->table("__COMMENT__ as a,__USER__ as b")->where("a.uid=b.uid and a.pid=$pid")->field("a.*,b.*")->count();// 查询满足要求的总记录数
		 $Page=new \Think\Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数(3)
		 $show=$Page->show();// 分页显示输出
		 // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		 $list=$comment->table("__COMMENT__ as a,__USER__ as b")->where("a.uid=b.uid and a.pid=$pid")->field("a.*,b.*")->order('coid desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		// $this->assign('litd',$info);
		 $this->assign('litd',$list);// 赋值数据集
		 $this->assign('page',$show);// 赋值分页输出
		 $this->display();

		 /*if($list){
		 	$this->success('',U('Index/detailpro'),100);
		 }else{
				$this->error('',U('Index/index'));
			} 	 */
	}

}
