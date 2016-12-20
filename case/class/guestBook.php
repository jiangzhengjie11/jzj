<?php
    class guestBook{
        function connet(){
            $mypdo = new myPDO("mysql:host=192.168.113.140;dbname=subentry", 'root', '123') or die("连接数据库失败");
            return $mypdo;
        }


        public function addMessage($name, $content)
        {
            $mypdo=$this->connet();
            $data = array('name' => "$name", 'content' => "$content");
            if (!$mypdo->insert('guestBook', $data)) {
                echo "插入失败";
            }
        }
        public function listMessage(){
            $mypdo=$this->connet();
            $sql="select * from guestBook ";
            $stmt=$mypdo->query($sql);
            $set=$stmt->fetchAll(PDO::FETCH_ASSOC);
            return $set;
        }
        public function messageCount(){
            $mypdo=$this->connet();
            $sql="select count(*) from guestBook ";
            $stmt=$mypdo->query($sql);
            return $stmt;
        }
    }
?>