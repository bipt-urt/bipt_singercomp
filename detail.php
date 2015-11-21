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
				$dbHandle=new DGStorage();
				$dbHandle->select("/var/lib/bipt");
				$res=$dbHandle->get($_GET["id"]);
				foreach($res as &$item)
				{
print("			<div class=\"jumbotron\">");
print("			<div class=\"row\">");
print("			<div class=\"col-xs-12 col-sm-12 col-md-3\">");
print("				<a class=\"thumbnail\">");
print("				<img height=\"100%\" width=\"100%\" class=\"img-thumbnail\" src=\"http://wanzao2.b0.upaiyun.com/system/avatars/1850984/original/20130629201621190.jpg\">");
print("				</a>");
print("			</div>");
print("			<div class=\"container\">");
print("			<h1>".$item["prop"]["name"]."</h1>");
print("			<p>".$item["prop"]["description"]."</p>");
print("			<audio src=\"http://121.42.141.42/b/song/".$item["prop"]["id"].".mp3\" controls=\"controls\">您的浏览器不支持在线播放选手歌曲</audio>");
print("<p></p>");
print("			<button class=\"btn btn-warning\">&nbsp;+".$item["prop"]["praise"]."&nbsp;</button>");
print("			<button class=\"btn btn-default\">分享</button>");
print("			</div>");
print("			</div>");
print("			</div>");
				}
			?>

			<?php include_once("footer.php"); ?>
	</div>
	</body>
</html>
