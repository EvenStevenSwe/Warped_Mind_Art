<?php
/*
Template Name: sverige
*/
get_header();?>

    <div class="wma-textruta">
        <h4 class="toptext">Sverige</h4>

        <div class="wma-text">
            <div class="artinfo left">
                <img class="artinfo-img" src="<?php bloginfo('stylesheet_directory'); ?>/img/gallery_sverige.jpg"/>
            </div> <!-- artinfo left -->
            <div class="artinfo right">

                <p>Jag ville prova om det gick av skapa en tavla av gips, den vackra svenska flaggan fick vara mitt
                motiv denna gång.</p>

                <p>Gjord av färgat gips som jag formade och placerade på en canvas.</p>
                <p>21 x 15 cm.</p>

	            <?php get_template_part('/template-parts/socialshare', '/template-parts/socialshare.php'); ?>

            </div> <!-- artinfo right -->
        </div> <!-- wma-text -->
        <div class="artinfo-back">
            <h2>Tillbaka till <a href="javascript:history.go(-1)">Galleriet</a></h2>
        </div> <!-- artinfo-back -->
    </div> <!-- wma-textruta -->

<?php get_footer();
