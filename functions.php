<?php
/**
 * Theme Functions and Definitions
 * 
 * File cấu hình trung tâm của Theme, tuân thủ đầy đủ các nguyên tắc:
 * 1. Khởi tạo Theme Support & Menus chuẩn WordPress.
 * 2. Nạp CSS & JavaScript qua wp_enqueue_scripts (tự động cập nhật version chống cache).
 * 3. Bóc tách module logic sang thư mục inc/ (Template Loader, Post Types, Custom Fields).
 * 4. Tùy biến truy vấn danh sách bằng hook pre_get_posts (chống lỗi phân trang).
 * 5. Tối ưu bảo mật và làm sạch mã nguồn HTML.
 */

// Ngăn chặn truy cập trực tiếp vào file vì lý do bảo mật
defined( 'ABSPATH' ) || exit;

// Định nghĩa các hằng số cơ bản cho theme
define( 'THEME_DIR', get_template_directory() );
define( 'THEME_URI', get_template_directory_uri() );
define( 'THEME_VERSION', wp_get_theme()->get( 'Version' ) ?: '1.0.0' );

/* ==========================================================================
   1. KHỞI TẠO TÍNH NĂNG THEME (THEME SUPPORT & MENUS)
   ========================================================================== */
function theme_setup() {
    // 1. Tự động thêm thẻ <title> chuẩn SEO vào <head>
    add_theme_support( 'title-tag' );

    // 2. Kích hoạt tính năng Ảnh đại diện (Featured Image)
    add_theme_support( 'post-thumbnails' );

    // 3. Định nghĩa các kích thước ảnh cắt tự động (tùy chọn)
    add_image_size( 'product-card', 400, 400, true ); // Ảnh vuông tỉ lệ 1:1
    add_image_size( 'blog-banner', 800, 450, true );  // Ảnh chữ nhật tỉ lệ 16:9

    // 4. Hỗ trợ Logo tùy biến trong Appearance → Customize
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // 5. Chuẩn hóa mã HTML5 cho các thẻ mặc định của WordPress
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // 6. Đăng ký các vị trí hiển thị Menu điều hướng
    register_nav_menus( array(
        'primary-menu' => 'Menu Chính (Header)',
        'footer-menu'  => 'Menu Chân Trang (Footer)',
        'mobile-menu'  => 'Menu Di Động (Mobile Drawer)',
    ) );
}
add_action( 'after_setup_theme', 'theme_setup' );

/* ==========================================================================
   2. NẠP FILE CSS & JAVASCRIPT (ENQUEUE SCRIPTS & STYLES)
   ========================================================================== */
