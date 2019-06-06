<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
				<?php dynamic_sidebar( 'footer' ); ?>
					
				</div><!-- .site-info -->

<section class=contactinfo1>
			<h2>Contact Info</h2>
			<br>
			<i class="fas fa-envelope"> info@inhabitent.com</i> <br> <br>
			<i class="fas fa-phone"> 778-456-7891</i> <br> <br>		
			<i class="fab fa-facebook-f"> </i>
			<i class="fab fa-twitter"> </i> 
			<i class="fab fa-google-plus-square"> </i>
</section>

<!-- <i class="fas fa-map-marker-alt"></i> -->

<?php 
$src = get_template_directory_uri(). '/assets/images/logos/inhabitent-logo-text.svg';
echo "<img src={$src}>";
?>
      
      <p class="copyright"> COPYRIGHT © 2019 INHABITENT<p>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>


	</body>
</html>
