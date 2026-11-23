<?php
/**
 * Single: Chi tiết dự án (post_type = du-an)
 *
 * 1. Section 1: Ảnh đại diện + tên dự án + nội dung chi tiết
 * 2. Section 2: Điều hướng dự án (Prev / Next / về danh sách)
 *
 * @package My_Theme
 */

get_header();

while ( have_posts() ) : the_post();

    // Lấy tên lĩnh vực đầu tiên của 1 dự án để hiển thị trên thẻ điều hướng
    $get_field_label = function ( $post_id ) {
        $terms = get_the_terms( $post_id, 'linh-vuc' );
        return ( $terms && ! is_wp_error( $terms ) ) ? $terms[0]->name : '';
    };

    $prev_post = get_previous_post();
    $next_post = get_next_post();
    ?>

<!-- 1. SECTION: NỘI DUNG DỰ ÁN -->
<section class="duan-single-section section">
    <div class="container">
        <div class="wrapper duan-single-wrapper">
            <div class="duan-single-thumb">
                <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail( 'large', array( 'alt' => get_the_title() ) ); ?>
                <?php endif; ?>
            </div>

            <article id="post-<?php the_ID(); ?>" <?php post_class( 'duan-single-content' ); ?>>
                <h1 class="duan-single-title textGradient"><?php the_title(); ?></h1>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- 2. SECTION: ĐIỀU HƯỚNG DỰ ÁN -->
<section class="duan-nav-section section">
    <div class="container">
        <div class="wrapper duan-nav">

            <!-- Dự án trước -->
            <div class="duan-nav-item duan-nav-prev">
                <?php if ( $prev_post ) : ?>
                    <a class="duan-nav-label" href="<?php echo esc_url( get_permalink( $prev_post ) ); ?>">
                        <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="15 18 9 12 15 6"></polyline></svg>
                        Prev project
                    </a>
                    <a class="duan-nav-card" href="<?php echo esc_url( get_permalink( $prev_post ) ); ?>">
                        <span class="duan-nav-thumb">
                            <?php echo get_the_post_thumbnail( $prev_post, 'medium', array( 'alt' => get_the_title( $prev_post ) ) ); ?>
                        </span>
                        <span class="duan-nav-info">
                            <span class="duan-nav-field"><?php echo esc_html( $get_field_label( $prev_post->ID ) ); ?></span>
                            <span class="duan-nav-name"><?php echo esc_html( get_the_title( $prev_post ) ); ?></span>
                        </span>
                    </a>
                <?php endif; ?>
            </div>

            <!-- Về danh sách dự án -->
            <a class="duan-nav-all" href="<?php echo esc_url( get_post_type_archive_link( 'du-an' ) ); ?>" aria-label="Tất cả dự án">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="3" width="7" height="7" rx="2"></rect><rect x="14" y="3" width="7" height="7" rx="2"></rect><rect x="3" y="14" width="7" height="7" rx="2"></rect><rect x="14" y="14" width="7" height="7" rx="2"></rect></svg>
            </a>

            <!-- Dự án tiếp theo -->
            <div class="duan-nav-item duan-nav-next">
                <?php if ( $next_post ) : ?>
                    <a class="duan-nav-label" href="<?php echo esc_url( get_permalink( $next_post ) ); ?>">
                        Next project
                        <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </a>
                    <a class="duan-nav-card" href="<?php echo esc_url( get_permalink( $next_post ) ); ?>">
                        <span class="duan-nav-info">
                            <span class="duan-nav-field"><?php echo esc_html( $get_field_label( $next_post->ID ) ); ?></span>
                            <span class="duan-nav-name"><?php echo esc_html( get_the_title( $next_post ) ); ?></span>
                        </span>
                        <span class="duan-nav-thumb">
                            <?php echo get_the_post_thumbnail( $next_post, 'medium', array( 'alt' => get_the_title( $next_post ) ) ); ?>
                        </span>
                    </a>
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>

<?php
endwhile;

get_footer();
