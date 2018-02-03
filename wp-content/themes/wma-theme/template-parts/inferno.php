<?php
/*
Template Name: inferno
*/
get_header();?>

    <div class="wma-textruta">
        <h4 class="toptext">Inferno</h4>

        <div class="wma-text">
            <div class="artinfo left">
                <img class="artinfo-img" src="<?php bloginfo('stylesheet_directory'); ?>/img/gallery_inferno.jpg"/>
            </div> <!-- artinfo left -->
            <div class="artinfo right">

                <p>En illustration av det "kaos" som pågår inuti ett kreativt sinne. Jag försökte få fram hur det
                    ser ut när man har många idéer som alla försöker komma fram samtidigt.</p>

                <p>Gjord på canvas med rikligt utblandade akrylfärger, glasfärg, lack och färgat tunnt rep som jag fäst runt om.</p>
                <p>50 x 40 cm.</p>

	            <?php get_template_part('/template-parts/socialshare', '/template-parts/socialshare.php'); ?>

            </div> <!-- artinfo right -->
        </div> <!-- wma-text -->
        <div class="artinfo-back">
            <h2>Tillbaka till <a href="javascript:history.go(-1)">Galleriet</a></h2>
        </div> <!-- artinfo-back -->
    </div> <!-- wma-textruta -->

<?php get_footer();
