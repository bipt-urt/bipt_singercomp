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
				<h1>北京石油化工学院 我是歌手</h1>
				<p>这里有一个背景，不过不见了</p>
				<p>这里还应该有一些话，不过还没想好</p>
				<p><a class="btn btn-primary btn-lg" href="#select" role="button">开始投票</a></p><a name="select"></a>
			</div>
		</div>
		<div class="container">
			<?php include_once("banner.php"); ?>
			<div class="row">
				<?php
					$dbHandle=new DGStorage();
					$dbHandle->select("/var/lib/bipt");
					$res=$dbHandle->fetch();
					foreach($res as &$item)
					{
print("				<div class=\"col-sm-6 col-md-4\">");
print("					<div class=\"thumbnail\">");
print("					<img src=\"http://wanzao2.b0.upaiyun.com/system/avatars/1850984/original/20130629201621190.jpg\" alt=\"...\">");
print("					<div class=\"caption\">");
print("						<h3>".$item["prop"]["name"]."</h3>");
print("						<p>".$item["prop"]["description"]."</p>");
//print("						<audio src=\"//121.42.141.42/b/song/".$item["key"].".mp3\" controls=\"controls\" preload=\"meta\"></audio>");
//屏蔽，可能导致服务器资源耗尽
print("						<p><a href=\"http://121.42.141.42/b/detail.php?id=".$item["key"]."\" class=\"btn btn-primary\" role=\"button\">给他投票</a> <a href=\"#\" class=\"btn btn-default\" role=\"button\">分享</a></p>");
print("					</div>");
print("					</div>");
print("				</div>");
					};
				?>
			</div>
			<div class="list-group">
				<?php
					$res=$dbHandle->sort("praise","DESC",10);
					foreach($res as &$item)
					{
						$detail=$dbHandle->uid($item["uid"]);
						print("<a href=\"http://121.42.141.42/b/detail.php?id=".$detail["key"]."\" class=\"list-group-item\"><span class=\"badge\">".$detail["prop"]["praise"]."</span>".$detail["prop"]["name"]."</a>");
					}
				?>
			</div>
			<?php /*
			<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">调试</h3>
			</div>
			<div class="panel-body">
				<pre><?php var_dump($GLOBALS); ?></pre>
			</div>
			</div>
			*/ ?>
		</div>
			<?php include_once("footer.php"); ?>
	</body>
</html>
