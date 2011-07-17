<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
	<!--Google Stylesheets-->
  <link href='http://fonts.googleapis.com/css?family=Neucha' rel='stylesheet' type='text/css'/>
  <link href='http://fonts.googleapis.com/css?family=Cabin+Sketch:bold' rel='stylesheet' type='text/css'/>
  
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/stylesheets/screen.css" type="text/css" media="screen, projection" />
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/stylesheets/print.css" type="text/css" media="print" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<!--[if lt IE 8]>
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/stylesheets/ie.css" type="text/css" media="screen, projection" />
<![endif]-->
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/stylesheets/application.css" type="text/css" media="screen, projection" />
	<!-- end css -->
	<?php
  	/* Always have wp_head() just before the closing </head>
  	 * tag of your theme, or you will break many plugins, which
  	 * generally use this hook to add elements to <head> such
  	 * as styles, scripts, and meta tags.
  	 */
  	wp_head();
  	?>
</head>