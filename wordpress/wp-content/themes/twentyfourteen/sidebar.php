<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>


    <aside>

        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
        <?php endif; ?>

<!--        <h4>Search Sidebar</h4>-->
<!--        <form class="search" action="#" method="Post">-->
<!--            <div class="input-group">-->
<!--                <input class="form-control" placeholder="Search..." name="email"  type="email" required="required">-->
<!--                        <span class="input-group-btn">-->
<!--                            <button class="button" type="submit" name="subscribe" >Go!</button>-->
<!--                        </span>-->
<!--            </div>-->
<!--        </form>-->
    </aside>
