<?php
/*
Template Name: Blog Posts
*/
?>

<?php get_header(); ?> <!-- Gets information from header.php to display on page -->

    <!-- Begin Body Content Section -->
    <section class="row">
        <div class="three columns">
            <?php get_sidebar(); ?>
        </div>

        <div class="one column" id="blank">blank</div>

        <div class="eight columns">
            <!-- Begin Loop -->
            <?php
                if ( have_posts() ){
                    while ( have_posts() ){
                        the_post(); ?>
                            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); //this php calls up each post title ?></a></h1>
                            <!-- Blacked timestamp <p style="color:orange;"><?php the_time('F j, Y'); ?></p>-->
                            <?php the_excerpt(); //this pulls a paragraph of content from each post ?>
                        <p class="readmore"><a href="<?php the_permalink(); ?>">Read More</a></p>
                    <?php } //end while statement
                } //end if statement
              ?>
        </div>
        <!-- End Loop -->
        <div id="prevnext" >
            <div id="prevpost">
                <?php previous_post_link('
                    <h4>%link</h4>
                    ', '< Previous Post', false);
                ?>
            </div>
            <div id="nextpost">
                <?php next_post_link('
                    <h4>%link</h4>
                    ', 'Next Post >', false);
                ?>
            </div>
        </div>



        <!-- ADDING SIDEBAR -->

    </section> <!-- End Body Content Section -->

<?php get_footer(); ?> <!-- Gets information from footer.php to display on page-->
