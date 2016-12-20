<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>添加新产品</title>
    <link rel="stylesheet" href="styles/style.css" type="text/css" media="all">
</head>
<?php

    require 'comm.php';
    require '../class/pdo.php';
    require '../class/category.php';

    require '../class/products.php';

    if (isset($_POST['submit'])) {
        $products= new products();
        $path=$products->fileHandle();
        $picPath=substr($path,9);
       // var_dump($picPath);
        $num=$products->addProduct($_POST['name'],$picPath,$_POST['desc'],$_POST['aid'],$_POST['cid'],$_POST['addTime']);

       /* echo '1111111111111111111111111111111'.'<br>';
        var_dump($_POST['addTime']);*/
        if(!$num){
            echo "<script>";
            echo "window.alert('添加失败！！');";
            echo "</script>";
        }
    }
?>
<body>
<div class="container">
    <h3 class="marginbot">添加产品<a href="product_list.php" class="sgbtn">返回产品列表</a></h3>
    <div class="mainbox">
        <form action="" method="post" enctype="multipart/form-data">
        <table class="opt" style="width:600px;">
            <tbody>
            <tr>
                <th>产品名称：</th>
            </tr>
            <tr>
                <td>
                    <input name="name" class="txt" style="width:400px;" type="text">
                </td>
            </tr>
            <tr>
                <th>产品类别：</th>
            </tr>
            <tr>
                <td>
                    <select name="cid">
                        <?php
                            $cats = new category();
                            $catSets = $cats->listCategorys();
                            foreach ($catSets as $value) {
                                echo "<option value='".$value['id']."'>".$value['name'].'</option>';
                            }
                        ?>
                        
                    </select>
                </td>
            </tr>
            <tr>
                <th>产品图片：</th>
            </tr>
            <tr>
                <td><input type="file" name="picture" /></td>
            </tr>
            <tr>
                <th>产品描述：</th>
            </tr>
            <tr>
                <td>
                    <textarea style="width:400px; height:150px" name="desc"></textarea>
                </td>
            </tr>
            <td>
                <input name="aid"  value='<?php
                   $admin=new admin();
                    $id=$admin->listAdminIdByName($_SESSION['name']);
                    foreach ($id as $vals){
                        echo $vals['id'];
                    }
                ?>' class="txt" style="width:400px;" type="hidden">
            </td>
            <td>
                <input name="addTime" value='<?php echo time();?>' class="txt" style="width:400px;" type="hidden">
            </td>
            </tbody>

        </table>
        <div class="opt"><input name="submit" value=" 提 交 " class="btn" tabindex="3" type="submit"></div>
        </form>
    </div>
</div>
</body>
</html>