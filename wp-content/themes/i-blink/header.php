<?php

/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
    <!-- Font Awesome -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

        
    <!-- HTML5 Videos -->
        <link href="//vjs.zencdn.net/4.2/video-js.css" rel="stylesheet">
		<script src="//vjs.zencdn.net/4.2/video.js"></script>
        
    <!-- Google Fonts -->
    	<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
        
        <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/ico/favicon.png">
        
</head>

<body <?php body_class(); ?>>
<!-- Page Main Wrapper -->
<div class="page-wrapper">
  
<!-- Slide Top Panel Container -->
<div class="slide-pannel-wrapper">

	<div id="slide-panel">
		<div class="container">
    		<div class="row">
            	<div class="col-sm-6 col-md-6">
                	<div class="blank-spacer padding-xsmall"></div>
                	<h3 class="color-white"></h3>
                    <img alt="" class="img-rounded alignleft" src="<?php echo get_template_directory_uri(); ?>/img/theme/who-thumb.jpg"><p><strong></strong> </p>
                    
                    <p class="lead margin-top20"></p>
					<div class="btn-group">
						<a class="btn btn-primary btn-border"><i class="fa fa-share fa-margin-left"></i></a>
						<a class="btn btn-default btn-border"><i class="fa fa-shopping-cart fa-margin-left"></i></a>
					</div>
                    <div class="blank-spacer padding-xsmall"></div>
                </div>
            	<div class="col-sm-6 col-md-6">
                	<div class="blank-spacer padding-xsmall"></div>
                	<h3 class="color-white">Contact</h3>
					<form class="clean-form dark-form" role="form">
                    <div class="row">
                    	<div class="col-md-6">
  							<div class="form-group">
    							<label class="sr-only" for="exampleInputName">Nom</label>
    							<input type="email" class="form-control" id="exampleInputName" placeholder="Enter your name">
  							</div>
                        </div>
                    	<div class="col-md-6">
  							<div class="form-group">
    							<label class="sr-only" for="exampleInputEmail">Email</label>
    							<input type="password" class="form-control" id="exampleInputEmail" placeholder="Enter email">
  							</div>
                        </div>                        
                    </div>
                    <div class="row">
                    	<div class="col-md-12">
  							<div class="form-group">
    							<textarea class="form-control" rows="4" placeholder="Message"></textarea>
  							</div>
                        </div>                     
                    </div>
  					<button type="submit" class="btn btn-default btn-border">Se connecter</button>
					</form>
              		<div class="blank-spacer padding-xsmall"></div>
                </div>
            </div>    
        </div>	
    </div>
	<div class="slide-btn-wrapper"><a href="#" class="slide-panel-btn"></a></div>
    	
</div>
<!-- /Slide Top Panel Container -->

<!-- Header Container -->
<div class="header-wrapper">

	<!-- Header Top Container -->
    <div class="header-top">
    
    <div class="container"> <!-- Container -->
 
		<div class="row"><!-- Row-->
        
        	<div class="col-md-6">
                    
            	<div class="top-menu-left"><!-- Top Menu Left -->
                	<ul class="list-inline">
						<li>
							<div class="top-cart">
                    
								<div class="toggle-container">
  									
                                    
  									<div class="togglebox">

										<ul class="media-list">
											<li class="media">
												<a class="pull-right" href="#"><img alt="" class="media-object" src="<?php echo get_template_directory_uri(); ?>/img/demo/thumbs/iphone-concept.jpg" width="64" height="64"></a>
												<div class="media-body">
													<h4 class="media-heading title-color"></h4>
													
												</div>
											</li>
											<li class="media">
												<a class="pull-right" href="#"><img alt="" class="media-object" src="<?php echo get_template_directory_uri(); ?>/img/demo/thumbs/lords.jpg" width="64" height="64"></a>
												<div class="media-body">
													<h4 class="media-heading title-color"></h4>
													
												</div>
											</li>                                                        
										</ul>
 										<div class="clearfix"></div>
                                        <h4><strong></strong> <small></small></h4>
                                       	<div class="btn-group btn-group-sm">
  												<button type="button" class="btn btn-primary"> <i class="fa fa-angle-right fa-margin-left"></i></button>
												<button type="button" class="btn btn-primary"> <i class="fa fa-angle-right fa-margin-left"></i></button>
											</div>                                      
									</div>
                                    
								</div>

							</div>
                        </li>
                        <li>
							<div class="top-login">                           
                
    							<a  href="<?php echo esc_url(site_url('wp-login.php')); ?>" data-toggle="modal" class="toggle-link"><i class="fa fa-user"></i> Se connecter</a>
    							<!-- modal content -->
    							<div id="login" class="modal fade" aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" >
      								<div class="modal-dialog">
        								<div class="modal-content">

          									<div class="modal-header">
            									<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times-circle-o"></i></button>
                                                <h3 class="modal-title title-color" id="myModalLabel"><i class="fa fa-user"></i> CONNEXION</h3>
          									</div>
          									<div class="modal-body">
