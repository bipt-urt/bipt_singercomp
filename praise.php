<?php require_once('include.php'); ?>
<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<?php $title="投票确认"; ?>
		<?php require_once('header.php'); ?>
	</head>
	<body>
		<div class="container">
			<?php include_once("banner.php"); ?>
				<pre><?php var_dump($GLOBALS); ?></pre>
			<?php
				if(!isset($_POST["id"]))
				{
					header("location:http://121.42.141.42/b");
				}
				$dbHandle=new DGStorage();
				$dbHandle->select("/var/lib/bipt");
				$res=$dbHandle->get($_POST["id"]);
				$dbHandle->setprop($res[0]["uid"],"praise",($res[0]["prop"]["praise"]+1));
				header("location:http://121.42.141.42/b/detail.php?praise=true&id=".$_POST["id"]);
			?>
			<?php include_once("footer.php"); ?>
	</div>
	</body>
</html>
