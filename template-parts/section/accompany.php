<?php
/**
 * Template Part: Accompany Section
 *
 * Hiển thị khối đồng hành thương hiệu (Accompany / Partners marquee).
 *
 * @package My_Theme
 * @param array $args {
 *     @type string $quote_text    Câu trích dẫn (mặc định: 'Không chỉ dịch vụ - Homenest đồng hành trên mọi lĩnh vực phát triển của bạn').
 *     @type string $quote_role    Chức danh (mặc định: 'CO-FOUNDER').
 *     @type array  $partner_lines Mảng 3 dòng đối tác. Nếu không truyền sẽ dùng danh sách mặc định.
 *     @type string $class         Class CSS bổ sung cho thẻ <section> (ví dụ: 'section').
 * }
 */

defined( 'ABSPATH' ) || exit;

$theme_uri  = defined( 'THEME_URI' ) ? THEME_URI : get_template_directory_uri();
$class      = ! empty( $args['class'] ) ? ' ' . esc_attr( $args['class'] ) : '';
$quote_text = ! empty( $args['quote_text'] ) ? $args['quote_text'] : '<span class="textGradient">Không chỉ dịch vụ - Homenest đồng hành</span> trên mọi lĩnh vực phát triển của bạn';
$quote_role = ! empty( $args['quote_role'] ) ? $args['quote_role'] : 'CO-FOUNDER';

if ( ! empty( $args['partner_lines'] ) && is_array( $args['partner_lines'] ) ) {
    $partner_lines = $args['partner_lines'];
} else {
    $partners_line1 = array(
        array( 'img' => '/assets/images/thuong-hieu/autolink.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/bearberry.webp', 'w' => 1 ),
        array( 'img' => '/assets/images/thuong-hieu/camillia-pink.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/daisy.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/dava-aesthetic.webp', 'w' => 1 ),
        array( 'img' => '/assets/images/thuong-hieu/evora.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/golfchamp.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/green-nutri.webp', 'w' => 1 ),
        array( 'img' => '/assets/images/thuong-hieu/hoang-nhan.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/kien-cat.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/laixeho.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/mademoiselle-foly.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/mida-nails.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/mont-pine-realty.webp', 'w' => 1 ),
        array( 'img' => '/assets/images/thuong-hieu/niziko-group.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/peace.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/simtu.webp', 'w' => 1 ),
        array( 'img' => '/assets/images/thuong-hieu/song-quan-land.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/the-gioi-mau-cnc.webp', 'w' => 1 ),
        array( 'img' => '/assets/images/thuong-hieu/the-song.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/tri-duc.webp', 'w' => 1 ),
        array( 'img' => '/assets/images/thuong-hieu/yen-tam.webp', 'w' => 1 ),
    );

    $partners_line2 = array(
        array( 'img' => '/assets/images/thuong-hieu/bao4road.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/camlamonline.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/cqcp.webp', 'w' => 1 ),
        array( 'img' => '/assets/images/thuong-hieu/dang-thong.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/fb-car-care.webp', 'w' => 1 ),
        array( 'img' => '/assets/images/thuong-hieu/gia-khang-home.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/grace-beaut-lab.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/ichigo-ichie-shoemaker.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/la-cerise-dalat-villas.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/lushnest.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/maico.webp', 'w' => 1 ),
        array( 'img' => '/assets/images/thuong-hieu/mekong-technology.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/moc-tram-luxury.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/nst-tech.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/nuage-sauvage.webp', 'w' => 1 ),
        array( 'img' => '/assets/images/thuong-hieu/sicar-service.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/son-and-co.webp', 'w' => 1 ),
        array( 'img' => '/assets/images/thuong-hieu/spack.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/the-oak.webp', 'w' => 1 ),
        array( 'img' => '/assets/images/thuong-hieu/vp.webp', 'w' => 1 ),
        array( 'img' => '/assets/images/thuong-hieu/zappa.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/dava-aesthetic.webp', 'w' => 1 ),
    );

    $partners_line3 = array(
        array( 'img' => '/assets/images/thuong-hieu/alltech-store.webp', 'w' => 1 ),
        array( 'img' => '/assets/images/thuong-hieu/bau-sen-duong.webp', 'w' => 1 ),
        array( 'img' => '/assets/images/thuong-hieu/bs-sac.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/dai-phat.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/dalat-marketing-innovation.webp', 'w' => 1 ),
        array( 'img' => '/assets/images/thuong-hieu/dragon-pickleball.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/gleam-haven.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/global-travel.webp', 'w' => 1 ),
        array( 'img' => '/assets/images/thuong-hieu/hangkenh.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/khanh-phong-plastics.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/lai-thieu.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/luxcasa.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/mcs.webp', 'w' => 1 ),
        array( 'img' => '/assets/images/thuong-hieu/mida-gmbh.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/nam-anh.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/onehouse.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/ptp-phuc-thanh-phat.webp', 'w' => 1 ),
        array( 'img' => '/assets/images/thuong-hieu/smokeshop.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/sugarfree.webp', 'w' => 2 ),
        array( 'img' => '/assets/images/thuong-hieu/thanh-tung.webp', 'w' => 1 ),
        array( 'img' => '/assets/images/thuong-hieu/the-sun-cosmetics.webp', 'w' => 1 ),
        array( 'img' => '/assets/images/thuong-hieu/xay-dung-hai-minh.webp', 'w' => 1 ),
        array( 'img' => '/assets/images/thuong-hieu/green-nutri.webp', 'w' => 1 ),
    );

    $partner_lines = array( $partners_line1, $partners_line2, $partners_line3 );
}
?>
<section class="accompanySection<?php echo $class; ?>">
    <div class="accompanyDecor">
        <img
            class="accompanyDecorImage"
            src="<?php echo esc_url( $theme_uri . '/assets/images/dau-trau.webp' ); ?>"
            alt=""
            width="1484"
            height="2560"
            aria-hidden="true"
            loading="lazy"
        >
    </div>

    <div class="accompanyQuote">
        <blockquote class="accompanyQuoteText">
            <i>
                <?php echo wp_kses_post( $quote_text ); ?>
            </i>
        </blockquote>
        <div class="accompanyQuoteAuthor">
            <img
                class="accompanyQuoteSignature"
                src="<?php echo esc_url( $theme_uri . '/assets/images/chu_ky.svg' ); ?>"
                alt="Chữ ký Co-Founder HomeNest.media"
                width="288"
                height="122"
                loading="lazy"
            >
            <span class="accompanyQuoteRole"><?php echo esc_html( $quote_role ); ?></span>
        </div>
    </div>

    <div class="accompanyMarquee">
        <div class="accompanyMarqueeWrapper">
            <?php for ( $copy = 0; $copy < 2; $copy++ ) : ?>
                <div class="accompanyMarqueeGroup" <?php echo $copy > 0 ? 'aria-hidden="true"' : ''; ?>>
                    <?php foreach ( $partner_lines as $line ) : ?>
                        <div class="accompanyMarqueeLine">
                            <?php foreach ( $line as $item ) : ?>
                                <div class="accompanyMarqueeItem <?php echo $item['w'] === 2 ? 'accompanyMarqueeItemWide' : 'accompanyMarqueeItemSquare'; ?>">
                                    <img
                                        class="accompanyMarqueeImage"
                                        src="<?php echo esc_url( $theme_uri . $item['img'] ); ?>"
                                        alt="Đối tác"
                                        loading="lazy"
                                    >
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>
