<?php
    class category{
        function connet(){
            $mypdo = new myPDO("mysql:host=192.168.113.140;dbname=subentry", 'root', '123') or die("连接数据库失败");
            return $mypdo;
        }
        function listSomeCategory($num){
                $mypdo=$this->connet();
                $sql="select * from category order by id desc limit 0,$num";
                $stmt=$mypdo->query($sql);
                $set=$stmt->fetchAll(PDO::FETCH_ASSOC);
                return $set;
        }
        public function addProductCategory($name){
            $mypdo=$this->connet();
            $data=array('name'=>"$name");
            $tmpNum=$mypdo->insert('category',$data);
            return $tmpNum;
        }
        function listCategorys(){
            $mypdo=$this->connet();
            $sql="select * from category order by id desc";
            $stmt=$mypdo->query($sql);
            $set=$stmt->fetchAll(PDO::FETCH_ASSOC);
            return $set;
        }
        function listCategoryProducts($id){
            $mypdo=$this->connet();
            $sql="select id,name,picPath,pdesc from products  where cid=$id order by cid";
            $stmt=$mypdo->query($sql);
            return $stmt;
        }
    }
?>