<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>金陵贸易有限公司</title>
    <link type="text/css" rel="stylesheet" href="style/style.css" />
</head>
<?php
require 'class/pdo.php';
require 'class/news.php';
require 'class/links.php';
require 'class/industryInformation.php';
require 'class/contactUs.php';
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
            <h2 class="cBlue fB">行业资讯<b class="cGrey fn">information</b></h2>
        </div>
        <div class="article">
            <?php
            $info=new industryInformation();
            echo $_GET['id'];
            if(isset($_GET['id'])){

                $information=$info->listInfoById($_GET['id']);
                //var_dump($information);
                echo "<h3>".$information['infoTitle']."</h3>";
                echo "<h4>发布时间：".$information['publishTitle']."</h4>";
                echo "<h4>添加人：".$information['aName']."</h4>";
                echo $information['infoContent'];

            }
            /*$news=new news();
            if(isset($_GET['id'])) {
                $datas = $news->listNewsById($_GET['id']);
                //var_dump(1111);
                echo "<h3>" . $datas['title'] . "</h3>";
                echo "<h4>发布时间：" . $datas['publishTime'] . "</h4>";
                echo $datas['newContent'];
            }*/
            ?>
            <!--<h3>新闻意义新闻意义新闻意义</h3>
            <h4>发布时间：2016-08-10 10:20:30</h4>
            新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义
            新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义新闻意义
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
                $sets=$news->listSomeNews(3);
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
    foreach ($infoSet as $key=>$vals) {
        echo "地址：" . $vals['addr'] . "&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "联系人：" . $vals['contactPerson'] . "&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "移动电话：" . $vals['mobileTelephone'] . "&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "固定电话：" . $vals['fixedTelephone'] . "&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "传真：" . $vals['fax'] . "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    ?>
    <!--<p>地址：广东省广州市广州大道北  联系人：乐可   移动电话：13619829982 固定电话：020-1234567 传 真：020-1234567</p>-->
    <p>Copyright @ 2009 金陵贸易有限公司 版权所有</p>
    <p><a href="#">粤ICP备08108790号</a></p>
</div>
</body>
</html>
