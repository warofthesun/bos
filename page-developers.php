<!--page-developers-->
<?php get_header(); ?>

			<div id="content" class="developers">

				<div id="inner-content" class="wrap wrap--wider row">

						<main id="main" class="col-xs-12" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							<style>

									a[id="thing"]:target ~ #slide_container li.slide {
										-webkit-transform: translateX(-100%);
										transform: translateX(-100%);
									}

							</style>
								<div class="hero_slider">
									<a id="thing" style="display:none;"></a>

									<ul id="slide_container">
										<li class="slide col-sm-12 row" id="slide_<?php echo $slide_name; ?>" >
											<div class="slide_background" style="background-image: url('<?php echo get_template_directory_uri(); ?>/library/images/ship-more.jpg');"></div>
											<div class="overlay">
												<div class="arrow-bottom-left"></div>
												<div class="wrap">
													<div class="design-element__top"></div>
													<div class="content col-xs-8" style="text-align:center;">
														<h2>Ship more. Get more done.</h2>
														<p>What Infrastructure-as-a-Service (IaaS) and Platform-as-a-Service (PaaS) have done for Operations, BOS Framework-as-a-Service does for business application development. Stop building the same backend components you’ve built over and over again and start delivering value faster and more scalably on the BOS framework.
														</p>
													</div>
													<div class="design-element__bottom"></div>
												</div>
												<div class="arrow-top-right"></div>
											</div>
										</li>
									</ul>
									<div class="slide-nav">
										<ul id="nav-items">
												<li><a href="#thing"></a></li>
										</ul>
									</div>
								</div>

						</main>

				</div>

			</div>


<?php get_footer(); ?>