function theme_enqueue_assets() {
    // 1. Nạp file style.css chính (dùng filemtime tự sinh version chống cache trình duyệt)
    $style_file = THEME_DIR . '/style.css';
    $style_ver  = file_exists( $style_file ) ? filemtime( $style_file ) : THEME_VERSION;
    wp_enqueue_style( 'theme-main-style', get_stylesheet_uri(), array(), $style_ver );

    // 2. Nạp thêm file CSS phụ nếu có tổ chức trong assets/css/
    if ( file_exists( THEME_DIR . '/assets/css/main.css' ) ) {
        wp_enqueue_style( 'theme-custom-style', THEME_URI . '/assets/css/main.css', array(), filemtime( THEME_DIR . '/assets/css/main.css' ) );
    }

    if ( file_exists( THEME_DIR . '/assets/css/header.css' ) ) {
        wp_enqueue_style( 'theme-header-style', THEME_URI . '/assets/css/header.css', array( 'theme-main-style' ), filemtime( THEME_DIR . '/assets/css/header.css' ) );
    }

    if ( file_exists( THEME_DIR . '/assets/css/footer.css' ) ) {
        wp_enqueue_style( 'theme-footer-style', THEME_URI . '/assets/css/footer.css', array( 'theme-main-style' ), filemtime( THEME_DIR . '/assets/css/footer.css' ) );
    }

    if ( file_exists( THEME_DIR . '/assets/css/sidebar.css' ) ) {
        wp_enqueue_style( 'theme-sidebar-style', THEME_URI . '/assets/css/sidebar.css', array( 'theme-main-style' ), filemtime( THEME_DIR . '/assets/css/sidebar.css' ) );
    }

    // 3. Nạp file JavaScript chính (in_footer = true để không chặn render trang)
    $script_file = THEME_DIR . '/assets/js/main.js';
    if ( file_exists( $script_file ) ) {
        wp_enqueue_script( 'theme-main-script', THEME_URI . '/assets/js/main.js', array(), filemtime( $script_file ), true );
    }

    $header_script_file = THEME_DIR . '/assets/js/header.js';
    if ( file_exists( $header_script_file ) ) {
        wp_enqueue_script( 'theme-header-script', THEME_URI . '/assets/js/header.js', array(), filemtime( $header_script_file ), true );
    }

    $footer_script_file = THEME_DIR . '/assets/js/footer.js';
    if ( file_exists( $footer_script_file ) ) {
        wp_enqueue_script( 'theme-footer-script', THEME_URI . '/assets/js/footer.js', array(), filemtime( $footer_script_file ), true );
    }

    // 4. Nạp script hỗ trợ trả lời comment lồng nhau (chỉ khi trang bài viết mở comment)
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    // 5. Tự động nạp CSS & JS chuyên biệt theo từng trang nếu có file trong assets/
    if ( is_front_page() || is_page_template( 'page/front-page.php' ) || is_page_template( 'front-page.php' ) ) {
        theme_auto_enqueue_asset( 'front-page' );
    } elseif ( is_home() ) {
        theme_auto_enqueue_asset( 'home' );
    } elseif ( is_page() ) {
        $slug = get_post_field( 'post_name', get_queried_object_id() );
        theme_auto_enqueue_asset( 'page' );
        if ( $slug ) {
            theme_auto_enqueue_asset( "page-{$slug}" );
        }
        if ( is_page( 'wiki' ) || 'wiki' === $slug ) {
            theme_auto_enqueue_asset( 'archive' );
        }
    } elseif ( is_singular() ) {
        $post_type = get_post_type();
        theme_auto_enqueue_asset( 'single' );
        if ( $post_type ) {
            theme_auto_enqueue_asset( "single-{$post_type}" );
        }
    } elseif ( is_archive() ) {
        theme_auto_enqueue_asset( 'archive' );
        if ( is_post_type_archive() ) {
            $post_type = get_query_var( 'post_type' );
            if ( $post_type ) {
                theme_auto_enqueue_asset( "archive-{$post_type}" );
            }
        } elseif ( is_category() ) {
            theme_auto_enqueue_asset( 'category' );
        } elseif ( is_tag() ) {
            theme_auto_enqueue_asset( 'tag' );
        } elseif ( is_tax() ) {
            $taxonomy = get_query_var( 'taxonomy' );
            theme_auto_enqueue_asset( 'taxonomy' );
            if ( $taxonomy ) {
                theme_auto_enqueue_asset( "taxonomy-{$taxonomy}" );
            }
        }
    } elseif ( is_search() ) {
        theme_auto_enqueue_asset( 'search' );
    } elseif ( is_404() ) {
        theme_auto_enqueue_asset( '404' );
    }
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_assets' );

/**
 * Hàm trợ giúp: Tự kiểm tra nếu file có trong assets/css/ hoặc assets/js/ thì mới nạp
 */
function theme_auto_enqueue_asset( $name ) {
    $handle = 'theme-' . sanitize_key( str_replace( '/', '-', $name ) );

    // Tự nạp CSS riêng nếu có
    $css_file = THEME_DIR . "/assets/css/{$name}.css";
    if ( file_exists( $css_file ) ) {
        wp_enqueue_style( "{$handle}-style", THEME_URI . "/assets/css/{$name}.css", array( 'theme-main-style' ), filemtime( $css_file ) );
    }

    // Tự nạp JS riêng nếu có
    $js_file = THEME_DIR . "/assets/js/{$name}.js";
    if ( file_exists( $js_file ) ) {
        wp_enqueue_script( "{$handle}-script", THEME_URI . "/assets/js/{$name}.js", array( 'theme-main-script' ), filemtime( $js_file ), true );
    }
}

/**
 * 6. Tự động nạp CSS & JS cho bất kỳ template-part nào khi được gọi qua get_template_part()
 * Ví dụ: get_template_part('template-parts/section/faq') -> tự nạp assets/css/template-parts/section/faq.css
 */
add_action( 'get_template_part', function( $slug, $name = null ) {
    $asset_name = $name ? "{$slug}-{$name}" : $slug;
    theme_auto_enqueue_asset( $asset_name );

    // Nếu gọi template-part có $name nhưng không có CSS riêng cho name, nạp CSS gốc $slug
    if ( $name && ! file_exists( THEME_DIR . "/assets/css/{$asset_name}.css" ) ) {
        theme_auto_enqueue_asset( $slug );
    }
}, 10, 2 );

/**
 * 7. Tự động nạp CSS & JS cho sidebar khi get_sidebar() được gọi
 */
add_action( 'get_sidebar', function( $name = null ) {
    $asset_name = $name ? "sidebar-{$name}" : 'sidebar';
    theme_auto_enqueue_asset( $asset_name );
} );

/* ==========================================================================
   3. NẠP CÁC MODULE TỪ THƯ MỤC INC/ (NGUYÊN TẮC BÓC TÁCH MODULE)
   ========================================================================== */
// Header Navigation Walker & Fallback Menu
if ( file_exists( THEME_DIR . '/inc/header-nav.php' ) ) {
    require_once THEME_DIR . '/inc/header-nav.php';
}

// 1. Bộ nạp template trong thư mục con page/, single/, archive/
if ( file_exists( THEME_DIR . '/inc/template-loader.php' ) ) {
    require_once THEME_DIR . '/inc/template-loader.php';
}

// 2. Đăng ký các Custom Post Type (Sản phẩm, Dự án, Nhân sự...)
if ( file_exists( THEME_DIR . '/inc/custom-post-types.php' ) ) {
    require_once THEME_DIR . '/inc/custom-post-types.php';
}

// 3. Đăng ký các Custom Taxonomy (Loại sản phẩm, Lĩnh vực hoạt động...)
if ( file_exists( THEME_DIR . '/inc/custom-taxonomies.php' ) ) {
    require_once THEME_DIR . '/inc/custom-taxonomies.php';
}

// 4. Trang Cài đặt Theme (Option Page)
if ( file_exists( THEME_DIR . '/inc/custom-option-page.php' ) ) {
    require_once THEME_DIR . '/inc/custom-option-page.php';
}

// 5. Bộ khung Custom Fields thay thế ACF (Meta boxes, Term meta...)
if ( file_exists( THEME_DIR . '/inc/fields/loader.php' ) ) {
    require_once THEME_DIR . '/inc/fields/loader.php';
}

/* ==========================================================================
   4. TỐI ƯU TRUY VẤN ARCHIVE BẰNG PRE_GET_POSTS
   ========================================================================== */
function theme_optimize_archive_queries( $query ) {
    // Chỉ can thiệp ngoài giao diện frontend và là truy vấn chính (Main Query)
    if ( ! is_admin() && $query->is_main_query() ) {
        // Tùy biến số lượng kết quả trên trang Tìm kiếm
        if ( $query->is_search() ) {
            $query->set( 'posts_per_page', 10 );
        }

        // Tùy biến cho trang lưu trữ Dịch vụ và Danh mục Dịch vụ
        if ( $query->is_post_type_archive( 'dich-vu' ) || $query->is_tax( 'danh-muc-dich-vu' ) ) {
            $query->set( 'posts_per_page', 9 );
            $query->set( 'orderby', 'date' );
            $query->set( 'order', 'DESC' );
        }

        // Trang lưu trữ Dự án: 12 dự án/trang, lọc theo lĩnh vực, chuyên ngành, từ khóa
        if ( $query->is_post_type_archive( 'du-an' ) || $query->is_tax( array( 'linh-vuc', 'chuyen-nganh' ) ) ) {
            $query->set( 'posts_per_page', 12 );
            $query->set( 'orderby', 'date' );
            $query->set( 'order', 'DESC' );

            if ( $query->is_post_type_archive( 'du-an' ) || $query->is_tax( array( 'linh-vuc', 'chuyen-nganh' ) ) ) {
                $tax_query = array();
                foreach ( array( 'linh-vuc' => 'linh_vuc', 'chuyen-nganh' => 'chuyen_nganh' ) as $tax => $param ) {
                    if ( ! empty( $_GET[ $param ] ) ) {
                        $tax_query[] = array(
                            'taxonomy' => $tax,
                            'field'    => 'slug',
                            'terms'    => sanitize_title( wp_unslash( $_GET[ $param ] ) ),
                        );
                    }
                }
                if ( $tax_query ) {
                    $tax_query['relation'] = 'AND';
                    $query->set( 'tax_query', $tax_query );
                }
                if ( ! empty( $_GET['tu_khoa'] ) ) {
                    $query->set( 's', sanitize_text_field( wp_unslash( $_GET['tu_khoa'] ) ) );
                }
            }
        }
    }
}

// Nạp thư viện Lottie cho trang lưu trữ Dự án (quả cầu animation)
add_action( 'wp_enqueue_scripts', function () {
    if ( is_tax( array( 'chuyen-nganh', 'linh-vuc' ) ) ) {
        theme_auto_enqueue_asset( 'archive-du-an' );
    }
    if ( is_post_type_archive( 'du-an' ) || is_tax( array( 'chuyen-nganh', 'linh-vuc' ) ) ) {
        wp_enqueue_script( 'lottie-web', 'https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.12.2/lottie.min.js', array(), '5.12.2', true );
    }
}, 5 );
add_action( 'pre_get_posts', 'theme_optimize_archive_queries' );

/* ==========================================================================
   5. BẢO MẬT & TINH CHỈNH TIỆN ÍCH
   ========================================================================== */
// 1. Xóa bỏ tiền tố mặc định của the_archive_title() (bỏ chữ "Chuyên mục:", "Thẻ:")
add_filter( 'get_the_archive_title_prefix', '__return_empty_string' );

// 2. Tùy biến độ dài trích dẫn ngắn (Excerpt)
add_filter( 'excerpt_length', function() {
    return 25; // Giới hạn 25 từ
} );

add_filter( 'excerpt_more', function() {
    return '...';
} );

// 3. Ẩn phiên bản WordPress khỏi thẻ <head> nhằm tăng cường bảo mật
remove_action( 'wp_head', 'wp_generator' );

// 4. Cho phép upload file SVG an toàn trong Admin
add_filter( 'upload_mimes', function( $mimes ) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
} );

