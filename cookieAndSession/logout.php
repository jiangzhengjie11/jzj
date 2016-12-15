<?php
	session_start();
	$name=$_SESSION['regName'];
	unset($_SESSION['regName']);
	unset($_SESSION['regPassword']);
	unset($_SESSION[session_name()]);
	//$_SESSION=array();
	setcookie(session_name(),'',time()-3600,'/');
	setcookie('regName','',time()-3600);
	setcookie('regName','',time()-3600);
	setcookie('regPassword','',time()-3600);
	session_destroy();
	
	echo $name."您已经退出";
	var_dump($_COOKIE);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<!--<meta http-equiv=Conten-Type content="text/html;charset=utf-8" />-->
		<title>退出登录</title>
	</head>
	<body>
		<a href="login.php">返回登录页面</a>
	</body>
</html>