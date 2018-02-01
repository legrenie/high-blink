<?php
/**
 * The template for displaying Projects on index view
 *
 * @package Espied
 */
?>
<div class="element isotope-item filter2 filter3">
			<div class="portfolio-inner">
				<div class="image-overlay">
                <?php if ( has_post_thumbnail() ) : ?>


                	<?php
 if ( has_post_thumbnail()) {
   $full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
   echo '<img src="' . $full_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" />';
 }
 ?>
					<div class="overlay-fade">
						<a data-lightbox="image" href="<?php the_permalink(); ?>"><i class="icon-overlay fa fa-search-plus"></i></a>
					</div>
                    <?php endif; ?>
				</div>
				<div class="portfolio-info-toggle">
                	<h3 class="portfolio-title"><?php the_title(); ?><span class="fa fa-plus-square"></span></h3>
                </div>                  
				<div class="portfolio-toggle" style="display:none;">
                	<p><?php echo get_the_content(); ?></p>
                	<a class="btn btn-sm btn-primary">Visit Project <i class="fa fa-share fa-margin-left"></i></a>
                </div>              
			</div>
		</div>
