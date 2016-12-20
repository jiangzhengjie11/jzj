<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>编辑用户资料</title>
<link rel="stylesheet" href="styles/style.css" type="text/css" media="all">
</head>
<body>
<?php
    session_start();
    require "comm.php";
    require "../class/pdo.php";
    require "../class/admin.php";
    
    if(isset($_POST['submit1'])){
        $ad=new admin();
        echo $_POST['username'];
        $admin=$ad->listNameAdmin($_POST['username']);
        //var_dump($admin);

        $name=$_POST['username'] ;
        //var_dump($name);

        $pass=$_POST['password'] ;
        var_dump($name);
        var_dump($pass);
        //$tmp = $ad->updateAdmin($name,$pass,"{$admin['id']}");
        $tmp=$ad->updateAdmin($name,$pass,"id='{$admin['id']}'");
        if ($tmp) {
            echo "<script>";
            echo "window.alert('修改成功！！')";
            echo "</script>";
        } else {
            echo "<script>";
            echo "window.alert('修改失败！！')";
            echo "</script>";
        }
    }
?>
<div class="container">
    <h3 class="marginbot">编辑用户资料<a href="user_list.php" class="sgbtn">返回用户列表</a></h3>
    <div class="mainbox">
        <form action="user_edit.php" method="post">
            <table class="opt">
                <tbody>
                    <tr>
                        <th>用户名:</th>
                    </tr>
                    <tr>
                        <td>
                        <input name="username" class="txt" type="text">
                        </td>
                    </tr>
                    <tr>
                        <th>密　码:<span style="font-weight:normal"> [密码留空，保持不变]</span></th>
                    </tr>
                    <tr>
                        <td>
                        <input name="password" value="" class="txt" type="password"> 
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="opt"><input name="submit1" value=" 提 交 " class="btn" tabindex="3" type="submit"></div>
        </form>
    </div>
</div>
</body>
</html>