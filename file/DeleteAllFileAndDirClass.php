<?php
	class DeleteAllFileAndDirClass{
		function deleteAllFileAndDir($path){
			$dirName=opendir($path);
				while($fileName=readdir($dirName)){
					if($fileName!="." && $fileName!=".."){
						$file=$dirName.'/'.$fileName;
						if(is_dir($file)){
							$this->deleteAllFileAndDir($file);
						}else{
							unlink($fileName);
						}
					}
				}
			rmdir($dirName);
			fclose($dirName);
			echo "删除目录成功！！";
		}
	}
	$path="D:\wampServer\wamp64\www\jzj\uploads";
	$dafadc=new DeleteAllFileAndDirClass();
	$dafadc->deleteAllFileAndDir($path);
?>