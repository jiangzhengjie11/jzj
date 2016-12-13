<?php
	require 'CutStringClass.php';
	$tempString='哈哈哈哈啊哈哈哈哈哈啊哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈';
	$cutString = new CutStringClass();
	
	$temp=$cutString->cutStr($tempString,20);
	var_dump($temp);
	echo "</br>";
?>