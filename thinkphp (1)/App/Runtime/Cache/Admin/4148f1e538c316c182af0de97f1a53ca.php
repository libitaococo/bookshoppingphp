<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>-.-</title>
<link rel="stylesheet" href="/thinkphp/Public/Admin/styles/backstage.css">
<link rel="stylesheet" href="/thinkphp/Public/Admin/styles/page.css">
</head>

<body>
<div class="details">
     <div class="details_operation clearfix">
           <div class="bui_select">
                 <input type="button" value="添&nbsp;&nbsp;加" class="add"  onclick="addAdmin()">
            </div>
                            
       </div>
       <!--表格-->
       <table class="table" cellspacing="0" cellpadding="0">
              <thead>
                    <tr>
                        <th width="15%">编号</th>
                        <th width="25%">管理员名称</th>
                        <th width="30%">管理员密码</th>
                        <th>操作</th>
                     </tr>
               </thead>
                <tbody>
                       <?php if(is_array($select)): foreach($select as $key=>$s): ?><tr>
                                <!--这里的id和for里面的c1 需要循环出来-->
                                <td><input type="checkbox" id="c1" class="check"><label for="c1" class="label"><?php echo ($s["id"]); ?></label></td>
                                <td><?php echo ($s["adminname"]); ?></td>
                                <td><?php echo ($s["adminpassword"]); ?></td>
                                <td align="center">
                                <a href="<?php echo U('Admin/editAdmin',array('id'=>$s['id']));?>" onClick="if(window.confirm('确定删除？'));else return false">修改</a>
                                <a href="<?php echo U('Admin/delAdmin',array('id'=>$s['id']));?>">删除</a>
                                </td>
                            </tr><?php endforeach; endif; ?>
                        </tbody>
                    </table>
                </div>
                <div class="yahoo2"><?php echo ($page); ?>
			</div>
</body>
<script type="text/javascript">

	function addAdmin(){
		window.location="addAdmin.html";	
	}
	/* function editAdmin(id){
		window.location="<?php echo U('Admin/editAdmin',array('id'=>id));?>";
    }  */
	/*function delete(id){
			if(window.confirm("您确定要删除吗？删除之后不可以恢复哦！！！")){
				window.location="<?php echo U('Admin/delAdmin',array('id'=>id));?>";     
			}
	}*/
</script>
</html>