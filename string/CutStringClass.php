<?php
	class CutStringClass
	{
		
		function cutStr($sourcestr,$cutlength)
		{
			$returnstr = '';
			$i = 0;
			$n = 0;//字串长度计
			$str_length = strlen($sourcestr);//字节数
			while (($n < $cutlength) && ($i <= $str_length)) {
				$temp_str = substr($sourcestr, $i, 1);
				$ascnum = ord($temp_str);//得到字符串中第$i位字符的ascii码
				if ($ascnum >= 224)    //判断ASCll的值
				{
					$returnstr = $returnstr . substr($sourcestr, $i, 3); //根据UTF-8编码规范，将3个连续的字符计为单个字符
					$i = $i + 3;            //实际Byte计为3
					$n++;            
				} elseif ($ascnum >= 192) //如果ASCII位高与192，
				{
					$returnstr = $returnstr . substr($sourcestr, $i, 2); //根据UTF-8编码规范，将2个连续的字符计为单个字符
					$i = $i + 2;            //实际Byte计为2
					$n++;           
				} elseif ($ascnum >= 65 && $ascnum <= 90) //大写字母， 
				{
					$returnstr = $returnstr . substr($sourcestr, $i, 1);
					$i = $i + 1;            //实际的Byte数仍计1个
					$n++;           
				} else                //其他情况下，包括小写字母和半角标点符号，
				{
					$returnstr = $returnstr . substr($sourcestr, $i, 1);
					$i = $i + 1;            //实际的Byte数计1个
					$n = $n + 0.5;        //小写字母和半角标点等与半个高位字符宽
				}
			}
			if ($str_length > $i) {
				$returnstr = $returnstr . "...";//超过长度时在尾处加上省略号
			}
			return $returnstr;
		}

	}
?>