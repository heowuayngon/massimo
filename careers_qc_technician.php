<?php include("_header.php"); ?>

<body>
<div class="container">
	<div class="content">
        <?php include("_navigation.php"); ?>
        
        <div class="right_content_part careers_content">

            <div class="title_careers"><img src="images/<?php echo $lang['IMAGES_careers.png']?>" class="full_img" /></div>
            
            <div class="job_title"><?php echo $lang['CAREERS_JOB_QC']; ?></div>
            
            <strong><?php echo $lang['CAREERS_JOB_DES']; ?></strong><br />
            <table border="0" cellspacing="0" cellpadding="0" class="job_txt">
              <tr>
                <td valign="top">•</td>
                <td>&nbsp;</td>
                <td valign="top"><?php echo $lang['CAREERS_JOB_QC_DES_1'] ; ?> </td>
              </tr>
              <tr>
                <td valign="top">•</td>
                <td>&nbsp;</td>
                <td valign="top"><?php echo $lang['CAREERS_JOB_QC_DES_2'] ; ?></td>
              </tr>
              <tr>
                <td valign="top">•</td>
                <td>&nbsp;</td>
                <td valign="top"><?php echo $lang['CAREERS_JOB_QC_DES_3'] ; ?></td>
              </tr>
              <tr>
                <td valign="top">•</td>
                <td>&nbsp;</td>
                <td valign="top"><?php echo $lang['CAREERS_JOB_QC_DES_4'] ; ?></td>
              </tr>
            </table>
            <br />
            <strong><?php echo $lang['CAREERS_JOB_SKILL_REQUIRED']; ?></strong><br />
            <table border="0" cellspacing="0" cellpadding="0" class="job_txt">
              <tr>
                <td valign="top">•</td>
                <td>&nbsp;</td>
                <td valign="top"><?php echo $lang['CAREERS_JOB_QC_SKILL_1']; ?> </td>
              </tr>
              <tr>
                <td valign="top">•</td>
                <td>&nbsp;</td>
                <td valign="top"><?php echo $lang['CAREERS_JOB_QC_SKILL_2']; ?></td>
              </tr>
            </table>
            <br />
            <strong><?php echo $lang['CAREERS_JOB_MINIMUM']; ?></strong><br />
            <div class="job_txt"><?php echo $lang['CAREERS_JOB_QC_SPMV']; ?></div>
            <br />
            <img src="images/how_to_apply.png" /><br />
            <span class="job_txt"><?php echo $lang['CAREERS_JOB_PLEASE_SEND_']; ?><br />
            <br />
            <?php echo nl2br($lang['CAREERS_JOB_SEND_ADD']); ?>
            <br />
            <?php echo $lang['CAREERS_JOB_SEND_EMAIL']; ?></span>
            <div class="find_out_more_btn"><a href="careers.php"><img src="images/<?php echo $lang['IMAGES_back_btn.png']?>" /></a></div>
            
        </div>
    </div>
     <?php include("_footer.php"); ?>
</div>

<script>
	$(".btn_careers").last().addClass("navi_lvl_1_selected");
</script>
</body>
</html>
