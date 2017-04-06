<?php include("_header.php"); ?>

<script type="text/javascript" src="js/jquery.fancybox.js"></script>
<script type="text/javascript" src="js/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />

<body>
<div class="container">
	<div class="content">
        <?php include("_navigation.php"); ?>
        
        <div class="right_content_part news_content">
        	<div class="title_newsroom"><img src="images/<?php echo $lang['IMAGES_newsroom.png']?>" class="full_img" /></div>
            
            <div class="newsroom_menu1" style="width:100%; max-width:372px;"><a href="newsroom.php"><img src="images/<?php echo $lang['IMAGES_newsroom_menu1.png']?>" class="full_img" /></a></div>
            <div class="newsroom_menu2" style="width:100%; max-width:281px;"><a href="newsroom_ads.php"><img src="images/<?php echo $lang['IMAGES_newsroom_menu2_active.png']?>" class="full_img" /></a></div>
            
            <div class="float_parent">
                <div class="news_thumb_photo"><a class="fancybox-media" href="https://www.youtube.com/watch?v=bh1IoN82AYs&list=PLXMgKzWMGqIWYMT8Bv4EFLh_VhGD-8HFJ&index=11"><img src="images/ads_1.png" class="full_img" /></a></div>
                <div class="news_thumb_photo"><a class="fancybox-media" href="https://www.youtube.com/watch?v=E_1XHItoZqI&index=10&list=PLXMgKzWMGqIWYMT8Bv4EFLh_VhGD-8HFJ"><img src="images/ads_2.png" class="full_img" /></a></div>
                <div class="news_thumb_photo"><a class="fancybox-media" href="https://www.youtube.com/watch?v=unK96MKmrmM&list=PLXMgKzWMGqIWYMT8Bv4EFLh_VhGD-8HFJ&index=8"><img src="images/ads_3.png" class="full_img" /></a></div>
                <div class="news_thumb_photo"><a class="fancybox-media" href="https://www.youtube.com/watch?v=loG5r2hQAaY&list=PLXMgKzWMGqIWYMT8Bv4EFLh_VhGD-8HFJ&index=3"><img src="images/ads_4.png" class="full_img" /></a></div>
                <div class="news_thumb_photo"><a class="fancybox-media" href="https://www.youtube.com/watch?v=VZtS6BGwE-4&index=5&list=PLXMgKzWMGqIWYMT8Bv4EFLh_VhGD-8HFJ"><img src="images/ads_5.png" class="full_img" /></a></div>
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
			
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});
	})
	
	$(".btn_newsroom").last().addClass("navi_lvl_1_selected");
</script>
</body>
</html>
