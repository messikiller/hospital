<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
    	register
    </title>

    <!-- Bootstrap -->
    <link href="/hospital/Public/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
	<div class="col-md-12" style="height:100px;"></div>
	<div class="col-md-12 text-center">
		<h4>用户注册</h4>
	</div>
	<div class="col-md-12" style="height:20px;"></div>
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<form action="<?php echo U('admin/login/registerHandle');?>" method="post" class="form-horizontal">
		  <div class="form-group">
		    <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="username" id="username_id" placeholder="Username">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
		    <div class="col-sm-10">
		      <input type="password" class="form-control" name="password" id="password_id" placeholder="Password">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputPassword4" class="col-sm-2 control-label">确认密码</label>
		    <div class="col-sm-10">
		      <input type="password" class="form-control" name="confirm" id="confirm_id" placeholder="Confirm">
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-success btn-sm">注册</button>
		    </div>
		  </div>
		</form>		
	</div>
	<div class="col-md-3"></div>


            </div>
        </div>
    </div>

    <script src="/hospital/Public/lib/jquery/jquery.min.js"></script>
    <script src="/hospital/Public/lib/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>