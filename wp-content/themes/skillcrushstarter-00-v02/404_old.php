<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops, that is a 404! We literally cannot even right now.', 'skillcrushstarter' ); ?></h1>
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'skillcrushstarter' ); ?>
				</header><!-- .page-header -->
				<div class="page-content">
					<!-- <p><?php //_e( 'It looks like nothing was found at this location. Maybe try a search?', 'skillcrushstarter' ); ?></p> -->

					<?php get_search_form(); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
