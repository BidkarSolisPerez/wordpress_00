<?php
/**
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Construction Landing Page
 */

$construction_landing_page_sections = array( 'banner', 'about', 'promotional', 'portfolio', 'services', 'clients', 'testimonials', 'contactform' );
$ed_section = construction_landing_page_home_section();
    
get_header(); 
    if ( 'posts' == get_option( 'show_on_front' ) ) {

        include( get_home_template() );

    }elseif( $ed_section ){ 
        
        foreach( $construction_landing_page_sections as $section ){ 

            if( get_theme_mod( 'construction_landing_page_ed_' . $section . '_section' ) == 1 ){

                get_template_part( 'sections/' . esc_attr( $section ) );

            } 
        }

    } else{ include( get_page_template() ); }
                  
get_footer();