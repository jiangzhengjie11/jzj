<?php

    class industryInformation{
        function connet(){
            $mypdo = new myPDO("mysql:host=192.168.113.140;dbname=subentry", 'root', '123') or die("连接数据库失败");
            return $mypdo;
        }

        public function listSomeLinks($num){
            $mypdo=$this->connet();
            $sql="select * from industryInformation order by id desc limit 0,$num";
            $stmt=$mypdo->query($sql);
            $set=$stmt->fetchAll(PDO::FETCH_ASSOC);
            return $set;
        }
        public function listLinks(){
            $mypdo=$this->connet();
            $sql="select * from industryInformation ";
            $stmt=$mypdo->query($sql);
            $set=$stmt->fetchAll(PDO::FETCH_ASSOC);
            return $set;
        }
        public function listInfoById($id){
            $mypdo=$this->connet();
            $sql="select * from industryInformation where id={$id}";
            $stmt=$mypdo->query($sql);
            $info=$stmt->fetch(PDO::FETCH_ASSOC);
            return $info;
        }
        public function addInfo($infoTitle,$publishTime,$infoContent,$aName){
            $mypdo=$this->connet();
            $data=array('infoTitle'=>"$infoTitle",'publishTime'=>"$publishTime",'infoContent'=>"$infoContent",'aName'=>"$aName");
            $tmpNum=$mypdo->insert('industryInformation',$data);
            return $tmpNum;
        }
    }
?>