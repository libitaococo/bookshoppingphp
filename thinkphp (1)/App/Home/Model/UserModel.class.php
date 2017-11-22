<?php
namespace Home\Model;
use Think\Model;


class UserModel extends Model{
	/**
	 * 自动验证
	 * self::EXISTS_VALIDATE 或者0 存在字段就验证（默认）
	 * self::MUST_VALIDATE 或者1 必须验证
	 * self::VALUE_VALIDATE或者2 值不为空的时候验证
	 */
	protected $_validate=array(
			array('name','require','昵称不能为空!'),//默认情况下用正则进行验证
			array('user','require','用户名不能为空!'),//默认情况下用正则进行验证
			array('user','','该用户名已经被注册!',0,'unique',1),// 在新增的时候验证name字段是否唯一
			array('email','','该邮箱已被占用!',0,'unique',1),// 新增的时候email字段是否唯一
			// 正则验证密码 [需包含字母数字以及@*#中的一种,长度为6-22位]
			array('password','/^([a-zA-Z0-9@*#]{6,22})$/','密码格式不正确，请重新输入!',0),
			array('passwordConfirm','password','确认密码不正确',0,'confirm'),// 验证确认密码是否和密码一致
			array('email','email','邮箱格式不正确'),// 内置正则验证邮箱格式
			array('verify','verify_check','验证码错误',0,'function'),// 判断验证码是否正确
			
	);
	/**
	 * 自动完成
	 */
	/*protected $_auto=array(
			array('password','md5',3,'function'),// 对password字段在新增和编辑的时候使md5函数处理
	);*/
}