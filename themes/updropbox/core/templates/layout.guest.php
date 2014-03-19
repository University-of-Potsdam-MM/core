<!DOCTYPE html>
<!--[if lt IE 7]><html class="ng-csp ie ie6 lte9 lte8 lte7"><![endif]-->
<!--[if IE 7]><html class="ng-csp ie ie7 lte9 lte8 lte7"><![endif]-->
<!--[if IE 8]><html class="ng-csp ie ie8 lte9 lte8"><![endif]-->
<!--[if IE 9]><html class="ng-csp ie ie9 lte9"><![endif]-->
<!--[if gt IE 9]><html class="ng-csp ie"><![endif]-->
<!--[if !IE]><!--><html class="ng-csp js touch cssanimations csstransitions svg inlinesvg svgclippaths no-ie8compat"><!--<![endif]-->

	<?php $defaults = new OC_Defaults(); // initialize themable default strings and urls ?>

	<head data-requesttoken="<?php p($_['requesttoken']); ?>">
		<title>
		<?php p($defaults->getName()); ?>
		</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="apple-itunes-app" content="app-id=543672169">
		<link rel="stylesheet" type="text/css" media="all" href="themes/updropbox/core/css/app.css">
		<link rel="shortcut icon" href="<?php print_unescaped(image_path('', 'favicon.png')); ?>" />
		<link rel="apple-touch-icon-precomposed" href="<?php print_unescaped(image_path('', 'favicon-touch.png')); ?>" />
	<link rel="stylesheet" type="text/css" media="all" href="themes/updropbox/core/css/styles.css">
		<script type="text/javascript" src="themes/updropbox/core/files/jquery.min.js" media="all"></script>
		<?php foreach($_['jsfiles'] as $jsfile): ?>
			<script type="text/javascript" src="<?php print_unescaped($jsfile); ?>"></script>
		<?php endforeach; ?>
	
		<?php foreach($_['headers'] as $header): ?>
			<?php
				print_unescaped('<'.$header['tag'].' ');
				foreach($header['attributes'] as $name=>$value) {
					print_unescaped("$name='$value' ");
				};
				print_unescaped('/>');
			?>
		<?php endforeach; ?>
		<script type="text/javascript" src="themes/updropbox/core/files/modernizr.custom-573fab3ff3dfd74500f7116dbdb911d2.min.js"></script>
		<!-- <script type="text/javascript" src="themes/updropbox/core/files/jquery.min.js"></script> -->
		<script type="text/javascript" src="themes/updropbox/core/files/javascript_0b12553063-0b125530632c7dd7c0e9a1680028d9ce.min.js"></script>
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
	
	
	</head>

	<?php
		include("header_up.php"); //hier kommt der Anfang von der Login-Seite bis zum Inhalt
	?>


       

	    <!-- Content and Sidebar-->
	    <div id="up_content_wrapper">
	        <div id="up_content" class="row">
	            <div class="sixteen columns">
	                <div id="c129649" class="csc-default"><!--f:debug>Array</f:debug-->
	
	
	    <!-- Page teaser - loginbox -->
		
	    <div class="up-p-teaser-1-container">
	        <div class="row up-p-teaser-1-box">
	            <div class="twentyfour columns">
	                 <h1 class="login">Login zu Box.UP</h1>	
	                        <div class="up-p-teaser-1 up-p-text-teaser ">
													
								<div id="loginform" role="login" >
															
									<?php print_unescaped($_['content']); ?> 
								</div>                 
							</div>
	            </div>
	        </div>
	    </div>



		<!--f:debug>Array</f:debug-->
		
		</div><div id="c130179" class="csc-default"><!--f:debug>Array</f:debug-->
		
		<h1>Weitere Dienste</h1>
		    <!-- Page teaser - pad.up -->
		    <div class="up-p-teaser-1-container">
		        <div class="row up-p-teaser-1-box">
		            <div class="twentyfour columns">
		                
		                        <div class="row up-p-teaser-1 up-p-text-teaser up-hl-lightgrey">
		                    
		                    
		                            <div class="nine columns up-p-teaser-1-headline">
		                               <a href=""><img src="themes/updropbox/core/files/padup.png" style=""></a>
		                            </div>
		                            <div class="fifteen columns up-p-teaser-1-text">
		                                    <h2><a href="">Pad.UP - Etherpad der Uni Potsdam</a></h2>
		                                    <p class="bodytext"><strong>Hinweis</strong> Hier kannst du noch was hinschreiben</p>
		                            </div>
		                        
		                </div>
		            </div>
		        </div>
		    </div>
		
		
		
		<!--f:debug>Array</f:debug-->
		
		</div><div id="c130181" class="csc-default"><!--f:debug>Array</f:debug-->
		
		
		    <!-- Page teaser - box.up -->
		    <div class="up-p-teaser-1-container">
		        <div class="row up-p-teaser-1-box">
		            <div class="twentyfour columns">
		                
		                        <div class="row up-p-teaser-1 up-p-text-teaser up-hl-lightgrey">
		                    
		                    
		                            <div class="nine columns up-p-teaser-1-headline">
		                                  <a href=""><img src="themes/updropbox/core/files/boxup.png" style=""></a>
		                            </div>
		                            <div class="fifteen columns up-p-teaser-1-text">
		                                    <h2> <a href="">Box.UP - Dropbox der Uni Potsdam</a></h2>
		                                     <p class="bodytext"><strong>Hinweis</strong> Hier kannst du noch was hinschreiben</p>
		                            </div>
		                        
		                </div>
		            </div>
		        </div>
		    </div>
		
		
		
		<!--f:debug>Array</f:debug-->
		
		</div>
		
		
		            </div>
					
					
					
		            <div id="up_sidebar" class="eight columns">
		                <div id="c130107" class="csc-default">
		<div class="news-latest-container">
			
					
				
					<div class="news-latest-item hinweis up-hl-lightgrey">
					
						<h2 class="up-hl-darkgrey">Hinweis</h2>
						<p >Um den angeforderten Dienst nutzen zu können, müssen Sie sich hier einloggen. Bitte verwenden Sie zur Anmeldung als Benutzername Ihr Mailkürzel <em>ohne</em> @uni-potsdam.de.</p>
						<p>
		Diese Seite erlaubt Ihnen ber eine "Shibboleth" genannte Single-Sign-On-Lösung den einheitlichen Zugang zu diversen Webanwendungen der Universität Potsdam und anderer Universitäten innerhalb des Deutschen Forschungsnetzes (DFN).</p>
		<p>Bei der erstmaligen Anmeldung erhalten Sie vor der Übertragung Ihrer Daten an die Webanwendung eine Übersicht aller weitergeleiteten personenbezogenen Informationen.</p>
		<p>Nach dem Login haben Sie so lange ohne erneuten Login Zugang zu allen an das Shibboleth-System angeschlossenen Webanwendungen, bis Sie den Browser schließen.<em> Zum Logout müssen Sie daher den Browser komplett beenden.</em>
		</p>
					</div>
				
					
		</div>
		</div>
		            </div>
		        </div>
		    </div>
		    
		
		
		
		<!-- Content Footer Divider -->
		<?php
		include("footer_up.php"); //hier kommt der Footer
	?>

</body>
</html>
