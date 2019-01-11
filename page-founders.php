<!--page-founders-->
<?php get_header(); ?>
			<div id="content" class="founders">

				<div id="inner-content" class="wrap wrap--wider row">

						<main id="main" class="col-xs-12" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

								<div class="slide-nav">
									<ul id="menu">
											<?php if( have_rows('content_slides') ) : while( have_rows('content_slides') ): the_row();
												$slide_target = sanitize_title_for_query( get_sub_field('slide_name') );
												$slide_name = get_sub_field('slide_name');
											?>
										<li><a href="#<?php echo $slide_target; ?>"><?php echo $slide_name; ?></a></li>
											<?php endwhile; endif; ?>
										<li><a href="#contact">contact</a></li>
									</ul>
								</div>

						  <ul id="pagepiling">
								<?php if( have_rows('content_slides') ) : while( have_rows('content_slides') ): the_row();
									$slide_target = sanitize_title_for_query( get_sub_field('slide_name') );
									$headline = get_sub_field('headline');
									$subhead = get_sub_field('sub-head');
									$content = get_sub_field('slide_content');
									$slide_image = get_sub_field('slide_image');
									$icon = get_sub_field('slide_icon');
								?>

						      <li class="section slide col-sm-12 row">
										<span style="display:block;height:75px;visibility:hidden;margin-top:-75px;" id="<?php echo $slide_target; ?>"></span>
										<?php
											$size = "full"; // (thumbnail, medium, large, full or custom size)
											$image = wp_get_attachment_image_src( $slide_image, $size );
											// url = $image[0];
											// width = $image[1];
											// height = $image[2];
										?>
						          <div class="col-xs-0 col-md-6 left section-one__background" style="background-image:url('<?php echo $image[0]; ?>');"></div>
											<div class="col-xs-0 col-md-6 overlay overlay__dark mobile-hide">
												<div class="arrow-bottom-left"></div>
												<div class="arrow-bottom-right"></div>
											</div>
											<div class="col-xs-12 col-md-6 right">
												<div class="col-xs-12 col-md-11">
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

							<li class="section slide col-sm-12 row contact" id="contact">
								<span style="display:block;height:75px;visibility:hidden;margin-top:-75px;" id="contact"></span>
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
									<div class="wrap elements row mobile-hide">
										<div class="col-xs-6 left-lines"></div>
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
							</li>
						  </ul>
								<?php get_footer(); ?>
								<script>
								$(function() {
										$('#menu li:first-child a').addClass('active');
									});

									$(document).ready(function () {
								    $(document).on("scroll", onScroll);

								    //smoothscroll
								    $('a[href^="#"]').on('click', function (e) {
								        e.preventDefault();
								        $(document).off("scroll");

								        $('a').each(function () {
								            $(this).removeClass('active');
								        })
								        $(this).addClass('active');

								        var target = this.hash,
								            menu = target;
								        $target = $(target);
								        $('html, body').stop().animate({
								            'scrollTop': $target.offset().top+0
								        }, 500, 'swing', function () {
								            window.location.hash = target;
								            $(document).on("scroll", onScroll);
								        });
								    });
								});

								function onScroll(event){
								    var scrollPos = $(document).scrollTop();
								    $('#menu a').each(function () {
								        var currLink = $(this);
								        var refElement = $(currLink.attr("href"));
								        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
								            $('#menu li a').removeClass("active");
								            currLink.addClass("active");
								        }
								        else{
								            currLink.removeClass("active");
								        }
								    });
								}
								</script>
						</main>
				</div>
			</div>
