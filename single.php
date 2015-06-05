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
  <div class="ad_block_right">
    <div class="recent_posts_box">
        <h2>Recent Posts</h2>
        <ul>
          <?php
            $args = array( 'numberposts' => '6', 'post_status' => 'publish', );
            $recent_posts = wp_get_recent_posts( $args );
            foreach( $recent_posts as $recent ){
              echo '<li>';
              echo get_the_post_thumbnail($recent["ID"], 'thumbnail');
              echo '<a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
              
            }
          ?>
        </ul>
      </div>
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
  <div class="inner_post_content">
		<h1><?php the_title(); ?></h1>
	<?php if (is_single()) {
		echo $the_content; 
    } ?>
		<p class="post_content"><?php echo $post->post_content; ?></p>
    <?php author_box(); ?>
  </div>
</div>

<!-- Footer & Comments AD -->
<div class="ad_block_bottom">
  <ins class="adsbygoogle"
       style="display:inline-block;width:728px;height:90px"
       data-ad-client="ca-pub-7995316478862697"
       data-ad-slot="6094024364"></ins>
  <script>
  (adsbygoogle = window.adsbygoogle || []).push({});
  </script>
</div>
</div>
<!-- Footer & Comments AD -->
<?php echo do_shortcode('[fbcomments width="800"]'); ?>
	</div><!-- .content-area -->
<?php get_footer(); ?>
<!-- Footer & Comments AD -->
<!-- Footer & Comments AD -->
<div class="ad_block_bottom">
  <ins class="adsbygoogle"
       style="display:inline-block;width:728px;height:90px"
       data-ad-client="ca-pub-7995316478862697"
       data-ad-slot="6094024364"></ins>
  <script>
  (adsbygoogle = window.adsbygoogle || []).push({});
  </script>
</div>
