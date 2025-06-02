<?php
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="mt-5">
    <?php if (have_comments()) : ?>
        <h3 class="mb-4"><?php comments_number(); ?></h3>
        <ul class="list-unstyled">
            <?php
            wp_list_comments(array(
                'style' => 'ul',
                'short_ping' => true,
                'avatar_size' => 48,
                'callback' => function($comment, $args, $depth) {
                    ?>
                    <li <?php comment_class('mb-4'); ?> id="comment-<?php comment_ID(); ?>">
                        <div class="d-flex">
                            <div class="me-3">
                                <?php echo get_avatar($comment, 48); ?>
                            </div>
                            <div>
                                <strong><?php comment_author(); ?></strong>
                                <small class="text-muted d-block mb-2"><?php comment_date(); ?> at <?php comment_time(); ?></small>
                                <?php comment_text(); ?>
                                <div class="mt-2">
                                    <?php comment_reply_link(array_merge($args, array(
                                        'reply_text' => 'Reply',
                                        'depth' => $depth,
                                        'max_depth' => $args['max_depth']
                                    ))); ?>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php
                }
            ));
            ?>
        </ul>
    <?php endif; ?>

    <?php if (comments_open()) : ?>
        <div class="mt-5">
            <h4 class="mb-4">Leave a comment</h4>
            <?php
            comment_form(array(
                'class_submit' => 'btn btn-dark',
                'comment_field' => '<div class="mb-3"><textarea class="form-control" id="comment" name="comment" rows="5" required></textarea></div>',
                'fields' => array(
                    'author' => '<div class="mb-3"><input class="form-control" placeholder="Name" name="author" type="text" required></div>',
                    'email'  => '<div class="mb-3"><input class="form-control" placeholder="Email" name="email" type="email" required></div>',
                )
            ));
            ?>
        </div>
    <?php endif; ?>
</div>
