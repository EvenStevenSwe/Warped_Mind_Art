<?php
/*
Template Name: sugarlove
*/
get_header();?>

    <div class="wma-textruta">
        <h4 class="toptext">Sugar Love</h4>

        <div class="wma-text">
            <div class="artinfo left">
                <img class="artinfo-img" src="<?php bloginfo('stylesheet_directory'); ?>/img/gallery_sugar.jpg"/>
            </div> <!-- artinfo left -->
            <div class="artinfo right">

                <p>Den första tavlan som jag skapade av idén som startade hela mitt skapande.</p>

                <p>Gjord på canvas med akrylfärger och gipsband samt lite egna påhitt för en intressant struktur.</p>

                <p>50 x 40 cm.</p>

	            <?php get_template_part('/template-parts/socialshare', '/template-parts/socialshare.php'); ?>

            </div> <!-- artinfo right -->
        </div> <!-- wma-text -->
        <div class="artinfo-back">
            <h2>Tillbaka till <a href="javascript:history.go(-1)">Galleriet</a></h2>
        </div> <!-- artinfo-back -->
    </div> <!-- wma-textruta -->

<?php get_footer();
