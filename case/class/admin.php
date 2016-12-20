<?php
/**
 * Created by PhpStorm.
 * User: jzj
 * Date: 2016/12/15
 * Time: 9:53
 */



class admin
{
    function connet(){
        $mypdo = new myPDO("mysql:host=192.168.113.140;dbname=subentry", 'root', '123') or die("连接数据库失败");
        return $mypdo;
    }


    public function addAdmin($name, $password)
    {
        $date = time();
        $registIP=$_SERVER["REMOTE_ADDR"];
        $mypdo=$this->connet();
        $data = array('name' => "$name", 'password' => "$password", 'registTime' => "$date", 'registIP' => "$registIP", 'status' => '启用');
        if (!$mypdo->insert('admin', $data)) {
            echo "插入失败";
        }
    }
    public function listAdmin(){
        $mypdo=$this->connet();
        $sql="select * from admin ";
        $stmt=$mypdo->query($sql);
        //$stmt1=$mypdo->query("select count(*) from admin");
        $set=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $set;
    }
    public function listNameAdmin($name){
        $mypdo=$this->connet();
        $sql="select * from admin where name='{$name}'";
        $stmt=$mypdo->query($sql);
        //$stmt1=$mypdo->query("select count(*) from admin");
        $set=$stmt->fetch(PDO::FETCH_ASSOC);
        return $set;
    }
    public function updateAdmin($name,$password,$where){
        $mypdo=$this->connet();
        $data=array('name'=>"{$name}",'password'=>"{$password}");
        $tmpNum=$mypdo->update('admin',$data,$where);
        return $tmpNum;
    }
    public function listAdminIdByName($name){
        $mypdo=$this->connet();
        $sql="select id from admin where name='{$name}'";
        $stmt=$mypdo->query($sql);
        //$stmt1=$mypdo->query("select count(*) from admin");
        $set=$stmt->fetch(PDO::FETCH_ASSOC);
        return $set;
    }
}