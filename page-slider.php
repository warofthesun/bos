<!--page-founders-->
<?php get_header(); ?>
<style>
.footer {
	height: 0;
	display: none;
}
</style>
			<div id="content" class="founders">

				<div id="inner-content" class="wrap wrap--wider row">

						<main id="main" class="col-xs-12" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog" style="background-color:red;">
							<div class="cachu__container">

									<!-- All sections are wrapped inside .cachu__sections  -->

									<div class="cachu__sections">
										<section class="cachu__section">Some section</section>
										<section class="cachu__section">Some section</section>
										<section class="cachu__section" id="contact">Contact</section>
									</div>

									<!-- End of section  -->
									<!-- Navigation will be dynamically added here (via JavaScript) -->
									</div>
									<script>
									const options = {
										  disableMouseEvents: false, // Disable mousewheel event listening.
										  scrollingSpeed: 2000,  // The speed of the transition.
										  scrollingLoop: false,  // Loop after reaching the end.
										  navigationEnabled: true, // Enable navigation buttons
										  navigationPosition: 'left'  // The Navigation's position
										};

										let slider = new Cachu(document.querySelector('.cachu__container'), options);
										slider.run();
									</script>
						</main>

				</div>

			</div>


<?php get_footer(); ?>
