<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>二手书商城</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="/thinkphp/Public/Home/style/style.css" rel="stylesheet" type="text/css">
<script language="javascript" src="/thinkphp/Public/Home/js/checkform.js">

</script>

</head>

<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" align="center">
<table width="770" border="0" cellpadding="0" cellspacing="0" class="pagetop" align="center">
<tr>
<td><table width="100%" border="0" cellspacing="0" cellpadding="0" class="pagetopLine"align="center">
  <tr>
    <td><img src="/thinkphp/Public/Home/graphics/space.gif" width="1" height="1"></td>
  </tr>
</table><table width="100%" border="0" cellpadding="0" cellspacing="0" class="pagetop"align="center">
 
<tr>
	
<td width="124"><img src="/thinkphp/Public/Home/graphics/3.png"></td>
<td align="right" valign="top" class="help">&nbsp;</td>
<td align="right" valign="top" class="help">[&nbsp;
<a href="<?php echo U('Index/login');?>" target="_parent">登录&nbsp;</a>|
<a href="<?php echo U('Index/register');?>" target="_parent">注册&nbsp;</a> | 
<?php if(isset($_SESSION['user'])){ echo $_SESSION['user']; } ?>会员 您好！ | <a href="<?php echo U('Home/Login/logout');?>" target="_parent" onclick="if (confirm('确定要退出登录吗？')) return true; else return false;">退出</a></td>
</tr>

</table>
  <table width="100%" border="0" cellpadding="0" cellspacing="0"align="center">
    <tr>
      <td height="25" class="menuMain">
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td class="menuMain1"><table width="767" height="16" border="0" cellpadding="0" cellspacing="0">
              <tr align="center">
                <td width="45" class="menuLinkbgSel"><a href="<?php echo U('Index/index');?>" class="menuLinkSel" target="_parent">首页</a></td>
                <td width="2"><img src="/thinkphp/Public/Home/graphics/menu_l.gif" width="2" height="23"></td>
                <td width="65" class="menuLinkbg"><a href="order_list.html" class="menuLink" target="_parent">订单查询</a></td>
                <td width="2"><img src="/thinkphp/Public/Home/graphics/menu_l.gif" width="2" height="23"></td>
                <td width="65" class="menuLinkbg"><a href="#" class="menuLink" target="_parent">商品搜索</a></td>
                <td width="2"><img src="/thinkphp/Public/Home/graphics/menu_l.gif" width="2" height="23"></td>
                <td width="76" class="menuLinkbg"><a href="<?php echo U('Cart/cart_list');?>" class="menuLink" target="_parent">我的购物车</a></td>
                <td width="2"><img src="/thinkphp/Public/Home/graphics/menu_l.gif" width="2" height="23"></td>
                <td width="50" class="menuLinkbg"><a href="collection.html" class="menuLink" target="_parent">收藏夹</a></td>
                <td width="2"><img src="/thinkphp/Public/Home/graphics/menu_l.gif" width="2" height="23"></td>
				 <td align="left" class="menuLinkbg">
				  <select name="category">
				   <option value="5">所有类别</option>
                  <option value="1">经典图书</option>
                   <option value="2">数据库</option>
                   <option value="3">物理学</option>
                   <option value="4">热门小说</option>
              </select>


<input type="text" name="textfield"n size="15">
<input type="button" name="Submit" value="搜索" onClick="javascript:window.open('item_search_list.html','_parent','')">
<a href="send_notes.html" target="_parent" class="menuLink">说明</a></td>
  
                 </tr>
            </table>            
            </td>
          </tr>
    </table></td>
    </tr>
</table>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><img src="/thinkphp/Public/Home/graphics/whole.jpg"></td>
    </tr>
  </table><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="3" background="/thinkphp/Public/Home/graphics/whole_line.gif"><img src="/thinkphp/Public/Home/graphics/space.gif" width="1" height="1"></td>
          </tr>
  </table></td>
</tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="yrh" align="center">
  <tr>
    <td height="17"><a href="<?php echo U('Index/index');?>">主页</a> &raquo; 登陆</td>
  </tr>
</table>
<table width="770" border="0" cellpadding="0" cellspacing="0" class="main" align="center">
<tr valign="top">
<td><form action="<?php echo U('/Home/Login/login');?>" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%" border="0" cellpadding="2" cellspacing="1" class="inputTable" align="center">
    <tr>
      <td class="inputTitle">登陆</td>
    </tr>
    <tr>
      <td>
        <table width="100%" border="0" cellpadding="0" cellspacing="1" class="inputbox">
          <tr>
            <td width="4%" class="inputHeader">&nbsp;</td>
            <td width="17%" class="inputHeader">用户名</td>
            <td width="38%" class="inputContent">
               <input type="text" class="text width100" name="user" maxlength="25">
              
            </td>
            <td width="41%" class="inputContent">&nbsp;<font color="#CC0000">*&nbsp;必输项</font></td>
          </tr>
          
          <tr>
            <td class="inputHeader">&nbsp;</td>
            <td class="inputHeader">登录密码：</td>
            <td class="inputContent">
              <input type="Password" class="text width100" name="password"  value="" maxlength="25">
            </td>
            <td class="inputContent">&nbsp;<font color="#CC0000">*&nbsp;必输项</font></td>
          </tr>
          
          <tr>若无账户，请点击 <a href="register.html">注册</a></tr>
          
        </table>
        <table width="100%" border="0" cellspacing="1" cellpadding="0">
          <tr>
            <td width="4%" class="inputContent">&nbsp;</td>
            <td width="17%" class="inputHeader">&nbsp;</td>
            <td width="39%" class="inputContent">

&nbsp;&nbsp;
&nbsp;&nbsp;
&nbsp;&nbsp;
<input type="Reset" class="bt2" name="button1" value="重填" onClick="clear()">
&nbsp;&nbsp;
&nbsp;

<input type="submit" class="bt2" name="button2" value="提交" onClick="checkregform()">
&nbsp;
&nbsp;
&nbsp;
<input type="Button" class="bt2" name="button3" value="返回" onClick="javascript:window.location.href='index.html'">
            </td>
            <td width="40%" class="inputContent">&nbsp;</td>
          </tr>
        </table>
</td>
    </tr>
  </table>
  </form>  
</td>
</tr>
</table>

<iframe src="bottom.html" frameborder="0" marginheight="0" marginwidth="0" width="770" height="130" scrolling="no"></iframe>
</body>
</html>