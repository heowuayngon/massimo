<?php include("_header.php"); ?>

<body>
<div class="container">
    <div class="pro3_deco2 hide_on_mobile"><img src="images/Massimo 100percent Wheat Loaf/deco2.png" class="full_img"/></div>
    <div class="pro3_deco3 hide_on_mobile"><img src="images/Massimo 100percent Wheat Loaf/deco3.png" class="full_img"/></div>
    <div class="pro3_deco4 hide_on_mobile"><img src="images/Massimo 100percent Wheat Loaf/deco4.png" class="full_img"/></div>
    
	<div class="content">
        <?php include("_navigation.php"); ?>
        
        <div class="right_content_part product_content">
        	<div class="float_parent">
            	<div class="img_m100wl"><img src="images/Massimo 100percent Wheat Loaf/Massimo-100-Wheat-Loaf.png" class="full_img"/></div>
                
                <div class="pro1_txt_box_1">
                	<img src="images/<?php echo $lang['IMAGES_massimo-100-wheat-loaf.png']?>" class="massimo-100-wheat-loaf" />
                    <div class="weight_title">420g</div>
                    <p><?php echo $lang['PRODUCTS_BAKED_']; ?></p>
                </div>
            </div>
        </div>
    </div>
     <?php include("_footer.php"); ?>
</div>

<script>
	$(".btn_product").last().addClass("navi_lvl_1_selected");
	$(".btn_product3").last().addClass("navi_lvl_2_selected");
</script>
</body>
</html>
