<?php
defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
?>

<main id="primary" class="site-main container">
    <?php if ( woocommerce_product_loop() ) : ?>
        <div class="row">
            <?php woocommerce_product_loop_start(); ?>

            <?php if ( wc_get_loop_prop( 'total' ) ) {
                while ( have_posts() ) {
                    the_post();
                    wc_get_template_part( 'content', 'product' );
                }
            } ?>

            <?php woocommerce_product_loop_end(); ?>
        </div>
        
        <?php do_action( 'woocommerce_after_shop_loop' ); ?>

    <?php else : ?>
        <?php do_action( 'woocommerce_no_products_found' ); ?>
    <?php endif; ?>
</main>

<?php
get_footer( 'shop' );
?>
