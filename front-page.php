<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package cynosure_distributors
 */


if(is_user_logged_in()) { 
	wp_redirect( get_option('siteurl') . '/home' );
}

get_header(); 

	
?>

<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				
				<?php get_template_part( 'content', 'front' ); ?>
				<?= wp_login_form(array('redirect' => site_url('/home'))); ?>

				
			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
