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
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'content', get_post_format() );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			

		// End the loop.
		endwhile;
		?>

	</div><!-- .content-area -->
<?php get_footer(); ?>
