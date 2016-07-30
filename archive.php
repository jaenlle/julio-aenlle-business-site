<?php

/* Template Name: Archive Page */

    get_header(); ?>

        <section class="row blog">
            <div class="eight columns">
                <?php if ( have_posts() ): ?>
                    <h1>ARCHIVE</h1>
                <?php
                //The Loop
                while ( have_posts() ): the_post(); ?>
                 <!-- data context -->
                    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    <?php
                    if ( has_post_thumbnail() ) {
                        $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),’thumbnail’ );
                        echo '<img width="100%" src="' . $image_src[0] . '">'; //ideal image width is 627; scale accordingly
                    } ?>
                    <?php the_excerpt(); ?>
                    <p class="readmore"><a href="<?php the_permalink(); ?>">Read More</a></p>
                <?php endwhile; ?> <!-- End Loop -->
                <?php else: ?>
                    <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>
            </div>

            <div class="one column blank">blank</div>

            <div class="three columns">
                    <h2>By Month:</h2>
                        <ul>
                            <?php wp_get_archives( 'type=monthly'); ?>
                        </ul>
                    <h2>By Category:</h2>
                        <ul>
                            <?php wp_list_categories(); ?>
                        </ul>
                </div>
            </div>
        </section>

    <?php get_footer();

 ?>
