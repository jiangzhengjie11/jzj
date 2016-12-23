<!DOCTYPE HTML>
<?php
require 'pdo.php';
require 'fileUpload.php';

if (isset($_POST['submit']))
{

    $file=new fileUpload();
    $hobby=$_POST['hobby'];

    $strHobby=implode(',',$hobby);
    /*var_dump($_POST['city']);die;*/
    $path=$file->fileHandle();
    $tmpNum=$file->addUserInfo($_POST['username'],md5($_POST['password']),md5($_POST['rePassword']),$_POST['sex'],$strHobby,$path,$_POST['introduction'],$_POST['city']);
    if(!$tmpNum){
        echo '提交失败！！！！';
    }
}
?>
<HTML>
<head>
    <meta http-equiv="Accept-Charset=UTF-8">
    <title>用户注册页面</title>
</head>
<body>
<h1>用户注册页面</h1>
<form name="myForm" method="post" action="form.php" enctype="multipart/form-data">
    <table>
        <tr>
            <td>用户名：</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>密码：</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td>确认密码：</td>
            <td><input type="password" name="rePassword"></td>
        </tr>
        <tr>
            <td>性别：</td>
            <td><input type="radio" name="sex" id="sex" value="男"><label for="sex">男</label>
            <input type="radio" name="sex" id="sex" value="女"><label for="sex">女</label></td>
        </tr>
        <tr>
            <td>爱好</td>
            <td><input type="checkbox" name="hobby[]" value="听音乐">听音乐
            <input type="checkbox" name="hobby[]" value="看电影">看电影
            <input type="checkbox" name="hobby[]" value="玩游戏">玩游戏</td>
        </tr>
        <tr>
            <td>你所在的城市</td>
            <td>
                <select name="city">
                    <option value="">请选择城市</option>
                    <option value="广州市">广州市</option>
                    <option value="北京">北京</option>
                    <option value="上海">上海</option>
                    <option value="深圳">深圳</option>
                </select>
            </td>

        </tr>
        <tr>
            <td>照片</td>
            <td><input type="file" name="picture" ></td>
        </tr>
        <tr>
            <td>个人简介：</td>
            <td><textarea name="introduction" cols="20" rows="5"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="提交"><input type="reset" name="reset" value="重写"></td>
        </tr>
    </table>

</form>
</body>
</HTML>