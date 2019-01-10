<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>

		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

		<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
		<script>
      window.sr = ScrollReveal({ duration: 600, reset: true, easing: 'ease-in', scale: .98, distance:'50px'});
    </script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/css/jquery.pagepiling.css" />
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.pagepiling.js"></script>


		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
		<svg xmlns="http://www.w3.org/2000/svg" style="position:relative;height:0;width:0;display:block;">
		   <defs>
		      <filter id="colors">

		         <feColorMatrix result="base" in="SourceGraphic" result="1" type="matrix"
		         values="0.3333 0.3333 0.3333 0 0
		            0.3333 0.3333 0.3333 0 0
		            0.3333 0.3333 0.3333 0 0
		            0      0      0      1 0">
             </feColorMatrix>
						 <!--feBlend mode="multiply" in="1" in2="2" result="12"/-->
		      </filter>
		   </defs>
		</svg>
		<div id="container">

			<header class="header flex flex--row flex--row_middle" role="banner" itemscope itemtype="http://schema.org/WPHeader">

				<div id="inner-header" class="wrap row">
					<div class="col-xs-12 col-md-2 flex flex--row flex--row_middle">
						<a href="<?php echo home_url(); ?>" rel="nofollow" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/library/images/boslogo.png" /></a>
					</div>
					<div class="col-xs-12 col-md-10">
						<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement" class="flex flex--row flex--row_middle flex--row_end">
							<?php wp_nav_menu(array(
	    					         'container' => false,                           // remove nav container
	    					         'container_class' => 'menu ',                 // class of container (should you choose to use it)
	    					         'menu' => __( 'The Main Menu', 'startertheme' ),  // nav name
	    					         'menu_class' => 'nav top-nav ',               // adding custom nav class
	    					         'theme_location' => 'main-nav',                 // where it's located in the theme
	    					         'before' => '',                                 // before the menu
	        			               'after' => '',                                  // after the menu
	        			               'link_before' => '',                            // before each link
	        			               'link_after' => '',                             // after each link
	        			               'depth' => 0,                                   // limit the depth of the nav
	    					         'fallback_cb' => ''                             // fallback function (if there is one)
							)); ?>

						</nav>
					</div>
					<div id="mobile-nav">
						Menu <i class="fas fa-chevron-down"></i>
					</div>
				</div>

			</header>
