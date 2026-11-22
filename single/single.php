<?php
/**
 * Single Post Template (Chi tiết bài viết chuẩn)
 * 
 * Xây dựng dựa trên sườn giao diện từ index.html:
 * 1. Section 1: Nội dung bài viết chính, meta tác giả/ngày giờ/term, post navigation + Sidebar
 * 2. Section 2: Khối bình luận (Comment section)
 * 3. Section 3: Bài viết liên quan (3 bài đầu card-image, bài tiếp theo card-no-image + nút Xem thêm)
 * 
 * @package My_Theme
 */

get_header();

while ( have_posts() ) : the_post();
?>

<!-- 1. SECTION: NỘI DUNG BÀI VIẾT & SIDEBAR -->
<section class="single-article-section">
    <div class="container">
        <div class="wrapper single-wrapper">

            <!-- Cột chính: Nội dung bài viết -->
            <div class="single-main-col">
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'single-article-content' ); ?>>

                    <!-- Tiêu đề bài viết -->
                    <h1 class="entry-title textGradient">
                        <?php the_title(); ?>
                    </h1>

                    <!-- Nội dung bài viết -->
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>

                    <!-- Meta: Tác giả, Ngày giờ đăng, Chuyên mục -->
                    <div class="single-meta-box">
                        <p class="single-meta-author">
                            <span class="meta-label">Tác giả:</span>
                            <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="meta-author-link">
                                <?php echo esc_html( get_the_author() ); ?>
                            </a>
                        </p>
                        <p class="single-meta-details">
                            <span class="meta-date"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M22 2.25h-3.25V.75a.75.75 0 0 0-1.5-.001V2.25h-4.5V.75a.75.75 0 0 0-1.5-.001V2.25h-4.5V.75a.75.75 0 0 0-1.5-.001V2.25H2a2 2 0 0 0-2 1.999v17.75a2 2 0 0 0 2 2h20a2 2 0 0 0 2-2V4.249a2 2 0 0 0-2-1.999M22.5 22a.5.5 0 0 1-.499.5H2a.5.5 0 0 1-.5-.5V4.25a.5.5 0 0 1 .5-.499h3.25v1.5a.75.75 0 0 0 1.5.001V3.751h4.5v1.5a.75.75 0 0 0 1.5.001V3.751h4.5v1.5a.75.75 0 0 0 1.5.001V3.751H22a.5.5 0 0 1 .499.499z"/><path d="M5.25 9h3v2.25h-3zm0 3.75h3V15h-3zm0 3.75h3v2.25h-3zm5.25 0h3v2.25h-3zm0-3.75h3V15h-3zm0-3.75h3v2.25h-3zm5.25 7.5h3v2.25h-3zm0-3.75h3V15h-3zm0-3.75h3v2.25h-3z"/></svg><?php echo get_the_date( 'd/m/Y' ); ?></span>
                            <span class="meta-time"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 83.001 83.001" xml:space="preserve"><path d="M41.5 0C18.617 0 .001 18.617.001 41.5c0 22.884 18.616 41.501 41.499 41.501S83 64.384 83 41.5 64.382 0 41.5 0m0 77.001C21.926 77.001 6 61.075 6 41.5S21.925 6 41.5 6 77 21.925 77 41.5 61.075 77.001 41.5 77.001"/><path d="M53.508 45.32h-.046l-8.962.134V22a3 3 0 1 0-6 0v26.5l.002.018-.002.027c.002.122.025.237.041.354.01.073.011.148.025.22.027.129.072.249.115.37.022.063.036.129.062.189.052.123.122.235.189.35.031.051.054.107.087.157.076.111.167.21.257.311.038.042.069.09.109.131.097.096.206.177.315.26.044.033.083.073.128.104.118.08.247.143.376.205.045.021.085.051.131.07.15.063.31.107.472.146.03.007.058.021.089.027q.292.06.601.061h.046l12.008-.18a3 3 0 0 0 2.955-3.045 3 3 0 0 0-2.998-2.955"/></svg><?php echo get_the_time( 'H:i' ); ?></span>
                            <?php
                            $categories = get_the_category();
                            if ( ! empty( $categories ) ) :
                                $cat_links = array();
                                foreach ( $categories as $cat ) {
                                    $cat_links[] = '<a href="' . esc_url( get_category_link( $cat->term_id ) ) . '">' . esc_html( $cat->name ) . '</a>';
                                }
                            ?>
                                <span class="meta-term"><svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h16v16H0z"/><path d="M14.497 0H9.988c-.826 0-1.981.478-2.565 1.063L.438 8.047a1.506 1.506 0 0 0 0 2.125l5.389 5.389a1.506 1.506 0 0 0 2.125 0l6.984-6.984C15.522 7.993 16 6.838 16 6.012V1.503C16 .676 15.324 0 14.497 0M12.5 5a1.5 1.5 0 1 1 .001-3.001A1.5 1.5 0 0 1 12.5 5"/></svg><?php echo implode( ', ', $cat_links ); ?></span>
                            <?php endif; ?>
                        </p>
                    </div>

                    <!-- Điều hướng bài viết trước / sau (Custom Post Navigation) -->
                    <?php
                    $prev_post = get_previous_post();
                    $next_post = get_next_post();
                    ?>
                    <?php if ( $prev_post || $next_post ) : ?>
                        <div class="custom-post-navigation">
                            <!-- Bài trước -->
                            <?php if ( ! empty( $prev_post ) ) : ?>
                                <a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>" class="nav-card nav-prev">
                                    <div class="nav-arrow">
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="15 18 9 12 15 6"></polyline>
                                        </svg>
                                    </div>
                                    <div class="nav-info">
                                        <span class="nav-direction">Bài trước</span>
                                        <p class="nav-title"><?php echo esc_html( get_the_title( $prev_post->ID ) ); ?></p>
                                    </div>
                                </a>
                            <?php else : ?>
                                <div class="nav-empty"></div>
                            <?php endif; ?>

                            <!-- Bài tiếp theo -->
                            <?php if ( ! empty( $next_post ) ) : ?>
                                <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" class="nav-card nav-next">
                                    <div class="nav-info">
                                        <span class="nav-direction">Bài tiếp theo</span>
                                        <p class="nav-title"><?php echo esc_html( get_the_title( $next_post->ID ) ); ?></p>
                                    </div>
                                    <div class="nav-arrow">
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </div>
                                </a>
                            <?php else : ?>
                                <div class="nav-empty"></div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                </article>
            </div>

            <!-- Cột phụ: Sidebar -->
            <?php get_sidebar(); ?>

        </div>
    </div>
