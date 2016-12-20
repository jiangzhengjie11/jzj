<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>金陵贸易有限公司</title>
    <style>
        .listimg {
            width:100px;
            height: 150px;
            overflow: hidden;
        }
    </style>
<link type="text/css" rel="stylesheet" href="style/style.css" />
</head>
<?php
    require 'class/pdo.php';
    require "class/contactUs.php";
    require "class/category.php";
    require 'class/products.php';
?>
<body>
<div class="header">
	<h1 class="logo" title="金陵贸易有限公司"><a href="index.php"><img src="images/logo.gif" alt="金陵贸易有限公司" /></a></h1>
    <p class="top_r"><a href="#" class="btn_i">设为主页</a><a href="#" class="btn_f">收藏本站</a></p>
</div>
<div class="nav">
	<div class="nav_left"></div>
    <ul>
     	<li class="sel"><a href="index.php">首  页</a></li>
        <li><a href="about_us.php">公司简介</a></li>
        <li><a href="product_list.php">产品展示</a></li>
        <li><a href="info.php">行业资讯</a></li>
        <li><a href="guestbook.php">客户留言</a></li>
        <li><a href="contact_us.php" class="nobg">联系我们</a></li>
     </ul>
     <div class="time">2009-07-10 8:00</div>
    <div class="nav_right"></div>
</div>
<div class="banner">
	<a href="#"><img src="images/banner.jpg" align="banner" /></a>
</div>
<div class="content">
	<div class="lefter">
    	<div class="title">
        	<h2 class="cBlue fB">产品展示<b class="cGrey fn">Products</b></h2>
        </div>
        <ul class="list_l">
            <?php
                $pro=new products();
                $proSet=$pro->listSomeProduct(4);
                foreach ($proSet as $value){
                    echo '<li>';
                    echo "<span class='listimg'>"; //".$value['name']."".$value['picPath']."".$value['pdesc']."
                    echo "<a href='product_info.php?id=".$value['id']."&&name=".$value['name']."&&picPath=".$value['picPath']."&&pdesc=".$value['pdesc']."'><img src='admin/".$value['picPath']."' /></a>";
                    echo '</span>';
                    echo "<span class='listtxt'><a href='product_info.php?id=".$value['id']."&&name=".$value['name']."&&picPath=".$value['picPath']."&&pdesc=".$value['pdesc']."'></a></span>";
                    echo '</li>';
                }
            ?>
        	<!--<li>
                <span class="listimg">
                    <img src="images/tran.gif" class="blank" /><a href="product_info.html"><img src="images/prod1.gif" alt="图片1" /></a>
                </span>
                <span class="listtxt"><a href="product_info.html">图片1</a></span>
            </li>
			<li>
                <span class="listimg">
                    <img src="images/tran.gif" class="blank" /><a href="product_info.html"><img src="images/prod2.gif" alt="图片2" /></a>
                </span>
                <span class="listtxt"><a href="product_info.html">图片1</a></span>
            </li>
			<li>
                <span class="listimg">
                    <img src="images/tran.gif" class="blank" /><a href="product_info.html"><img src="images/prod3.gif" alt="图片3" /></a>
                </span>
                <span class="listtxt"><a href="product_info.html">图片1</a></span>
            </li>
			<li>
                <span class="listimg">
                    <img src="images/tran.gif" class="blank" /><a href="product_info.html"><img src="images/prod4.gif" alt="图片4" /></a>
                </span>
                <span class="listtxt"><a href="product_info.html">图片4</a></span>
            </li>-->
        </ul>
        <div class="blank10"></div>
        <div class="pages"><a href="#" class="pre">上一页</a><a class="current">1</a><a href="#?page=2">2</a><a href="#?page=3">3</a><a href="#?page=2" class="next">下一页</a></div>
        <div class="blank6"></div>
    </div>
	<div class="righter">
    	<div class="rightBox">
        	<h3>产品分类</h3>
            <ul class="list_r">
                <?php
                    $cats=new category();
                    $catSets=$cats->listSomeCategory(5);
                    foreach ($catSets as $value){
                        echo "<li><a href='productCategoryInfo.php?id=".$value['id']."'>".$value['name']."</a></li>";
                    }
                ?>
            	<!--<li><a href="product_list.html">类别1</a></li>
				<li><a href="product_list.html">类别2</a></li>
				<li><a href="product_list.html">类别3</a></li>
				<li><a href="product_list.html">类别4</a></li>-->

            </ul>
        </div>
    </div>
    <div class="hackbox"></div>
    
    
</div>
<div class="footer">
    <?php
    $contUs=new contactUs();
    $infoSet=$contUs->listSomeinfo(1);
    foreach ($infoSet as $key=>$vals){
        echo "地址：".$vals['addr']."&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "联系人：".$vals['contactPerson']."&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "移动电话：".$vals['mobileTelephone']."&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "固定电话：".$vals['fixedTelephone']."&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "传真：".$vals['fax']."&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    ?>
	<!--<p>地址：广东省广州市广州大道北  联系人：乐可   移动电话：13619829982 固定电话：020-1234567 传 真：020-1234567</p>-->
	<p>Copyright @ 2009 金陵贸易有限公司 版权所有</p>
	<p><a href="#">粤ICP备08108790号</a></p>
</div>
</body>
</html>
