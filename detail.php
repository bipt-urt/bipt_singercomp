<?php require_once('include.php'); ?>
<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<?php $title="歌手详情页"; ?>
		<?php require_once('header.php'); ?>
	</head>
	<body>
		<div class="container">
			<?php include_once("banner.php"); ?>
			<?php
				if(!isset($_GET["id"]))
				{
					header("location:http://121.42.141.42/b");
				}
			?>
			<div class="jumbotron">
			<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-3">
				<a class="thumbnail">
				<img height="100%" width="100%" class="img-thumbnail" src="http://wanzao2.b0.upaiyun.com/system/avatars/1850984/original/20130629201621190.jpg">
				</a>
			</div>
			<div class="container">
			<h1>这是标题</h1>
			<p>这是内容</p>
			</div>
			</div>
			</div>
			<?php include_once("footer.php"); ?>
	</div>
	</body>
</html>
