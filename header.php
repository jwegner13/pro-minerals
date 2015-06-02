<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Pro Mineral Partners
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<script>
	<?php echo of_get_option('tracking_code', ''); ?>
</script>


</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="" class="site-header">
		<div class="row">
			<div class="small-12 medium-5 columns">
				<div class="logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo of_get_option('theme_logo', ''); ?>" alt="Pro Mineral Partners" />
					</a>
				</div>
			</div>
			<div class="small-12 medium-7 columns the-main-nav">
				<?php wp_nav_menu( array('theme_location' => 'primary' )); ?>
			</div>
		</div>

		<div class="second-bar">
			<div class="row">
				<div class="small-7 columns">
					<?php if ( of_get_option('show_barrel_checkbox') == '1' ) { ?>
					<div class="barrel-label">
						<p>Current Price Per Barrel</p>
					</div>
					<div class="barrel-wrapper">
						<script type="text/javascript"
							src="http://www.oil-price.net/TABLE2/gen.php?lang=en">
						</script>
					</div>
					<?php } ?>
				</div>
				<div class="small-5 columns end">
					
				</div>			
			</div>		
		</div>

	</header><!-- #masthead -->

	<section class="maincontainer">

	<div id="content" class="site-content row">
