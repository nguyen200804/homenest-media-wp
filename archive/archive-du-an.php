<?php
/**
 * Archive: Dự án (post_type = du-an)
 *
 * Lọc: ?linh_vuc=slug & ?chuyen_nganh=slug & ?tu_khoa=...
 * Số lượng: 12 dự án/trang (xem pre_get_posts trong functions.php)
 *
 * @package My_Theme
 */

get_header();

$current_lv = isset( $_GET['linh_vuc'] ) ? sanitize_title( wp_unslash( $_GET['linh_vuc'] ) ) : '';
$current_cn = isset( $_GET['chuyen_nganh'] ) ? sanitize_title( wp_unslash( $_GET['chuyen_nganh'] ) ) : '';
$keyword    = isset( $_GET['tu_khoa'] ) ? sanitize_text_field( wp_unslash( $_GET['tu_khoa'] ) ) : '';

// Tham số lọc dùng cho phân trang (chỉ lấy từ URL)
$page_args = array_filter( array(
    'linh_vuc'     => $current_lv,
    'chuyen_nganh' => $current_cn,
    'tu_khoa'      => $keyword,
) );

// Trang taxonomy: dropdown đổi sang taxonomy còn lại (chuyen-nganh <-> linh-vuc), lọc ngay trong term hiện tại
$is_du_an_tax = is_tax( array( 'chuyen-nganh', 'linh-vuc' ) );
$dd_param     = 'chuyen_nganh';
$dd_label     = 'Chuyên ngành';
$dd_all       = 'Tất cả các ngành';
$dd_taxonomy  = 'chuyen-nganh';
$form_action  = get_post_type_archive_link( 'du-an' );
if ( $is_du_an_tax ) {
    $queried     = get_queried_object();
    $form_action = get_term_link( $queried );
    if ( 'chuyen-nganh' === $queried->taxonomy ) {
        $dd_param    = 'linh_vuc';
        $dd_label    = 'Lĩnh vực';
        $dd_all      = 'Tất cả lĩnh vực';
        $dd_taxonomy = 'linh-vuc';
    }
}
$dd_current = ( 'linh_vuc' === $dd_param ) ? $current_lv : $current_cn;
$dd_terms   = get_terms( array( 'taxonomy' => $dd_taxonomy, 'hide_empty' => false ) );

$archive_url  = get_post_type_archive_link( 'du-an' );
$chuyen_nganh = get_terms( array( 'taxonomy' => 'chuyen-nganh', 'hide_empty' => false ) );
$linh_vuc     = get_terms( array( 'taxonomy' => 'linh-vuc', 'hide_empty' => false ) );

// Giữ lại các tham số lọc khác khi bấm tab lĩnh vực
$tab_url = function ( $lv_slug ) use ( $archive_url, $current_cn, $keyword ) {
    $args = array_filter( array(
        'linh_vuc'     => $lv_slug,
        'chuyen_nganh' => $current_cn,
        'tu_khoa'      => $keyword,
    ) );
    return $args ? add_query_arg( $args, $archive_url ) : $archive_url;
};
?>

<section class="duan-hero section">
    <div class="container">
        <div class="wrapper duan-hero-wrapper">
            <div class="duan-hero-content">
                <h1 class="duan-hero-title">
                    HomeNest – <span class="textGradient">Kiến tạo giải pháp số, nâng tầm thương hiệu</span> trực tuyến.
                </h1>
                <p class="duan-hero-desc">
                    HomeNest cung cấp giải pháp số toàn diện, giúp doanh nghiệp tối ưu website, SEO, quảng cáo và thương hiệu trực tuyến. Với chiến lược hiệu quả và công nghệ hiện đại, HomeNest đồng hành cùng doanh nghiệp chinh phục thị trường số, gia tăng doanh thu bền vững.
                </p>

                <div class="duan-stats">
                    <div class="duan-stat">
                        <p class="duan-stat-number">+300%</p>
                        <p class="duan-stat-label">Mức độ tăng trưởng website</p>
                    </div>
                    <div class="duan-stat">
                        <p class="duan-stat-number">+2.000%</p>
                        <p class="duan-stat-label">Lượng traffic tăng trưởng</p>
                    </div>
                    <div class="duan-stat">
                        <p class="duan-stat-number">6.000+</p>
                        <p class="duan-stat-label">Contact đổ về trong tháng</p>
                    </div>
                </div>

                <a class="duan-hero-btn" href="<?php echo esc_url( home_url( '/lien-he/' ) ); ?>">Tư vấn ngay</a>
            </div>

            <div class="duan-hero-visual">
                <div id="duan-lottie" data-src="<?php echo esc_url( THEME_URI . '/assets/images/Animation-bounce.json' ); ?>" aria-hidden="true"></div>
            </div>
        </div>
    </div>
