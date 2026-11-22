<?php
/**
 * HomeNest.media Navigation Walker & Fallback Menu
 */
defined( 'ABSPATH' ) || exit;

class HomeNest_Walker_Nav_Menu extends Walker_Nav_Menu {
    private $item_index = array();

    public function start_lvl( &$output, $depth = 0, $args = null ) {
        $this->item_index[$depth + 1] = 0;
        if ( $depth === 0 ) {
            $output .= "\n<ul class=\"dropdown\">\n";
        } elseif ( $depth === 1 ) {
            $output .= "\n<ul class=\"subdropdown\">\n";
        } else {
            $output .= "\n<ul class=\"sub-menu\">\n";
        }
    }

    public function end_lvl( &$output, $depth = 0, $args = null ) {
        $output .= "</ul>\n";
    }

    public function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
        $element->has_children = ! empty( $children_elements[ $element->ID ] );
        parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }

    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        if ( ! isset( $this->item_index[$depth] ) ) {
            $this->item_index[$depth] = 0;
        }
        $curr_index = $this->item_index[$depth]++;

        $has_children = ! empty( $item->has_children );
        $is_active    = in_array( 'current-menu-item', (array) $item->classes, true ) ||
                        in_array( 'current_page_item', (array) $item->classes, true ) ||
                        in_array( 'current-menu-ancestor', (array) $item->classes, true );

        $url   = ! empty( $item->url ) ? esc_url( $item->url ) : '#';
        $title = apply_filters( 'the_title', $item->title, $item->ID );

        $chevron_svg = '<svg class="chevron" viewBox="0 0 10 10" width="8" height="8" aria-hidden="true"><path d="M1 3.2 5 7l4-3.8" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" /></svg>';
        $chevron_up_svg = '<svg class="chevron chevronUp chevron-up" viewBox="0 0 10 10" width="8" height="8" aria-hidden="true"><path d="M1 3.2 5 7l4-3.8" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" /></svg>';

        if ( $depth === 0 ) {
            $classes = array( 'menuItem', 'menu-item' );
            if ( $has_children ) $classes[] = 'hasChildren has-children';
            if ( $is_active )    $classes[] = 'isActive is-active';

            $class_names = implode( ' ', array_filter( $classes ) );

            $output .= "<li class=\"{$class_names}\">\n";
            $output .= "  <div class=\"menuRow menu-row\">\n";
            $output .= "    <a href=\"{$url}\" class=\"menuLink menu-link" . ( $is_active ? ' isActive is-active' : '' ) . "\">\n";
            $output .= "      " . esc_html( $title ) . "\n";
            if ( $has_children ) {
                $output .= "      " . $chevron_up_svg . "\n";
            }
            $output .= "    </a>\n";

            if ( $has_children ) {
                $output .= "    <button type=\"button\" class=\"menuToggle menu-toggle\" aria-label=\"" . esc_attr( sprintf( __( 'Mở menu %s', 'my-theme' ), $title ) ) . "\" aria-expanded=\"false\">\n";
                $output .= "      " . $chevron_svg . "\n";
                $output .= "    </button>\n";
            }
            $output .= "  </div>\n";

        } elseif ( $depth === 1 ) {
            $classes = array( 'dropdownItem', 'dropdown-item' );
            if ( $has_children ) $classes[] = 'hasChildren has-children';

            $class_names = implode( ' ', array_filter( $classes ) );

            $output .= "<li class=\"{$class_names}\" style=\"--i: {$curr_index}\">\n";
            $output .= "  <div class=\"dropdownRow dropdown-row\">\n";
            $output .= "    <a href=\"{$url}\" class=\"dropdownLink dropdown-link\">\n";
            $output .= "      <span class=\"dropdownDot dropdown-dot\" aria-hidden=\"true\"></span>\n";
            $output .= "      " . esc_html( $title ) . "\n";
            $output .= "    </a>\n";

            if ( $has_children ) {
                $output .= "    <button type=\"button\" class=\"dropdownToggle dropdown-toggle\" aria-label=\"" . esc_attr( sprintf( __( 'Mở menu %s', 'my-theme' ), $title ) ) . "\" aria-expanded=\"false\">\n";
                $output .= "      " . $chevron_svg . "\n";
                $output .= "    </button>\n";
            }
            $output .= "  </div>\n";

        } else {
            $output .= "<li style=\"--i: {$curr_index}\">\n";
            $output .= "  <a href=\"{$url}\" class=\"subdropdownLink subdropdown-link\">\n";
            $output .= "    <span class=\"subdropdownMarker subdropdown-marker\" aria-hidden=\"true\"></span>\n";
            $output .= "    " . esc_html( $title ) . "\n";
            $output .= "  </a>\n";
        }
    }

    public function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= "</li>\n";
    }
}

/**
 * Fallback menu rendering default navigation items from Next.js project
 */
