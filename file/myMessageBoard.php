<!DOCTYPE HTML>
<?php
?>
<html>
	<head>
		<meta http-equiv=Content-Type content="text/html;charset=utf-8">
	</head>
	<body>
		<div><h1>我的留言本</h1></div>
		<hr />
		<?php


			$fd=fopen("messageBoard.txt",'a+');
			if(filesize("messageBoard.txt")){
				while(!feof($fd)){
					echo fgets($fd);
					echo "</br>";
				}
			}
			fclose($fd);
			if($_SERVER['REQUEST_METHOD']=='POST') {
				$time = date('Y-M-D:H-i-s', time());
				$str = $time." ; ".$_POST['name']." 您好！" ."留言内容：". $_POST['myContent']."\r\n";

				$fh=fopen("messageBoard.txt",'a+');
				fwrite($fh,$str);
				while(!feof($fh)){
					 echo fgets($fh);
				}
			}
			
		?>
		<div><h2>我要留言</h2></div>
		<hr />
		<form action="myMessageBoard.php" method="POST" name="myForm">
			<span>昵称：</span>
			<input type="text" name="name" size=20  />
			</br>
			<span>内容：</span>
			<textarea name="myContent" rows='5' cols="22" ></textarea>
			</br>
			<input type="submit" name="submit" value="提交" />
		</form>
		
	</body>
</html>