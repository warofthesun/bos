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
									<ul id="slide_container">
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
													<div class="content col-xs-8" style="text-align:center;">
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
									<h2><?php the_sub_field('headline'); ?></h2>
									<p>
										<?php the_sub_field('content'); ?>
									</p>
								</div>
								<?php endwhile; endif; ?>
							</div>
						</article>
				</div>

			</div>


<?php get_footer(); ?>
