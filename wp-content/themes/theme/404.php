<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<article id="post-0" class="post error404 no-results not-found">
				<header class="entry-header not_found">
					<h1 class="entry-title"><?php _e( '404', 'twentytwelve' ); ?></h1>
					<h3><?php _e( 'Page not found!', 'twentytwelve' ); ?></h3>
				</header>

				<div class="entry-content">
					<p><?php _e( 'Please use the search form below to find what you want.', 'twentytwelve' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>