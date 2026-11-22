<?php
/**
 * The template for displaying the front page
 * HomeNest.media Front Page
 */
get_header();

$theme_uri = get_template_directory_uri();
?>

<!-- 1. HERO SECTION -->
<section class="heroSection">
    <div class="fullwidth fullWidth">
        <div class="heroWrapper">
            <div class="heroVideo">
                <video src="<?php echo esc_url( $theme_uri . '/assets/videos/homnest_media.mp4' ); ?>" autoplay loop muted playsinline></video>
            </div>

            <div class="heroContent">
                <!-- Giới thiệu -->
                <div class="heroIntro">
                    <img
                        class="heroIntroImage"
                        src="<?php echo esc_url( $theme_uri . '/assets/images/hero_section/hero_banner_1.webp' ); ?>"
                        alt="Customer Satisfaction"
                        width="347"
                        height="350"
                        loading="lazy"
                    >
                    <h2 class="heroIntroTitle">Đối tác đáng tin cậy</h2>
                    <p class="heroIntroText">
                        &ldquo;HomeNest.media là đối tác tin cậy, cung cấp các giải pháp marketing và truyền thông toàn diện để giúp doanh nghiệp của bạn phát triển bền vững. Từ Digital Marketing, Branding, Thiết kế logo, Sáng tạo Video, đến Tổ chức sự kiện và Quảng cáo ngoài trời, chúng tôi đồng hành cùng bạn trên mọi bước đường.&rdquo;
                    </p>
                    <div class="heroButton">
                        <a href="https://zalo.me/0986833838" class="buttonBottomRight" target="_blank" rel="noopener noreferrer" aria-label="Gửi tin nhắn Zalo">
                            <span class="iconHover">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"><path d="M388.819 239.537 156.092 6.816c-9.087-9.089-23.824-9.089-32.912.002-9.087 9.089-9.087 23.824.002 32.912l216.27 216.266-216.273 216.276c-9.087 9.089-9.087 23.824.002 32.912A23.2 23.2 0 0 0 139.636 512a23.2 23.2 0 0 0 16.457-6.817L388.819 272.45a23.27 23.27 0 0 0 0-32.913"/></svg>
                            </span>
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"><path d="M388.819 239.537 156.092 6.816c-9.087-9.089-23.824-9.089-32.912.002-9.087 9.089-9.087 23.824.002 32.912l216.27 216.266-216.273 216.276c-9.087 9.089-9.087 23.824.002 32.912A23.2 23.2 0 0 0 139.636 512a23.2 23.2 0 0 0 16.457-6.817L388.819 272.45a23.27 23.27 0 0 0 0-32.913"/></svg>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Thống kê: kinh nghiệm -->
                <div class="heroStat">
                    <img
                        class="heroStatImage"
                        src="<?php echo esc_url( $theme_uri . '/assets/images/hero_section/hero_banner_2.webp' ); ?>"
                        alt="Customer Satisfaction"
                        width="347"
                        height="350"
                        loading="lazy"
                    >
                    <h2 class="heroStatTitle">Năm kinh nghiệm</h2>
                    <div class="heroStatInfo">
                        <p class="heroStatNumber">10+</p>
                        <p class="heroStatLabel">Kinh nghiệm thực chiến</p>
                    </div>
                    <div class="heroButton">
                        <a href="https://zalo.me/0986833838" class="buttonBottomRight" target="_blank" rel="noopener noreferrer" aria-label="Gửi tin nhắn Zalo">
                            <span class="iconHover">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"><path d="M388.819 239.537 156.092 6.816c-9.087-9.089-23.824-9.089-32.912.002-9.087 9.089-9.087 23.824.002 32.912l216.27 216.266-216.273 216.276c-9.087 9.089-9.087 23.824.002 32.912A23.2 23.2 0 0 0 139.636 512a23.2 23.2 0 0 0 16.457-6.817L388.819 272.45a23.27 23.27 0 0 0 0-32.913"/></svg>
                            </span>
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"><path d="M388.819 239.537 156.092 6.816c-9.087-9.089-23.824-9.089-32.912.002-9.087 9.089-9.087 23.824.002 32.912l216.27 216.266-216.273 216.276c-9.087 9.089-9.087 23.824.002 32.912A23.2 23.2 0 0 0 139.636 512a23.2 23.2 0 0 0 16.457-6.817L388.819 272.45a23.27 23.27 0 0 0 0-32.913"/></svg>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Thống kê: khách hàng -->
                <div class="heroStat">
                    <img
                        class="heroStatImage"
                        src="<?php echo esc_url( $theme_uri . '/assets/images/hero_section/hero_banner_3.png' ); ?>"
                        alt="Customer Satisfaction"
                        width="156"
                        height="172"
                        loading="lazy"
                    >
                    <h2 class="heroStatTitle">Với sự hài lòng</h2>
                    <div class="heroStatInfo">
                        <p class="heroStatNumber">250+</p>
                        <p class="heroStatLabel">Khách hàng mới mỗi năm</p>
                    </div>
                    <div class="heroButton">
                        <a href="https://zalo.me/0986833838" class="buttonBottomRight" target="_blank" rel="noopener noreferrer" aria-label="Gửi tin nhắn Zalo">
                            <span class="iconHover">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"><path d="M388.819 239.537 156.092 6.816c-9.087-9.089-23.824-9.089-32.912.002-9.087 9.089-9.087 23.824.002 32.912l216.27 216.266-216.273 216.276c-9.087 9.089-9.087 23.824.002 32.912A23.2 23.2 0 0 0 139.636 512a23.2 23.2 0 0 0 16.457-6.817L388.819 272.45a23.27 23.27 0 0 0 0-32.913"/></svg>
                            </span>
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"><path d="M388.819 239.537 156.092 6.816c-9.087-9.089-23.824-9.089-32.912.002-9.087 9.089-9.087 23.824.002 32.912l216.27 216.266-216.273 216.276c-9.087 9.089-9.087 23.824.002 32.912A23.2 23.2 0 0 0 139.636 512a23.2 23.2 0 0 0 16.457-6.817L388.819 272.45a23.27 23.27 0 0 0 0-32.913"/></svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. SERVICE SECTION -->
<section class="serviceSection">
    <div class="container">
        <div class="serviceWrapper">
            <div class="serviceIntro">
                <h2 class="serviceTitle">
                    <span>Cùng doanh nghiệp</span><br>
                    <span class="textGradient">xây dựng dấu ấn riêng</span>
                </h2>
                <div class="serviceStat">
                    <p class="serviceStatNumber" data-text="5K+">5K+</p>
                    <p class="serviceStatLabel">Hài lòng của khách hàng về dịch vụ</p>
                </div>
            </div>
            <div class="serviceList">
                <div class="serviceCard">
                    <h3 class="serviceCardTitle"><span class="textGradient">Branding</span></h3>
                    <p class="serviceCardText">Dịch vụ Branding của HomeNest.media giúp xây dựng thương hiệu mạnh mẽ, khác biệt và gắn kết với khách hàng thông qua chiến lược sáng tạo, thiết kế chuyên nghiệp và giải pháp toàn diện.</p>
                </div>
                <div class="serviceCard">
                    <h3 class="serviceCardTitle"><span class="textGradient">Digital Marketing</span></h3>
                    <p class="serviceCardText">Dịch vụ Digital Marketing của HomeNest.media mang đến chiến lược trực tuyến đột phá, kết hợp SEO, quảng cáo và nội dung sáng tạo để thúc đẩy sự tăng trưởng vượt trội, tối đa hóa chuyển đổi và xây dựng thương hiệu mạnh mẽ trên mọi nền tảng số.</p>
                </div>
                <div class="serviceCard">
                    <h3 class="serviceCardTitle"><span class="textGradient">Thi Công Quảng Cáo</span></h3>
                    <p class="serviceCardText">Dịch vụ thi công quảng cáo của HomeNest.media mang đến những giải pháp sáng tạo, từ thiết kế đến thi công, giúp thương hiệu của bạn nổi bật và gây ấn tượng mạnh mẽ, thu hút sự chú ý và tạo dấu ấn khó quên trong lòng khách hàng.</p>
                </div>
                <div class="serviceCard">
                    <h3 class="serviceCardTitle"><span class="textGradient">Tổ Chức Sự Kiện</span></h3>
                    <p class="serviceCardText">Dịch vụ tổ chức sự kiện của HomeNest.media chuyên tạo ra những trải nghiệm ấn tượng và chuyên nghiệp, từ lên ý tưởng đến thực thi, đảm bảo mỗi sự kiện đều mang lại dấu ấn khó quên và kết nối mạnh mẽ với khách tham dự.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. CREATION SECTION -->
