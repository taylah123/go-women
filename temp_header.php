<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<script>(function(){document.documentElement.className='js'})();</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61207141-1', 'auto');
  ga('send', 'pageview');

</script>
	<?php wp_head(); ?>
</head>

<body class="temp-homepage">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>
	jQuery(document).ready(function($) {
	    $(window).scroll(function () {
	        if ($(window).scrollTop() > 200) { 
	            $('.wrap').addClass('fixed');
	        }
	        else{
	            $('.wrap').removeClass('fixed');
	        }
	    });
	});
		
	</script>
<div class="wrap" id="wrap">
<div class="page_header">
	<div class="image_area">
		<a href="http://www.go-women.org"><img src="http://www.go-women.org/wp-content/uploads/2015/04/go-women-logo.png" /></a>
		<p>Revealing what it is like to be a women in tech.</p>
	</div>
	<div class="nav_links">
		<?php
		 wp_list_categories('title_li'); ?>
	</div>
</div>
