<?php
/**
 * Template Loader
 * 
 * Cho phép WordPress tự động tìm kiếm template trong các thư mục con:
 * - page/ : Cho các template trang (front-page.php, home.php, page.php, page-{slug}.php...)
 * - single/ : Cho các template bài viết đơn (single.php, single-{post_type}.php, single-{post_type}-{slug}.php...)
 * - archive/ : Cho các template lưu trữ (archive.php, category.php, tag.php, taxonomy.php...)
 */

defined( 'ABSPATH' ) || exit;

$template_folders = array(
    'frontpage'  => 'page',
    'home'       => 'page',
    'page'       => 'page',
    'single'     => 'single',
    'singular'   => 'single',
    'attachment' => 'single',
    'archive'    => 'archive',
    'category'   => 'archive',
    'tag'        => 'archive',
    'taxonomy'   => 'archive',
    'author'     => 'archive',
    'date'       => 'archive',
);

foreach ( $template_folders as $type => $folder ) {
    add_filter( "{$type}_template_hierarchy", function ( $templates ) use ( $folder ) {
        $result = array();
        foreach ( $templates as $template ) {
            if ( false === strpos( $template, '/' ) ) {
                $result[] = $folder . '/' . $template;
            }
            $result[] = $template;
        }
        return $result;
    } );
}