add_filter( 'use_block_editor_for_post_type', '__return_false', 10 );

/* ==========================================================================
   6. CUSTOM COMMENT CALLBACK (KHỚP THEO THIẾT KẾ)
   ========================================================================== */
if ( ! function_exists( 'my_theme_custom_comment_list' ) ) :
function my_theme_custom_comment_list( $comment, $args, $depth ) {
    $tag = ( 'div' === $args['style'] ) ? 'div' : 'li';
    ?>
    <<?php echo $tag; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class( empty( $args['has_children'] ) ? 'comment-item' : 'comment-item parent', $comment ); ?>>
        <article id="div-comment-<?php comment_ID(); ?>" class="comment-body">
            <div class="comment-avatar">
                <?php
                if ( 0 != $args['avatar_size'] ) {
                    echo get_avatar( $comment, $args['avatar_size'] );
                }
                ?>
            </div>

            <div class="comment-main">
                <div class="comment-header">
                    <div class="comment-meta-info">
                        <span class="comment-author-name"><?php echo get_comment_author_link( $comment ); ?></span>
                        <span class="comment-date"><?php echo get_comment_date( 'd/m/Y', $comment ); ?></span>
                    </div>

                    <div class="comment-actions">
                        <?php
                        comment_reply_link( array_merge( $args, array(
                            'add_below'  => 'div-comment',
                            'depth'      => $depth,
                            'max_depth'  => $args['max_depth'],
                            'reply_text' => __( 'Phản hồi', 'my-theme' ),
                        ) ) );
                        ?>
                        <?php edit_comment_link( __( 'Edit', 'my-theme' ), '', '' ); ?>
                    </div>
                </div>

                <div class="comment-content">
                    <?php if ( '0' == $comment->comment_approved ) : ?>
                        <p class="comment-awaiting-moderation"><?php esc_html_e( 'Bình luận của bạn đang chờ kiểm duyệt.', 'my-theme' ); ?></p>
                    <?php endif; ?>
                    <?php comment_text(); ?>
                </div>
            </div>
        </article>
    <?php
}
endif;













