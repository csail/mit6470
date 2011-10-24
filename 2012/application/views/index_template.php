<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" class="cufon-active cufon-ready">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
		<meta http-equiv="Content-Language" content="en-us" />
		<title><?php echo $title;?></title>
		<link rel="shortcut icon" href="assets/images/favicon.ico">
		<meta name="keywords" content="<?php echo $meta_keywords;?>" />
		<meta name="description" content="<?php echo $meta_description;?>" />
		<meta name="copyright" content="<?php echo $meta_copywrite;?>" />
		<?php foreach($styles as $file => $type) { echo HTML::style($file, array('media' => $type)), "\n"; }?>
			<!-- Scripts-->

					<?php foreach($scripts as $file) { echo HTML::script($file, NULL, TRUE), "\n"; }?>
			
			
<!-- IE only includes (PNG Fix and other things for sucky browsers -->

<!--[if lt IE 7]>
	<link rel="stylesheet" type="text/css" href="css/ie-only.css">
	<script type="text/javascript" src="js/pngFix.min.js"></script>
	<script type="text/javascript"> 
		$(document).ready(function(){ 
			$(document.body).supersleight();
		}); 
	</script> 
<![endif]-->
<!--[if IE]><link rel="stylesheet" type="text/css" href="css/ie-only-all-versions.css"><![endif]-->
			
<script type="text/javascript">
		account_id = 'UA-20981308-2';
		var _gaq = _gaq || [];
	_gaq.push(['_setAccount', account_id]);
	_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
</script>
<script type="text/javascript">
	// initialize slideshow (Cycle)
	var firstCycle = true;
	$(document).ready(function($) {
		if ($('#Slides').length > 0) {
			$('#Slides').cycle({ 
				fx: 'scrollHorz',
				speed: 750,
				timeout: 6000, 
				randomizeEffects: false, 
				easing: 'easeOutCubic',
				next:   '.slideNext', 
				prev:   '.slidePrev',
				pager:  '#slidePager',
				cleartypeNoBg: true,
				after: function(curr, next, opts) {
					// reset the overlay for the next slide
					jQuery('#SlideRepeat').css('cursor','default').unbind('click');
					// get the link and apply it to the overlay
					toGet = (firstCycle) ?  $('#Slides').children(':eq(0)') : next;
					var linkURL = jQuery(toGet).attr('href') || jQuery(toGet).children('a').attr('href') || false;
					if (linkURL) {
						jQuery('#SlideRepeat').css('cursor','pointer').click( function() {
							document.location.href = linkURL;
						});
					} 
					firstCycle = false;
				}
			});
		}
	});
</script>


	</head>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) {return;}
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=153513511366565";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	
	<body>
		
		<!-- Top reveal (slides open, add class "topReveal" to links for open/close toggle ) -->
		<div id="ContentPanel">

			<!-- close button -->
			<a href="#" class="topReveal closeBtn">Close</a>

			<div class="contentArea">

				<!-- New member registration -->
				<div class="right" style="margin:10px 0 0;">
					<h1>
						Not a member yet?
						<span>Register now and get started.</span>
					</h1>
					<button type="button">Register for an account</button>
				</div>

				<!-- Alternate Login -->				
				<div>
					<form class="loginForm" method="post" action="" style="height:auto;">
						<div id="loginBg"><img src="assets/images/icons/lock-and-key-110.png" width="110" height="110" alt="lock and key" /></div>
						<h2 style="margin-top: 20px;">Sign in to your account.</h2>
						<fieldset>
							<legend>Account Login</legend>
							<p class="left" style="margin: 0 8px 0 0;">
								<label for="RevealUsername" class="overlabel">Username</label>
								<input id="RevealUsername" name="RevealUsername" type="text" class="loginInput textInput rounded" />
							</p>
							<p class="left" style="margin: 0 5px 0 0;">
								<label for="RevealPassword" class="overlabel">Password</label>
								<input id="RevealPassword" name="RevealPassword" type="password" class="loginInput textInput rounded" />
							</p>
							<p class="left" style="margin: -7px 0 0;">
								<button type="submit" class="btn" style="margin:0;"><span>Sign in</span></button>
							</p>
						</fieldset>
						<p class="left noMargin">
							<a href="#">Forgot your password?</a>
						</p>
					</form>		
				</div>

				<!-- End of Content -->
				<div class="clear"></div>

			</div>
		</div>

		<div id="Wrapper">
			<div id="PageWrapper">
				<div class="pageTop"></div>
		 		<?php echo $header;?>
		 		<?php echo $content;?>
			</div>
		</div>

<div id="kohana-profiler">
<?php //echo View::factory('profiler/stats'); ?>
</div>

	</body>
</html>