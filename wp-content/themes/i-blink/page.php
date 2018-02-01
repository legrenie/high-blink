<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div class="fullsize"> 
    
    	<div class="page-header">
		
        	<div class="container">
            	<div class="row">
            		<div class="col-md-6">
						<h1 class="title-color page-title"><?php the_title(); ?></h1>
                    </div>
                    <div class="col-md-6">
                            
						<ol class="breadcrumb">
  							<li><a class="disabled has-submenu" href="http://localhost/hight-blink">Accueil</a></li>
  							<li class="active"><?php the_title(); ?></li>
						</ol>
                    
                    </div>            
            	</div>
            </div>
            
		</div>


	</div>

<!-- Main Container -->
<div class="main-wrapper">
    
    <div class="container container-inner"> <!-- Container -->

		<div class="row">        
        	<div class="col-md-12">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		// End the loop.
		endwhile;
		?>

		</div></div></div></div>

<?php get_footer(); ?>
