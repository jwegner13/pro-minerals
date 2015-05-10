<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Pro Mineral Partners
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area small-12 medium-3 columns">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
