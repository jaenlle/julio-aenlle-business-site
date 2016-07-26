<?php
/*
Template Name: Contact Form Page
*/
?>

    <?php get_header(); ?>

        <section class="row">
            <div class="eight columns">
                <div id="contactpage">
                  <!-- BEGIN LOOP -->
                    <?php if ( have_posts() ) {
                        while ( have_posts() ){
                            the_post(); // the_post defines our Data CONTEXT ?>

                            <h2><?php the_title(); ?></h2>
                            <p><a href=""></a></p>
                            <p></p>
                            <?php the_content();

                        } //end while statment
                    } //end if statement ?>
                  <!-- END LOOP -->
                </div>
            </div>

            <div class="one column" id="blank">blank</div>

        <!-- ADDING SIDEBAR -->
            <div class="three columns">
                <?php get_sidebar(); ?>
            </div>
        </section> <!-- End Body Content Section -->

    <?php get_footer(); ?>
