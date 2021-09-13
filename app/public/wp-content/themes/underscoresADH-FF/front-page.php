<?php
/**
 * The template for displaying the front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package geekpack
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
			<section id="front-page-1" class="widget-area">
				<?php dynamic_sidebar( 'front-page-1' ); ?>
			</section><!-- #front-page-1 -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
