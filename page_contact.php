<?php
/*
Template Name: Contact Page
*/
?>
    <?php get_header(); ?>

        <section class="row">
            <div class="seven columns">
                <h1>Give Us A Honk!</h1>
                     <form method="post" action="/slicks/contact-form.php">
                         <label for="Name">Full Name</label>
                         <input type="text" name="Name" id="Name" />

                          <label for="Number">Phone Number</label>
                          <input type="text" name="Number" id="Number" />

                          <label for="Email">Email</label>
                          <input type="text" name="Email" id="Email" />

                          <label for="Message">Tell us more about your issues</label>
                          <textarea name="Message" rows="20" cols="30" id="Message"></textarea>

                          <input type="submit" name="submit" value="submit" class="submit-button" />
                     </form>
            </div>

            <div class="two column blank">blank</div>

            <div class="three columns">
                <h1>Locations</h1>
                <div class="location">
                    <h2>Doral</h2>
                    <p>10285 NW 12th Street</p>
                    <p>Dorale, FL 33172</p>
                    <p>(305) 555-2049</p>
                </div>
                <div class="location">
                    <h2>Kendall</h2>
                    <p> 15895 S. DIXY HIGHWAY</p>
                    <p>MIAMI, FL 33157</p>
                    <p>(305) 555-4692</p>
                </div>
                <div class="location">
                    <h2>Weston</h2>
                    <p>3550 Westone Rd</p>
                    <p>Davie, FL 33331</p>
                    <p>(954) 555-6697</p>
                </div>
            </div>
        </section> <!-- End Body Content Section -->
    <?php get_footer(); ?>
