<?php
	session_start();
	

	if(isset($_POST['submit'])){
		
		
			if($_SESSION['regName']==$_POST['name'] && $_SESSION['regPassword']==$_POST['password']){
			
				echo "<script>";
				echo "location:index.php";
				echo "</script>";
				
			}else if($_SESSION['regName']!=$_POST['name'] || $_SESSION['regPassword']!=$_POST['password']){
		
			
		 
			
				echo "您的用户名或者密码错误！！！";
			}else {
				echo "您的用户名或密码为空！！";
			}
	}
	else{
			require "comm.php";
		}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<!--<meta http-equiv=Conten-Type content="text/html;charset=utf-8" />-->
		<title>登录页面</title>
	</head>
	<body>
		<form action="login.php" method="POST">
			<table border="1px solid brack" align="center">
				<tr>
					<td colspan='2' align="center"><b>请登录</b></td>
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
				<td align="center"><a href="reg.php">注册</a></td>
					<td align="center"><input type="submit" name="submit" value="登录" /></td>
				</tr>
				
			</table>
		</form>
	</body>
</html>
