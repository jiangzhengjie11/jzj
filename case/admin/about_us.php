<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>联系我们</title>
<link rel="stylesheet" href="styles/style.css" type="text/css" media="all">
</head>
<?php
    //session_start();
    require "comm.php";
    require "../class/companyInfo.php";
    if(isset($_POST['submit'])){
        $comInfo=new companyInfo();
        $comInfo->addSomeinfo($_POST['content'],$_POST['aName']);
    }
?>
<body>
<div id="append"></div>
<div class="container">
	<h3>公司简介</h3>
    <div class="mainbox">
        <form action="about_us.php" method="post">
            <table style="width:700px;">
                <tbody>
                	<tr>
                    	<td><textarea rows="10" cols="80" name="content"></textarea></td>
                    </tr>
                    <tr>
                    	<td><input type="hidden" name="aName" value="<?php echo $_SESSION['name'];?>"/></td>
                    </tr>
                    <tr>
                        <td><input value="提 交" class="btn" type="submit" name="submit"></td>
                    </tr>
                    
                </tbody>
            </table>
        </form>
    </div>
</div>
</body>
</html>

