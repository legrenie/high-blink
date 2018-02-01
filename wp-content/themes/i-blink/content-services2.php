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
    
    	<div class="page-header fancy-header parallax-wrapper parallax-background2" data-stellar-background-ratio="0.2">
		
        	<div class="container">
            	<div class="row">
                
            		<div class="col-md-12">
						<h1 class="page-title"><?php the_title(); ?></h1>
                        <h2 class="page-subtitle"><?php the_field('slogan_haut_de_page'); ?></h2>
                        <ol class="breadcrumb">
  							<li><a class="disabled has-submenu" href="http://localhost/hight-blink">Accueil</a></li>
                            <li><a href="http://localhost/hight-blink/services/">Services</a></li>
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
    
	<div class="container container-inner"> <!-- Container -->

		<div class="row">
        	<div class="col-md-8 col-md-offset-2">
				<p class="lead text-center"><?php the_field('content_top'); ?></p>                      	
            </div>
		</div>    

    </div> <!-- /Container -->

	<div class="fullsize fullsize-background"> <!-- Full Size Container -->
		<div class=" container container-inner">

		<div class="row">
        
        	<div class="col-sm-6 col-md-3">
				<div class="service-block sb-default">
                	<div class="service-block-icon text-center animation bounceIn">                    
						<div class="icon-wrapper icon-full-round fa-2x bg-color-default">
							<?php the_field('fa_fa_icone_01'); ?>
						</div>                       
                    </div>
                    <div class="service-block-title text-center">
            			<p><?php the_field('titre_service_01'); ?></p>
                    </div>
                    <div class="service-block-content text-center">
                		<?php the_field('contenu_service_01'); ?>
                    	<a href="<?php the_field('lien_services_01'); ?>" class="link-icon">En Savoir Plus <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>  	
            </div>

        	<div class="col-sm-6 col-md-3">
				<div class="service-block sb-purple">
                	<div class="service-block-icon text-center animation bounceIn">                    
						<div class="icon-wrapper icon-full-round fa-2x bg-color-purple">
							<?php the_field('fa_fa_icone_02'); ?>
						</div>                       
                    </div>
                    <div class="service-block-title text-center">
            			<p><?php the_field('titre_service_02'); ?></p>
                    </div>
                    <div class="service-block-content text-center">
                		<?php the_field('contenu_service_02'); ?>
                    	<a href="<?php the_field('lien_services_02'); ?>" class="link-icon purple">En Savoir Plus <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>  	
            </div>
 
         	<div class="col-sm-6 col-md-3">
				<div class="service-block sb-orange">
                	<div class="service-block-icon text-center animation bounceIn">                    
						<div class="icon-wrapper icon-full-round fa-2x bg-color-orange">
							<?php the_field('fa_fa_icone_03'); ?>
						</div>                       
                    </div>
                    <div class="service-block-title text-center">
            			<p><?php the_field('titre_service_03'); ?></p>
                    </div>
                    <div class="service-block-content text-center">
                		<?php the_field('contenu_service_03'); ?>
                    	<a href="<?php the_field('lien_services_03'); ?>" class="link-icon orange">En Savoir Plus <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>  	
            </div>

         	<div class="col-sm-6 col-md-3">
				<div class="service-block sb-success">
                	<div class="service-block-icon text-center animation bounceIn">                    
						<div class="icon-wrapper icon-full-round fa-2x bg-color-success">
							<?php the_field('fa_fa_icone_04'); ?>
						</div>                       
                    </div>
                    <div class="service-block-title text-center">
            			<p><?php the_field('titre_service_04'); ?></p>
                    </div>
                    <div class="service-block-content text-center">
                		<?php the_field('contenu_service_04'); ?>
                    	<a href="<?php the_field('lien_services_04'); ?>" class="link-icon success">En Savoir Plus <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>  	
            </div>
            
		</div>
        
  <?php
			if( get_field('titre_service_05') )
{
	?>      
     <div class="row"> 
    	<div class="col-md-12">
			<hr class="hr-circle-center margin-top30 margin-bottom30">
		</div>
    </div>  
      
 <?php } ?> 
        <div class="row">
        <?php
			if( get_field('titre_service_05') )
{
	?>
        	<div class="col-sm-6 col-md-3">
				<div class="service-block sb-danger">
                	<div class="service-block-icon text-center animation bounceIn">                    
						<div class="icon-wrapper icon-full-round fa-2x bg-color-danger">
							<?php the_field('fa_fa_icone_05'); ?>
						</div>                       
                    </div>
                    <div class="service-block-title text-center">
            			<p><?php the_field('titre_service_05'); ?></p>
                    </div>
                    <div class="service-block-content text-center">
                		<?php the_field('contenu_service_05'); ?>
                    	<a href="<?php the_field('lien_services_05'); ?>" class="link-icon danger">En Savoir Plus <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>  	
            </div>
<?php } ?>

