<?php
/**
 * Template part for displaying case study posts.
 *
 * @package RED_Starter_Theme
 */
 ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="entry-header">

    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

</header><!-- .entry-header -->

<div class="entry-content">
    <?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail( 'large' ); ?>
    <?php endif; ?>


    <?php the_content(); ?>
</div><!-- .entry-content -->

</article><!-- #post-## -->