</section>

<section class="duan-list-section section">
    <div class="container">
        <div class="wrapper">

            <!-- Dropdown ngành, tìm kiếm dự án và nút submit -->
            <form class="duan-filter" method="get" action="<?php echo esc_url( $form_action ); ?>">
                <?php if ( ! $is_du_an_tax && $current_lv ) : ?>
                    <input type="hidden" name="linh_vuc" value="<?php echo esc_attr( $current_lv ); ?>">
                <?php endif; ?>

                <div class="duan-filter-select">
                    <select name="<?php echo esc_attr( $dd_param ); ?>" aria-label="<?php echo esc_attr( $dd_label ); ?>">
                        <option value=""><?php echo esc_html( $dd_all ); ?></option>
                        <?php if ( ! is_wp_error( $dd_terms ) ) : foreach ( $dd_terms as $term ) : ?>
                            <option value="<?php echo esc_attr( $term->slug ); ?>" <?php selected( $dd_current, $term->slug ); ?>>
                                <?php echo esc_html( $term->name ); ?>
                            </option>
                        <?php endforeach; endif; ?>
                    </select>
                </div>

                <input class="duan-filter-search" type="text" name="tu_khoa" value="<?php echo esc_attr( $keyword ); ?>" placeholder="Tìm kiếm dự án bạn quan tâm">

                <button class="duan-filter-submit" type="submit">Tìm kiếm</button>
            </form>

            <!-- Danh sách lĩnh vực (ẩn ở trang taxonomy) -->
            <?php if ( ! $is_du_an_tax ) : ?>
            <ul class="duan-tabs">
                <li>
                    <a href="<?php echo esc_url( $tab_url( '' ) ); ?>" class="duan-tab<?php echo '' === $current_lv ? ' is-active' : ''; ?>">Tất cả</a>
                </li>
                <?php if ( ! is_wp_error( $linh_vuc ) ) : foreach ( $linh_vuc as $term ) : ?>
                    <li>
                        <a href="<?php echo esc_url( $tab_url( $term->slug ) ); ?>" class="duan-tab<?php echo $current_lv === $term->slug ? ' is-active' : ''; ?>">
                            <?php echo esc_html( $term->name ); ?>
                        </a>
                    </li>
                <?php endforeach; endif; ?>
            </ul>
            <?php endif; ?>

            <!-- Danh sách dự án, 12 dự án / trang -->
            <?php if ( have_posts() ) : ?>
                <div class="duan-grid">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <article class="duan-card">
                            <a class="duan-card-thumb" href="<?php the_permalink(); ?>" aria-label="<?php echo esc_attr( get_the_title() ); ?>">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail( 'medium_large', array( 'loading' => 'lazy', 'alt' => get_the_title() ) ); ?>
                                <?php else : ?>
                                    <span class="duan-card-placeholder"></span>
                                <?php endif; ?>
                            </a>
                            <h3 class="duan-card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <a class="duan-card-link" href="<?php the_permalink(); ?>">
                                Xem chi tiết
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </a>
                        </article>
                    <?php endwhile; ?>
                </div>

                <div class="pagination-wrap">
                    <?php
                    the_posts_pagination( array(
                        'mid_size'           => 1,
                        'end_size'           => 0,
                        'prev_text'          => '<span class="nav-prev" aria-label="Trang trước"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="15 18 9 12 15 6"></polyline></svg></span>',
                        'next_text'          => '<span class="nav-next" aria-label="Trang sau"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="9 18 15 12 9 6"></polyline></svg></span>',
                        'screen_reader_text' => 'Điều hướng dự án',
                        'add_args'           => $page_args,
                    ) );
                    ?>
                </div>
            <?php else : ?>
                <?php get_template_part( 'template-parts/loop/none' ); ?>
            <?php endif; ?>

        </div>
    </div>
</section>

<?php
get_footer();
