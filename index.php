<?php
// Same as error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

include("config.php");
include("modules/init.php");
include('modules/browser_detection.php');

if (browser_detection( 'browser' ) == 'ie' && browser_detection( 'number' ) == 6 )
{
	//header("Location: http://www.google.com/chrome/intl/en/landing_chrome.html?hl=en&hl=en&brand=");
	//exit();
}


// Include recaptcha
require_once('modules/recaptchalib.php');

// Get a key from https://www.google.com/recaptcha/admin/create
$publickey = "6Lc53c8SAAAAADT56DmyzOJpfN8ZX8-YUzpBzPJH";
$privatekey = "6Lc53c8SAAAAAI2ZqRt-2MwC_Rd_BpztBAfdiE1i";

# the response from reCAPTCHA
$resp = null;
# the error code from reCAPTCHA, if any
$error = null;

// Contact
if(isset($_POST['nom']) && $_POST['nom'] !="")
{

	// Smart variable
	$nom 		= $_POST['nom'];
	$courriel 	= $_POST['courriel'];
	$telephone 	= $_POST['telephone'];
	$comments 	= $_POST['question'];
	$dest       = "gilp@videotron.ca";
	$subject    = "Condos VV | Demande d'information";
	
		# was there a reCAPTCHA response?

	$resp = recaptcha_check_answer ($privatekey,
									$_SERVER["REMOTE_ADDR"],
									$_POST["recaptcha_challenge_field"],
									$_POST["recaptcha_response_field"]);
	
	// Form verification
	if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $courriel)) {
		$invalid = true; 
		$message = "ERREUR: L'adresse courriel saisie est invalide.";
	}
	elseif($resp->is_valid){
		$valid = true;
		// Set email and send message
		$to = $dest;
		$body = "<html><body><br />Nom: " . $nom . "<br />Courriel: " . $courriel . "<br />Telephone: " . $telephone . "<br /><br />Message:" . $comments . "<br /><br />-- Condos VV<br />-- Powered by Standish Communications";
		$body_copy = "Ceci est une copie du message que vous venez d'envoyer via le site web de Condos VV. <br />S'il vous plait, ne pas repondre a ce courriel. <br /><br />".$body;
		
		if (mail($to, $subject, $body, "From: nepasrepondre@condosvv.com\nReply-To: " . $courriel . ", MIME-Version: 1.0\nContent-type: text/html; charset=UTF-8"))
			if (mail($courriel, $subject, $body_copy, "From: " . $dest .", MIME-Version: 1.0\nContent-type: text/html; charset=UTF-8"))
				$message = "Merci de votre demande. Vous serez contact&eacute; d'ici 72 heures.";
		else
			$message = "L'envois du message a &eacute;chou&eacute;. Veuillez nous contacter via courriel ou t&eacute;l&eacute;phone. ";
	}else {
		$invalid = true; 
		if($resp->error == "incorrect-captcha-sol"){
			$message = "R&eacute;ponse captcha incorrect!";
		} else {
			$message = $resp->error;
		}
	}
}
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="fr"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="fr"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="fr"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="fr"> <!--<![endif]-->
<head>
	
	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8" />
	<title><? if($p != 'accueil') echo $page_title . ' | '; ?>Condos &agrave; vendre &agrave; Sherbrooke avec vue magnifique, Les condos W</title> 

	<!-- Mobile Specific Metas
    ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
	
	<!-- CSS
    ================================================== -->
	<!--<link rel="stylesheet" href="<? echo BASE_URL; ?>assets/stylesheets/base.css">-->
	<!--<link rel="stylesheet" href="<? echo BASE_URL; ?>assets/stylesheets/grid.css">-->
	<link rel="stylesheet" href="<? echo BASE_URL; ?>assets/stylesheets/prettyPhoto.css">
	<link rel="stylesheet" href="<? echo BASE_URL; ?>assets/stylesheets/colorbox.css">
	<link rel="stylesheet" href="<? echo BASE_URL; ?>assets/stylesheets/condosvv.css?v=2.0">

  	<!--<link rel="stylesheet" href="<? echo BASE_URL; ?>assets/stylesheets/normalize.css>-->
	<link rel="stylesheet" href="<? echo BASE_URL; ?>assets/stylesheets/foundation.css">

	<link rel="stylesheet" href="<? echo BASE_URL; ?>assets/stylesheets/app.css">

    <script src="<? echo BASE_URL; ?>assets/javascripts/vendor/modernizr.js"></script>

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<? echo BASE_URL; ?>assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="<? echo BASE_URL; ?>assets/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<? echo BASE_URL; ?>assets/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<? echo BASE_URL; ?>assets/images/apple-touch-icon-114x114.png">
	
	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-431994-41']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
	
