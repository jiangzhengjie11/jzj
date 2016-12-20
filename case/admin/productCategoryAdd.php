<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>添加新产品分类</title>
    <link rel="stylesheet" href="styles/style.css" type="text/css" media="all">
</head>
<?php
    require 'comm.php';
    require '../class/pdo.php';
    require '../class/category.php';


    if(isset($_POST['submit'])){
        $cg=new category();
        $tmpNum=$cg->addProductCategory($_POST['name']);
        if(!$tmpNum){
            echo "<script>";
            echo "window.alert('添加失败！！！');";
            echo "</script>";
        }
    }
?>
<body>
<div class="container">
    <h3 class="marginbot">添加新产品分类<a href="product_list.php" class="sgbtn">返回产品管理列表</a></h3>
    <form action="productCategoryAdd.php" method="post">
        <div class="mainbox">
            <table class="opt" style="width:600px;">
                <tbody>
                <tr>
                    <th>产品分类的名称：</th>
                </tr>
                <tr>
                    <td>
                        <input name="name" class="txt" style="width:400px;" type="text">
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="opt"><input name="submit" value=" 提 交 " class="btn" tabindex="3" type="submit"></div>
        </div>
    </form>
</div>
</body>
</html>