<?php
/*
Template Name: vatten
*/
get_header();?>

    <div class="wma-textruta">
        <h4 class="toptext">Vatten</h4>

        <div class="wma-text">
            <div class="artinfo left">
                <img class="artinfo-img" src="<?php bloginfo('stylesheet_directory'); ?>/img/gallery_vatten.jpg"/>
            </div> <!-- artinfo left -->
            <div class="artinfo right">

                <p>Vatten, underbara vatten. Vi är ingenting utan det! Snabbt avklarad för att få vattnet att se livligt ut.</p>

                <p>Gjord på canvas med akrylfärger</p>
                <p>15 x 15 cm.</p>

	            <?php get_template_part('/template-parts/socialshare', '/template-parts/socialshare.php'); ?>

            </div> <!-- artinfo right -->
        </div> <!-- wma-text -->
        <div class="artinfo-back">
            <h2>Tillbaka till <a href="javascript:history.go(-1)">Galleriet</a></h2>
        </div> <!-- artinfo-back -->
    </div> <!-- wma-textruta -->

<?php get_footer();
