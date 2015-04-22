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
	    $(window).scroll(function (e) {
	        // if ($(window).scrollTop() > 200) { 
	        //     $('.wrap').addClass('fixed');
	        // }
	        // else{
	        //     $('.wrap').removeClass('fixed');
	        // }

	        var ratio;

	        var top = $(window).scrollTop()

	        if (top > 240) {
	        	ratio = 1;
	        } else if (top < 20) {
	        	ratio = 0;
	        } else {
	        	ratio = top / 240;
	        }
	        console.log(top +" "+ ratio)


	        var marginLogo = 50 - 80*ratio
	        var widthLogo = 280 - 90*ratio
		    var heightHeader = 300 - 240*ratio;

	        $('#headerLogo').css('margin-top', marginLogo + 'px');
	        $('#headerLogo').css('width', widthLogo + 'px');
	        $('.image_area').css('height', heightHeader + 'px');


		    // if (top > 60) {
		    //     $('.image_area').css('height', top + 'px');
		    // } else {
		    // 	$('.image_area').css('height', '60px');
		    // };

	    });
	});
		
	</script>
</header>
<div class="wrap" id="wrap">
<div class="page_header">
	<div class="menu_links">
		<?php

			$defaults = array(
				'theme_location'  => '',
				'menu'            => '',
				'container'       => 'div',
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => 'menu',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'header_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 0,
				'walker'          => ''
			);

			wp_nav_menu( $defaults );

			?>
	</div>
	<div class="image_area">
		<a href="http://www.go-women.org"><img id='headerLogo' src="/wp-content/themes/go-women/img/go-women-logo.png" /></a>
		<p>Revealing the beauty behind being a women in tech.</p>
	</div>

	<?php if(is_home() ) { ?>

		<div class="nav_links">
			<?php
		 	wp_list_categories('title_li'); ?>
		</div>

	<?php } ?>

</div>
</div>
</header>
