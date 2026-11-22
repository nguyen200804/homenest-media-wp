<?php if ( ! is_front_page() ) : ?>
	<!-- </div> -->
<?php endif; ?>
</main><!-- .site-content -->

<!-- Social Gradient Definition -->
<svg width="0" height="0" aria-hidden="true" focusable="false" style="position: absolute;">
    <defs>
        <linearGradient id="hn-social-gradient" x1="59.833" y1="-23" x2="-25.667" y2="62.5" gradientUnits="userSpaceOnUse">
            <stop stop-color="#041272" />
            <stop offset=".482" stop-color="#166fde" />
            <stop offset="1" stop-color="#0b2a90" />
        </linearGradient>
    </defs>
</svg>

<footer class="footer hn-footer site-footer">
    <!-- ===== Nội dung chính của footer ===== -->
    <div class="hn-footer__container section ">
        <span class="hn-footer__spot hn-footer__spot1"></span>
        <span class="hn-footer__spot hn-footer__spot2"></span>
        <span class="hn-footer__spot hn-footer__spot3"></span>

        <div class="container hn-footer__inner">
            <div class="hn-footer__top">
                <div class="hn-footer__grid">
                    <!-- Cột 1 - Giới thiệu -->
                    <div class="hn-footer__col hn-footer__about">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hn-footer__logo">
                            <img
                                class="hn-footer__logo-img"
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo/logo_HomeNest.media.png' ); ?>"
                                alt="<?php bloginfo( 'name' ); ?> - HomeNest Tech"
                                width="200"
                                height="60"
                            >
                        </a>

                        <p class="hn-footer__desc">
                            Với chúng tôi, không có giới hạn cho sự sáng tạo và khả năng
                            phát triển. Hãy để chúng tôi giúp bạn thăng hoa trong môi
                            trường kỹ thuật số.
                        </p>
                    </div>

                    <!-- Cột 2 - Liên hệ -->
                    <div class="hn-footer__col hn-footer__contact">
                        <h4 class="hn-footer__heading">
                            <span class="hn-footer__text-gradient">LIÊN HỆ</span>
                        </h4>

                        <ul class="hn-footer__contact-list">
                            <li class="hn-footer__contact-item hn-footer__contact-item--hotline">
                                <span class="hn-footer__label">Hotline</span>
                                <a class="hn-footer__value" href="tel:0898994298">0898 - 994 - 298</a>
                            </li>
                            <li class="hn-footer__contact-item hn-footer__contact-item--email">
                                <span class="hn-footer__label">Email</span>
                                <a class="hn-footer__value linked" href="mailto:info@questx.com.vn">info@questx.com.vn</a>
                            </li>
                            <li class="hn-footer__contact-item hn-footer__contact-item--website">
                                <span class="hn-footer__label">Website</span>
                                <a class="hn-footer__value linked" href="https://HomeNest.media" target="_blank" rel="noopener noreferrer">HomeNest.media</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Cột 3 - Dịch vụ -->
                    <nav class="hn-footer__col hn-footer__services" aria-label="<?php esc_attr_e( 'Dịch vụ', 'my-theme' ); ?>">
                        <h4 class="hn-footer__heading">
                            <span class="hn-footer__text-gradient">DỊCH VỤ</span>
                        </h4>

                        <?php if ( has_nav_menu( 'footer-menu' ) ) : ?>
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'footer-menu',
                                'container'      => false,
                                'menu_class'     => 'hn-footer__services-list',
                                'fallback_cb'    => false,
                            ) );
                            ?>
                        <?php else : ?>
                            <ul class="hn-footer__services-list">
                                <li class="hn-footer__services-item">
                                    <a class="hn-footer__services-link" href="<?php echo esc_url( home_url( '/dich-vu-homenest/digital-marketing/' ) ); ?>">Digital Marketing</a>
                                </li>
                                <li class="hn-footer__services-item">
                                    <a class="hn-footer__services-link" href="<?php echo esc_url( home_url( '/dich-vu-homenest/branding/' ) ); ?>">Branding</a>
                                </li>
                                <li class="hn-footer__services-item">
                                    <a class="hn-footer__services-link" href="<?php echo esc_url( home_url( '/dich-vu-homenest/quang-cao/' ) ); ?>">Quảng cáo</a>
                                </li>
                                <li class="hn-footer__services-item">
                                    <a class="hn-footer__services-link" href="<?php echo esc_url( home_url( '/dich-vu-homenest/event/' ) ); ?>">Event</a>
                                </li>
                            </ul>
                        <?php endif; ?>
                    </nav>

                    <!-- Cột 4 - Mạng xã hội + Địa chỉ -->
                    <div class="hn-footer__col hn-footer__social">
                        <h4 class="hn-footer__heading">
                            <span class="hn-footer__text-gradient">THEO DÕI CHÚNG TÔI TẠI</span>
                        </h4>

                        <ul class="hn-footer__social-list" aria-label="Mạng xã hội">
                            <!-- Facebook -->
                            <li class="hn-footer__social-item">
                                <a class="hn-footer__social-link" href="#" aria-label="Facebook">
                                    <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                        <rect width="32" height="32" rx="8" fill="url(#hn-social-gradient)" />
                                        <path d="M17.667 17.2h1.904l.762-3.2h-2.666v-1.6c0-.824 0-1.6 1.523-1.6h1.143V8.112A21 21 0 0 0 18.157 8c-2.069 0-3.538 1.326-3.538 3.76V14h-2.286v3.2h2.286V24h3.048z" fill="#fff" />
                                    </svg>
                                </a>
                            </li>
                            <!-- Instagram -->
                            <li class="hn-footer__social-item">
                                <a class="hn-footer__social-link" href="#" aria-label="Instagram">
                                    <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                        <rect width="32" height="32" rx="8" fill="url(#hn-social-gradient)" />
                                        <path d="M16.604 8a66 66 0 0 1 1.642.017l.146.006c.168.005.333.013.534.022.798.037 1.342.164 1.82.349.495.19.912.448 1.329.864.381.375.676.829.864 1.33.186.477.311 1.022.349 1.82.009.2.017.366.023.534l.004.146c.011.369.016.797.017 1.64l.001.56v.983q.003.82-.017 1.64l-.005.146-.022.534c-.038.799-.165 1.343-.35 1.821-.188.5-.483.954-.864 1.33a3.7 3.7 0 0 1-1.33.864c-.477.185-1.021.311-1.82.349l-.534.022-.145.005c-.37.01-.798.015-1.642.017h-1.54a58 58 0 0 1-1.642-.017l-.146-.004-.534-.023c-.798-.038-1.342-.164-1.82-.35a3.7 3.7 0 0 1-1.329-.864 3.7 3.7 0 0 1-.865-1.329c-.186-.477-.312-1.022-.35-1.82l-.022-.535-.003-.145a59 59 0 0 1-.02-1.641v-1.542a59 59 0 0 1 .017-1.641l.006-.146.022-.534c.038-.798.164-1.342.349-1.82.189-.501.484-.955.867-1.33a3.7 3.7 0 0 1 1.327-.864c.479-.185 1.022-.312 1.821-.349.2-.009.366-.017.534-.022l.146-.005q.82-.02 1.64-.017zm-.77 3.75a3.75 3.75 0 1 0 0 7.5 3.75 3.75 0 0 0 0-7.5m0 1.5a2.249 2.249 0 1 1 0 4.497 2.249 2.249 0 0 1 0-4.497m3.938-2.625a.937.937 0 1 0 0 1.875.937.937 0 0 0 0-1.875" fill="#fff" />
                                    </svg>
                                </a>
                            </li>
                            <!-- YouTube -->
                            <li class="hn-footer__social-item">
                                <a class="hn-footer__social-link" href="#" aria-label="YouTube">
                                    <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                        <rect width="32" height="32" rx="8" fill="url(#hn-social-gradient)" />
                                        <path d="m14.333 17.857 3.893-2.357-3.893-2.357zm8.67-6.152c.098.37.165.864.21 1.493.053.628.075 1.17.075 1.642l.045.66c0 1.72-.12 2.986-.33 3.795q-.282 1.063-1.297 1.36c-.353.101-.998.172-1.988.22-.975.054-1.867.078-2.692.078L15.833 21c-3.142 0-5.1-.126-5.872-.346-.675-.196-1.11-.652-1.298-1.359-.097-.37-.165-.864-.21-1.493a20 20 0 0 1-.075-1.642l-.045-.66c0-1.72.12-2.986.33-3.795q.284-1.063 1.298-1.36c.352-.101.997-.172 1.987-.22a48 48 0 0 1 2.693-.078L15.833 10c3.143 0 5.1.126 5.873.346.675.196 1.11.652 1.297 1.359" fill="#fff" />
                                    </svg>
                                </a>
                            </li>
                            <!-- TikTok -->
                            <li class="hn-footer__social-item">
                                <a class="hn-footer__social-link" href="#" aria-label="TikTok">
                                    <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                        <rect width="32" height="32" rx="8" fill="url(#hn-social-gradient)" />
                                        <path d="M19.314 10.35a3.58 3.58 0 0 1-.88-2.35h-2.56v10.333c-.02.56-.255 1.09-.656 1.478a2.14 2.14 0 0 1-1.492.606 2.17 2.17 0 0 1-2.156-2.167c0-1.433 1.376-2.508 2.794-2.067V13.55C11.504 13.167 9 15.4 9 18.25 9 21.025 11.288 23 13.717 23c2.604 0 4.718-2.125 4.718-4.75v-5.242A6.07 6.07 0 0 0 22 14.158v-2.575s-1.559.075-2.686-1.233" fill="#fff" />
                                    </svg>
                                </a>
                            </li>
                            <!-- LinkedIn -->
                            <li class="hn-footer__social-item">
                                <a class="hn-footer__social-link" href="#" aria-label="LinkedIn">
                                    <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                        <rect width="32" height="32" rx="8" fill="url(#hn-social-gradient)" />
                                        <path d="M21.333 8A1.666 1.666 0 0 1 23 9.667v11.666A1.666 1.666 0 0 1 21.333 23H9.667A1.667 1.667 0 0 1 8 21.333V9.667A1.667 1.667 0 0 1 9.667 8zm-.416 12.917V16.5a2.717 2.717 0 0 0-2.717-2.717c-.708 0-1.533.434-1.933 1.084v-.925h-2.325v6.975h2.325v-4.109a1.163 1.163 0 1 1 2.325 0v4.109zm-9.684-8.284a1.4 1.4 0 0 0 1.4-1.4 1.405 1.405 0 1 0-1.4 1.4m1.159 8.284v-6.975h-2.309v6.975z" fill="#fff" />
                                    </svg>
                                </a>
                            </li>
                        </ul>

                        <hr class="hn-footer__line">

                        <div class="hn-footer__address">
                            <span class="hn-footer__label">Trụ sở chính</span>
                            <p class="hn-footer__address-text">Tòa SAV5 - The Sun Avenue, 28 Mai Chí Thọ, Phường Bình Trưng, Tp. Hồ Chí Minh, Việt Nam.</p>
                        </div>
                        <div class="hn-footer__address">
                            <span class="hn-footer__label">Chi nhánh</span>
                            <p class="hn-footer__address-text">Tòa SAV4 - The Sun Avenue, 28 Mai Chí Thọ, Phường Bình Trưng, Tp. Hồ Chí Minh, Việt Nam.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dãy logo thương hiệu -->
            <div class="hn-footer__brands">
                <ul class="hn-footer__brands-list">
                    <li class="hn-footer__brand-item hn-footer__brand-item--com-vn">
                        <a class="hn-footer__brand-link" href="https://homenest.com.vn" target="_blank" rel="noopener noreferrer">
                            <img
                                class="hn-footer__brand-logo"
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo/logo_homenest.com.vn.png' ); ?>"
                                alt="HomeNest.com.vn"
                                width="160"
                                height="48"
                            >
                        </a>
                    </li>
                    <li class="hn-footer__brand-item hn-footer__brand-item--software">
                        <a class="hn-footer__brand-link" href="https://homenest.software" target="_blank" rel="noopener noreferrer">
                            <img
                                class="hn-footer__brand-logo"
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo/logo_homenest.software.png' ); ?>"
                                alt="HomeNest.software"
                                width="160"
                                height="48"
                            >
                        </a>
                    </li>
                    <li class="hn-footer__brand-item hn-footer__brand-item--media">
                        <a class="hn-footer__brand-link" href="https://HomeNest.media" target="_blank" rel="noopener noreferrer">
                            <img
                                class="hn-footer__brand-logo"
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo/logo_HomeNest.media.png' ); ?>"
                                alt="HomeNest.media"
                                width="160"
                                height="48"
                            >
                        </a>
                    </li>
                    <li class="hn-footer__brand-item hn-footer__brand-item--tech">
                        <a class="hn-footer__brand-link" href="https://homenest.tech" target="_blank" rel="noopener noreferrer">
                            <img
                                class="hn-footer__brand-logo"
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo/logo_homenest.tech.png' ); ?>"
                                alt="HomeNest.tech"
                                width="160"
                                height="48"
                            >
                        </a>
                    </li>
                </ul>
            </div>

            <div class="hn-footer__bottom">
                <p class="hn-footer__copyright">
                    Copyright &copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> QuestX. All Rights Reserved. Design by HomeNest Software
                </p>
            </div>
        </div>
    </div>

    <!-- ===== Thanh icon liên hệ nhanh (cố định bên phải) ===== -->
    <ul class="hn__all-icons all-icons" aria-label="<?php esc_attr_e( 'Liên hệ nhanh', 'my-theme' ); ?>">
        <li>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <svg width="24" height="24" viewBox="0 0 850 1190" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                    <path d="M847.221 262.234c1.319 5.898 5.199 23.514-1.165 44.078-1.086 3.647-3.491 10.399-9.001 19.4-16.685 27.316-45.164 47.493-59.21 56.572-47.958 28.325-97.701 25.919-115.627 24.212 0 0 3.182 64.099 3.182 71.548 0 16.995 16.762 26.773 27.781 38.413 4.346 4.579 7.76 7.76 10.709 10.166 9.002 7.528 13.581 11.408 17.073 14.434 1.629 1.397 15.21 13.425 21.03 31.429.931 3.026 7.449 24.444-2.328 44.388-12.106 24.522-41.129 30.885-64.643 36.007-29.488 6.441-52.458 3.104-74.109 0 0 0-59.21-8.536-89.397-33.834-8.459-7.062-15.598-15.288-15.676-15.288-1.474-1.707-2.794-3.259-3.958-4.733-11.485-12.184-13.114-21.341-12.493-27.549 1.629-15.132 17.848-20.875 37.636-46.484 6.907-8.924 11.641-17.072 14.667-22.504-10.709-3.182-21.418-6.363-32.049-9.545 0 0-8.381-1.94-22.738-6.674-20.254-6.751-33.989-20.487-45.63-32.903-41.361-43.845-76.127-89.707-76.127-89.707-29.023-44.389-38.102-50.053-41.362-48.424-7.139 3.415 6.441 46.251 12.805 66.427 10.709 33.602 21.651 56.184 31.506 76.205 1.164 2.328 18.624 37.947 36.007 55.796 1.397 1.396 5.51 5.897 11.253 11.019 9.545 8.536 15.597 11.951 27.005 23.824 11.951 12.494 27.471 31.894 40.586 61.228-38.103-8.847-91.027-25.997-146.357-61.228-31.506-20.021-56.649-41.439-76.205-60.607-25.764-11.873-51.528-23.669-77.291-35.542-10.865-1.862-26.307-5.509-43.457-13.58-9.7-4.501-28.402-14.434-47.027-32.825-19.4-19.013-19.245-28.015-38.102-47.726-14.822-15.365-29.567-25.22-39.577-30.963 12.96-5.975 29.721-12.183 49.665-16.374 30.11-6.285 56.106-5.354 74.342-3.259-19.012-7.45-82.878-34.921-112.755-97.778-3.88-8.148-12.96-27.704-15.52-55.02-3.88-41.982 10.398-73.178 13.192-78.998 1.242-2.56 2.173-4.423 2.56-5.2 8.071-15.52 27.86-46.172 67.204-61.77.078-.078.233-.078.31-.078 47.493-18.78 89.32-2.173 98.011 1.474-36.861-2.793-69.608 13.503-81.404 39.81-9.39 20.953-3.647 43.923-2.328 48.812 2.328 8.458 7.217 20.797 19.944 34.92 47.259 52.382 139.916 69.454 139.916 69.454 65.651 12.106 76.903-2.483 134.638 9.623 47.803 10.01 84.276 29.333 106.78 43.456 36.939.854 64.41 3.337 75.352 4.812 0 0 16.451 2.25 28.324 8.226.543.31 1.164.62 1.164.62 4.656 2.406 8.381 4.656 11.408 6.752 9.467 6.441 15.52 11.33 19.012 14.123 8.536 6.907 21.341 17.15 37.792 19.944 16.685 2.794 30.73-3.337 36.706-6.441 4.268-2.173 19.943-11.02 28.169-30.575 1.475-3.415 8.924-22.117 1.785-42.759-4.19-12.028-11.485-19.555-16.374-24.367-25.609-25.375-55.873-47.725-73.722-60.374 29.644 1.009 53.934 6.596 71.627 12.106 18.314 5.743 52.924 16.917 86.06 46.639 16.995 15.287 34.455 31.273 40.431 57.192m-719.29 602.161c22.737 40.586 52.459 63.245 69.453 75.894 36.163 26.928 71.549 39.422 104.375 50.907 11.174 3.88 26.151 9.154 46.949 14.274 39.033 9.55 58.822 8.31 108.875 27.79 53.312 20.72 90.794 45.55 107.944 57.73 48.423 34.22 81.792 71.09 103.132 98.32 5.898-26.54 16.219-90.17-12.804-158.85-19.4-45.938-47.958-73.952-55.175-80.858-9.079-8.614-35.308-32.205-76.593-48.424-29.023-11.485-53.079-14.434-59.054-15.132-46.717-5.277-63.168 8.148-107.634.466 0 0-20.409-3.493-43.767-13.038-83.422-34.067-129.129-169.326-133.32-182.208 19.323 24.677 43.923 49.82 73.023 72.945 108.41 86.449 183.218 39.499 289.066 113.842 62.315 43.845 98.167 100.727 118.343 140.767-5.044-24.753-14.434-60.837-33.601-101.19-32.128-67.669-64.41-89.863-71.704-142.244-3.26-23.358-1.863-55.097 15.986-94.829a483.2 483.2 0 0 1-122.146-24.833c-14.433-4.889-58.899-20.875-110.427-54.166-45.009-29.1-79.697-61.228-105.383-89.785 2.561 38.801 10.709 69.531 17.771 90.484 15.288 45.008 37.326 78.92 48.579 95.915.232.388.465.699.543.854-23.358-17.616-48.967-41.517-71.937-73.334-10.709-14.822-29.799-41.672-43.457-81.947-9.622-28.247-13.115-53.157-14.434-70.85a1085 1085 0 0 0-21.495 48.19c-21.108 50.907-37.637 90.717-46.018 143.719-4.113 26.074-9.856 62.934-2.872 110.427 3.415 23.28 8.304 54.398 27.782 89.164" fill="#fff" />
                </svg>
                <span>Trang chủ</span>
            </a>
        </li>
        <li>
            <a href="tel:0898994298">
                <svg width="20" height="20" viewBox="0 0 1200 1200" fill="#fff" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                    <path d="m1183.326 997.842-169.187 167.83c-24.974 25.612-58.077 34.289-90.316 34.328-142.571-4.271-277.333-74.304-387.981-146.215C354.22 921.655 187.574 757.82 82.984 559.832 42.87 476.809-4.198 370.878.299 278.209c.401-34.86 9.795-69.073 34.346-91.543L203.831 17.565c35.132-29.883 69.107-19.551 91.589 15.257l136.111 258.102c14.326 30.577 6.108 63.339-15.266 85.188l-62.332 62.3c-3.848 5.271-6.298 11.271-6.36 17.801 23.902 92.522 96.313 177.799 160.281 236.486 63.967 58.688 132.725 138.198 221.977 157.021 11.032 3.077 24.545 4.158 32.438-3.179l72.51-73.743c24.996-18.945 61.086-28.205 87.771-12.714h1.272l245.51 144.943c36.041 22.592 39.799 66.252 13.994 92.815" />
                </svg>
                <span>Hotline</span>
            </a>
        </li>
        <li>
            <a href="https://www.tiktok.com/@homenest.software" target="_blank" rel="nofollow noopener noreferrer">
                <svg width="24" height="24" viewBox="0 0 32 32" fill="#fff" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                    <path d="M16.656 1.029c1.637-.025 3.262-.012 4.886-.025a7.76 7.76 0 0 0 2.189 5.213l-.002-.002A8.77 8.77 0 0 0 29 8.45l.028.002v5.036a13.3 13.3 0 0 1-5.331-1.247l.082.034a15.4 15.4 0 0 1-2.077-1.196l.052.034c-.012 3.649.012 7.298-.025 10.934a9.5 9.5 0 0 1-1.707 4.954l.02-.031c-1.652 2.366-4.328 3.919-7.371 4.011h-.014a9.07 9.07 0 0 1-5.139-1.31l.04.023C5.05 28.185 3.32 25.603 3 22.6l-.004-.041a23 23 0 0 1-.012-1.862c.49-4.779 4.494-8.476 9.361-8.476q.822.001 1.604.136l-.056-.008c.025 1.849-.05 3.699-.05 5.548a4.29 4.29 0 0 0-5.465 2.619l-.009.03c-.133.427-.21.918-.21 1.426q0 .31.037.61l-.002-.024a4.26 4.26 0 0 0 4.382 3.586h-.009a4.2 4.2 0 0 0 3.451-1.994l.01-.018c.267-.372.45-.822.511-1.311l.001-.014c.125-2.237.075-4.461.087-6.698.012-5.036-.012-10.06.025-15.083z" />
                </svg>
                <span>TikTok</span>
            </a>
        </li>
        <li>
            <a href="https://wa.me/+840898994298" target="_blank" rel="nofollow noopener noreferrer">
                <svg width="24" height="24" viewBox="0 0 20 20" fill="#fff" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                    <path fill="transparent" d="M0 0h20v20H0z" />
                    <path d="M16.8 5.7C14.4 2 9.5.9 5.7 3.2 2 5.5.8 10.5 3.2 14.2l.2.3-.8 3 3-.8.3.2c1.3.7 2.7 1.1 4.1 1.1 1.5 0 3-.4 4.3-1.2 3.7-2.4 4.8-7.3 2.5-11.1m-2.1 7.7c-.4.6-.9 1-1.6 1.1-.4 0-.9.2-2.9-.6-1.7-.8-3.1-2.1-4.1-3.6-.6-.7-.9-1.6-1-2.5 0-.8.3-1.5.8-2q.3-.3.6-.3H7c.2 0 .4 0 .5.4.2.5.7 1.7.7 1.8.1.1.1.3 0 .4.1.2 0 .4-.1.5s-.2.3-.3.4c-.2.1-.3.3-.2.5.4.6.9 1.2 1.4 1.7.6.5 1.2.9 1.9 1.2.2.1.4.1.5-.1s.6-.7.8-.9.3-.2.5-.1l1.6.8c.2.1.4.2.5.3.1.3.1.7-.1 1" />
                </svg>
                <span>WhatsApp</span>
            </a>
        </li>
    </ul>

    <!-- ===== Nút cuộn lên đầu trang ===== -->
    <div class="homenest__scroll-top-page" id="homenest-scroll-top">
        <button
            type="button"
            id="scrollTopBtn"
            aria-label="<?php esc_attr_e( 'Lên đầu trang', 'my-theme' ); ?>"
        >
            <svg viewBox="-20 -70 600 600" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" style="display: inline-block;">
                <defs>
                    <linearGradient id="hn-scroll-gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" stop-color="#386BB7" />
                        <stop offset="100%" stop-color="#E24C4A" />
                    </linearGradient>
                </defs>
                <path fill="url(#hn-scroll-gradient)" d="M505.1 19.1c-1.2-5.5-6.7-11-12.2-12.2C460.7 0 435.5 0 410.4 0 307.2 0 245.3 55.2 199.1 128H94.8c-16.3 0-35.6 11.9-42.9 26.5L2.5 253.3A28.4 28.4 0 0 0 0 264a24 24 0 0 0 24 24h103.8l-22.5 22.5c-11.4 11.4-13 32.3 0 45.3l50.9 50.9c11.2 11.2 32.2 13.2 45.3 0l22.5-22.5V488a24 24 0 0 0 24 24 28.6 28.6 0 0 0 10.7-2.5l98.7-49.4c14.6-7.3 26.5-26.5 26.5-42.9V312.8c72.6-46.3 128-108.4 128-211.1 0-24.1 0-49.3-6.9-81.6zM384 168a40 40 0 1 1 40-40 40 40 0 0 1-40 40" />
            </svg>
        </button>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
