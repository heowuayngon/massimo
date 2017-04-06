<?php include("_header.php"); ?>

<body>
<div class="container">
	<div class="pro2_deco1 hide_on_mobile"><img src="images/White Sandwich Loaf/deco1.png" class="full_img"/></div>
    <div class="pro2_deco3 hide_on_mobile"><img src="images/White Sandwich Loaf/deco3.png" class="full_img"/></div>
    
	<div class="content">
        <?php include("_navigation.php"); ?>
        
        <div class="pro2_deco2 hide_on_mobile"><img src="images/White Sandwich Loaf/deco2.png" class="full_img"/></div>
        
        <div class="right_content_part product_content">
        	<div class="float_parent">
            	<div class="img_wsl"><img src="images/White Sandwich Loaf/White-Sandwich-Loaf.png" class="full_img"/></div>
                
                <div class="pro1_txt_box_1">
                	<img src="images/<?php echo $lang['IMAGES_massimo-white-sandwich-loaf.png']?>" class="massimo-white-sandwich-loaf" />
                    <div class="weight_title">400g & 600g</div>
                    <p id="docs-internal-guid-52e68f1f-a5d1-85ab-3ba8-b884dd539b79" dir="ltr"><?php echo $lang['PRODUCTS_THERES_NOTHING_'] ?></p>
                    <p>&nbsp;</p>
                </div>
            </div>
        </div>
    </div>
     <?php include("_footer.php"); ?>
</div>

<script>
	$(".btn_product").last().addClass("navi_lvl_1_selected");
	$(".btn_product2").last().addClass("navi_lvl_2_selected");
</script>
</body>
</html>
