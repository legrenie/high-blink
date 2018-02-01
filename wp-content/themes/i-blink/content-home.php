<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<!-- Slider Container -->
		<!--<div class="slider-wrapper">

			<div class="fullwidthbanner-container">
					<div class="fullwidthbanner">
						<ul>
                        	<li data-transition="parallaxtoright" data-slotamount="7" data-masterspeed="1000"  data-fstransition="fade" data-fsmasterspeed="1000" data-fsslotamount="7">
								<img src="<?php //echo get_template_directory_uri(); ?>/img/theme/revolution/video-bg.jpg"  alt="video_bg"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
								<div class="tp-caption tp-fade fadeout fullscreenvideo"
			data-x="0"
			data-y="0"
			data-speed="1000"
			data-start="1100"
			data-easing="Power4.easeOut"
			data-endspeed="1500"
			data-endeasing="Power4.easeIn"
			data-autoplay="true"
			data-autoplayonlyfirsttime="false"
			data-nextslideatend="true"
 data-forceCover="1" data-dottedoverlay="twoxtwo" data-aspectratio="16:9" data-forcerewind="on"			style="z-index: 2">

								<video class="video-js vjs-default-skin" preload="none" poster='img/theme/revolution/video-bg.jpg' data-setup="{}">
									<source src='<?php //echo get_template_directory_uri(); ?>/video/video.mp4' type='video/mp4' />
									<source src='<?php //echo get_template_directory_uri(); ?>/video/video.webm' type='video/webm' />
									<source src='<?php //echo get_template_directory_uri(); ?>/video/video.ogv' type='video/ogg' />
								</video>
								</div>

								<div class="caption very-large-strong color-white customin customout tp-resizeme"
									data-x="center" data-hoffset="0"
									data-y="550"
									data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-speed="900"
									data-start="800"
									data-easing="Power4.easeOut"
									data-endspeed="600"
									data-endeasing="Power0.easeIn"
                                    style="z-index: 3">
                                    i-Blink
								</div>

								<div class="caption medium-light color-white customin customout tp-resizeme"
									data-x="center" data-hoffset="0"
									data-y="620"
									data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-speed="900"
									data-start="1200"
									data-easing="Power4.easeOut"
									data-endspeed="600"
									data-endeasing="Power0.easeIn"
                                    style="z-index: 3">
                                    est spécialisée dans la réalisation de vidéos d’entreprises.
								</div>
							</li>
							<li data-transition="slotslide-horizontal" data-slotamount="5" data-masterspeed="700" >
								<img src="<?php //echo get_template_directory_uri(); ?>/img/theme/revolution/dummy.png"  alt="slider1-bg" data-lazyload="<?php //echo get_template_directory_uri(); ?>/img/theme/revolution/slider1-bg.jpg" data-bgposition="bottom center" data-kenburns="on" data-duration="9000" data-ease="Linear.easeNone" data-bgfit="110" data-bgfitend="100" data-bgpositionend="top center">
								<div class="caption very-large-strong color-white customin customout start" data-x="center" data-y="200" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000"	data-start="500"
data-easing="Back.easeInOut" data-endspeed="300" >
                                	i-BLINK
                                </div>
                                <div class="caption medium-light color-white text-center skewfromleft start" data-x="100" data-y="216" data-speed="800" data-endspeed="300" data-start="1200" data-easing="Power4.easeOut" data-endeasing="Power1.easeIn">
                                	<span class="fa fa-square"></span>
                                </div>
                                <div class="caption medium-light color-white skewfromright start" data-x="right" data-hoffset="-100" data-y="216" data-speed="800" data-endspeed="300" data-start="1200" data-easing="Power4.easeOut" data-endeasing="Power1.easeIn">
                                	<span class="fa fa-square"></span>
                                </div>
								<div class="caption big-light color-white customin customout" 
                                	data-x="center"
                                    data-y="270"
                                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-start="1200"
                                    data-speed="600"
                                    data-easing="Linear.easeNone"
                                    data-endspeed="600"
                                    data-endeasing="Linear.easeNone">
                                  Une solution professionnelle
                                </div>
								<div class="caption big-light color-white customin customout" 
                                	data-x="center"
                                    data-y="320"
                                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-start="1800"
                                    data-speed="600"
                                    data-easing="Linear.easeNone"
                                    data-endspeed="600"
                                    data-endeasing="Linear.easeNone">
                                    pour la mise à niveau de votre visiblité
                                </div>
								<div class="caption customin customout start" data-x="center" data-y="400" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000"	data-start="2000"
