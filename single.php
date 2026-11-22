<?php
/**
 * Single Post Template Fallback
 * 
 * @package My_Theme
 */

$single_template = locate_template( array( 'single/single.php' ) );
if ( $single_template ) {
    load_template( $single_template );
} else {
    require_once get_template_directory() . '/single/single.php';
}
