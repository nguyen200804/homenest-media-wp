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
}
add_action( 'init', 'theme_register_custom_taxonomies' );
