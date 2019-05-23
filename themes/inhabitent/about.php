<?php get_header(); ?>

<section class="aboutmaster">
	<?php /* Start the Loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
	<h1>HELLO</h1>

		<?php get_template_part('template-parts/content'); ?>

	<?php endwhile; ?>

	<?php the_posts_navigation(); ?>



</section>


<?php get_footer(); ?>