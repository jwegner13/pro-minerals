<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Pro Mineral Partners
 */
?>

	</div><!-- #content -->
	</section>
	

	<footer id="colophon" class="site-footer">
		<nav class="footer-nav">
			<div class="row">
				<div class="small-12 columns">
					<?php wp_nav_menu( array('theme_location' => 'secondary' )); ?>
				</div>
			</div>
		</nav>
		<div class="site-info row">
			<div class="small-12 medium-7 columns">
				<p>&copy; <?php echo date("Y"); ?> Pro Mineral Partners</p> 
				<p>Site by: <a href="http://www.jkwcreated.com" target="_blank">JKW Created</a></p>
			</div>
			<div class="small-12 medium-3 columns">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php echo of_get_option('theme_footer_logo', ''); ?>" alt="Pro Mineral Partners" />
				</a>
			</div>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