<section class="creationSection">
    <div class="fullwidth fullWidth">
        <div class="creationWrapper">
            <div class="creationMedia">
                <img
                    class="creationMediaImage"
                    src="<?php echo esc_url( $theme_uri . '/assets/images/creation/Creation_1.webp' ); ?>"
                    alt="Logo HomeNest.media"
                    width="2483"
                    height="2560"
                    loading="lazy"
                >
                <div class="creationPanel">
                    <img
                        class="creationPanelImage"
                        src="<?php echo esc_url( $theme_uri . '/assets/images/hero_section/hero_banner_2.webp' ); ?>"
                        alt="Logo HomeNest.media"
                        width="1570"
                        height="1707"
                        loading="lazy"
                    >
                    <div class="creationStat">
                        <p class="creationStatNumber">1K+</p>
                        <p class="creationStatLabel">Dự án đã thực hiện</p>
                    </div>
                    <div class="creationStat">
                        <p class="creationStatNumber">250+</p>
                        <p class="creationStatLabel">Khách hàng mới mỗi năm</p>
                    </div>
                </div>
            </div>

            <div class="creationContent">
                <img
                    class="creationLogo"
                    src="<?php echo esc_url( $theme_uri . '/assets/images/logo/logo-big_homenest-media.webp' ); ?>"
                    alt="Logo HomeNest.media"
                    width="2560"
                    height="681"
                    loading="lazy"
                >

                <h2 class="creationTitle">
                    Kiến tạo <br><span class="textGradient">thành công bền vững</span>
                </h2>

                <div class="creationDescription">
                    <p class="creationDescriptionText">
                        Với hơn 10 năm kinh nghiệm trong Branding, Digital Marketing, Quảng cáo và Event, chúng tôi biến ý tưởng thành kết quả, đồng hành cùng doanh nghiệp chinh phục thành công bền vững.
                    </p>
                    <p class="creationDescriptionText">
                        Cùng chúng tôi khai phá tiềm năng, tỏa sáng và dẫn đầu trong môi trường số!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. BRAND STORY SECTION -->
