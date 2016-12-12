<?php
	class ValidateClass{
		private $email;
		private $ip;
		private $url;
		private $intInput;
		
		
		//邮箱验证
		public function setEmail($email){
			$this->email=$email;
			
		}
		public function getEmail(){
			$validateEmail=$this->email;
			$tmp="您输入的邮箱不正确！";
			if(filter_var($validateEmail,FILTER_VALIDATE_EMAIL)){
				$tmp='您输入的邮箱'.$validateEmail.'正确!';
				return $tmp;
			}
			return $tmp;
		}
		//ip验证
		public function setIP($ip){
			$this->ip = $ip;
			
		}
		public function getIP(){
			$validateIP = $this->ip;
			$tmp="您输入的IP是不合法的！！！";
			if(filter_var($validateIP,FILTER_VALIDATE_IP)){
				$tmp='您输入的IP：'.$validateIP.'是合法的！';
				return $tmp;
			}
			return $tmp;
		}
		//URL验证
		public function setUrl($url){
			$this->url = $url;
			
		}
		public function getUrl(){
			$validateUrl = $this->url;
			$tmp='您输入的URL格式不正确';
			if(filter_var($validateUrl,FILTER_VALIDATE_URL)){
				$tmp='您输入的URl是：'.$validateUrl;
				return $tmp;
			}
			return $tmp;
		}
		//验证某范围整形
		public function setIntInput($int){
			$this->intInput = $int;
			
		}
		public function getIntInput(){
			$validateInt= $this->intInput;
			$options = array(
						'options'=>array(
										'min_range' =>0,
										'max_range' =>10
									)
						);
			$tmp="您输入的数字'.$validateInt.'不在0-10之间";
			if(filter_var($validateInt,FILTER_VALIDATE_INT,$options)!==false){
				$tmp='您输入的数字'.$validateInt.'在0-10之间';
				return $tmp;
			}
			return $tmp;
		}
		
	}
?>