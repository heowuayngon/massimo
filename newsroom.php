<?php include("_header.php"); ?>

<script type="text/javascript" src="js/jquery.fancybox.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />

<body>
<div class="container">
	<div class="content">
        <?php include("_navigation.php"); ?>
        
        <div class="right_content_part news_content">
        	<div class="title_newsroom"><img src="images/<?php echo $lang['IMAGES_newsroom.png']?>" class="full_img" /></div>
            
            <div class="newsroom_menu1" style="width:100%; max-width:370px;"><a href="newsroom.php"><img src="images/<?php echo $lang['IMAGES_newsroom_menu1_active.png']?>" class="full_img" /></a></div>
            <div class="newsroom_menu2" style="width:100%; max-width:282px;"><a href="newsroom_ads.php"><img src="images/<?php echo $lang['IMAGES_newsroom_menu2.png']?>" class="full_img" /></a></div>
            
            <div class="float_parent">
                <div class="news_thumb_photo"><a class="fancybox" href="images/newsroom/BeritaHarian-10November2011.jpg"><img src="images/news_1.png" class="full_img" /></a></div>
                <div class="news_thumb_photo"><a class="fancybox" href="images/newsroom/ChinaPress-20October2011.jpg"><img src="images/news_2.png" class="full_img" /></a></div>
                <div class="news_thumb_photo"><a class="fancybox" href="images/newsroom/TheSun-12October2011.jpg"><img src="images/news_3.png" class="full_img" /></a></div>
                <div class="news_thumb_photo"><a class="fancybox" href="images/newsroom/NanyangPress-1October2011.jpg"><img src="images/news_4.png" class="full_img" /></a></div>
                <div class="news_thumb_photo"><a class="fancybox" href="images/newsroom/NewsStraitTimes-27September2011.jpg"><img src="images/news_5.png" class="full_img" /></a></div>
                <div class="news_thumb_photo"><a class="fancybox" href="images/newsroom/UtusanMalaysia-26September2011.jpg"><img src="images/news_6.png" class="full_img" /></a></div>
                <div class="news_thumb_photo"><a class="fancybox" href="images/newsroom/TheEdgeFinancialDaily-26September2011.jpg"><img src="images/news_7.png" class="full_img" /></a></div>
                <div class="news_thumb_photo"><a class="fancybox" href="images/newsroom/MalaysianReserve-21September2011.jpg"><img src="images/news_8.png" class="full_img" /></a></div>
            </div>

            
            
            <!--<div class="news_pages"><img src="images/news_pages.png" class="full_img" /></div>-->
            
        </div>
    </div>
     <?php include("_footer.php"); ?>
</div>

<script>
	$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();
	})
	
	$(".btn_newsroom").last().addClass("navi_lvl_1_selected");
</script>
</body>
</html>