/**
 * TOOL: Tạo dự án nhanh (post_type = du-an)
 * Taxonomy: linh-vuc, chuyen-nganh
 */

const HN_PT      = 'du-an';
const HN_TAX_LV  = 'linh-vuc';
const HN_TAX_CN  = 'chuyen-nganh';

/** Chuyển danh sách tên/slug term -> mảng term_id (tự tạo nếu chưa có). */
function hn_resolve_terms( $names, $taxonomy, $create = true ) {
	$ids = array();
	foreach ( (array) $names as $name ) {
		$name = trim( $name );
		if ( $name === '' ) {
			continue;
		}
		$term = get_term_by( 'name', $name, $taxonomy );
		if ( ! $term ) {
			$term = get_term_by( 'slug', sanitize_title( $name ), $taxonomy );
		}
		if ( $term ) {
			$ids[] = (int) $term->term_id;
			continue;
		}
		if ( $create ) {
			$r = wp_insert_term( $name, $taxonomy );
			if ( ! is_wp_error( $r ) ) {
				$ids[] = (int) $r['term_id'];
			}
		}
	}
	return array_unique( $ids );
}

/**
 * Hàm tạo dự án (có thể dùng ở nơi khác).
 *
 * @param string $title
 * @param string $content
 * @param array  $linh_vuc      Tên/slug/ID term
 * @param array  $chuyen_nganh  Tên/slug/ID term
 * @param string $status        publish|draft|pending
 * @param string $thumb_url     URL ảnh đại diện (tùy chọn, ảnh phải có trong Media)
 * @return int|WP_Error
 */
