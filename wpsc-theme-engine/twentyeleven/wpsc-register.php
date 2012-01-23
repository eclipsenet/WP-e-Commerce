<?php
/**
 * The template for displaying register page.
 *
 * @package wp-e-commerce
 * @subpackage Twenty_Eleven
 * @since 4.0
 */

get_header( 'wpsc-register' ); ?>

		<section id="primary">
			<div id="content" role="main">

			<?php wpsc_get_template_part( 'register', 'main' ); ?>

			</div><!-- #content -->
		</section><!-- #primary -->

<?php get_footer( 'wpsc-register' ); ?>