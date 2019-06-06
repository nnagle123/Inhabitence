<?php get_header(); ?>
    
<article class="singpro" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if ( has_post_thumbnail() ) : ?>
            <img  src='<?php the_post_thumbnail_url(); ?>'>
        <?php endif; ?>

        
<!-- 
        <?php if ( 'product' === get_post_type() ) : ?>
        <div class="price">
        </div> .entry-meta
        <?php endif; ?> -->
    
    </header><!-- .entry-header -->

    <div class="entry-content">
    <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
    <div class="price">
    <?php echo CFS()->get( 'price' ); ?>
</div>
        <?php the_excerpt(); ?>
        <a href="<?php esc_url (the_permalink()) ?>"><i class="fab fa-facebook-f"> LIKE </i> <i class="fab fa-twitter"> TWEET </i>  <i class="fab fa-pinterest"> PIN</i></a>
    </div><!-- .entry-content -->
</article><!-- #post-## -->

<?php get_footer(); ?>
