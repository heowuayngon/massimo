<?php include("_header.php"); ?>

<body>
<div class="container">
	<div class="content">
        <?php include("_navigation.php"); ?>
        
        <div class="right_content_part news_content">
        	<div class="title_latest-news"><img src="images/latest-news.png" class="full_img" /></div>
            
            <table cellspacing="0" cellpadding="0" class="news_table">
              <tr>
                <td class="news_img" valign="top"><img src="images/news_1.png" width="100%" /></td>
                <td valign="top">
                <div class="news_title">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                <div class="news_date">2014.11.15</div>
                <span class="news_txt">Sed et gravida sapien. Pellentesque tincidunt, elit ut tincidunt hendrerit, lorem justo rhoncus libero, eu faucibus dui orci at mi. Vestibulum sagittis lacus eget cursus venenatis. Pellentesque tempus lacus ut quam molestie laoreet vel vel magna.</span>
                </td>
              </tr>
            </table>
            
            <table cellspacing="0" cellpadding="0" class="news_table">
              <tr>
                <td class="news_img" valign="top"><img src="images/news_2.png" width="100%" /></td>
                <td valign="top">
                <div class="news_title">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                <div class="news_date">2014.11.15</div>
                <span class="news_txt">Sed et gravida sapien. Pellentesque tincidunt, elit ut tincidunt hendrerit, lorem justo rhoncus libero, eu faucibus dui orci at mi. Vestibulum sagittis lacus eget cursus venenatis. Pellentesque tempus lacus ut quam molestie laoreet vel vel magna.</span>
                </td>
              </tr>
            </table>
            
            <table cellspacing="0" cellpadding="0" class="news_table">
              <tr>
                <td class="news_img" valign="top"><img src="images/news_3.png" width="100%" /></td>
                <td valign="top">
                <div class="news_title">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                <div class="news_date">2014.11.15</div>
                <span class="news_txt">Sed et gravida sapien. Pellentesque tincidunt, elit ut tincidunt hendrerit, lorem justo rhoncus libero, eu faucibus dui orci at mi. Vestibulum sagittis lacus eget cursus venenatis. Pellentesque tempus lacus ut quam molestie laoreet vel vel magna.</span>
                </td>
              </tr>
            </table>

            <div class="news_pages"><img src="images/news_pages.png" class="full_img" /></div>
            
        </div>
    </div>
     <?php include("_footer.php"); ?>
</div>

<script>
	$(".btn_news").last().addClass("navi_lvl_1_selected");
</script>
</body>
</html>