</head>

 
<body <?php echo ($p == 'accueil' ? 'class="home"' : 'class="type"'); ?>>
 
	<!-- Header
	================================================== -->
	<div class="masthead">
        <div id="header">
		   <div class="row">
				<div class="large-3 columns" id="logo"><a href="<? echo BASE_URL; ?>accueil" title="" rel="home">Condos VV</a></div>
				<div class="large-9 columns" id="nav">
					<ul class="styless">
	                    <li><a href="<? echo BASE_URL; ?>">Home</a> |</li>
	                    <li><a href="<? echo BASE_URL; ?>plan-condos">Phase 1</a> |</li>
						<li><a href="<? echo BASE_URL; ?>phase-2">Phase 2</a> |</li>
						<li><a href="<? echo BASE_URL; ?>galerie">Galerie</a> |</li>
						<li><a href="<? echo BASE_URL; ?>information">Information</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<?php
	switch($p){ 
		case 'accueil' : 
			$load_header = true;
			break;
		case 'prix' :
			$load_header = false;
			break;
		case 'information' :
			$load_header = false;
			break;
		case 'galerie' :
			$load_header = false;
			break;
		default : 
			$load_header = false;
	}
	
	if($load_header){
		include("modules/header.php");
	} else {
		include("modules/header-simple.php");
	}
	
	?>
	

	
	<!-- Primary Page Layout
	================================================== -->
	
	<?php
		if (file_exists('pages/'.$p.'.php')) {
			@include ('pages/'.$p.'.php');
		}	
		elseif (!file_exists('pages/'.$p.'.php')) {
			@include ("modules/header.php");
			@include ('pages/404.php');
		}
	?> 
	
	<!-- Footer
	================================================== -->
	<footer>
		<div class="row">
			<div class="large-8 columns">
				<!-- AddThis Button BEGIN -->
					<div class="addthis_toolbox addthis_default_style ">
						<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
						<a class="addthis_button_tweet"></a>
						<a class="addthis_button_pinterest_pinit"></a>
						<a class="addthis_counter addthis_pill_style"></a>
					</div>
					<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
					<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5113b8386c8e0306"></script>
				<!-- AddThis Button END -->
				
			</div>
			<div class="large-4 columns" id="standish">
				Accr&eacute;dit&eacute; par <a href="http://www.condossherbrooke.ca/" rel="external">Condos Sherbrooke</a>
				<br/>
				<a href="http://www.standish.ca/" rel="external">Conception Web</a> <a href="http://www.standish.ca/" rel="external">Standish Communications</a>.
			</div>
		</div>
	</footer>

	<!-- Javascript
	================================================== -->
	<script src="<? echo BASE_URL; ?>assets/javascripts/jquery-1.7.2.min.js"></script>
	<script src="<? echo BASE_URL; ?>assets/javascripts/jquery.prettyPhoto.js"></script>
	<script src="<? echo BASE_URL; ?>assets/javascripts/global.js"></script>
    
    <script src="<? echo BASE_URL; ?>assets/javascripts/jquery.imagemapster.min.js"></script>
    <script src="<? echo BASE_URL; ?>assets/javascripts/jquery.metadata.js"></script>
    <script src="<? echo BASE_URL; ?>assets/javascripts/jquery.tooltip.min.js"></script>
    <script src="<? echo BASE_URL; ?>assets/javascripts/jquery.photoset-grid.min.js"></script>
    <script src="<? echo BASE_URL; ?>assets/javascripts/foundation.min.js"></script>
    <script>
        $(document).foundation();
    </script>
    

</body>
</html>