<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>登陆系统</title>
    <!-- bootstrap css -->
    <link href="/hospital/Public/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome -->
    <link href="/hospital/Public/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<style type="text/css">

*{
    font-family: "微软雅黑";
    font-size: 14px;
}

a:active,
a:focus{
    outline: none;
}

#middle_container{
    width:500px;
    display: none;
}

#middle_container > .panel > .panel-heading{
    padding-top: 20px;
    padding-bottom: 20px;
}

#middle_container > .panel > .panel-body{
    margin-top: 30px;
}

</style>
</head>
<body>

<div class="container" id="middle_container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-key"></i>&nbsp;&nbsp;登陆系统</h3>
        </div>
        <div class="panel-body">

            <form class="form-horizontal" method="post" action="<?php echo U('admin/login/loginHandle');?>" id="login-form">
                <div class="form-group">
                    <label for="inputusername" class="col-sm-3 control-label"><i class="glyphicon glyphicon-user"></i>&nbsp;&nbsp;用户名：</label>
                    <div class="col-sm-8">
                        <input class="form-control input-sm" name="username" id="inputusername" placeholder="请输入有效用户名" autocomplete="off">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputpassword" class="col-sm-3 control-label"><i class="fa fa-lock fa-lg"></i>&nbsp;&nbsp;密&emsp;码：</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control input-sm" name="password" id="inputpassword" placeholder="请输入有效密码" autocomplete="off">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary btn-block">登陆</button>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <a href="<?php echo U('admin/login/register');?>" class="btn btn-success btn-block">注册</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

<!-- jquery -->
<script type="text/javascript" src="/hospital/Public/lib/jquery/jquery.min.js"></script>
<!-- bootstrap js -->
<script type="text/javascript" src="/hospital/Public/lib/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    var div_height=$("#middle_container").outerHeight(true);
    var window_height=$(window).height();
    var window_width=$(window).width();
    var top=( window_height - div_height ) / 2;

    $("#middle_container").css("position","absolute");
    $("#middle_container").css("top",top);

    var div_width=$("#middle_container").outerWidth(true);
    var left=( window_width - div_width ) / 2;
    $("#middle_container").css("left",left);
    $("#middle_container").show();
});
</script>
</body>
</html>