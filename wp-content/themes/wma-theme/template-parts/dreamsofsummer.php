<?php
/*
Template Name: dreams
*/
get_header();?>

    <div class="wma-textruta">
        <h4 class="toptext">Dreams of Summer</h4>

        <div class="wma-text">
            <div class="artinfo left">
                <img class="artinfo-img" src="<?php bloginfo('stylesheet_directory'); ?>/img/gallery_dreams.jpg"/>
            </div> <!-- artinfo left -->
            <div class="artinfo right">

                    <p>Denna tavla började med ett helt annat motiv som slutmål. Jag följde min tanke men kände att tavlan
                       behövde mera liv så jag fortsatte och detta blev resultatet.</p>

                    <p>Gjord på canvas med akrylfärger och lack.</p>
                    <p>50 x 40 cm.</p>

	            <?php get_template_part('/template-parts/socialshare', '/template-parts/socialshare.php'); ?>

             </div> <!-- artinfo right -->
        </div> <!-- wma-text -->
        <div class="artinfo-back">
            <h2>Tillbaka till <a href="javascript:history.go(-1)">Galleriet</a></h2>
        </div> <!-- artinfo-back -->
    </div> <!-- wma-textruta -->

<?php get_footer();

