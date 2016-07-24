<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>admin</title>

	<link href="/hospital/Public/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="/hospital/Public/css/admin_index_index.css" rel="stylesheet">
	<link href="/hospital/Public/css/admin_index_index_lefter.css" rel="stylesheet">
</head>
<body>
	
<div id="header">
	<span class="header-left logo">hospital</span>
	<a href="javascript:void(0);" class="header-right header-btn" id="logout-btn">退出</a>
	<span class="header-right">欢迎登录：<?php echo session('username');?></span>
</div>

<div id="wrap">
	<div class="lefter">
		<dl>
			<dt>选课</dt>
			<dd><a href="javascript:void(0);" target="content">我要选课</a></dd>
			<dd><a href="javascript:void(0);" target="content">查看已选</a></dd>

			<dt>评教</dt>
			<dd><a href="javascript:void(0);" target="content">我要评教</a></dd>
			<dd><a href="javascript:void(0);" target="content">查看已评</a></dd>
		</dl>

<?php if(session('is_admin') == true): ?><dl>
			<dt>管理</dt>
			<dd><a href="javascript:void(0);" target="content">asdasd</a></dd>
			<dd><a href="javascript:void(0);" target="content">asdasd</a></dd>
			<dd><a href="javascript:void(0);" target="content">asdasd</a></dd>
			<dd><a href="javascript:void(0);" target="content">asdasd</a></dd>
		</dl><?php endif; ?>

	</div>
	<div class="main">
		<iframe name="content" class="content-frame" src="#" frameborder="0"></iframe>
	</div>
</div>

<script type="text/javascript" src="/hospital/Public/lib/jquery/jquery.min.js"></script>
<script type="text/javascript" src="/hospital/Public/lib/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/hospital/Public/js/admin_index_index.js"></script>
<script type="text/javascript" src="/hospital/Public/js/admin_index_index_lefter.js"></script>
<script type="text/javascript">
$(function(){
	$('#logout-btn').click(function(){
		if (confirm('确定退出系统？')) {
			var url = "<?php echo U('admin/login/logout');?>";
			window.location.href = url;
		}
	});
});
</script>
</body>
</html>