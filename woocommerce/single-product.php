<?php
defined('ABSPATH') || exit;

get_header('shop'); ?>

<div class="container py-5">
  <div class="row">
    <div class="col-md-6">
      <?php
        /**
         * Hook: woocommerce_before_single_product_summary.
         *
         * @hooked woocommerce_show_product_sale_flash - 10
         * @hooked woocommerce_show_product_images - 20
         */
        do_action('woocommerce_before_single_product_summary');
      ?>
    </div>

    <div class="col-md-6">
      <div class="product-summary">
        <?php
          /**
           * Hook: woocommerce_single_product_summary.
           *
           * @hooked woocommerce_template_single_title - 5
           * @hooked woocommerce_template_single_rating - 10
           * @hooked woocommerce_template_single_price - 10
           * @hooked woocommerce_template_single_excerpt - 20
           * @hooked woocommerce_template_single_add_to_cart - 30
           * @hooked woocommerce_template_single_meta - 40
           */
          do_action('woocommerce_single_product_summary');
        ?>
      </div>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col">
      <?php
        /**
         * Hook: woocommerce_after_single_product_summary.
         *
         * @hooked woocommerce_output_product_data_tabs - 10
         * @hooked woocommerce_upsell_display - 15
         * @hooked woocommerce_output_related_products - 20
         */
        do_action('woocommerce_after_single_product_summary');
      ?>
    </div>
  </div>
</div>

<?php get_footer('shop'); ?>
