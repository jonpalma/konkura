<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

    <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
			    <div class="container-fluid bg-yellow heading-title">
			        <div class="row">
			            <div class="col-sm-12">
			                <div class="heading center-block">
			                    <h1 class="page-title"><?php woocommerce_page_title(); ?></h1>
			                    <svg version="1.1" class="heading-bottom" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
				 width="100%" height="auto" viewBox="0 0 200 70" preserveAspectRatio="none">
									<polygon points="90.661,29.56 110.204,29.56 100.433,40.941 "/>
									<line stroke-miterlimit="10" x1="1.593" y1="34.013" x2="80.269" y2="34.013"/>
									<line stroke-miterlimit="10" x1="119.729" y1="34.013" x2="198.406" y2="34.013"/>
								</svg>
			                </div>
			            </div>
			        </div>
    			</div>
		<?php endif; ?>
	<?php
		/**
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
	?>

<?php get_footer( 'shop' ); ?>