function hn_create_project( $title, $content = '', $linh_vuc = array(), $chuyen_nganh = array(), $status = 'publish', $thumb_url = '' ) {
	$post_id = wp_insert_post( array(
		'post_type'    => HN_PT,
		'post_title'   => sanitize_text_field( $title ),
		'post_content' => wp_kses_post( $content ),
		'post_status'  => $status,
	), true );

	if ( is_wp_error( $post_id ) ) {
		return $post_id;
	}

	// Cho phép truyền term_id (số) hoặc tên/slug
	$to_ids = function ( $items, $tax ) {
		$ids = array();
		$names = array();
		foreach ( (array) $items as $i ) {
			is_numeric( $i ) ? $ids[] = (int) $i : $names[] = $i;
		}
		return array_merge( $ids, hn_resolve_terms( $names, $tax, true ) );
	};

	if ( ! empty( $linh_vuc ) ) {
		wp_set_object_terms( $post_id, $to_ids( $linh_vuc, HN_TAX_LV ), HN_TAX_LV );
	}
	if ( ! empty( $chuyen_nganh ) ) {
		wp_set_object_terms( $post_id, $to_ids( $chuyen_nganh, HN_TAX_CN ), HN_TAX_CN );
	}

	if ( $thumb_url ) {
		$att_id = attachment_url_to_postid( $thumb_url );
		if ( $att_id ) {
			set_post_thumbnail( $post_id, $att_id );
		}
	}

	return $post_id;
}

