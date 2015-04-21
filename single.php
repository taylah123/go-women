<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

include 'temp_header.php'; ?>
<div class="posts_wrapper" id="post_page">
<div class="inner_content">
		<h1><?php the_title(); ?></h1>
	<?php if (is_single()) {
		echo $the_content;
} ?>
		<p class="post_content"><?php echo $post->post_content; ?></p>
		</div>
	</div>
<?php include 'comments.php' ?>
	</div><!-- .content-area -->
<?php get_footer(); ?>