<section class="brandStorySection">
    <div class="container">
        <div class="brandStoryWrapper">
            <article class="brandStoryContent">
                <header class="brandStoryIntro">
                    <h2 class="brandStoryTitle">
                        <span class="textGradient">Định hình giá trị thương hiệu</span> là cả một hành trình
                    </h2>
                    <hr class="brandStoryDivider">
                    <p class="brandStoryText">
                        <strong class="textGradient">&ldquo;Not just service, we accompany your development&rdquo;</strong> không chỉ là slogan, mà còn là cam kết của HomeNest.media với khách hàng. Đây là triết lý kinh doanh của HomeNest.media – nơi mà khách hàng không chỉ nhận được dịch vụ chất lượng mà còn có một đối tác tin cậy, sẵn sàng hỗ trợ khách hàng trong mọi giai đoạn phát triển.
                    </p>
                </header>

                <ol class="brandStoryList">
                    <li class="brandStoryItem">
                        <span class="brandStoryItemNumber textStrokeGradient" data-text="01">01</span>
                        <div class="brandStoryItemContent">
                            <h3 class="brandStoryItemTitle"><span class="textGradient">Tầm nhìn</span></h3>
                            <p class="brandStoryItemText">Với tầm nhìn thúc đẩy sự phát triển bền vững cho doanh nghiệp, chúng tôi hướng tới vị thế tiên phong trong lĩnh vực marketing và thiết kế website, bằng cách mang đến cho khách hàng những giải pháp toàn diện, hiệu quả vượt trội và sự đột phá sáng tạo.</p>
                        </div>
                    </li>
                    <li class="brandStoryItem">
                        <span class="brandStoryItemNumber textStrokeGradient" data-text="02">02</span>
                        <div class="brandStoryItemContent">
                            <h3 class="brandStoryItemTitle"><span class="textGradient">Sứ mệnh</span></h3>
                            <p class="brandStoryItemText">Vì sự phát triển của thương hiệu Việt, HomeNest.media được thành lập nhằm giúp các doanh nghiệp nâng cao lợi thế cạnh tranh thông qua việc xây dựng thương hiệu mạnh mẽ.</p>
                        </div>
                    </li>
                    <li class="brandStoryItem">
                        <span class="brandStoryItemNumber textStrokeGradient" data-text="03">03</span>
                        <div class="brandStoryItemContent">
                            <h3 class="brandStoryItemTitle"><span class="textGradient">Giá trị cốt lõi</span></h3>
                            <p class="brandStoryItemText">Tận tâm – Sáng tạo – Hợp tác – Cam kết – Hiệu quả. Chúng tôi giúp doanh nghiệp phát triển bền vững, đồng hành cùng sự thành công của bạn.</p>
                        </div>
                    </li>
                </ol>
            </article>

            <figure class="brandStoryMedia">
                <img
                    class="brandStoryImage"
                    src="<?php echo esc_url( $theme_uri . '/assets/images/brand-story/brand-story_image.webp' ); ?>"
                    alt="Brand Story"
                    width="1080"
                    height="1920"
                    loading="lazy"
                >
            </figure>
        </div>
    </div>
</section>

