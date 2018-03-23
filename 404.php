<?php
/**
 * The template for displaying the 404 (error) page
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */

get_header(); ?>

<section class="default-page">
	
		
		
		<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops, that is a 404! We literally cannot even right now.', 'skillcrushstarter' ); ?></h1>
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'skillcrushstarter' ); ?>
					<?php get_search_form(); ?>
				</header><!-- .page-header -->

			</section><!-- .error-404 -->
	</div>

 	<?php // get_sidebar(); ?>
</section>

<?php get_footer(); ?>
