<?php include("_header.php"); ?>

<body>
<div class="container">
	<div class="pro6_deco1 hide_on_mobile"><img src="images/whole wheat buns/deco1.png" class="full_img"/></div>
    <!--<div class="pro6_deco2 hide_on_mobile"><img src="images/whole wheat buns/deco2.png" class="full_img"/></div>-->
    <div class="pro6_deco3 hide_on_mobile"><img src="images/whole wheat buns/deco3.png" class="full_img"/></div>
    <div class="pro6_deco4 hide_on_mobile"><img src="images/whole wheat buns/deco4.png" class="full_img"/></div>
    
	<div class="content">
        <?php include("_navigation.php"); ?>
        
        <div class="right_content_part product_content">
        
        		<div class="pro6_txt_box_1">
                	<img src="images/<?php echo $lang['IMAGES_massimmo-100-whole-wheat-buns.png']?>" class="massimmo-100-whole-wheat-buns" />
                    <div class="weight_title">420g</div>
                  <p dir="ltr"><strong id="docs-internal-guid-1f08c120-a5f4-76af-2292-2fb9e1279859"><?php echo $lang['PRODUCTS_CRAVING_']; ?></strong></p>
                    <p>&nbsp;</p>
                    
                    <div class="img_wwb"><img src="images/whole wheat buns/product-whole-wheat-buns.png" class="full_img"/></div>
                </div>
        </div>
    </div>
     <?php include("_footer.php"); ?>
</div>

<script>
	$(".btn_product").last().addClass("navi_lvl_1_selected");
	$(".btn_product6").last().addClass("navi_lvl_2_selected");
</script>
</body>
</html>
