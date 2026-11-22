<?php
/**
 * Loop Card Template: Không ảnh (Card No Image)
 * 
 * @package My_Theme
 */

$categories = get_the_category();
$breadcrumb_cats = array();

if ( ! empty( $categories ) ) {
    $target_cat = $categories[0];
    foreach ( $categories as $cat ) {
        if ( $cat->parent > 0 ) {
            $target_cat = $cat;
            break;
        }
    }

    $ancestors = array_reverse( get_ancestors( $target_cat->term_id, 'category' ) );
    foreach ( $ancestors as $ancestor_id ) {
        $ancestor = get_term( $ancestor_id, 'category' );
        if ( $ancestor && ! is_wp_error( $ancestor ) ) {
            $breadcrumb_cats[] = $ancestor;
        }
    }
    $breadcrumb_cats[] = $target_cat;
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'archive-card card-no-image' ); ?>>
    <div class="card-no-image-wrapper">
        <!-- Ngày đăng -->
        <div class="card-no-image-date">
            <span class="date-day"><span class="textGradient"><?php echo get_the_date( 'd' ); ?></span></span>
            <span class="date-month-year"><span class="textGradient"><?php echo get_the_date( 'M Y' ); ?></span></span>
        </div>

        <div class="card-no-image-content">
            <!-- Tên bài viết -->
            <h3 class="card-title">
                <a href="<?php the_permalink(); ?>">
                    <span class="textGradient"><?php the_title(); ?></span>
                </a>
            </h3>

            <!-- Mô tả ngắn -->
            <div class="card-excerpt">
                <?php the_excerpt(); ?>
            </div>

            <div class="card-no-image-footer">
                <!-- Breadcrumb danh mục -->
                <?php if ( ! empty( $breadcrumb_cats ) ) : ?>
                    <p class="card-category-breadcrumb">
                        <?php foreach ( $breadcrumb_cats as $index => $cat_item ) : ?>
                            <?php if ( $index > 0 ) : ?>
                                <span class="card-category-sep" aria-hidden="true">/</span>
                            <?php endif; ?>
                            <a href="<?php echo esc_url( get_category_link( $cat_item->term_id ) ); ?>" class="card-category-link">
                                <?php echo esc_html( $cat_item->name ); ?>
                            </a>
                        <?php endforeach; ?>
                    </p>
                <?php else : ?>
                    <p class="card-category-breadcrumb"></p>
                <?php endif; ?>

                <!-- Tên tác giả -->
                <p class="card-author">
                    <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
                        <?php echo esc_html( get_the_author() ); ?>
                    </a>
                </p>
            </div>
        </div>
    </div>
</article>
