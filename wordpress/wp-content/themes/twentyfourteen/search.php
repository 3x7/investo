<?php
/**
 * The template for displaying Search Results pages
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
                <li><a href="/cms/">News</a></li>
                <li>/</li>
                <li>Search Results</li>
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

                        <?php printf(
                            __('Search Results for: %s', 'twentyfourteen'),
                            get_search_query()
                        ); ?>

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
                        // Previous/next post navigation.
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
