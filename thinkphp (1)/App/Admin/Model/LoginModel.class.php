<?php
namespace Admin\Model;
use Think\Model;
class AdminModel extends Model{

	protected $_validate=array(
			array('adminname','/^[\x{4e00}-\x{9fa5}A-Za-z]+$/u','用户名格式不正确！'),
			array('adminpassword','/[\S\w{6,18}]$/','密码格式不正确！'),
	);
}