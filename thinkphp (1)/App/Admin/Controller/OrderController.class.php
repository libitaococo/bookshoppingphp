<?php
namespace Admin\Controller;
use Think\Controller;

class OrderController extends Controller{
	/*订单信息列表*/
	 public function listOrder(){
	 	$listOrder=M('order');
	 	$count=$listOrder->table('__ORDER__ as a')->join('__USER__ as b ON a.uid=b.uid')->field('a.*,b.user')->count();
	 
	 	$Page=new \Think\Page($count,5);
	 	$show=$Page->show();
	 	$select=$listOrder->table('__ORDER__ as a')->join('__USER__ as b ON a.uid=b.uid')->field('a.*,b.user')->order('oid desc')->limit($Page->firstRow.','.$Page->listRows)->select();
	 
	 	$this->assign('select',$select);
	 	$this->assign('page',$show);
	 	$this->display();
	 }
	 
	 /*订单信息详情列表*/
	 public function detailOrder($oname){
	 	$detailOrder=M('order_data');
	 	$list=$detailOrder->query("select * from bookshop_order_data where oname=$oname");
	 	$this->assign('select',$list);
	 	$this->display();
	 }
	 
	 /*订单删除*/
	 public function delOrder(){
	 	$oid=$_GET['oid'];
	 	$delOrder=M('order');
	 	$re=$delOrder->where("oid={$oid}")->delete();
	 	if($re){
	 		$this->success('删除成功！',U('Order/listOrder'));
	 	}else {
	 		$this->error('删除失败！',U('Order/listOrder'));
	 	}
	 }
}