<?php
/*
Template Name: Homepage
*/
get_header(); ?>

	<div id="primary" class="content-area small-12 columns">

			<?php while ( have_posts() ) : the_post(); ?>

			<h1><?php echo get_the_title(); ?></h1>
			<p><?php echo get_the_content(); ?></p>

			<?php endwhile; // end of the loop. ?>

	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>