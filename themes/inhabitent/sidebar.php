
<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package RED_Starter_Theme
 */
?>
<div class="sidebar">
<div class="contact2">
<h2> CONTACT INFO </h2>
 <div class="contactcontent">
 <i class="fas fa-phone"> 778-456-7891</i> <br> <br> 
 <i class="fas fa-envelope"> info@inhabitent.com</i> <br> <br>
 <i class="fas fa-map-marker-alt"> 1490 W Broadway
Vancouver, BC V6H 1H5</i>
</div>
</div>
<div class="widget1">
<?php
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
</div>
</div>