/** Menu trong Tools */
add_action( 'admin_menu', function () {
	add_management_page(
		'Tạo dự án nhanh',
		'Tạo dự án nhanh',
		'edit_posts',
		'hn-tao-du-an',
		'hn_render_project_tool'
	);
} );

function hn_render_project_tool() {
	if ( ! current_user_can( 'edit_posts' ) ) {
		return;
	}

	$notices = array();

	if ( isset( $_POST['hn_tool_submit'] ) && check_admin_referer( 'hn_tool_action', 'hn_tool_nonce' ) ) {
		$mode   = sanitize_key( $_POST['hn_mode'] ?? 'single' );
		$status = in_array( $_POST['hn_status'] ?? '', array( 'publish', 'draft', 'pending' ), true ) ? $_POST['hn_status'] : 'publish';

		if ( $mode === 'single' ) {
			$title = sanitize_text_field( wp_unslash( $_POST['hn_title'] ?? '' ) );
			if ( $title === '' ) {
				$notices[] = array( 'error', 'Vui lòng nhập tiêu đề dự án.' );
			} else {
				$lv = array_map( 'intval', (array) ( $_POST['hn_lv'] ?? array() ) );
				$cn = array_map( 'intval', (array) ( $_POST['hn_cn'] ?? array() ) );
				$id = hn_create_project(
					$title,
					wp_unslash( $_POST['hn_content'] ?? '' ),
					$lv,
					$cn,
					$status,
					esc_url_raw( wp_unslash( $_POST['hn_thumb'] ?? '' ) )
				);
				if ( is_wp_error( $id ) ) {
					$notices[] = array( 'error', $id->get_error_message() );
				} else {
					$notices[] = array(
						'success',
						sprintf( 'Đã tạo dự án: <a href="%s">%s</a>', esc_url( get_edit_post_link( $id ) ), esc_html( $title ) ),
					);
				}
			}
		} else { // bulk
			$lines = preg_split( '/\r\n|\r|\n/', wp_unslash( $_POST['hn_bulk'] ?? '' ) );
			$ok = 0;
			foreach ( $lines as $line ) {
				$line = trim( $line );
				if ( $line === '' ) {
					continue;
				}
				$parts = array_map( 'trim', explode( '|', $line ) );
				$title = $parts[0] ?? '';
				$lv    = isset( $parts[1] ) ? explode( ',', $parts[1] ) : array();
				$cn    = isset( $parts[2] ) ? explode( ',', $parts[2] ) : array();

				$id = hn_create_project( $title, '', $lv, $cn, $status );
				if ( is_wp_error( $id ) ) {
					$notices[] = array( 'error', esc_html( $title ) . ': ' . $id->get_error_message() );
				} else {
					$ok++;
				}
			}
			$notices[] = array( 'success', "Đã tạo thành công <strong>{$ok}</strong> dự án." );
		}
	}

	$terms_lv = get_terms( array( 'taxonomy' => HN_TAX_LV, 'hide_empty' => false ) );
	$terms_cn = get_terms( array( 'taxonomy' => HN_TAX_CN, 'hide_empty' => false ) );
	?>
	<div class="wrap">
		<h1>Tạo dự án nhanh</h1>

		<?php foreach ( $notices as $n ) : ?>
			<div class="notice notice-<?php echo esc_attr( $n[0] ); ?> is-dismissible"><p><?php echo wp_kses_post( $n[1] ); ?></p></div>
		<?php endforeach; ?>

		<h2 class="nav-tab-wrapper">
			<a href="#" class="nav-tab nav-tab-active" data-tab="single">Tạo 1 dự án</a>
			<a href="#" class="nav-tab" data-tab="bulk">Tạo hàng loạt</a>
		</h2>

		<!-- 1 DỰ ÁN -->
		<form method="post" class="hn-tab" id="hn-tab-single" style="max-width:800px;margin-top:20px">
			<?php wp_nonce_field( 'hn_tool_action', 'hn_tool_nonce' ); ?>
			<input type="hidden" name="hn_mode" value="single">

			<table class="form-table">
				<tr>
					<th><label for="hn_title">Tiêu đề *</label></th>
					<td><input type="text" id="hn_title" name="hn_title" class="regular-text" style="width:100%"></td>
				</tr>
				<tr>
					<th><label for="hn_content">Nội dung</label></th>
					<td><textarea id="hn_content" name="hn_content" rows="5" style="width:100%"></textarea></td>
				</tr>
				<tr>
					<th><label for="hn_thumb">Ảnh đại diện (URL)</label></th>
					<td>
						<input type="url" id="hn_thumb" name="hn_thumb" class="regular-text" style="width:100%" placeholder="https://.../wp-content/uploads/...jpg">
						<p class="description">Ảnh phải có sẵn trong Media Library.</p>
					</td>
				</tr>
				<tr>
					<th>Lĩnh vực</th>
					<td>
						<?php if ( ! is_wp_error( $terms_lv ) ) : foreach ( $terms_lv as $t ) : ?>
							<label style="display:inline-block;margin:0 16px 6px 0">
								<input type="checkbox" name="hn_lv[]" value="<?php echo (int) $t->term_id; ?>"> <?php echo esc_html( $t->name ); ?>
							</label>
						<?php endforeach; endif; ?>
					</td>
				</tr>
				<tr>
					<th>Chuyên ngành</th>
					<td>
						<?php if ( ! is_wp_error( $terms_cn ) ) : foreach ( $terms_cn as $t ) : ?>
							<label style="display:inline-block;margin:0 16px 6px 0">
								<input type="checkbox" name="hn_cn[]" value="<?php echo (int) $t->term_id; ?>"> <?php echo esc_html( $t->name ); ?>
							</label>
						<?php endforeach; endif; ?>
					</td>
				</tr>
				<tr>
					<th><label for="hn_status">Trạng thái</label></th>
					<td>
						<select name="hn_status" id="hn_status">
							<option value="publish">Công khai</option>
							<option value="draft">Bản nháp</option>
							<option value="pending">Chờ duyệt</option>
						</select>
					</td>
				</tr>
			</table>
			<?php submit_button( 'Tạo dự án', 'primary', 'hn_tool_submit' ); ?>
		</form>

		<!-- HÀNG LOẠT -->
		<form method="post" class="hn-tab" id="hn-tab-bulk" style="max-width:800px;margin-top:20px;display:none">
			<?php wp_nonce_field( 'hn_tool_action', 'hn_tool_nonce' ); ?>
			<input type="hidden" name="hn_mode" value="bulk">

			<p>Mỗi dòng một dự án, định dạng: <code>Tiêu đề | Lĩnh vực | Chuyên ngành</code><br>
			Nhiều term cách nhau bằng dấu phẩy. Term chưa có sẽ được tự tạo.</p>

			<textarea name="hn_bulk" rows="12" style="width:100%" placeholder="Bộ nhận diện ABC | Nhận diện thương hiệu, Ấn phẩm | Tài chính
Website Du lịch XYZ | Thiết kế Web | Du lịch
Mascot Dược Hà Nội | Mascot | Y dược"></textarea>

			<p>
				<label>Trạng thái:
					<select name="hn_status">
						<option value="publish">Công khai</option>
						<option value="draft">Bản nháp</option>
						<option value="pending">Chờ duyệt</option>
					</select>
				</label>
			</p>
			<?php submit_button( 'Tạo hàng loạt', 'primary', 'hn_tool_submit' ); ?>
		</form>
	</div>

	<script>
	document.querySelectorAll('.nav-tab').forEach(function (tab) {
		tab.addEventListener('click', function (e) {
			e.preventDefault();
			document.querySelectorAll('.nav-tab').forEach(t => t.classList.remove('nav-tab-active'));
			document.querySelectorAll('.hn-tab').forEach(f => f.style.display = 'none');
			tab.classList.add('nav-tab-active');
			document.getElementById('hn-tab-' + tab.dataset.tab).style.display = 'block';
		});
	});
	</script>
	<?php
}





