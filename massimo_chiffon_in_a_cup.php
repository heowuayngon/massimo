<?php include("_header.php"); ?>

<body>
<div class="container">
	<div class="pro4_deco1 hide_on_mobile"><img src="images/chiffon in a cup/deco1.png" class="full_img"/></div>
    <div class="pro4_deco2 hide_on_mobile"><img src="images/chiffon in a cup/deco2.png" class="full_img"/></div>
    <div class="pro4_deco3 hide_on_mobile"><img src="images/chiffon in a cup/deco3.png" class="full_img"/></div>
    
	<div class="content">
        <?php include("_navigation.php"); ?>
        
        <div class="right_content_part product_content">
                <div class="pro4_txt_box_1">
                	<img src="images/<?php echo $lang['IMAGES_chiffon-in-a-cup.png']?>" class="chiffon-in-a-cup" />
                    <p><?php echo $lang['PRODUCTS_MADE_WITH_'] ?></p>
                </div>
                <div class="img_ciac"><img src="images/chiffon in a cup/product-chiffon-in-a-cup.png" class="full_img"/></div>
        </div>
    </div>
     <?php include("_footer.php"); ?>
</div>

<script>
	$(".btn_product").last().addClass("navi_lvl_1_selected");
	$(".btn_product5").last().addClass("navi_lvl_2_selected");
</script>
</body>
</html>
