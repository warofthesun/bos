<!--page-founders-->
<?php get_header(); ?>

			<div id="content" class="founders">

				<div id="inner-content" class="wrap wrap--wider row">

						<main id="main" class="col-xs-12" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
								<?php if( have_rows('content_slides') ): ?>
								<style>

									<?php while( have_rows('content_slides') ): the_row();
										$slide_number = get_sub_field('slide_number');
										$slide_name = sanitize_title_for_query( get_sub_field('slide_name') );
									?>
										a[id="<?php echo $slide_name; ?>"]:target ~ #slide_container li.slide {
											-webkit-transform: translateY(-<?php echo $slide_number; ?>00%);
											transform: translateY(-<?php echo $slide_number; ?>00%);
										}
									<?php endwhile; endif; ?>

									<?php if( have_posts() ): the_post();?>
										a[id="contact"]:target ~ #slide_container li.slide {
											-webkit-transform: translateY(-<?php the_field('slide_number'); ?>00%);
											transform: translateY(-<?php the_field('slide_number'); ?>00%);
										}
									<?php endif; ?>

								</style>
								<?php if( have_rows('content_slides') ): ?>
								<?php while( have_rows('content_slides') ): the_row(); $slide_name = sanitize_title_for_query( get_sub_field('slide_name') ); ?>
									<a id="<?php echo $slide_name; ?>" style="display:none;"></a>
								<?php endwhile; ?>
									<a id="contact" style="display:none;"></a>
									<div class="slide-nav">
										<ul id="nav-items">
											<?php while( have_rows('content_slides') ): the_row(); $slide_name = sanitize_title_for_query( get_sub_field('slide_name') ); ?>
												<li><a href="#<?php echo $slide_name; ?>"><?php echo $slide_name; ?></a></li>
											<?php endwhile; endif;?>
												<li><a href="#contact">contact</a></li>
										</ul>
									</div>
							<?php if( have_rows('content_slides') ): ?>
						  <ul id="slide_container">
								<?php while( have_rows('content_slides') ): the_row();
									$slide_name = sanitize_title_for_query( get_sub_field('slide_name') );
									$headline = get_sub_field('headline');
									$subhead = get_sub_field('sub-head');
									$content = get_sub_field('slide_content');
									$slide_image = get_sub_field('slide_image');
									$icon = get_sub_field('slide_icon');
								?>
						      <li class="slide col-sm-12 row" id="slide_<?php echo $slide_name; ?>">
										<?php
											$size = "full"; // (thumbnail, medium, large, full or custom size)
											$image = wp_get_attachment_image_src( $slide_image, $size );
											// url = $image[0];
											// width = $image[1];
											// height = $image[2];
										?>
						          <div class="col-xs-6 left founders-background" style="background-image:url('<?php echo $image[0]; ?>');"></div>
											<div class="col-xs-6 overlay">
												<div class="arrow-bottom-left"></div>
												<div class="arrow-bottom-right"></div>
											</div>
											<div class="col-xs-6 right">
												<div class="col-xs-11">
													<div class="design-element__top"></div>
													<div class="content col-xs-12">
														<h1><?php echo $headline; ?></h1>
														<h2><?php echo $subhead; ?></h2>
														<?php echo $content; ?>
													</div>
													<div class="design-element__bottom row">
														<div class="col-xs-7 element"></div>
														<div class="col-xs-2">&nbsp;</div>
														<div class="col-xs-3 icon">
															<img src="<?php echo $icon; ?>" width="100%" height="auto" style="max-width:100px;">
														</div>
													</div>
												</div>
												<div class="arrow-top-left"></div>
											</div>
						      </li>

							<?php endwhile; endif; ?>

							<li class="slide col-sm-12 row contact" id="contact">
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
										<div class="col-xs-6 right-lines"></div>
									</div>
									<div class="arrow-bottom-right"></div>
								</div>
								<div class="col-xs-12 collapse bottom-row" style="background-image:url('<?php echo $image[0]; ?>');">
									<div class="overlay"></div>
								</div>
								<div class="col-xs-12 contact-form">
									<div class="col-xs-10 col-md-4">
										<h2><?php the_field('headline'); ?></h2>
										<div class="form">
											<h3><?php the_field('form_headline'); ?></h3>
											<?php the_field('form'); ?>
										</div>
									</div>
								</div>
							</li>

						  </ul>

						</main>

				</div>

			</div>


<?php get_footer(); ?>
