<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package    WordPress
 * @subpackage Twenty_Fourteen
 * @since      Twenty Fourteen 1.0
 */
?>

<?php twentyfourteen_post_thumbnail(); ?>
<?php if (in_array('category', get_object_taxonomies(get_post_type()))
    && twentyfourteen_categorized_blog()
) { ?>
<?php } ?>
<?php
if (is_single()) {
    the_title('<h2>', '</h2>');
} else {
    the_title(
        '<h2><a href="' . esc_url(get_permalink()) . '" rel="bookmark">',
        '</a></h2>'
    );
} ?>

<?php
if ('post' == get_post_type()) {
    twentyfourteen_posted_on();
}

if (is_search()) { ?>
    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div><!-- .entry-summary -->
<?php } else { ?>
    <div class="entry-content">
        <?php
        the_content(
            __(
                'Continue reading <span class="meta-nav">&rarr;</span>',
                'twentyfourteen'
            )
        );
        wp_link_pages(
            array(
                 'before' =>
                     '<div class="page-links"><span class="page-links-title">'
                     . __('Pages:', 'twentyfourteen') . '</span>',
                 'after' => '</div>',
                 'link_before' => '<span>',
                 'link_after' => '</span>',
            )
        );
        ?>
    </div><!-- .entry-content -->
<?php } ?>

<?php the_tags(
    '<footer class="entry-meta"><span class="tag-links">', '',
    '</span></footer>'
); ?>

<hr class="tall">