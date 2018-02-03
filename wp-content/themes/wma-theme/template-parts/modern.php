<?php
/*
Template Name: modern
*/
get_header();?>

    <div class="wma-textruta">
        <h4 class="toptext">Modern Art</h4>

        <div class="wma-text">
            <div class="artinfo left">
                    <img class="artinfo-img" src="<?php bloginfo('stylesheet_directory'); ?>/img/gallery_modern.jpg"/>
            </div> <!-- artinfo left -->
            <div class="artinfo right">

                <p>Ett snabbt gjort verk som egentligen var ett test för ett större projekt,
                   men det blev så pass lyckat att jag beslöt mig för att behålla den.</p>

                <p>Gjord på canvas med akrylfärger och ståltråd</p>
                <p>21 x 15 cm.</p>

	            <p><?php get_template_part('/template-parts/socialshare', '/template-parts/socialshare.php'); ?></p>

                Denna tavla är såld!

            </div> <!-- artinfo right -->
        </div> <!-- wma-text -->
        <div class="artinfo-back">
            <h2>Tillbaka till <a href="javascript:history.go(-1)">Galleriet</a></h2>
        </div> <!-- artinfo-back -->
    </div> <!-- wma-textruta -->

<?php get_footer();
