<?php
	class Cookie{
		public function createCookie($name,$value,$time="time()+3600"){
			if(isset($_COOKIE["$name"])){
				getCookie($name);
			}else{
				setcookie($name,$value,$time);
			}
		}
		public function getCookie($name){
			return $_COOKIE["$name"];
		}
		public function deleteCookie($name){
			setcookie($name);
		}
	}
?>