<!-- 5. PROJECT SECTION (MARQUEE) -->
<?php
$projects = array(
    array( 'img' => '/assets/images/project/project_01.webp', 'title' => 'Nhận diện thương hiệu Lái Thiêu' ),
    array( 'img' => '/assets/images/project/project_02.webp', 'title' => 'Company Profile Phúc Thành Phát (PTP)' ),
    array( 'img' => '/assets/images/project/project_03.webp', 'title' => 'Nhận diện thương hiệu Mekong Technology' ),
    array( 'img' => '/assets/images/project/project_04.webp', 'title' => 'Nhận diện thương hiệu Nuage Sauvage' ),
    array( 'img' => '/assets/images/project/project_05.webp', 'title' => 'Nhận diện thương hiệu Bs. Sắc' ),
    array( 'img' => '/assets/images/project/project_06.webp', 'title' => 'Nhận diện thương hiệu Dava Aesthetic' ),
    array( 'img' => '/assets/images/project/project_07.webp', 'title' => 'Nhận diện thương hiệu camlamonline.com' ),
    array( 'img' => '/assets/images/project/project_08.webp', 'title' => 'Nhận diện thương hiệu Green Nutri' ),
    array( 'img' => '/assets/images/project/project_09.webp', 'title' => 'Nhận diện thương hiệu Khanh Phong Plastics' ),
    array( 'img' => '/assets/images/project/project_10.webp', 'title' => 'Nhận diện thương hiệu NST Tech Industrial Fan' ),
    array( 'img' => '/assets/images/project/project_11.webp', 'title' => 'Nhận diện thương hiệu SON & Co.' ),
    array( 'img' => '/assets/images/project/project_12.webp', 'title' => 'Nhận diện thương hiệu Evora' ),
);
$project_chunks = array_chunk( $projects, 4 );
?>
<section class="projectSection">
    <div class="container">
        <header class="projectHeader">
            <h2 class="projectTitle">Ý tưởng thành hình, thương hiệu vươn xa</h2>
            <p class="projectDescription">
                Chúng tôi tự hào mang đến những giải pháp toàn diện và hiệu quả vượt trội, giúp doanh nghiệp phát triển bền vững và chinh phục thành công trong môi trường số.
            </p>
        </header>
    </div>

    <div class="projectWrapper">
        <div class="projectMarquee">
            <div class="projectMarqueeTrack">
                <?php for ( $copy = 0; $copy < 2; $copy++ ) : ?>
                    <?php foreach ( $project_chunks as $chunk ) : ?>
                        <ul class="projectMarqueeGroup" <?php echo $copy > 0 ? 'aria-hidden="true"' : ''; ?>>
                            <?php foreach ( $chunk as $p ) : ?>
                                <li class="projectMarqueeItem">
                                    <img
                                        class="projectMarqueeImage"
                                        src="<?php echo esc_url( $theme_uri . $p['img'] ); ?>"
                                        alt="<?php echo esc_attr( $p['title'] ); ?>"
                                        loading="lazy"
                                    >
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endforeach; ?>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>

<!-- 6. TEAM SECTION (TICKER MARQUEE) -->
<?php
$team_row_1 = array(
    array( 'type' => 'photo', 'src' => '/assets/images/team/Nguyen-DEV.jpg', 'alt' => 'Nguyen' ),
    array( 'type' => 'photo', 'src' => '/assets/images/team/Ngoc-Anh-DEV.jpg', 'alt' => 'Ngoc Anh' ),
    array( 'type' => 'photo', 'src' => '/assets/images/team/Long-UXUI.jpg', 'alt' => 'Long' ),
    array( 'type' => 'quote', 'text' => '10+ năm kinh nghiệm' ),
    array( 'type' => 'photo', 'src' => '/assets/images/team/Huy-DEV.jpg', 'alt' => 'Huy' ),
    array( 'type' => 'quote', 'text' => 'Chi phí cạnh tranh Bảo mật quyền sở hữu' ),
    array( 'type' => 'photo', 'src' => '/assets/images/team/Hoang-Nguyen-DEV.jpg', 'alt' => 'Hoang Nguyen' ),
    array( 'type' => 'quote', 'text' => 'Có trụ sở ở các thành phố lớn tại Việt Nam' ),
    array( 'type' => 'photo', 'src' => '/assets/images/team/Duy-DEV.jpg', 'alt' => 'Duy' ),
    array( 'type' => 'photo', 'src' => '/assets/images/team/Dung-DEV.jpg', 'alt' => 'Dung' ),
    array( 'type' => 'photo', 'src' => '/assets/images/team/Tai-BA-tai-HomeNest-Viet-Nam.jpg', 'alt' => 'Tai' ),
    array( 'type' => 'photo', 'src' => '/assets/images/team/Hoang-Developer.jpg', 'alt' => 'Hoang' ),
    array( 'type' => 'photo', 'src' => '/assets/images/team/Hang-BA-tai-HomeNest-Viet-Nam.jpg', 'alt' => 'Hang' ),
    array( 'type' => 'photo', 'src' => '/assets/images/team/Yen-Tester-tai-HomeNest-Viet-Nam.jpg', 'alt' => 'Yen' ),
    array( 'type' => 'photo', 'src' => '/assets/images/team/Vu-Anh-Developer.jpg', 'alt' => 'Vu Anh' ),
    array( 'type' => 'photo', 'src' => '/assets/images/team/Hung-Developer.jpg', 'alt' => 'Hung' ),
    array( 'type' => 'photo', 'src' => '/assets/images/team/Thuc-AI-engineer.jpg', 'alt' => 'Thuc' ),
    array( 'type' => 'photo', 'src' => '/assets/images/team/Tin-AI-engineer.jpg', 'alt' => 'Tin' ),
);

