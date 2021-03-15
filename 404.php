<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="error-404-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<div class="col-md-12 content-area px-0" id="primary">

				<main class="site-main" id="main">

					<section class="error-404 not-found pb-5">
                      <div class="container">
                        <div class="row">
                          <div class="col-12 text-center py-5">
                            <h2>404</h2>
                            <h4 class="mb-5"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'understrap' ); ?></h4>
                            <a href="/" class="button">Вернуться на главную</a>
                          </div>
                        </div>
                        
                        
                        
                      </div>
                     
						
						

					</section><!-- .error-404 -->

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #error-404-wrapper -->

<?php get_footer(); ?>
