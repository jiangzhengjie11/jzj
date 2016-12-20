<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>添加资讯</title>
    <link rel="stylesheet" href="styles/style.css" type="text/css" media="all">
</head>
<body>
<?php
    require "comm.php";
    require '../class/pdo.php';
    require '../class/industryInformation.php';
    if(isset($_POST['submit'])){

        $infoLists=new industryInformation();
        $tmpNum=$infoLists->addInfo($_POST['infoTitle'],$_POST['publishTime'],$_POST['infoContent'],$_POST['aName']);
        if(!$tmpNum){
            echo "<script>";
            echo "window.alert('添加失败！！');";
            echo "</script>";
        }
    }
?>
<div class="container">
    <h3 class="marginbot">添加资讯<a href="news_list.php" class="sgbtn">返回资讯列表</a></h3>
    <form action="infoManager_add.php" method="post">
        <div class="mainbox">

                <table class="opt" style="width:600px;">
                    <tbody>
                    <tr>
                        <th>资讯名称：</th>

                    </tr>
                    <tr>
                        <td>
                            <input name="infoTitle" class="txt" style="width:400px;" type="text">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input name="publishTime" class="txt" value="<?php echo time();?>" style="width:400px;" type="hidden">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input name="aName" class="txt" value='<?php echo "{$_SESSION['name']}";?>'  style="width:400px;" type="hidden">
                        </td>
                    </tr>

                    <tr>
                        <th>资讯内容：</th>
                    </tr>
                    <tr>
                        <td><textarea style="width:400px; height:150px" name="infoContent"></textarea></td>
                    </tr>
                    </tbody>
                </table>
                <div class="opt"><input name="submit" value=" 提 交 " class="btn" tabindex="3" type="submit"></div>
        </div>
    </form>
</div>
</body>
</html>