$team_row_2 = array(
    array( 'type' => 'photo', 'src' => '/assets/images/team/Thu-Marketing.jpg', 'alt' => 'Thu' ),
    array( 'type' => 'photo', 'src' => '/assets/images/team/Tuan-AI-engineer.jpg', 'alt' => 'Tuan' ),
    array( 'type' => 'photo', 'src' => '/assets/images/team/Tri-Marketing.jpg', 'alt' => 'Tri' ),
    array( 'type' => 'photo', 'src' => '/assets/images/team/chan.jpeg', 'alt' => 'Chan' ),
    array( 'type' => 'photo', 'src' => '/assets/images/team/Nguyen-Tien-Co.Founder-HomeNest-Viet-Nam.jpeg', 'alt' => 'Tien' ),
    array( 'type' => 'photo', 'src' => '/assets/images/team/Thao-DEV.jpg', 'alt' => 'Thao' ),
    array( 'type' => 'photo', 'src' => '/assets/images/team/Thang-DEV.jpg', 'alt' => 'Thang' ),
    array( 'type' => 'quote', 'text' => 'Quy trình chuyên nghiệp theo chuẩn quốc tế' ),
    array( 'type' => 'photo', 'src' => '/assets/images/team/Tan-Huy-DEV.jpg', 'alt' => 'Tan Huy' ),
    array( 'type' => 'quote', 'text' => 'Nền tảng công nghệ vững chắc' ),
    array( 'type' => 'photo', 'src' => '/assets/images/team/Sang-DEV.jpg', 'alt' => 'Sang' ),
    array( 'type' => 'photo', 'src' => '/assets/images/team/Nhung-UXUI.jpg', 'alt' => 'Nhung' ),
    array( 'type' => 'photo', 'src' => '/assets/images/team/Bao-DEV.jpg', 'alt' => 'Bao' ),
    array( 'type' => 'photo', 'src' => '/assets/images/team/Khang-Graphic-Design.jpg', 'alt' => 'Khang' ),
    array( 'type' => 'photo', 'src' => '/assets/images/team/Tien-Phat-Developer.jpg', 'alt' => 'Tien Phat' ),
    array( 'type' => 'photo', 'src' => '/assets/images/team/Thanh-Phuc-Developer.jpg', 'alt' => 'Thanh Phuc' ),
    array( 'type' => 'photo', 'src' => '/assets/images/team/Thanh-Mai-Tester.jpg', 'alt' => 'Thanh Mai' ),
    array( 'type' => 'photo', 'src' => '/assets/images/team/Thanh-Graphic-Design.jpg', 'alt' => 'Thanh' ),
);
?>
<section class="teamSection">
    <div class="container">
        <header class="teamSectionHeader">
            <h2 class="teamSectionTitle">
                <span class="textGradient">Đội ngũ phát triển: </span><br>
                Giải pháp chất lượng cho doanh nghiệp
            </h2>
            <p class="teamSectionDescription">
                Những website phần mềm từ HomeNest.media luôn được tư vấn, phát triển, tối ưu nhằm mang lại hiệu quả rõ rệt cho hoạt động kinh doanh của doanh nghiệp.
            </p>
        </header>
    </div>

    <div class="teamSectionMarquee">
        <!-- Row 1 -->
        <div class="teamSectionTickerWrapper">
            <ul class="teamSectionTickerTrack teamSectionTickerTrackRow1">
                <?php for ( $repeat = 0; $repeat < 4; $repeat++ ) : ?>
                    <?php foreach ( $team_row_1 as $item ) : ?>
                        <?php if ( $item['type'] === 'quote' ) : ?>
                            <li class="teamSectionCardQuote" <?php echo $repeat > 0 ? 'aria-hidden="true"' : ''; ?>>
                                <p class="teamSectionCardQuoteText"><?php echo esc_html( $item['text'] ); ?></p>
                            </li>
                        <?php else : ?>
                            <li class="teamSectionCardPhoto" <?php echo $repeat > 0 ? 'aria-hidden="true"' : ''; ?>>
                                <img
                                    class="teamSectionCardImage"
                                    src="<?php echo esc_url( $theme_uri . $item['src'] ); ?>"
                                    alt="<?php echo esc_attr( $item['alt'] ); ?>"
                                    loading="lazy"
                                >
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endfor; ?>
            </ul>
        </div>

        <!-- Row 2 -->
        <div class="teamSectionTickerWrapper">
            <ul class="teamSectionTickerTrack teamSectionTickerTrackRow2">
                <?php for ( $repeat = 0; $repeat < 4; $repeat++ ) : ?>
                    <?php foreach ( $team_row_2 as $item ) : ?>
                        <?php if ( $item['type'] === 'quote' ) : ?>
                            <li class="teamSectionCardQuote" <?php echo $repeat > 0 ? 'aria-hidden="true"' : ''; ?>>
                                <p class="teamSectionCardQuoteText"><?php echo esc_html( $item['text'] ); ?></p>
                            </li>
                        <?php else : ?>
                            <li class="teamSectionCardPhoto" <?php echo $repeat > 0 ? 'aria-hidden="true"' : ''; ?>>
                                <img
                                    class="teamSectionCardImage"
                                    src="<?php echo esc_url( $theme_uri . $item['src'] ); ?>"
                                    alt="<?php echo esc_attr( $item['alt'] ); ?>"
                                    loading="lazy"
                                >
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</section>

<!-- 7. ACCOMPANY SECTION -->
<?php
get_template_part( 'template-parts/section/accompany' );
?>

