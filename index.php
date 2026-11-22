<?php get_header(); ?>

<?php if ( have_posts() ) : ?>

	<?php if ( is_home() && ! is_front_page() ) : ?>
		<h1 class="page-title"><?php single_post_title(); ?></h1>
	<?php elseif ( is_archive() ) : ?>
		<h1 class="page-title"><?php the_archive_title(); ?></h1>
	<?php elseif ( is_search() ) : ?>
		<h1 class="page-title">
			<?php printf( esc_html__( 'Kết quả tìm kiếm cho: %s', 'my-theme' ), '<span>' . get_search_query() . '</span>' ); ?>
		</h1>
	<?php endif; ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
			<?php if ( has_post_thumbnail() ) : ?>
				<a class="post-thumbnail" href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'large' ); ?>
				</a>
			<?php endif; ?>

			<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="entry-meta">
				<?php echo esc_html( get_the_date() ); ?> &middot; <?php the_author(); ?>
			</div>
			<div class="entry-summary"><?php the_excerpt(); ?></div>
		</article>
	<?php endwhile; ?>

	<nav class="pagination">
		<?php echo paginate_links(); ?>
	</nav>

<?php else : ?>
	<p><?php esc_html_e( 'Không tìm thấy nội dung.', 'my-theme' ); ?></p>
	<?php get_search_form(); ?>
<?php endif; ?>

<?php get_footer(); ?>
