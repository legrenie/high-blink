<?php
/**
 * Template Name: Video
 *
 * This is the template that displays full width page without sidebar
 *
 * @package sparkling
 */

get_header(); ?>

      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content', 'video' ); ?>

        

      <?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