<!-- 8. TESTIMONIAL SECTION -->
<?php
$testimonials = array(
    array( 'name' => 'Nguyễn Minh Anh', 'star' => 5, 'content' => 'HomeNest.media làm việc rất chuyên nghiệp, mọi công đoạn đều rất chỉnh chu.' ),
    array( 'name' => 'Võ Thành Đạt', 'star' => 5, 'content' => 'Những chiến dịch quảng cáo của chúng tôi được HomeNest hỗ trợ rất hiệu quả, mang lại lợi ích rất nhiều cho chúng tôi' ),
    array( 'name' => 'Phạm Thanh Tâm', 'star' => 5, 'content' => 'HomeNest hỗ trợ Branding rất tuyệt, giúp doanh nghiệp tôi cải thiện độ nhận diện thương hiệu lên rất nhiều.' ),
    array( 'name' => 'Trần Quốc Bảo', 'star' => 5, 'content' => 'HomeNest.media tư vấn hỗ trợ rất chu đáo, làm việc rất chuyên nghiệp và nhanh chóng.' ),
    array( 'name' => 'Nguyễn Thu Trang', 'star' => 5, 'content' => 'Làm việc rất chuyên nghiệp và nhanh chóng, tôi rất hài lòng về quá trình làm việc cùng HomeNest.media' ),
    array( 'name' => 'Đặng Gia Hân', 'star' => 5, 'content' => 'HomeNest giúp chúng tôi thiết kế profile cũng như ấn phẩm rất tốt, các khách hàng của tôi cũng rất thích.' ),
    array( 'name' => 'Lê Hoàng Nam', 'star' => 5, 'content' => 'Nếu có cơ hội tôi muốn tiếp tục được làm việc với HomeNest, mọi thứ đều làm tôi rất hài lòng về nội dung lẫn kết quả.' ),
    array( 'name' => 'Trần Khánh Linh', 'star' => 5, 'content' => 'Dịch vụ SEO bên HomeNest rất hiệu quả, cải thiện từ khóa và lượt truy cập bên website của tôi rất là nhiều, giúp tôi cải thiện rất nhiều về doanh thu.' ),
    array( 'name' => 'Bùi Quang Minh', 'star' => 5, 'content' => 'Các dịch vụ digital marketing của HomeNest rất chất lượng, cải thiện rất nhiều cho các kênh tiếp thị của bên chúng tôi.' ),
    array( 'name' => 'Phạm Ngọc Hà', 'star' => 5, 'content' => 'Logo HomeNest thiết kế rất đẹp, rất đúng trọng tâm và mong muốn của tôi.' ),
    array( 'name' => 'Lê Đức Huy', 'star' => 5, 'content' => 'Các dịch vụ digital Marketing bên HomeNest đã giúp ích tôi rất nhiều, giúp công ty tôi cải thiện lợi nhuận lên rất nhiều.' ),
    array( 'name' => 'Hoàng Mai Phương', 'star' => 5, 'content' => 'HomeNest hỗ trợ chúng tôi thiết kế và thi công các booth quảng cáo, cũng như backdrop và gian hàng rất độc đáo và hiệu quả, giúp chiến dịch của chúng tôi cải thiện rất nhiều.' ),
);
?>
<section class="testimonialSection">
    <div class="container">
        <div class="testimonialWrapper">
            <header class="testimonialHeader">
                <h2 class="testimonialTitle">Khách hàng nói gì về <span class="textGradient">HomeNest.media</span></h2>
                <div class="testimonialRating" role="img" aria-label="Đánh giá 5 trên 5 sao">
                    <?php for ( $s = 0; $s < 5; $s++ ) : ?>
                        <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                    <?php endfor; ?>
                </div>
            </header>

            <ul class="testimonialList">
                <?php foreach ( $testimonials as $item ) : ?>
                    <li class="testimonialItem">
                        <article class="testimonialCard">
                            <header class="testimonialCardHeader">
                                <h3 class="testimonialCardName"><?php echo esc_html( $item['name'] ); ?></h3>
                                <div class="testimonialCardRating" role="img" aria-label="<?php echo esc_attr( sprintf( 'Đánh giá %d trên 5 sao', $item['star'] ) ); ?>">
                                    <?php for ( $s = 0; $s < $item['star']; $s++ ) : ?>
                                        <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                                    <?php endfor; ?>
                                </div>
                            </header>
                            <blockquote class="testimonialCardContent">
                                <?php echo esc_html( $item['content'] ); ?>
                            </blockquote>
                        </article>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>

<!-- 9. PARTNER SECTION (1 ROW MARQUEE) -->
<section class="partnerSection" aria-label="Đối tác của HomeNest.media">
    <div class="partnerMarquee">
        <div class="partnerMarqueeTrack">
            <?php for ( $copy = 0; $copy < 2; $copy++ ) : ?>
                <ul class="partnerMarqueeGroup" <?php echo $copy > 0 ? 'aria-hidden="true"' : ''; ?>>
                    <?php foreach ( $partners_line1 as $p ) : ?>
                        <li class="partnerMarqueeItem <?php echo $p['w'] === 2 ? 'partnerMarqueeItemWide' : 'partnerMarqueeItemSquare'; ?>">
                            <img
                                class="partnerMarqueeImage"
                                src="<?php echo esc_url( $theme_uri . $p['img'] ); ?>"
                                alt="Đối tác"
                                loading="lazy"
                            >
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endfor; ?>
        </div>
    </div>
