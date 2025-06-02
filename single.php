<?php get_header(); ?>

<div class="container py-5">
  <div class="row">
    <div class="col-md-8">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article class="mb-5">
          <?php if (has_post_thumbnail()) : ?>
            <div class="mb-4">
              <?php the_post_thumbnail('large', ['class' => 'img-fluid rounded']); ?>
            </div>
          <?php endif; ?>

          <h1 class="post-title mb-3"><?php the_title(); ?></h1>

          <div class="post-meta text-muted mb-4">
            <small>
              Posted on <?php echo get_the_date(); ?> |
              by <?php the_author_posts_link(); ?> |
              in <?php the_category(', '); ?>
            </small>
          </div>

          <div class="post-content mb-5">
            <?php the_content(); ?>
          </div>

          <div class="post-tags mb-4">
            <?php the_tags('<span class="badge bg-secondary me-1">', '</span><span class="badge bg-secondary me-1">', '</span>'); ?>
          </div>

          <hr>
          <div class="comments-section mt-5">
            <?php comments_template(); ?>
          </div>
        </article>

      <?php endwhile; endif; ?>

    </div>

    <div class="col-md-4">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
