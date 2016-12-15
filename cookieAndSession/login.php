<?php
	session_start();
	
	//var_dump ($_SESSION['regName']);
	//var_dump ($_COOKIE);
	//var_dump ($_SESSION);
	if(isset($_POST['submit'])){
		
		//if(($_COOKIE['regName']==$_POST['name'] && $_COOKIE['regPassword']==$_POST['password']) || (empty($_COOKIE['regName']) && empty($_COOKIE['regPassword'])))
			if($_COOKIE['regName']==$_POST['name'] && $_COOKIE['regPassword']==$_POST['password']){
				//var_dump ($_SESSION);
				header("location:index.php");
				//var_dump ($_COOKIE);
				//var_dump ($_SESSION);
				//die();
				//echo "<script>";
				//echo "location:index.php";
				//echo "</script>";
				
			}else if($_COOKIE['regName']!=$_POST['name'] || $_COOKIE['regPassword']!=$_POST['password']){
			//echo "您的cookie文件被修改！！！";
			
		    //}else{
			
			echo "您的用户名或者密码错误！！！";
		}else{
			//include "comm.php";
		}
	}
	/*if(empty($_SESSION['regName'])&&empty($_SESSION['regPassword'])){
		echo "你还未注册,请先注册";
	}else if($_COOKIE['regName']!=$_POST['name'] || $_COOKIE['regPassword']!=$_POST['password']){
		echo "您的用户名或者密码错误！！！";
	}else if(!empty($_COOKIE['regName']) && $_COOKIE['regName']==$_POST['name'] && $_COOKIE['regPassword']==$_POST['password']){
		header("Location:index.php");
	}
	
	if(!empty($_COOKIE['regName']) && $_COOKIE['regName']==$_POST['name'] && $_COOKIE['regPassword']==$_POST['password']){
		header("Loaction:index.php");
	}else if(empty($_COOKIE['regName'])){
		echo "你还未注册,请先注册";
	}else if($_COOKIE['regName']!=$_POST['name'] || $_COOKIE['regPassword']!=$_POST['password']){
		echo "您的用户名或者密码错误！！！";
	}
	//var_dump($_POST);
	*/
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
