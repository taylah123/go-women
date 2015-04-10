<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

include 'temp_header.php'; ?>
<div class="page_header">
	<img src="http://128.199.242.153/wp-content/uploads/2015/03/go-women-logo1.png" />
	<p>The other side of tech</p>
	<div class="nav_links">
		<?php
		 wp_list_categories('title_li'); ?>
	</div>
</div>
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
