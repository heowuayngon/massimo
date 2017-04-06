<?php include("_header.php"); ?>

<body>
<div class="container">
	<div class="content">
        <?php include("_navigation.php"); ?>
        
        <div class="right_content_part careers_content">

            <div class="title_careers"><img src="images/<?php echo $lang['IMAGES_careers.png']?>" class="full_img" /></div>
            <div class="title_vacancy"><img src="images/<?php echo $lang['IMAGES_vacancy.png']?>" class="full_img" /></div>
            
            <?php echo $lang['CAREERS_WE_ARE_']; ?>
            
            <div class="job_title"><?php echo $lang['CAREERS_JOB_ENGINEERING'];?></div>
            
            <strong><?php echo $lang['CAREERS_JOB_DES'];?></strong><br />
            <table border="0" cellspacing="0" cellpadding="0" class="job_txt">
              <tr>
                <td valign="top">•</td>
                <td>&nbsp;</td>
                <td valign="top"><?php echo $lang['CAREERS_JOB_ENGINEERING_DES_1']; ?></td>
              </tr>
              <tr>
                <td valign="top">•</td>
                <td>&nbsp;</td>
                <td valign="top"><?php echo $lang['CAREERS_JOB_ENGINEERING_DES_2']; ?> </td>
              </tr>
              <tr>
                <td valign="top">•</td>
                <td>&nbsp;</td>
                <td valign="top"><?php echo $lang['CAREERS_JOB_ENGINEERING_DES_3']; ?></td>
              </tr>
              <tr>
                <td valign="top">•</td>
                <td>&nbsp;</td>
                <td valign="top"><?php echo $lang['CAREERS_JOB_ENGINEERING_DES_4']; ?></td>
              </tr>
            </table>
            <div class="find_out_more_btn"><a href="careers_engineering_supervisor.php"><img src="images/<?php echo $lang['IMAGES_find_out_more_btn.png']?>" /></a></div>
            <div class="sub_line"><img src="images/careers_line.png" class="full_img" /></div>
            
<!--            <div class="job_title">QC Technician</div>
            
            <strong><?php echo $lang['CAREERS_JOB_DES']; ?></strong><br />
            <table border="0" cellspacing="0" cellpadding="0" class="job_txt">
              <tr>
                <td valign="top">•</td>
                <td>&nbsp;</td>
                <td valign="top"><?php echo $lang['CAREERS_JOB_QC_DES_1']; ?></td>
              </tr>
              <tr>
                <td valign="top">•</td>
                <td>&nbsp;</td>
                <td valign="top"><?php echo $lang['CAREERS_JOB_QC_DES_2']; ?></td>
              </tr>
              <tr>
                <td valign="top">•</td>
                <td>&nbsp;</td>
                <td valign="top"><?php echo $lang['CAREERS_JOB_QC_DES_3']; ?></td>
              </tr>
              <tr>
                <td valign="top">•</td>
                <td>&nbsp;</td>
                <td valign="top"><?php echo $lang['CAREERS_JOB_QC_DES_4']; ?></td>
              </tr>
            </table>
            <div class="find_out_more_btn"><a href="careers_qc_technician.php"><img src="images/<?php echo $lang['IMAGES_find_out_more_btn.png']?>" /></a></div>-->
            

            <!--<div class="sub_line"><img src="images/careers_line.png" class="full_img" /></div>
            
            <div class="job_title">Marketing Executive</div>
            
            <strong>JOB DESCRIPTION</strong><br />
            <span class="job_txt">Candidate must possess at least a Diploma, Advanced/Higher/Graduate Diploma, Bachelor's Degree, Post Graduate Diploma, Professional...</span>
            <div class="find_out_more_btn"><a href="#"><img src="images/find_out_more_btn.png" /></a></div>
            -->
        </div>
    </div>
     <?php include("_footer.php"); ?>
</div>

<script>
	$(".btn_careers").last().addClass("navi_lvl_1_selected");
</script>
</body>
</html>
