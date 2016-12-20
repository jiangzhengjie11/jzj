<?php

class contactUs
{
    function connet()
    {
        $mypdo = new myPDO("mysql:host=192.168.113.140;dbname=subentry", 'root', '123') or die("连接数据库失败");
        return $mypdo;
    }

    public function listSomeinfo($num)
    {
        $mypdo = $this->connet();
        $sql = "select * from contactUs order by id desc limit 0,$num";
        $stmt = $mypdo->query($sql);
        $set = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $set;
    }
    public function addSomeinfo($aName,$addr,$mobileTelephone,$fixedTelephone,$fax,$contactPerson){
        $mypdo=$this->connet();
        $addTime=time();
        //$data = array('name' => "$name", 'password' => "$password", 'registTime' => "$date", 'registIP' => "$registIP", 'status' => '启用')
        $data=array('aName'=>"$aName",'addr'=>"$addr",'addTime'=>"$addTime",
            'mobileTelephone'=>"$mobileTelephone",'fixedTelephone'=>"$fixedTelephone",'fax'=>"$fax",'contactPerson'=>"$contactPerson");
        //var_dump($data);
        $tmp=$mypdo->insert('contactUs',$data);
           return $tmp;
    }
}
?>