<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/dist/css/bootstrap-theme.min.css">
	<?php wp_head(); ?>
        
        <!-- meaamenu plugin -->
        <script src="<?php echo get_template_directory_uri();?>/assets/jquery-meammenu/jquery.meanmenu.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/jquery-meammenu/meanmenu.min.css">
   
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body <?php body_class(); ?>>
<div>
<div id="page" class="site container-fluid">

	<?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
		</a>
	</div>
	<?php endif; ?>

	<header >
            <?php 
            $slide = '';
            if (function_exists('get_option_tree')) {
                $slide = get_option_tree('slider_code', '');
            }
            ?>
            <div class="main-header center clear" >
             
                <div class="mobile-nav-menu">                
                </div>
		<div class="nav-menu">
                    <nav>
				<?php wp_nav_menu( array( 'theme_location' => 'primary',
                                                    'depth' => 3,
			'menu_class' => 'sf-menu',
			'echo'  => true,
			'items_wrap' => '<ul id="%1$s" class="%2$s ">%3$s</ul>',
			'depth' => 10, 
			'container_class' => 'menu primary-menu',
                                                    ) ); ?>
                     </nav>
		</div>
               
		<div class="clear">
			
		</div>
            </div>
	</header><!-- .site-header -->

	<div id="main" class="site-main clear">
		<div id="banner-slide">
			<?php /*echo do_shortcode('[wonderplugin_slider id="1"]'); */
			if ($slide)
                            echo do_shortcode($slide);
			?>
                    <div class="navigation-control prev"></div>
                    <div class="navigation-control next"></div>
		</div> <!-- banner slide-->