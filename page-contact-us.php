<!--page-contact us-->
<?php get_header(); ?>

			<div id="content" class="developers">

				<div id="inner-content" class="wrap wrap--wider row">
					<?php $custom_query = new WP_Query('pagename=developers');
				while($custom_query->have_posts()) : $custom_query->the_post(); ?>
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
								<div class="arrow-bottom-left mobile-hide"></div>
								<div class="wrap elements row">
									<div class="col-xs-6 left-lines mobile-hide"></div>

								</div>
								<div class="arrow-bottom-right mobile-hide"></div>
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
										<div class="col-xs-12 right-lines mobile-hide"></div>
									</div>
								</div>
							</div>
						</article>
					<?php endwhile; ?>
						<div class="disclaimer">
							HIPAA, COPPA, PCI, ISO and GDPR conformant
						</div>
				</div>
			</div>


<?php get_footer(); ?>
