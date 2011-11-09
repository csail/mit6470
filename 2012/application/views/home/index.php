<?php
	if (isset($email)) {
		$('#email_status').html($email_status_msg);
		$('#email_status').show();
	}

?>

<!-- Slide show: jQuery Cycle (default) -->
<div id="Slideshow">
	<div id="SlideTop"></div>
	<div id="SlideRepeat"></div>
	<div id="SlideBottom"></div>
	<div id="Slides">
		<?php 
			echo HTML::anchor('#', HTML::image('assets/images/frontpage/frontpage.png',
				array(
					'width' => 948,
					'height' => 341,
					'alt' => 'Main image'
				)));
?>
	</div>
	<!-- <a href = "#" class = "slidePrev"></a>
	<a href = "#" class = "slideNext"></a> -->
	<div id="slidePager"></div>
</div>
		
<div class="pageMain">
	<!-- Showcase Content -->
	<div id="Showcase">
		<div class="">
			<?php echo HTML::image('assets/images/sponsors/Sponsors.png', array('width' => 940, 'alt' => 'Sponsor logos '))?>
		<div class="hr"></div>
	</div>

	<!-- Page Content -->
	<div class="contentArea">
		<div class="two-thirds">
		
			<!-- Welcome Message / Page Headline -->
			<h1 class="headline">Welcome to the <strong>MIT 6.470</strong> website for <strong>2012</strong>.</h1>
			<p class="impact">MIT's 6.470 is a web programming class and competition that takes place over IAP.  Beginners and experts alike are encouraged to sign up, learn, and compete for $30,000+ in total prizes!</p>

			<!-- Featured Content -->
			<div class="ribbon">
				<div class="wrapAround"></div>
				<div class="tab">
					<span>Featured Content</span>
				</div>
			</div>

			<div class="featuredContent">
				<!-- Featured Item -->
				<div class="featuredItem">
					<?php
						echo HTML::anchor('/course/schedule', HTML::image('assets/images/frontpage/curric.jpg', 
							array('alt' => 'Curriculum image', 'width' => 150, 'height' => 85)), array('class' => 'featuredImg img'));
					?>					
					<div class="featuredText">
						<h1 class="title">
							Comprehensive Curriculum
							<span>Our curriculum covers all the essential topics needed to get one up and running building websites.  Much of the material will be available online.</span>
						</h1>
						<?php echo HTML::anchor('/course/schedule', 'More information'); ?>
					</div>
				</div>
				<!-- Featured Item -->
				<div class="featuredItem">
					<?php
						echo HTML::anchor('/course/guest_lectures', HTML::image('assets/images/frontpage/guestlec.jpg', 
							array('alt' => 'Guest lecture image', 'width' => 150, 'height' => 85)), array('class' => 'featuredImg img'));
					?>
					<div class="featuredText">
						<h1 class="title">
							Insightful Guest Lectures
							<span>In addition to our lectures on the bare fundamentals of web programming, we'll bring in experts from industry to lend insight on additional topics.</span>
						</h1>
						<?php echo HTML::anchor('/course/guest_lectures', 'More information'); ?>						
					</div>
				</div>
				<!-- Featured Item -->
				<div class="featuredItem">
					<?php
						$sponsors = array('microsoft', 'nextjump', 'palantir', 'tripadvisor');
						$rand_int = rand(0, count($sponsors) - 1);
						echo HTML::anchor('#', HTML::image('assets/images/sponsors/' . $sponsors[$rand_int] . '.png', array('width' => 150, 'height' => 85, 'alt' => 'Sponsors image'
						)), array('class' => 'featuredImg img'));
					?>					
					<div class="featuredText">
						<h1 class="title">
							Interaction With Sponsors
							<span>Looking for a summer internship or full-time job?  Want to meet experts from industry?  Our wonderful sponsors can help you with both of these.</span>
						</h1>
					</div>
				</div>
				<!-- Featured Item -->
				<div class="featuredItem">
					<?php
						echo HTML::anchor('/competition/prizes', HTML::image('assets/images/frontpage/prize.jpg', 
							array('alt' => '30K in prizes image', 'width' => 150, 'height' => 85)), array('class' => 'featuredImg img'));
					?>
					<div class="featuredText">
						<h1 class="title">
							$30,000+ in Total Prizes
							<span>Think you've got what it takes to build a killer website?  You and up to two teammates can compete for a slice of our large pool of prize money.</span>
						</h1>
						<?php echo HTML::anchor('/competition/prizes', 'More information'); ?>						
					</div>
				</div>
			
				<!-- End of Content -->
				<div class="clear"></div>

			</div>
		</div>
	
		<div class="one-third">	
			
			<!-- Newsletter -->
			<h1 class="title" style="margin-bottom:0;">
				Newsletter
				<span>We’ll keep you informed about 6.470 as IAP approaches!</span>
			</h1>
			<?php
				echo Form::open('home/register', array('id' => 'newsLetter'));
			?>
			<p style="margin: 1em 0 1px;">
				<?php
					echo Form::label('NewsletterEmail', 'Email', array('class' => 'overlabel'));
					echo Form::input('email', NULL, array('id' => 'NewsletterEmail', 'style' => 'width: 259px', 'margin' => 0, 'class' => 'textInput'));
				?>
			</p>
			<span id="email_status" style="display:none; color: red;"></span>
			<p style="margin:0;">
				<?php echo Form::button('', 'Sign me up!', array('class' => 'btn')); ?>
				<!-- <button type="submit" class="btn"><span>Sign me up!</span></button> -->
			</p>
				
			<?php
				echo Form::close();
			?>			
		
			<!-- Side Navigation Menu -->
			<div class="sideNavWrapper">
				
				
				<div class="fb-like-box" data-href="facebook.com/mit6470" data-width="270" data-show-faces="true" data-stream="true" data-header="true"></div>					</div>
								
		</div>
	
		<!-- End of Content -->
		<div class="clear"></div>

	</div>

	</div>

	<?php echo View::factory('basic/footer'); ?>

	</div>
</div>

<!-- Activate Font Replacement (cufón) -->
<script type="text/javascript"> Cufon.now(); </script>
