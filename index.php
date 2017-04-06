<?php include("_header.php"); ?>
<style>
body, html{
	min-height:0px;
}
</style>
<body>
<!--LANDING PAGE MOTHER'S DAY-->
 
<div class="landing_page landing_motherday">
    <div class="wrap_all">
        <div class="landing_btn_close">
            <img src="images/close.png" />
        </div>
        <div class="landing_conent">
            <div class="landing_layout_left landing_aside">
                <div class="landing_content_left">
                    <div class="imgHeart">
                        <img src="images/landingpage/heart_and_text.png" />
                    </div>
                </div>
            </div>
            <div class="landing_layout_right landing_aside">
                <div class="landing_content_right">
                    <div class="landing_content_unbox">
                        <h1>Express your love to mom<br>for a chance to win</h1>
                        <h2>RM10,000 CASH</h2>
                        <h1>this Mother's Day</h1>
                    </div> 
                    <div class="landing_content_box">
                        <div class="landing_content_box_title">
                            <h3>CELEBRATE</h3>
                            <h4>MOTHER'S DAY WITH US</h4>
                        </div>
                        <div class="landing_content_box_detail">
                            <p>Queensbay Mall, Penang - Group Floor, Central Atrium<br><b>27 April - 1 May 2017</b></p>
                            <p>AEON Bukit Indah, Johor Bahru - Ground Floor, Centre Court<br><b>3 May - 7 May 2017</b></p>
                            <p>One Utama, Petaling Jaya - Ground Floor, Centre Court<br><b>10 May - 14 May 2017</b></p>
                        </div>

                    </div>

                </div>
            </div>
            <div class='landing_footer'>
                <div class="group_button">
                    <a href="http://hitz.fm/oap/2017/massimo-mom-i-love-you/default " class="button_square_orange" target="_blank">Find out more</a>
                    <a href="http://sinar.fm/oap/2017/massimo-mom-i-love-you/utama " class="button_square_orange" target="_blank">Ketahui dengan lebih</a>
                    <a href="http://my.com.my/oap/2017/massimo-mom-i-love-you/default " class="button_square_orange" target="_blank"><img src="images/landingpage/button_chinese.png" /></a>
                </div>
            </div>
        </div>

        <div class="wrap_image_all wrap_image_absolute">
            <div class="image_logo">
                <img src="images/landingpage/logo.png" />
            </div>
            <div class="image_mom_and_baby">
                <img src="images/landingpage/mom_and_bady.png" />
            </div>
            <div class="image_rice_tree_left_bottom">
                <img src="images/landingpage/rice_tree_left_bottom.png" />
            </div>
            <div class="image_rice_tree_right_bottom">
                <img src="images/landingpage/rice_tree_right_bottom.png" />
            </div>
        </div>
        <div class="wrap_border_all wrap_border_absolute">
            <hr class="wrap_border_green" />
            <hr class="wrap_border_white" />
            <hr class="wrap_border_red" />
        </div>
    </div>
    <div class="overlay"></div>
</div>      

    
    
<div class="container landing_content">
	<div class="landing_logo"><img src="images/logo.png" width="full_img" /></div>
	
    <!--<img src="images/massimo_bread_landing.png" width="100%" /></div>-->
        
    <div class="massion_bread_landing">
    	<div class="land_1"><img src="images/massimo_bread_landing_1.png" width="100%"/></div>
    
    	<div class="land_2"><img src="images/<?php echo $lang['IMAGES_massimo_bread_landing_2.png']?>" width="100%"/></div>
    </div>
    
    <div class="start_btn"><img src="images/<?php echo $lang['IMAGES_start_btn.png']; ?>" width="100%" /></div>
    
    <?php include("_footer.php"); ?>
</div>


<div class="container about_landing">
	<div class="content">
        <?php include("_navigation.php"); ?>
        
        <div class="right_content_part about_content">
        	<div class="title_about"><img src="images/<?php echo $lang['IMAGES_introduction.png']?>" class="full_img" /></div>
            <div class="about_txt_box_1">
            	<div class="about_img_1"><img src="images/about_mobile_1.png" class="full_img" /></div>
           	    <p><span style="font-size:23px; color:#684121;"><?php echo $lang['ABOUT_MASSIMO_']; ?></span><br />
                <?php echo $lang['ABOUT_AT_MASSIMO_']; ?> </p>
                <p><?php echo $lang['ABOUT_OUR_SIMPLE_']; ?></p>
                
                <p style="padding-top:10px;"><span style="font-size:20px; color:#684121;"><?php echo $lang['ABOUT_HISTORY']; ?></span><br />
                <?php echo $lang['ABOUT_IN_2001_']; ?></p>
                
                <p style="padding-top:10px;"><span style="font-size:20px; color:#684121;"><?php echo $lang['ABOUT_THE_MASSIMO_RANGE']; ?></span><br />
                <?php echo $lang['ABOUT_THERE_IS_NOTHING_'] ?></p>
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

				<p><?php echo $lang['ABOUT_SIMILARLY_']; ?></p>

				<p><?php echo $lang['ABOUT_THE_NAME_MASSIMO_IS_CHOSEN']; ?></p>
            </div>
        </div>
    </div>
    
     <?php include("_footer.php"); ?>
</div>

    
    

    
    
<script>
	$(".btn_about").last().addClass("navi_lvl_1_selected");
    /*
     * hide landing when click
     */
    $(".landing_motherday .landing_btn_close").on("click",function(){
        $(".landing_motherday").hide();
        $(".landing_motherday .overlay").hide();
    })
</script>
</body>
</html>
