<?php
/**
 * The template for displaying the front page.
 * Template Name: Front Page
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>
<div class="front-page">

    <section class="masthead">
        <h1><?php echo esc_html( CFS()->get( 'site_header' ) ); ?></h1>
    </section>

    <section class="my-work">

        <h2>My Work</h2>

        <ul class="bxslider">

            <?php

            $case_study_args = array( 'post_type' => 'case-study' );
            $loop = new WP_Query( $case_study_args );

            while ( $loop->have_posts() ) : $loop->the_post(); ?>


                <li>
                    <a href="<?php the_permalink(); ?>">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail( 'medium' ); ?>
                        <?php endif; ?>
                        <div>
                            <p><?php the_title( '<span>', '</span>' ); ?><br>UX Design</p>
                        </div>
                    </a>
                </li>

            <?php endwhile; ?>
            <?php wp_reset_query(); ?>


        </ul>

    </section>

    <section class="about-me container">

        <h2>Hi I'm Chris!</h2>

        <div class="self-container">

            <div class="self-description">
                <p><?php echo CFS()->get( 'self_description' ); ?></p>
            </div>


            <div class="headshot-container">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/selfie.jpg' ?>" alt="Headshot of Chris" class="headshot">
            </div>

            <div class="skillbar-container">

                <div class="skillbar" data-percent="65%">
                    <div class="skillbar-bar"><span>Research</span></div>
                </div>

                <div class="skillbar" data-percent="70%">
                    <div class="skillbar-bar"><span>Wireframing</span></div>
                </div>

                <div class="skillbar" data-percent="50%">
                    <div class="skillbar-bar"><span>Visual Design</span></div>
                </div>

                <div class="skillbar" data-percent="80%">
                    <div class="skillbar-bar"><span>Digital Prototyping</span></div>
                </div>

                <div class="skillbar" data-percent="60%">
                    <div class="skillbar-bar"><span>Coding</span></div>
                </div>

                <div class="skillbar" data-percent="90%">
                    <div class="skillbar-bar"><span>User Testing</span></div>
                </div>

                <div class="skillbar" data-percent="95%">
                    <div class="skillbar-bar"><span>Sales and Presenting</span></div>
                </div>

            </div>
        </div>
        <h3>Wanna learn more about me?</h3>

        <a href="#" class="btn contact-link">Contact Me</a>

    </section>

    <section class="contact container">

        <h2>Contact</h2>

        <div class="contact-form">
            <h3>I would like to have a chat with you!</h3>
            <?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]') ?>
        </div>

        <div class="socials">
            <h3>Shall we dance on the web-floor?</h3>

            <div class="icons-container">
                <a href="https://www.linkedin.com/in/ulmerchris"><div class="linkedin"><i class="fa fa-linkedin fa-2x"></i></div></a>
                <a href="https://twitter.com/thechrisulmer"><div class="twitter"><i class="fa fa-twitter fa-2x"></i></div></a>
                <a href=""><div class="instagram"><i class="fa fa-instagram fa-2x"></i></div></a>
            </div>
        </div>

        
    </section>
</div>

<?php get_footer(); ?>