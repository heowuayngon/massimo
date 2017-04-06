<?php include("_header.php"); ?>

<body>
<script language="JavaScript" src="js/gen_validatorv4.js" type="text/javascript" xml:space="preserve"></script>
<style>
.imgSubmit { 
    background-image: url(images/submit_btn.png);
    width: 114px;
    height: 35px;
}
.imgReset{
    background-image: url(images/reset_btn.png);
    width: 89px;
    height: 24px;

}
.mando_symbol{color:#FF0000;}
</style>

<div class="block_send">
	<table border="0" cellspacing="0" cellpadding="0" class="msg_pop">
      <tr>
        <td align="center" valign="middle">
        <div class="close_pop"><img src="images/close.png" /></div>
        <img src="" id="pop_img" />
        <br />
        <div style="padding:10px 40px 0;" id="pop_txt"></div>
        </td>
      </tr>
    </table>
</div>

<div class="container">
	<div class="content">
        <?php include("_navigation.php"); 
		
		if (!isset($_GET["send"])){
			$send = 2;
		}else{
			$send = $_GET["send"];
		}		
		?>
        
        <div class="right_content_part contact_content">
        	<div class="title_contact-us"><img src="images/<?php echo $lang['IMAGES_contact-us.png']?>" class="full_img" /></div>
            
            <div class="contact_txt_box_1">
                <p><?php echo $lang['CONTACT_IF_YOU_']; ?></p>
    
                <p style="font-size:20px;"><?php echo $lang['CONTACT_THE_ITALIAN_']; ?></p>
            </div>
            
            <div class="float_parent">
                <div class="location_box">
                    <?php echo $lang['CONTACT_MARKETING_OFFICE']; ?><br />
                    <?php echo nl2br($lang['CONTACT_ADDRESS1']); ?>
                    <br />
                    <div class="map_holder">
                        <iframe src="" width="100%" frameborder="0" class="map1"></iframe>
                    </div>
                </div>
                
                <div class="location_box">
                	<?php echo $lang['CONTACT_PRODUCTION']; ?><br />
                    <?php echo nl2br($lang['CONTACT_ADDRESS2']); ?>
                    <div class="map_holder">
                        <iframe src="" width="100%" frameborder="0" class="map2"></iframe>
                    </div>
                </div>
            </div>
            <div class="contact_txt_box_2">
            	<p><?php echo $lang['CONTACT_TOLL_']; ?></p>
				<p><?php echo $lang['CONTACT_EMAIL_']; ?></p>
            </div>
            
            <br />
            <br />
            <div class="title_feedback-form"><img src="images/<?php echo $lang['IMAGES_feedback-form.png']?>" class="full_img" /></div>
            <span style="color:#FF0000;">*<?php echo $lang['CONTACT_MANDATORY_']; ?></span>
            <br />
            <form action="php/contact.php" name="myform" id="myform" method="post">
            	<table border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td valign="middle"><?php echo $lang['CONTACT_FULL_NAME']; ?><span class="mando_symbol">*</span></td>
                    <td class="form_gap">&nbsp;</td>
                    <td valign="middle" class="form_fill"><input name="txtname" id="txtname" type="text" class="input_txt"  /></td>
                  </tr>
                  <tr>
                    <td valign="middle"><?php echo $lang['CONTACT_PHONE']; ?><span class="mando_symbol">*</span></td>
                    <td class="form_gap">&nbsp;</td>
                    <td valign="middle" class="form_fill"><input name="txtphone" id="txtphone" type="text" class="input_txt"  /></td>
                  </tr>
                  <tr>
                    <td valign="middle"><?php echo $lang['CONTACT_EMAIL']; ?><span class="mando_symbol">*</span></td>
                    <td class="form_gap">&nbsp;</td>
                    <td valign="middle" class="form_fill"><input name="txtemail" id="txtemail" type="text" class="input_txt"  /></td>
                  </tr>
                  <tr>
                    <td valign="middle"><?php echo $lang['CONTACT_ADDRESS']; ?> </td>
                    <td class="form_gap">&nbsp;</td>
                    <td valign="middle" class="form_fill"><input name="txtaddress" id="txtaddress" type="text" class="input_txt"  /></td>
                  </tr>
                  <tr>
                    <td valign="middle"><?php echo $lang['CONTACT_CITY']; ?></td>
                    <td class="form_gap">&nbsp;</td>
                    <td valign="middle" class="form_fill"><input name="txtcity" id="txtcity" type="text" class="input_txt"  /></td>
                  </tr>
                  <tr>
                    <td valign="middle"><?php echo $lang['CONTACT_POSTCODE']; ?></td>
                    <td class="form_gap">&nbsp;</td>
                    <td valign="middle" class="form_fill"><input name="txtpostcode" id="txtpostcode" type="text" class="input_txt"  /></td>
                  </tr>
                  <tr>
                    <td valign="middle"><?php echo $lang['CONTACT_COUNTRY']; ?></td>
                    <td class="form_gap">&nbsp;</td>
                    <td valign="middle" class="form_fill"><input name="txtcountry" id="txtcountry" type="text" class="input_txt"  /></td>
                  </tr>
                  <tr>
                    <td valign="top"><div style="padding-top:10px;"><?php echo $lang['CONTACT_ENQUIRIES']; ?><span class="mando_symbol">*</span></div></td>
                    <td class="form_gap2">&nbsp;</td>
                    <td valign="middle" class="form_fill2">
                    <textarea name="msg" id="msg" cols="" rows="" class="input_area"></textarea>
                    </td>
                  </tr>
                  <tr>
                    <td valign="middle"></td>
                    <td class="form_gap">&nbsp;</td>
                    <td valign="middle" align="right">
                    <table border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td valign="top"><input name="" type="submit" value="" class="imgSubmit" /></td>
                        <td width="20">&nbsp;</td>
                        <td valign="top"><input name="" type="reset" value="" class="imgReset" /></td>
                      </tr>
                    </table>
                    </td>
                  </tr>
                </table>

            </form>
            
        </div>
    </div>
     <?php include("_footer.php"); ?>
</div>

<script>
	$(".btn_contact").last().addClass("navi_lvl_1_selected");
	
	var send = <?PHP echo $send; ?>;
	
	if (send == 1){
		$(".block_send").show();
		$("#pop_txt").text("We appreciate that you’ve taken the time to write us. We’ll get back to you very soon. Please come back and see us often.");
		$("#pop_img").attr("src", "images/thanks.png");	
	}else if (send == 0){
		$(".block_send").show();
		$("#pop_txt").html("Failed to send your message.<br>Please try again later.");
		$("#pop_img").attr("src", "images/error.png");	
	}
</script>

<script language="JavaScript" type="text/javascript"
    xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("myform");
  frmvalidator.addValidation("txtname","req","Please enter your Full Name");
  frmvalidator.addValidation("txtphone","req","Please enter your Phone Number");
  frmvalidator.addValidation("txtemail","req","Please enter your email");
  frmvalidator.addValidation("txtemail","email","Please enter a valid email address");
  frmvalidator.addValidation("msg","req","Please enter your Enquiries / Feedback");
//]]></script>
</body>
</html>
