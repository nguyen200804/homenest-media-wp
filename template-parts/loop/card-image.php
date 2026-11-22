<?php
/**
 * Loop Card Template (Thẻ bài viết có ảnh - Card Image)
 * 
 * @package My_Theme
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'archive-card card-image' ); ?>>
    <div class="card-item-image">
        <div class="card-head">
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="card-thumbnail">
                    <a href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
                        <?php the_post_thumbnail( 'blog-banner', array( 'loading' => 'lazy', 'alt' => get_the_title() ) ); ?>
                    </a>
                </div>
            <?php endif; ?>

            <div class="card-meta">
                <span class="card-date"><?php echo get_the_date(); ?></span> / 
                <span class="card-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span>
            </div>
        </div>

        <div class="card-body">
            <h3 class="card-title">
                <a href="<?php the_permalink(); ?>">
                    <span class="textGradient">
                        <?php the_title(); ?>
                    </span>
                </a>
            </h3>

            <div class="card-excerpt">
                <?php the_excerpt(); ?>
            </div>

            <?php
            $categories = get_the_category();
            if ( ! empty( $categories ) ) :
                // Tìm danh mục có cấp bậc sâu nhất (danh mục con)
                $target_cat = $categories[0];
                foreach ( $categories as $cat ) {
                    if ( $cat->parent > 0 ) {
                        $target_cat = $cat;
                        break;
                    }
                }

                // Lấy danh sách danh mục cha theo thứ tự từ gốc đến ngọn
                $ancestors = array_reverse( get_ancestors( $target_cat->term_id, 'category' ) );
                $breadcrumb_cats = array();

                foreach ( $ancestors as $ancestor_id ) {
                    $ancestor = get_term( $ancestor_id, 'category' );
                    if ( $ancestor && ! is_wp_error( $ancestor ) ) {
                        $breadcrumb_cats[] = $ancestor;
                    }
                }
                $breadcrumb_cats[] = $target_cat;
            ?>
                <span class="card-category card-category-breadcrumb">
                    <?php foreach ( $breadcrumb_cats as $index => $cat_item ) : ?>
                        <?php if ( $index > 0 ) : ?>
                            <span class="card-category-sep" aria-hidden="true">/</span>
                        <?php endif; ?>
                        <a href="<?php echo esc_url( get_category_link( $cat_item->term_id ) ); ?>" class="card-category-link">
                            <?php echo esc_html( $cat_item->name ); ?>
                        </a>
                    <?php endforeach; ?>
                </span>
            <?php endif; ?>
        </div>
    </div>
</article>
