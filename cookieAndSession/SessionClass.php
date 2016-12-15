<?php
	class Session(){
		public function createSession(){
			session_start();
		}
		public function getSessionID(){
			return session_id();
		}
		public function getSessionName(){
			return session_name();
		}
		public function deleteSession($name){
			createSession();
			$_SESSION=array();
			if(isset($_COOKIE[session_name()])){
				setcookie(session_name(),'',time()-3600,'/');
			}
			session_destroy();
		}
	}
?>