<!-- Slide show: jQuery Cycle (default) -->
<div id="Slideshow">
	<div id="SlideTop"></div>
	<div id="SlideRepeat"></div>
	<div id="SlideBottom"></div>
	<div id="Slides">
		<?php 
			echo HTML::anchor('#', HTML::image('assets/images/slideshow/slide-1.png',
				array(
					'width' => 948,
					'height' => 341,
					'alt' => 'Slide 1'
				)));
			echo HTML::image('assets/images/slideshow/slide-2.png', 
				array(
					'width' => 948,
					'height' => 341,
					'alt' => 'Slide 2'
				)); 
			echo HTML::anchor('#', HTML::image('assets/images/slideshow/slide-3.png', 
				array(
					'width' => 948,
					'height' => 341,
					'alt' => 'Slide 3'
				)));
			echo HTML::image('assets/images/slideshow/slide-4.png', 
				array(
					'width' => 948,
					'height' => 341,
					'alt' => 'Slide 4'
				));
			echo HTML::anchor('#', 'assets/images/slideshow/slide-5.png', 
				array(
					'width' => 948,
					'height' => 341,
					'alt' => 'Slide 5'
				));
			echo HTML::image('assets/images/slideshow/slide-6.png', 
				array(
					'width' => 948,
					'height' => 341,
					'alt' => 'Slide 6'
				));
		?>
	</div>
	<a href="#" class="slidePrev"></a>
	<a href="#" class="slideNext"></a>
	<div id="slidePager"></div>
</div>
		
<div class="pageMain">
	<!-- Showcase Content -->
	<div id="Showcase">
		<div class="">
			<?php echo HTML::image('assets/images/sponsors/Sponsors.png')?>
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
					<a href="assets/images/content/demo-only/featured-1.jpg" class="featuredImg img zoom" rel="featured"><img src="assets/images/content/demo-only/featured-1-thumb.jpg" alt="featured item" /></a>
					<div class="featuredText">
						<h1 class="title">
							Comprehensive Curriculum
							<span>Our curriculum covers all the essential topics needed to get one up and running building websites.  Much of the material will be available online.</span>
						</h1>
						<a href="#">More information...</a>
					</div>
				</div>
				<!-- Featured Item -->
				<div class="featuredItem">
					<a href="assets/images/content/demo-only/featured-2.jpg" class="featuredImg img zoom" rel="featured"><img src="assets/images/content/demo-only/featured-2-thumb.jpg" alt="featured item" /></a>
					<div class="featuredText">
						<h1 class="title">
							Insightful Guest Lectures
							<span>In addition to our lectures on the bare fundamentals of web programming, we'll bring in experts from industry to lend insight on additional topics.</span>
						</h1>
						<a href="#">More information...</a>
					</div>
				</div>
				<!-- Featured Item -->
				<div class="featuredItem">
					<a href="assets/images/content/demo-only/featured-3.jpg" class="featuredImg img zoom" rel="featured"><img src="assets/images/content/demo-only/featured-3-thumb.jpg" alt="featured item" /></a>
					<div class="featuredText">
						<h1 class="title">
							Interaction With Sponsors
							<span>Looking for a summer internship or full-time job?  Want to meet experts from industry?  Our wonderful sponsors can help you with both of these.</span>
						</h1>
						<a href="#">More information...</a>
					</div>
				</div>
				<!-- Featured Item -->
				<div class="featuredItem">
					<a href="assets/images/content/demo-only/featured-4.jpg" class="featuredImg img zoom" rel="featured"><img src="assets/images/content/demo-only/featured-4-thumb.jpg" alt="featured item" /></a>
					<div class="featuredText">
						<h1 class="title">
							$30,000+ in Total Prizes
							<span>Think you've got what it takes to build a killer website?  You and up to two teammates can compete for a slice of our large pool of prize money.</span>
						</h1>
						<a href="#">More information...</a>
					</div>
				</div>
			
				<!-- End of Content -->
				<div class="clear"></div>

			</div>
		</div>
	
		<div class="one-third">	
			<div class="hr"></div>
		
			<!-- Side Navigation Menu -->
			<div class="sideNavWrapper">
				<div class="fb-like-box" data-href="facebook.com/mit6470" data-width="286" data-show-faces="true" data-stream="true" data-header="true"></div>					</div>
								
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
