<div class="navigation">

    <div class="nav_panel">
        <div class="navi_lvl_1 btn_about"><?php echo $lang['ABOUT_ABOUT_']?></div>
        <div class="navi_lvl_1 btn_product"><?php echo $lang['PRODUCTS_PRODUCTS']; ?></div>

        <div class="navi_lvl_2 btn_product1"><div class="stick_box"><?php echo $lang['PRODUCTS_MASSIMO_BREAD'];?></div></div>
        <div class="navi_lvl_2 btn_product2"><div class="stick_box"><?php echo $lang['PRODUCTS_MASSIMO_WHITE_']; ?></div></div>
        <div class="navi_lvl_2 btn_product3"><div class="stick_box2"><?php echo $lang['PRODUCTS_MASSIMO_100_']; ?></div></div>
        <div class="navi_lvl_2 btn_product4"><div class="stick_box2"><?php echo $lang['PRODUCTS_MASSIMO_CREAM_']; ?></div></div>
        <div class="navi_lvl_2 btn_product5"><div class="stick_box2">Massimo <?php echo $lang['PRODUCTS_CHIFFON_'];?></div></div>
        <div class="navi_lvl_2 btn_product6" style="background: url(<?php echo $lang['IMAGES_new'] ?>);"><div class="stick_box2"><?php echo $lang['PRODUCTS_MASSIMO_FINE_']; ?></div></div>

        <div class="navi_lvl_1 btn_newsroom"><?php echo $lang['NEWSROOM_NEWSROOM']; ?></div>
        <div class="navi_lvl_1 btn_tour"><?php echo $lang['TOUR_GALLERY_TOUR_GALLERY']; ?></div>
        <div class="navi_lvl_1 btn_halal"><?php echo $lang['HALAL_HALAL_CERTIFICATIONS']; ?></div>
        <div class="navi_lvl_1 btn_recipes"><?php echo $lang['RECIPES_RECIPES']; ?></div>
        <div class="navi_lvl_1 btn_careers"><?php echo $lang['CAREERS_CAREERS']; ?></div>
        <div class="navi_lvl_1 btn_contact"><?php echo $lang['CONTACT_CONTACT_US']; ?></div>
        <div class="navi_lvl_1 btn_faq"><?php echo $lang['FAQ_FAQ']; ?></div>
        <div class="navi_lvl_2 btn_language">
            <div class="stick_box2">
                <form action="index.php" method="get">
                    <select class="change_language" name="lang" onchange="this.form.submit()">
                        <option value="en" <?php if(!empty($_SESSION['lang']) && $_SESSION['lang']=='en'){echo "selected";} ?>>English</option>
                        <option value="ba" <?php if(!empty($_SESSION['lang']) && $_SESSION['lang']=='ba'){echo "selected";} ?>>Bahasa Malaysia</option>
                        <option value="ma" <?php if(!empty($_SESSION['lang']) && $_SESSION['lang']=='ma'){echo "selected";} ?>>中文</option>
                    </select>
                </form>
            </div>
        </div>
    </div>

    <div class="hide_on_desktop logo_mobile"><img src="images/logo.png" width="100" /></div>
    <div class="hide_on_desktop mobile_menu"><img src="images/mobile_menu.png" width="40" /></div>

</div>
