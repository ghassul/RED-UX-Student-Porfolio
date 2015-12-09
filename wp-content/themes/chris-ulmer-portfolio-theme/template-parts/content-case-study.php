<?php
/**
 * Template part for displaying case study posts.
 *
 * @package RED_Starter_Theme
 */
 ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header masthead">

        <div class="title">
            <?php the_title( '<h1>', '</h1>' ); ?>
            <h2 class="sub-title"><?php echo esc_html( CFS()->get('role') ); ?></h2>
        </div>

    </header><!-- .entry-header -->

    <div class="entry-content">

        <?php $fields = CFS()->get( 'main_content_loop' ); ?>

        <?php if( isset( $fields ) ) :  ?>
            <?php foreach ( $fields as $field ) : ?>

                <?php if( isset($field['paragraph_loop']) ) : ?>
                    <?php foreach ($field['paragraph_loop'] as $subfield ): ?>
                        <h3><?php echo $subfield['paragraph_title']; ?></h3>
                        <p><?php echo $subfield['paragraph_body'];  ?></p>
                    <?php endforeach; ?>
                <?php endif; ?>

                <?php if( !empty( $field['picture_loop'][0]['picture_upload'] ) ) : ?>

                    <div class="picture-container">
                        <?php foreach ($field['picture_loop'] as $subfield ) : ?>
                            <div class="img-wrapper">
                                <?php echo wp_get_attachment_image($subfield['picture_upload'], project_image_sizer($field['picture_loop']) ); ?>
                            </div>
                        <?php endforeach; ?>
                    </div>

                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>

    </div><!-- .entry-content -->

</article><!-- #post-## -->
