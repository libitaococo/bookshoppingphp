<?php
namespace Home\Controller;
use Think\Controller;

class OrderController extends Controller{
	//生成订单
	public function addorder(){
		//订单结算
		$addorder=M('order');
		$oprice=I('oprice');
		$onum=I('onum');
        $oname=date('YmdHis').rand(100000, 999999);
        $uid=$_SESSION['uid'];
        

        $data=array(
        		'oid'=>NULL,
        		'oprice'=>$oprice,
        		'onum'=>$onum,
        		'oname'=>$oname,
        		'uid'=>$uid
        );
        $insert=$addorder->add($data);
        
      $cart=M('cart')->where("uid='{$uid}'")->select();
       $pid_arr=array();
       foreach ($cart as $k=>$v){
       	    $pid_arr[]=$v['pid'];
       	    $cnum[]=$v['cnum'];
       }
       
       $pids=implode(',', $pid_arr);//把商品id由数组变为逗号隔开
       $pro=M('pro')->where("pid in ($pids)")->select();
        if($insert){        
         	foreach($pro as $k=>$v){
         		$order_data=array(
         				'odid'=>NULL,
         				'oname'=>$oname,
         				'pid'=>$v['pid'],
         				'pname'=>$v['pname'],
         				'mprice'=>$v['mprice'],
         				'vprice'=>$v['vprice'],
         			    'cnum'=>$cnum[$k],
         				'sum'=>$cnum[$k]*$v['vprice']
         				//'cnum'=>2,
         				//'sum'=>2*$v['vprice']
         		);
         		$order_data=M('order_data')->add($order_data);
         	}}
         	$rst=M('cart')->where("uid='{$uid}'")->delete();//订单提交后删除用户购物车
         
         if($rst){
         	$this->success('订单提交成功！',U('Cart/cart_list'),3);
         }else{
         	$this->error('订单提交失败!',U('Cart/cart_list'),3);
         }
	}
}