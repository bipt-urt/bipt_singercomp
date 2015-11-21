<?php require_once('include.php'); ?>
<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<?php $title="首页"; ?>
		<?php require_once('header.php'); ?>
		<style>body{padding-top: 50px;}</style>
	</head>
	<body>
		<div class="jumbotron">
			<div class="container">
				<h1>这里有一个标题，暂时不见了</h1>
				<p>这里有一个背景，也不见了</p>
				<p>这里还应该有一些话，不过还没想好</p>
				<p><a class="btn btn-primary btn-lg" href="#" role="button">开始投票</a></p>
			</div>
		</div>
		<div class="container">
			<?php include_once("banner.php"); ?>
			<div class="alert alert-success" role="alert"><b>投票成功！</b>您的投票已经计入系统，感谢您的支持。</div>
			<div class="row">
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
				<img src="http://wanzao2.b0.upaiyun.com/system/avatars/1850984/original/20130629201621190.jpg" alt="...">
				<div class="caption">
					<h3>王尼玛</h3>
					<p>北京石油化工大学计153班王尼玛同学是一个团结友爱的好同学，他兼职暴走大事件的主持人。</p>
					<p><a href="#" class="btn btn-primary" role="button">投票</a> <a href="#" class="btn btn-default" role="button">分享</a></p>
				</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
				<img src="http://wanzao2.b0.upaiyun.com/system/avatars/1850984/original/20130629201621190.jpg" alt="...">
				<div class="caption">
					<h3>王尼玛</h3>
					<p>北京石油化工大学计153班王尼玛同学是一个团结友爱的好同学，他兼职暴走大事件的主持人。</p>
					<p><a href="#" class="btn btn-primary" role="button">投票</a> <a href="#" class="btn btn-default" role="button">分享</a></p>
				</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
				<img src="http://wanzao2.b0.upaiyun.com/system/avatars/1850984/original/20130629201621190.jpg" alt="...">
				<div class="caption">
					<h3>王尼玛</h3>
					<p>北京石油化工大学计153班王尼玛同学是一个团结友爱的好同学，他兼职暴走大事件的主持人。</p>
					<p><a href="#" class="btn btn-primary" role="button">投票</a> <a href="#" class="btn btn-default" role="button">分享</a></p>
				</div>
				</div>
			</div>
			</div>
				<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">调试</h3>
				</div>
				<div class="panel-body">
					<pre><?php var_dump($GLOBALS); ?></pre>
				</div>
				</div>
		</div>
			<?php include_once("footer.php"); ?>
	</body>
</html>
