<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Espied
 */

get_header(); ?>

<!-- Container Tile & Breadcrumbs --> 
	<div class="fullsize"> 
    
    	<div class="page-header">
		
        	<div class="container">
            	<div class="row">
            		<div class="col-md-6">
						<h1 class="page-title"><?php the_title(); ?></h1>
                    </div>
                    <div class="col-md-6">
                            
						<ol class="breadcrumb">
  							<li><a class="disabled has-submenu" href="http://localhost/hight-blink">Accueil</a></li>
                            <li>Nos réalisations</li>
                            <li><?php the_title(); ?></li>
						</ol>
                    
                    </div>            
            	</div>
            </div>
            
		</div>

	</div>
<!-- /Container Tile & Breadcrumbs --> 

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'portfolio-single' ); ?>

		<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>