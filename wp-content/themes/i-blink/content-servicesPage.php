<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
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
                            <li><a href="http://localhost/hight-blink/services/">Services</a></li>
                            <?php $permalink = get_permalink($post->post_parent); ?>
                            <li><a href="<?php echo $permalink; ?>"><?php echo get_the_title($post->post_parent) ?></a></li>
  							<li class="active"><?php the_title(); ?></li>
						</ol>
                    
                    </div>            
            	</div>
            </div>
            
		</div>


	</div>
<!-- /Container Tile & Breadcrumbs --> 
  
<!-- Main Container -->
<div class="main-wrapper">
    
    <div class="container"> <!-- Container -->
        
		<div class="row">
        
        	<div class="col-md-6">            
				
                <div class="blank-spacer padding-top20 padding-bottom20"></div>
                
				<h2 class="title-color"><?php the_field('titre_gauche'); ?></h2>
                <div class="hr-wrapper">
					<hr class="hr-short hr-circle-left margin-bottom30 margin-top10">
				</div>
                <div class="animation fadeInLeft">
                	<img alt="" src="<?php echo get_template_directory_uri(); ?>/img/theme/who.jpg" class="img-thumbnail alignleft">
                    <?php the_content(); ?>
                </div>
            
            </div>
            
            <div class="col-md-6">            
				
                <div class="blank-spacer padding-top20 padding-bottom20"></div>
                
                <h2 class="title-color">Vos atouts</h2>
                <div class="hr-wrapper">
					<hr class="hr-short hr-circle-left margin-bottom30 margin-top10">
				</div>
                <div class="progress-bars bars-slim">
                	<h5 class="progress-title color-default"><?php the_field('competence_01'); ?> <span class="pull-right"><?php the_field('pourcent_01'); ?>%</span></h5>  
                	<div class="progress progress-striped">
  						<div class="progress-bar animation fadeInLeftBig"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?php the_field('pourcent_01'); ?>%">
    						<span class="sr-only"><?php the_field('pourcent_01'); ?>% Complete</span>
  						</div>
					</div>
               		<h5 class="progress-title color-purple"><?php the_field('competence_02'); ?> <span class="pull-right"><?php the_field('pourcent_02'); ?>%</span></h5>
                	<div class="progress progress-striped">
  						<div class="progress-bar progress-bar-purple animation fadeInLeftBig"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?php the_field('pourcent_02'); ?>%">
    						<span class="sr-only"><?php the_field('pourcent_02'); ?>% Complete</span>
  						</div>
					</div>
                	<h5 class="progress-title color-orange"><?php the_field('competence_03'); ?> <span class="pull-right"><?php the_field('pourcent_03'); ?>%</span></h5>
                	<div class="progress progress-striped">
  						<div class="progress-bar progress-bar-orange animation fadeInLeftBig"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?php the_field('pourcent_03'); ?>%">
    						<span class="sr-only"><?php the_field('pourcent_03'); ?>% Complete</span>
  						</div>
					</div>
                	<h5 class="progress-title color-danger"><?php the_field('competence_04'); ?> <span class="pull-right"><?php the_field('pourcent_04'); ?>%</span></h5>
                	<div class="progress progress-striped">
  						<div class="progress-bar progress-bar-danger animation fadeInLeftBig"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?php the_field('pourcent_04'); ?>%">
    						<span class="sr-only"><?php the_field('pourcent_04'); ?>% Complete</span>
  						</div>
					</div>                    
                	<h5 class="progress-title color-success"><?php the_field('competence_05'); ?> <span class="pull-right"><?php the_field('pourcent_05'); ?>%</span></h5>
                	<div class="progress progress-striped">
  						<div class="progress-bar progress-bar-success animation fadeInLeftBig"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?php the_field('pourcent_05'); ?>%">
    						<span class="sr-only"><?php the_field('pourcent_05'); ?>% Complete</span>
  						</div>
					</div>
                </div> 
            
            </div>
        
        </div>
    
    </div> <!-- /Container -->

    <div class="container"> <!-- Container -->

        <div class="row">
        
        	<div class="col-md-12">
            	<hr class="hr-circle-center  margin-top40 margin-bottom40"/>
            </div>
        
        </div>

        <div class="row">
        
        	<div class="col-md-12">
            	<h1 class="text-center title-color"><?php the_field('slogan'); ?></h1>
                
                <?php the_field('texte_dinformation'); ?>	
                <p class="text-center"><a class="btn btn-primary btn-lg" href="http://localhost/hight-blink/services/">Voir nos autres services<i class="fa fa-share fa-margin-left"></i></a></p>
            </div>
        
        </div> 
        
         
    
    </div> <!-- /Container -->

 

                
	<div class="blank-spacer padding-xsmall"></div>

</div>
<!-- /Main Container -->


<!-- Footer Container -->
<div class="footer-wrapper">

	<!-- Footer Top Container -->
    <div class="footer-top">		
		<div id="map-canvas">
        </div>
        <div class="map-overlay">
        	<h3 class="map-overlay-title color-white"><i class="fa fa-plane"></i> Où nous trouver</h3>                
            <p class="lead">Avenue Louise 523, 2 étage, 1050 Bruxelles</p>
        </div>
	</div>
	<!-- /Footer Top Container -->