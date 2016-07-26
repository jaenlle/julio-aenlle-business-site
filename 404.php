<?php
//Template Name: 404 Page (Page Not Found)

get_header(); ?>

    <section class="row">
        <div class="eight columns">
            <h1 id="error">404</h1>
            <img id="sadpanda" src="" alt="" />
            <h2 id="errorh2">The page you're looking for doesn't exist :(</h2>
        </div>

        <div class="one column" id="blank">blank</div>

        <!-- ADDING SIDEBAR -->
        <div class="three columns">
            <?php get_sidebar(); ?>
        </div>
    </section>

<?php get_footer(); ?>
