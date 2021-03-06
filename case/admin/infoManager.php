<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>资讯管理</title>
    <link rel="stylesheet" href="styles/style.css" type="text/css" media="all">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
</head>
<body>
<?php
    require 'comm.php';
    require '../class/pdo.php';
    require '../class/industryInformation.php';
?>
<div class="container">
    <h3 class="marginbot">资讯信息<a href="infoManager_add.php" class="sgbtn">添加新资讯</a></h3>
    <div class="mainbox">
        <form action="infoManager.php" method="post">
            <table class="datalist fixwidth">
                <tbody>
                <tr>
                    <th nowrap="nowrap"><input name="chkall" id="chkall" class="checkbox" type="checkbox"><label for="chkall">删除</label></th>
                    <th nowrap="nowrap">资讯名称</th>
                    <th nowrap="nowrap">添加人</th>
                    <th nowrap="nowrap">添加时间</th>
                    <th nowrap="nowrap">详情</th>
                </tr>
                <?php
                /*foreach($sets as $key=>$vals){
                    echo "<tr>";
                    echo "<td width='80'><input name='' value='' class='checkbox' type='checkbox'></td>";
                    echo "<td><strong>".$vals["title"]."</strong></td>";
                    echo "<td width='100'>".$vals["aName"]."</td>";
                    echo "<td width='150'>".$vals["publishTime"]."</td>";
                    echo "<td width='100'><a href='news_edit.php'>编辑</a></td>";
                    echo "</tr>";
                }*/
                $infoManager=new industryInformation();
                $infoSets=$infoManager->listLinks();
                //var_dump($infoSets);
                foreach ($infoSets as $val){
                    echo "<tr>";
                    echo "<td width='80'><input name='' value='' class='checkbox' type='checkbox'></td>";
                    echo "<td><strong>".$val["infoTitle"]."</strong></td>";
                    echo "<td width='100'>".$val["aName"]."</td>";
                    echo "<td width='150'>".$val["publishTime"]."</td>";
                    echo "<td width='100'><a href='infoManager_add.php'>编辑</a></td>";
                    echo "</tr>";
                }
                ?>
                <tr class="nobg">
                    <td><input value="提 交" class="btn" type="submit"></td>
                    <td class="tdpage" colspan="4">
                        <div class="pages">
                            <em>100</em>
                            <strong>1</strong>
                            <a href="">2</a>
                            <a href="">3</a>
                            <a href="">4</a>
                            <a href="" class="next">&rsaquo;&rsaquo;</a>
                            <a href="" class="last">... </a>
                            <kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='?page='+this.value; return false;}" /></kbd>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="margintop"></div>
        </form>
    </div>
</div>
</body>
</html>