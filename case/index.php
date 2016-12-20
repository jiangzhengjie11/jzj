<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>金陵贸易有限公司</title>
    <style>
        .list_l {
            overflow: hidden;
        }
    </style>
<link type="text/css" rel="stylesheet" href="style/style.css" />
</head>
<?php
    require "class/pdo.php";
    require "class/links.php";
    require "class/news.php";
    require "class/companyInfo.php";
    require 'class/contactUs.php';
    require 'class/industryInformation.php';
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
     <div class="time"><?php echo date('Y-m-d H:i:s',time())?></div>
    <div class="nav_right"></div>
</div>
<div class="banner">
	<a href="#"><img src="images/banner.jpg" align="banner" /></a>
</div>
<div class="content">
	<div class="w475_l">
    	<div class="title">
        	<h2 class="cBlue fB">公司简介<b class="cGrey fn">About us</b></h2>
        </div>
        <div class="intro">
            <?php
            $com=new companyInfo();
            $setCom=$com->listCompanyInfo();
          // var_dump($setCom);
            /*foreach ($setCom as $vals){
                var_dump( $vals['comBriefIntro']);

            }*/
            echo $setCom['comBriefIntro'];
            ?>
                <a href="about_us.php" class="cBlue"> 查看更多...</a>
                <div class="hackbox"></div>
        </div>
        <div class="blank10"></div>
        <div class="title">
        	<h2 class="cBlue fB">产品展示<b class="cGrey fn">Products</b></h2><span class="more"><a href="product_list.php" class="cBlue"> 更多...</a></span>
        </div>
        <ul class="list_l">
            <?php
            $pro=new products();
            $proSet=$pro->listSomeProduct(3);
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
                    <img src="images/tran.gif" class="blank" /><a href="product_info.php"><img src="images/prod1.gif" alt="222222" /></a>
                </span>
                <span class="listtxt"><a href="product_info.php">产品1</a></span>
            </li>
			<li>
                <span class="listimg">
                    <img src="images/tran.gif" class="blank" /><a href="product_info.php"><img src="images/prod2.gif" alt="222222" /></a>
                </span>
                <span class="listtxt"><a href="product_info.php">产品2</a></span>
            </li>
			<li>
                <span class="listimg">
                    <img src="images/tran.gif" class="blank" /><a href="product_info.php"><img src="images/prod3.gif" alt="222222" /></a>
                </span>
                <span class="listtxt"><a href="product_info.php">产品3</a></span>
            </li>
			
           -->
        </ul>
    </div>
    <div class="w370_r">
    	<div class="title">
        	<h2 class="cBlue fB">最新公告<b class="cGrey fn">News</b></h2>
        </div>
        <ul class="list_r">
			<?php
               $news=new news();

               $sets=$news->listSomeNews(4);
               /*var_dump($sets);
               date('Y-m-d H:i:s', 1156219870);
               */
               foreach ($sets as $vals) {
                   echo "<li>";
                   echo "<a title=".$vals['title']."  href='article.php?id=".$vals['id']."'>".$vals['title']."</a>";
                   echo "<span class='time1'>".date('Y-m-d H:i:s',$vals['publishTime'])."</span>";
                   echo "</li>";
               }

           ?><!-- <li>
			<a title="新闻1新闻1新闻1" href="article.php">新闻1新闻1新闻1新闻1新闻1新闻1</a>
			<span class="time1">2016-08-10 13:2
           asdasdasdasdasd
           0:12</span>
			</li>
			 <li>
			<a title="新闻2新闻2新闻2" href="article.php">新闻2新闻2新闻2新闻2新闻2新闻2</a>
			<span class="time1">2016-08-10 13:20:12</span>
			</li>
			 <li>
			<a title="新闻1新闻1新闻1" href="article.php">新闻1新闻1新闻1新闻1新闻1新闻1</a>
			<span class="time1">2016-08-10 13:20:12</span>
			</li>
			 <li>
			<a title="新闻1新闻1新闻1" href="article.php">新闻1新闻1新闻1新闻1新闻1新闻1</a>
			<span class="time1">2016-08-10 13:20:12</span>
			</li>-->
        	
        </ul>
        <div class="blank29"></div>
        <div class="title">
        	<h2 class="cBlue fB">行业资讯<b class="cGrey fn">Information</b></h2><span class="more"><a href="info.php" class="cBlue"> 更多...</a></span>
        </div>
        <ul class="list_r">
            <?php
            $ininfo=new industryInformation();
            $ininSet=$ininfo->listSomeLinks(5);
            foreach ($ininSet as $value){
                echo "<li><a href='article_info.php?id=".$value['id']."' title='".$value['infoTitle']."'>".$value['infoTitle'] ." </a><span class='time1'>".date('Y-m-d H:i:s',$value['publishTime'])."</span></li>";
            }
            ?>
        	
            <!--<li><a title="行业资讯行业资讯行业资讯" href="article.php">行业资讯行业资讯行业资讯</a>
			<span class="time1">2016-08-10 13:20:12</span></li>
			 <li><a title="行业资讯行业资讯行业资讯" href="article.php">行业资讯行业资讯行业资讯</a>
			<span class="time1">2016-08-10 13:20:12</span></li>
			 <li><a title="行业资讯行业资讯行业资讯" href="article.php">行业资讯行业资讯行业资讯</a>
			<span class="time1">2016-08-10 13:20:12</span></li>
			 <li><a title="行业资讯行业资讯行业资讯" href="article.php">行业资讯行业资讯行业资讯</a>
			<span class="time1">2016-08-10 13:20:12</span></li>-->
        	
        </ul>
    </div>
    <div class="hackbox"></div>
    
	<div class="title">
        	<h2 class="cBlue fB">友情链接<b class="cGrey fn">Links</b></h2>
    </div>
    <p class="links">    	
	    	<!--<a href="www.baidu.com">百度</a> | <a href="www.yaochufa.com">要出发</a> | <a href="www.jd.com">京东</a> -->
        <?php
        $link = new links();
        $linkSet=$link->listSomeLinks(3);
        //var_dump($linkSet);
        foreach ($linkSet as $val) {
            //var_dump($val['url']);
            echo "<a href='".$val['url']."'>" . $val['name'] . "</a>";
            echo "&nbsp;&nbsp;|&nbsp;&nbsp;";
        }
        ?>
    </p>
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