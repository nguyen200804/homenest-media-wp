<?php
/**
 * Template Name: Trang Liên Hệ
 *
 * Giao diện trang Liên Hệ của HomeNest Media
 *
 * @package My_Theme
 */

get_header();
?>

<!-- Social Gradient Definition (phòng trường hợp dùng trước footer) -->
<svg width="0" height="0" aria-hidden="true" focusable="false" style="position: absolute; width: 0; height: 0; overflow: hidden;">
    <defs>
        <linearGradient id="hn-contact-social-grad" x1="59.833" y1="-23" x2="-25.667" y2="62.5" gradientUnits="userSpaceOnUse">
            <stop stop-color="#041272" />
            <stop offset=".482" stop-color="#166fde" />
            <stop offset="1" stop-color="#e24c4a" />
        </linearGradient>
    </defs>
</svg>

<section class="contact-section section">
    <div class="container">
        <div class="contact-wrapper">

            <!-- Cột trái: Thông tin liên hệ -->
            <div class="contact-info-col">
                <p class="contact-kicker">/ <?php esc_html_e( 'Liên hệ với HomeNest Media', 'my-theme' ); ?> /</p>

                <h1 class="contact-title">
                    <span class="textGradient">HomeNest Media</span> <?php esc_html_e( 'đưa ý tưởng của bạn thành hiện thực', 'my-theme' ); ?>
                </h1>

                <p class="contact-desc">
                    <?php
                    printf(
                        /* translators: 1: brand name, 2: highlighted text */
                        esc_html__( 'Với %1$s, không có giới hạn cho sự sáng tạo và khả năng phát triển. Hãy để chúng tôi giúp bạn thăng hoa trong môi trường kỹ thuật số, và bạn sẽ thấy %2$s mà chúng tôi mang lại. Hãy cùng chúng tôi thổi bùng lên cơ hội và chinh phục thế giới trực tuyến!', 'my-theme' ),
                        '<strong>HomeNest.Media</strong>',
                        '<span class="contact-highlight">sự khác biệt</span>'
                    );
                    ?>
                </p>

                <div class="contact-details-block">
                    <div class="contact-details-grid">
                        <!-- Hotline -->
                        <div class="contact-detail-item">
                            <h3 class="contact-detail-title"><span class="textGradient"><?php esc_html_e( 'Hotline', 'my-theme' ); ?></span></h3>
                            <p class="contact-detail-value">
                                <a href="tel:0898994298">0898 994 298</a>
                            </p>
                        </div>

                        <!-- Địa chỉ -->
                        <div class="contact-detail-item">
                            <h3 class="contact-detail-title"><span class="textGradient"><?php esc_html_e( 'Địa chỉ', 'my-theme' ); ?></span></h3>
                            <p class="contact-detail-value">
                                <?php esc_html_e( '28 Mai Chí Thọ, An Phú, Tp Thủ Đức, Tp Hồ Chí Minh.', 'my-theme' ); ?>
                            </p>
                        </div>

                        <!-- Email -->
                        <div class="contact-detail-item">
                            <h3 class="contact-detail-title"><span class="textGradient"><?php esc_html_e( 'Email', 'my-theme' ); ?></span></h3>
                            <p class="contact-detail-value">
                                <a href="mailto:info@homenest.media">info@homenest.media</a>
                            </p>
                        </div>

                        <!-- Social Network -->
                        <div class="contact-detail-item">
                            <h3 class="contact-detail-title"><span class="textGradient"><?php esc_html_e( 'Social network', 'my-theme' ); ?></span></h3>
                            <div class="contact-social-links">
                                <a href="#" class="contact-social-link" aria-label="Facebook" target="_blank" rel="noopener noreferrer">
                                    <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" width="28" height="28">
                                        <rect width="32" height="32" rx="8" fill="url(#hn-contact-social-grad)" />
                                        <path d="M17.667 17.2h1.904l.762-3.2h-2.666v-1.6c0-.824 0-1.6 1.523-1.6h1.143V8.112A21 21 0 0 0 18.157 8c-2.069 0-3.538 1.326-3.538 3.76V14h-2.286v3.2h2.286V24h3.048z" fill="#fff" />
                                    </svg>
                                </a>
                                <a href="#" class="contact-social-link" aria-label="Instagram" target="_blank" rel="noopener noreferrer">
                                    <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" width="28" height="28">
                                        <rect width="32" height="32" rx="8" fill="url(#hn-contact-social-grad)" />
                                        <path d="M16.604 8a66 66 0 0 1 1.642.017l.146.006c.168.005.333.013.534.022.798.037 1.342.164 1.82.349.495.19.912.448 1.329.864.381.375.676.829.864 1.33.186.477.311 1.022.349 1.82.009.2.017.366.023.534l.004.146c.011.369.016.797.017 1.64l.001.56v.983q.003.82-.017 1.64l-.005.146-.022.534c-.038.799-.165 1.343-.35 1.821-.188.5-.483.954-.864 1.33a3.7 3.7 0 0 1-1.33.864c-.477.185-1.021.311-1.82.349l-.534.022-.145.005c-.37.01-.798.015-1.642.017h-1.54a58 58 0 0 1-1.642-.017l-.146-.004-.534-.023c-.798-.038-1.342-.164-1.82-.35a3.7 3.7 0 0 1-1.329-.864 3.7 3.7 0 0 1-.865-1.329c-.186-.477-.312-1.022-.35-1.82l-.022-.535-.003-.145a59 59 0 0 1-.02-1.641v-1.542a59 59 0 0 1 .017-1.641l.006-.146.022-.534c.038-.798.164-1.342.349-1.82.189-.501.484-.955.867-1.33a3.7 3.7 0 0 1 1.327-.864c.479-.185 1.022-.312 1.821-.349.2-.009.366-.017.534-.022l.146-.005q.82-.02 1.64-.017zm-.77 3.75a3.75 3.75 0 1 0 0 7.5 3.75 3.75 0 0 0 0-7.5m0 1.5a2.249 2.249 0 1 1 0 4.497 2.249 2.249 0 0 1 0-4.497m3.938-2.625a.937.937 0 1 0 0 1.875.937.937 0 0 0 0-1.875" fill="#fff" />
                                    </svg>
                                </a>
                                <a href="#" class="contact-social-link" aria-label="YouTube" target="_blank" rel="noopener noreferrer">
                                    <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" width="28" height="28">
                                        <rect width="32" height="32" rx="8" fill="url(#hn-contact-social-grad)" />
                                        <path d="m14.333 17.857 3.893-2.357-3.893-2.357zm8.67-6.152c.098.37.165.864.21 1.493.053.628.075 1.17.075 1.642l.045.66c0 1.72-.12 2.986-.33 3.795q-.282 1.063-1.297 1.36c-.353.101-.998.172-1.988.22-.975.054-1.867.078-2.692.078L15.833 21c-3.142 0-5.1-.126-5.872-.346-.675-.196-1.11-.652-1.298-1.359-.097-.37-.165-.864-.21-1.493a20 20 0 0 1-.075-1.642l-.045-.66c0-1.72.12-2.986.33-3.795q.284-1.063 1.298-1.36c.352-.101.997-.172 1.987-.22a48 48 0 0 1 2.693-.078L15.833 10c3.143 0 5.1.126 5.873.346.675.196 1.11.652 1.297 1.359" fill="#fff" />
                                    </svg>
                                </a>
                                <a href="#" class="contact-social-link" aria-label="TikTok" target="_blank" rel="noopener noreferrer">
                                    <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" width="28" height="28">
                                        <rect width="32" height="32" rx="8" fill="url(#hn-contact-social-grad)" />
                                        <path d="M19.314 10.35a3.58 3.58 0 0 1-.88-2.35h-2.56v10.333c-.02.56-.255 1.09-.656 1.478a2.14 2.14 0 0 1-1.492.606 2.17 2.17 0 0 1-2.156-2.167c0-1.433 1.376-2.508 2.794-2.067V13.55C11.504 13.167 9 15.4 9 18.25 9 21.025 11.288 23 13.717 23c2.604 0 4.718-2.125 4.718-4.75v-5.242A6.07 6.07 0 0 0 22 14.158v-2.575s-1.559.075-2.686-1.233" fill="#fff" />
                                    </svg>
                                </a>
                                <a href="#" class="contact-social-link" aria-label="LinkedIn" target="_blank" rel="noopener noreferrer">
                                    <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" width="28" height="28">
                                        <rect width="32" height="32" rx="8" fill="url(#hn-contact-social-grad)" />
                                        <path d="M21.333 8A1.666 1.666 0 0 1 23 9.667v11.666A1.666 1.666 0 0 1 21.333 23H9.667A1.667 1.667 0 0 1 8 21.333V9.667A1.667 1.667 0 0 1 9.667 8zm-.416 12.917V16.5a2.717 2.717 0 0 0-2.717-2.717c-.708 0-1.533.434-1.933 1.084v-.925h-2.325v6.975h2.325v-4.109a1.163 1.163 0 1 1 2.325 0v4.109zm-9.684-8.284a1.4 1.4 0 0 0 1.4-1.4 1.405 1.405 0 1 0-1.4 1.4m1.159 8.284v-6.975h-2.309v6.975z" fill="#fff" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cột phải: Form liên hệ -->
            <div class="contact-form-col">
                <div class="contact-card">
                    <h2 class="contact-form-title">
                        <?php esc_html_e( 'Liên hệ với HomeNest Media', 'my-theme' ); ?>
                    </h2>

                    <form class="contact-form" action="#" method="POST" onsubmit="event.preventDefault(); alert('Cảm ơn bạn! HomeNest Media đã nhận được thông tin liên hệ và sẽ phản hồi sớm nhất.');">
                        <div class="contact-form-row contact-form-row-2col">
                            <div class="contact-form-group comment-form-group">
                                <input type="text" name="name" id="contact-name" class="contact-line-input comment-line-input" placeholder="<?php esc_attr_e( 'Tên Liên Hệ *', 'my-theme' ); ?>" required>
                                <span class="placeholder"><?php esc_html_e( 'Tên Liên Hệ *', 'my-theme' ); ?></span>
                            </div>
                            <div class="contact-form-group comment-form-group">
                                <input type="tel" name="phone" id="contact-phone" class="contact-line-input comment-line-input" placeholder="<?php esc_attr_e( 'Số Điện Thoại *', 'my-theme' ); ?>" required>
                                <span class="placeholder"><?php esc_html_e( 'Số Điện Thoại *', 'my-theme' ); ?></span>
                            </div>
                        </div>

                        <div class="contact-form-row">
                            <div class="contact-form-group comment-form-group">
                                <input type="email" name="email" id="contact-email" class="contact-line-input comment-line-input" placeholder="<?php esc_attr_e( 'Địa Chỉ Email *', 'my-theme' ); ?>" required>
                                <span class="placeholder"><?php esc_html_e( 'Địa Chỉ Email *', 'my-theme' ); ?></span>
                            </div>
                        </div>

                        <div class="contact-form-row">
                            <div class="contact-form-group comment-form-group">
                                <input type="text" name="subject" id="contact-subject" class="contact-line-input comment-line-input" placeholder="<?php esc_attr_e( 'Tiêu Đề Nội Dung', 'my-theme' ); ?>">
                                <span class="placeholder"><?php esc_html_e( 'Tiêu Đề Nội Dung', 'my-theme' ); ?></span>
                            </div>
                        </div>

                        <div class="contact-form-row">
                            <div class="contact-form-group comment-form-comment">
                                <textarea name="message" id="contact-message" class="contact-line-textarea comment-line-textarea" placeholder="<?php esc_attr_e( 'Nhập Nội Dung *', 'my-theme' ); ?>" rows="3" required></textarea>
                                <span class="placeholder"><?php esc_html_e( 'Nhập Nội Dung *', 'my-theme' ); ?></span>
                            </div>
                        </div>

                        <div class="contact-form-action">
                            <?php
                            get_template_part( 'template-parts/ui/button', null, array(
                                'text' => __( 'Gửi thông tin cho HomeNest.Media', 'my-theme' ),
                                'tag'  => 'button',
                                'type' => 'submit',
                            ) );
                            ?>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="map-section">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.345332096399!2d106.74772170000001!3d10.784841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527898c77a569%3A0x13e175a79758e845!2zSG9tZSBOZXN0IHwgROG7i2NoIHbhu6UgVGhp4bq_dCBr4bq_IHdlYnNpdGUgLSBTRU8gLSBEaWdpdGFsIE1hcmtldGluZw!5e0!3m2!1svi!2s!4v1795396027634!5m2!1svi!2s" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
</section>

<?php
get_footer();
