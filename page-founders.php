<!--page-founders-->
<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap wrap--wider row founders">

						<main id="main" class="col-xs-12" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<a id="nav0"></a>
						  <a id="nav1"></a>
						  <a id="nav2"></a>
						  <a id="nav3"></a>
							<div class="navlinks">
								<ul id="mynav">
									<li><a href="#nav0">Slide01</a></li>
									<li><a href="#nav1">Slide02</a></li>
									<li><a href="#nav2">Slide03</a></li>
									<li><a href="#nav3">Slide04</a></li>
								</ul>
							</div>
						  <ul id="slide_container">
						      <li class="slide col-sm-12 row" id="slide01" style="padding:0;">
										<?php
											$attachment_id = get_field('founders_hero_image');
											$size = "full"; // (thumbnail, medium, large, full or custom size)
											$image = wp_get_attachment_image_src( $attachment_id, $size );
											// url = $image[0];
											// width = $image[1];
											// height = $image[2];
										?>
						          <div class="col-xs-6 left founders-background" style="background-image:url('//localhost:8201/wp-content/uploads/2018/12/founders-background.jpg');"></div>
											<div class="col-xs-6 overlay">
												<div class="arrow-bottom-left"></div>
												<div class="arrow-bottom-right"></div>
											</div>
											<div class="col-xs-6 right" style="color:white;padding:4em;display:flex;align-items:center;position:relative;">
												<div class="col-xs-11">
													<div class="design-element__top" style="display: flex;flex-direction: column;align-items: flex-end;">
														<img src="<?php echo get_template_directory_uri(); ?>/library/images/lines_top-right-dark.png" width="100%" height="auto" style="max-width:320px;">
													</div>
													<div class="content col-xs-12" style="min-height: 400px;padding: 3em 0 1em 0;">
														<h1>start with bos</h1>
														<h2>Spend your runway entirely on finding product-market fit.</h2>
														With BOS, your MVP is built with back-end technology and readily-available common functionality that has already been proven to work at-scale.
														<br /><br />
														That way, your limited runway is focused exclusively on generating the insights that you need to test and validate your market assumptions and iterating your product to meet those customer needs.
													</div>
													<div class="design-element__bottom row">
														<div class="col-xs-7" style="display: flex;flex-direction: column;justify-content: flex-end;">
															<img src="<?php echo get_template_directory_uri(); ?>/library/images/lines_bottom-left-dark.png" width="100%" height="auto" style="max-width:320px;">
														</div>
														<div class="col-xs-2">&nbsp;</div>
														<div class="col-xs-3" style="display: flex; flex-direction: column; align-items: flex-end;">
															<img src="<?php echo get_template_directory_uri(); ?>/library/images/icon_market-fit.png" width="100%" height="auto" style="max-width:100px;">
														</div>
													</div>
												</div>
												<div class="arrow-bottom-right" style="width: 0; height: 0; border-top: 0px solid transparent; border-bottom: calc((100vh - 75px)/2) solid transparent; border-left: 300px solid rgba(255, 255, 255, 0.15); position: absolute; top: 0; left: 0;"></div>
											</div>
						      </li>

									

						      <li class="slide" id="slide03">
						          <p>Projects</p>
						      </li>

						      <li class="slide" id="slide04">
						          <p>Contact</p>
						      </li>
						  </ul>

						</main>

				</div>

			</div>


<?php get_footer(); ?>
