<?php
/**
 * The template for displaying all pages.
 *
 *  
 */

get_header(); ?> 

	<div id="primary" class="content-area">
        <section class="pageaboutmaster">
		<main id="main" class="site-main about" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

            <?php endwhile; // End of the loop. ?>

</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
