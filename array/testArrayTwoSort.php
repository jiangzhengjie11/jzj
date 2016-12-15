<?php
	require 'arrayTwoSort.php';

	$arrayTwo= new arrayTwoSort();
	$temp=$arrayTwo->createArrayTwo($creteArray,5,4);
	var_dump($arrayTwo->arrayTwoSort($temp));
?>