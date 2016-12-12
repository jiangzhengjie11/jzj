<?php
    require 'mySort.php';
    $sortArray = [0, 2, 12, 3, 95, 56, 48, 22, 33, 5];
	$ms=new mySort();
	echo "冒泡排序";
    var_dump($ms->bubbleSort($sortArray));
	echo "</br>";
	echo "简单选择排序";
    var_dump($ms->simpleSelectionSort($sortArray));
	echo "</br>";
	echo "直接插入排序";
    var_dump($ms->directInsertionSort($sortArray));
	echo "</br>";
	echo "快速排序";
    var_dump($ms->quickSort($sortArray));
	echo "</br>";
	echo "归并排序";
    $ms->mergeSort($sortArray);
	var_dump($sortArray);
  
?>