data-easing="Back.easeInOut" data-endspeed="300"><button class="btn btn-lg btn-white btn-border">votre visiblité</button></div>							
							</li>
							<li data-transition="parallaxtotop" data-slotamount="5" data-masterspeed="700">
								<img src="<?php //echo get_template_directory_uri(); ?>/img/theme/revolution/dummy.png"  alt="slider2-bg" data-lazyload="<?php //echo get_template_directory_uri(); ?>/img/theme/revolution/slider2-bg.jpg" data-bgposition="center center" data-kenburns="on" data-duration="8000" data-ease="Linear.easeNone" data-bgfit="110" data-bgfitend="100" data-bgpositionend="center center">
                                <div class="caption very-large-light color-white customin customout start"
									data-x="center"
									data-y="center"
									data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="1000"
                                    data-start="800"
									data-easing="Back.easeInOut"
                                    data-endspeed="300">
                                    iPACKAGE
								</div>
                                <div class="caption medium-strong color-white skewfromtop"
									data-x="center"
									data-y="390"
									data-speed="400"
									data-start="3800"
									data-easing="Cube.easeOut"
									data-endspeed="300"
									data-endeasing="Power1.easeIn">
								</div>
                                <div class="caption medium-strong color-white text-center bg-color-default skewfromleft"
									data-x="200"
									data-y="150"
									data-speed="400"
									data-start="1200"
									data-easing="Cube.easeOut"
									data-endspeed="300"
									data-endeasing="Power1.easeIn">
                                    Video Corporate
								</div>
                                <div class="caption medium-strong color-white bg-color-purple lft"
									data-x="center"
									data-y="100"
									data-speed="400"
									data-start="1600"
									data-easing="Cube.easeOut"
									data-endspeed="300"
									data-endeasing="Power1.easeIn">
                                   Site-Web
								</div>
                                <div class="caption medium-strong color-white bg-color-orange skewfromright"
									data-x="right"
                                    data-hoffset="-204"
									data-y="150"
									data-speed="400"
									data-start="2000"
									data-easing="Cube.easeOut"
									data-endspeed="300"
									data-endeasing="Power1.easeIn">
                                    Referencement
								</div>
                                <div class="caption medium-strong color-white bg-color-info skewfromright"
									data-x="right"
                                    data-hoffset="-204"
									data-y="bottom"
                                    data-voffset="-150"
									data-speed="400"
									data-start="2400"
									data-easing="Cube.easeOut"
									data-endspeed="300"
									data-endeasing="Power1.easeIn">
                                    Ecran Led
								</div>
                                <div class="caption medium-strong color-white bg-color-success lfb"
									data-x="center"
									data-y="bottom"
                                    data-voffset="-75"
									data-speed="400"
									data-start="2800"
									data-easing="Cube.easeOut"
									data-endspeed="300"
									data-endeasing="Power1.easeIn">
                                   Phablette
								</div>
                                <div class="caption medium-strong color-white bg-color-danger skewfromleft"
									data-x="200"
									data-y="bottom"
                                    data-voffset="-150"
									data-speed="400"
									data-start="3200"
									data-easing="Cube.easeOut"
									data-endspeed="300"
									data-endeasing="Power1.easeIn">
                                    MARKETING
								</div>
							</li>
							<li data-transition="slotslide-vertical" data-slotamount="5" data-masterspeed="700" >
								<img src="<?php //echo get_template_directory_uri(); ?>/img/theme/revolution/dummy.png"  alt="slider3-bg" data-lazyload="<?php //echo get_template_directory_uri(); ?>/img/theme/revolution/slider3-bg.jpg" data-bgposition="center right" data-kenburns="on" data-duration="9000" data-ease="Linear.easeNone" data-bgfit="116" data-bgfitend="100" data-bgpositionend="center left">
								<div class="caption very-large-strong color-white randomrotate"
									data-x="center"
									data-y="320"
									data-speed="900"
									data-start="800"
									data-easing="Power4.easeOut"
									data-endspeed="600"
									data-endeasing="Power0.easeIn">
                                    CORPORATE VIDEO
								</div>
								<div class="caption medium-light text-center bg-color-default color-white randomrotate"
									data-x="center"
									data-y="410"
									data-speed="900"
									data-start="1000"
									data-easing="Power4.easeOut"
									data-endspeed="600"
									data-endeasing="Power0.easeIn">
                                    Donnez une image plus personnelle de votre entreprise <br/>
                                    en présentant vos activités de manière originale et dynamique. 
								</div>
								<div class="caption very-large-strong color-white fade"
									data-x="center"
									data-y="140"
									data-speed="900"
									data-start="1200"
									data-easing="Power4.easeOut"
									data-endspeed="600"
									data-endeasing="Power0.easeIn">
                                <img src="<?php //echo get_template_directory_uri(); ?>/img/theme/revolution/logo-icon.png" width="130" height="130" alt="SmartOn">
                                </div>
							</li>
							
						</ul>
						<div class="tp-bannertimer tp-bottom"></div>
					</div>
			</div>

		</div>-->
