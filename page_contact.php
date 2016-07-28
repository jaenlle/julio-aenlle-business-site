<?php
/*
Template Name: Contact Page
*/
?>
    <?php get_header(); ?>

        <section class="row">
            <div class="six columns">
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

            <!--<div class="two column blank">blank</div>-->

            <div class="six columns">
                <h1>Locations</h1>
                <div class="location">
                    <h2>Doral</h2>
                    <p>10285 NW 12th Street</p>
                    <p>Dorale, FL 33172</p>
                    <p>(305) 555-2049</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14370.523630184578!2d-80.3638958677368!3d25.782752068932663!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sca!4v1469724153448" width="350" height="262.5" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="location">
                    <h2>Kendall</h2>
                    <p> 15895 S. DIXY HIGHWAY</p>
                    <p>MIAMI, FL 33157</p>
                    <p>(305) 555-4692</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3597.4678299430475!2d-80.3454568855445!3d25.622594220598966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sca!4v1469724308837" width="350" height="262.5" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="location">
                    <h2>Weston</h2>
                    <p>3550 Westone Rd</p>
                    <p>Davie, FL 33331</p>
                    <p>(954) 555-6697</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d114649.47107605588!2d-80.35290778210815!3d26.105578057034386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sca!4v1469724548848" width="350" height="262.5" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </section> <!-- End Body Content Section -->
    <?php get_footer(); ?>
