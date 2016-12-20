<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>金陵贸易有限公司</title>
<link type="text/css" rel="stylesheet" href="style/style.css" />
</head>
<?php
    require "class/pdo.php";
    require "class/news.php";
    require 'class/links.php';
    require "class/contactUs.php";
    require "class/industryInformation.php";
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
        <li><a href="about_us.php">公司简介</a></li>
        <li><a href="product_list.php">产品展示</a></li>
        <li class="sel"><a href="info.php">行业资讯</a></li>
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
        	<h2 class="cBlue fB">行业资讯<b class="cGrey fn">Information</b></h2>
        </div>
        <ul class="list_r" style="padding-right:40px">
            <?php
                $ininfo=new industryInformation();
                $ininSet=$ininfo->listSomeLinks(10);
                foreach ($ininSet as $value){
                    echo "<li><a href='article_info.php?id=".$value['id']."'>".$value['infoTitle'] ." </a><span class='time2'>".date('Y-m-d H:i:s',$value['publishTime'])."</span></li>";
                }
            ?>
        	<!--<li><a href="#">快讯:蒋孝严宣布共同建议 吁优化两岸合作条件  </a><span class="time2">2009-07-04</span></li>
            <li><a href="#">力拓间谍们情报交易链条曝光 包女歌手收买内奸 </a><span class="time2">2009-07-04</span></li>
            <li><a href="#">中石油乌鲁木齐石化分公司一成品油罐发生爆炸  </a><span class="time2">2009-07-04</span></li>
            <li><a href="#">英国出现首例甲型H1N1流感死亡病例 </a><span class="time2">2009-07-04</span></li>
            <li><a href="#">广东省招办就高考录取数据错误向考生致歉   </a><span class="time2">2009-07-04</span></li>
            <li><a href="#">广西遭遇今年首个热带风暴 “性急酋长”来倒水 </a><span class="time2">2009-07-04</span></li>
            <li><a href="#">四川达州持续遭受特大暴雨袭击</a><span class="time2">2009-07-04</span></li>
            <li><a href="#">快讯:蒋孝严宣布共同建议 吁优化两岸合作条件  </a><span class="time2">2009-07-04</span></li>
            <li><a href="#">力拓间谍们情报交易链条曝光 包女歌手收买内奸 </a><span class="time2">2009-07-04</span></li>
            <li><a href="#">中石油乌鲁木齐石化分公司一成品油罐发生爆炸  </a><span class="time2">2009-07-04</span></li>
            <li><a href="#">英国出现首例甲型H1N1流感死亡病例 </a><span class="time2">2009-07-04</span></li>
            <li><a href="#">广东省招办就高考录取数据错误向考生致歉   </a><span class="time2">2009-07-04</span></li>
            <li><a href="#">广西遭遇今年首个热带风暴 “性急酋长”来倒水 </a><span class="time2">2009-07-04</span></li>
            <li><a href="#">四川达州持续遭受特大暴雨袭击</a><span class="time2">2009-07-04</span></li>-->
        </ul>
        <div class="blank10"></div>
        <div class="pages"><a href="#" class="pre">上一页</a><a class="current">1</a><a href="#?page=2">2</a><a href="#?page=3">3</a><a href="#?page=2" class="next">下一页</a></div>
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
                    /*echo "<li>";
                    echo "<a title=".$vals['title']."  href='article.php?id=".$vals['id']."'>".$vals['newContent']."</a>";
                    echo "<span class='time1'>".$vals['publishTime']."</span>";
                    echo "</li>";*/
                    //var_dump($vals['id']);
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
