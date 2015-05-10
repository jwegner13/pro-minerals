<?php
/*
Template Name: Full Width
*/
get_header(); ?>

	<div id="primary" class="content-area small-12 columns">

		<div class="breadcrumbs"><?php the_breadcrumb(); ?></div>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>