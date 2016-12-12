<?php
	class ValidateClass{
		private $email;
		private $ip;
		private $url;
		private $int_input;
		
		
		//邮箱验证
		public function setEmail($email){
			$this->email=$email;
			
		}
		public function getEmail(){
			$validateEmail=$this->email;
			if(filter_var($validateEmail,FILTER_VALIDATE_EMAIL)){
				echo '您输入的邮箱'.$validateEmail.'正确!';
				
			}else{
				echo "您输入的邮箱不正确！";
			}
		}
		//ip验证
		public function setIP($ip){
			$this->ip = $ip;
			
		}
		public function getIP(){
			$validateIP = $this->ip;
			if(filter_var($validateIP,FILTER_VALIDATE_IP)){
				echo '您输入的IP：'.$validateIP.'是合法的！';
			}
		}
		//URL验证
		public function setUrl($url){
			$this->url = $url;
			
		}
		public function getUrl(){
			$validateUrl = $this->url;
			if(filter_var($validateUrl,FILTER_VALIDATE_URL)){
				echo '您输入的URl是：'.$validateUrl;
			}else{
				echo '您输入的URL格式不正确';
			}
			
		}
		//验证某范围整形
		public function setInt_input($int){
			$this->int_input = $int;
			
		}
		public function getInt_input(){
			$validateInt= $this->int_input;
			$options = array(
						'options'=>array(
										'min_range' =>0,
										'max_range' =>10
									)
						);
			if(filter_var($validateInt,FILTER_VALIDATE_INT,$options)!==false){
				echo '您输入的数字'.$validateInt.'在0-10之间';
				
			}else{
				echo '您输入的数字'.$validateInt.'不在0-10之间';
			}
		}
		
	}
?>