<?php
/**
 * Template Name: Collaborators
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

include 'temp_header.php'; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		$blogusers = get_users( 'orderby=nicename' );
		foreach ($user as $users_array) {
			echo '<div class="user_wrapper"><h1>' . esc_html( $user->user_email ) . '</h1></div>';
		}
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
