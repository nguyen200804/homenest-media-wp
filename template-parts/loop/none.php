<?php
/**
 * Loop Template: No Posts Found (Khi không có bài viết nào)
 * 
 * @package My_Theme
 */
?>
<section class="no-results not-found">
    <div class="no-results-content">
        <div class="no-results-icon">
            <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                <line x1="8" y1="11" x2="14" y2="11"></line>
            </svg>
        </div>

        <h2 class="no-results-title"><?php esc_html_e( 'Chưa có nội dung', 'my-theme' ); ?></h2>
        <p class="no-results-desc">
            <?php esc_html_e( 'Hiện tại chưa có bài viết hoặc dịch vụ nào trong mục này. Vui lòng quay lại sau hoặc tìm kiếm nội dung khác.', 'my-theme' ); ?>
        </p>

        <div class="no-results-search">
            <?php get_search_form(); ?>
        </div>

        <div class="no-results-action">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-return-home">
                &larr; <?php esc_html_e( 'Trở về trang chủ', 'my-theme' ); ?>
            </a>
        </div>
    </div>
</section>
