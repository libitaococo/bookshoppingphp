<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" href="/thinkphp/Public/Admin/styles/backstage.css">
<link rel="stylesheet" href="/thinkphp/Public/Admin/styles/page.css">
</head>
<body>
<div class="details">
                    <div class="details_operation clearfix">
                        <div class="bui_select">
                            <input type="button" value="添&nbsp;&nbsp;加" class="add"  onclick="addCate()">
                        </div>
                            
                    </div>
                    <!--表格-->
                    <table class="table" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th width="15%">编号</th>
                                <th width="25%">分类</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($select)): foreach($select as $key=>$s): ?><tr>
                                <!--这里的id和for里面的c1 需要循环出来-->
                                <td><input type="checkbox" id="c1" class="check"><label for="c1" class="label"><?php echo ($s["cid"]); ?></label></td>
                                <td><?php echo ($s["cname"]); ?></td>
                                <td align="center">
                                <a href="<?php echo U('Cate/editCate',array('cid'=>$s['cid']));?>" onClick="if(window.confirm('确定删除？'));else return false">修改</a>
                                <a href="<?php echo U('Cate/delCate',array('cid'=>$s['cid']));?>">删除</a>
                            </tr><?php endforeach; endif; ?>  
                        </tbody>
                    </table>
                </div>
                   <div class="yahoo2"><?php echo ($page); ?>
			</div>
</body>
<script type="text/javascript">

	function addCate(){
		window.location="addCate.html";	
	}

</script>
</html>