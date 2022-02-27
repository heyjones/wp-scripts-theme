<?php

// Loop through the /hooks directory and load 'em up
$hooks = glob( sprintf( '%s/hooks/*', get_template_directory() ) );
if( count( $hooks ) ) {
    foreach( $hooks as $hook ) {
        if( file_exists( $hook ) && is_file( $hook ) ) {
            require_once( $hook );
        }
    }
}