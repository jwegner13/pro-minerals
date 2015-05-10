<?php
/**
 * The template for displaying all single posts.
 *
 * @package Pro Mineral Partners
 */

get_header(); ?>

	<div id="primary" class="content-area small-12 medium-8 columns">

		<div class="the-breadcrumbs"><?php the_breadcrumb(); ?></div>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
