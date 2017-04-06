<?php include("_header.php"); ?>


<script type="text/javascript" src="js/jquery.fancybox.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
<style>
    .wrapSmall .halal_thumb{
        max-width: 36%;
        padding-right: 0px;
    }
</style>
<body>
<div class="container">
	<div class="content">
        <?php include("_navigation.php"); ?>
        
        <div class="right_content_part halal_content">


            <div class="halal-policy"><img src="images/<?php echo $lang['IMAGES_halal-policy.png']?>" class="full_img" /></div>
            <br />
            <p>
            <div style="text-align:center">
            	<div class="halal_thumb"><a class="fancybox" href="images/Halal_Cert_MassimoSandwichSeries1.jpg"><img src="images/halal_thumb1.png" class="full_img" /></a></div>
                <div class="halal_thumb" style="padding:0;"><a class="fancybox" href="images/Halal_Cert_MassimoSandwichSeries2.jpg"><img src="images/halal_thumb2.png" class="full_img" /></a></div>
                
                <div class="halal_board" ><img src="images/<?php echo $lang['IMAGES_halal_board1.png']?>" class="full_img"/></div>
            </div>
            </p>
            
            
            
            <p>
            <div style="text-align:center" class="wrapSmall">
                
            	<div class="halal_thumb"><a class="fancybox" href="images/Halal_Cert_MassimoChiffoninaCup.jpg"><img src="images/<?php echo $lang['IMAGES_halal_thumb3.png']?>" class="full_img" /></a></div>
                <div class="halal_thumb"><a class="fancybox" href="images/Halal_Cert_Pandan_coconut.jpg"><img src="images/halal_thumb_pandan_coconut.png" class="full_img" /></a></div>
                <div class="halal_thumb"><a class="fancybox" href="images/Halal_Cert_MassimoFineWholemeal.jpg"><img src="images/<?php echo $lang['IMAGES_halal_thumb4.png']?>" class="full_img" /></a></div>
                <div class="halal_thumb"><a class="fancybox" href="images/Halal_Cert_Massimo_Chiffon_Cheese.png"><img src="images/halal_thumb_chiffon_cheese.png" class="full_img" /></a></div>
            </div>
            </p>
            <br />
            <div class="float_parent">
            	<div class="halal_thumb_right"><a class="fancybox" href="images/Halal_policy.jpg"><img src="images/halal_thumb5.png" class="full_img" /></a></div>
                
                <div class="halal_txt_box">
                	<?php echo $lang['HALAL_FFM_']; ?>
<br /><br />
<?php echo $lang['HALAL_THE_']; ?>
					<table border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td valign="top"></td>
                        <td>&nbsp;</td>
                        <td valign="top"><?php echo $lang['HALAL_A_'] ?></td>
                      </tr>
                      <tr>
                        <td valign="top"></td>
                        <td>&nbsp;</td>
                        <td valign="top"> <?php echo $lang['HALAL_B_'] ?></td>
                      </tr>
                      <tr>
                        <td valign="top"></td>
                        <td>&nbsp;</td>
                        <td valign="top"><?php echo $lang['HALAL_C_']; ?></td>
                      </tr>
                      <tr>
                        <td valign="top"></td>
                        <td>&nbsp;</td>
                        <td valign="top"><?php echo $lang['HALAL_D_']; ?></td>
                      </tr>
                    </table>

                </div>
            </div>
            <br />
            <p>
            <div>
            <div class="halal-committee"><img src="images/<?php echo $lang['IMAGES_halal_committee.png']?>" class="full_img" /></div>
            <br />
            <p><img src="images/halal_chart.png" style="width:100%; max-width:673px;" /></p>
            </div>
            </p>
            <br />
        </div>
    </div>
     <?php include("_footer.php"); ?>
</div>

<script>
	$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();
	})
	$(".btn_halal").last().addClass("navi_lvl_1_selected");
</script>
</body>
</html>
