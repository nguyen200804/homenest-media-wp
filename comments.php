<?php
/**
 * The template for displaying comments
 *
 * @package My_Theme
 */

defined( 'ABSPATH' ) || exit;

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<div class="comments-header">
			<h2 class="comments-title">
				Bình luận (<?php echo number_format_i18n( get_comments_number() ); ?>)
			</h2>
		</div>

		<ol class="comment-list">
			<?php
			wp_list_comments( array(
				'style'       => 'ol',
				'short_ping'  => true,
				'avatar_size' => 56,
				'callback'    => 'my_theme_custom_comment_list',
			) );
			?>
		</ol>

		<?php
		the_comments_pagination( array(
			'prev_text' => '&larr; ' . esc_html__( 'Bình luận trước', 'my-theme' ),
			'next_text' => esc_html__( 'Bình luận tiếp theo', 'my-theme' ) . ' &rarr;',
		) );
		?>

	<?php endif; ?>

	<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments"><?php esc_html_e( 'Bình luận đã bị đóng.', 'my-theme' ); ?></p>
	<?php endif; ?>

	<?php
	$commenter     = wp_get_current_commenter();
	$req           = get_option( 'require_name_email' );
	$html_req      = ( $req ? ' required' : '' );
	$user          = wp_get_current_user();
	$user_identity = $user->exists() ? $user->display_name : '';

	$custom_fields = array(
		'author' => '<div class="comment-form-group comment-form-author">
						<input id="author" name="author" type="text" class="comment-line-input" placeholder="' . esc_attr__( 'Tên của bạn *', 'my-theme' ) . '" value="' . esc_attr( $commenter['comment_author'] ) . '"' . $html_req . ' />
						<span class="placeholder">' . esc_attr__( 'Tên của bạn *', 'my-theme' ) . '</span>
					</div>',
		'email'  => '<div class="comment-form-group comment-form-email">
						<input id="email" name="email" type="email" class="comment-line-input" placeholder="' . esc_attr__( 'Email của bạn *', 'my-theme' ) . '" value="' . esc_attr( $commenter['comment_author_email'] ) . '"' . $html_req . ' />
						<span class="placeholder">' . esc_attr__( 'Email của bạn *', 'my-theme' ) . '</span>
					</div>',
		'url'    => '<div class="comment-form-group comment-form-url">
						<input id="url" name="url" type="url" class="comment-line-input" placeholder="' . esc_attr__( 'Website', 'my-theme' ) . '" value="' . esc_attr( $commenter['comment_author_url'] ) . '" />
						<span class="placeholder">' . esc_attr__( 'Website', 'my-theme' ) . '</span>
					</div>',
	);

	$comment_form_args = array(
		'title_reply'          => __( 'Để lại bình luận', 'my-theme' ),
		'title_reply_to'       => __( 'Trả lời bình luận của %s', 'my-theme' ),
		'title_reply_before'   => '<h3 id="reply-title" class="comment-reply-title">',
		'title_reply_after'    => '</h3>',
		'cancel_reply_before'  => ' <small class="cancel-reply-wrap">',
		'cancel_reply_after'   => '</small>',
		'cancel_reply_link'    => __( 'Hủy trả lời', 'my-theme' ),
		'logged_in_as'         => '<p class="logged-in-as">' . sprintf(
			/* translators: 1: edit profile link, 2: user display name, 3: logout link */
			__( 'Đã đăng nhập với tên <a href="%1$s" class="logged-in-user">%2$s</a>. <a href="%3$s" class="logged-in-logout">Đăng xuất?</a>', 'my-theme' ),
			esc_url( admin_url( 'profile.php' ) ),
			esc_html( $user_identity ),
			esc_url( wp_logout_url( apply_filters( 'the_permalink', get_permalink() ) ) )
		) . '</p>',
		'comment_notes_before' => '',
		'comment_notes_after'  => '',
		'comment_field'        => '<div class="comment-form-comment">
									  <textarea id="comment" name="comment" class="comment-line-textarea" placeholder="' . esc_attr__( 'Nội dung bình luận', 'my-theme' ) . '" rows="3" required></textarea>
									  <span class="placeholder">' . esc_attr__( 'Nội dung bình luận', 'my-theme' ) . '</span>
								  </div>',
		'fields'               => $custom_fields,
		'class_form'           => 'comment-form custom-comment-form',
		'class_submit'         => 'btn-submit-comment',
		'submit_button'        => '<button name="%1$s" type="submit" id="%2$s" class="%3$s">
									  <span class="btn-comment-arrow" aria-hidden="true">
										  <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
											  <polyline points="9 18 15 12 9 6"></polyline>
										  </svg>
									  </span>
									  <span class="btn-comment-text">%4$s</span>
								  </button>',
		'submit_field'         => '<div class="form-submit">%1$s %2$s</div>',
		'label_submit'         => __( 'Gửi bình luận', 'my-theme' ),
	);

	comment_form( $comment_form_args );
	?>

</div><!-- #comments -->
