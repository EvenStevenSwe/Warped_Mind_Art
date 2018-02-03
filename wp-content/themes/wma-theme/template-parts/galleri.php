<?php
/*
Template Name: galleri
*/
get_header();?>

	<div class="wma-textruta">
		<h4 class="toptext">Galleri</h4>

        <div class="wma-text">
            <h2>Här finns alla tavlor/verk som jag gjort än så länge, vill du detaljer om något så kan du klicka på bilden.</h2>
        </div>

        <div class="galleri">
            <div class="grid">
                <div class="cell">
                    <a href="<?php echo get_page_link( get_page_by_title( Dreams )->ID ); ?>">
                    <img class="galleri-img" src="<?php bloginfo('stylesheet_directory'); ?>/img/gallery_dreams.jpg"/></a>
                    <figure><h2 class="galleri-title"><a href="<?php echo get_page_link( get_page_by_title( Dreams )->ID ); ?>">Dreams of Summer</a></h2></figure>
                </div>
                <div class="cell">
                    <a href="<?php echo get_page_link( get_page_by_title( Inferno )->ID ); ?>">
                    <img class="galleri-img" src="<?php bloginfo('stylesheet_directory'); ?>/img/gallery_inferno.jpg"/></a>
                    <figure><h2 class="galleri-title"><a href="<?php echo get_page_link( get_page_by_title( Inferno )->ID ); ?>">Inferno</a></h2></figure>
                </div>
                <div class="cell">
                    <a href="<?php echo get_page_link( get_page_by_title( Modern )->ID ); ?>">
                    <img class="galleri-img" src="<?php bloginfo('stylesheet_directory'); ?>/img/gallery_modern.jpg"/></a>
                    <figure><h2 class="galleri-title"><a href="<?php echo get_page_link( get_page_by_title( Modern )->ID ); ?>">Modern</a></h2></figure>
                </div>
                <div class="cell">
                    <a href="<?php echo get_page_link( get_page_by_title( Purple )->ID ); ?>">
                    <img class="galleri-img" src="<?php bloginfo('stylesheet_directory'); ?>/img/gallery_purple.jpg"/></a>
                    <figure><h2 class="galleri-title"><a href="<?php echo get_page_link( get_page_by_title( Purple )->ID ); ?>">Purple Haze</a></h2></figure>
                </div>
                <div class="cell">
                    <a href="<?php echo get_page_link( get_page_by_title( Slayer )->ID ); ?>">
                    <img class="galleri-img" src="<?php bloginfo('stylesheet_directory'); ?>/img/gallery_slayer.jpg"/></a>
                    <figure><h2 class="galleri-title"><a href="<?php echo get_page_link( get_page_by_title( Slayer )->ID ); ?>">Slayer</a></h2></figure>
                </div>
                <div class="cell">
                    <a href="<?php echo get_page_link( get_page_by_title( Stairway )->ID ); ?>">
                    <img class="galleri-img" src="<?php bloginfo('stylesheet_directory'); ?>/img/gallery_stairway.jpg"/></a>
                    <figure><div class="desc"><h2 class="galleri-title"><a href="<?php echo get_page_link( get_page_by_title( Stairway )->ID ); ?>">Stairway</a></h2></figure>
                </div>
                <div class="cell">
                    <a href="<?php echo get_page_link( get_page_by_title( Sugar )->ID ); ?>">
                    <img class="galleri-img" src="<?php bloginfo('stylesheet_directory'); ?>/img/gallery_sugar.jpg"/></a>
                    <figure><h2 class="galleri-title"><a href="<?php echo get_page_link( get_page_by_title( Sugar )->ID ); ?>">Sugar Love</a></h2></figure>
                </div>
                <div class="cell">
                    <a href="<?php echo get_page_link( get_page_by_title( Sverige )->ID ); ?>">
                    <img class="galleri-img" src="<?php bloginfo('stylesheet_directory'); ?>/img/gallery_sverige.jpg"/></a>
                    <figure><h2 class="galleri-title"><a href="<?php echo get_page_link( get_page_by_title( Sverige )->ID ); ?>">Sverige</a></h2></figure>
                </div>
                <div class="cell">
                    <a href="<?php echo get_page_link( get_page_by_title( Vatten )->ID ); ?>">
                    <img class="galleri-img" src="<?php bloginfo('stylesheet_directory'); ?>/img/gallery_vatten.jpg"/></a>
                    <figure><h2 class="galleri-title"><a href="<?php echo get_page_link( get_page_by_title( Vatten )->ID ); ?>">Vatten</a></h2></figure>
                </div>
                <div class="cell">
                    <a href="<?php echo get_page_link( get_page_by_title( Words )->ID ); ?>">
                    <img class="galleri-img" src="<?php bloginfo('stylesheet_directory'); ?>/img/gallery_words.jpg"/></a>
                    <figure><h2 class="galleri-title"><a href="<?php echo get_page_link( get_page_by_title( Words )->ID ); ?>">Words</a></h2></figure>
                </div>

            </div> <!-- grid -->
        </div> <!-- galleri -->
	</div> <!-- wma-textruta -->


<?php get_footer();