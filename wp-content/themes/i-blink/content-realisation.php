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
						<h1 class="page-title">Portfolio 4 Columns</h1>
                    </div>
                    <div class="col-md-6">
                            
						<ol class="breadcrumb">
  							<li><a class="disabled has-submenu" href="http://localhost/hight-blink">Home</a></li>
                            <li>Portfolio</li>
                            <li>Portfolio 4 Columns</li>
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
        	<div class="text-center">
				<i class="fa fa-trophy fa-4x color-default"></i>
                <div class=" blank-spacer padding-xsmall"></div>
    			<h2 class="title-small heading-single"><span>Our Works</span></h2>                
                <p class="lead">Aenean lacinia aliquet dignissim. Nunc eget viverra ante. Donec sit amet purus eros. In eget pellentesque ipsum, in hendrerit felis. Sed convallis nulla in vulputate posuere.</p>
        	</div>
        </div>
    </div>

	<section id="options" class="clearfix">
	
	<ul data-option-key="filter" class="option-set list-inline text-center" id="filters">
		<li><a class="btn btn-default btn-primary" href="#filter" data-option-value="*">All</a></li>
		<li><a class="btn btn-default" href="#filter" data-option-value=".filter1">Websites</a></li>
		<li><a class="btn btn-default" href="#filter" data-option-value=".filter2">Print</a></li>
		<li><a class="btn btn-default" href="#filter" data-option-value=".filter3">Corporate</a></li>										    	  
	</ul>

	</section>
