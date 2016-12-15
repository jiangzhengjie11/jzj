<?php
	require "comm.php";
	echo $_SESSION[session_name()];
?>
<!DOCTYPE HTML>
<html>
	<head>
		<!--<meta http-equiv=Content-Type content="text/html;charset=utf-8" />-->
		<title>欢迎页面</title>
	</head>
	<body>
		<?php
			echo $_SESSION["regName"]."您好！！";
		?><br />
		<a href="index2.php">下一页</a><br />
		<a href="logout.php">退出</a>
	</body>
</html>