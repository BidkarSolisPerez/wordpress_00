jQuery(document).ready(function($){



	$('.about .col .text-holder').matchHeight();

	$('.our-services .col .holder').matchHeight();

	$('.testimonial .col').matchHeight();

	$('.testimonial blockquote').matchHeight();

		

        

    $('#responsive-menu-button').sidr({

      name: 'sidr-main',

      source: '#site-navigation',

      side: 'right'

    });



    $(window).on("load",function(){

        $(".our-projects .col .text-holder").mCustomScrollbar();

    });



});