<li <?php wc_product_class( 'col-md-4 mb-4', $product ); ?>>
  <div class="card h-100 shadow-sm">
    <a href="<?php the_permalink(); ?>">
      <?php woocommerce_show_product_loop_sale_flash(); ?>
      <?php woocommerce_template_loop_product_thumbnail(); ?>
    </a>
    <div class="card-body d-flex flex-column justify-content-between">
      <h5 class="card-title"><?php the_title(); ?></h5>
      <div class="price mb-2"><?php woocommerce_template_loop_price(); ?></div>
      <?php woocommerce_template_loop_add_to_cart(); ?>
    </div>
  </div>
</li>
