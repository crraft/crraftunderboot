<?php
/**
 * Template Name: Under Construction
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between. Good for landingpages and other types of pages where you want to add a lot of custom markup
 *
 * @package crraftunderboot
 */

wp_head(); ?>

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'loop-templates/content', 'empty' ); ?>

                <?php endwhile; // end of the loop. ?>
