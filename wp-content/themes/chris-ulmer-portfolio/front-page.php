<?php
/**
 * The template for displaying the front page.
 * Template Name: Front Page
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>
<div class="front-page">



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
                    <div class="skillbar-bar" style="background: #228B1E;"><span>Research</span></div>
                </div> <!-- End Skill Bar -->

                <div class="skillbar" data-percent="70%">
                    <div class="skillbar-bar" style="background: #2AA2AD;"><span>Wireframing</span></div>
                </div> <!-- End Skill Bar -->

                <div class="skillbar" data-percent="50%">
                    <div class="skillbar-bar" style="background: #1A6689;"><span>Visual Design</span></div>
                </div> <!-- End Skill Bar -->

                <div class="skillbar" data-percent="80%">
                    <div class="skillbar-bar" style="background: #531E8B;"><span>Digital Prototyping</span></div>
                </div> <!-- End Skill Bar -->

                <div class="skillbar" data-percent="60%">
                    <div class="skillbar-bar" style="background: #951D16;"><span>Coding</span></div>
                </div> <!-- End Skill Bar -->

                <div class="skillbar" data-percent="90%">
                    <div class="skillbar-bar" style="background: #B97C17;"><span>User Testing</span></div>
                </div> <!-- End Skill Bar -->

                <div class="skillbar" data-percent="95%">
                    <div class="skillbar-bar" style="background: #CBBF29;"><span>Sales and Presenting</span></div>
                </div> <!-- End Skill Bar -->

            </div>
        </div>
        <h3>Wanna learn more about me?</h3>

        <a href="#" class="btn">My Story</a>

        <div class="continue">
            <p class="continue">Continue to portfolio</p>
            <i class="fa fa-angle-double-down"></i>
        </div>


    </section>

    <div class="image-break"></div>

    <section class="my-work">

        <h2>My Work</h2>

        <ul class="bxslider">

            <li>
                <a href="#">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/protothumb.jpg' ?>" />
                    <div>
                        <p><span>Free The Children</span><br>UX Design</p>
                    </div>
                </a>
            </li>

            <li>
                <a href="#">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/protothumb.jpg' ?>" />
                    <div>
                        <p><span>Taski</span><br>UX Design</p>
                    </div>
                </a>
            </li>

            <li>
                <a href="#">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/tourismthumb.png' ?>" />
                    <div>
                        <p><span>Tourism Vancouver*</span><br>UX Design</p>
                    </div>
                </a>
            </li>

            <li>
                <a href="#">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/MECthumb.png' ?>" />
                    <div>
                        <p><span>MEC*</span><br>UX Design</p>
                    </div>
                </a>
            </li>

        </ul>

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
                <a href=""><div class="at-symbol"><i class="fa fa-at fa-2x"></i></div></a>
            </div>
        </div>

        
    </section>
</div>

<?php get_footer() ?>