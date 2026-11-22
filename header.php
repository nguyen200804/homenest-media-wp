<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header site-header" id="site-header">
	<div class="inner">
		<!-- Top info bar -->
		<div class="topbar">
			<div class="topbarInner topbar-inner">
				<a class="topbarItem topbar-item" href="tel:0898994298" id="topbar-hotline">
					<span class="topbarLabel topbar-label">Hotline</span> 0898994298
				</a>
				<a class="topbarItem topbar-item" href="mailto:info@HomeNest.media" id="topbar-email">
					<span class="topbarLabel topbar-label">Email</span> info@HomeNest.media
				</a>
				<span class="topbarItem topbar-item hideMd hide-md" id="topbar-address">
					<span class="topbarLabel topbar-label">Địa chỉ:</span> SAV4 The Sun Avenue, 28 Mai Chí Thọ, P Bình Trưng, Tp HCM
				</span>
				<span class="topbarItem topbar-item topbarBrand topbar-brand">HomeNest.media</span>
			</div>
		</div>

		<!-- Main navigation -->
		<div class="navwrap">
			<div class="nav">
				<!-- Logo -->
				<div class="logo">
					<?php if ( has_custom_logo() ) : ?>
						<?php the_custom_logo(); ?>
					<?php else : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="HomeNest.media - Trang chủ">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo/logo_HomeNest.media.png' ); ?>" alt="<?php bloginfo( 'name' ); ?> - Trang chủ" width="250" height="66">
						</a>
					<?php endif; ?>
				</div>

				<!-- Navigation -->
				<nav class="menu" id="main-navigation" aria-label="<?php esc_attr_e( 'Điều hướng chính', 'my-theme' ); ?>">
					<?php
					if ( has_nav_menu( 'primary-menu' ) ) {
						wp_nav_menu( array(
							'theme_location' => 'primary-menu',
							'container'      => false,
							'menu_class'     => 'menuList menu-list',
							'walker'         => new HomeNest_Walker_Nav_Menu(),
						) );
					} else {
						homenest_default_nav_menu();
					}
					?>
				</nav>

				<!-- Actions -->
				<div class="actions">
					<button type="button" class="actionsLang actions-lang" id="btn-language" aria-label="<?php esc_attr_e( 'Chọn ngôn ngữ', 'my-theme' ); ?>">
						VI
						<span class="actionsFlag actions-flag" aria-hidden="true"></span>
					</button>

					<button type="button" class="actionsBtn actions-btn" id="btn-search" aria-label="<?php esc_attr_e( 'Tìm kiếm', 'my-theme' ); ?>">
						<svg viewBox="0 0 24 24" width="18" height="18" aria-hidden="true">
							<circle cx="11" cy="11" r="6.5" fill="none" stroke="currentColor" stroke-width="1.8" />
							<path d="m16 16 4.5 4.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
						</svg>
					</button>

					<button type="button" class="actionsBtn actions-btn" id="btn-apps" aria-label="<?php esc_attr_e( 'Danh mục khác', 'my-theme' ); ?>">
						<svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true">
							<rect x="3.5" y="3.5" width="7" height="7" rx="2" fill="none" stroke="currentColor" stroke-width="1.7" />
							<rect x="13.5" y="3.5" width="7" height="7" rx="2" fill="none" stroke="currentColor" stroke-width="1.7" />
							<rect x="3.5" y="13.5" width="7" height="7" rx="2" fill="none" stroke="currentColor" stroke-width="1.7" />
							<rect x="13.5" y="13.5" width="7" height="7" rx="2" fill="none" stroke="currentColor" stroke-width="1.7" />
						</svg>
					</button>

					<button
						type="button"
						class="burger"
						id="btn-burger"
						aria-label="<?php esc_attr_e( 'Mở menu', 'my-theme' ); ?>"
						aria-expanded="false"
						aria-controls="main-navigation"
					>
						<span></span>
						<span></span>
						<span></span>
					</button>
				</div>
			</div>
		</div>
	</div>
</header>

<?php if ( ! is_front_page() ) : ?>
<!-- <main class="site-content">
	<div class="container"> -->
<?php else : ?>
<main class="site-content site-content--front-page">
<?php endif; ?>
