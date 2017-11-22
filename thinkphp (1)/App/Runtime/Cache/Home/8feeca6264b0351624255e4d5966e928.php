<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>二手书商城</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="/thinkphp/Public/Home/style/style.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

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
<a href="register.html" target="_parent">注册&nbsp;</a> | 
<?php if(isset($_SESSION['user'])){ echo $_SESSION['user']; } ?>会员 您好！| <a href="user_edit.htm" target="_parent">个人信息维护</a> | <a href="address_daohang.htm" target="_parent">地址簿</a> | <a href="<?php echo U('Home/Login/logout');?>" target="_parent">退出</a></td>
</tr>

</table>
  <table width="100%" border="0" cellpadding="0" cellspacing="0"align="center">
    <tr>
      <td height="25" class="menuMain">
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td class="menuMain1"><table width="767" height="16" border="0" cellpadding="0" cellspacing="0">
              <tr align="center">
                <td width="45" class="menuLinkbgSel"><a href="home.htm" class="menuLinkSel" target="_parent">首页</a></td>
                <td width="2"><img src="/thinkphp/Public/Home/graphics/menu_l.gif" width="2" height="23"></td>
                <td width="86" class="menuLinkbg"><a href="trade_query.htm" class="menuLink" target="_parent"> 历史交易查询 </a></td>
                <td width="2"><img src="/thinkphp/Public/Home/graphics/menu_l.gif" width="2" height="23"></td>
                <td width="65" class="menuLinkbg"><a href="order_list.htm" class="menuLink" target="_parent">订单查询</a></td>
                <td width="2"><img src="/thinkphp/Public/Home/graphics/menu_l.gif" width="2" height="23"></td>
                <td width="65" class="menuLinkbg"><a href="#" class="menuLink" target="_parent">商品搜索</a></td>
                <td width="2"><img src="/thinkphp/Public/Home/graphics/menu_l.gif" width="2" height="23"></td>
                <td width="76" class="menuLinkbg"><a href="cart_list.htm" class="menuLink" target="_parent">我的购物车</a></td>
                <td width="2"><img src="/thinkphp/Public/Home/graphics/menu_l.gif" width="2" height="23"></td>
                <td width="50" class="menuLinkbg"><a href="collection.htm" class="menuLink" target="_parent">收藏夹</a></td>
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
<input type="button" name="Submit" value="搜索" onClick="javascript:window.open('item_search_list.htm','_parent','')">
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
            <td height="3" background="/thinkphp/Public/Home/graphics/whole_line.gif"><img src="../graphics/space.gif" width="1" height="1"></td>
          </tr>
  </table></td>
</tr>
</table>

</body>
</html>