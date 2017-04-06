<?php include("_header.php"); ?>

<body>
<div class="container">
	<div class="pro1_deco2 hide_on_mobile"><img src="images/Sandwich Loaf with Wheat Germ/deco2.png" class="full_img"/></div>
    
	<div class="content">
        <?php include("_navigation.php"); ?>
        <div class="pro1_deco1 hide_on_mobile"><img src="images/Sandwich Loaf with Wheat Germ/deco1.png" class="full_img"/></div>
        <div class="pro1_deco3 hide_on_mobile"><img src="images/Sandwich Loaf with Wheat Germ/deco3.png" class="full_img"/></div>
        
        <div class="right_content_part product_content">
        	<div class="float_parent">
            	<div class="img_slwwg"><img src="images/Sandwich Loaf with Wheat Germ/product-sandwich-loaf-with-wheat-germ.png" class="full_img"/></div>
                
                <div class="pro1_txt_box_1">
                	<img src="images/<?php echo $lang['IMAGES_massimo-sandwich-loaf-with-wheat-germ.png']?>" class="massimo-sandwich-loaf-with-wheat-germ" />
                    <div class="weight_title">400g & 600g</div>
                    <p><?php echo $lang['PRODUCTS_SAVOUR_'] ?></p>
                </div>
            </div>
            
            <div class="pro1_txt_box_2">
            	<img src="images/<?php echo $lang['IMAGES_nutritional-benefits-of-wheat-germ.png']?>" class="nutritional-benefits-of-wheat-germ" />
            </div>
            <table cellspacing="0" cellpadding="0" class="pro1_txt_box_3">
              <tr>
                <td valign="top"><?php echo $lang['PRODUCTS_WHEAT_GERM_IS_A_'] ; ?>
				<br /><br />
<?php echo $lang['PRODUCTS_WHEAT_GERM_IS_INDEED_'] ; ?></td>
				<td width="5%">&nbsp;</td>
                <td width="40%" align="right" valign="top"><img src="images/Sandwich Loaf with Wheat Germ/wheat_germ.png" class="full_img" /></td>
              </tr>
            </table>
            <div style="height:50px;" class="hide_on_mobile"></div>
        </div>
    </div>
     <?php include("_footer.php"); ?>
</div>

<script>
	$(".btn_product").last().addClass("navi_lvl_1_selected");
	$(".btn_product1").last().addClass("navi_lvl_2_selected");
</script>
</body>
</html>
