<?php get_header(); ?> <!-- Gets information from header.php to display on page -->

    <!-- Begin Body Content Section -->
    <section class="row">
        <div class="eight columns">

            <!-- Begin Loop -->

            <?php
                if ( have_posts() ){
                    while ( have_posts() ){
                        the_post(); ?>
                            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); //this php calls up each post title ?></a></h1>
                            <!-- Blacked timestamp <p style="color:orange;"><?php the_time('F j, Y'); ?></p>-->
                            <?php
                            if ( has_post_thumbnail() ) {
                                $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),’thumbnail’ );
                                echo '<img width="100%" src="' . $image_src[0] . '">';//ideal image width is 627; scale accordingly
                            } ?>
                            <?php the_excerpt(); //this pulls a paragraph of content from each post ?>
                        <p class="readmore"><a href="<?php the_permalink(); ?>">Read More</a></p>
                    <?php } //end while statement
                } //end if statement
              ?>
        </div>
        <!-- End Loop -->

        <div class="one column" id="blank">blank</div>

        <!-- ADDING SIDEBAR -->
        <div class="three columns">
            <?php get_sidebar(); ?>
        </div>
    </section> <!-- End Body Content Section -->

<?php get_footer(); ?> <!-- Gets information from footer.php to display on page -->
