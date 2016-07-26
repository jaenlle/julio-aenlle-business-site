<?php get_header(); ?>

    <section class="row">

      <div class="eight columns">

          <!-- BEGIN LOOP -->
            <?php if ( have_posts() ) {
                while ( have_posts() ){
                    the_post(); // the_post defines our Data CONTEXT ?>

                    <h2><?php the_title(); ?></h2>
                    <?php the_content();

                } //end while statment
            } //end if statement ?>

          <!-- END LOOP -->

      </div>

      <div class="one column" id="blank">blank</div>

      <!-- ADDING SIDEBAR -->
      <div class="three columns">
          <?php get_sidebar(); ?>
      </div>

     </section>

<?php get_footer(); ?>
