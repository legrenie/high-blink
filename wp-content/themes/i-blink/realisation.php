<?php
/**
 * Template Name: Réalisation portfolio
 *
 * This is the template that displays full width page without sidebar
 *
 * @package sparkling
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
                            <li><?php the_title(); ?></li>
						</ol>
                    
                    </div>            
            	</div>
            </div>
            
		</div>

	</div>
<!-- /Container Tile & Breadcrumbs --> 

<div class="main-wrapper">
    
	<div class="container container-inner"> <!-- Container -->

    <div class="row">
    	<div class="col-md-8 col-md-offset-2">
        	<div class="text-center">
				<i class="fa fa-trophy fa-4x color-default"></i>
                <div class=" blank-spacer padding-xsmall"></div>
    			<h2 class="title-small heading-single"><span><?php the_title(); ?></span></h2>                
                <p class="lead"><?php the_field('contenu_top'); ?></p>
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
    
<div class="portfolio-container portfolio-active">
	<div id="portfolio-container-inner" class="variable-sizes clearfix portfolio-4-cols with-toggle">
		<?php if ( ! get_theme_mod( 'espied_hide_portfolio_page_content' ) ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<div class="page-content">
					<?php
						
						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'espied' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
						) );
					?>
				</div><!-- .page-content -->

				<?php edit_post_link( __( 'Edit', 'espied' ), '<div class="entry-meta"><span class="edit-link">', '</span></div>' ); ?>

			<?php endwhile; // end of the loop. ?>
		<?php endif; ?>

			<?php
				if ( get_query_var( 'paged' ) ) :
					$paged = get_query_var( 'paged' );
				elseif ( get_query_var( 'page' ) ) :
					$paged = get_query_var( 'page' );
				else :
					$paged = 1;
				endif;

				$posts_per_page = get_option( 'jetpack_portfolio_posts_per_page', '10' );

				$args = array(
					'post_type'      => 'jetpack-portfolio',
					'paged'          => $paged,
					'posts_per_page' => $posts_per_page,
				);

				$project_query = new WP_Query ( $args );

				if ( post_type_exists( 'jetpack-portfolio' ) && $project_query -> have_posts() ) :

					while ( $project_query -> have_posts() ) : $project_query -> the_post();

						get_template_part( 'content', 'portfolio' );

					endwhile;



					wp_reset_postdata();

				else :
			?>

				<section class="no-results not-found">
					<header class="page-header">
						<h1 class="page-title"><?php _e( 'No Project Found', 'espied' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<?php if ( current_user_can( 'publish_posts' ) ) : ?>

							<p><?php printf( __( 'Ready to publish your first project? <a href="%1$s">Get started here</a>.', 'espied' ), esc_url( admin_url( 'post-new.php?post_type=jetpack-portfolio' ) ) ); ?></p>

						<?php else : ?>

							<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'espied' ); ?></p>

						<?php endif; ?>
					</div><!-- .page-content -->
				</section><!-- .no-results -->

			<?php endif; ?>
</div>
</div>
   </div> <!-- /Container -->

</div>
<!-- /Main Container -->
<?php get_footer(); ?>
