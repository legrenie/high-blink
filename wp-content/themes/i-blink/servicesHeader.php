<?php
/**
 * Template Name: Services Header
 * This is the template that displays full width page without sidebar
 *
 * @package sparkling
 */

get_header(); ?>

      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content', 'services2' ); ?>

        

      <?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
