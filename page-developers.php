<!--page-developers-->
<?php get_header(); ?>

			<div id="content" class="developers">

				<div id="inner-content" class="wrap wrap--wider row">

						<main id="main" class="col-xs-12" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							<style>
								<?php if( have_rows('hero_slides') ): ?>
								<?php while( have_rows('hero_slides') ): the_row();
									$slide_number = get_sub_field('slide_number');
									$slide_name = sanitize_title_for_query( get_sub_field('slide_name') ); ?>

										a[id="<?php echo $slide_name; ?>"]:target ~ #slide_container li.slide {
											-webkit-transform: translateX(-<?php echo $slide_number; ?>00%);
											transform: translateX(-<?php echo $slide_number; ?>00%);
										}
								<?php endwhile; ?>
							</style>
								<div class="hero_slider">
									<?php while( have_rows('hero_slides') ): the_row();
										$slide_name = sanitize_title_for_query( get_sub_field('slide_name') ); ?>
										<a id="<?php echo $slide_name; ?>" style="display:none;"></a>
									<?php endwhile; ?>
									<ul id="slide_container" class="flex--row__mobile-collapse">
										<?php while( have_rows('hero_slides') ): the_row();
											$slide_name = sanitize_title_for_query( get_sub_field('slide_name') );
											$slide_image = get_sub_field('image');
											?>
										<li class="slide col-sm-12 row" id="slide_<?php echo $slide_name; ?>" >
											<?php
												$size = "full"; // (thumbnail, medium, large, full or custom size)
												$image = wp_get_attachment_image_src( $slide_image, $size );
												// url = $image[0];
												// width = $image[1];
												// height = $image[2];
											?>
											<div class="slide_background" style="background-image:url('<?php echo $image[0]; ?>');"></div>
											<div class="overlay">
												<div class="arrow-bottom-left"></div>
												<div class="wrap">
													<div class="design-element__top"></div>
													<div class="content col-xs-12 col-md-8" style="text-align:center;">
														<h2><?php the_sub_field('headline'); ?></h2>
														<?php the_sub_field('content'); ?>
													</div>
													<div class="design-element__bottom"></div>
												</div>
												<div class="arrow-top-right"></div>
											</div>
										</li>
									<?php endwhile; ?>
									</ul>
									<div class="slide-nav">
										<ul id="nav-items">
											<?php while( have_rows('hero_slides') ): the_row();
												$slide_name = sanitize_title_for_query( get_sub_field('slide_name') ); ?>
												<li><a href="#<?php echo $slide_name; ?>"></a></li>
											<?php endwhile; endif; ?>
										</ul>
									</div>
								</div>
						</main>
						<article class="dark">
							<div class="wrap row" style="color:white;">
								<?php if( have_rows('feature_set') ): while( have_rows('feature_set') ): the_row(); ?>
								<div class="col-xs-12 col-md-4 feature" style="text-align:center;">
									<img src="<?php the_sub_field('feature_icon'); ?>"/>
									<h3><?php the_sub_field('headline'); ?></h3>
									<p>
										<?php the_sub_field('content'); ?>
									</p>
								</div>
								<?php endwhile; endif; ?>
							</div>
						</article>
						<article class="light">
							<h2><?php the_field('architecture_headline'); ?></h2>
							<img src="<?php the_field('architecture_image'); ?>" width="100%" height="auto"/>
						</article>
						<article class="product_development wrap">
							<h2><?php the_field('product_development_headline'); ?></h2>
							<div class="row">
							<?php if( have_rows('product_development_uses') ): while( have_rows('product_development_uses') ): the_row(); ?>
							<div class="col-xs-12 col-md-4"><?php the_sub_field('column'); ?></div>
							<?php endwhile; endif; ?>
							</div>
							<ul class="partner-logos">
								<?php if( have_rows('company_logos') ): while( have_rows('company_logos') ): the_row(); ?>
								<li class="line-item">
									<img src="<?php the_sub_field('logo'); ?>" />
								</li>
							<?php endwhile; endif; ?>
							</ul>
						</article>
						<article class="dark">
							<div class="flex--column">
								<h2><?php the_field('cloud_headline'); ?></h2>
								<img class="cloud" src="<?php the_field('cloud_image'); ?>" width="100%" height="auto"/>
							</div>
						</article>

						<article class="col-sm-12 section row contact" id="contact">
							<?php
								$slide_image = get_field('image');
								$size = "full"; // (thumbnail, medium, large, full or custom size)
								$image = wp_get_attachment_image_src( $slide_image, $size );
								// url = $image[0];
								// width = $image[1];
								// height = $image[2];
							?>
							<div class="col-xs-12 collapse top-row">
								<div class="arrow-bottom-left"></div>
								<div class="wrap elements row">
									<div class="col-xs-6 left-lines"></div>

								</div>
								<div class="arrow-bottom-right"></div>
							</div>
							<div class="col-xs-12 collapse bottom-row contact-image section-one__background" style="background-image:url('<?php echo $image[0]; ?>');">
								<div class="overlay overlay__dark"></div>
							</div>
							<div class="col-xs-12 contact-form">
								<div class="col-xs-12 col-md-8">
									<h2><?php the_field('headline'); ?></h2>
									<div class="form">
										<h3><?php the_field('form_headline'); ?></h3>
										<div class="col-xs-12 collapse flex flex--row flex--row__mobile-collapse">
											<div class="col-xs-12 col-md-6">
												<?php the_field('form'); ?>
											</div>
											<div class="col-xs-12 col-md-6 bullets">
												<?php if( have_rows('form_bullets') ): ?>
													<ul>
														<?php while( have_rows('form_bullets') ): the_row(); ?>
														<li>
															<i>+</i> <?php the_sub_field('bullet'); ?>
														</li>
													<?php endwhile; endif; ?>
													</ul>
											</div>
										</div>
										<div class="col-xs-12 right-lines"></div>
									</div>
								</div>
							</div>
						</article>
						<div class="disclaimer">
							HIPAA, COPPA, PCI, ISO and GDPR conformant
						</div>
				</div>

			</div>


<?php get_footer(); ?>
