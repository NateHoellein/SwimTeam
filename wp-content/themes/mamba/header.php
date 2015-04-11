<!DOCTYPE html>
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
	<title><?php wp_title(); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if (has_nav_menu('mba_header_menu')): ?>
    <div class="menu">
        <div class="contain-to-grid fixed">
            <nav class="top-bar" data-topbar>
              <ul class="title-area">
                <li class="name"></li>
                <li class="toggle-topbar menu-icon"><a href="#"><span><?php _e( 'Menu' , 'mba' ); ?></span></a></li>
              </ul>

              <section class="top-bar-section">
                <?php
                  if ( has_nav_menu( 'mba_header_menu' ) ) {
                      wp_nav_menu( array(
                          'theme_location' => 'mba_header_menu',
                          'container' => false,
                          'depth' => 0,
                          'items_wrap' => '<ul class="left">%3$s</ul>',
                          'fallback_cb' => false,
                          'walker' => new mba_walker( array(
                              'in_top_bar' => true,
                              'item_type' => 'li'
                          ) ),
                      ) );
                    }
                  ?>
              </section>
            </nav>
        </div>
    </div>
<?php endif; ?>
<header class="site-header">
    <div class="row">
        <div class="site-title large-12 columns">                 
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <?php bloginfo( 'name' ); ?>
            </a>          
        </div>
    </div>
</header>
<div class="site-content">