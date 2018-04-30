<?php
/**
 * Template Name: Home Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Construction Landing Page
 */

get_header();

    $construction_landing_page_sections = array( 'banner', 'about', 'promotional', 'portfolio', 'services', 'clients', 'testimonials', 'contactform' );

    foreach( $construction_landing_page_sections as $section ){ 

        if( get_theme_mod( 'construction_landing_page_ed_' . $section . '_section' ) == 1 ){

            get_template_part( 'sections/' . esc_attr( $section ) );
        } 
    }
 
get_footer();