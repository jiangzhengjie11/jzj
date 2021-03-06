<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>金陵贸易有限公司</title>
    <link type="text/css" rel="stylesheet" href="style/style.css" />
</head>
<?php
require 'class/pdo.php';
require 'class/contactUs.php';
require 'class/news.php';
require 'class/links.php';
require 'class/category.php';
?>
<body>
<div class="header">
    <h1 class="logo" title="金陵贸易有限公司"><a href="index.php"><img src="images/logo.gif" alt="金陵贸易有限公司" /></a></h1>
    <p class="top_r"><a href="#" class="btn_i">设为主页</a><a href="#" class="btn_f">收藏本站</a></p>
</div>
<div class="nav">
    <div class="nav_left"></div>
    <ul>
        <li><a href="index.php">首  页</a></li>
        <li class="sel"><a href="about_us.php">公司简介</a></li>
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
            <h2 class="cBlue fB">产品信息<b class="cGrey fn">Product Info</b></h2>
        </div>
        <div class="product">
            <table>
                <tbody>
                <tr>
                    <th nowrap="nowrap" width="100">产品图片</th>
                    <th nowrap="nowrap" width="120">产品名称</th>
                    <th nowrap="nowrap" >产品描述</th>

                </tr>
                <?php
                $cateProduct=new category();
                $cateProSets=$cateProduct->listCategoryProducts($_GET['id']);
                foreach ($cateProSets as $vals){
                    echo "<tr>";
                    echo "<td><img src='admin/".$vals['picPath']."' alt='网格布' /></td>";
                    echo "<td>".$vals['name']."</td>";
                    echo "<td><p>".$vals['pdesc']."</p></td>";
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>

            <!--<img src="images/prod1.gif" alt="网格布" />
            <p><strong>产品名称</strong>：网格布</p>
            <p><strong>产品描述</strong>：</p>
            <p>日前，广东广州检验检疫局对广州汽车集团商贸有限公司进口钢材实施“诚信管理+企业验收+检验检疫抽批检验和定期检查”的检验监管新模式。这一新检验监管模式，既保证了工作质量，又提高了通关效率，受到了企业的高度评价。</p>
            <p>广州汽车集团商贸有限公司进口的钢板属大宗进口商品，若采用常规的批批抽样检验监管模式，将影响企业的物流效率，且增加其运营成本。为减轻企业负担，助推产业发展，广州局对该企业及进口钢材使用方进行了诚信评估后，决定对其实施检验监管新模式</p>
            -->
        </div>
    </div>
    <div class="righter">
        <div class="rightBox">
            <a href="guestbook.php" class="btn_s">我要留言</a>
        </div>
        <div class="blank10"></div>
        <div class="rightBox">
            <h3>最新公告<b class="cGrey fn">News</b></h3>
            <ul class="list_r">
                <?php

                $news=new news();
                $sets=$news->listSomeNews(4);
                //var_dump($sets);


                foreach ($sets as $vals) {

                    echo "<li><a href='article.php?id=".$vals['id']."'>".$vals['title']."</a></li>";

                }


                ?>
                <!--<li><a href="#">祝贺公司网站正式上线</a></li>
                <li><a href="#">禁止保温材料现场调配 保证...</a></li>
                <li><a href="#">节能65%烧结页岩空心砖面世</a></li>-->
            </ul>
        </div>
        <div class="blank10"></div>
        <div class="rightBox">
            <h3>友情链接<b class="cGrey fn">Links</b></h3>
            <ul class="list_r">
                <?php
                $link = new links();
                $linkSet=$link->listSomeLinks(3);

                //var_dump($linkSet);
                foreach ($linkSet as $val) {
                    //var_dump($val['url']);
                    echo "<li><a href='".$val['url']."'>" . $val['name'] . "</a></li>";
                }
                ?>
                <!--<li><a href="#">卓越网上购物</a></li>
                <li><a href="#">京东网上商城</a></li>
                <li><a href="#">携程旅行网</a></li>-->
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
