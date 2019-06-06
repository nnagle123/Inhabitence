 <?php get_header(); ?> 

	<?php /* Start the Loop */ ?>
	<?php while (have_posts()) : the_post(); ?>


		<?php get_template_part('template-parts/content-page'); ?>

	<?php endwhile; ?>

	<?php the_posts_navigation(); ?>






<?php get_sidebar(); ?>
<?php get_footer(); ?> 