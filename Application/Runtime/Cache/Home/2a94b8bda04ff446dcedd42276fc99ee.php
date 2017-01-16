<?php if (!defined('THINK_PATH')) exit();?><!-- 由于bootstrap引用了HTML5特定的HTML 元素和 CSS属性，所以使用Bootstrap的时候，所有的html文件都要在顶部引用HTML5的DOCTYPE属性--> 
<!DOCTYPE html> 
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- 以下代码是bootstrap 3.x的新特性，3.0 开始全面支持移动平台了，并贯彻移动先行（mobile first）的宗旨，即默认情况下，UI布局的宽度和移动设备的宽度一致，缩放为原始大小 -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--Bootstrap-->             
<title>汽车研究院IT自动化运维平台</title>

<script src="/public/js/jquery.min.js"></script>
<script src="/public/js/bootstrap.min.js"></script>
<link href="/public/css/bootstrap.min.css" rel="stylesheet">   
<style type="text/css">
	.form-signin{
		max-width: 330px;
		padding: 15px;
		margin: 0 auto;
	}
</style>

</head>
<body>

<div class="container">
<form class="form-signin"  method="post" action="index.php?p=home&c=user&a=login">

	<h2 class="form-signin-heading">欢迎登录</h2>
	<input name="userName" id="userName" type="text" class="form-control" placeholder="用户名" required autofocus>
	<br>
	<input name="passWord" id="passWord" type="text" class="form-control" placeholder="密码" required>
	<br>
	<input type="submit" class="btn btn-lg btn-primary btn-block"  value="登录">      

</form>   
</div>             

</body>
</html>