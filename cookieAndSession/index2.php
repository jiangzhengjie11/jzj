<!DOCTYPE HTML>
<?php
	require "comm.php";
	echo $_SESSION[session_id()];
?>
<html>
	<head>
		<!--<meta http-equiv=Conten-Type content="text/html;charset=utf-8" />-->
		<title>欢迎页面</title>
	</head>
	<body>
		<?php
			echo $_SESSION["regName"]."您好！！";
		?><br />
		<a href="index.php">上一页</a><br />
		<a href="logout.php">退出</a>
	</body>
</html>