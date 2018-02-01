<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	


	<div class="entry-content col-xs-12">
		<div class="row">
			<div class="col-xs-12 col-md-6">
			<div class="thumbnail"><?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?></div>
            	<h4>Remarques sur le projet : </h4>
				<div class="well"><?php the_content(); ?></div>
                <h4>Adresse de votre projet en préproduction : </h4>
				<div class="well"><a target="_blank" href="<?php the_field('adresse_du_projet_web'); ?>"><?php the_field('adresse_du_projet_web'); ?></a></div>
                <h4>Adresse de votre projet en ligne : </h4>
				<div class="well"><a target="_blank" href="<?php the_field('adresse_du_projet_web_ligne'); ?>"><?php the_field('adresse_du_projet_web_ligne'); ?></a></div>
                        	<table class="table table-hover">
            	<tr>
                	<th colspan="2"><h4>Identification adresses e-mail </h4></th>                    
                </tr>
                <tr>
                	<td colspan="2"><h6>Gmail : </h6></td>                    
                </tr>
                <tr>
                	<td>Adresse de connexion : </td>
                    <td><a target="_blank" href="http://www.gmail.com">http://www.gmail.com</a></td>                  
                </tr>
                <tr>
                	<td>Nom d’utilisateur : </td>
                    <td><?php the_field('adresse_de_connexion_gmail_utilisateur'); ?></td>                  
                </tr>
                <tr>
                	<td>Mot de passe : </td>
                    <td><?php the_field('adresse_de_connexion_gmail_mot_de_passe'); ?></td>                  
                </tr>
                
 				<tr>
                	<td colspan="2"><h6>Web Mail : </h6></td>                    
                </tr>
                <tr>
                	<td>Adresse de connexion : </td>
                    <td><a target="_blank" href="<?php the_field('adresse_de_connexion_webmail_adresse_de_connexion'); ?>"><?php the_field('adresse_de_connexion_webmail_adresse_de_connexion'); ?></a></td>                  
                </tr>
                <tr>
                	<td>Nom d’utilisateur : </td>
                    <td><?php the_field('adresse_de_connexion_webmail_utilisateur'); ?></td>                  
                </tr>
                <tr>
                	<td>Mot de passe : </td>
                    <td><?php the_field('adresse_de_connexion_webmail_mot_de_passe'); ?></td>                  
                </tr>
                </table>
            </div>
            <div class="col-xs-12 col-md-6">
            <table class="table table-hover">
            	<tr>
                	<th colspan="2"><h4>Identification de votre site internet</h4></th>                    
                </tr>
                <tr>
                	<td>Adresse de connexion : </td>
                    <td><a target="_blank" href="<?php the_field('adresse_de_connexion_web'); ?>"><?php the_field('adresse_de_connexion_web'); ?></a></td>                  
                </tr>
                <tr>
                	<td>Nom d’utilisateur : </td>
                    <td><?php the_field('adresse_de_connexion_web_utlisateur'); ?></td>                  
                </tr>
                <tr>
                	<td>Mot de passe : </td>
                    <td><?php the_field('adresse_de_connexion_web_mot_de_passe'); ?></td>                  
                </tr>
            </table>
        	<table class="table table-hover">
            	<tr>
                	<th colspan="2"><h4>Identification de vos réseaux sociaux</h4></th>                    
                </tr>
                <tr>
                	<td colspan="2"><h6>Facebook : </h6></td>                    
                </tr>
                <tr>
                	<td>Adresse de connexion : </td>
                    <td><a target="_blank" href="http://www.facebook.com">http://www.facebook.com</a></td>                  
                </tr>
                <tr>
                	<td>Nom d’utilisateur : </td>
                    <td><?php the_field('adresse_de_connexion_facebook_utilisateur'); ?></td>                  
                </tr>
                <tr>
                	<td>Mot de passe : </td>
                    <td><?php the_field('adresse_de_connexion_facebook_mot_de_passe'); ?></td>                  
                </tr>
                
                <tr>
                	<td colspan="2"><h6>Twitter : </h6></td>                    
                </tr>
                <tr>
                	<td>Adresse de connexion : </td>
                    <td><a target="_blank" href="http://www.twitter.com">http://www.twitter.com</a></td>                  
                </tr>
                <tr>
                	<td>Nom d’utilisateur : </td>
                    <td><?php the_field('adresse_de_connexion_twitter_utilisateur'); ?></td>                  
                </tr>
                <tr>
                	<td>Mot de passe : </td>
                    <td><?php the_field('adresse_de_connexion_twitter_mot_de_passe'); ?></td>                  
                </tr>
                
                 <tr>
                	<td colspan="2"><h6>LinkedIn : </h6></td>                    
                </tr>
                <tr>
                	<td>Adresse de connexion : </td>
                    <td><a target="_blank" href="http://www.linkedin.com">http://www.linkedin.com</a></td>                  
                </tr>
                <tr>
                	<td>Nom d’utilisateur : </td>
                    <td><?php the_field('adresse_de_connexion_linkedin_utilisateur'); ?></td>                  
                </tr>
                <tr>
                	<td>Mot de passe : </td>
                    <td><?php the_field('adresse_de_connexion_linkedin_mot_de_passe'); ?></td>                  
                </tr>
                
                <tr>
                	<td colspan="2"><h6>GooglePlus : </h6></td>                    
                </tr>
                <tr>
                	<td>Adresse de connexion : </td>
                    <td><a target="_blank" href="http://www.google.com">http://www.google.com</a></td>                  
                </tr>
                <tr>
                	<td>Nom d’utilisateur : </td>
                    <td><?php the_field('adresse_de_connexion_googleplus_utilisateur'); ?></td>                  
                </tr>
                <tr>
                	<td>Mot de passe : </td>
                    <td><?php the_field('adresse_de_connexion_googleplus_mot_de_passe'); ?></td>                  
                </tr>
                
                <tr>
                	<td colspan="2"><h6>Instagram : </h6></td>                    
                </tr>
                <tr>
                	<td>Adresse de connexion : </td>
                    <td><a target="_blank" href="http://www.instagram.com">http://www.instagram.com</a></td>                  
                </tr>
                <tr>
                	<td>Nom d’utilisateur : </td>
                    <td><?php the_field('adresse_de_connexion_instagram_utilisateur'); ?></td>                  
                </tr>
                <tr>
                	<td>Mot de passe : </td>
                    <td><?php the_field('adresse_de_connexion_instagram_mot_de_passe'); ?></td>                  
                </tr>
                
                <tr>
                	<td colspan="2"><h6>Pinterest : </h6></td>                    
                </tr>
                <tr>
                	<td>Adresse de connexion : </td>
                    <td><a target="_blank" href="http://www.pinterest.com">http://www.pinterest.com</a></td>                  
                </tr>
                <tr>
                	<td>Nom d’utilisateur : </td>
                    <td><?php the_field('adresse_de_connexion_pinterest_utilisateur'); ?></td>                  
                </tr>
                <tr>
                	<td>Mot de passe : </td>
                    <td><?php the_field('adresse_de_connexion_pinterest_mot_de_passe'); ?></td>                  
                </tr>
            </table>	
            </div>
        </div>
	</div><!-- .entry-content -->

	<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>

</article><!-- #post-## -->
