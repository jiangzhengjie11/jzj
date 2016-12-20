<?php
    class links{
        function connet(){
            $mypdo = new myPDO("mysql:host=192.168.113.140;dbname=subentry", 'root', '123') or die("连接数据库失败");
            return $mypdo;
        }

        public function listSomeLinks($num){
                $mypdo=$this->connet();
                $sql="select * from link order by id desc limit 0,$num";
                $stmt=$mypdo->query($sql);
                $set=$stmt->fetchAll(PDO::FETCH_ASSOC);
                return $set;
        }

    }
?>