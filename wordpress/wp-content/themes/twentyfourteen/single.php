<?php
/**
 * The Template for displaying all single posts
 *
 * @package    WordPress
 * @subpackage Twenty_Fourteen
 * @since      Twenty Fourteen 1.0
 */

get_header();?>

    <!-- crumbs-->
    <div class="crumbs border_bottom">
        <div class="container">
            <ul>
                <li><a href="/">Home</a></li>
                <li>/</li>
                <li><a href="/cms/">News</a></li>
                <li>/</li>
                <li><?php echo get_the_title(); ?> </li>
            </ul>
        </div>
    </div>
    <!-- End crumbs-->

    <!-- Info -->
    <section class="padding">
        <div class="container">
            <div class="row-fluid">
                <div class="span8">

                    <?php

                    // Start the Loop.
                    while (have_posts()) : the_post();

                        /*
                         * Include the post format-specific template for the content. If you want to
                         * use this in a child theme, then include a file called called content-___.php
                         * (where ___ is the post format) and that will be used instead.
                         */
                        get_template_part('content', get_post_format());

                        // Previous/next post navigation.
                        twentyfourteen_post_nav();

                    endwhile;
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
?>