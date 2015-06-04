<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

include 'temp_header.php'; ?>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '660824957396762',
      xfbml      : true,
      version    : 'v2.3'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<div class="posts_wrapper" id="post_page">

<div class="inner_content">
<div class="ad_block_left">
</div>
<div class="ad_block_right">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Side Banner -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7995316478862697"
     data-ad-slot="2082627160"
     data-ad-format="auto"></ins>
    <script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
		<h1><?php the_title(); ?></h1>
	<?php if (is_single()) {
		echo $the_content; 
    } ?>
		<p class="post_content"><?php echo $post->post_content; ?></p>
    <?php author_box(); ?>
</div>

<!-- Footer & Comments AD -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-7995316478862697"
     data-ad-slot="6094024364"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<!-- Footer & Comments AD -->
<?php echo do_shortcode('[fbcomments width="800"]'); ?>
	</div><!-- .content-area -->
<?php get_footer(); ?>
<!-- Footer & Comments AD -->
<!-- Footer & Comments AD -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-7995316478862697"
     data-ad-slot="6094024364"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
