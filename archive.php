<?php
/**
 * Archive Template Fallback
 * 
 * @package My_Theme
 */

$archive_template = locate_template( array( 'archive/archive.php' ) );
if ( $archive_template ) {
    load_template( $archive_template );
} else {
    require_once get_template_directory() . '/archive/archive.php';
}

