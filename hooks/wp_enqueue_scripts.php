<?php

// Theme styles and scripts
add_action( 'wp_enqueue_scripts', function() {
    $asset = get_template_directory() . '/build/theme.asset.php';
    if( ! file_exists( $asset ) ) {
        return;
    }
    $asset = require( $asset );
    wp_enqueue_style(
        'theme_styles',
        get_template_directory_uri() . '/build/theme.css',
        $asset['dependencies'],
        $asset['version'],
        'all'
    );
    wp_enqueue_script(
        'theme_scripts',
        get_template_directory_uri() . '/build/theme.js',
        $asset['dependencies'],
        $asset['version'],
        true
    );
} );