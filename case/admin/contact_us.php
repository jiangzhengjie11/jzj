<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>联系我们</title>
<link rel="stylesheet" href="styles/style.css" type="text/css" media="all">
</head>
<?php
    require 'comm.php';
    require '../class/pdo.php';
    require '../class/contactUs.php';
    session_start();
?>
<body>
<div id="append"></div>
<div class="container">
	<h3>联系我们</h3>
    <div class="mainbox">
        <?php
            if (isset($_POST['submit'])) {
                $cu = new contactUs();

                $tmp = $cu->addSomeinfo($_POST['aName'], $_POST['addr'], $_POST['mobileTelephone'], $_POST['fixedTelephone'], $_POST['fax'], $_POST['contactPerson']);
                //$aName,$addr,$mobileTelephone,$fixedTelephone,$fax,$contactPers
                if (!$tmp) {
                    echo '<script>';
                    echo "window.alert('添加失败');";
                    echo '</script>';
                }
            }
        ?>
        <form action="contact_us.php" method="post">
            <table style="width:700px;">
                <tbody>

                    <tr>
                        <td><input type="hidden" name="aName" value='<?php echo $_SESSION['name']; ?>'/></td>
                    </tr>
                    <tr>
                        <td>联系人</td>
                        <td><input type="text" name="contactPerson"/></td>
                    </tr>
                    <tr>
                        <td>地址</td>
                        <td><input type="text" name="addr"/></td>
                    </tr>
                    <tr>
                        <td>移动电话</td>
                        <td><input type="text" name="mobileTelephone"/></td>
                    </tr>
                    <tr>
                        <td>固定电话</td>
                        <td><input type="text" name="fixedTelephone"/></td>
                    </tr>
                    <tr>
                        <td>传真</td>
                        <td><input type="text" name="fax"/></td>
                    </tr>
                    <tr>
                        <td><input value="提 交" name="submit" class="btn" type="submit"></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>
</body>
</html>

