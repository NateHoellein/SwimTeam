<?php 

// Theme setup
function mba_setup() {
    
    // Theme translations can be filed in the mamba/languages/ directory
    load_theme_textdomain('mba', get_template_directory() . '/languages');

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );
	add_image_size( 'masonry-thumb', 400, 9999, false );

	register_nav_menus( array(
        'mba_header_menu' => __( 'Header Menu', 'mba' ),
        'mba_footer_menu' => __( 'Footer Menu', 'mba' )
	) );

    $formats = array(
        'gallery'
    );

    add_theme_support('post-formats', $formats);
    add_post_type_support('post', 'post-formats');
}

add_action( 'after_setup_theme', 'mba_setup' );

// Maximum content width
if (!isset($content_width)) $content_width = 1140;

// Sidebars
function mba_widgets_init() {
	register_sidebar(array(
		'name'=> __( 'Primary Sidebar', 'mba' ),
		'id' => 'mba_primary_sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s fadein anim_8">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
    register_sidebar(array(
		'name'=> __( 'First Footer', 'mba' ),
		'id' => 'mba_footer1_sidebar',
		'before_widget' => '<div id="%1$s" class="medium-3 columns widget %2$s fadein anim_5">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
    register_sidebar(array(
		'name'=> __( 'Second Footer', 'mba' ),
		'id' => 'mba_footer2_sidebar',
		'before_widget' => '<div id="%1$s" class="medium-3 columns widget %2$s fadein anim_5">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
    register_sidebar(array(
		'name'=> __( 'Third Footer', 'mba' ),
		'id' => 'mba_footer3_sidebar',
		'before_widget' => '<div id="%1$s" class="medium-3 columns widget %2$s fadein anim_5">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
    register_sidebar(array(
		'name'=> __( 'Fourth Footer', 'mba' ),
		'id' => 'mba_footer4_sidebar',
		'before_widget' => '<div id="%1$s" class="medium-3 columns widget %2$s fadein anim_5">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
}
add_action( 'widgets_init', 'mba_widgets_init' );

// Remove [...] from excerpt
function mba_excerpt_more($more) {
    global $post;
    return '...<p><a href="'. get_permalink($post->ID) . '">' . __( 'Read more' , 'mba' ) . ' <i class="fa fa-arrow-circle-o-right"></i>' . '</a></p>';
    }
    add_filter('excerpt_more', 'mba_excerpt_more');

// Editor style
function mba_editor_styles() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'after_setup_theme', 'mba_editor_styles' );

?>