<?php
/**
 * The template for displaying the front page.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>
<div class="front-page">

    <section class="masthead">
        <h1>just a guy hoping to make your online experience more enjoyable.</h1>
    </section>

    <section class="about-me container">

        <h2>Hi I'm Chris!</h2>

        <div class="self-description">
            <p>
                Blurb Blurb Blurb Blurb Blurb Blurb Blurb Blurb
                Blurb Blurb Blurb Blurb Blurb Blurb Blurb Blurb
                Blurb Blurb Blurb Blurb Blurb Blurb Blurb Blurb
            </p>
            <p>
                Blurb Blurb Blurb Blurb Blurb Blurb Blurb Blurb
                Blurb Blurb Blurb Blurb Blurb Blurb Blurb Blurb
                Blurb Blurb Blurb Blurb Blurb Blurb Blurb Blurb
            </p>
        </div>

        <div class="skills">
            <div class="headshot"></div>

            <div class="skillbar-container">

                <div class="skillbar" data-percent="65%">
                    <div class="skillbar-bar" style="background: #228B1E;"><span>Research</span></div>
                    <div class="skill-bar-percent">65%</div>
                </div> <!-- End Skill Bar -->

                <div class="skillbar" data-percent="70%">
                    <div class="skillbar-bar" style="background: #2AA2AD;"><span>Wireframing</span></div>
                    <div class="skill-bar-percent">70%</div>
                </div> <!-- End Skill Bar -->

                <div class="skillbar" data-percent="50%">
                    <div class="skillbar-bar" style="background: #1A6689;"><span>Visual Design</span></div>
                    <div class="skill-bar-percent">50%</div>
                </div> <!-- End Skill Bar -->

                <div class="skillbar" data-percent="80%">
                    <div class="skillbar-bar" style="background: #531E8B;"><span>Digital Prototyping</span></div>
                    <div class="skill-bar-percent">80%</div>
                </div> <!-- End Skill Bar -->

                <div class="skillbar" data-percent="60%">
                    <div class="skillbar-bar" style="background: #951D16;"><span>Coding</span></div>
                    <div class="skill-bar-percent">60%</div>
                </div> <!-- End Skill Bar -->

                <div class="skillbar" data-percent="90%">
                    <div class="skillbar-bar" style="background: #B97C17;"><span>User Testing</span></div>
                    <div class="skill-bar-percent">90%</div>
                </div> <!-- End Skill Bar -->

                <div class="skillbar" data-percent="95%">
                    <div class="skillbar-bar" style="background: #CBBF29;"><span>Sales and Presenting</span></div>
                    <div class="skill-bar-percent">95%</div>
                </div> <!-- End Skill Bar -->

            </div>
        </div>

        <h3>Wanna learn more about me?</h3>

        <a href="#" class="btn">My Story</a>

        <p>Continue to portfolio</p>

    </section>

    <div class="masthead"></div>

    <section class="my-work">

        <h2>My Work</h2>

        <div class="placeholder-container">
            <div class="placeholder"></div>
            <div class="placeholder"></div>
        </div>

        <div class="placeholder-container">
            <div class="placeholder"></div>
            <div class="placeholder"></div>
        </div>

    </section>

    <section class="contact container">

        <h2>Contact</h2>
        <h3>I would like to have a chat with you!</h3>

        <?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]') ?>

        <h3>Shall we dance on the web-floor?</h3>
        
    </section>
</div>

<?php get_footer() ?>