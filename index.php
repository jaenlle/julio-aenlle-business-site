<?php get_header(); ?> <!-- Gets information from header.php to display on page -->

    <!-- Begin Body Content Section -->
    <section class="row">
        <div class="twelve columns">
            <div class="my-slider">
                <ul>
                    <?php
                        $args   = array( 'post_type' => 'Slider' );
                        $slides = new WP_Query( $args );

                        if( $slides->have_posts() ) {
                            while( $slides->have_posts() ) {
                                $slides->the_post();

                                /*--- Build Thumbnail URL ---*/
                                $thumb_id        = get_post_thumbnail_id();
                                $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                                $thumb_url       = $thumb_url_array[0];
                                ?>
                                    <li style="background-image: url('<?php echo $thumb_url ?>');" class="slide-container">
                                        <!--<div class="slides-message">
                                            <h1><?php the_title() ?></h1>
                                            <p><?php the_excerpt() ?></p>
                                        </div>-->
                                    </li>
                                <?php
                            }
                        }
                        else {
                            echo 'No Slides';
                        }
                    ?>
                </ul>
            </div>
        </div>
        <div class="one columns blank">Blank Column</div>
        <div class="ten columns main">
            <h1>Our Promise To You</h1>
            <p>
                Throughout our careers we've heard stories from countless customers about how they've been tricked, swindled, hustled, bamboozled, conned and overall just treated not very nicely by other mechanics not only her in South Florida, but around the country. And we think that's a darned shame because our mamas raised us right. At Slick's we believe that hard work and smart work are high on the totem pole of customer service but above all sits honest work. Starting from John "Slick" Doe all the way down to our newest mechanics and specialist, you can rest assure that the services you get from Slick's will be not only the best you can find, but the most honest as well. We'll never try to force you into making unnecessary purchases or repairs, and we'll always speak with you before we do anything that wasn't originally agreed upon. That's the Slick's promise and our word is our most valuable possession.
            </p>
            <a href="http://julioaenlle.net/slicksautobody/index.php/contact/">MAKE AN APPOINTMENT</a>
        </div>
        <div class="twelve columns maindeals">
            <ul>
                <li><div class="blocks hm1"><p>Prevention</p></div></li>
                <li><div class="blocks hm2"><p>Repairs</p></div></li>
                <li><div class="blocks hm3"><p>Tires</p></div></li>
                <li><div class="blocks hm4"><p>Diagnostics</p></div></li>
            </ul>
        </div>

    </section> <!-- End Body Content Section -->

<?php get_footer(); ?> <!-- Gets information from footer.php to display on page -->
