<?php 
/**
* Template Name: 404 Page 
* 
* The template for displaying a 404 error page 
* 
* @package WordPress 
* @subpackage Skillcrush_Starter 
* @since Skillcrush Starter 2.0 
*/ 
get_header(); ?>

<section class="default-page">
	<div class="main-content">
		<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops, that is a 404! We literally cannot even right now.', 'skillcrushstarter' ); ?></h1>
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'skillcrushstarter' ); ?>
					<?php get_search_form(); ?>
				</header><!-- .page-header -->
				<div class="page-content">

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		
	</div>

</section>

<?php get_footer(); ?>




