<?php get_header(); ?>


<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="productpage">
		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content.copy' ); ?>
				<section class="price">
					<?php echo CFS()->get( 'price' ); ?>
					
				</article>	
				</section>


			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content.copy', 'none' ); ?>
            
		<?php endif; ?>

		<div class="entry-content">
		</div><!-- .entry-content -->

		</main><!-- #main -->
	</div><!-- #primary -->
<!-- Read More Button  -->
</div>


<?php get_footer(); ?>
