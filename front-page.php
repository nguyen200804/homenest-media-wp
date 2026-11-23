<?php
/**
 * Front Page Template Fallback
 * 
 * @package My_Theme
 */

$front_page_template = locate_template( array( 'page/front-page.php' ) );
if ( $front_page_template ) {
    load_template( $front_page_template );
} else {
    require_once get_template_directory() . '/page/front-page.php';
}
