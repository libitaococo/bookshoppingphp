<?php 
namespace Home\Controller;
use Think\Controller;

class CartController extends Controller{
	//添加到购物车
	public function addcart($pid,$cnum,$cid){
		 $addcart=M('cart');
				 $uid=$_SESSION['uid'];
				 
				 //如果是登录状态(购物车数据存入数据库)
				 if($uid){
				 	$list=$addcart->query("select * from bookshop_cart where pid=$pid and uid=$uid");
				 	if($list){
				 		$cnum+=$list[0]['cnum'];
				 	    $data=array(
				 			'cnum'=>$cnum
				 	
				 	);
				 	    $where['pid']=$pid;
				 	    $re=$addcart->where($where)->save($data);
						 	if($re){
						 		$this->success('加入购物车成功',U('Product/detailpro',array('pid'=>$pid,'cid'=>$cid)));
						 	}else{
						 		$this->error('加入购物车失败！',U('Product/detailpro',array('pid'=>$pid,'cid'=>$cid)));
						 	}
						 	
				 }else{
				    	$data=array(
				 			'uid'=>$uid,
				 			'pid'=>$pid,
				 			'ctid'=>NULL,
				 			'cnum'=>$cnum
				 	
				 	);
				 	$insert=$addcart->add($data);
				 	if($insert){
				 		$this->success('加入购物车成功',U('Product/detailpro',array('pid'=>$pid,'cid'=>$cid)));
				 	}else{
						 		$this->error('加入购物车失败！',U('Product/detailpro',array('pid'=>$pid,'cid'=>$cid)));
						 	}
				 } }
				 else{
				 		$this->success('没登录，请登录',U('Index/login'));
				 }
	}
	
	//购物车列表
	public function cart_list(){
		$cart=M('cart');
		$uid=$_SESSION['uid'];
		if($_SESSION['uid']){
		$list=$cart->table("__PRO__ as a,__CART__ as b")->where("a.pid=b.pid and b.uid=".$uid)->field("a.*,b.*")->select();
		$this->assign('cart_date',$list);
		$this->display();
		}else{
			$this->error('没登录，请登录！',U('Index/login'));
		}
		
	}
	
	//购物车删除
	public function cart_list_del($ctid){
		$delcart=M(cart);
		$del=$delcart->where("ctid={$ctid}")->delete();
		if($del){
			$this->redirect("Cart/cart_list",NULL,1,"删除成功！");
		}else{
			$this->redirect("Cart/cart_list",NULL,3,"删除失败！");
		}
		
	}


	
}















?>