</section>

<!-- 10. FAQ SECTION -->
<?php
$faqs = array(
    array(
        'q' => 'HomeNest.media cung cấp những dịch vụ gì?',
        'a' => '<p>HomeNest.media cung cấp các giải pháp toàn diện trong lĩnh vực marketing và truyền thông, bao gồm:</p><ul><li><strong>Digital Marketing</strong>: SEO, quảng cáo online (Google Ads, Facebook Ads), Social Media Marketing.</li><li><strong>Branding</strong>: Xây dựng thương hiệu, thiết kế logo, bộ nhận diện thương hiệu.</li><li><strong>Sáng tạo nội dung</strong>: Sản xuất video, hình ảnh, bài viết chất lượng cao.</li><li><strong>Tổ chức sự kiện</strong>: Event, booth triển lãm, hội nghị, và các hoạt động quảng cáo ngoài trời.</li></ul><p>Chúng tôi cam kết mang đến các giải pháp tích hợp, giúp doanh nghiệp phát triển bền vững.</p>'
    ),
    array(
        'q' => 'Tại sao nên chọn HomeNest.media thay vì các công ty khác?',
        'a' => '<p>HomeNest.media không chỉ cung cấp dịch vụ mà còn là đối tác đồng hành cùng sự phát triển của doanh nghiệp bạn. Những điểm khác biệt của chúng tôi bao gồm:</p><ul><li><strong>Giải pháp toàn diện</strong>: Một điểm dừng duy nhất cho mọi nhu cầu marketing và truyền thông.</li><li><strong>Đội ngũ chuyên gia giàu kinh nghiệm</strong>: Chúng tôi hiểu rõ thị trường và luôn cập nhật xu hướng mới nhất.</li><li><strong>Cam kết hiệu quả đo lường được</strong>: Mỗi chiến dịch đều được tối ưu hóa để mang lại kết quả cụ thể.</li><li><strong>Hỗ trợ tận tâm</strong>: Đồng hành cùng bạn từ giai đoạn lên kế hoạch đến triển khai và tối ưu hóa.</li></ul>'
    ),
    array(
        'q' => 'Chi phí dịch vụ tại HomeNest.media như thế nào?',
        'a' => '<p>Chi phí dịch vụ tại HomeNest.media được thiết kế linh hoạt dựa trên quy mô và nhu cầu của từng doanh nghiệp. Chúng tôi cung cấp các gói dịch vụ phù hợp với ngân sách khác nhau, từ SMEs (doanh nghiệp vừa và nhỏ) đến các tập đoàn lớn. Để nhận báo giá chi tiết, vui lòng liên hệ với chúng tôi qua email hoặc số điện thoại.</p>'
    ),
    array(
        'q' => 'Làm thế nào để bắt đầu hợp tác với HomeNest.media?',
        'a' => '<p>Rất đơn giản! Bạn chỉ cần thực hiện các bước sau:</p><ol><li><strong>Liên hệ với chúng tôi</strong>: Gửi yêu cầu qua form liên hệ trên website hoặc gọi trực tiếp.</li><li><strong>Tư vấn miễn phí</strong>: Đội ngũ chuyên gia của chúng tôi sẽ lắng nghe nhu cầu và tư vấn giải pháp phù hợp.</li><li><strong>Lên kế hoạch</strong>: Chúng tôi sẽ xây dựng chiến lược chi tiết dựa trên mục tiêu của bạn.</li><li><strong>Triển khai và tối ưu hóa</strong>: Thực hiện chiến dịch và liên tục đo lường, điều chỉnh để đạt hiệu quả cao nhất.</li></ol>'
    ),
    array(
        'q' => 'HomeNest.media có hỗ trợ doanh nghiệp nhỏ không?',
        'a' => '<p>Có! HomeNest.media đặc biệt chú trọng đến các doanh nghiệp vừa và nhỏ (SMEs). Chúng tôi hiểu rằng SMEs thường có ngân sách hạn chế nhưng vẫn cần các giải pháp hiệu quả. Vì vậy, chúng tôi cung cấp các gói dịch vụ linh hoạt, cá nhân hóa để đảm bảo bạn nhận được giá trị tốt nhất với chi phí hợp lý.</p>'
    ),
    array(
        'q' => 'Thời gian triển khai một chiến dịch tại HomeNest.media là bao lâu?',
        'a' => '<p>Thời gian triển khai phụ thuộc vào loại dịch vụ và quy mô chiến dịch. Ví dụ:</p><ul><li><strong>Digital Marketing</strong>: Chiến dịch quảng cáo có thể bắt đầu trong vòng 1-2 tuần sau khi ký hợp đồng.</li><li><strong>Thiết kế logo/branding</strong>: Thường mất khoảng 1-4 tuần để hoàn thiện.</li><li><strong>Tổ chức sự kiện</strong>: Tùy thuộc vào quy mô, thời gian chuẩn bị có thể từ vài tuần đến vài tháng.</li></ul><p>Chúng tôi luôn cố gắng tối ưu hóa thời gian để đáp ứng nhu cầu của khách hàng.</p>'
    ),
    array(
        'q' => 'HomeNest.media có báo cáo hiệu quả chiến dịch minh bạch không?',
        'a' => '<p>Chúng tôi cung cấp báo cáo chi tiết và minh bạch về hiệu quả chiến dịch. Tùy thuộc vào loại dịch vụ, bạn có thể theo dõi:</p><ul><li>Số liệu traffic, conversion rate (tỷ lệ chuyển đổi) trong Digital Marketing.</li><li>Phản hồi từ khách hàng trong các chiến dịch branding và event.</li><li>Báo cáo hàng tuần/tháng để bạn nắm rõ tiến độ và hiệu quả.</li></ul><p>Chúng tôi luôn sẵn sàng giải thích và tư vấn cách tối ưu hóa chiến dịch.</p>'
    ),
    array(
        'q' => 'HomeNest.media có làm việc với khách hàng quốc tế không?',
        'a' => '<p>Có! Chúng tôi tự hào là đối tác của nhiều doanh nghiệp quốc tế. Với đội ngũ chuyên gia am hiểu thị trường toàn cầu và khả năng sử dụng đa ngôn ngữ, chúng tôi có thể hỗ trợ khách hàng từ mọi quốc gia. Liên hệ với chúng tôi để biết thêm chi tiết!</p>'
    ),
);
?>
<?php
get_template_part( 'template-parts/section/faq', null, array(
    'title' => 'Câu hỏi thường gặp',
    'faqs'  => $faqs,
) );
?>

