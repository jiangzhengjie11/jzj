<?php
/*
	class fileUploadAndMultifileUpload{
		function simpleFileUpload(){
			if($_FILES["upload"]){
				
			}
		}
	}
	*/
		//var_dump($_POST);
		//var_dump($_FILES);

	if($_FILES["upload"]["error"]>0){
		switch($_FILES["upload"]["error"]){
			case 1 :
				echo "您上传的文件超过了upload_max_filesize的限制值</br>";
				break;
			case 2 :
				echo "您上传的文件超过了HTML中MAX_FILE_SIZE的限制值</br>";
				break;
			case 3 :
				echo "文件只是部分被上传！</br>";
				break;
			case 4:
				echo "没有文件被上传！</br>";
				break;
			default:
				echo "未知错误！";
		}
		exit;
	}
	$maxSize=5000000;
	if($_FILES["upload"]["size"]>$maxSize){
		echo "上传的文件太大，不能超过".$maxSize."字节";
		exit;
	}
	
	$allowType=array("txt","jpg","png","jpeg","html");
	$str=explode(".",$_FILES["upload"]["name"]);
	$extensionName=array_pop($str);
	if(!in_array($extensionName,$allowType)){
		echo "这不是允许的类型";
		exit;
	}
	
	$filePath="./uploads/";
	$reName=date("Y").date("M").date("D").date("H").date("i").date("s").rand(100,999).".".$extensionName;
	if(is_uploaded_file($_FILES["upload"]['tmp_name'])){
		if(move_uploaded_file($_FILES['upload']['tmp_name'],$filePath.$reName)){
			echo "上传成功";
		}else{
			echo "上传失败";
		}
	}else{
		echo "不是一个上传文件";
	}
?>
