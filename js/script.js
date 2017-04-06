$(document).ready(function($){
	var mobilemenu = "off";
	
	$("body").hide();
	
	jQuery(window).load(function () {
		$("body").fadeIn();
		$(".map1").attr("src","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.5879550507784!2d101.538048!3d3.202391000000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4572f1eea05f%3A0x533fd0e0602aeb1e!2sFFM+Berhad!5e0!3m2!1sen!2smy!4v1421839151653");
		$(".map2").attr("src","https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15937.981942667247!2d101.320702!3d2.959926!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xac43c3faf021a141!2sThe+Italian+Baker+Sdn+Bhd!5e0!3m2!1sen!2s!4v1467004409026");
	});
	
	
	$(".btn_about").click(function() {
		window.location.href = "about.php";
	});
	$(".btn_news").click(function() {
		window.location.href = "latest_news.php";
	});
	$(".btn_halal").click(function() {
		window.location.href = "halal_integrity.php";
	});
	$(".btn_product1, .btn_product").click(function() {
		window.location.href = "massimo_bread_with_wheat_germ.php";
	});
	$(".btn_product2").click(function() {
		window.location.href = "massimo_white_sandwich.php";
	});
	$(".btn_product3").click(function() {
		window.location.href = "massimo_100_percent_wholemeal.php";
	});
	$(".btn_product4").click(function() {
		window.location.href = "massimo_cream_rolls_series.php";
	});
	$(".btn_product5").click(function() {
		window.location.href = "massimo_chiffon_in_a_cup.php";
	});
	$(".btn_product6").click(function() {
		window.location.href = "massimo_fine_wholemeal.php";
	});
	$(".btn_newsroom").click(function() {
		window.location.href = "newsroom.php";
	});
	$(".btn_recipes").click(function() {
		window.location.href = "recipes.php";
	});
	$(".btn_tour").click(function() {
		window.location.href = "tour_gallery.php";
	});
	$(".btn_careers").click(function() {
		window.location.href = "careers.php";
	});
	$(".btn_contact").click(function() {
		window.location.href = "contact_us.php";
	});
	$(".btn_faq").click(function() {
		window.location.href = "faq.php";
	});
	
	$(".start_btn").click(function() {
		$(".landing_content").animate({
			 top: "-100%"
			}, 500, function() {
			$(".landing_content").hide();
			});
			$(".about_landing").fadeIn("fast");
	});
	
	
	

	$(".mobile_menu").click(function() {
		if (mobilemenu == "off"){
			mobilemenu = "on";
			$( ".navigation" ).animate({
			 top: "0px"
			}, 250 );
		}
		else{
			mobilemenu = "off";
			$( ".navigation" ).animate({
			 top: "-700px"
			}, 250 );
		}
	});
	
	$(".close_pop").click(function() {
		$(".block_send").fadeOut();
	});
});

function doOverImg(n){
	var imgID = n.id;
	var imgSrc = n.src;
	var imgExt = imgSrc.split('.').pop();
	$("#" + imgID).attr("src", "images/"+imgID+"2."+imgExt);
}


function doOutImg(n){
	var imgID = n.id;
	var imgSrc = n.src;
	var imgExt = imgSrc.split('.').pop();
	$("#" + imgID).attr("src", "images/"+imgID+"."+imgExt);
}

function doOverImgClass(img, n){
	var imgID = n.id;
	$("#" + imgID).attr("src", "images/"+img+"2.png");
}
function doOutImgClass(img, n){
	var imgID = n.id;
	$("#" + imgID).attr("src", "images/"+img+".png");
}

function getUrlVars(){
	var vars = {};
	var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
		vars[key] = value;
	});
	return vars;
}

