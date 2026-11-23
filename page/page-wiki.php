<?php
/**
 * Template Name: Wiki Page Template
 * 
 * Áp dụng giao diện kho lưu trữ (Archive) cho trang Wiki
 * 
 * @package My_Theme
 */

get_header();

$theme_uri = get_template_directory_uri();

// Lấy số trang hiện tại
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : ( ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1 );

// Cấu hình truy vấn bài viết cho trang Wiki
$wiki_args = array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'paged'          => $paged,
    'posts_per_page' => get_option( 'posts_per_page', 12 ),
);

// Nếu có chuyên mục mang slug 'wiki' và có bài viết, ưu tiên lọc theo chuyên mục đó
$wiki_cat = get_category_by_slug( 'wiki' );
if ( $wiki_cat && $wiki_cat->count > 0 ) {
    $wiki_args['cat'] = $wiki_cat->term_id;
}

$wiki_query = new WP_Query( $wiki_args );
?>

<section class="archive-section section">
    <div class="container">
        <div class="archive-wrapper">

            <!-- Cột chính: Nội dung bài viết -->
            <div class="archive-content-col">
                <div class="archive-posts-container">

                    <!-- 1. Tiêu đề và mô tả trang Wiki -->
                    <header class="archive-header">
                        <h1 class="archive-title"><span class="textGradient"><?php single_post_title(); ?></span></h1>
                        <?php
                        $page_desc = get_the_content();
                        if ( ! empty( $page_desc ) ) :
                        ?>
                            <div class="archive-description">
                                <?php echo wp_kses_post( wpautop( $page_desc ) ); ?>
                            </div>
                        <?php endif; ?>
                    </header>

                    <!-- 2. Vòng lặp hiển thị danh sách bài viết -->
                    <?php if ( $wiki_query->have_posts() ) : ?>

                        <!-- Lưới bài viết (Trang 1: 21 bài đầu có ảnh, các bài tiếp theo và trang 2+ dùng card-no-image) -->
                        <div class="archive-posts-grid">
                            <?php
                            $counter = 0;
                            while ( $wiki_query->have_posts() ) : $wiki_query->the_post();
                                $counter++;
                                if ( $paged > 1 ) {
                                    // Trang 2 trở đi: Dùng template card-no-image
                                    get_template_part( 'template-parts/loop/card', 'no-image' );
                                } else {
                                    // Trang 1: 21 bài đầu dùng card-image.php, từ bài 22 trở đi dùng card-no-image.php
                                    if ( $counter <= 21 ) {
                                        get_template_part( 'template-parts/loop/card', 'image' );
                                    } else {
                                        get_template_part( 'template-parts/loop/card', 'no-image' );
                                    }
                                }
                            endwhile;
                            ?>
                        </div>

                        <!-- 3. Phân trang chuẩn của WordPress -->
                        <?php if ( $wiki_query->max_num_pages > 1 ) : ?>
                            <div class="pagination-wrap">
                                <div class="nav-links">
                                    <?php
                                    echo paginate_links( array(
                                        'base'      => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                                        'format'    => '?paged=%#%',
                                        'current'   => max( 1, $paged ),
                                        'total'     => $wiki_query->max_num_pages,
                                        'mid_size'           => 1, // Đổi từ 2 thành 1 để rút ngắn 2 bên
    'end_size'           => 0,
                                        'prev_text' => '<span class="nav-prev" aria-label="' . esc_attr__( 'Trang trước', 'my-theme' ) . '"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="15 18 9 12 15 6"></polyline></svg></span>',
                                        'next_text' => '<span class="nav-next" aria-label="' . esc_attr__( 'Trang sau', 'my-theme' ) . '"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="9 18 15 12 9 6"></polyline></svg></span>',
                                    ) );
                                    ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php wp_reset_postdata(); ?>

                    <?php else : ?>

                        <!-- Giao diện khi không tìm thấy nội dung -->
                        <?php get_template_part( 'template-parts/loop/none' ); ?>

                    <?php endif; ?>

                </div>
            </div>

            <!-- Cột phụ: Form tư vấn & Banner quảng cáo -->
            <?php get_sidebar(); ?>

        </div>
    </div>
</section>

<?php
get_footer();