<!-- 11. BLOG SECTION -->
<section class="blogSection">
    <div class="blogMarqueeText">
        <div class="blogMarqueeTrack">
            <?php for ( $copy = 0; $copy < 2; $copy++ ) : ?>
                <div class="blogMarqueeGroup" <?php echo $copy > 0 ? 'aria-hidden="true"' : ''; ?>>
                    <?php for ( $r = 0; $r < 3; $r++ ) : ?>
                        <span class="blogMarqueeItem">Not just service, we accompany your development</span>
                    <?php endfor; ?>
                </div>
            <?php endfor; ?>
        </div>
    </div>

    <div class="fullwidth fullWidth">
        <div class="blogWrapper">
            <h2 class="blogTitle">
                <span class="textGradient">Tin tức</span> và <span class="textGradient">xu hướng</span> <br>mới nhất
            </h2>
            <p class="blogDescription">
                Tìm hiểu về những phát triển thú vị và xu hướng nổi bật của tương lai trong và ngoài nước.
            </p>

            <div class="blogList">
                <?php for ( $b = 0; $b < 3; $b++ ) : ?>
                    <article class="blogCard">
                        <div class="tag">
                            <span class="tagText">Cẩm nang Branding</span>
                        </div>
                        <h3 class="blogCardTitle">Chi Phí Phát Triển Mascot Sau Thiết Kế: Sticker, Animation, 3D Và Trang Phục</h3>
                        <p class="blogCardText">Sau khi hoàn thiện thiết kế mascot, doanh nghiệp có thể phát triển nhân vật thành sticker, video animation, mô hình 3D hoặc trang phục linh vật để sử dụng trên nhiều nền tảng. Để lập ngân sách phù hợp, doanh&hellip;</p>
                        <div class="blogCardMeta">
                            <p class="blogCardAuthor">quan</p>
                            <span class="blogCardDivider"></span>
                            <p class="blogCardDate">28/10/2026</p>
                        </div>
                    </article>
                <?php endfor; ?>
            </div>

            <div class="blogButtonSeeMore">
                <a href="<?php echo esc_url( home_url( '/wiki/' ) ); ?>" class="buttonTransparentToGradient">
                    <span class="inner">
                        <span class="iconLeft" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"><path d="M388.819 239.537 156.092 6.816c-9.087-9.089-23.824-9.089-32.912.002-9.087 9.089-9.087 23.824.002 32.912l216.27 216.266-216.273 216.276c-9.087 9.089-9.087 23.824.002 32.912A23.2 23.2 0 0 0 139.636 512a23.2 23.2 0 0 0 16.457-6.817L388.819 272.45a23.27 23.27 0 0 0 0-32.913"/></svg>
                        </span>
                        <span class="text">Xem thêm</span>
                        <span class="iconRight" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"><path d="M388.819 239.537 156.092 6.816c-9.087-9.089-23.824-9.089-32.912.002-9.087 9.089-9.087 23.824.002 32.912l216.27 216.266-216.273 216.276c-9.087 9.089-9.087 23.824.002 32.912A23.2 23.2 0 0 0 139.636 512a23.2 23.2 0 0 0 16.457-6.817L388.819 272.45a23.27 23.27 0 0 0 0-32.913"/></svg>
                        </span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
