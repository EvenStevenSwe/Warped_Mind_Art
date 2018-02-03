<?php
/*
Template Name: coffee
*/
get_header();?>

    <div class="wma-textruta">
        <h4 class="toptext">Just Coffee Please</h4>

        <div class="wma-text">
            <div class="artinfo left">
                <img class="artinfo-img" src="<?php bloginfo('stylesheet_directory'); ?>/img/spilledcoffee.jpg"/>
            </div> <!-- artinfo left -->
            <div class="artinfo right">

                <p>Kaffe! Ja varför inte tänkte jag? Allt kan vara konst så jag gjorde denna.</p>

                <p>Gjord på canvas med akrylfärger, gipsband och kaffe, samt bönor/pulver för lite extra dekoration.</p>
                <p>50 x 40 cm.</p>

	            <?php get_template_part('/template-parts/socialshare', '/template-parts/socialshare.php'); ?>

            </div> <!-- artinfo right -->
        </div> <!-- wma-text -->
        <div class="artinfo-back">
            <h2>Tillbaka till <a href="javascript:history.go(-1)">Galleriet</a></h2>
        </div> <!-- artinfo-back -->
    </div> <!-- wma-textruta -->

<?php get_footer();
