<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>



	<!-- /Footer Top Container -->

	<!-- Footer Middle Container -->
    <div class="footer-middle">
    
    <div class="container"> <!-- Container -->

		<div class="row">
        
        	<div class="col-md-3">
            	<div class="footer-widget">
            		<h3>Qui sommes nous?</h3>
                	<p>Née par pure passion, <strong>iBLINK</strong> est une agence à la recherche des nouveaux défis. Des collaborateurs dynamiques qualifiés  forment son équipe pour atteindre l'excellence.</p>
       			</div>
            </div>
            
            <div class="col-md-3">
            	<div class="footer-widget">
            		<h3>Contact Info</h3>
                	<p>
</p>
					<ul class="fa-ul">
  						<li><i class="fa-li fa fa-map-marker"></i>Avenue Louise 523, 2 étage, 1050 Bruxelles</li>
  						<li><i class="fa-li fa fa-print"></i>+32 (0)472 06 79 83</li>
  						<li><i class="fa-li fa fa-phone"></i>+32 (0)475 51 14 16</li>
  						<li><i class="fa-li fa fa-envelope"></i>info@localhost/hight-blink</li>
					</ul>
       			</div>
            </div>
            
            <div class="col-md-3">
            	<div class="footer-widget">
            		<h3>SERVICE</h3>
                    <ul class="footer-custom-menu">
                    	<li><a href="http://localhost/hight-blink/services/site-web/">Site Web</a></li>
                        <li><a href="http://localhost/hight-blink/services/referencement/">Referencement</a></li>
                        <li><a href="http://localhost/hight-blink/services/video-corporate/">Video Corporate</a></li>
                        <li><a href="http://localhost/hight-blink/services/e-marketing/">E-Marketing</a></li>
                    </ul>
            	</div>
            </div>
            
            <div class="col-md-3">
            	<div class="footer-widget">
            		<?php dynamic_sidebar('footer-1'); ?>
            	</div>
            </div>
            
		</div>
     
	</div> <!-- /Container -->

	</div>
	<!-- /Footer Middle Container -->

	<!-- Footer Bottom Container -->
    <div class="footer-bottom">
    
    <div class="fullsize container"> <!-- Container -->
    
    	<div class="row">
        	<div class="col-md-6">
            	<div class="logo-bottom">
                <img src="<?php echo get_template_directory_uri(); ?>/img/theme/logo-bottom.png" width="180" height="58" alt="SmartON Logo">
                </div>
            </div>
            <div class="col-md-6">
            
				<ul class="footer-social list-inline">
					<li><a href="https://www.facebook.com/pages/I-Blink/1605207613086639"><div class="icon-wrapper icon-border-round fa-2x"><i class="fa fa-facebook"></i></div></a></li>
                    <li><a href="https://twitter.com/iblinkBXL"><div class="icon-wrapper icon-border-round fa-2x"><i class="fa fa-twitter"></i></div></a></li>
                    <li><a href="https://plus.google.com/u/0/108284931800513137003"><div class="icon-wrapper icon-border-round fa-2x"><i class="fa fa-google-plus"></i></div></a></li>
                    <li><a href="https://be.linkedin.com/pub/i-blink-bruxelles/bb/703/335"><div class="icon-wrapper icon-border-round fa-2x"><i class="fa fa-linkedin"></i></div></a></li>
                    <li><a href="https://fr.pinterest.com/iblinkb/"><div class="icon-wrapper icon-border-round fa-2x"><i class="fa fa-pinterest"></i></div></a></li>
                    <li><a href="#rss"><div class="icon-wrapper icon-border-round fa-2x"><i class="fa fa-rss"></i></div></a></li>
				</ul>
            
            </div>
		</div>
        
        <div class="row">
  			<div class="col-md-6 col-md-push-6">
				<ul class="footer-menu list-inline">
  					<li><a href="#">Accueil</a></li>
                    <li><a href="#">Vidéo</a></li>
                    <li><a href="#">Nous</a></li>
                    <li><a href="#">Contact</a></li>
				</ul>
            </div>
  			<div class="col-md-6 col-md-pull-6">
				<div class="copyright"> 2014 - <?php echo date('Y');?> iBLINK. All Rights Reserved.</div>
			</div>
		</div>
     
	</div> <!-- /Container -->  

	</div>
	<!-- /Footer Bottom Container -->

</div>
<!-- /Footer Container -->


<!-- Back To Top -->
  <a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a>
<!-- /Back To Top -->

<!-- Preloader -->
<div id="page-preloader"></div>
<!-- /Preloader -->


<!-- Jquery -->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<?php if(is_page( 'planning' )):?>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="http://localhost/hight-blink/wp-content/plugins/ajax-event-calendar/js/jquery.simplemodal.1.4.4.min.js"></script>
<?php endif; ?>
<!-- Google Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;.js"></script>
    
<?php wp_footer(); ?>


</body>
</html>
