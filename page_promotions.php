<?php
/*
Template Name: Promotions Page
*/
?>

<?php get_header(); ?>
    <div class="one column blank">Blank Column</div>
    <div class="row">
        <div class="ten columns deal">
            <h1>Deals!</h1>
            <?php if ( have_posts() ) {
                        while ( have_posts() ){
                            the_post(); // the_post defines our Data CONTEXT ?>
                            <?php the_content();
                        } //end while statment
                    } //end if statement ?>
                  <!-- END LOOP -->
        </div>
    </div>
    <div class="one column blank">Blank Column</div>
<?php get_footer(); ?>
