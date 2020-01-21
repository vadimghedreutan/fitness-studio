<?php

// Setup
define('FDE_DEV_MODE', true);

// includes
include( get_template_directory() . '/includes/front/enqueue.php' );
include( get_template_directory() . '/includes/setup.php' );
include( get_template_directory() . '/includes/custom-nav-walker.php' );

// Hooks
add_action( 'wp_enqueue_scripts', 'fde_enqueue' );
add_action( 'after_setup_theme', 'fde_setup_theme' );

//
