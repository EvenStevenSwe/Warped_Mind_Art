<?php
/*
Template Name: kassa
*/
get_header();?>

	<div class="wma-textruta">
		<div class="wma-text">
			<h2>

				<?php echo do_shortcode('[woocommerce_checkout]');  ?>


			</h2>
		</div> <!-- wma-text -->
	</div> <!-- wma-textruta -->

<?php get_footer();