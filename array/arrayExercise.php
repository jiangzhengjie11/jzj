<?php
class exerciseFive
{
	function autoTransformOne()
	{
		$str1 = null;
		$str2 = false;

		return $str1 == $str2 ? '相等' : '不相等';
	}
	function autoTransformTwo()
	{
		$str3 = '';
		$str4 = 0;

		return $str3 == $str4 ? '相等' : '不相等';
	}
	function autoTransformThree()
	{
		$str5 = 0;
		$str6 = '0';

		return $str5 == $str6 ? '相等' : '不相等'; //都相等，因为比较运算符进行比较时，会自动转型，null、false、空字符串、字符零都会转换成0后再比较
	}
}
    class arrayExercise
    {
        //作业1
        public function exerciseOne()
        {
            $empty = '';
            $null = null;
            $bool = false;
            //$notSet;
            $array = array();
            $a = 1;
            $x = &$a;
            $b = $a++;

            return $b;
        }

        //作业2
        public function maxValue($first, $two, $three)
        {
            /*$temp=$first>$two?$first:$two;
            return $temp>$three?$temp :$three;
            */
            return ($first > $two ? $first : $two) > $three ? ($first > $two ? $first : $two) : $three;
        }

        //作业3
        public function exerciseThree()
        {
            $b = 201;
            $c = 40;
            $a = $b > $c ? 4 : 5;

            return $a;
        }

        //作业4
        public function exerciseFour()
        {
            function timesTwo($int)
            {
                $int = $int * 2;
            }
            $int = 2;
            $result = timesTwo($int); //由于timesTwo函数并没有返回值，所以$result值为空
            return $result;
        }



        //作业6
        public function exerciseSix()
        {
            $a1 = null;
            $a2 = false;
            $a3 = 0;
            $a4 = '';
            $a5 = '0';
            $a6 = 'null';
            $a7 = array();
            $a8 = array(array());
            echo empty($a1) ? 'true' : 'false';
            echo empty($a2) ? 'true' : 'false';
            echo empty($a3) ? 'true' : 'false';
            echo empty($a4) ? 'true' : 'false';
            echo empty($a5) ? 'true' : 'false';
            echo empty($a6) ? 'true' : 'false';
            echo empty($a7) ? 'true' : 'false';
            echo empty($a8) ? 'true' : 'false';
        }

        //作业7
        public function exerciseSeven()
        {
            $count = 5;
            function get_count()
            {
                static $count = 0;

                return $count++;
            }
            echo $count; //5
            ++$count;
            echo get_count(); //++在后，所以先返回，再自增
            echo get_count(); //由于在函数内部Static 修饰了，成了静态变量，在后续函数调用时会保留前面函数调用的结果（只在函数内部保留，函数外无效）
            echo $count; //6
        }

        //作业8
        public function exchangeVariable($a, $b)
        {
            echo "交换前：$a $b";
            $a = $a + $b;
            $b = $a - $b;
            $a = $a - $b;
            echo "交换后：$a $b";
        }

        //作业9
        public function divisionArray($array)
        {
            return implode(',', $array);
        }

        //作业10
        public function arrayRecombination()
        {
            $arrOne = array(
                0 => array('fid' => 1, 'tid' => 1, 'name' => 'xiaoming'),
                1 => array('fid' => 1, 'tid' => 2, 'name' => 'zhangsan'),
                2 => array('fid' => 1, 'tid' => 5, 'name' => 'lisi'),
                3 => array('fid' => 1, 'tid' => 7, 'name' => 'wanwu'),
                4 => array('fid' => 3, 'tid' => 9, 'name' => 'zhaoliu'),
            );

            foreach ($arrOne as $arrOneKey => $arrOneValue) {
                foreach ($arrOneValue as $key => $val) {
                    unset($arrOne["$key"]['fid']);
                }
            }
            $arrTwo = array_chunk($arrOne, 4);

            return $arrTwo;
        }

        //作业12
        /*
        array_chunk()：返回将一个数组分割成多个数组后的新数组
        array_combine():返回一个array数组，用来自第一个参数数组的值作为键名,第二个参数数组的值作为相应的值
        array_key_exists():检查给定的键名或索引是否存在于数组中。
        array_keys():返回参数数组中的部分或所有的数字或者字符串的键名所组成的新数组。
        array_merge():将一个或多个数组单元合并起来，
        array_merge_recursive():返回递归地合并一个或多个数组后的新数组。
        array_multisort():该函数可以用来一次对多个数组进行排序。
        array_pop():将参数数组最后一个单元弹出（出栈）并返回它。数组的长度减一
        array_push():将一个或多个单元压入数组的末尾（入栈）
        array_rand():从数组中取出一个或多个随机的元素，并返回随机元素的一个或多个键
        array_replace():函数使用后面参数数组元素相同的key值替换前面参数数组的值
        array_shift():将参数数组的第一个元素 移出并作为结果返回，数组的长度减一并将所有其他元素向前移动一位。
        array_slice():根据第二个参数和结合第三个参数从数组中取出一段元素。
        array_unique():移出数组中重复的值。
        array_unshift():在数组的开头插入一个或多个单元（元素）。
        array_values():返回参数数组中所有的值并给其建立数字索引。
        count():计算参数数组中单元数目或对象中的属性个数。
        in_array():判断并搜索给定的元素是否位于参数数组中。
        key():返回数组中当前单元的键名。
        sort():对数组进行排序


        */
        //作业13
        public function multiplicationTable($num)
        {
            for ($i = 1; $i <= $num; ++$i) {
                for ($j = 1; $j <= $num; ++$j) {
                    echo  $i.'*'.$j.'='.$i * $j;
                    echo '|';
                }
                echo '</br>';
            }
        }
    }
//作业5

