<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>
<?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 * We filter the output of wp_title() a bit -- see
	 * twentyten_filter_wp_title() in functions.php.
	 */
	wp_title( '|', true, 'right' );

	?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<!--<script type="text/javascript" src="http://www.google.com/jsapi"></script>-->
<script src="http://cdn.jquerytools.org/1.2.5/full/jquery.tools.min.js"></script>
<script type="text/javascript">
//	google.load("jquery", "1");
</script>
<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery-ui.min.js"></script>
<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/preloadCssImages.jQuery_v5.js"></script>
<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/colorbox/jquery.colorbox.js"></script>
<link media="screen" rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/js/colorbox/colorbox.css" />
<link media="screen" rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/js/colorbox/shadowed/colorbox.css" />
<!--[if IE 6]>
	<style type="text/css">
		.home.java #menu.menu-beans {
			left: 263px!important;
			top: 96px!important;
			display:block!important;
			height:268px!important;
			width:474px!important;
		}
		
		.home.java #menu.menu-beans li.home {
			left:-67px;
			top:190px;
		}
		
		.home.java #menu.menu-beans li a {
		z-index:5!important;
		}
	</style>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<meta name="google-site-verification" content="9xNmDDB7K6nQG5L0AuIKurE4IQctzy6RIPeP4DB1Yrk" />
</head>
<?php
$extra_classes = '';
if(@$_GET['iframe']) $extra_classes = 'iframed';
?>
<body <?php body_class($extra_classes); ?>>
<script type="text/javascript">
	  
</script>
<div id="wrapper" class="hfeed">
	<div id="scrollable">
		
		<?php if(!@$_GET['iframe']): ?>
		<div id="header">
					<!--start branding-->
					<div id="branding">
					<img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/rootspring/images/root-logo-sml.png" alt="Root Interactive logo" />
						<h1 id="home"><a href="/"><span><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></span></a></h1>
					</div>
					<!--end branding-->
					
					<!--start main navigation-->
					<div id="access" role="navigation">
			  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
				<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a></div>
					<ul id="menu" class="menu-beans">
						<li class="home" title="back to main menu" alt="home"><a href="/">home</a></li>
						<li class="services"><a href="/services">services</a></li>
						<li class="portfolio"><a href="/portfolio">portfolio</a></li>
						<li class="about"><a href="/about">about</a></li>
						<li class="blog"><a href="/blog">blog</a></li>
						<li class="contact"><a href="/contact-us">contact</a></li>
					</ul>
				</div><!-- #access -->
		</div><!--end header-->
		<?php endif; ?>
	<div id="main">
	