function homenest_default_nav_menu() {
    $current_uri = isset( $_SERVER['REQUEST_URI'] ) ? sanitize_text_field( wp_unslash( $_SERVER['REQUEST_URI'] ) ) : '/';
    $site_url    = home_url();

    $nav_items = array(
        array( 'label' => 'Trang chủ', 'href' => '/' ),
        array(
            'label' => 'Dịch vụ Homenest',
            'href'  => '/dich-vu',
            'children' => array(
                array(
                    'label' => 'Digital Marketing',
                    'href'  => '/dich-vu/digital-marketing',
                    'children' => array(
                        array( 'label' => 'Dịch vụ SEO Tổng Thể', 'href' => '/dich-vu/seo-tong-the' ),
                        array( 'label' => 'Dịch vụ SEO Từ Khoá', 'href' => '/dich-vu/seo-tu-khoa' ),
                        array( 'label' => 'Quảng cáo Google', 'href' => '/dich-vu/quang-cao-google' ),
                        array( 'label' => 'Quảng cáo Facebook', 'href' => '/dich-vu/quang-cao-facebook' ),
                        array( 'label' => 'Quảng cáo Youtube', 'href' => '/dich-vu/quang-cao-youtube' ),
                        array( 'label' => 'Quảng cáo – Xây kênh Tiktok', 'href' => '/dich-vu/xay-kenh-tiktok' ),
                        array( 'label' => 'Email Marketing', 'href' => '/dich-vu/email-marketing' ),
                    ),
                ),
                array(
                    'label' => 'Branding',
                    'href'  => '/dich-vu/branding',
                    'children' => array(
                        array( 'label' => 'Thiết kế Logo Chuyên nghiệp', 'href' => '/dich-vu/thiet-ke-logo-chuyen-nghiep' ),
                        array( 'label' => 'Thiết kế Nhận diện thương hiệu', 'href' => '/dich-vu/thiet-ke-nhan-dien-thuong-hieu' ),
                        array( 'label' => 'Thiết kế Mascot – Linh vật thương hiệu', 'href' => '/dich-vu/thiet-ke-mascot-linh-vat-thuong-hieu' ),
                        array( 'label' => 'Thiết Kế Profile Công Ty, Catalogue', 'href' => '/dich-vu/thiet-ke-profile-catalogue' ),
                        array( 'label' => 'Thiết kế Ấn phẩm Marketing', 'href' => '/dich-vu/thiet-ke-an-pham-marketing' ),
                    ),
                ),
                array(
                    'label' => 'Quảng cáo',
                    'href'  => '/dich-vu/quang-cao',
                    'children' => array(
                        array( 'label' => 'Thi công Booth quảng cáo', 'href' => '/dich-vu/thiet-ke-thi-cong-booth-quang-cao' ),
                        array( 'label' => 'Thiết kế – thi công gian hàng', 'href' => '/dich-vu/thiet-ke-thi-cong-gian-hang' ),
                        array( 'label' => 'Thiết kế – thi công Backdrop', 'href' => '/dich-vu/thiet-ke-thi-cong-backdrop' ),
                        array( 'label' => 'Thi công hàng rào công trình', 'href' => '/dich-vu/thiet-ke-thi-cong-hang-rao-cong-trinh' ),
                        array( 'label' => 'Dán Decal kính văn phòng', 'href' => '/dich-vu/dan-decal-kinh-van-phong' ),
                    ),
                ),
                array( 'label' => 'Event', 'href' => '/dich-vu/event' ),
            ),
        ),
        array( 'label' => 'Dự án', 'href' => '/du-an' ),
        array(
            'label' => 'Wiki',
            'href'  => '/wiki',
            'children' => array(
                array(
                    'label' => 'Wiki Digital Marketing',
                    'href'  => '/wiki/wiki-digital-marketing',
                    'children' => array(
                        array( 'label' => 'Cẩm nang Ads', 'href' => '/wiki/cam-nang-ads' ),
                        array( 'label' => 'Cẩm nang SEO', 'href' => '/wiki/cam-nang-seo' ),
                        array( 'label' => 'Cẩm nang Social Media', 'href' => '/wiki/cam-nang-social-media' ),
                        array( 'label' => 'Xu Hướng Digital Marketing', 'href' => '/wiki/xu-huong-digital-marketing' ),
                    ),
                ),
                array(
                    'label' => 'Wiki Branding',
                    'href'  => '/wiki/wiki-branding',
                    'children' => array(
                        array( 'label' => 'Cẩm nang Branding', 'href' => '/wiki/cam-nang-branding' ),
                        array( 'label' => 'Kinh nghiệm Branding', 'href' => '/wiki/kinh-nghiem-branding' ),
                        array( 'label' => 'Xu hướng Branding', 'href' => '/wiki/xu-huong-branding' ),
                    ),
                ),
                array(
                    'label' => 'Wiki Event, triễn lãm',
                    'href'  => '/wiki/wiki-event-trien-lam',
                    'children' => array(
                        array( 'label' => 'Cẩm nang Booth triễn lãm', 'href' => '/wiki/cam-nang-booth-trien-lam' ),
                        array( 'label' => 'Cẩm nang thiết kế', 'href' => '/wiki/cam-nang-thiet-ke' ),
                        array( 'label' => 'Thông tin triễn lãm', 'href' => '/wiki/thong-tin-trien-lam' ),
                        array( 'label' => 'Xu hướng Event, Triễn Lãm', 'href' => '/wiki/xu-huong-event-trien-lam' ),
                    ),
                ),
                array( 'label' => 'Wiki HomeNest Media', 'href' => '/wiki/wiki-homenest-media' ),
            ),
        ),
        array( 'label' => 'Tuyển dụng', 'href' => '/tuyen-dung' ),
        array( 'label' => 'Liên hệ', 'href' => '/lien-he' ),
        array( 'label' => 'FAQ', 'href' => '/faq' ),
    );

    $chevron_svg = '<svg class="chevron" viewBox="0 0 10 10" width="8" height="8" aria-hidden="true"><path d="M1 3.2 5 7l4-3.8" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" /></svg>';
    $chevron_up_svg = '<svg class="chevron chevronUp chevron-up" viewBox="0 0 10 10" width="8" height="8" aria-hidden="true"><path d="M1 3.2 5 7l4-3.8" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" /></svg>';

    echo '<ul class="menuList menu-list">';
    foreach ( $nav_items as $item ) {
        $has_children = ! empty( $item['children'] );
        $item_url     = esc_url( home_url( $item['href'] ) );
        $is_active    = ( $item['href'] === '/' && ( $current_uri === '/' || $current_uri === '' ) ) ||
                        ( $item['href'] !== '/' && strpos( $current_uri, $item['href'] ) !== false );

        $classes = array( 'menuItem', 'menu-item' );
        if ( $has_children ) $classes[] = 'hasChildren has-children';
        if ( $is_active )    $classes[] = 'isActive is-active';

        echo '<li class="' . esc_attr( implode( ' ', $classes ) ) . '">';
        echo '  <div class="menuRow menu-row">';
        echo '    <a href="' . $item_url . '" class="menuLink menu-link' . ( $is_active ? ' isActive is-active' : '' ) . '">';
        echo esc_html( $item['label'] );
        if ( $has_children ) echo ' ' . $chevron_up_svg;
        echo '    </a>';

        if ( $has_children ) {
            echo '    <button type="button" class="menuToggle menu-toggle" aria-label="' . esc_attr( 'Mở menu ' . $item['label'] ) . '" aria-expanded="false">';
            echo $chevron_svg;
            echo '    </button>';
        }
        echo '  </div>';

        if ( $has_children ) {
            echo '<ul class="dropdown">';
            foreach ( $item['children'] as $child_idx => $child ) {
                $has_sub    = ! empty( $child['children'] );
                $child_url  = esc_url( home_url( $child['href'] ) );
                $child_classes = array( 'dropdownItem', 'dropdown-item' );
                if ( $has_sub ) $child_classes[] = 'hasChildren has-children';

                echo '<li class="' . esc_attr( implode( ' ', $child_classes ) ) . '" style="--i: ' . (int) $child_idx . '">';
                echo '  <div class="dropdownRow dropdown-row">';
                echo '    <a href="' . $child_url . '" class="dropdownLink dropdown-link">';
                echo '      <span class="dropdownDot dropdown-dot" aria-hidden="true"></span>';
                echo esc_html( $child['label'] );
                echo '    </a>';

                if ( $has_sub ) {
                    echo '    <button type="button" class="dropdownToggle dropdown-toggle" aria-label="' . esc_attr( 'Mở menu ' . $child['label'] ) . '" aria-expanded="false">';
                    echo $chevron_svg;
                    echo '    </button>';
                }
                echo '  </div>';

                if ( $has_sub ) {
                    echo '<ul class="subdropdown">';
                    foreach ( $child['children'] as $sub_idx => $sub ) {
                        $sub_url = esc_url( home_url( $sub['href'] ) );
                        echo '<li style="--i: ' . (int) $sub_idx . '">';
                        echo '  <a href="' . $sub_url . '" class="subdropdownLink subdropdown-link">';
                        echo '    <span class="subdropdownMarker subdropdown-marker" aria-hidden="true"></span>';
                        echo esc_html( $sub['label'] );
                        echo '  </a>';
                        echo '</li>';
                    }
                    echo '</ul>';
                }

                echo '</li>';
            }
            echo '</ul>';
        }

        echo '</li>';
    }
    echo '</ul>';
}
