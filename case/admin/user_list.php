<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理员列表</title>
<link rel="stylesheet" href="styles/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/common.js"></script>
</head>
<body>
<?php
    session_start();
    require "comm.php";
    require "../class/pdo.php";
    require "../class/admin.php";
    $admin= new admin();
    if(isset($_POST['submit'])){
        $admin->addAdmin($_POST['username'],$_POST['password']);
    }
    $admins=$admin->listAdmin();
?>
<div class="container">
    <div class="hastabmenu">
        <ul class="tabmenu">
            <li id="adduserbtn" class="tabcurrent"><a href="#" >添加管理员</a></li>
        </ul>
        <div id="adduserdiv" class="tabcontentcur">
            <form action="user_list.php" method="POST">
            <table width="100%">
                <tbody>
                    <tr>
                        <td>用户名:</td>
                        <td><input type="hidden" name="IP" /></td>
                        <td><input name="username" class="txt" type="text"></td>
                        <td>密码:</td>
                        <td><input name="password" class="txt" type="password"></td>
                        <td><input value="提 交" class="btn" type="submit" name="submit"></td>
                    </tr>
            	</tbody>
            </table>
            </form>
        </div>
	</div>

    <br>
    <h3>管理员列表</h3>
    <div class="mainbox">
            <table class="datalist fixwidth">
                <tbody>
                    <tr>
                        <th>
                        	<input name="chkall" id="chkall" class="checkbox" type="checkbox"><label for="chkall">删除</label>
                        </th>
                        <th>用户名</th>
                        <th>注册日期</th>
                        <th>注册IP</th>
                        <th>用户状态</th>
                        <th>编辑</th>
                    </tr>
                    <?php
                    //var_dump($admins);
                    echo "</br>";
                    foreach ($admins as $keys => $vals) {
                            echo "<tr>";
                            echo "<td class='option'>";
                            echo "<input name='' class='checkbox' type='checkbox'>";
                            echo "</td>";
                            echo "<td><strong>".$vals['name']."</strong></td>";
                            echo "<td>".$vals['registTime']."</td>";
                            echo "<td>".$vals['registIP']."</td>";
                            echo "<td>".$vals['status']."</td>";
                            echo "<td><a href='user_edit.php'>编辑</a></td>";
                            echo "</tr>";
                        }
                    ?>
                   <!-- <tr>
                        <td class="option">
                        	<input name="" class="checkbox" type="checkbox">
                        </td>
                        <td><strong>admin</strong></td>
                        <td>2009-07-01 12:05</td>
                        <td>127.0.0.1</td>
                        <td>启用</td>
                        <td><a href="user_edit.php">编辑</a></td>
                    </tr>-->
                    <!--<tr>
                        <td class="option">
                        	<input name="" class="checkbox" type="checkbox">
                        </td>
                        <td><strong>admin2</strong></td>
                        <td>2009-07-01 12:05</td>
                        <td>127.0.0.1</td>
                        <td>启用</td>
                        <td><a href="user_edit.php">编辑</a></td>
                    </tr>
                    <tr class="nobg">
                        <td><input value="提 交" class="btn" type="submit"></td>
                        <td class="tdpage" colspan="6">
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
                    </tr>-->
                </tbody>
            </table>
    </div>
</div>
</body>
</html>