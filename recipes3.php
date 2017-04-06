<meta property="og:title" content="Tuna Bruschetta Recipe"/>
<meta property="og:image" content="http://massimo.com.my/images/recipes_tuna_bruschetta_3.jpg" />
<meta property="og:site_name" content="Tuna Bruschetta Recipe"/>
<meta property="og:description" content="Massimo Loaves – Wholesome Goodness in Every Bite!"/>

<?php include("_header.php"); ?>

<body>
<div class="container">
	<div class="content">
        <?php include("_navigation.php"); ?>
        
        <div class="right_content_part recipes_content">
			<div class="title_recipes"><img src="images/<?php echo $lang['IMAGES_recipes_title.png']?>" class="full_img" /></div>
            <div class="recipes_big_title"><?php echo $lang['RECIPES_TUNA_BRUSCHETTA']; ?></div>
            
            
            <div  class="float_parent">
                <div class="recipes_ing_img"><img src="images/recipes_tuna_bruschetta.png" class="full_img"/></div>
                
                <div class="recipes_ing_right">
                    <div class="ingredients_intro_txt">
                    <?php echo nl2br($lang['RECIPES_TUNA_BRUSCHETTA_DETAIL_TITLE']); ?>
                    </div>
                    
                    <div>
                        <?php echo nl2br($lang['RECIPES_TUNA_BRUSCHETTA_DETAIL']); ?>
                    </div>
                    <p>
                    <table cellspacing="0" cellpadding="0">
                      <tr>
                        <td><img src="images/<?php echo $lang['IMAGES_share_it_on.png']; ?>" /></td>
                        <td>&nbsp;</td>
                        <td><a href="https://www.facebook.com/sharer/sharer.php?u=http://massimo.com.my/recipes3.php" onClick="window.open(this.href, 'mywin', 'width=560,height=450,toolbar=0,resizable=true'); return false;" ><img src="images/facebook_icon.png"  /></a></td>
                        <td>&nbsp;</td>
                        <td><a href="https://twitter.com/intent/tweet?status=Tuna Bruschetta Recipe http://massimo.com.my/recipes3.php" onClick="window.open(this.href, 'mywin', 'width=560,height=450,toolbar=0,resizable=true'); return false;" ><img src="images/twitter_icon.png" /></a></td>
                      </tr>
                    </table>
                    </p>
                    <p><div class="try_another_recipe"><a href="recipes.php?res=3"><img src="images/<?php echo $lang['IMAGES_try_another_recipe.png']; ?>" class="full_img" /></a></div></p>
                </div>
            </div>
            
            
            <div class="recipes_method">
                <div class="ingredients_intro_txt"><?php echo $lang['RECIPES_METHOD']; ?></div>
                <ol class="recipes_step">
                    <li><?php echo $lang['RECIPES_TUNA_BRUSCHETTA_METHOD_1']; ?></li>
                    <li><?php echo $lang['RECIPES_TUNA_BRUSCHETTA_METHOD_2']; ?></li>
                </ol>
                <span style="font-family:'appleberry', sans-serif; color:#e92c26;">Substitute:</span> Also delicious with Massimo Sandwich Loaf with Wheat Germ or Massimo 100% Wholemeal Loaf.
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