<?php the_content(); ?>
<div class="portfolio-container portfolio-active">
	<div id="portfolio-container-inner" class="variable-sizes clearfix portfolio-4-cols with-toggle">

		<div class="element isotope-item filter1 filter3">
			<div class="portfolio-inner">
				<div class="image-overlay">
					<img alt="" src="<?php echo get_template_directory_uri(); ?>/img/demo/portfolio/01.jpg"> 
					<div class="overlay-fade">
						<a data-lightbox="image" href="<?php echo get_template_directory_uri(); ?>/img/demo/portfolio/01.jpg"><i class="icon-overlay fa fa-search-plus"></i></a>
					</div>
				</div>
				<div class="portfolio-info-toggle">
                	<h3 class="portfolio-title">Running Simplicity<span class="fa fa-plus-square"></span></h3>
                </div>                  
				<div class="portfolio-toggle" style="display:none;">
                	<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus.</p>
                	<a class="btn btn-sm btn-primary">Visit Project <i class="fa fa-share fa-margin-left"></i></a>
                </div>              
			</div>
		</div>

		<div class="element isotope-item filter2">
			<div class="portfolio-inner">
				<div class="image-overlay">
					<img alt="" src="<?php echo get_template_directory_uri(); ?>/img/demo/portfolio/02.jpg"> 
					<div class="overlay-hslide">
						<a data-lightbox="video" href="http://vimeo.com/56974716"><i class="icon-overlay fa fa-film"></i></a>
					</div>
				</div>
				<div class="portfolio-info-toggle">
                	<h3 class="portfolio-title">Overview Scene<span class="fa fa-plus-square"></span></h3>
                </div>                  
				<div class="portfolio-toggle" style="display:none;">
                	<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus.</p>
                	<a class="btn btn-sm btn-primary">Visit Project <i class="fa fa-share fa-margin-left"></i></a>
                </div> 
			</div>
		</div>

		<div class="element isotope-item filter1">
			<div class="portfolio-inner">
				<div class="image-overlay zoom-image rotate-image-left">
					<img alt="" src="<?php echo get_template_directory_uri(); ?>/img/demo/portfolio/03.jpg"> 
					<div class="overlay-zoom">
						<a data-lightbox="image" href="<?php echo get_template_directory_uri(); ?>/img/demo/portfolio/03.jpg"><i class="icon-overlay fa fa-link"></i></a>
					</div>
				</div>
				<div class="portfolio-info-toggle">
                	<h3 class="portfolio-title">Apps in the BOX<span class="fa fa-plus-square"></span></h3>
                </div>                  
				<div class="portfolio-toggle" style="display:none;">
                	<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus.</p>
                	<a class="btn btn-sm btn-primary">Visit Project <i class="fa fa-share fa-margin-left"></i></a>
                </div> 
			</div>
		</div>

		<div class="element isotope-item filter1 filter2">
			<div class="portfolio-inner">
				<div class="image-overlay">
					<img alt="" src="<?php echo get_template_directory_uri(); ?>/img/demo/portfolio/04.jpg"> 
					<div class="overlay-vslide">
						<a data-lightbox="video" href="http://www.youtube.com/watch?v=B4PcV06hz9g"><i class="icon-overlay fa fa-play"></i></a>
					</div>
				</div>
				<div class="portfolio-info-toggle">
                	<h3 class="portfolio-title">Time's Up<span class="fa fa-plus-square"></span></h3>
                </div>                  
				<div class="portfolio-toggle" style="display:none;">
                	<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus.</p>
                	<a class="btn btn-sm btn-primary">Visit Project <i class="fa fa-share fa-margin-left"></i></a>
                </div> 
			</div>
		</div>
		
		<div class="element isotope-item filter2 filter3">
			<div class="portfolio-inner">
				<div class="image-overlay zoom-image">
					<img alt="" src="img/demo/portfolio/05.jpg"> 
					<div class="overlay-zoom">
						<a data-lightbox="image" href="<?php echo get_template_directory_uri(); ?>/img/demo/portfolio/05.jpg"><i class="icon-overlay fa fa-external-link"></i></a>
					</div>
				</div>
				<div class="portfolio-info-toggle">
                	<h3 class="portfolio-title">Flying Ideas<span class="fa fa-plus-square"></span></h3>
                </div>                  
				<div class="portfolio-toggle" style="display:none;">
                	<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus.</p>
                	<a class="btn btn-sm btn-primary">Visit Project <i class="fa fa-share fa-margin-left"></i></a>
                </div> 
			</div>
		</div>
		
		<div class="element isotope-item filter3">
			<div class="portfolio-inner">
				<div class="image-overlay">
					<img alt="" src="<?php echo get_template_directory_uri(); ?>/img/demo/portfolio/06.jpg"> 
					<div class="overlay-hslide">
						<a data-lightbox="map" href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom"><i class="icon-overlay fa fa-map-marker"></i></a>
					</div>
				</div>
				<div class="portfolio-info-toggle">
                	<h3 class="portfolio-title">Touch the Future<span class="fa fa-plus-square"></span></h3>
                </div>                  
				<div class="portfolio-toggle" style="display:none;">
                	<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus.</p>
                	<a class="btn btn-sm btn-primary">Visit Project <i class="fa fa-share fa-margin-left"></i></a>
                </div> 
			</div>
		</div>
		
		<div class="element isotope-item filter2">
			<div class="portfolio-inner">
				<div class="image-overlay zoom-image">
					<img alt="" src="<?php echo get_template_directory_uri(); ?>/img/demo/portfolio/07.jpg"> 
					<div class="overlay-zoom">
						<a data-lightbox="image" href="img/demo/portfolio/07.jpg"><i class="icon-overlay fa fa-info"></i></a>
					</div>
				</div>
				<div class="portfolio-info-toggle">
                	<h3 class="portfolio-title">Social Vision<span class="fa fa-plus-square"></span></h3>
                </div>                  
				<div class="portfolio-toggle" style="display:none;">
                	<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus.</p>
                	<a class="btn btn-sm btn-primary">Visit Project <i class="fa fa-share fa-margin-left"></i></a>
                </div> 
			</div>
		</div>
		
		<div class="element isotope-item filter1 filter3">
			<div class="portfolio-inner">
				<div class="image-overlay zoom-image rotate-image-right">
					<img alt="" src="<?php echo get_template_directory_uri(); ?>/img/demo/portfolio/08.jpg"> 
					<div class="overlay-zoom">
						<a data-lightbox="image" href="<?php echo get_template_directory_uri(); ?>/img/demo/portfolio/08.jpg"><i class="icon-overlay fa fa-picture-o"></i></a>
					</div>
				</div>
				<div class="portfolio-info-toggle">
                	<h3 class="portfolio-title">I'Television<span class="fa fa-plus-square"></span></h3>
                </div>                  
				<div class="portfolio-toggle" style="display:none;">
                	<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus.</p>
                	<a class="btn btn-sm btn-primary">Visit Project <i class="fa fa-share fa-margin-left"></i></a>
                </div> 
			</div>
		</div>
		
		<div class="element isotope-item filter1 filter3">
			<div class="portfolio-inner">
				<div class="image-overlay">
					<div class="simple-slider-portfolio">
						<ul class="slides">
							<li><img alt="" src="<?php echo get_template_directory_uri(); ?>/img/demo/portfolio/09.jpg"></li>
							<li><img alt="" src="<?php echo get_template_directory_uri(); ?>/img/demo/portfolio/01.jpg"></li>
							<li><img alt="" src="<?php echo get_template_directory_uri(); ?>/img/demo/portfolio/02.jpg"></li>
						</ul>
					</div>
				</div>
				<div class="portfolio-info-toggle">
                	<h3 class="portfolio-title">Shopping Touch<span class="fa fa-plus-square"></span></h3>
                </div>                  
				<div class="portfolio-toggle" style="display:none;">
                	<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus.</p>
                	<a class="btn btn-sm btn-primary">Visit Project <i class="fa fa-share fa-margin-left"></i></a>
                </div> 
			</div>
		</div>
		
		<div class="element isotope-item filter2">
			<div class="portfolio-inner">
				<div class="image-overlay">
					<img alt="" src="<?php echo get_template_directory_uri(); ?>/img/demo/portfolio/10.jpg"> 
					<div class="overlay-fade">
						<a data-lightbox="video" href="http://www.youtube.com/watch?v=B4PcV06hz9g"><i class="icon-overlay fa fa-youtube"></i></a>
					</div>
				</div>
				<div class="portfolio-info-toggle">
                	<h3 class="portfolio-title">Up, up and away<span class="fa fa-plus-square"></span></h3>
                </div>                  
				<div class="portfolio-toggle" style="display:none;">
                	<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus.</p>                    
                	<a class="btn btn-sm btn-primary">Visit Project <i class="fa fa-share fa-margin-left"></i></a>
                </div> 
			</div>
		</div>

		<div class="element isotope-item filter1">
			<div class="portfolio-inner">
				<div class="image-overlay">
					<img alt="" src="<?php echo get_template_directory_uri(); ?>/img/demo/portfolio/11.jpg"> 
					<div class="overlay-fade">
						<a data-lightbox="video" href="http://vimeo.com/56974716"><i class="icon-overlay fa fa-vimeo-square"></i></a>
					</div>
				</div>
				<div class="portfolio-info-toggle">
                	<h3 class="portfolio-title">Planning Ahead<span class="fa fa-plus-square"></span></h3>
                </div>                  
				<div class="portfolio-toggle" style="display:none;">
                	<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus.</p>
                	<a class="btn btn-sm btn-primary">Visit Project <i class="fa fa-share fa-margin-left"></i></a>
                </div> 
			</div>
		</div>

		<div class="element isotope-item filter1 filter3">
			<div class="portfolio-inner">
				<div class="image-overlay zoom-image rotate-image-left">
					<img alt="" src="<?php echo get_template_directory_uri(); ?>/img/demo/portfolio/12.jpg"> 
					<div class="overlay-hslide">
						<a data-lightbox="image" href="<?php echo get_template_directory_uri(); ?>/img/demo/portfolio/12.jpg"><i class="icon-overlay fa fa-apple"></i></a>
					</div>
				</div>
				<div class="portfolio-info-toggle">
                	<h3 class="portfolio-title">True Colors<span class="fa fa-plus-square"></span></h3>
                </div>                  
				<div class="portfolio-toggle" style="display:none;">
                	<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus.</p>
                	<a class="btn btn-sm btn-primary">Visit Project <i class="fa fa-share fa-margin-left"></i></a>
                </div> 
			</div>
		</div>

		<div class="element isotope-item filter2 filter3">
			<div class="portfolio-inner">
				<div class="image-overlay zoom-image">
					<img alt="" src="<?php echo get_template_directory_uri(); ?>/img/demo/portfolio/13.jpg"> 
					<div class="overlay-fade">
						<a data-lightbox="iframe" href="http://www.themeforest.net"><i class="icon-overlay fa fa-windows"></i></a>
					</div>
				</div>
				<div class="portfolio-info-toggle">
                	<h3 class="portfolio-title">Imaginations Touch<span class="fa fa-plus-square"></span></h3>
                </div>                  
				<div class="portfolio-toggle" style="display:none;">
                	<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus.</p>
                	<a class="btn btn-sm btn-primary">Visit Project <i class="fa fa-share fa-margin-left"></i></a>
                </div> 
			</div>
		</div>
		
		<div class="element isotope-item filter1">
			<div class="portfolio-inner">
				<div class="image-overlay">
					<img alt="" src="<?php echo get_template_directory_uri(); ?>/img/demo/portfolio/14.jpg"> 
					<div class="overlay-vslide">
						<a data-lightbox="image" href="img/demo/portfolio/14.jpg"><i class="icon-overlay fa fa-twitter"></i></a>
					</div>
				</div>
				<div class="portfolio-info-toggle">
                	<h3 class="portfolio-title">Dive and Relax<span class="fa fa-plus-square"></span></h3>
                </div>                  
				<div class="portfolio-toggle" style="display:none;">
                	<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus.</p>
                	<a class="btn btn-sm btn-primary">Visit Project <i class="fa fa-share fa-margin-left"></i></a>
                </div> 
			</div>
		</div>
		
		<div class="element isotope-item filter2">
			<div class="portfolio-inner">
				<div class="image-overlay">
					<img alt="" src="<?php echo get_template_directory_uri(); ?>/img/demo/portfolio/15.jpg"> 
					<div class="overlay-zoom">
						<a data-lightbox="image" href="img/demo/portfolio/15.jpg"><i class="icon-overlay fa fa-heart"></i></a>
					</div>
				</div>
				<div class="portfolio-info-toggle">
                	<h3 class="portfolio-title">Design in a Box<span class="fa fa-plus-square"></span></h3>
                </div>                  
				<div class="portfolio-toggle" style="display:none;">
                	<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus.</p>
                	<a class="btn btn-sm btn-primary">Visit Project <i class="fa fa-share fa-margin-left"></i></a>
                </div> 
			</div>
		</div>
		
		<div class="element isotope-item filter1 filter2">
			<div class="portfolio-inner">
				<div class="image-overlay zoom-image">
					<img alt="" src="<?php echo get_template_directory_uri(); ?>/img/demo/portfolio/16.jpg"> 
					<div class="overlay-hslide">
						<a data-lightbox="image" href="<?php echo get_template_directory_uri(); ?>/img/demo/portfolio/16.jpg"><i class="icon-overlay fa fa-linkedin"></i></a>
					</div>
				</div>
				<div class="portfolio-info-toggle">
                	<h3 class="portfolio-title">Planning and Planning<span class="fa fa-plus-square"></span></h3>
                </div>                  
				<div class="portfolio-toggle" style="display:none;">
                	<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus.</p>
                	<a class="btn btn-sm btn-primary">Visit Project <i class="fa fa-share fa-margin-left"></i></a>
                </div> 
			</div>
		</div>
		       
	</div>
</div>


    </div> <!-- /Container -->

</div>
<!-- /Main Container -->

<!-- Sorting and Shuffle for Portfolio -->

<div class="portfolio-control hidden-sm hidden-xs" id="options">
	<a href="javascript:void(0)" id="shuffle" ><i class="fa fa-random"></i></a>
	<ul data-option-key="sortAscending" class="option-set" id="sort-direction">
		<li><a class="btn-primary" data-option-value="true" href="#sortAscending=true"><i class="fa fa-angle-up"></i></a></li>
		<li><a data-option-value="false" href="#sortAscending=false"><i class="fa fa-angle-down"></i></a></li>
	</ul>
</div>

<!-- Footer Container -->
<div class="footer-wrapper">

	<!-- Footer Top Container -->
    <div class="footer-top">		
		<div id="map-canvas">
        </div>
        <div class="map-overlay">
        	<h3 class="map-overlay-title color-white"><i class="fa fa-plane"></i> Where To Find Us</h3>                
            <p class="lead">001 Some Street. Los Angeles, CA, 12345. USA</p>
        </div>
	</div>
	<!-- /Footer Top Container -->