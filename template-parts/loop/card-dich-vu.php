<?php
/**
 * Loop Card Template: Dịch Vụ
 * 
 * @package My_Theme
 */

$service_terms = get_the_terms( get_the_ID(), 'danh-muc-dich-vu' );
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'archive-card card-dich-vu' ); ?>>
    <div class="card-thumbnail">
        <a href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'blog-banner', array( 'loading' => 'lazy', 'alt' => get_the_title() ) ); ?>
            <?php else : ?>
                <div class="card-placeholder-thumb">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                        <polyline points="2 17 12 22 22 17"></polyline>
                        <polyline points="2 12 12 17 22 12"></polyline>
                    </svg>
                </div>
            <?php endif; ?>
        </a>

        <?php if ( ! empty( $service_terms ) && ! is_wp_error( $service_terms ) ) : ?>
            <span class="card-badge">
                <a href="<?php echo esc_url( get_term_link( $service_terms[0] ) ); ?>">
                    <?php echo esc_html( $service_terms[0]->name ); ?>
                </a>
            </span>
        <?php endif; ?>
    </div>

    <div class="card-body">
        <header class="card-header">
            <h2 class="card-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
        </header>

        <div class="card-excerpt">
            <?php the_excerpt(); ?>
        </div>

        <footer class="card-footer">
            <a href="<?php the_permalink(); ?>" class="card-btn-detail">
                <span>Tìm hiểu thêm</span>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </a>
        </footer>
    </div>
</article>
