<?php

    class companyInfo
    {
        function connet()
        {
            $mypdo = new myPDO("mysql:host=192.168.113.140;dbname=subentry", 'root', '123') or die("连接数据库失败");
            return $mypdo;
        }

        public function listCompanyInfo()
        {
            $mypdo = $this->connet();
            $sql = "select * from companyInfo order by id desc limit 0,1";
            $stmt = $mypdo->query($sql);
            $set = $stmt->fetch(PDO::FETCH_ASSOC);
            return $set;
        }
        public function addSomeinfo($comBriefIntro,$aName){
            $mypdo=$this->connet();
            $addTime=time();
            $data=array('comBriefIntro'=>"$comBriefIntro",'aName'=>"$aName",'addTime'=>"$addTime");
            $tmp=$mypdo->insert('companyInfo',$data);
            return $tmp;
        }
    }
?>