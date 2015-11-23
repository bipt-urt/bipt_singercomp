<?php require_once('include.php'); ?>
<?php
	if(isset($_COOKIE["bipt_praise_".$_POST["id"]]))
	{
		header("location:http://121.42.141.42/b/detail.php?praise=true&id=".$_POST["id"]);
	}
	else
	{
		setcookie("bipt_praise_".$_POST["id"],"true",time()+72000);
	}
?>
<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<?php $title="投票确认"; ?>
		<?php require_once('header.php'); ?>
	</head>
	<body>
		<div class="container">
			<?php include_once("banner.php"); ?>
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
			<div class="alert alert-success" role="alert"><strong>投票成功！</strong>您的一票已经计入系统</div>
			<?php include_once("footer.php"); ?>
	</div>
	</body>
</html>
