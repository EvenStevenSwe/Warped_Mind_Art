<?php
/*
Template Name: slayer
*/
get_header();?>

    <div class="wma-textruta">
        <h4 class="toptext">Slayer</h4>

        <div class="wma-text">
            <div class="artinfo left">
                <img class="artinfo-img" src="<?php bloginfo('stylesheet_directory'); ?>/img/gallery_slayer.jpg"/>
            </div> <!-- artinfo left -->
            <div class="artinfo right">

                <p>Ett band som jag lyssnar väldigt mycket på heter <a href="http://www.slayer.net" target="_blank">Slayer</a>. Dom är ett "klassiskt" band
                inom den hårdare musiken och har funnits sen i början av 80-talet.</p>
                <p>Gjord av frigolit, gipsband och akrylfärger.</p>
                <p>30 x 17 cm.</p>

	            <?php get_template_part('/template-parts/socialshare', '/template-parts/socialshare.php'); ?>

            </div> <!-- artinfo right -->
        </div> <!-- wma-text -->
        <div class="artinfo-back">
            <h2>Tillbaka till <a href="javascript:history.go(-1)">Galleriet</a></h2>
        </div> <!-- artinfo-back -->
    </div> <!-- wma-textruta -->

<?php get_footer();
