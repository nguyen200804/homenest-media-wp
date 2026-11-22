<?php
/**
 * Template Part: FAQ Section
 *
 * Hiển thị khối câu hỏi thường gặp (Accordion).
 *
 * @package My_Theme
 * @param array $args {
 *     @type string $title     Tiêu đề phần FAQ (mặc định: 'Câu hỏi thường gặp').
 *     @type array  $faqs      Mảng danh sách các câu hỏi và câu trả lời. Hỗ trợ key 'q'/'a' hoặc 'question'/'answer'.
 *     @type string $class     Class CSS bổ sung cho thẻ <section> (ví dụ: 'section').
 *     @type string $id_prefix Tiền tố cho id và aria-controls (mặc định: 'faq').
 * }
 */

defined( 'ABSPATH' ) || exit;

$title     = ! empty( $args['title'] ) ? $args['title'] : 'Câu hỏi thường gặp';
$faqs      = ! empty( $args['faqs'] ) && is_array( $args['faqs'] ) ? $args['faqs'] : array();
$class     = ! empty( $args['class'] ) ? ' ' . esc_attr( $args['class'] ) : '';
$id_prefix = ! empty( $args['id_prefix'] ) ? sanitize_key( $args['id_prefix'] ) : 'faq';

if ( empty( $faqs ) ) {
    return;
}
?>
<section class="faqSection<?php echo $class; ?>">
    <div class="container">
        <div class="faqWrapper">
            <header class="faqHeader">
                <h2 class="faqTitle"><span class="textGradient"><?php echo wp_kses_post( $title ); ?></span></h2>
            </header>
            <div class="faqContent">
                <ul class="faqList">
                    <?php foreach ( $faqs as $idx => $faq ) : ?>
                        <?php
                        $is_open  = ( $idx === 0 );
                        $q_id     = esc_attr( "{$id_prefix}-question-{$idx}" );
                        $a_id     = esc_attr( "{$id_prefix}-answer-{$idx}" );
                        $question = isset( $faq['q'] ) ? $faq['q'] : ( isset( $faq['question'] ) ? $faq['question'] : '' );
                        $answer   = isset( $faq['a'] ) ? $faq['a'] : ( isset( $faq['answer'] ) ? $faq['answer'] : '' );
                        ?>
                        <li class="faqItem <?php echo $is_open ? 'faqItemOpen' : ''; ?>">
                            <div class="faqIndex">
                                <span class="faqIndexNumber textGradient"><?php echo sprintf( '%02d', $idx + 1 ); ?></span>
                            </div>
                            <div class="faqItemContent">
                                <h3 class="faqItemHeader">
                                    <button
                                        type="button"
                                        id="<?php echo $q_id; ?>"
                                        class="faqButton"
                                        aria-expanded="<?php echo $is_open ? 'true' : 'false'; ?>"
                                        aria-controls="<?php echo $a_id; ?>"
                                    >
                                        <span class="faqQuestion"><?php echo esc_html( $question ); ?></span>
                                        <span class="faqToggle" aria-hidden="true">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M505.183 123.179c-9.087-9.089-23.824-9.089-32.912.002l-216.266 216.27L39.729 123.179c-9.087-9.089-23.824-9.089-32.912.002-9.089 9.089-9.089 23.824 0 32.912L239.55 388.82a23.27 23.27 0 0 0 32.91-.001l232.721-232.727c9.091-9.088 9.091-23.824.002-32.913"/></svg>
                                        </span>
                                    </button>
                                </h3>
                                <div
                                    id="<?php echo $a_id; ?>"
                                    class="faqAnswerWrapper"
                                    role="region"
                                    aria-labelledby="<?php echo $q_id; ?>"
                                >
                                    <div class="faqAnswerInner">
                                        <div class="faqAnswer">
                                            <?php echo wp_kses_post( $answer ); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>
