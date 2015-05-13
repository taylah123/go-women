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
		<h1><?php the_title(); ?></h1>
	<?php if (is_single()) {
		echo $the_content;
} ?>
		<p class="post_content"><?php echo $post->post_content; ?></p>
		<div class="colab_content">
    <?php get_userdata(get_the_author_meta('ID'))->profile_image ?>
    <p>This post was written by <?php the_author(); ?></p>
    </div>
    </div>

	</div>
<?php echo do_shortcode('[fbcomments width="800"]'); ?>
	</div><!-- .content-area -->
<?php get_footer(); ?>
