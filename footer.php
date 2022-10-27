<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscores
 */

?>

	<footer class="site__footer">
			<div><?php get_sidebar( 'footer-01' ); ?></div>
			<div><?php get_sidebar( 'footer-02' ); ?></div>
			<div><?php get_sidebar( 'footer-03' ); ?></div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>