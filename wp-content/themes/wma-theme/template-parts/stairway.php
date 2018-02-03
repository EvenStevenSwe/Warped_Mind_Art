<?php
/*
Template Name: stairway
*/
get_header();?>

    <div class="wma-textruta">
        <h4 class="toptext">Stairway</h4>

        <div class="wma-text">
            <div class="st-left">

            <a id="stair1" href="#" tabindex="1"><img class="st-thumb" src="<?php bloginfo('stylesheet_directory'); ?>/img/stairway1.jpg"></a>
            <a id="stair2" href="#" tabindex="2"><img class="st-thumb" src="<?php bloginfo('stylesheet_directory'); ?>/img/stairway2.jpg"></a>
            <a id="stair3" href="#" tabindex="3"><img class="st-thumb" src="<?php bloginfo('stylesheet_directory'); ?>/img/stairway3.jpg"></a>
            <a id="stair4" href="#" tabindex="4"><img class="st-thumb" src="<?php bloginfo('stylesheet_directory'); ?>/img/stairway4.jpg"></a>

            <div id="stairway">
                <div id="stairway1"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/stairway1.jpg"></div>
                <div id="stairway2"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/stairway2.jpg"></div>
                <div id="stairway3"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/stairway3.jpg"></div>
                <div id="stairway4"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/stairway4.jpg"></div>
            </div> <!-- stairway -->

            </div> <!-- st-left -->

            <!-- mobilversion av denna sida -->

            <div class="stairway-mobile">

            <a id="stair1" href="#" tabindex="1">1</a>
            <a id="stair2" href="#" tabindex="2">2</a>
            <a id="stair3" href="#" tabindex="3">3</a>
            <a id="stair4" href="#" tabindex="4">4</a>

            <div id="stairway">
                <div id="stairway1"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/stairway1.jpg"></div>
                <div id="stairway2"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/stairway2.jpg"></div>
                <div id="stairway3"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/stairway3.jpg"></div>
                <div id="stairway4"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/stairway4.jpg"></div>
            </div> <!-- stairway -->

            </div> <!-- stairway-mobile -->

            <!-- mobilversion slut -->

        <div class="st-right">

                <p>Gjord av gips som jag gjutit i separata delar och monterat ihop.</p>
                <p>Basen är 17,5 x 19,5 cm och totala höjden är 25 cm.</p>

	        <?php get_template_part('/template-parts/socialshare', '/template-parts/socialshare.php'); ?>

            </div> <!-- st-right -->







        </div> <!-- wma-text -->
        <div class="artinfo-back">
            <h2>Tillbaka till <a href="javascript:history.go(-1)">Galleriet</a></h2>
        </div> <!-- artinfo-back -->
    </div> <!-- wma-textruta -->



<?php get_footer();
