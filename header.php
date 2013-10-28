<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<meta property="fb:admins" content="1477218042" />
	    <meta property="fb:app_id" content="333468963341009">
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	    <meta property="og:url" content="<?php echo get_permalink(); ?>" />
	    <meta property="og:title" content="<?php wp_title('|', true, 'right'); bloginfo('name'); ?>" />
	    
	    <?php $fb_image = wp_get_attachment_image_src(get_post_thumbnail_id( get_the_ID() ), 'thumbnail'); ?>
		<?php if ($fb_image) { ?>
    		<meta property="og:image" content="<?php echo $fb_image[0]; ?>" />
		<?php } else { ?>
			<meta property="og:image" content="http://whatthefestival.com/2013/assets/simple_square_logo.jpg" />
		<?php } ?>

	    <meta property="og:type" content="website" />
	    <meta property="og:description" content="<?php echo "#wtf2013 : Bigger Splash Pool Party and More Micro-Experiences! OMG!"; ?>"/>
	    <meta property="og:site_name" content="What The Festival" />
	    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<!-- mobile meta -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons -->
		<!-- <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png"> -->
		<link rel="icon" href="http://whatthefestival.com/2013/assets/animated_favicon.gif">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<!-- <meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png"> -->

  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

		<!-- Google Analytics -->
		<script type="text/javascript">

			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-28007440-1']);
			_gaq.push(['_setDomainName', 'whatthefestival.com']);
			_gaq.push(['_trackPageview']);

			(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();

		</script>
		<!-- end analytics -->

	</head>

	<body <?php body_class(); ?>>

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=333468963341009";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

		<div id="container">


			<header class="header" role="banner">

				<div id="inner-header" class="wrap clearfix">

					<a href="<?php echo home_url(); ?>" rel="nofollow" id="home_logo">
						<img src="http://whatthefestival.com/_wp/wp-content/uploads/2013/03/wtf2013_header.jpg" />
					</a>
					<a href="<?php echo home_url(); ?>" rel="nofollow" id="mobile_logo">
						<img src="http://whatthefestival.com/_wp/wp-content/themes/md_wtf2013/library/img/mobile_logo.jpg" />
					</a>
					
					<div id="nav_wrapper">
						<nav role="navigation">
							<?php bones_main_nav(); ?>
						</nav>
					</div>

				</div> <!-- end #inner-header -->

			</header> <!-- end header -->
