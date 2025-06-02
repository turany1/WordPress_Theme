<?php
global $wp_query;

$big = 999999999; // need an unlikely integer
$pages = paginate_links(array(
    'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
    'format'    => '?paged=%#%',
    'current'   => max(1, get_query_var('paged')),
    'total'     => $wp_query->max_num_pages,
    'type'      => 'array',
    'prev_text' => '&laquo;',
    'next_text' => '&raquo;',
));

if (is_array($pages)) {
    echo '<nav><ul class="pagination justify-content-center">';
    foreach ($pages as $page) {
        echo '<li class="page-item' . (strpos($page, 'current') !== false ? ' active' : '') . '">';
        echo str_replace('page-numbers', 'page-link', $page);
        echo '</li>';
    }
    echo '</ul></nav>';
}
?>
