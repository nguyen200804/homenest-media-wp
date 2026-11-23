<?php
/**
 * Template Part: UI Button
 *
 * Mảnh UI Button có thể tái sử dụng nhiều nơi (UI Component)
 * Tuân thủ theo hướng dẫn template-parts: template-parts/ui/button.php
 *
 * @package My_Theme
 * @param array $args {
 *     @type string $text   Nội dung chữ hiển thị trên nút (mặc định: 'Tư vấn miễn phí').
 *     @type string $url    Đường dẫn liên kết (mặc định: '#').
 *     @type string $id     ID thuộc tính của nút (mặc định: '').
 *     @type string $name   Thuộc tính name nếu là thẻ button (mặc định: '').
 *     @type string $class  Class CSS của nút (mặc định: 'btnGradientSpin').
 *     @type string $target Thuộc tính target (mặc định: '_self' hoặc '_blank').
 *     @type string $rel    Thuộc tính rel (mặc định: 'noopener noreferrer' nếu target là _blank).
 *     @type bool   $icon   Có hiển thị icon mũi tên chuyển động hay không (mặc định: true).
 *     @type string $tag    Thẻ HTML render ('a' hoặc 'button', mặc định: 'a').
 *     @type string $type   Thuộc tính type nếu là thẻ button (mặc định: 'button').
 * }
 */

defined( 'ABSPATH' ) || exit;

$id        = ! empty( $args['id'] ) ? $args['id'] : '';
$name      = ! empty( $args['name'] ) ? $args['name'] : '';
$text      = ! empty( $args['text'] ) ? $args['text'] : __( 'Tư vấn miễn phí', 'my-theme' );
$url       = ! empty( $args['url'] ) ? $args['url'] : '#';
$class     = ! empty( $args['class'] ) ? $args['class'] : 'btnGradientSpin';
$target    = ! empty( $args['target'] ) ? $args['target'] : '';
$rel       = ! empty( $args['rel'] ) ? $args['rel'] : '';
$show_icon = isset( $args['icon'] ) ? (bool) $args['icon'] : true;
$tag       = ( ! empty( $args['tag'] ) && in_array( $args['tag'], array( 'a', 'button' ), true ) ) ? $args['tag'] : 'a';
$type      = ! empty( $args['type'] ) ? $args['type'] : 'button';

if ( '_blank' === $target && empty( $rel ) ) {
    $rel = 'noopener noreferrer';
}
?>

<?php if ( 'button' === $tag ) : ?>
<button type="<?php echo esc_attr( $type ); ?>"<?php echo $name ? ' name="' . esc_attr( $name ) . '"' : ''; ?><?php echo $id ? ' id="' . esc_attr( $id ) . '"' : ''; ?> class="<?php echo esc_attr( $class ); ?>">
    <span class="btnInner">
        <?php if ( $show_icon ) : ?>
            <span class="btnIconLeft" aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M388.819 239.537 156.092 6.816c-9.087-9.089-23.824-9.089-32.912.002-9.087 9.089-9.087 23.824.002 32.912l216.27 216.266-216.273 216.276c-9.087 9.089-9.087 23.824.002 32.912A23.2 23.2 0 0 0 139.636 512a23.2 23.2 0 0 0 16.457-6.817L388.819 272.45a23.27 23.27 0 0 0 0-32.913"/></svg>
            </span>
        <?php endif; ?>

        <span class="btnText"><?php echo esc_html( $text ); ?></span>

        <?php if ( $show_icon ) : ?>
            <span class="btnIconRight" aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M388.819 239.537 156.092 6.816c-9.087-9.089-23.824-9.089-32.912.002-9.087 9.089-9.087 23.824.002 32.912l216.27 216.266-216.273 216.276c-9.087 9.089-9.087 23.824.002 32.912A23.2 23.2 0 0 0 139.636 512a23.2 23.2 0 0 0 16.457-6.817L388.819 272.45a23.27 23.27 0 0 0 0-32.913"/></svg>
            </span>
        <?php endif; ?>
    </span>
</button>
<?php else : ?>
<a <?php echo $id ? 'id="' . esc_attr( $id ) . '" ' : ''; ?>href="<?php echo esc_url( $url ); ?>"<?php echo $target ? ' target="' . esc_attr( $target ) . '"' : ''; ?><?php echo $rel ? ' rel="' . esc_attr( $rel ) . '"' : ''; ?> class="<?php echo esc_attr( $class ); ?>">
    <span class="btnInner">
        <?php if ( $show_icon ) : ?>
            <span class="btnIconLeft" aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M388.819 239.537 156.092 6.816c-9.087-9.089-23.824-9.089-32.912.002-9.087 9.089-9.087 23.824.002 32.912l216.27 216.266-216.273 216.276c-9.087 9.089-9.087 23.824.002 32.912A23.2 23.2 0 0 0 139.636 512a23.2 23.2 0 0 0 16.457-6.817L388.819 272.45a23.27 23.27 0 0 0 0-32.913"/></svg>
            </span>
        <?php endif; ?>

        <span class="btnText"><?php echo esc_html( $text ); ?></span>

        <?php if ( $show_icon ) : ?>
            <span class="btnIconRight" aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M388.819 239.537 156.092 6.816c-9.087-9.089-23.824-9.089-32.912.002-9.087 9.089-9.087 23.824.002 32.912l216.27 216.266-216.273 216.276c-9.087 9.089-9.087 23.824.002 32.912A23.2 23.2 0 0 0 139.636 512a23.2 23.2 0 0 0 16.457-6.817L388.819 272.45a23.27 23.27 0 0 0 0-32.913"/></svg>
            </span>
        <?php endif; ?>
    </span>
</a>
<?php endif; ?>
