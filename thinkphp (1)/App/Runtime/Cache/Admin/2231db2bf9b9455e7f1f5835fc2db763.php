<?php if (!defined('THINK_PATH')) exit();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>-.-</title>
<link rel="stylesheet" href="/thinkphp/Public/Admin/styles/backstage.css">
<link rel="stylesheet" href="/thinkphp/Public/Admin/scripts/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
<script src="/thinkphp/Public/Admin/scripts/jquery-ui/js/jquery-1.10.2.js"></script>
<script src="/thinkphp/Public/Admin/scripts/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
<script src="/thinkphp/Public/Admin/scripts/jquery-ui/js/jquery-ui-1.10.4.custom.min.js"></script>
</head>

<body>
<div id="showDetail"  style="display:none;">

</div>
<div class="details">
                    <div class="details_operation clearfix">
                        <div class="bui_select">
                            <input type="button" value="返&nbsp;&nbsp;回" class="add" onclick="rePro()">
                            </div>
                             <div id="showDetail"  ">
                                                   <!--表格-->
                                                   <?php if(is_array($select)): foreach($select as $key=>$s): ?><table class="table" cellspacing="0" cellpadding="0">
					                        		<tr>
					                        			<td width="20%" align="right">商品名称</td>
					                        			<td><?php echo ($s["pname"]); ?></td>
					                        		</tr>
					                        		<tr>
					                        			<td width="20%"  align="right">商品类别</td>
					                        			<td><?php echo ($s["cname"]); ?></td>	
					                        		</tr>
					                        		<tr>
					                        			<td width="20%"  align="right">商品货号</td>
					                        			<td><?php echo ($s["psn"]); ?></td>
					                        		</tr>
					                        		<tr>
					                        			<td width="20%"  align="right">商品数量</td>
					                        			<td><?php echo ($s["pnum"]); ?></td>
					                        		</tr>
					                        		<tr>
					                        			<td  width="20%"  align="right">商品价格</td>
					                        			<td><?php echo ($s["mprice"]); ?></td>
					                        		</tr>
					                        		<tr>
					                        			<td  width="20%"  align="right">会员价格</td>
					                        			<td><?php echo ($s["vprice"]); ?></td>
					                        		</tr>
					                        		<tr>
					                        			<td width="20%"  align="right">商品图片</td>
					                        			<td>
					                        			<img width="200" height="250" src="<?php echo ($s['image1']); ?>" /> 
					                        			</td>
					                        		</tr>
					                        		<tr>
					                        		<td  width="20%"   height=" 150" align="right">商品描述</td>
					                        		<td><?php echo ($s["pdesc"]); ?></td>
					                        		</tr>
					                        	</table><?php endforeach; endif; ?>
					                        	</div>
					                        </div>
                </div>
<script type="text/javascript">
	function rePro(){
		window.location='<?php echo U("Pro/listpro");?>';
	}

</script>
</body>
</html>