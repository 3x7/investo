<?php
/**
 * The template for displaying Category pages
 *
 * @link       http://codex.wordpress.org/Template_Hierarchy
 *
 * @package    WordPress
 * @subpackage Twenty_Fourteen
 * @since      Twenty Fourteen 1.0
 */

get_header(); ?>

    <!-- crumbs-->
    <div class="crumbs border_bottom">
        <div class="container">
            <ul>
                <li><a href="/">Home</a></li>
                <li>/</li>
                <li>News</li>
            </ul>
        </div>
    </div>
    <!-- End crumbs-->

    <!-- Info -->
    <section class="padding">
        <div class="container">
            <div class="row-fluid">
                <div class="span8">

                    <?php if (have_posts()) : ?>

                        <h2><?php printf(
                                __('Category Archives: %s', 'twentyfourteen'),
                                single_cat_title('', false)
                            ); ?></h2>

                        <?php
                        // Show an optional term description.
                        $term_description = term_description();
                        if (!empty($term_description)) :
                            printf(
                                '<div class="taxonomy-description">%s</div>',
                                $term_description
                            );
                        endif;
                        ?>

                        <?php
                        // Start the Loop.
                        while (have_posts()) : the_post();

                            /*
                             * Include the post format-specific template for the content. If you want to
                             * use this in a child theme, then include a file called called content-___.php
                             * (where ___ is the post format) and that will be used instead.
                             */
                            get_template_part('content', get_post_format());

                        endwhile;
                        // Previous/next page navigation.
                        twentyfourteen_paging_nav();

                    else :
                        // If no content, include the "No posts found" template.
                        get_template_part('content', 'none');

                    endif;
                    ?>
                </div>
                <!-- Sidebars -->
                <div class="span4 sidebars">
                    <?php get_sidebar('content'); ?>
                    <?php get_sidebar(); ?>
                </div>
                <!-- End Sidebars -->
            </div>
        </div>
        <!-- End Container-->
    </section>
    <!-- End Info-->
<?php
get_footer();
