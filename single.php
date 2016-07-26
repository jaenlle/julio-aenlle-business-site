<?php get_header(); ?>

    <section class="row">
        <div class="eight columns">
            <!-- BEGIN PAGE PHP -->
              <?php
                if ( have_posts() ) {
                  while ( have_posts() ){
                      the_post(); // the_post defines our Data CONTEXT

                      if ( has_post_thumbnail() ){ ?>
                            <h1 class="idv"><?php the_title(); ?></h2>
                            <div class="post-thumbnail">
                              <?php $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),’thumbnail’ );
                                echo '<img width="100%" src="' . $image_src[0] . '">'; ?><!--ideal image width is 627; scale accordingly-->
                            </div>
                      <?php } ?>

                      <?php the_content();
                  }//END WHILE
                } //END IF ?>
                <p>Posted on:<?php the_time('F j, Y'); ?></span></p>
            <!-- END PAGE PHP -->
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
        </div>

        <div class="one column" id="blank">blank</div>

        <!-- ADDING SIDEBAR -->
        <div class="three columns">
            <?php get_sidebar(); ?>
        </div>

    </section>

<?php get_footer(); ?>
