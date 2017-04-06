<?php include("_header.php"); ?>

<body>
<div class="container">
	<div class="content">
        <?php include("_navigation.php"); ?>
        
        <div class="right_content_part about_content">
        	<div class="title_about"><img src="images/<?php echo $lang['IMAGES_introduction.png']?>" class="full_img" /></div>
            <div class="about_txt_box_1">
            	<div class="about_img_1"><img src="images/about_mobile_1.png" class="full_img" /></div>
           	    <p><span style="font-size:23px; color:#684121;"><?php echo $lang['ABOUT_MASSIMO_']; ?></span><br />
                <?php echo $lang['ABOUT_AT_MASSIMO_']; ?> </p>
                <p><?php echo $lang['ABOUT_OUR_SIMPLE_']; ?></p>
                
                <p style="padding-top:10px;"><span style="font-size:20px; color:#684121;"><?php echo $lang['ABOUT_HISTORY']?></span><br />
                <?php echo $lang['ABOUT_IN_2001_']; ?></p>
                
                <p style="padding-top:10px;"><span style="font-size:20px; color:#684121;"><?php echo $lang['ABOUT_THE_MASSIMO_RANGE']; ?></span><br />
                <?php echo $lang['ABOUT_THERE_IS_NOTHING_']; ?></p>
                <p>
                <img src="images/about_bread.png" class="hide_on_mobile" />
                </p>
            </div>
            
            <div class="about_txt_box_2">
            	<div class="about_img_2"><img src="images/about_mobile_2.png" class="full_img hide_on_desktop" /></div>
                
                <div class="title_brandname"><img src="images/<?php echo $lang['IMAGES_brand_name.png']?>" class="full_img" /></div>
                
                <p>
                <div style="width:100%; max-width:400px;" id="brand_name_img">
                <img src="images/italian_baker.png" class="full_img" />
                </div>
                </p>
                
                <p><?php echo $lang['ABOUT_THE_NAME_MASSIMO_IS_WELL_']; ?></p>

				<p><?php echo $lang['ABOUT_SIMILARLY_'] ?></p>

				<p><?php echo $lang['ABOUT_THE_NAME_MASSIMO_IS_CHOSEN'] ?></p>
            </div>
        </div>
    </div>
    
    
    <?php include("_footer.php"); ?>
</div>

<script>
	$(".btn_about").last().addClass("navi_lvl_1_selected");
</script>
</body>
</html>