<form method="post" action="<?php echo esc_url(site_url('wp-login.php')); ?>" id="loginform" name="loginform">
  														<div class="form-group input-group">                                                        
                                                        	<span class="input-group-addon"><i class="fa fa-user"></i></span>
  <input type="text" class="form-control" placeholder="Identifiant" tabindex="10" value="" id="user_login" name="log">
  </div>
  <div class="form-group input-group">                                                        
                                                        	<span class="input-group-addon"><i class="fa fa-key"></i></span>
  <input type="password" class="form-control" placeholder="Mot de passe" tabindex="20"  value="" id="user_pass" name="pwd">
  </div>
<div class="form-group">
<div class="checkbox">
<label><input type="checkbox" tabindex="90" value="forever" id="rememberme" name="rememberme">Se Rappeller ! </label> | <a href="<?php echo site_url(); ?>/wp-login.php?action=lostpassword">Mot de passe oublié</a>
</div>
</div>  
<div class="form-group">
  <input class="btn btn-primary btn-sm" type="submit" tabindex="100" value="Se connecter" id="wp-submit" name="wp-submit">

 <input type="hidden" value="<?php echo esc_attr($redirect_to); ?>" name="redirect_to">
 <input type="hidden" name="customize-login" value="1" />
</div>
 </form>

          									</div>

        								</div><!-- /.modal-content -->
      								</div><!-- /.modal-dialog -->
								</div><!-- /.modal -->

							</div> 
                        </li>
                        <li>
							<div class="top-language">
                
								<div class="toggle-container">
  									<a class="toggle-link" href="#"><i class="fa fa-globe"></i> Language</a>
  									<div class="togglebox">
										<ul class="language-menu">
                                        	<?php pll_the_languages(); ?>
										</ul>
                                    </div>
								</div>
							</div>  
                        
                        </li>
                        <?php if (current_user_can('calendar_contributor')) : ?><li><div class="top-planning">
