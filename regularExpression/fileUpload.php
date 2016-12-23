<?php

class fileUpload
{
    public function uploadIsSuceess()
    {
        if ($_FILES['picture']['error'] > 0) {
            switch ($_FILES['picture']['error']) {
                case 1:
                    echo '您上传的文件超过了upload_max_filesize的限制值</br>';
                    break;
                case 2:
                    echo '您上传的文件超过了HTML中MAX_FILE_SIZE的限制值</br>';
                    break;
                case 3:
                    echo '文件只是部分被上传！</br>';
                    break;
                case 4:
                    echo '没有文件被上传！</br>';
                    break;
                default:
                    echo '未知错误！';
            }
            exit;
        }
    }

    public function maxSize()
    {
        $maxSize = 5000000;
        if ($_FILES['picture']['size'] > $maxSize) {
            echo '上传的文件太大，不能超过'.$maxSize.'字节';
            exit;
        }
    }

    public function allowType()
    {
        $allowType = array('jpeg', 'jpg', 'png', 'jpeg', 'ifs', 'j2k');
        $str = explode('.', $_FILES['picture']['name']);
        $extensionName = array_pop($str);

        if (!in_array($extensionName, $allowType)) {
            echo '这不是允许的类型';
            exit;
        }

        return $extensionName;
    }

    public function fileCopy()
    {
        $filePath = 'uploads';
        $reName = date('Y').date('M').date('D').date('H').date('i').date('s').rand(100, 999).'.'.$this->allowType();
        $newFilePath = $filePath.'/'.$reName;
        if (is_uploaded_file($_FILES['picture']['tmp_name'])) {
            if (move_uploaded_file($_FILES['picture']['tmp_name'], $newFilePath)) {
                echo '上传成功';

                return $newFilePath;
            } else {
                echo '上传失败';
            }
        } else {
            echo '不是一个上传文件';
        }
    }

    public function fileHandle()
    {
        $this->uploadIsSuceess();
        $this->maxSize();
        $this->allowType();
        $path = $this->fileCopy();

        return $path;
    }
    public function connet()
    {
        $myPdo = new myPDO('mysql:host=192.168.113.141;dbname=jzj', 'root', '123') or die('连接数据库失败');

        return $myPdo;
    }
    public function addUserInfo($username, $password, $rePassword, $sex, $hobby, $picture,$personalIntroduce,$city)
    {
        $mypdo = $this->connet();
        $data = array('username' => $username, 'password' => $password, 'rePassword' => $rePassword, 'sex' => $sex, 'hobby' =>  $hobby, 'picture' =>$picture,'personalIntroduce'=>$personalIntroduce,'city'=>$city);
        $tmp = $mypdo->insert('user_regist', $data);

        return $tmp;
    }
}
