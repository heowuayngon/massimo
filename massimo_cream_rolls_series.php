<?php include("_header.php"); ?>

<body>
<div class="container">
	<div class="pro5_deco1 hide_on_mobile"><img src="images/fun buns/deco1.png" class="full_img"/></div>
    <div class="pro5_deco3 hide_on_mobile"><img src="images/fun buns/deco3.png" class="full_img"/></div>
    <div class="pro5_deco4 hide_on_mobile"><img src="images/fun buns/deco4.png" class="full_img"/></div>
    
	<div class="content">
        <?php include("_navigation.php"); ?>
        
        <div class="right_content_part product_content rolls_series">
            <img src="images/<?php echo $lang['IMAGES_massimo-fun-buns.png']?>" class="massimo-fun-buns" />
            <p><?php echo $lang['PRODUCTS_THE_PERFECT_']; ?></p>
            
            <div class="img_fun-buns"><img src="images/fun buns/product-fun-buns.png" class="full_img"/></div>
        </div>
    </div>
     <?php include("_footer.php"); ?>
</div>

<script>
	$(".btn_product").last().addClass("navi_lvl_1_selected");
	$(".btn_product4").last().addClass("navi_lvl_2_selected");
</script>
</body>
</html>