<!-- /Slider Container -->
<div class="blank-spacer padding-top20 padding-bottom20"></div>
	<!-- Main Container -->
	<div class="main-wrapper">

		<div class="container"> <!-- Container -->
			<?php echo do_shortcode('[products]') ?>
		</div>
	</div>
	<!-- Main Container -->
	<div class="main-wrapper">

    <div class="container"> <!-- Container -->

		<div class="blank-spacer padding-top20 padding-bottom20"></div>
		<div class="row">
        	<div class="col-md-4">
            	<div class="service-block sb-border sb-default animation bounceIn">
					<div class="service-block-icon text-center">                    
						<div class="icon-wrapper icon-border-radius fa-4x color-default">
							<i class="fa fa-tablet"></i>
						</div>                       
                    </div>
                    <div class="service-block-title text-center">
            			<p>Visibilité</p>
                    </div>
                    <div class="service-block-content text-center">
                		<p>Faîtes-vous remarquer de manière différente à travers un film original
</p>
                       
                    </div>
                </div>    
            </div>
            <div class="col-md-4">
            	<div class="service-block sb-border sb-purple animation bounceIn">
					<div class="service-block-icon text-center">                    
						<div class="icon-wrapper icon-border-radius fa-4x color-purple">
							<i class="fa fa-cogs"></i>
						</div>                       
                    </div>
                    <div class="service-block-title text-center">
            			<p>Chiffre d'affaires</p>
                    </div>
                    <div class="service-block-content text-center">
                		<p>Boostez vos commandes en vous imposant dans la toile avec un site avant-gardiste adapté au commerce du futur
</p>
                        
                    </div>
                </div>  
            </div>
            <div class="col-md-4">
            	<div class="service-block sb-border sb-orange animation bounceIn">
					<div class="service-block-icon text-center">                    
						<div class="icon-wrapper icon-border-radius fa-4x color-orange">
							<i class="fa fa-credit-card"></i>
						</div>                       
                    </div>
                    <div class="service-block-title text-center">
            			<p>E-Réputation</p>
                    </div>
                    <div class="service-block-content text-center">
                		<p>Imposez votre image de façon professionnelle et originale via un film et unu site avangardiste, augmentez ainsi votre présence sur le net par le biais de notre référencement très poussé
</p>
                        
                    </div>
                </div>  
            </div>

		</div>


     
	</div> <!-- /Container -->
 <!--    
    <div class="fullsize fullsize-background"> 

		<div class="container container-inner"> 
			<div class="row">
				<div class="col-md-6">  
			    	<img alt="" class="img-responsive animation fadeInLeft aligncenter" src="<?php // echo get_template_directory_uri(); ?>/img/demo/animated-responsive.png" >
                </div>
			  	<div class="col-md-6 animation fadeInRight">  
					<h2 class="title-medium title-color">Partenaire de votre réussite</h2>   
                    <p class="lead">iBLINK s'adapte à votre secteur et à vos objectifs.
