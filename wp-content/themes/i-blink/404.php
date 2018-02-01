<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<!-- Container Tile & Breadcrumbs --> 
	<div class="fullsize"> 
    
    	<div class="page-header inner-header-image2">
		
        	<div class="container">
            	<div class="row">
            		<div class="col-md-7">
						<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyfifteen' ); ?></h1>
                    </div>
                    <div class="col-md-5">
                            
						<ol class="breadcrumb">
  							<li><a class="disabled has-submenu" href="http://localhost/hight-blink/">Accueil</a></li>
                            <li>404 Page non trouvé</li>
						</ol>
                    
                    </div>            
            	</div>
            </div>
            
		</div>


	</div>
<!-- /Container Tile & Breadcrumbs -->

<div class="main-wrapper">

	<div class="container">    
       
		<div class="row">

			<div class="col-md-12">
				
                <div class="error-block panel">
                			
            		<h1 class="error-title">4<i class="fa fa-power-off color-default animation bounceIn"></i>4</h1>
                    <h2><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyfifteen' ); ?></h2>
                    <p class="lead">
                    	<?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyfifteen' ); ?>                   
                    </p>
                    
                	<div class="row">
                    	<div class="col-md-6 col-md-offset-3">   
                    	
                            <?php get_search_form(); ?>
						
                        </div>
                	</div>
                    <div class="blank-spacer padding-xsmall"></div>
                    <a class="btn btn-primary btn-lg" href="http://localhost/hight-blink/">Ou retournez à la page d'accueil</a>
                    
                </div>
                    
			</div>

		</div>

	</div>

</div>


<?php get_footer(); ?>
