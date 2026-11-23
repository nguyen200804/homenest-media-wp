<?php
/**
 * Đăng ký Custom Taxonomies cho Theme
 * Theo chuẩn hướng dẫn cấu hình theme WordPress
 */
defined( 'ABSPATH' ) || exit;

function theme_register_custom_taxonomies() {
    $labels = array(
        'name'              => 'Danh mục dịch vụ',
        'singular_name'     => 'Danh mục dịch vụ',
        'search_items'      => 'Tìm kiếm danh mục',
        'all_items'         => 'Tất cả danh mục',
        'parent_item'       => 'Danh mục cha',
        'parent_item_colon' => 'Danh mục cha:',
        'edit_item'         => 'Chỉnh sửa danh mục',
        'update_item'       => 'Cập nhật danh mục',
        'add_new_item'      => 'Thêm danh mục mới',
        'new_item_name'     => 'Tên danh mục mới',
        'menu_name'         => 'Danh mục dịch vụ',
    );

    $args = array(
        'hierarchical'      => true,                                  // Dạng danh mục có phân cấp cha/con
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,                                  // Hiển thị cột danh mục trong danh sách bài Admin
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'danh-muc-dich-vu', 'with_front' => false ),
        'show_in_rest'      => true,
    );

    // Gắn taxonomy này vào post type 'dich-vu'
    register_taxonomy( 'danh-muc-dich-vu', array( 'dich-vu' ), $args );

    // Taxonomy: Chuyên ngành & Lĩnh vực cho post type 'du-an'
    $du_an_taxonomies = array(
        'chuyen-nganh' => array( 'Chuyên ngành', 'chuyên ngành' ),
        'linh-vuc'     => array( 'Lĩnh vực', 'lĩnh vực' ),
    );

    foreach ( $du_an_taxonomies as $slug => $text ) {
        $tax_labels = array(
            'name'              => $text[0],
            'singular_name'     => $text[0],
            'search_items'      => 'Tìm kiếm ' . $text[1],
            'all_items'         => 'Tất cả ' . $text[1],
            'parent_item'       => $text[0] . ' cha',
            'parent_item_colon' => $text[0] . ' cha:',
            'edit_item'         => 'Chỉnh sửa ' . $text[1],
            'update_item'       => 'Cập nhật ' . $text[1],
            'add_new_item'      => 'Thêm ' . $text[1] . ' mới',
            'new_item_name'     => 'Tên ' . $text[1] . ' mới',
            'menu_name'         => $text[0],
        );

        register_taxonomy( $slug, array( 'du-an' ), array(
            'hierarchical'      => true,
            'labels'            => $tax_labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => $slug, 'with_front' => false ),
            'show_in_rest'      => true,
        ) );
    }
}
add_action( 'init', 'theme_register_custom_taxonomies' );
