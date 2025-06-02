<?php
defined('ABSPATH') || exit;

get_header('shop'); ?>

<div class="container py-5">
    <div class="row">
        <?php
        while (have_posts()) :
            the_post();

            wc_get_template_part('content', 'single-product');

        endwhile;
        ?>
    </div>
</div>

<?php
get_footer('shop');
