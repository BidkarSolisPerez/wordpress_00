<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Construction_Landing_Page
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	
    <header id="masthead" class="site-header" role="banner">
	    <div class="container">
			
            <div class="site-branding">
				
                <?php 
    		        if( function_exists( 'has_custom_logo' ) && has_custom_logo() ){
                        the_custom_logo();
                    } 
                ?>
               	<div class="text-logo">
	                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo esc_html( $description ); /* WPCS: xss ok. */ ?></p>
					<?php
					endif; ?>
                </div>
			</div><!-- .site-branding -->
            
			<div id="mobile-header">
			    <a id="responsive-menu-button" href="#sidr-main">
			    	<span></span>
			    	<span></span>
			    	<span></span>
			    </a>
			</div>
            
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
            
	    </div>
	</header><!-- #masthead -->
    
    
	<?php 
        
        /**
         * Page Header
         * 
         * @hooked construction_landing_page_get_header
        */
        do_action( 'construction_landing_page_page_header' );

        $ed_section = construction_landing_page_home_section();
        
    	if( is_home() || ! $ed_section || ! ( is_front_page()  || is_page_template( 'template-home.php' ) ) ){
    		echo '<div id="content" class="site-content">';
    	    echo '<div class="container">';
    		echo '<div class="row">';
    	}