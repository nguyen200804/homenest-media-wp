<?php
/**
 * The sidebar containing the main widget area
 *
 * @package My_Theme
 */

defined( 'ABSPATH' ) || exit;
?>

<!-- Cột phụ: Form tư vấn & Banner quảng cáo -->
<aside class="archive-sidebar-col" id="secondary" role="complementary">
    <div class="archive-sidebar-inner">

        <!-- Form Đăng ký nhận ưu đãi -->
        <div class="archive-widget widget-promo-form" id="sidebar-consult-form">
            <h3 class="promo-form-title">NHẬN ƯU ĐÃI NGAY</h3>

            <form class="promo-form" action="#" method="POST" onsubmit="event.preventDefault(); alert('Cảm ơn bạn! HomeNest Media sẽ liên hệ sớm nhất.');">
                <div class="promo-form-group">
                    <input type="text" id="consult-name" name="name" class="promo-form-input" placeholder="Tên của bạn" required>
                </div>

                <div class="promo-form-group">
                    <input type="tel" id="consult-phone" name="phone" class="promo-form-input" placeholder="Số điện thoại" required>
                </div>

                <div class="promo-form-group">
                    <div class="promo-select-wrapper">
                        <select id="consult-service" name="service" class="promo-form-select">
                            <option value="seo-tong-the">SEO Tổng Thể</option>
                            <option value="seo-tu-khoa">SEO Từ Khóa</option>
                            <option value="thiet-ke-logo">Thiết Kế Logo</option>
                            <option value="nhan-dien-thuong-hieu">Nhận Diện Thương Hiệu</option>
                            <option value="an-pham-marketing">Ấn Phẩm Marketing</option>
                            <option value="khac">Dịch vụ khác</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn-submit-promo">
                    Nhận ưu đãi
                </button>
            </form>
        </div>

        <!-- Banner quảng cáo -->
        <div class="archive-widget archive-banner-widget">
            <a href="https://zalo.me/0986833838" target="_blank" rel="noopener noreferrer" class="banner-image-link" title="<?php esc_attr_e( 'Ưu đãi dịch vụ SEO - HomeNest Media', 'my-theme' ); ?>">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/banner-quang-cao.webp' ); ?>" alt="<?php esc_attr_e( 'Ưu đãi dịch vụ SEO - HomeNest Media', 'my-theme' ); ?>" class="banner-img" loading="lazy">
            </a>
        </div>

    </div>
</aside>