</p>                    
                    <div class="row">
                    	<div class="col-md-6">
                        	<div class="box-icon-wrapper">
                        		<h4 class="box-icon-title margin-top20 margin-bottom20">
                                    <span class="icon-wrapper icon-full-round bg-color-default"><i class="fa fa-medkit color-white"></i></span>TRAFIC
                                </h4>
                            	<ul>
                               <li>Augmentation du trafic</li>
<li>Augmentation du chiffre d’affaire</li>
<li>Référencement naturel + Google Adwords + Google</li>

                                </ul>
                            </div>	
                        </div>
                        <div class="col-md-6">
                        	<div class="box-icon-wrapper">
                        		<h4 class="box-icon-title margin-top20 margin-bottom20">
                                	<span class="icon-wrapper icon-full-round bg-color-purple"><i class="fa fa-book color-white"></i></span>VISIBILITE
                                </h4>
                            	<ul>
                                <li>Nouveau produit</li>
<li>Nouvelle marque</li>
<li>Créer le Buzz à travers le référencement naturel</li>
<li>Vidéos</li>
<li>Réseaux sociaux</li>

                                </ul>
							</div>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="col-md-6">
                        	<div class="box-icon-wrapper">
                        		<h4 class="box-icon-title margin-top20 margin-bottom20">
                                	<span class="icon-wrapper icon-full-round bg-color-orange"><i class="fa fa-magic color-white"></i></span>REPUTATION
                                </h4>
                            	<ul>
                                <li>Donne une image professionnelle et originale</li>
<li>Vous montre sous un autre jour</li>

                                </ul>
							</div>	
                        </div>
                        <div class="col-md-6">
                        	<div class="box-icon-wrapper">
                        		<h4 class="box-icon-title margin-top20 margin-bottom20">
                                	<span class="icon-wrapper icon-full-round bg-color-success"><i class="fa fa-tablet color-white"></i></span>CHIFFRE D'AFFAIRE
                                </h4>
                            	<ul>
                                <li>Augmentation de votre chiffre d’affaire via une visibilité plus importante</li>
                                </ul>
							</div>	
                        </div>
                    </div>  
				</div>
			</div> 
		</div> 

        
    </div><!-- /Full Size -->    
    
        
    <div class="fullsize padding-none"> <!-- Container Full Size -->
    
		<div class="parallax-wrapper parallax-background" data-stellar-background-ratio="0.6" >
			
				<div class="parallax-wrapper padding-large">
        	<div class="container">
            
				<div class="row">
        			<div class="col-md-12">

						<div class="panel panel-default">
							<div class="panel-body">                                       
         	
                                <div class="row">
                                	
                                    <div class="col-md-12">
                                    
                                    	<div class="blank-spacer margin-top10 margin-bottom10"></div>
                                        
											<h1 class="title-large text-center color-white animation bounceIn">Une stratégie pour des résultats probants</h1>                                    
                                   	    	<p class="lead text-center color-white"><strong>high-BLINK</strong> Pour obtenir des résultats en webmarketing, il ne faut pas travailler au hasard. Une stratégie déterminant l’ensemble des actions à suivre, <br/> les moyens à mettre en oeuvre et les objectifs attendus s’avère indispensable au départ de tout projet

