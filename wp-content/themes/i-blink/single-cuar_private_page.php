<?php
/**
 * The template for displaying all single posts and attachments
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

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'content', 'privatePage' );


			
		// End the loop.
		endwhile;
		?>

</div>
</div>
</div>
</div>

<?php get_footer(); ?>
