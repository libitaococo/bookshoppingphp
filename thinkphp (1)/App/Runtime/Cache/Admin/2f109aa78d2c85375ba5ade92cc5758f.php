<?php if (!defined('THINK_PATH')) exit();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>-.-</title>
<link rel="stylesheet" href="/thinkphp/Public/Admin/styles/backstage.css">
<link rel="stylesheet" href="/thinkphp/Public/Admin/styles/page.css">
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
                        <div class="fr">
                            <div class="text">
                                <span>商品价格：</span>
                                <div class="bui_select">
                                    <select id="" class="select" onchange="change(this.value)">
                                    	<option>-请选择-</option>
                                        <option value="vprice asc" >由低到高</option>
                                        <option value="vprice desc">由高到底</option>
                                    </select>
                                </div>
                            </div>
                            <div class="text">
                                <span>上架时间：</span>
                                <div class="bui_select">
                                 <select id="" class="select" onchange="change(this.value)">
                                 	<option>-请选择-</option>
                                        <option value="pubtime desc" >最新发布</option>
                                        <option value="pubtime asc">历史发布</option>
                                    </select>
                                </div>
                            </div>
                            <div class="text">
                                <span>搜索</span>
                                <input type="text" value="" class="search"  id="search" onkeypress="search()" >
                            </div>
                        </div>
                    </div>
                    <!--表格-->
                    <table class="table" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th width="10%">编号</th>
                                <th width="20%">订单号</th>
                                <th width="10%">商品号</th>
                                <th width="20%">商品名称</th>
                                <th width="10%">市场价格</th>
                                <th width="10%">会员价格</th>
                                <th width="10%">商品数量</th>
                                 <th width="10%">商品总价</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($select)): foreach($select as $key=>$s): ?><tr>
                                <!--这里的id和for里面的c1 需要循环出来-->
                                <td><input type="checkbox" id="c1" class="check" ><label for="c1" class="label"><?php echo ($s["odid"]); ?></label></td>
                                <td><?php echo ($s["oname"]); ?></td>
                                <td><?php echo ($s["pid"]); ?></td>
                                <td><?php echo ($s["pname"]); ?></td>  
                                 <td><?php echo ($s["mprice"]); ?></td>
                                 <td><?php echo ($s["vprice"]); ?>元</td>
                                 <td><?php echo ($s["cnum"]); ?>元</td>
                                 <td><?php echo ($s["sum"]); ?></td>
                            </tr><?php endforeach; endif; ?>
                        </tbody>
                    </table>
                </div>
                   <div class="yahoo2"><?php echo ($page); ?>
			</div>
			
<script type="text/javascript">
	function rePro(){
		window.location='<?php echo U("Order/listOrder");?>';
	}

</script>
</body>
</html>