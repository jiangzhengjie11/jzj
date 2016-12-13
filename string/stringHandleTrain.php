<?php
	class StringHandle{
		
		//作业1
		function stringInversion(){
			$str='1112223334445';
			var_dump(strrev(chunk_split($str,3,",")));
		}
		//作业2
		function stringInversionAndDelete(){
			$str='www.yaochufa.com';
			var_dump(strrev(Ltrim($str,'www')));
		}
        //作业3
		function firstStringToUp(){
			$str1='my_leader';
			$str2='make_by_name';
            var_dump(str_replace(' ','',ucwords(str_replace('_',' ',$str1))));
			var_dump(str_replace(' ','',ucwords(str_replace('_',' ',$str2))));
		}
        //作业4
		function mySubstring1(){
			$mail = 'liming@yaochufa.com';
			
			var_dump(substr_replace($mail,"",0,6));
			
		}
		function mySubstring2(){
			$mail='liming@yaochufa.com';
			var_dump(str_replace("liming","",$mail));
		}
		function mySubstring3(){
			$mail='liming@yaochufa.com';
			var_dump(str_ireplace("liming","",$mail));
		}
		function mySubstring4(){
			$mail='liming@yaochufa.com';
			var_dump(strstr($mail,'@'));
		}
		function mySubstring5(){
			$mail='liming@yaochufa.com';
			var_dump(stristr($mail,'@'));
		}
		function mySubstring6(){
			$mail='liming@yaochufa.com';
			var_dump(strchr($mail,'@'));
		}
		function mySubstring7(){
			$mail='liming@yaochufa.com';
			var_dump(substr($mail,6));
		}
		function mySubstring8(){
			$mail='liming@yaochufa.com';
			var_dump(ltrim($mail,'liming'));
		}
		
		//作业5
		function stringMyInversion()
		{
			$str = "There is hainan";
			$strArray = explode(" ", $str);
			$strLen=count($strArray);
			for($i = 0;$i< strLen/2;$i++){
				$temp = $strArray[$i];
				$strArray[$i] = $strArray[strLen-1-$i];
				$strArray[strLen-1-$i] = $temp;
			}
				$str = implode(" ", $strArray);     
				return $str;

		}
	}
?>