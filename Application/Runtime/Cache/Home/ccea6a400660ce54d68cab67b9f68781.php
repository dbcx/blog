<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="/blog/Public/css/bootstrap.min.css">
	<style>
		body{
			margin-left: auto;
			margin-right: auto;
			margin-top: 100px;
			width: 25em;
		}
		.a{
			color: black;
			font-family: Cursive ;
		}
	</style>
	<title>这是注册</title>
</head>
<body>
	<h1 class="text-center a">LOGIN<a class="a" href="#">?</a></h1>
	<br>
	<form action="/blog/index.php/Home/Index/check" method="post">
		<!--下面是账号输入框-->
		<div class="input-group">
		  <span class="input-group-addon" id="basic-addon1">
			<span class="glyphicon glyphicon-user"></span>
		  </span>
		  <input name="username" type="text" class="form-control" placeholder="用户名" aria-describedby="basic-addon1">
		</div>
		<br>
		<!--下面是密码输入框-->
		<div class="input-group">
		  <span class="input-group-addon" id="basic-addon1">
			<span class="glyphicon glyphicon-lock"></span>
		  </span>
		  <input name="password" type="password" class="form-control" placeholder="密码" aria-describedby="basic-addon1">
		</div>
		<br>
		<!--下面是登陆按钮,包括颜色控制-->
		<div class="input-group">
			<input type="submit" class="btn btn-default" style="width:25em;" value="登录">
		</div>
	</form>
</body>
</html>