<?php
			if( get_field('titre_service_06') )
{
	?>
        	<div class="col-sm-6 col-md-3">
				<div class="service-block sb-info">
                	<div class="service-block-icon text-center animation bounceIn">                    
						<div class="icon-wrapper icon-full-round fa-2x bg-color-info">
							<?php the_field('fa_fa_icone_06'); ?>
						</div>                       
                    </div>
                    <div class="service-block-title text-center">
            			<p><?php the_field('titre_service_06'); ?></p>
                    </div>
                    <div class="service-block-content text-center">
                		<?php the_field('contenu_service_06'); ?>
                    	<a href="<?php the_field('lien_services_06'); ?>" class="link-icon info">En Savoir Plus <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>  	
            </div>
            
            <?php } ?>
  <?php
			if( get_field('titre_service_07') )
{
	?>
         	<div class="col-sm-6 col-md-3">
				<div class="service-block sb-dark">
                	<div class="service-block-icon text-center animation bounceIn">                    
						<div class="icon-wrapper icon-full-round fa-2x bg-color-dark">
							<?php the_field('fa_fa_icone_07'); ?>
						</div>                       
                    </div>
                    <div class="service-block-title text-center">
            			<p><?php the_field('titre_service_07'); ?></p>
                    </div>
                    <div class="service-block-content text-center">
                		<?php the_field('contenu_service_07'); ?>
                    	<a href="<?php the_field('lien_services_07'); ?>" class="link-icon dark">En Savoir Plus <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>  	
            </div>
            <?php } ?>
 <?php
			if( get_field('titre_service_08') )
{
	?>
         	<div class="col-sm-6 col-md-3">
				<div class="service-block sb-warning">
                	<div class="service-block-icon text-center animation bounceIn">                    
						<div class="icon-wrapper icon-full-round fa-2x bg-color-warning">
							<?php the_field('fa_fa_icone_08'); ?>
						</div>                       
                    </div>
                    <div class="service-block-title text-center">
            			<p><?php the_field('titre_service_08'); ?></p>
                    </div>
                    <div class="service-block-content text-center">
                		<?php the_field('contenu_service_08'); ?>
                    	<a href="<?php the_field('lien_services_08'); ?>" class="link-icon warning">En Savoir Plus <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>  	
            </div>
          <?php } ?>  
		</div>
        
        </div>    
    </div><!-- /Full Size Container -->

	<div class="container container-inner"> <!-- Container -->


		<div class="row">
        	<div class="col-md-8 col-md-offset-2">          
			  	<div class="hr-icon"><hr/><i class="fa fa-trophy icon-divider color-default"></i></div> 
                <h2 class="text-center title-color">Ils nous on fait confiance</h2>                      	
            </div>
		</div>  

		<div class="row">
        	<div class="col-md-12">
	<!-- Carousel -->
	<div  class="simple-caroursel animation bounceIn">
				
		<div class="list_carousel responsive" >
            <div class="carousel-navigation">
            	<a id="carou-prev" class="prev" href="#"><i class="fa fa-angle-left"></i></a>
                <a id="carou-next" class="next" href="#"><i class="fa fa-angle-right"></i></a>
			</div>
			<ul class="latest-work disable-select">
				<li>
					<div class="work-entry">
                    	<div class="work-entry-content"> 
                        	<div class="image-overlay">
								<img alt="" src="<?php echo get_template_directory_uri(); ?>/img/demo/clients/1.png" >
                                <div class="overlay-fade">
                            		<a href="<?php echo get_template_directory_uri(); ?>/img/demo/clients/1.png"><i class="icon-overlay fa fa-link"></i></a>
								</div>
							</div>
						</div>
                    </div>
				</li>
				<li>
					<div class="work-entry">
                    	<div class="work-entry-content"> 
                        	<div class="image-overlay">
								<img alt="" src="<?php echo get_template_directory_uri(); ?>/img/demo/clients/2.png" >
                                <div class="overlay-fade">
                            		<a href="<?php echo get_template_directory_uri(); ?>/img/demo/clients/1.png"><i class="icon-overlay fa fa-link"></i></a>
								</div>
							</div>
						</div>
                    </div>
				</li>
				<li>
					<div class="work-entry">
                    	<div class="work-entry-content"> 
                        	<div class="image-overlay">
								<img alt="" src="<?php echo get_template_directory_uri(); ?>/img/demo/clients/3.png" >
                                <div class="overlay-fade">
                            		<a href="<?php echo get_template_directory_uri(); ?>/img/demo/clients/1.png"><i class="icon-overlay fa fa-link"></i></a>
								</div>
							</div>
						</div>
                    </div>
				</li>
				<li>
					<div class="work-entry">
                    	<div class="work-entry-content"> 
                        	<div class="image-overlay">
								<img alt="" src="<?php echo get_template_directory_uri(); ?>/img/demo/clients/4.png" >
                                <div class="overlay-fade">
                            		<a href="<?php echo get_template_directory_uri(); ?>/img/demo/clients/1.png"><i class="icon-overlay fa fa-link"></i></a>
								</div>
							</div>
						</div>
                    </div>
				</li>
				<li>
					<div class="work-entry">
                    	<div class="work-entry-content"> 
                        	<div class="image-overlay">
								<img alt="" src="<?php echo get_template_directory_uri(); ?>/img/demo/clients/5.png" >
                                <div class="overlay-fade">
                            		<a href="<?php echo get_template_directory_uri(); ?>/img/demo/clients/1.png"><i class="icon-overlay fa fa-link"></i></a>
								</div>
							</div>
						</div>
                    </div>
				</li>
				<li>
					<div class="work-entry">
                    	<div class="work-entry-content"> 
                        	<div class="image-overlay">
								<img alt="" src="<?php echo get_template_directory_uri(); ?>/img/demo/clients/6.png" >
                                <div class="overlay-fade">
                            		<a href="<?php echo get_template_directory_uri(); ?>/img/demo/clients/1.png"><i class="icon-overlay fa fa-link"></i></a>
								</div>
							</div>
						</div>
                    </div>
				</li>
			</ul>
			<div class="clearfix"></div>

		</div>
        		
	</div>
    <!-- /Carousel -->            
            </div>        
        </div>

	 
    
    </div><!-- /Container -->

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