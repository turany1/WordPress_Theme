<?php get_header(); ?>

<div class="container py-5">
    <h1 class="mb-4"><?php the_archive_title(); ?></h1>

    <div class="row g-4">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-0">
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium', ['class' => 'card-img-top rounded-top']); ?>
                        </a>
                    <?php endif; ?>
                    <div class="card-body">
                        <h5 class="card-title"><a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark"><?php the_title(); ?></a></h5>
                        <p class="card-text text-muted"><small><?php echo get_the_date(); ?> · <?php the_category(', '); ?></small></p>
                        <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <a href="<?php the_permalink(); ?>" class="btn btn-outline-primary btn-sm">Read more</a>
                    </div>
                </div>
            </div>
        <?php endwhile; else : ?>
            <p><?php esc_html_e('No posts found.', 'my-custom-theme'); ?></p>
        <?php endif; ?>
    </div>

    <div class="mt-5">
        <?php get_template_part('parts/pagination'); ?>
    </div>
</div>

<?php get_footer(); ?>
