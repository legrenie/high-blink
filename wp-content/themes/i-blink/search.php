<?php
/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div class="fullsize"> 
    
    	<div class="page-header inner-header-image2">
		
        	<div class="container">
            	<div class="row">
            		<div class="col-md-8">
						<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyfifteen' ), get_search_query() ); ?></h1>
                    </div>
                    <div class="col-md-4">
                            
						<ol class="breadcrumb">
  							<li><a class="disabled has-submenu" href="http://localhost/hight-blink/">Accueil</a></li>
                            <li>Recherche</li>
						</ol>
                    
                    </div>            
            	</div>
            </div>
            
		</div>


	</div>
    
<!-- Main Container -->
<div class="main-wrapper">

	<div class="container container-inner">    
		
        <div class="row">        	
            <div class="col-md-6 col-md-offset-3">
            	<div class="panel">
            		<div class="panel-body">
						<h3 class="text-center">Nouvelle recherche</h3>
                		<?php get_search_form(); ?>
                		<p class="text-center">Si vous n'êtes pas heureux avec les résultats ci-dessous s'il vous plaît faites une autre recherche .</p> 
                	</div>
                </div>               
            </div>        
        </div>
         
		<div class="row">
			<div class="col-md-12">
            	<p class="lead">Vos résultats pour : <span class="color-default"><?php printf( get_search_query() ); ?></span></p>
                <hr/>
		<?php if ( have_posts() ) : ?>


			<?php
			// Start the loop.
			while ( have_posts() ) : the_post(); ?>

				<?php
				/*
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', 'search' );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>
        
        </div>            
		</div> 
       

	</div>

</div>
<!-- /Main Container -->

<?php get_footer(); ?>
