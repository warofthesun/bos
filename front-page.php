<!--front page-->
<?php get_header(); ?>

			<div id="content" class="landing-page">

				<div id="inner-content" class="wrap wrap--wider row">

						<main id="main" class="col-xs-12" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<div class="row" style="height:100%;position:relative;">
									<?php
										$attachment_id = get_field('founders_hero_image');
										$size = "full"; // (thumbnail, medium, large, full or custom size)
										$image = wp_get_attachment_image_src( $attachment_id, $size );
										// url = $image[0];
										// width = $image[1];
										// height = $image[2];
									?>
									<div class="col-xs-12 col-md-6 founders">
										<div class="col-xs-12 founders-background" style="background-image:url('<?php echo $image[0]; ?>');"></div>
										<div class="col-xs-12 col-md-6 overlay">
											<article>
												<h1><?php the_field('founders_title'); ?></h1>
												<h2><?php the_field('founders_tagline'); ?></h2>
												<a href="<?php the_field('founders_cta_link'); ?>" class="btn--outline btn--outline_blue"><?php the_field('founders_cta'); ?></a>
											</article>
										</div>
									</div>
									<div class="col-xs-12 col-md-6 developers">
										<div class="col-xs-12 col-md-6 overlay">
											<article>
												<h1><?php the_field('developers_title'); ?></h1>
												<h2><?php the_field('developers_tagline'); ?></h2>
												<a href="<?php the_field('developers_cta_link'); ?>" class="btn--outline btn--outline_black"><?php the_field('developers_cta'); ?></a>
											</article>
										</div>
									</div>
								</div>
								<div class="testimonials">
									<div class="container flex">
										<div class="col-xs-2">
											<div class="avatar" style="background-image:url('<?php echo $image[0]; ?>');"></div>
										</div>
										<div class="col-xs-10 testimonial">
											“We were able to get a product in the hands of our users within a month and spent the following 8 weeks learning about what they needed most.”
											<div class="user">
												<span class="name">Nathan Daniels </span><span class="title">/ Co-founder and CEO of AppWorld</span>
											</div>
										</div>
									</div>
								</div>
							<?php endwhile; endif; ?>

						</main>

				</div>

			</div>

<?php get_footer(); ?>
