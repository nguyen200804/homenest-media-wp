<?php
/**
 * Đăng ký Custom Post Types cho Theme
 * Theo chuẩn hướng dẫn cấu hình theme WordPress
 */
defined( 'ABSPATH' ) || exit;

function theme_register_custom_post_types() {
    $labels = array(
        'name'                  => 'Dịch vụ',
        'singular_name'         => 'Dịch vụ',
        'menu_name'             => 'Dịch vụ',
        'name_admin_bar'        => 'Dịch vụ',
        'add_new'               => 'Thêm dịch vụ',
        'add_new_item'          => 'Thêm dịch vụ mới',
        'new_item'              => 'Dịch vụ mới',
        'edit_item'             => 'Chỉnh sửa dịch vụ',
        'view_item'             => 'Xem dịch vụ',
        'all_items'             => 'Tất cả dịch vụ',
        'search_items'          => 'Tìm kiếm dịch vụ',
        'parent_item_colon'     => 'Dịch vụ cha:',
        'not_found'             => 'Không tìm thấy dịch vụ nào',
        'not_found_in_trash'    => 'Thùng rác trống',
        'featured_image'        => 'Ảnh đại diện dịch vụ',
        'set_featured_image'    => 'Đặt ảnh đại diện',
        'remove_featured_image' => 'Xóa ảnh đại diện',
        'use_featured_image'    => 'Dùng làm ảnh đại diện',
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,                                // Kích hoạt trang lưu trữ /dich-vu/
        'publicly_queryable'  => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'dich-vu', 'with_front' => false ),
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'menu_position'       => 5,                                   // Đặt ngay dưới mục Bài viết
        'menu_icon'           => 'dashicons-clipboard',              // Icon dịch vụ
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'show_in_rest'        => true,                                // Hỗ trợ REST API & Block Editor nếu cần
        'taxonomies'          => array( 'danh-muc-dich-vu' ),
    );

    register_post_type( 'dich-vu', $args );
}
add_action( 'init', 'theme_register_custom_post_types' );
