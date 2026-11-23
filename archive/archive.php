<?php
/**
 * Generic Archive Template (Kho lưu trữ dùng chung)
 * 
 * Áp dụng cho: Chuyên mục (Category), Thẻ (Tag), Custom Taxonomy (danh-muc-dich-vu),
 * Post Type Archive (dich-vu), Tác giả (Author), Ngày tháng (Date)...
 * 
 * @package My_Theme
 */

get_header();

$theme_uri = get_template_directory_uri();
?>

<section class="archive-section section">
    <div class="container">
        <div class="archive-wrapper">

            <!-- Cột chính: Nội dung bài viết / dịch vụ -->
            <div class="archive-content-col">
                <div class="archive-posts-container">

                    <!-- 1. Tiêu đề và mô tả chuyên mục / kho lưu trữ -->
                    <header class="archive-header">
                        <?php
                        the_archive_title( '<h1 class="archive-title"><span class="textGradient">', '</span></h1>' );
                        the_archive_description( '<div class="archive-description">', '</div>' );
                        ?>
                    </header>

                    <!-- 2. Vòng lặp hiển thị danh sách -->
                    <?php if ( have_posts() ) : ?>

                        <?php if ( is_post_type_archive( 'dich-vu' ) || is_tax( 'danh-muc-dich-vu' ) ) : ?>

                            <!-- Dành riêng cho Post Type Dịch Vụ & Taxonomy Danh Mục Dịch Vụ -->
                            <div class="archive-services-grid">
                                <?php
                                while ( have_posts() ) : the_post();
                                    get_template_part( 'template-parts/loop/card', 'dich-vu' );
                                endwhile;
                                ?>
                            </div>

                        <?php else : ?>

                            <!-- Lưới bài viết chung (Trang 1: 21 bài đầu có ảnh, các bài tiếp theo và trang 2+ dùng card-no-image) -->
                            <div class="archive-posts-grid">
                                <?php
                                $counter = 0;
                                while ( have_posts() ) : the_post();
                                    $counter++;
                                    if ( is_paged() ) {
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

                        <?php endif; ?>

                        <!-- 3. Phân trang chuẩn của WordPress -->
                        <div class="pagination-wrap">
                            <?php
                            the_posts_pagination( array(
                                'mid_size'           => 1, // Đổi từ 2 thành 1 để rút ngắn 2 bên
    'end_size'           => 0,
                                'prev_text'          => '<span class="nav-prev" aria-label="' . esc_attr__( 'Trang trước', 'my-theme' ) . '"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="15 18 9 12 15 6"></polyline></svg></span>',
                                'next_text'          => '<span class="nav-next" aria-label="' . esc_attr__( 'Trang sau', 'my-theme' ) . '"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="9 18 15 12 9 6"></polyline></svg></span>',
                                'screen_reader_text' => __( 'Điều hướng bài viết', 'my-theme' ),
                            ) );
                            ?>
                        </div>

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
