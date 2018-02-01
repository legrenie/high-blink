<?php
/**
 * @package Espied
 */
// Access global variable directly to set content_width
if ( isset( $GLOBALS['content_width'] ) )
	$GLOBALS['content_width'] = 1272;
?>

<!-- Main Container -->
<div class="main-wrapper">
    
	<div class="container container-inner"> <!-- Container -->

<div class="row margin-bottom50">
	<div class="col-md-12">            
		
		<div class="row">
			<div class="col-md-8">
				<div class="image-overlay animation fadeInLeft">
                    <?php
 if ( has_post_thumbnail()) {
   $full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
   echo '<img src="' . $full_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" class="img-thumbnail" />';
 }
 ?>
					<div class="overlay-fade">
						<a data-lightbox="image" href="<?php the_field('lien_du_projet') ?>"><i class="icon-overlay fa fa-search-plus"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class=" blank-spacer padding-small"></div>
				<h3 class="title-color heading-single"><span><?php the_field('titre_partie_1'); ?></span></h3>
				<?php the_content(); ?>
			</div>
		</div>

		<div class=" blank-spacer padding-medium"></div>
	

	</div>
</div>

		<div class="row">
			<div class="col-md-12">
           
            	<div class="portfolio-single-item">
                    <div class="portfolio-description">
                        <div class="portfolio-info">
                        	<div class="panel">
                            	<div class="panel-body">
                        			<p class="lead">Détails du projet</p>
                                    <!--<div class="portfolio-like">
										<a href="#" class="tooltip-on" title="Like">
											<div class="portfolio-like-icon"><i class="fa fa-heart"></i></div>
											<div class="output">76</div>
										</a>
									</div>-->
                                    <ul class="list-divider">
                                    	<li><strong>Auteur:</strong> <?php the_field('titre_partie_2'); ?></li>
                                        <li><strong>Date de remise:</strong> <?php the_field('titre_partie_3'); ?></li>
                                        <li><strong>Categorie:</strong> <?php the_field('contenu_01'); ?></li>
                                    </ul>
                            	</div>
                            </div>
                        </div>
                    	<h3 class="portfolio-title title-color heading-single"><span><?php the_field('titre_partie_4'); ?></span></h3>
						 <?php the_field('contenu_04'); ?>

                	</div>
                </div>

			</div>
		</div>

		<div class="row">
			<div class="col-md-6 col-sm-6">
            	<a href="<?php the_field('lien_du_projet') ?>" class="btn btn-default">voir le projet <i class="fa fa-share fa-margin-left"></i></a>
            </div>
			
		</div>
<!--
		<div class=" blank-spacer padding-small"></div>

		<h3 class="title-color heading-single"><span>Related Projects</span></h3>

	<div  class="simple-caroursel animation fadeInUp">
				
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
								<img alt="" src="img/demo/portfolio/06.jpg" >
                                <div class="overlay-fade">
                            		<a href="img/demo/clients/1.png"><i class="icon-overlay fa fa-link"></i></a>
								</div>
							</div>
						</div>
                    </div>
				</li>
				<li>
					<div class="work-entry">
                    	<div class="work-entry-content"> 
                        	<div class="image-overlay">
								<img alt="" src="img/demo/portfolio/02.jpg" >
                                <div class="overlay-fade">
                            		<a href="img/demo/clients/1.png"><i class="icon-overlay fa fa-link"></i></a>
								</div>
							</div>
						</div>
                    </div>
				</li>
				<li>
					<div class="work-entry">
                    	<div class="work-entry-content"> 
                        	<div class="image-overlay">
								<img alt="" src="img/demo/portfolio/07.jpg" >
                                <div class="overlay-fade">
                            		<a href="img/demo/clients/1.png"><i class="icon-overlay fa fa-link"></i></a>
								</div>
							</div>
						</div>
                    </div>
				</li>
				<li>
					<div class="work-entry">
                    	<div class="work-entry-content"> 
                        	<div class="image-overlay">
								<img alt="" src="img/demo/portfolio/11.jpg" >
                                <div class="overlay-fade">
                            		<a href="img/demo/clients/1.png"><i class="icon-overlay fa fa-link"></i></a>
								</div>
							</div>
						</div>
                    </div>
				</li>
				<li>
					<div class="work-entry">
                    	<div class="work-entry-content"> 
                        	<div class="image-overlay">
								<img alt="" src="img/demo/portfolio/15.jpg" >
                                <div class="overlay-fade">
                            		<a href="img/demo/clients/1.png"><i class="icon-overlay fa fa-link"></i></a>
								</div>
							</div>
						</div>
                    </div>
				</li>
				<li>
					<div class="work-entry">
                    	<div class="work-entry-content"> 
                        	<div class="image-overlay">
								<img alt="" src="img/demo/portfolio/16.jpg" >
                                <div class="overlay-fade">
                            		<a href="img/demo/clients/1.png"><i class="icon-overlay fa fa-link"></i></a>
								</div>
							</div>
						</div>
                    </div>
				</li>
			</ul>
			<div class="clearfix"></div>

		</div>
        		
	</div>

<hr />

<p class="text-center"><a href="#" class="btn btn-default btn-lg tooltip-on" title="Previous Project"><i class="fa fa-chevron-left"></i></a> &nbsp; <a href="#" class="btn btn-default btn-lg tooltip-on" title="Next Project"><i class="fa fa-chevron-right"></i></a></p>

-->

    </div> <!-- /Container -->

</div>
<!-- /Main Container -->

