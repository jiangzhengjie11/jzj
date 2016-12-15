<?php
	session_start();
	if(isset($_POST['submit1'])){
		$_SESSION["regName"]=$_POST['name'];
		$_SESSION["regPassword"]=$_POST['password'];
		
		setcookie(session_name(),'',time()-3600,'/');
		setcookie('regName','',time()-3600);
		setcookie('regPassword','',time()-3600);
		
		setcookie("regName",$_POST['name'],time()+60*60);
		setcookie("regPassword",$_POST['password'],time()+60*60);

	require "comm.php";
	}else{
		echo "请您注册！！！";
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