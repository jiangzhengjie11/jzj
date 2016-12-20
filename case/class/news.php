<?php

    class news{
        function connet(){
            $mypdo = new myPDO("mysql:host=192.168.113.140;dbname=subentry", 'root', '123') or die("连接数据库失败");
            return $mypdo;
        }


        /*public function add($name, $password)
        {
            $date = time();
            $registIP=$_SERVER["REMOTE_ADDR"];
            $mypdo=$this->connet();
            $data = array('name' => "$name", 'password' => "$password", 'registTime' => "$date", 'registIP' => "$registIP", 'status' => '启用');
            if (!$mypdo->insert('admin', $data)) {
                echo "插入失败";
            }
        }*/
        public function listnews(){
            $mypdo=$this->connet();
            $sql="select * from news ";
            $stmt=$mypdo->query($sql);
            $set=$stmt->fetchAll(PDO::FETCH_ASSOC);
            return $set;
        }

        public function listSomeNews($num){
            $mypdo=$this->connet();

            $sql="select * from news order by id desc limit 0,$num";
            $stmt=$mypdo->query($sql);
            $set=$stmt->fetchAll(PDO::FETCH_ASSOC);
            return $set;
        }
        public function listNewsById($id){
            $mypdo=$this->connet();
            $sql="select * from news where id={$id}";
            $stmt=$mypdo->query($sql);
            $set=$stmt->fetch(PDO::FETCH_ASSOC);
            return $set;
        }
       /* public function updateNews($array){
            $title=$array[0];
            $publishTime=$array[1];
            $newContent=$array[2];
            $aName=$array[3];
            $mypdo=$this->connet();
            $sql="update news set title='".$title."',publishTime='".$publishTime."',newContent='".$newContent."',aName='".$aName."'";
            $tmpNum=$mypdo->updateBind($sql,$array);
            return $tmpNum;
        }*/
        public function addNews($title,$publishTime,$newContent,$aName){
            $mypdo=$this->connet();
            $data=array('title'=>"$title",'publishTime'=>"$publishTime",'newContent'=>"$newContent",'aName'=>"$aName");
            $tmpNum=$mypdo->insert('news',$data);
            return $tmpNum;
        }
        public function newsAndCompanyInfoCount(){
            $mypdo=$this->connet();
            $sql="select count(news.id)+count(companyInfo.id) from news,companyInfo";
            $stmt=$mypdo->query($sql);
            return $stmt;
        }
    }
?>