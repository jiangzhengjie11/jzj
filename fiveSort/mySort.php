<?php
    class mySort
    {
        //冒泡排序
        public function bubbleSort($sortArray)
        {
            for ($i = 0; $i < count($sortArray); ++$i) {
                $sortIs = true;
                for ($j = 0; $j < count($sortArray) - 1; ++$j) {
                    if ($sortArray[$j] > $sortArray[$j + 1]) {
                        $sortIs = false;
                        $temp = $sortArray[$j];
                        $sortArray[$j] = $sortArray[$j + 1];
                        $sortArray[$j + 1] = $temp;
                    }
                }
                if ($sortIs) {
                    break;
                }
            }

            return $sortArray;
        }
        //简单选择排序
        public function simpleSelectionSort($sortArray)
        {
            for ($i = 0; $i < count($sortArray); ++$i) {
                $point = $i;
                for ($j = $i + 1; $j < count($sortArray); ++$j) {
                    if ($sortArray[$j] < $sortArray[$point]) {
                        $point = $j;
                    }
                }
                $temp = $sortArray[$i];
                $sortArray[$i] = $sortArray[$point];
                $sortArray[$point] = $temp;
            }

            return $sortArray;
        }
        //ֱ直接插入排序
        public function directInsertionSort($sortArray)
        {
            for ($i = 0; $i < count($sortArray); ++$i) {
                $key = $sortArray[$i];
                $j = $i - 1;
                while ($j > -1 && $sortArray[$j] > $key) {
                    $sortArray[$j + 1] = $sortArray[$j];
                    --$j;
                }
                $sortArray[$j + 1] = $key;
            }

            return $sortArray;
        }
        //快速排序
        public function quickSort($sortArray)
        {
            if (count($sortArray) <= 1) { //先判断数组长度是否大于1，否则就不需要排序
                return $sortArray;
            }
            $baseNum = $sortArray[0]; //选择第一个为标准
            //初始化两个数组
            $leftSortArray = array(); //小于标准的
            $rightSortArray = array(); //大于标准的
            for ($i = 1; $i < count($sortArray); ++$i) {
                if ($baseNum > $sortArray[$i]) {
                    $leftSortArray[] = $sortArray[$i];
                } else {
                    $rightSortArray[] = $sortArray[$i];
                }
            }
            $leftSortArray = $this->quickSort($leftSortArray);  //使用递归把两个数组内的数据排好序
            $rightSortArray = $this->quickSort($rightSortArray);
            //合并数组并返回
            return array_merge($leftSortArray, array($baseNum),    $rightSortArray);
        }

        //归并排序
        public function mergeSort(&$sortArray)
        {
            $length = count($sortArray);
			$this->achieveMergeSort($sortArray, 0, $length - 1);
        }
        //实现归并排序
        public function achieveMergeSort(&$sortArray, $left, $right)
        {
            if ($left < $right) {  //子序列内存在多余1个的元素，则拆分，分别排序，并合并
                $center = floor(($left + $right) / 2); //计算拆分的位置

                $this->achieveMergeSort($sortArray, $left, $center); //使用递归把左右两边再次排序
				$this->achieveMergeSort($sortArray, $center + 1, $right);

                $this->mergeArray($sortArray, $left, $center, $right);
            }
        }
        //合并两个有序数组成一个有序数组
        public function mergeArray(&$sortArray, $left, $center, $right)
        {
            //设置两个起始位置
            $a = $left;
            $b = $center + 1;
			$temp=array();
            while ($a <= $center && $b <= $right) {
                if ($sortArray[$a] < $sortArray[$b]) {
                    //当数组a和B都没有越界时
                    $temp[] = $sortArray[$a++];
                } else {
                    $temp[] = $sortArray[$b++];
                }
            }
            //判断数组A和B内的元素是否都用完了，没有的话将其全部插入到C数组内；
            while ($a <= $center) {
                $temp[] = $sortArray[$a++];
            }
            while ($b <= $center) {
                $temp[] = $sortArray[$b++];
            }
            //将C内排好序的部分，写入$sortArray:
            for ($i = 0; $i < count($temp); ++$i) {
                $sortArray[$left + $i] = $temp[$i];
            }
        }
    }
