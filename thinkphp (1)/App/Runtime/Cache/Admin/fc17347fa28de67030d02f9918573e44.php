<?php if (!defined('THINK_PATH')) exit();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>-.-</title>
<link href="/thinkphp/Public/Admin/styles/global.css"  rel="stylesheet"  type="text/css" media="all" />
<script type="text/javascript" charset="utf-8" src="/thinkphp/Public/Admin/plugins/kindeditor/kindeditor.js"></script>
<script type="text/javascript" charset="utf-8" src="/thinkphp/Public/Admin/plugins/kindeditor/lang/zh_CN.js"></script>
<script type="text/javascript" src="/thinkphp/Public/Admin/scripts/jquery-1.6.4.js"></script>
<script>
        KindEditor.ready(function(K) {
                window.editor = K.create('#editor_id');
        });
        $(document).ready(function(){
        	$("#selectFileBtn").click(function(){
        		$fileField = $('<input type="file" name="thumbs[]"/>');
        		$fileField.hide();
        		$("#attachList").append($fileField);
        		$fileField.trigger("click");
        		$fileField.change(function(){
        		$path = $(this).val();
        		$filename = $path.substring($path.lastIndexOf("\\")+1);
        		$attachItem = $('<div class="attachItem"><div class="left">a.gif</div><div class="right"><a href="#" title="删除附件">删除</a></div></div>');
        		$attachItem.find(".left").html($filename);
        		$("#attachList").append($attachItem);		
        		});
        	});
        	$("#attachList>.attachItem").find('a').live('click',function(obj,i){
        		$(this).parents('.attachItem').prev('input').remove();
        		$(this).parents('.attachItem').remove();
        	});
        });
</script>
</head>
<body>
<h3>添加商品</h3>
<form action="<?php echo U('Pro/add');?>"" method="post" enctype="multipart/form-data">
<table width="70%"  border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
	<tr>
		<td align="right">商品名称</td>
		<td><input type="text" name="pname"  placeholder="请输入商品名称"/></td>
	</tr>
	<tr>
		<td align="right">商品分类</td>
		<td>
		<select name="cid">
			<?php if(is_array($select)): foreach($select as $key=>$s): ?><option value="<?php echo ($s["cid"]); ?>"><?php echo ($s["cname"]); ?></option><?php endforeach; endif; ?>
		</select>
		</td>
	</tr>
	<tr>
		<td align="right">商品货号</td>
		<td><input type="text" name="psn"  placeholder="请输入商品货号"/></td>
	</tr>
	<tr>
		<td align="right">商品数量</td>
		<td><input type="text" name="pnum"  placeholder="请输入商品数量"/></td>
	</tr>
	<tr>
		<td align="right">商品市场价</td>
		<td><input type="text" name="mprice"  placeholder="请输入商品市场价"/></td>
	</tr>
	<tr>
		<td align="right">商品会员价</td>
		<td><input type="text" name="vprice"  placeholder="请输入商品会员价"/></td>
	</tr>
	<tr>
		<td align="right">商品描述</td>
		<td>
			<textarea name="pdesc" id="editor_id" style="width:100%;height:150px;"></textarea>
		</td>
	</tr>
	<tr>
		<td align="right">商品图像</td>
		<td>
		<input type="file"  name="image[]" onchange ="upload1()" id="image1"/>
			<div id="attachList" class="clear"></div>
		</td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit"  value="发布商品"/></td>
	</tr>
</table>
</form>
</body>
</html>