</p>  
                                            <div class="blank-spacer padding-small"></div>                                    
                                        	
                                        
                                        <div class="blank-spacer margin-top10 margin-bottom10"></div>
                                    
                                    </div>
                                    
                                </div>

							</div>
                    	</div>
                    
                    </div>
				
                </div>
			
                           
                </div>
			</div>
		</div>  
       
    </div><!-- /Container Full Size-->
    
   <!--
    <div class="container container-inner"> 
		<div class="row">
        	<div class="col-md-12">            
            	<h2 class="heading-single text-center title-small title-color"><span>Services</span></h2>
                <h4 class="text-center margin-bottom20"><span></span></h4>
			</div>
		</div>

		<div class="row">
        	<div class="col-md-8">

				<div class="tabs">
					<ul class="nav nav-tabs nav-justified">
						<li class="active"><a data-toggle="tab" href="#webdesign"><span class="fa fa-desktop"></span> SITE-WEB</a></li>
						<li><a data-toggle="tab" href="#referencement"><span class="fa fa-code-fork"></span> REFERENCEMENT</a></li>
						<li><a data-toggle="tab" href="#corporate"><span class="fa fa-code"></span> VIDEO-CORPORATE</a></li>
						<li><a data-toggle="tab" href="#marketing"><span class="fa fa-bullhorn"></span> MARKETING</a></li>
					</ul>
					<div class="tab-content">
						<div id="webdesign" class="tab-pane fade active in">
                       		<img alt="" src="<?php //echo get_template_directory_uri(); ?>/img/theme/building.jpg" class="img-thumbnail alignleft">
                        	<p>Etre remarqué et ciblé par de nouveaux clients potentiels</p>
                        	
						
                        </div>
					
						<div id="referencement" class="tab-pane fade in">
                       		<img alt="" src="<?php //echo get_template_directory_uri(); ?>/img/theme/building.jpg" class="img-thumbnail alignleft">
                        	<p>Présentation de votre activité, de vos services, assurance, ..</p>
                        	
						
                        </div>
					
						<div id="corporate" class="tab-pane fade in">
                       		<img alt="" src="<?php //echo get_template_directory_uri(); ?>/img/theme/building.jpg" class="img-thumbnail alignleft">
                        	<p>Gagner en crédibilité</p>
                        	
						
                        </div>
					
						<div id="marketing" class="tab-pane fade in">
                       		<img alt="" src="<?php //echo get_template_directory_uri(); ?>/img/theme/building.jpg" class="img-thumbnail alignleft">
                        	<p>Développer un site vitrine répondant à vos objectifs</p>
                        	
						
                        </div>
					</div>
				</div>

			</div>
        	<div class="col-md-4"> 
            	<div class="progress-bars margin-top50">
                	<h5 class="progress-title">SITE-WEB <span class="pull-right">92%</span></h5>  
                	<div class="progress progress-striped">
  						<div class="progress-bar animation fadeInLeftBig"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
    						<span class="sr-only">92% Complete</span>
  						</div>
					</div>
               		<h5 class="progress-title">REFERENCEMENT <span class="pull-right">83%</span></h5>
                	<div class="progress progress-striped">
  						<div class="progress-bar animation fadeInLeftBig"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 83%">
    						<span class="sr-only">83% Complete</span>
  						</div>
					</div>
                	<h5 class="progress-title">VIDEO-CORPORATE <span class="pull-right">88%</span></h5>
                	<div class="progress progress-striped">
  						<div class="progress-bar animation fadeInLeftBig"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 88%">
    						<span class="sr-only">88% Complete</span>
  						</div>
					</div>
                	<h5 class="progress-title">MARKETING <span class="pull-right">74%</span></h5>
                	<div class="progress progress-striped">
  						<div class="progress-bar animation fadeInLeftBig"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 74%">
    						<span class="sr-only">74% Complete</span>
  						</div>
					</div>
                </div>         
            </div>
		</div>
     
	</div> 
    
    
		</div>
    
	</div> <!-- /Container --> 
							
                   
   
	<div class="container container-inner"><!-- Container -->
    
    	<div class="row">
        	
            <div class="col-md-8">
            <h3>Clients</h3>
            	<div class="clients-wrapper">
                
                	<ul class="grid-list">
    					<li>
                        	<a class="tooltip-on" title="Elite" href="http://www.elitemodellook.com/fr/">
                            	<img alt="" class="img-responsive animation bounceIn" src="<?php echo get_template_directory_uri(); ?>/img/demo/clients/1.png">
                            </a>
    					</li>    
    					<li>
                        	<a class="tooltip-on" title="Gazi" href="http://www.gazi.de/">
                            	<img alt="" class="img-responsive animation bounceIn" src="<?php echo get_template_directory_uri(); ?>/img/demo/clients/2.png">
                            </a>
    					</li>
    					<li>
                        	<a class="tooltip-on" title="Viage" href="http://www.viage.be/fr/">
                            	<img alt="" class="img-responsive animation bounceIn" src="<?php echo get_template_directory_uri(); ?>/img/demo/clients/3.png">
                            </a>
                        </li>
                        <li>
                        	<a class="tooltip-on" title="WorldSpirits" href="http://www.worldspirits.be/">
                            	<img alt="" class="img-responsive animation bounceIn" src="<?php echo get_template_directory_uri(); ?>/img/demo/clients/5.png">
                            </a>
    					</li>
                        <li>
    					<a class="tooltip-on" title="Cardiatis" href="http://www.cardiatis.com//">
                            	<img alt="" class="img-responsive animation bounceIn" src="<?php echo get_template_directory_uri(); ?>/img/demo/clients/4.png">
                            </a>
    					</li>
                        <li>
    					<a class="tooltip-on" title="MyEco" href="http://www.myeco2.be/">
                            	<img alt="" class="img-responsive animation bounceIn" src="<?php echo get_template_directory_uri(); ?>/img/demo/clients/6.png">
                            </a>
                        </li>
                        <li>
    					<a class="tooltip-on" title="JimmyHoo" href="http://www.jimmyhoo.be/">
                            	<img alt="" class="img-responsive animation bounceIn" src="<?php echo get_template_directory_uri(); ?>/img/demo/clients/7.png">
                            </a>
    					</li>
    					<li>
    					<a class="tooltip-on" title="Street Dreamz" href="http://www.sd-premium.be/">
                            	<img alt="" class="img-responsive animation bounceIn" src="<?php echo get_template_directory_uri(); ?>/img/demo/clients/8.png">
                            </a>
    					</li>
                        <li>
    					<a class="tooltip-on" title="D-pharmacy" href="http://www.d-pharmacy.com/">
                            	<img alt="" class="img-responsive animation bounceIn" src="<?php echo get_template_directory_uri(); ?>/img/demo/clients/9.png">
                            </a>
    					</li>                       
					</ul>
                
                </div>            
            </div>
        
        	<div class="col-md-4">
            <h3>Tweet</h3>
			<div class="list_carousel responsive" >
				<div class="testimonials-wrapper">
 					<ul class="testimonials testimonials-slider disable-select">
						<li>
                        	<div class="testimonial-content">
                            	<p>Excellent votre Concept...</p>
                            </div>
                            <div class="testimonial-meta">
                            	<div class="testimonial-image"><img alt="" src="<?php echo get_template_directory_uri(); ?>/img/demo/testimonials/author1.jpg"></div>
                            	<div class="testimonial-author">Carolyne Lecoq</div>
                                <div class="author-job">CEO - <span class="author-link"><a href="#">Artimest</a></span></div>
                        	</div>
                        </li>
						<li>
                        	<div class="testimonial-content">
                            	<p>Magnifique .</p>
                            </div>
                            <div class="testimonial-meta">
                            	<div class="testimonial-image"><img alt="" src="<?php echo get_template_directory_uri(); ?>/img/demo/testimonials/author2.jpg"></div>
                            	<div class="testimonial-author">Lance Dorgan</div>
                                <div class="author-job">CEO - <span class="author-link"><a href="#">Krys </a></span></div>
                        	</div>
                        </li>
                        <li>
                        	<div class="testimonial-content">
                            	<p>Un Package tres interressant...</p>
                            </div>
                            <div class="testimonial-meta">
                            	<div class="testimonial-author">Jhon kipulu</div>
                                <div class="author-job">CEO - <span class="author-link"><a href="#">Time is money</a></span></div>
                        	</div>
                        </li>
					</ul>                   
				</div>	
			<div class="pagination-carousel" id="testimonials_pag"></div>
			</div>
            
            </div>
        
        </div>
    
    </div><!-- /Container -->

<!-- /Main Container -->
<!--
<article id="post-<?php //the_ID(); ?>" <?php //post_class(); ?>>
	<?php
		// Post thumbnail.
		//twentyfifteen_post_thumbnail();
	?>

	<header class="entry-header">
		<?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php //the_content(); ?>
		<?php
			//wp_link_pages( array(
				//'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				//'after'       => '</div>',
				//'link_before' => '<span>',
				//'link_after'  => '</span>',
				//'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				//'separator'   => '<span class="screen-reader-text">, </span>',
			//) );
		?>
	</div><!-- .entry-content -->

	<?php //edit_post_link( __( 'Edit', 'twentyfifteen' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>

</article><!-- #post-## -->

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
