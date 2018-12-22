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
						      <li class="slide col-sm-12 row" id="slide01">
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
											<div class="col-xs-6 right" style="color:white;padding:3em;display:flex;align-items:center;">
												<div class="content col-xs-12 col-md-10">
													<h1>start with bos</h1>
												<h2>Spend your runway entirely on finding product-market fit.</h2>

With BOS, your MVP is built with back-end technology
and readily-available common functionality that has
already been proven to work at-scale.
<br /><br />
That way, your limited runway is focused exclusively on generating the insights that you need to test and validate your market assumptions and iterating your product to meet those customer needs.
</div>

</div>
						      </li>

						      <li class="slide" id="slide02">
						          <p>Team</p>
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
