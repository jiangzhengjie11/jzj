<?php
	class TraverseDirClass{
		public function traverseDir($dirName){
			$dir=opendir($dirName);
			$i=0;
			while($fileName=readdir($dir)){
				$file=$dirName.'/'.$fileName;
				if($fileName !="." && $fileName!=".."){
					if(is_dir($file)){
						$allFileDir[$i]=$fileName;
					}
				}
				$i++;
			}
			closedir($dir);
			return $allFileDir;
		}
	}
	$tdc=new TraverseDirClass();
	var_dump($tdc->traverseDir("uploads"));
?>