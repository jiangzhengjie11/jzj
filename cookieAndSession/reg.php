<?php
	session_start();
	if(isset($_POST['submit1'])){
		$_SESSION["regName"]=$_POST['name'];
		$_SESSION["regPassword"]=$_POST['password'];
		setcookie("regName",$_POST['name'],time()+60*60);
		setcookie("regPassword",$_POST['password'],time()+60*60);
	//var_dump ($_POST);
	//var_dump ($_POST['name']);
	//var_dump ($_POST['password']);
	//var_dump($_COOKIE['regName']);
	//var_dump($_COOKIE['regPassword']);
	//var_dump($_COOKIE);
	//var_dump($_SESSION);
	//die();
	require "comm.php";
	}else{
		echo "您还为注册！！！";
	}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv=Content-Type content="text/html;charset=utf-8" />
		<title>请注册</title>
	</head>
	<body>
		<form action="reg.php" method="post">
			<table border="1px solid #abababab" align="center">
				<tr>
					<td colspan='2' align="center"><b>请注册</b></td>
				</tr>
				<tr>
					<td align="center">name:</td>
					<td><input type="text" name="name" /></td>
				</tr>
				<tr>
					<td align="center">password:</td>
					<td><input type="password" name="password" /></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" name="submit1" value="注册" /></td>
				</tr>
			</table>
		</form>
	</body>
</html>