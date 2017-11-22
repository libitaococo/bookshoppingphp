<?php if (!defined('THINK_PATH')) exit();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>-.-</title>
<link rel="stylesheet" href="/thinkphp/Public/Admin/styles/backstage.css">
<link rel="stylesheet" href="/thinkphp/Public/Admin/styles/page.css">
</head>

<body>
<div class="details">

                    <!--表格-->
                    <table class="table" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th width="15%">编号</th>
                                <th width="20%">用户名称</th>
                                <th width="20%">用户邮箱</th>
                                <th width="20%">用户密码</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                       <?php if(is_array($select)): foreach($select as $key=>$s): ?><tr>
                                <!--这里的id和for里面的c1 需要循环出来-->
                                <td><input type="checkbox" id="c1" class="check"><label for="c1" class="label"><?php echo ($s["uid"]); ?></label></td>
                                <td><?php echo ($s["user"]); ?></td>
                                <td><?php echo ($s["email"]); ?></td>
                                <td><?php echo ($s["password"]); ?></td>
                                <td align="center"> 
                                <a href="<?php echo U('User/delUser',array('uid'=>$s['uid']));?>" onClick="if(window.confirm('确定删除？'));else return false">删除</a></td><?php endforeach; endif; ?>
                        </tbody>
                    </table>
                </div>
                   <div class="yahoo2"><?php echo ($page); ?>
			</div>
</body>
</html>