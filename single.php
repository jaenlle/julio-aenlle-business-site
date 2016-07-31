<?php get_header(); ?>

        <section class="row blog">
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
                  <?php
                    if (have_posts()) :
                     while (have_posts()) :
                        the_post(); ?>
                            <h2 class="title"><?php the_title(); ?></a></h2>
                           <?php the_content();
                     endwhile;
                    endif; ?>
                <div>
                    <div id="prevpost">
                        <?php previous_post_link('
                            <p>%link</p>
                            ', '< Previous Post', false);
                        ?>
                    </div>
                    <div id="nextpost">
                        <?php next_post_link('
                        	<p>%link</p>
                        	', 'Next Post >', false);
                        ?>
                    </div>
                </div>
            </div>
            <div class="twelve columns appt">
                <a href="http://julioaenlle.net/slicksautobody/index.php/contact/">MAKE AN APPOINTMENT</a>
            </div>
        </section>

<?php get_footer(); ?>
