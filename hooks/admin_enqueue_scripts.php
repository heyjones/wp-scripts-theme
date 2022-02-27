<?php

// Admin styles and scripts
add_action( 'admin_enqueue_scripts', function() {
    $asset = get_template_directory() . '/build/admin.asset.php';
    if( ! file_exists( $asset ) ) {
        return;
    }
    $asset = require( $asset );
    wp_enqueue_style(
        'admin_styles',
        get_template_directory_uri() . '/build/admin.css',
        $asset['dependencies'],
        $asset['version'],
        'all'
    );
    wp_enqueue_script(
        'admin_scripts',
        get_template_directory_uri() . '/build/admin.js',
        $asset['dependencies'],
        $asset['version'],
        true
    );
} );