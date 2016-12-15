<?php
	session_start();
	if(!empty($_SESSION['regName'])&&!empty($_SESSION['regPassword'])){
		header("location:login.php");
	}else{
		header("location:reg.php");
	}
?>