<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
         $this->display();
        //$this->redirect('Index/index');
    }
    public function show(){
    	//$array['adminname']=$_SESSION['adminname'];
    	$this->assign('adminname',I('session.adminname'));
    	$this->display();
    }
}