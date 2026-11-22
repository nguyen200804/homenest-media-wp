<?php get_header(); ?>

<section class="error-404">
	<h1><?php esc_html_e( '404 - Không tìm thấy trang', 'my-theme' ); ?></h1>
	<p><?php esc_html_e( 'Trang bạn tìm không tồn tại. Hãy thử tìm kiếm:', 'my-theme' ); ?></p>
	<?php get_search_form(); ?>
	<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Về trang chủ', 'my-theme' ); ?></a></p>
</section>

<?php get_footer(); ?>
