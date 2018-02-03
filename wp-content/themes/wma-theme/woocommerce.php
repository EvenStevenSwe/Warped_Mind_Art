<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package storefront
 */

get_header(); ?>

    <div class="wma-textruta">
    <div class="wma-text">
        <h2>

			<?php woocommerce_content();

				do_action( 'storefront_page_before' );

				get_template_part( 'content', 'page' );

				/**
				 * Functions hooked in to storefront_page_after action
				 *
				 * @hooked storefront_display_comments - 10
				 */
				do_action( 'storefront_page_after' ) ?>



        </h2>
    </div> <!-- wma-text -->
    </div> <!-- wma-textruta -->

<?php
do_action( 'storefront_sidebar' );
get_footer();