<a class="link" href="http://localhost/hight-blink/fr/planning/"><i class="fa fa-calendar"></i> Planning</a></div></li>
<?php endif; ?>
<?php if (current_user_can('administrator')) : ?><li><div class="top-planning">
<a class="link" href="http://localhost/hight-blink/fr/planning/"><i class="fa fa-calendar"></i> Planning</a></div></li>
<?php endif; ?>
                	</ul>
                </div><!-- /Top Menu Left -->
      
            </div>
            
        	<div class="col-md-6">
			
            	<div class="top-menu-right"><!-- Top Menu right -->
            
				<ul class="top-social list-inline">
					<li><a class="tooltip-on" title="Facebook" href="https://www.facebook.com/pages/I-Blink/1605207613086639"><div class="icon-wrapper icon-border-round"><i class="fa fa-facebook"></i></div></a></li>
                    <li><a class="tooltip-on" title="Twitter" href="https://twitter.com/iblinkBXL"><div class="icon-wrapper icon-border-round"><i class="fa fa-twitter"></i></div></a></li>
                    <li><a class="tooltip-on" title="Google Plus" href="https://plus.google.com/u/0/108284931800513137003"><div class="icon-wrapper icon-border-round"><i class="fa fa-google-plus"></i></div></a></li>
                    <li><a class="tooltip-on" title="Linkedin" href="https://be.linkedin.com/pub/i-blink-bruxelles/bb/703/335"><div class="icon-wrapper icon-border-round"><i class="fa fa-linkedin"></i></div></a></li>
                    <li><a class="tooltip-on" title="Pinterest" href="https://fr.pinterest.com/iblinkb/"><div class="icon-wrapper icon-border-round"><i class="fa fa-pinterest"></i></div></a></li>
                    <li><a class="tooltip-on" title="RSS" href="http://www.twitter.com"><div class="icon-wrapper icon-border-round"><i class="fa fa-rss"></i></div></a></li>
				</ul>
                
                </div><!-- /Top Menu right -->
            
            </div>
            
		</div> <!-- /Row-->
     
	</div> <!-- /Container -->

	</div>
    <!-- /Header Top Container -->

	<!-- Header Middle Container -->
    <div class="header-middle">
    
    <div class="container"> <!-- Container -->
  
		<div class="row"><!-- Row-->
        
        	<div class="col-md-7">
                        
            	<div class="logo">                
                	<a href="http://localhost/hight-blink"><img src="<?php echo get_template_directory_uri(); ?>/img/theme/logo.png" width="185" height="54" alt="SmartON Logo"></a>
                </div>
            
			</div>
            
        	<div class="col-md-5  hidden-xs">
            
            	<div class="contact-info">
					<ul class="fa-ul list-inline">
						<li><i class="fa-li fa fa-map-marker"></i>Avenue Louise 205/207 boite 4, 1050 Bruxelles</li>
						<li><i class="fa-li fa fa-phone"></i> +32 (0)2 640 24 85 | +32 (0)472 06 79 83</li>
						<li><i class="fa-li fa fa-envelope"></i>info@localhost/hight-blink</li>
						<li><i class="fa-li fa fa-clock-o"></i>LUN. - VEN. 09:00 - 18:00</li>
                        <li><i class="fa-li fa fa-building"></i>TVA BE0 501 508 509</li>
					</ul>
				</div>

                
            </div>

            
		</div><!-- /Row-->
     
	</div> <!-- /Container -->

	</div>
	<!-- /Header Middle Container -->

	<!-- Header Bottom Container -->
    <div class="header-bottom" >
    
    <div class="container"> <!-- Container -->
 
		<div class="row"><!-- Row-->
        
			<div class="col-md-12">

			<!-- Navigation -->
                        <div class="main-navigation">
            
				<a id="menu-button"></a>
            <?php

											$defaults = array(
												'theme_location' => 'primary',
												'menu' => '',
												'container' => 'false',
												'container_class' => 'main-navigation',
												'container_id' => '',
												'menu_class' => 'menu',
												'menu_id' => '',
												'echo' => true,
												'fallback_cb' => 'wp_page_menu',
												'before' => '',
												'after' => '',
												'link_before' => '',
												'link_after' => '',
												'items_wrap' => '<ul id="main-menu" class="sm sm-default">%3$s</ul>',
												'depth' => 0,
												'walker' => ''
											);

											wp_nav_menu($defaults);

											?>

</div>
            
                   
				<div class="top-search hidden-xs hidden-sm"> <!-- Top Search --> 
                    
					<div class="toggle-container">
  						<a class="toggle-link" href="#"><i class="fa fa-search"></i></a>
  						<div class="togglebox">
							<form role="form">
								<div class="input-group">
                                	<span class="btn btn-primary input-group-addon"><i class="fa fa-search"></i></span>
									<input class="form-control" type="text" placeholder="Search">
								</div>
							</form>
						</div>
					</div>
                                                          
				</div><!-- /Top Search --> 

			<!-- /Navigation -->

			</div> 
                     
		</div> <!-- /Row --> 
            
	</div> <!-- /Container -->
    
    </div>   
	<!-- /Header Bottom Container -->

</div>
<!-- /Header Container -->
