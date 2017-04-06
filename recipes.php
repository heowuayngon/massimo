<?php include("_header.php"); ?>

<body>
<?PHP
if (!isset($_GET["res"])){
	$res = 3;
}else{
	$res =  htmlspecialchars($_GET["res"]);
}

?>

<div class="container">
	<div class="content">
        <?php include("_navigation.php"); ?>
        
        <div class="right_content_part recipes_content">
			<div class="title_recipes"><img src="images/<?php echo $lang['IMAGES_recipes_title.png']?>" class="full_img" /></div>
            <p>
            <div class="recipes_intor_txt"><?php echo $lang['RECIPES_MASSIMO_LOAVES_WHO_']; ?></div>
            <?php echo $lang['RECIPES_MODERN_BUSY_']; ?><?php echo $lang['RECIPES_MASSIMO_LOAVES_CAN_'] ?></p>
            
            <p><?php echo $lang['RECIPES_PERFECTLY_']; ?></p>
        </div>
        
        <div class="recipes_all">
        	<div class="transbutton"><img src="images/trans_btn.png" width="100%" height="100%" /></div>
            
          	<div class="recipes_holder plate1"><img src="images/recipes1.png" class="rp1 full_img"/></div>
            <div class="recipes_holder plate2"><img src="images/recipes2.png" class="rp2 full_img"/></div>
            <div class="recipes_holder plate3"><img src="images/recipes3.png" class="rp3 full_img"/></div>
            <div class="recipes_holder plate4"><img src="images/recipes4.png" class="rp4 full_img"/></div>
            <div class="recipes_holder plate5"><img src="images/recipes5.png" class="rp5 full_img"/></div>
            
            <table cellspacing="0" cellpadding="0" class="recipes_control">
              <tr>
                <td align="left"><div class="recipes_prev"><img src="images/prev_arrow.png"  /></div></td>
                <td align="center"><div class="recipes_name"><?php echo $lang['RECIPES_TUNA_BRUSCHETTA']; ?></div></td>
                <td align="right"><div class="recipes_next"><img src="images/next_arrow.png"  /></div></td>
              </tr>
            </table> 

      </div>
    </div>
    
     <?php include("_footer.php"); ?>
</div>

<script>
	$(".btn_recipes").last().addClass("navi_lvl_1_selected");
	var cur = <?PHP echo $res; ?>;
	var l1 = [4,5,1,2,3];
	var l2 = [5,1,2,3,4];
	var l3 = [1,2,3,4,5];
	var l4 = [2,3,4,5,1];
	var l5 = [3,4,5,1,2];
	var rlist = ["<?php echo $lang['RECIPES_TUNA_SANDWICHES']; ?>", "<?php echo $lang['RECIPES_CAESAR'];?>", "<?php echo $lang['RECIPES_TUNA_BRUSCHETTA']; ?>", "<?php echo $lang['RECIPES_GARLIC']; ?>", "<?php echo $lang['RECIPES_CROUTONS']; ?>"]
//	var rlist = ["Tuna Sandwiches", "Caesar Salad", "Tuna Bruschetta", "Garlic Bread", "Croutons"]
	var url = "recipes<?PHP echo $res; ?>.php"
	
	
	$(".recipes_next").click(function() {
		if (cur < 5){
			cur ++;
		}else{
			cur = 1
		}
		updateRecipes();
	});
	
	$(".recipes_prev").click(function() {
		if (cur > 1){
			cur --;
		}else{
			cur = 5
		}
		updateRecipes();
	});
	
	updateRecipes();
	
	function updateRecipes(){
		if (cur == 1){
			var _cl = l1;
			url = "recipes1.php"
		}else if (cur == 2){
			var _cl = l2;
			url = "recipes2.php"
		}else if (cur == 3){
			var _cl = l3;
			url = "recipes3.php"
		}else if (cur == 4){
			var _cl = l4;
			url = "recipes4.php"
		}else if (cur == 5){
			var _cl = l5;
			url = "recipes5.php"
		}
		
		$(".rp1,.rp2,.rp3,.rp4, .recipes_name").fadeOut("fast");
		$(".rp5").fadeOut("fast" , function() {
			for (i=1; i<=5; i++){
				$(".rp" + i).attr("src", "images/recipes"+ _cl[i-1] +".png");
				$(".recipes_name").text(rlist[cur-1]);
				$(".recipes_name, .rp" + i).fadeIn("fast");
			}
		});	
	}
	
	$(".transbutton").click(function() {
		window.location.href = url;
	});
</script>
</body>
</html>
