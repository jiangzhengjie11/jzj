<?php
require "admin.php";
    class products{
        function uploadIsSuceess(){
            if($_FILES["picture"]["error"]>0){
                switch($_FILES["picture"]["error"]){
                    case 1 :
                        echo "您上传的文件超过了upload_max_filesize的限制值</br>";
                        break;
                    case 2 :
                        echo "您上传的文件超过了HTML中MAX_FILE_SIZE的限制值</br>";
                        break;
                    case 3 :
                        echo "文件只是部分被上传！</br>";
                        break;
                    case 4:
                        echo "没有文件被上传！</br>";
                        break;
                    default:
                        echo "未知错误！";
                }
                exit;
            }
        }
        function maxSize(){
            $maxSize=5000000;
            if($_FILES["picture"]["size"]>$maxSize){
                echo "上传的文件太大，不能超过".$maxSize."字节";
                exit;
            }
        }
        function allowType(){
            $allowType=array("jpz","jpg","png","jpeg","ifs","j2k");
            $str=explode(".",$_FILES["picture"]["name"]);
            $extensionName=array_pop($str);
            if(!in_array($extensionName,$allowType)){
                echo "这不是允许的类型";
                exit;
            }
            return $extensionName;
        }
        function fileCopy(){
            $filePath="../admin/uploads";
            $reName=date("Y").date("M").date("D").date("H").date("i").date("s").rand(100,999).".".$this->allowType();
            $newFilePath=$filePath."/".$reName;
            if(is_uploaded_file($_FILES["picture"]['tmp_name'])){
                if(move_uploaded_file($_FILES['picture']['tmp_name'],$newFilePath)){
                    echo "上传成功";
                    return $newFilePath;
                }else{
                    echo "上传失败";
                }
            }else{
                echo "不是一个上传文件";
            }
        }
        function fileHandle(){
            $this->uploadIsSuceess();
            $this->maxSize();
            $this->allowType();
            $path=$this->fileCopy();
            return $path;
        }
        function connet(){
            $myPdo = new myPDO("mysql:host=192.168.113.140;dbname=subentry", 'root', '123') or die("连接数据库失败");
            return $myPdo;
        }
        function addProduct($name,$picPath,$desc,$aid,$cid,$addTime){
            $mypdo=$this->connet();
            $data=array('name'=>$name,'picPath'=>$picPath,'pdesc'=>$desc,'aid'=>$aid,'cid'=>$cid,'addTime'=>$addTime);
            $tmp=$mypdo->insert('products',$data);
            return $tmp;
               /* echo '<pre>';
                $sql = 'insert into products(name,picPath,pdesc,aid,cid,addTime) values(?,?,?,?,?,?)';
                $stmt= $this->connet()->prepare($sql);
                $stmt->bindParam(1,$name);
                $stmt->bindParam(2,$picPath);
                $stmt->bindParam(3,$desc);
                $stmt->bindParam(4,$aid);
                $stmt->bindParam(5,$cid);
                $stmt->bindParam(6,$addTime);
                $stmt->execute();*/

        }
        function listAllProduct(){
            $mypdo=$this->connet();
            $sql="select products.name as pname,products.picPath,admin.name as aname,products.addTime from admin,products where products.aid=admin.id ";
            $stmt=$mypdo->query($sql);
            $set=$stmt->fetchAll(PDO::FETCH_ASSOC);
            return $set;
        }
        function listProductAddNameByAid($aid){
            $mypdo=$this->connet();
            $sql="select admin.name from admin,products where product.".$aid."=admin.id ";
            $stmt=$mypdo->query($sql);
            $set=$stmt->fetchAll(PDO::FETCH_ASSOC);
            return $set;
        }
        function listSomeProduct($num){
            $mypdo=$this->connet();
            $sql="select * from products order by id desc limit 0,$num";
            $stmt=$mypdo->query($sql);
            $set=$stmt->fetchAll(PDO::FETCH_ASSOC);
            return $set;
        }
        function productCount(){
            $mypdo=$this->connet();
            $sql="select count(*) from products";
            $stmt=$mypdo->query($sql);
            $set=$stmt->fetchAll(PDO::FETCH_ASSOC);
           
            return $set;
        }
    }
?>