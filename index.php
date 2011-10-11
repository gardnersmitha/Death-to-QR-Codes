<?php require_once('functions.php'); ?>
<?php require_once('auth.php'); ?>

<?php


if($authenticated == true){
	$username = $resp->screen_name;
	$authorized = 'authorized';
	//print_r($resp);
}

?>

<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>QR Codes Suck.</title>
	<meta name="description" content="">
	<meta name="author" content="">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	<link rel="stylesheet" href="css/fonts/cantarell.css?v=2">
	<link rel="stylesheet" href="css/style.css?v=2">

	<script src="js/libs/modernizr-1.7.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
</head>
<body>
	<div id="mainframe">
		<header>
			<?php echo $username; ?>
		</header>
		<section id="marquis">
			<h1 id="tagline">It's time for QR codes to die.</h1>
			<p id="description">Why? Because they're complicated, and hard to use, and they look terrible. Technology should make things easier, not more complicated.</p>
		</section>
		
		
		<section id="authenticator" class="<?php echo $authorized; ?>">
			 <a id="twitter_button" href="auth.php?authorize=1&amp;force=1"><!-- Authorize Application (with callback) (force login) --></a>
		</section>
		
		<section id="counter">
			<?php getSignerCount(); ?> super smart people have signed this petition.
		</section>
		
		<section id="petition">
			<ul>
				<?php getSigners(); ?>
			</ul>
		</section>
		
		<footer>
		</footer>
		<a href="auth.php?wipe=1">Start Over and delete stored tokens</a>
		
	
	</div><!-- //end #mainframe -->
	
	<!-- Scripts loaded under here -->
	<p id="jquery-test" href="#" class="info">jQuery is not loaded (http://localhost/ needed)</p>
	<script src="js/ticker.js"></script>
	<script>!window.jQuery && document.write(unescape('%3Cscript src="js/libs/jquery-1.5.1.min.js"%3E%3C/script%3E'))</script>
	<script src="js/script.js"></script>
	<!--[if lt IE 7 ]>
	<script src="js/libs/dd_belatedpng.js"></script>
	<script> DD_belatedPNG.fix('img, .png_bg');</script>
	<![endif]-->
	
</body>
</html>