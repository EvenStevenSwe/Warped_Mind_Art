<?php
/*
Template Name: words
*/
get_header();?>

    <div class="wma-textruta">
        <h4 class="toptext">Words</h4>

        <div class="wma-text">
            <div class="artinfo left">
                <img class="artinfo-img" src="<?php bloginfo('stylesheet_directory'); ?>/img/gallery_words.jpg"/>
            </div> <!-- artinfo left -->
            <div class="artinfo right">

                <p>Den som kan sin musikhistoria och "one-hit-wonders" känner nog igen raderna från F.R. Davids 80-tals låt med namnet 'Words'.
                   Ytterligare en 80-talskoppling finns i det att tavlan är gjord i stil av en Dymo maskin.</p>

                <p>Gjord på canvas med akrylfärger</p>
                   <p>15 x 21 cm.</p>

	            <?php get_template_part('/template-parts/socialshare', '/template-parts/socialshare.php'); ?>

            </div> <!-- artinfo right -->
        </div> <!-- wma-text -->
        <div class="artinfo-back">
            <h2>Tillbaka till <a href="javascript:history.go(-1)">Galleriet</a></h2>
        </div> <!-- artinfo-back -->
    </div> <!-- wma-textruta -->

<?php get_footer();
