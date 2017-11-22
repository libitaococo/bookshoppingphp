<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$cate=M('cate');
    	$select=$cate->limit(3)->select();
    	$this->assign('info',$select);
          /* 	$cid=I('cid');
    	$condition['cid']=$cid; */
    	
    	$listPro=M('pro');
    	//$list=$listPro->query("select p.pid,p.pname,p.psn,p.pnum,p.mprice,p.vprice,p.pdesc,p.pubtime,p.image1,c.cname,p.cid from bookshop_pro as p join bookshop_cate as c on p.cid=c.cid where p.cid={$cid} limit 5")->select();
    	
        /* if(empty($cid)){
    		$list=$listPro->table('__PRO__ as a')->join('__CATE__ as b ON b.cid=a.cid')->field('a.pid,a.pname,b.cname as cid,pname,image1')->limit(5)->select();
    	}else{
    		$list=$listPro->table('__PRO__ as a')->join('__CATE__ as b ON b.cid=a.cid')->where($condition)->field('a.pid,a.pname,b.cname as cid,pname,image1')->limit(5)->select();
    	} */
    	$list=$listPro->table('__PRO__ as a')->join('__CATE__ as b ON b.cid=a.cid')->field('a.pid,a.pname,a.cid,pname,image1')->select();
    	$this->assign('select',$list);
    	
    	$this->display();
// 		$this->redirect("Index/register");	
    }
    public function register() {
    	$this->display();
    }
}