<?php
/**
 * Template Name: Single Dịch Vụ SEO Tổng Thể
 * Template Post Type: dich-vu
 * 
 * Chi tiết dịch vụ SEO Tổng Thể - HomeNest.media
 */

defined( 'ABSPATH' ) || exit;

get_header();

$theme_uri = get_template_directory_uri();
?>

<main id="primary" class="site-main service-detail-page">

    <!-- 1. SERVICE HERO SECTION -->
    <section class="serviceHero section">
        <div class="container">
            <div class="serviceHeroWrapper">
                <div class="serviceHeroHeader">
                    <h1 class="serviceHeroHeading">Dịch vụ SEO tổng thể cho tăng trưởng website</h1>
                </div>
                <div class="serviceHeroContent">
                    <div class="serviceHeroDescription">
                        <p data-pm-slice="1 1 []"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" target="_blank" rel="noopener">HomeNest.media</a> hỗ trợ doanh nghiệp xây dựng kế hoạch SEO tổng thể dựa trên mục tiêu kinh doanh, tình trạng website và dữ liệu Google Search Console. Phạm vi triển khai có thể bao gồm SEO kỹ thuật, chiến lược nội dung, cấu trúc website, liên kết nội bộ và đo lường hiệu quả tìm kiếm tự nhiên.</p>
                        <p>Kế hoạch thực hiện, chi phí và thời hạn được xác nhận theo nhu cầu thực tế trong báo giá hoặc hợp đồng.</p>
                    </div>
                    <div class="serviceHeroAction">
                        <a href="https://zalo.me/+84708070888" target="_blank" rel="noopener noreferrer" class="btnGradientSpin">
                            <span class="btnInner">
                                <span class="btnIconLeft" aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M388.819 239.537 156.092 6.816c-9.087-9.089-23.824-9.089-32.912.002-9.087 9.089-9.087 23.824.002 32.912l216.27 216.266-216.273 216.276c-9.087 9.089-9.087 23.824.002 32.912A23.2 23.2 0 0 0 139.636 512a23.2 23.2 0 0 0 16.457-6.817L388.819 272.45a23.27 23.27 0 0 0 0-32.913"/></svg>
                                </span>
                                <span class="btnText">Tư vấn miễn phí</span>
                                <span class="btnIconRight" aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M388.819 239.537 156.092 6.816c-9.087-9.089-23.824-9.089-32.912.002-9.087 9.089-9.087 23.824.002 32.912l216.27 216.266-216.273 216.276c-9.087 9.089-9.087 23.824.002 32.912A23.2 23.2 0 0 0 139.636 512a23.2 23.2 0 0 0 16.457-6.817L388.819 272.45a23.27 23.27 0 0 0 0-32.913"/></svg>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. SERVICE OVERVIEW SECTION -->
    <section class="serviceOverview section">
        <div class="container">
            <div class="serviceOverviewWrapper">
                <div class="serviceOverviewContent">
                    <h2 class="serviceOverviewTitle">
                        <span class="textGradient">Khi nào doanh nghiệp cần SEO tổng thể?</span>
                    </h2>
                    <div class="serviceOverviewDescription">
                        <p>Nếu doanh nghiệp muốn cải thiện khả năng hiển thị trên Google, phát triển lưu lượng truy cập tự nhiên và tiếp cận khách hàng có nhu cầu thực tế, SEO tổng thể chính là một lựa chọn tối ưu. Thay vì chỉ tập trung vào một vài từ khóa, dịch vụ SEO cung cấp bởi HomeNest.media tổng thể xem xét toàn bộ website, từ kỹ thuật, nội dung đến cấu trúc và trải nghiệm người dùng.</p>
                    </div>
                </div>
                <div class="serviceOverviewMedia">
                    <img
                        class="serviceOverviewImage"
                        src="<?php echo esc_url( $theme_uri . '/assets/images/dich-vu/seo-tong-the/Anh-bia_SEO-tong-the.jpg' ); ?>"
                        alt="Khi nào doanh nghiệp cần SEO tổng thể?"
                        width="1000"
                        height="1000"
                        loading="lazy"
                    >
                </div>
            </div>
        </div>
    </section>

    <!-- 3. SERVICE STRATEGY SECTION -->
    <section class="serviceStrategy section">
        <div class="fullwidth">
            <h2 class="serviceStrategyTitle">
                <span class="textGradient">Chiến lược SEO tổng thể cho doanh nghiệp: từ nền tảng đến tăng trưởng</span>
            </h2>
            <div class="serviceStrategyWrapper">
                <div class="serviceStrategyMedia">
                    <video
                        class="serviceStrategyVideo"
                        src="<?php echo esc_url( $theme_uri . '/assets/videos/homnest_media.mp4' ); ?>"
                        autoplay
                        loop
                        muted
                        playsinline
                    ></video>
                </div>
                <div class="serviceStrategyContent">
                    <div class="serviceStrategyGroup">
                        <div class="serviceStrategyCard">
                            <h3 class="serviceStrategyCardTitle">Phân tích website và Technical SEO</h3>
                            <hr class="serviceStrategyCardDivider">
                            <p class="serviceStrategyCardDesc">Kiểm tra hiệu suất tìm kiếm, lập chỉ mục, tốc độ tải trang và lỗi kỹ thuật để xác định các hạng mục cần cải thiện.</p>
                        </div>
                        <div class="serviceStrategyCard">
                            <div class="serviceStrategyCardIcon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 49" fill="none"><path d="M25.402 1H9.258a1 1 0 0 0-.962.73l-6.44 23A1 1 0 0 0 2.818 26h6.933a1 1 0 0 1 .975 1.219L6.461 46.217c-.233 1.038 1.101 1.674 1.76.84L28.72 21.12a1 1 0 0 0-.785-1.62H19.6a1 1 0 0 1-.9-1.437l7.602-15.626A1 1 0 0 0 25.4 1Z" stroke="#fff" stroke-width="2"/></svg>
                            </div>
                            <div class="serviceStrategyCardBody">
                                <h3 class="serviceStrategyCardTitle">Nghiên cứu từ khóa và cấu trúc website</h3>
                                <p class="serviceStrategyCardDesc">Phân tích Search Intent, tối ưu trang dịch vụ và xây dựng cấu trúc Silo, liên kết nội bộ phù hợp.</p>
                            </div>
                        </div>
                    </div>
                    <div class="serviceStrategyGroup">
                        <div class="serviceStrategyCard">
                            <img
                                class="serviceStrategyCardImage"
                                src="<?php echo esc_url( $theme_uri . '/assets/images/dich-vu/chien-luoc-3.png' ); ?>"
                                alt=""
                                width="500"
                                height="500"
                                loading="lazy"
                            >
                            <h3 class="serviceStrategyCardTitle">Phát triển nội dung và độ uy tín</h3>
                            <p class="serviceStrategyCardDesc">Xây dựng nội dung theo nhu cầu tìm kiếm, cập nhật bài viết và phát triển liên kết chất lượng.</p>
                        </div>
                        <div class="serviceStrategyCard">
                            <img
                                class="serviceStrategyCardImage"
                                src="<?php echo esc_url( $theme_uri . '/assets/images/dich-vu/chien-luoc-4.webp' ); ?>"
                                alt=""
                                width="500"
                                height="500"
                                loading="lazy"
                            >
                            <h3 class="serviceStrategyCardTitle">Tối ưu chuyển đổi và đo lường</h3>
                            <p class="serviceStrategyCardDesc">Cải thiện CTA, biểu mẫu và trải nghiệm người dùng; theo dõi lưu lượng truy cập, khách hàng tiềm năng và tỷ lệ chuyển đổi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. SEO INTRO SECTION -->
    <section class="seoIntro section">
        <div class="container">
            <div class="seoIntroWrapper">
                <header class="seoIntroHeader">
                    <h2 class="seoIntroTitle">
                        Dịch vụ SEO tổng thể tại HomeNest.media giúp <span class="textGradient">tối ưu nội dung và kỹ thuật website, cải thiện thứ hạng Google</span>
                    </h2>
                </header>
                <div class="seoIntroBrand">
                    <img
                        class="seoIntroLogo"
                        src="<?php echo esc_url( $theme_uri . '/assets/images/logo/logo-big_homenest-media.webp' ); ?>"
                        alt="Dịch vụ SEO tổng thể"
                        width="2560"
                        height="681"
                        loading="lazy"
                    >
                </div>
                <div class="seoIntroContent">
                    <div class="seoIntroColLeft">
                        <img
                            class="seoIntroImageMain"
                            src="<?php echo esc_url( $theme_uri . '/assets/images/seo-tong-the/seo-tong-the-1.webp' ); ?>"
                            alt="Dịch vụ SEO tổng thể"
                            width="778"
                            height="430"
                            loading="lazy"
                        >
                        <p class="seoIntroDescription">HomeNest.media cung cấp giải pháp <a href="<?php echo esc_url( home_url( '/seo-la-gi-nhung-dieu-ban-can-biet-ve-seo-search-engine-optimization/' ) ); ?>" target="_blank" rel="noopener">SEO</a> tổng thể, kết hợp tối ưu nội dung, cấu trúc website và các yếu tố kỹ thuật nhằm cải thiện thứ hạng trên Google. Với chiến lược SEO được xây dựng dựa trên mục tiêu kinh doanh và nhu cầu tìm kiếm của khách hàng, chúng tôi hỗ trợ doanh nghiệp phát triển lưu lượng truy cập tự nhiên, tiếp cận khách hàng tiềm năng và nâng cao hiệu quả hoạt động trực tuyến.</p>
                        <a href="<?php echo esc_url( home_url( '/lien-he' ) ); ?>" class="btnTransparentToGradient seoIntroButton">
                            <span class="btnInner">
                                <span class="btnIconLeft" aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M388.819 239.537 156.092 6.816c-9.087-9.089-23.824-9.089-32.912.002-9.087 9.089-9.087 23.824.002 32.912l216.27 216.266-216.273 216.276c-9.087 9.089-9.087 23.824.002 32.912A23.2 23.2 0 0 0 139.636 512a23.2 23.2 0 0 0 16.457-6.817L388.819 272.45a23.27 23.27 0 0 0 0-32.913"/></svg>
                                </span>
                                <span class="btnText">Tư vấn ngay</span>
                                <span class="btnIconRight" aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M388.819 239.537 156.092 6.816c-9.087-9.089-23.824-9.089-32.912.002-9.087 9.089-9.087 23.824.002 32.912l216.27 216.266-216.273 216.276c-9.087 9.089-9.087 23.824.002 32.912A23.2 23.2 0 0 0 139.636 512a23.2 23.2 0 0 0 16.457-6.817L388.819 272.45a23.27 23.27 0 0 0 0-32.913"/></svg>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="seoIntroColRight">
                        <img
                            class="seoIntroImageSecondary"
                            src="<?php echo esc_url( $theme_uri . '/assets/images/seo-tong-the/seo-tong-the-2.webp' ); ?>"
                            alt="Dịch vụ SEO tổng thể"
                            width="548"
                            height="714"
                            loading="lazy"
                        >
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. SERVICE PRICE TABLE SECTION -->
    <?php
    $plans = array(
        array(
            'title'       => 'BASIC',
            'imageTag'    => $theme_uri . '/assets/images/basic.png',
            'color'       => '#2FB5B1',
            'description' => '<strong>Gói Basic</strong> Tập trung vào các kỹ thuật <a href="#">SEO Onpage</a>, nâng cao trải nghiệm người dùng và tạo sự nhận diện cho thương hiệu.',
            'features'    => array(
                '90 - 100% Top 10',
                'Cam kết Top 10 các Keywords Top Volume Search',
                'x2 - x5 Organic Traffic tổng thể',
                'Chiến lược Content Marketing & Thực thi',
                'Tối ưu tỷ lệ chuyển đổi cho Website',
                'Nghiệm thu hàng tháng theo KPI',
                'Chính sách hoàn phí & Bảo hành kết quả',
                'Combo đào tạo & Chuyển giao Trainning nhân sự',
            ),
            'note'        => '*Liên hệ ngay để được tư vấn miễn phí',
            'price'       => '9.000.000',
            'phone'       => '+84708070888',
        ),
        array(
            'title'       => 'GOLDEN',
            'imageTag'    => $theme_uri . '/assets/images/golden.png',
            'color'       => '#FD7401',
            'description' => '<strong>Gói Golden</strong> Tối ưu hóa trải nghiệm người dùng và thúc đẩy quảng bá thương hiệu, đồng thời hỗ trợ trong việc phát triển kinh doanh.',
            'features'    => array(
                '20 - 30% Top 5',
                '50 - 80% Top 10',
                'Cam kết Top 10 các Keywords Top Volume Search',
                'x2 - x5 Organic Traffic tổng thể',
                'Chiến lược Content Marketing & Thực thi',
                'Tối ưu tỷ lệ chuyển đổi cho Website',
                'Nghiệm thu hàng tháng theo KPI',
                'Chính sách hoàn phí & Bảo hành kết quả',
                'Combo đào tạo & Chuyển giao Trainning nhân sự',
            ),
            'note'        => '*Liên hệ ngay để được tư vấn miễn phí',
            'price'       => '19.000.000',
            'phone'       => '+84708070888',
        ),
        array(
            'title'       => 'DIAMOND',
            'imageTag'    => $theme_uri . '/assets/images/diamond.png',
            'color'       => '#020C69',
            'description' => '<strong>Gói Diamond</strong> SEO tăng mạnh đồng thời cải thiện thứ hạng từ khóa, tăng lượng truy cập và tối ưu hóa tỷ lệ chuyển đổi',
            'features'    => array(
                '25 - 40% Top 5',
                '65 - 80% Top 10',
                'Cam kết Top 10 các Keywords Top Volume Search',
                'Organic Traffic Top 5 - 10 thị trường',
                'Chiến lược Content Marketing & Thực thi',
                'Tối ưu tỷ lệ chuyển đổi Website',
                'Nghiệm thu hàng tháng theo KPI',
                'Chính sách hoàn phí & Bảo hành kết quả',
                'Combo Đào tạo & Chuyển giao Trainning nhân sự',
            ),
            'note'        => '*Liên hệ ngay để được tư vấn miễn phí',
            'price'       => '39.000.000',
            'phone'       => '+84708070888',
        ),
        array(
            'title'       => 'PLATINUM',
            'imageTag'    => $theme_uri . '/assets/images/platinum.png',
            'color'       => '#972395',
            'description' => '<strong>Gói Platinum</strong> Thống trị thị trường trong lĩnh vực ngành, chiếm lĩnh toàn bộ không gian tìm kiếm tự nhiên trên Google.',
            'features'    => array(
                '15 - 50% Top 3',
                '40 - 60% Top 5',
                '70 - 85% Top 10',
                'Cam kết Top 5 các Keywords Top Volume Search',
                'Organic Traffic Top 1 - 3 thị trường',
                'Chiến lược Content Marketing & Thực thi',
                'Tối ưu tỷ lệ chuyển đổi cho Website',
                'Nghiệm thu hàng tháng theo KPI',
                'Chính sách hoàn phí & Bảo hành kết quả',
                'Combo Đào tạo & Chuyển giao Trainning nhân sự',
            ),
            'note'        => '*Liên hệ ngay để được tư vấn miễn phí',
            'price'       => 'Linh hoạt',
            'phone'       => '+84708070888',
        ),
    );
    ?>
    <section class="servicePriceTable section">
        <div class="container">
            <div class="servicePriceTableWrapper">
                <header class="servicePriceTableHeader">
                    <h2 class="servicePriceTableTitle">
                        <span class="textGradient">Bảng giá dịch vụ SEO tổng thể - HomeNest.media</span>
                    </h2>
                </header>

                <div class="servicePriceTableContent">
                    <div class="servicePriceTableList">
                        <?php foreach ( $plans as $plan ) : ?>
                            <article class="servicePriceTableCard" style="--plan-color: <?php echo esc_attr( $plan['color'] ); ?>;">
                                <div class="servicePriceTableCardItem">
                                    <div class="servicePriceTableCardHeader">
                                        <img
                                            class="servicePriceTableCardImage"
                                            src="<?php echo esc_url( $plan['imageTag'] ); ?>"
                                            alt="<?php echo esc_attr( $plan['title'] ); ?>"
                                            width="120"
                                            height="36"
                                            loading="lazy"
                                        >
                                        <h3 class="servicePriceTableCardTitle"><?php echo esc_html( $plan['title'] ); ?></h3>
                                    </div>
                                    <div class="servicePriceTableCardDesc">
                                        <?php echo wp_kses_post( $plan['description'] ); ?>
                                    </div>
                                    <hr class="servicePriceTableCardDivider">
                                    <ul class="servicePriceTableFeatureList">
                                        <?php foreach ( $plan['features'] as $feature ) : ?>
                                            <li class="servicePriceTableFeatureItem">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"/><path d="M9 9h6v6H9zm0-8v3m6-3v3M9 20v3m6-3v3m5-14h3m-3 5h3M1 9h3m-3 5h3"/></svg>
                                                <span><?php echo esc_html( $feature ); ?></span>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <hr class="servicePriceTableCardDivider">
                                    <?php if ( ! empty( $plan['note'] ) ) : ?>
                                        <p class="servicePriceTableCardNote"><?php echo esc_html( $plan['note'] ); ?></p>
                                    <?php endif; ?>
                                    <div class="servicePriceTableCardFooter">
                                        <a
                                            class="servicePriceTablePhoneBtn"
                                            href="tel:<?php echo esc_attr( $plan['phone'] ); ?>"
                                            aria-label="<?php echo esc_attr( 'Liên hệ tư vấn gói ' . $plan['title'] ); ?>"
                                        >
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15.0504 5C16.0272 5.19057 16.9248 5.66826 17.6285 6.37194C18.3322 7.07561 18.8099 7.97326 19.0004 8.95M15.0504 1C17.0797 1.22544 18.972 2.13417 20.4167 3.57701C21.8613 5.01984 22.7724 6.91101 23.0004 8.94M22.0004 16.92V19.92C22.0016 20.1985 21.9445 20.4742 21.8329 20.7293C21.7214 20.9845 21.5577 21.2136 21.3525 21.4019C21.1473 21.5901 20.905 21.7335 20.6412 21.8227C20.3773 21.9119 20.0978 21.9451 19.8204 21.92C16.7433 21.5856 13.7874 20.5341 11.1904 18.85C8.77425 17.3147 6.72576 15.2662 5.19042 12.85C3.5004 10.2412 2.44866 7.27099 2.12042 4.18C2.09543 3.90347 2.1283 3.62476 2.21692 3.36162C2.30555 3.09849 2.44799 2.85669 2.63519 2.65162C2.82238 2.44655 3.05023 2.28271 3.30421 2.17052C3.5582 2.05833 3.83276 2.00026 4.11042 2H7.11042C7.59573 1.99522 8.06621 2.16708 8.43418 2.48353C8.80215 2.79999 9.0425 3.23945 9.11042 3.72C9.23704 4.68007 9.47187 5.62273 9.81042 6.53C9.94497 6.88792 9.97408 7.27691 9.89433 7.65088C9.81457 8.02485 9.62928 8.36811 9.36042 8.64L8.09042 9.91C9.51398 12.4135 11.5869 14.4864 14.0904 15.91L15.3604 14.64C15.6323 14.3711 15.9756 14.1858 16.3495 14.1061C16.7235 14.0263 17.1125 14.0555 17.4704 14.19C18.3777 14.5286 19.3204 14.7634 20.2804 14.89C20.7662 14.9585 21.2098 15.2032 21.527 15.5775C21.8441 15.9518 22.0126 16.4296 22.0004 16.92Z"/></svg>
                                        </a>
                                        <div class="servicePriceTablePriceInfo">
                                            <span class="servicePriceTablePriceNumber"><?php echo esc_html( $plan['price'] ); ?></span>
                                            <span class="servicePriceTablePriceText">Tư vấn ngay</span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. CTA SECTION -->
    <section class="ctaWrapper section">
        <div class="container">
            <div class="ctaCard">
                <div class="ctaContent">
                    <div class="ctaHeader">
                        <div class="ctaBadge">
                            <span class="ctaBadgeDot"></span>
                            <span class="ctaBadgeText">Book a call now!</span>
                        </div>
                        <h2 class="ctaHeading">Explore Our Services with Full IP Protection</h2>
                        <p class="ctaDescription">Sign NDA and own 100% of your project.</p>
                    </div>
                    <a href="<?php echo esc_url( home_url( '/lien-he' ) ); ?>" class="ctaButton">
                        TALK TO OUR EXPERTS
                    </a>
                </div>
                <div class="ctaImageWrapper">
                    <img
                        class="ctaImage"
                        src="https://image.homenest.software/wp-content/uploads/2026/03/Book-a-call-now.avif"
                        alt="Expert consultant"
                        width="270"
                        height="330"
                        loading="lazy"
                    >
                </div>
            </div>
        </div>
    </section>

    <!-- 7. DATA SECTION -->
    <section class="dataSection section">
        <div class="container">
            <div class="dataWrapper">
                <h2 class="dataTitle">
                    Số liệu là <span class="textGradient">minh chứng cho sự thành công</span> và <span class="textGradient">tiềm lực</span> của chúng tôi.
                </h2>
                <ul class="dataStatList">
                    <li class="dataStatItem">
                        <p class="dataStatNumber anton">
                            <span class="textGradient strokeGradient" data-text="+300%">+300%</span>
                        </p>
                        <h3 class="dataStatLabel">Mức độ tăng trưởng website</h3>
                    </li>
                    <li class="dataStatItem">
                        <p class="dataStatNumber anton">
                            <span class="textGradient strokeGradient" data-text="+2.000%">+2.000%</span>
                        </p>
                        <h3 class="dataStatLabel">Lượng traffic tăng trưởng</h3>
                    </li>
                    <li class="dataStatItem">
                        <p class="dataStatNumber anton">
                            <span class="textGradient strokeGradient" data-text="6.000+">6.000+</span>
                        </p>
                        <h3 class="dataStatLabel">Contact đổ về trong tháng</h3>
                    </li>
                    <li class="dataStatItem">
                        <p class="dataStatNumber anton">
                            <span class="textGradient strokeGradient" data-text="12.000+">12.000+</span>
                        </p>
                        <h3 class="dataStatLabel">Khách hàng trong và ngoài nước</h3>
                    </li>
                </ul>
                <ul class="dataCardList">
                    <li class="dataCardItem">
                        <img
                            class="dataCardImage"
                            src="<?php echo esc_url( $theme_uri . '/assets/images/data_1.webp' ); ?>"
                            alt="Tăng trưởng bứt phá"
                            width="800"
                            height="450"
                            loading="lazy"
                        >
                        <p class="dataCardDesc">
                            Tăng trưởng bứt phá – Doanh nghiệp vươn lên top Google, thu hút hàng ngàn khách hàng tiềm năng mỗi tháng.
                        </p>
                    </li>
                    <li class="dataCardItem">
                        <img
                            class="dataCardImage"
                            src="<?php echo esc_url( $theme_uri . '/assets/images/data_2.webp' ); ?>"
                            alt="Hiệu quả bền vững"
                            width="800"
                            height="450"
                            loading="lazy"
                        >
                        <p class="dataCardDesc">
                            Hiệu quả bền vững – Chiến lược SEO tối ưu giúp website duy trì thứ hạng cao, mang lại giá trị dài lâu.
                        </p>
                    </li>
                    <li class="dataCardItem">
                        <img
                            class="dataCardImage"
                            src="<?php echo esc_url( $theme_uri . '/assets/images/data_3.webp' ); ?>"
                            alt="Dẫn đầu thị trường"
                            width="800"
                            height="450"
                            loading="lazy"
                        >
                        <p class="dataCardDesc">
                            Dẫn đầu thị trường – Thương hiệu của bạn không chỉ được tìm thấy mà còn tỏa sáng trong lĩnh vực kinh doanh.
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- 7. ACCOMPANY SECTION -->
<?php
get_template_part( 'template-parts/section/accompany' );
?>

    <!-- 9. PROCEDURE SECTION -->
    <?php
    $procedures = array(
        array(
            'heading' => 'Tiếp nhận thông tin khách hàng',
            'content' => 'HomeNest.media tìm hiểu lĩnh vực kinh doanh, sản phẩm, dịch vụ và đối tượng khách hàng mục tiêu. Qua đó, đội ngũ xác định nhu cầu, mục tiêu SEO và kỳ vọng của doanh nghiệp để làm cơ sở xây dựng phương án triển khai phù hợp.',
            'img'     => $theme_uri . '/assets/images/ten-quy-trinh.webp',
        ),
        array(
            'heading' => 'Phân Tích Dự Án',
            'content' => 'Đội ngũ tiến hành đánh giá hiện trạng website, cấu trúc nội dung và khả năng hiển thị trên công cụ tìm kiếm. Đồng thời, việc phân tích đối thủ và thị trường giúp xác định cơ hội phát triển cũng như những vấn đề cần ưu tiên xử lý.',
            'img'     => $theme_uri . '/assets/images/ten-quy-trinh.webp',
        ),
        array(
            'heading' => 'Lên kế hoạch và phương án',
            'content' => 'Dựa trên kết quả phân tích, HomeNest.media xây dựng kế hoạch SEO theo mục tiêu và nguồn lực của doanh nghiệp. Phương án triển khai xác định các hạng mục công việc, thứ tự ưu tiên và chỉ số cần theo dõi trong quá trình thực hiện.',
            'img'     => $theme_uri . '/assets/images/ten-quy-trinh.webp',
        ),
        array(
            'heading' => 'Nghiên cứu và gom nhóm từ khóa',
            'content' => 'Từ khóa được nghiên cứu dựa trên nhu cầu tìm kiếm, lĩnh vực kinh doanh và mục tiêu tiếp cận khách hàng. Sau đó, các từ khóa được phân nhóm theo chủ đề và mục đích tìm kiếm để xác định hướng phát triển nội dung, đồng thời lựa chọn trang đích phù hợp.',
            'img'     => $theme_uri . '/assets/images/ten-quy-trinh.webp',
        ),
        array(
            'heading' => 'Tối ưu website',
            'content' => 'Các hạng mục tối ưu tập trung vào nội dung, cấu trúc website, liên kết nội bộ và những yếu tố kỹ thuật ảnh hưởng đến SEO. Việc triển khai được thực hiện theo thứ tự ưu tiên nhằm cải thiện khả năng thu thập dữ liệu, lập chỉ mục và trải nghiệm người dùng.',
            'img'     => $theme_uri . '/assets/images/ten-quy-trinh.webp',
        ),
        array(
            'heading' => 'Nghiệm thu dự án',
            'content' => 'Các hạng mục đã triển khai được kiểm tra và đối chiếu với phạm vi công việc đã thống nhất. Quá trình nghiệm thu giúp xác định mức độ hoàn thành, phát hiện những điểm cần điều chỉnh và bảo đảm các đầu việc đáp ứng tiêu chí đã đề ra.',
            'img'     => $theme_uri . '/assets/images/ten-quy-trinh.webp',
        ),
        array(
            'heading' => 'Bảo hành dự án',
            'content' => 'HomeNest.media theo dõi các chỉ số như lượt nhấp tự nhiên, lượt hiển thị, hiệu suất từ khóa và lưu lượng truy cập website. Báo cáo định kỳ giúp doanh nghiệp nắm bắt tình hình triển khai, đánh giá những thay đổi và xác định các hạng mục cần tiếp tục tối ưu.',
            'img'     => $theme_uri . '/assets/images/ten-quy-trinh.webp',
        ),
        array(
            'heading' => 'Chăm sóc khách hàng',
            'content' => 'Sau quá trình triển khai, HomeNest.media tiếp nhận phản hồi và trao đổi với doanh nghiệp về tình hình hoạt động của website. Dựa trên dữ liệu theo dõi và nhu cầu thực tế, đội ngũ đề xuất các hướng cải thiện nhằm duy trì và phát triển hiệu quả SEO trong giai đoạn tiếp theo.',
            'img'     => $theme_uri . '/assets/images/ten-quy-trinh.webp',
        ),
    );
    ?>
    <section class="procedureSection section">
        <img
            class="procedureBackground"
            src="<?php echo esc_url( $theme_uri . '/assets/images/quy-trinh-tu-van.webp' ); ?>"
            alt="Quy trình tư vấn"
            width="2000"
            height="1333"
            loading="lazy"
        >
        <div class="container">
            <div class="procedureWrapper">
                <div class="procedureHeader">
                    <h2 class="procedureTitle">
                        Quy trình <span class="textGradient">Tư vấn & Triển khai</span> Dịch vụ SEO Tổng thể
                    </h2>
                    <p class="procedureDescription">
                        HomeNest.media đồng hành cùng doanh nghiệp trong quá trình triển khai <a href="https://homenest.media/dich-vu-homenest/digital-marketing/" target="_blank" rel="noopener"><strong>digital marketing tổng thể</strong></a>, từ phân tích website, xây dựng chiến lược đến thực hiện và tối ưu SEO. Quy trình hướng đến cải thiện hiệu suất tìm kiếm, thu hút khách hàng tiềm năng và hỗ trợ doanh nghiệp đạt được mục tiêu kinh doanh.
                    </p>
                </div>

                <ul class="procedureList">
                    <?php foreach ( $procedures as $index => $item ) : ?>
                        <?php
                        $num = sprintf( '%02d', $index + 1 );
                        $is_active = ( $index === 0 );
                        ?>
                        <li
                            class="procedureItem <?php echo $is_active ? 'procedureItemActive' : ''; ?>"
                            style="background-image: linear-gradient(to bottom, #00000000, #000000), url('<?php echo esc_url( $item['img'] ); ?>');"
                        >
                            <div class="procedureCollapsed">
                                <div class="procedureCollapsedNumber"><?php echo esc_html( $num ); ?>.</div>
                                <div class="procedureCollapsedTitle"><?php echo esc_html( $item['heading'] ); ?></div>
                            </div>
                            <div class="procedureExpanded">
                                <div class="procedureExpandedNumber"><?php echo esc_html( $num ); ?>.</div>
                                <h3 class="procedureExpandedTitle"><?php echo esc_html( $item['heading'] ); ?></h3>
                                <p class="procedureExpandedDesc"><?php echo esc_html( $item['content'] ); ?></p>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>

    <!-- 10. SERVICE WHY TRUST SECTION -->
    <?php
    $why_trust_items = array(
        array(
            'title' => 'Chiến lược SEO gắn với mục tiêu kinh doanh',
            'desc'  => 'HomeNest.media xây dựng định hướng SEO dựa trên tình trạng website, lĩnh vực hoạt động và mục tiêu phát triển của doanh nghiệp.',
        ),
        array(
            'title' => 'Tối ưu toàn diện website',
            'desc'  => 'Kết hợp tối ưu kỹ thuật, cấu trúc website và nội dung nhằm cải thiện khả năng hiển thị trên Google và nâng cao trải nghiệm người dùng.',
        ),
        array(
            'title' => 'Triển khai có kế hoạch, theo dõi rõ ràng',
            'desc'  => 'Các hạng mục SEO được xác định theo lộ trình, kết hợp theo dõi dữ liệu và báo cáo để đánh giá hiệu quả, điều chỉnh khi cần thiết',
        ),
        array(
            'title' => 'Định hướng tăng trưởng dài hạn',
            'desc'  => 'Tập trung phát triển nền tảng tìm kiếm tự nhiên, hỗ trợ doanh nghiệp tiếp cận khách hàng tiềm năng và giảm sự phụ thuộc vào quảng cáo trả phí.',
        ),
    );
    ?>
    <section class="serviceWhyTrust section">
        <div class="container">
            <div class="serviceWhyTrustWrapper">
                <header class="serviceWhyTrustHeader">
                    <h2 class="serviceWhyTrustTitle">
                        Vì sao doanh nghiệp nên tin tưởng <span class="textGradient">Dịch vụ SEO tổng thể</span> tại HomeNest.media
                    </h2>
                </header>
                <div class="serviceWhyTrustContent">
                    <div class="serviceWhyTrustColImage">
                        <img
                            class="serviceWhyTrustImage"
                            src="<?php echo esc_url( $theme_uri . '/assets/images/why-trust-services.webp' ); ?>"
                            alt="Vì sao doanh nghiệp nên tin tưởng Dịch vụ SEO tổng thể"
                            width="1009"
                            height="729"
                            loading="lazy"
                        >
                    </div>
                    <ul class="serviceWhyTrustList">
                        <?php foreach ( $why_trust_items as $item ) : ?>
                            <li class="serviceWhyTrustItem">
                                <span class="serviceWhyTrustItemIcon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="17.667 15 20.666 26" fill="none"><path d="M37.333 40 28 33.333 18.667 40V18.667A2.667 2.667 0 0 1 21.333 16h13.334a2.667 2.667 0 0 1 2.666 2.667z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </span>
                                <div class="serviceWhyTrustItemBody">
                                    <h3 class="serviceWhyTrustItemTitle"><?php echo esc_html( $item['title'] ); ?></h3>
                                    <div class="serviceWhyTrustItemDesc"><?php echo esc_html( $item['desc'] ); ?></div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- 11. SERVICE BENEFITS SECTION -->
    <?php
    $benefits = array(
        array(
            'title' => 'Tăng Traffic tự nhiên',
            'desc'  => 'Tối ưu nội dung và cấu trúc website giúp cải thiện khả năng hiển thị trên Google, tiếp cận người dùng đang tìm kiếm sản phẩm và dịch vụ của doanh nghiệp.',
        ),
        array(
            'title' => 'Giảm chi phí quảng cáo',
            'desc'  => 'SEO giúp doanh nghiệp phát triển nguồn truy cập tự nhiên, giảm sự phụ thuộc vào quảng cáo trả phí và xây dựng kênh tiếp cận khách hàng dài hạn.',
        ),
        array(
            'title' => 'Tăng tỉ lệ chuyển đổi khách hàng',
            'desc'  => 'Tối ưu nội dung, trải nghiệm người dùng và hành trình chuyển đổi giúp khách hàng dễ dàng tìm thấy thông tin, đánh giá dịch vụ và thực hiện hành động phù hợp.',
        ),
    );
    ?>
    <section class="serviceBenefits section">
        <div class="serviceBenefitsWrapper">
            <div class="serviceBenefitsColImage">
                <img
                    class="serviceBenefitsImage"
                    src="<?php echo esc_url( $theme_uri . '/assets/images/dich-vu-SEO-tong-the-2.webp' ); ?>"
                    alt="Giá trị vượt trội từ dịch vụ SEO tổng thể"
                    width="1207"
                    height="829"
                    loading="lazy"
                >
            </div>
            <div class="serviceBenefitsContent">
                <h2 class="serviceBenefitsTitle">
                    <span class="textGradient">Giá trị vượt trội từ dịch vụ SEO tổng thể</span>
                </h2>
                <div class="serviceBenefitsList">
                    <?php foreach ( $benefits as $idx => $b ) : ?>
                        <div class="serviceBenefitsItem">
                            <div class="serviceBenefitsItemBadge">
                                <span class="serviceBenefitsItemNumber textGradient manrope">
                                    <?php echo sprintf( '%02d', $idx + 1 ); ?>
                                </span>
                            </div>
                            <div class="serviceBenefitsItemBody">
                                <h3 class="serviceBenefitsItemTitle"><?php echo esc_html( $b['title'] ); ?></h3>
                                <div class="serviceBenefitsItemDesc"><?php echo esc_html( $b['desc'] ); ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="serviceBenefitsAction">
                    <a href="https://zalo.me/+84708070888" target="_blank" rel="noopener noreferrer" class="btnTransparentToGradient">
                        <span class="btnInner">
                            <span class="btnIconLeft" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M388.819 239.537 156.092 6.816c-9.087-9.089-23.824-9.089-32.912.002-9.087 9.089-9.087 23.824.002 32.912l216.27 216.266-216.273 216.276c-9.087 9.089-9.087 23.824.002 32.912A23.2 23.2 0 0 0 139.636 512a23.2 23.2 0 0 0 16.457-6.817L388.819 272.45a23.27 23.27 0 0 0 0-32.913"/></svg>
                            </span>
                            <span class="btnText">Tư vấn ngay</span>
                            <span class="btnIconRight" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M388.819 239.537 156.092 6.816c-9.087-9.089-23.824-9.089-32.912.002-9.087 9.089-9.087 23.824.002 32.912l216.27 216.266-216.273 216.276c-9.087 9.089-9.087 23.824.002 32.912A23.2 23.2 0 0 0 139.636 512a23.2 23.2 0 0 0 16.457-6.817L388.819 272.45a23.27 23.27 0 0 0 0-32.913"/></svg>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 12. FAQ SECTION -->
    <?php
    $faqs = array(
        array(
            'q' => 'SEO tổng thể là gì ?',
            'a' => '<p>SEO tổng thể là chiến lược tối ưu hóa toàn diện website để tăng cường hiệu quả hiển thị trên công cụ tìm kiếm, bao gồm cả SEO on-page, off-page, và trải nghiệm người dùng (UX/UI). Nó không chỉ tập trung vào từ khóa mà còn cải thiện tổng thể chất lượng và hiệu suất của website.</p>',
        ),
        array(
            'q' => 'SEO tổng thể mang lại lợi ích gì ?',
            'a' => '<p>SEO tổng thể mang lại nhiều lợi ích quan trọng, giúp doanh nghiệp xây dựng nền tảng bền vững trên môi trường trực tuyến.</p>
                    <p><strong>Tăng khả năng hiển thị và lưu lượng truy cập tự nhiên:</strong> SEO tổng thể giúp website xuất hiện trên nhiều từ khóa và truy vấn liên quan, thu hút lưu lượng truy cập ổn định mà không phụ thuộc vào quảng cáo.</p>
                    <p><strong>Cải thiện trải nghiệm người dùng:</strong> Website được tối ưu hóa kỹ thuật, tốc độ tải nhanh, thân thiện với thiết bị di động và dễ điều hướng, mang lại trải nghiệm tốt hơn cho khách hàng.</p>
                    <p><strong>Xây dựng uy tín và thương hiệu:</strong> Thứ hạng cao trên công cụ tìm kiếm không chỉ tăng cường nhận diện mà còn củng cố niềm tin của khách hàng vào thương hiệu.</p>
                    <p><strong>Tăng tỷ lệ chuyển đổi:</strong> Bằng cách đáp ứng đúng nhu cầu tìm kiếm, SEO tổng thể thu hút khách hàng tiềm năng và thúc đẩy họ thực hiện các hành động giá trị như mua hàng hay đăng ký dịch vụ.</p>
                    <p><strong>Hiệu quả chi phí dài hạn:</strong> Đầu tư SEO tổng thể mang lại kết quả bền vững, giảm chi phí cho quảng cáo và duy trì lưu lượng truy cập tự nhiên trong thời gian dài.</p>
                    <p><strong>Bền vững trước các thay đổi thuật toán:</strong> Tập trung vào chất lượng và tối ưu toàn diện giúp website ổn định, ít bị ảnh hưởng bởi những thay đổi từ Google.</p>
                    <p><strong>Nâng cao khả năng cạnh tranh:</strong> Website được tối ưu toàn diện dễ dàng vượt qua đối thủ chưa đầu tư hoặc không có chiến lược SEO bài bản.</p>
                    <p>SEO tổng thể không chỉ cải thiện hiệu suất website mà còn đóng vai trò chiến lược trong việc phát triển thương hiệu và tăng trưởng doanh thu dài hạn.</p>',
        ),
        array(
            'q' => 'Khác biệt giữa SEO tổng thể và SEO từ khóa là gì ?',
            'a' => '<ul>
                        <li><strong>SEO tổng thể:</strong> Tập trung vào toàn bộ cấu trúc, nội dung, và hiệu suất website, nhằm tăng thứ hạng bền vững trên nhiều từ khóa.</li>
                        <li><strong>SEO từ khóa:</strong> Chỉ tập trung tối ưu một số từ khóa chính, thường dễ bị cạnh tranh và không lâu dài.</li>
                    </ul>
                    <p>Tùy vào mục tiêu sử dụng mà chọn các loại SEO khác nhau, hoặc có thể sử dụng đồng thời cả 2 loại để có thể nhận được lợi ích từ 2 loại SEO kể trên, mang lại quá trình tổng thể hiệu quả hơn.</p>',
        ),
        array(
            'q' => 'Tại sao SEO tổng thể quan trọng hơn trong thời đại hiện nay ?',
            'a' => '<p>Vì hành vi người dùng ngày càng đa dạng, họ không chỉ tìm kiếm bằng từ khóa chính mà còn sử dụng từ khóa dài, câu hỏi, hoặc truy vấn cụ thể. SEO tổng thể giúp website đáp ứng được nhiều loại nhu cầu tìm kiếm khác nhau. Vì thế SEO dần phổ biến hơn, cũng là công cụ nổi bật để có thể tiếp cận những khách hàng mục tiêu thông qua Google.</p>',
        ),
        array(
            'q' => 'Các yếu tố quan trọng trong SEO tổng thể là gì ?',
            'a' => '<ul>
                        <li><strong>Tối ưu nội dung:</strong> Cung cấp nội dung chất lượng, phù hợp nhu cầu người dùng.</li>
                        <li><strong>Tối ưu kỹ thuật:</strong> Cải thiện tốc độ tải trang, cấu trúc URL, bảo mật (HTTPS), và khả năng tương thích trên thiết bị di động.</li>
                        <li><strong>Xây dựng liên kết:</strong> Tạo ra liên kết chất lượng từ các website uy tín.</li>
                        <li><strong>Trải nghiệm người dùng (UX):</strong> Thiết kế giao diện trực quan, dễ sử dụng, giảm tỷ lệ thoát trang.</li>
                        <li><strong>Phân tích dữ liệu:</strong> Theo dõi hành vi người dùng và hiệu suất qua các công cụ như Google Analytics, Search Console.</li>
                    </ul>',
        ),
        array(
            'q' => 'Làm sao để biết website của mình có cần SEO tổng thể không ?',
            'a' => '<p>Bạn nên kiểm tra các yếu tố sau:</p>
                    <ul>
                        <li>Website không hiển thị ở vị trí cao khi tìm kiếm từ khóa liên quan.</li>
                        <li>Tốc độ tải trang chậm hoặc không thân thiện với thiết bị di động.</li>
                        <li>Nội dung không hấp dẫn hoặc không đáp ứng được nhu cầu người dùng.</li>
                        <li>Lượng truy cập giảm hoặc không ổn định.</li>
                    </ul>',
        ),
        array(
            'q' => 'Chi phí SEO tổng thể thường là bao nhiêu ?',
            'a' => '<p>Chi phí tùy thuộc vào quy mô website, ngành nghề kinh doanh, và mức độ cạnh tranh. Một số công ty tính phí từ vài triệu đến hàng chục triệu đồng mỗi tháng.</p>
                    <p>Bạn có thể liên hệ ngay với HomeNest để có thể được tư vấn những gói dịch vụ phù hợp, với mức giá tốt, cũng như chất lượng cho doanh nghiệp của bạn.</p>',
        ),
        array(
            'q' => 'Thời gian để thấy kết quả của SEO tổng thể là bao lâu ?',
            'a' => '<p>Thông thường, cần từ 3-6 tháng để thấy sự cải thiện rõ rệt, nhưng điều này còn phụ thuộc vào chất lượng website hiện tại và ngành nghề của bạn.</p>
                    <p>Tại HomeNest bạn có thể an tâm về việc này, với nhiều năm kinh nghiệm trong việc SEO cho nhiều đối tác khác nhau, HomeNest cam kết mang lại những kết quả rõ ràng và nhanh chóng cho thương hiệu.</p>',
        ),
        array(
            'q' => 'Công cụ nào hỗ trợ SEO tổng thể hiệu quả ?',
            'a' => '<ul>
                        <li><strong>Google Search Console:</strong> Để kiểm tra hiệu suất và các vấn đề kỹ thuật.</li>
                        <li><strong>Google Analytics:</strong> Phân tích lưu lượng truy cập.</li>
                        <li><strong>Ahrefs, SEMrush, Moz:</strong> Nghiên cứu từ khóa và đối thủ cạnh tranh.</li>
                        <li><strong>Screaming Frog:</strong> Kiểm tra cấu trúc và lỗi kỹ thuật trên website.</li>
                    </ul>',
        ),
    );
    ?>
    <?php
    get_template_part( 'template-parts/section/faq', null, array(
        'title' => 'Câu hỏi thường gặp về dịch vụ SEO tổng thể',
        'faqs'  => $faqs,
        'class' => 'section',
    ) );
    ?>

    <!-- 13. SERVICE REVIEW SECTION -->
    <?php
    $reviews = array(
        array(
            'quote'  => '“HomeNest.media giúp chúng tôi có cái nhìn rõ ràng hơn về tình trạng website và định hướng SEO. Quy trình làm việc có kế hoạch, các hạng mục được trao đổi cụ thể và dễ theo dõi.”',
            'author' => 'Nguyễn Minh Anh, Quản lí Marketing',
        ),
        array(
            'quote'  => '“Sau hơn 6 tháng hợp tác triển khai SEO tổng thể cùng HomeNest.media, lưu lượng truy cập tự nhiên tăng hơn 250%, tỷ lệ chuyển đổi khách hàng tiềm năng cải thiện rõ rệt.”',
            'author' => 'Trần Quốc Huy, Giám đốc Kinh doanh',
        ),
        array(
            'quote'  => '“Chiến lược SEO của HomeNest.media không chỉ tập trung vào thứ hạng từ khóa mà còn tối ưu sâu về mặt kỹ thuật và trải nghiệm người dùng, mang lại hiệu quả bền vững cho thương hiệu.”',
            'author' => 'Lê Hoàng Yến, Trưởng phòng Truyền thông',
        ),
    );
    ?>
    <section class="serviceReview section">
        <div class="fullwidth">
            <div class="serviceReviewWrapper">
                <img
                    class="serviceReviewBackground"
                    src="<?php echo esc_url( $theme_uri . '/assets/images/review-service-section.webp' ); ?>"
                    alt="Review Service Section"
                    width="2560"
                    height="1707"
                    loading="lazy"
                >
                <div class="serviceReviewColSlider">
                    <div class="serviceReviewSlider">
                        <?php foreach ( $reviews as $idx => $r ) : ?>
                            <div class="serviceReviewSlideItem <?php echo $idx === 0 ? 'active' : ''; ?>">
                                <span class="serviceReviewQuoteIcon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"><path d="M148.57 63.619H72.162C32.31 63.619 0 95.929 0 135.781v76.408c0 39.852 32.31 72.161 72.162 72.161h7.559a19.26 19.26 0 0 1 15.87 8.362 19.25 19.25 0 0 1 2.074 17.811L54.568 422.208a19.24 19.24 0 0 0 2.074 17.81 19.26 19.26 0 0 0 15.87 8.362h50.738c7.157 0 13.73-3.981 17.041-10.318l61.257-117.03a168.4 168.4 0 0 0 19.198-78.072V135.78c.002-39.851-32.324-72.161-72.176-72.161m291.27 0h-76.41c-39.852 0-72.16 32.31-72.16 72.162v76.408c0 39.852 32.309 72.161 72.16 72.161h7.543a19.24 19.24 0 0 1 15.87 8.362 19.25 19.25 0 0 1 2.091 17.811l-43.113 111.686a19.2 19.2 0 0 0 2.09 17.81 19.22 19.22 0 0 0 15.871 8.362h50.722c7.157 0 13.73-3.981 17.058-10.318l61.24-117.03A168.4 168.4 0 0 0 512 242.96V135.78c0-39.851-32.309-72.161-72.16-72.161"/></svg>
                                </span>
                                <p class="serviceReviewQuoteText"><?php echo esc_html( $r['quote'] ); ?></p>
                                <p class="serviceReviewAuthor">-- <?php echo esc_html( $r['author'] ); ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="serviceReviewNav">
                        <button type="button" class="serviceReviewNavButton prev" aria-label="Previous review">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M172.548 256.005 388.82 39.729c9.089-9.089 9.089-23.824 0-32.912s-23.824-9.089-32.912.002L123.18 239.551a23.26 23.26 0 0 0-6.817 16.454 23.28 23.28 0 0 0 6.817 16.457l232.727 232.721c4.543 4.544 10.499 6.816 16.455 6.816s11.913-2.271 16.457-6.817c9.089-9.089 9.089-23.824 0-32.912z"/></svg>
                        </button>
                        <button type="button" class="serviceReviewNavButton next" aria-label="Next review">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M388.819 239.537 156.092 6.816c-9.087-9.089-23.824-9.089-32.912.002-9.087 9.089-9.087 23.824.002 32.912l216.27 216.266-216.273 216.276c-9.087 9.089-9.087 23.824.002 32.912A23.2 23.2 0 0 0 139.636 512a23.2 23.2 0 0 0 16.457-6.817L388.819 272.45a23.27 23.27 0 0 0 0-32.913"/></svg>
                        </button>
                    </div>
                </div>
                <div class="serviceReviewColContent">
                    <h2 class="serviceReviewTitle">HomeNest.media với bộ giải pháp All-In-One là lựa chọn hoàn hảo để tối ưu SEO doanh nghiệp của bạn.</h2>

                    <div class="serviceReviewStat">
                        <p class="serviceReviewStatNumber manrope">250+</p>
                        <p class="serviceReviewStatLabel">Khách hàng hài lòng</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
