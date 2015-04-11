<?php

	function mba_css() {

		global $wp_styles;

        // Normalize
		wp_enqueue_style(
			'mba_normalize',
			get_template_directory_uri() . '/css/normalize.css'
		);

        // Foundation
		wp_enqueue_style(
			'mba_foundation_css',
			get_template_directory_uri() . '/css/foundation.min.css',
			array('mba_normalize')
		);

        // Foundation IE8 Grid
		wp_enqueue_style(
			'mba_foundation_ie8_grid',
			get_template_directory_uri() . '/css/ie8-grid-foundation-4.css',
			array( 'mba_foundation_css' )
		);
        
        $wp_styles->add_data( 'mba_foundation_ie8_grid', 'conditional', 'lt IE 8' );
        
        // Flexslider
		wp_enqueue_style(
			'mba_flexslider_css',
			get_template_directory_uri() . '/css/flexslider.css'
		);
        
        // Google web font
        $protocol = is_ssl() ? 'https' : 'http';
        wp_enqueue_style(
            'mba_roboto_font', 
            '$protocol://fonts.googleapis.com/css?family=Oswald'
        );
		
        // Main stylesheet
		wp_enqueue_style( 
            'mba_style', 
            get_stylesheet_uri() 
        );
		
        // FontAwesome
		wp_enqueue_style( 
            'mba_fontawesome_style', 
            get_template_directory_uri() . '/css/font-awesome.css' 
        );

	}

	function mba_scripts() {
        
        // Masonry
        wp_enqueue_script('masonry');

        // Modernizr
		wp_enqueue_script(
			'mba_foundation_modernizr_js',
			get_template_directory_uri() . '/js/custom.modernizr.js',
			array(),
			'2.6.2',
			false
		);

        // Foundation
		wp_enqueue_script(
			'mba_foundation_js',
			get_template_directory_uri() . '/js/foundation.min.js',
			array('jquery'),
			'5.0.2',
			true
		);

        // Initialise Foundation
		wp_enqueue_script(
			'mba_foundation_init_js',
			get_template_directory_uri() . '/js/foundation_init.js',
			array('mba_foundation_js'),
			'1.0',
			true
		);
        
        // Flexslider
		wp_enqueue_script(
			'mba_flexslider_js',
			get_template_directory_uri() . '/js/flexslider.js',
			array(),
			'2.0',
			true
		);
        
        // Fitvids.js
		wp_enqueue_script(
			'mba_fitvids_js',
			get_template_directory_uri() . '/js/jquery.fitvids.js',
			array(),
			'1.0',
			false
		);
		
        // Theme scripts
		wp_enqueue_script(
			'mba_js',
			get_template_directory_uri() . '/js/common.js',
			array(),
			'1.0',
			true
		);
        
        // Comment reply
        if ( is_singular() ) wp_enqueue_script( "comment-reply" );

	}

add_action( 'wp_enqueue_scripts', 'mba_css', 0 );
add_action( 'wp_enqueue_scripts', 'mba_scripts', 0 );

?>