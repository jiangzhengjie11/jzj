<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>留言板</title>
    <link rel="stylesheet" href="styles/style.css" type="text/css" media="all">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
</head>
<body>
<?php

require "comm.php";
require '../class/pdo.php';
require '../class/guestBook.php';

?>
<div class="container">
    <h3 class="marginbot">留言公告</h3>
    <div class="mainbox">
        <form action="news_list.php" method="post">
            <table class="datalist fixwidth">
                <tbody>
                <tr>
                    <th nowrap="nowrap"><input name="chkall" id="chkall" class="checkbox" type="checkbox"><label for="chkall">删除</label></th>
                    <th nowrap="nowrap">昵称</th>
                    <th nowrap="nowrap">内容</th>
                </tr>
                <?php
                    $gb=new guestBook();
                    $gbSets=$gb->listMessage();
                    //var_dump($gbSets);
                    foreach ($gbSets as $vals){
                       /* <tr>
                        <td width="80"><input name="" value="" class="checkbox" type="checkbox"></td>
                        <td><strong>祝贺公司网站正式上线！</strong></td>
                        <td width="100">admin</td>
                        <td width="150">2009-07-01 12:05</td>
                        <td width="100"><a href="">编辑</a></td>
                    </tr>*/
                        echo "<tr>";
                        echo "<td width='80'><input name='' value='' class='checkbox' type='checkbox'></td>";
                        echo "<td>".$vals['name']."</td>";
                        echo "<td>".$vals['content']."</td>";
                        echo "</tr>";
                    }
                ?>

                <tr class="nobg">
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