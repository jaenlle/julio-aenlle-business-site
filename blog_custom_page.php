<?php
/*
Template Name: Blog Posts
*/

get_header(); ?> <!-- Gets information from header.php to display on page -->
    <?php query_posts('post_type=post&post_status=publish&posts_per_page=3&paged='. get_query_var('paged')); ?>
        <!-- Begin Body Content Section -->
            <section class="row blog posts">
                <h1><span style="font-style: italic;">Slick's</span> Exhaust Fumes</h1>
                <h2 class="subhead">Blowing some hot air about cars and other stuff!</h2>
                <div class="three columns slick">
                    <div id="doe1">
                    </div>
                    <p>
                        I'm John but my friends call me Slick. I consider myself a bit of a philosopher mechanic and this blog is where you can find my musings on everything from autos to amor!
                    </p>
                    <?php get_sidebar(); ?>
                </div>

                <div class="one column blank slick">blank</div>

                <div class="eight columns posts">
                    <!-- Begin Loop -->
                    <?php
                        if ( have_posts() ){
                            while ( have_posts() ){
                                the_post(); ?>
                                    <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); //this php calls up each post title ?></a></h2>
                                    <!-- Blacked timestamp <p style="color:orange;"><?php the_time('F j, Y'); ?></p>-->
                                    <?php the_excerpt(); //this pulls a paragraph of content from each post ?>
                                <p class="readmore"><a href="<?php the_permalink(); ?>">Read More</a></p>
                            <?php } //end while statement
                        } //end if statement
                      ?>
                </div>
                <div class="twelve columns appt">
                    <a href="http://julioaenlle.net/slicksautobody/index.php/contact/">MAKE AN APPOINTMENT</a>
                </div>
            </section> <!-- End Body Content Section -->

<?php get_footer(); ?> <!-- Gets information from footer.php to display on page-->
