/**
 * Theme functions file
 *
 * Contains handlers for navigation, accessibility, header sizing
 * footer widgets and Featured Content slider
 *
 */

jQuery(document).ready(function($) {
                   $('header nav').meanmenu();
                   
                   $(".change_country").hover(function(){
	$("ul#change_country_countries").show()
	},function(){$("ul#change_country_countries").hide()});
        $(".change_country").find(".country_nav_menu").append($("#change_country_countries").find(".selected").find("img").clone());
        $("#banner-slide .next").click(function() {
            $(".flex-direction-nav .flex-next").click();
        });
        
        $("#banner-slide .prev").click(function() {
            $(".flex-direction-nav .flex-prev").click();
        });
});	

