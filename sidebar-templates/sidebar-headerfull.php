<?php
/**
 * Sidebar setup for header full.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );

?>

<?php if ( is_active_sidebar( 'headerfull' ) ) : ?>

	<!-- ******************* The Footer Full-width Widget Area ******************* -->

	<div id="wrapper-header-full">

		

				<?php dynamic_sidebar( 'headerfull' ); ?>

		

	</div><!-- #wrapper-footer-full -->

<?php endif; ?>
