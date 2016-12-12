<?php
	require 'ValidateClass.php';
	
	$testValidate = new ValidateClass();
	
	$testValidate->setEmail('jiangzhnegjie@yaochufa.com');
	
	echo $testValidate->getEmail().'</br>';
	
	$testValidate->setIntInput('6');
	
	echo $testValidate->getIntInput();
?>