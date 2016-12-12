<?php
	require 'ValidateClass.php';
	
	$testValidate = new ValidateClass();
	
	$testValidate->setEmail('jiangzhnegjie@yaochufa.com');
	
	echo $testValidate->getEmail().'</br>';
	
	$testValidate->setInt_input('6');
	
	echo $testValidate->getInt_input();
?>