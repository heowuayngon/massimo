<meta property="og:title" content="Garlic Bread Recipe"/>
<meta property="og:image" content="http://massimo.com.my/images/recipes_garlic_bread_2.jpg" />
<meta property="og:site_name" content="Garlic Bread Recipe"/>
<meta property="og:description" content="Massimo Loaves – Wholesome Goodness in Every Bite!"/>
<?php include("_header.php"); ?>

<body>
<div class="container">
	<div class="content">
        <?php include("_navigation.php"); ?>
        
        <div class="right_content_part recipes_content">
			<div class="title_recipes"><img src="images/<?php echo $lang['IMAGES_recipes_title.png']?>" class="full_img" /></div>
            <div class="recipes_big_title"><?php echo $lang['RECIPES_GARLIC']; ?></div>
            
            
            <div  class="float_parent">
                <div class="recipes_ing_img"><img src="images/recipes_garlic_bread.png" class="full_img"/></div>
                
                <div class="recipes_ing_right">
                    <div class="ingredients_intro_txt">
                    <?php echo nl2br($lang['RECIPES_GARLIC_DETAIL_TITLE']); ?>
                    </div>
                    
                    <div>
                        <?php echo nl2br($lang['RECIPES_GARLIC_DETAIL']); ?>
                    </div>
                    <p>
                    <table cellspacing="0" cellpadding="0">
                      <tr>
                        <td><img src="images/<?php echo $lang['IMAGES_share_it_on.png']; ?>" /></td>
                        <td>&nbsp;</td>
                        <td><a href="https://www.facebook.com/sharer/sharer.php?u=http://massimo.com.my/recipes4.php" onClick="window.open(this.href, 'mywin', 'width=560,height=450,toolbar=0,resizable=true'); return false;" ><img src="images/facebook_icon.png"  /></a></td>
                        <td>&nbsp;</td>
                        <td><a href="https://twitter.com/intent/tweet?status=Garlic Bread Recipe http://massimo.com.my/recipes4.php" onClick="window.open(this.href, 'mywin', 'width=560,height=450,toolbar=0,resizable=true'); return false;" ><img src="images/twitter_icon.png" /></a></td>
                      </tr>
                    </table>
                    </p>
                    <p><div class="try_another_recipe"><a href="recipes.php?res=4"><img src="images/<?php echo $lang['IMAGES_try_another_recipe.png']; ?>" class="full_img" /></a></div></p>
                </div>
            </div>
            
            
            <div class="recipes_method">
                <div class="ingredients_intro_txt"><?php echo $lang['RECIPES_METHOD']; ?></div>
                <ol class="recipes_step">
                    <li><?php echo $lang['RECIPES_GARLIC_METHOD_1'] ;?></li>
                    <li><?php echo $lang['RECIPES_GARLIC_METHOD_2'] ;?></li>
                </ol>
            </div>
            
        </div>
    </div>
     <?php include("_footer.php"); ?>
</div>

<script>
	$(".btn_recipes").last().addClass("navi_lvl_1_selected");
</script>
</body>
</html>