</section>

<!-- 2. SECTION: BÌNH LUẬN (COMMENT) -->
<section class="single-comments-section">
    <div class="container">
        <div class="wrapper single-comments-wrapper">
            <?php
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
            ?>
        </div>
    </div>
</section>

<!-- 3. SECTION: BÀI VIẾT LIÊN QUAN -->
<?php
$current_cats = wp_get_post_categories( get_the_ID() );

if ( ! empty( $current_cats ) ) :
    $related_query = new WP_Query( array(
        'category__in'        => $current_cats,
        'post__not_in'        => array( get_the_ID() ),
        'posts_per_page'      => 30, // Query tối đa 30 bài sẵn sàng hiển thị khi bấm Xem thêm
        'ignore_sticky_posts' => 1,
        'post_status'         => 'publish',
    ) );

    if ( $related_query->have_posts() ) :
        $total_related = $related_query->post_count;
?>
<section class="single-related-section">
    <div class="container">
        <div class="wrapper single-related-wrapper">
            <h2 class="related-title"><span class="textGradient ">Bài viết liên quan</span></h2>

            <div class="related-posts-grid" id="related-posts-grid">
                <?php
                $related_counter = 0;
                while ( $related_query->have_posts() ) : $related_query->the_post();
                    $related_counter++;
                    // Ẩn từ bài thứ 11 trở đi, sẽ hiện khi bấm "Xem thêm"
                    $hidden_class = ( $related_counter > 10 ) ? ' related-item-hidden' : '';
                ?>
                    <div class="related-post-col<?php echo esc_attr( $hidden_class ); ?>" data-index="<?php echo esc_attr( $related_counter ); ?>">
                        <?php
                        // 3 bài viết đầu gọi template-parts/loop/card-image.php
                        // những bài viết còn lại gọi template-parts/loop/card-no-image.php
                        if ( $related_counter <= 3 ) {
                            get_template_part( 'template-parts/loop/card', 'image' );
                        } else {
                            get_template_part( 'template-parts/loop/card', 'no-image' );
                        }
                        ?>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>

            <!-- Nút Xem thêm (nếu có trên 10 bài viết liên quan) -->
            <?php if ( $total_related > 10 ) : ?>
                <div class="related-load-more-wrap">
                    <button type="button" class="btn-load-more-related" id="btn-load-more-related">
                        <span>Xem thêm</span>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </button>
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>
<?php
    endif;
endif;
?>

<?php
endwhile;

get_footer();
