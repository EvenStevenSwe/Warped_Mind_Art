<?php
/*
Template Name: galleri
*/
get_header();?>

	<div class="wma-textruta">
		<h4 class="toptext">Galleri</h4>

        <div class="galleri">
            <div class="grid">
                <div class="cell">
                    <img class="galleri-img" src="<?php echo $theme; ?>/wp-content/themes/wma-theme/img/dreamsofsummer.jpg"/>
                    <figure><h2 class="galleri-title"><a href="<?php echo get_page_link( get_page_by_title( Dreams )->ID ); ?>">Dreams of Summer</a></h2></figure>
                </div>
                <div class="cell">
                    <img class="galleri-img" src="<?php echo $theme; ?>/wp-content/themes/wma-theme/img/inferno.jpg"/>
                    <figure><h2 class="galleri-title"><a href="<?php echo get_page_link( get_page_by_title( Inferno )->ID ); ?>">Inferno</a></h2></figure>
                </div>
                <div class="cell">
                    <img class="galleri-img" src="<?php echo $theme; ?>/wp-content/themes/wma-theme/img/modern.jpg"/>
                    <figure><h2 class="galleri-title"><a href="<?php echo get_page_link( get_page_by_title( Modern )->ID ); ?>">Modern</a></h2></figure>
                </div>
                <div class="cell">
                    <img class="galleri-img" src="<?php echo $theme; ?>/wp-content/themes/wma-theme/img/purplehaze.jpg"/>
                    <figure><h2 class="galleri-title"><a href="<?php echo get_page_link( get_page_by_title( Purple )->ID ); ?>">Purple Haze</a></h2></figure>
                </div>
                <div class="cell">
                    <img class="galleri-img" src="<?php echo $theme; ?>/wp-content/themes/wma-theme/img/spilledcoffee.jpg"/>
                    <figure><h2 class="galleri-title"><a href="<?php echo get_page_link( get_page_by_title( Spilled )->ID ); ?>">Spilled Coffee</a></h2></figure>
                </div>
                <div class="cell">
                    <img class="galleri-img" src="<?php echo $theme; ?>/wp-content/themes/wma-theme/img/inferno.jpg"/>
                    <figure><h2 class="galleri-title"><a href="<?php echo get_page_link( get_page_by_title( Slayer )->ID ); ?>">Slayer</a></h2></figure>
                </div>
                <div class="cell">
                    <img class="galleri-img" src="<?php echo $theme; ?>/wp-content/themes/wma-theme/img/trappa.jpg"/>
                    <figure><div class="desc"><h2 class="galleri-title"><a href="<?php echo get_page_link( get_page_by_title( Stairway )->ID ); ?>">Stairway</a></h2></figure>
                </div>
                <div class="cell">
                    <img class="galleri-img" src="<?php echo $theme; ?>/wp-content/themes/wma-theme/img/inferno.jpg"/>
                    <figure><h2 class="galleri-title"><a href="<?php echo get_page_link( get_page_by_title( Sugar )->ID ); ?>">Sugar Love</a></h2></figure>
                </div>
                <div class="cell">
                    <img class="galleri-img" src="<?php echo $theme; ?>/wp-content/themes/wma-theme/img/sverige.jpg"/>
                    <figure><h2 class="galleri-title"><a href="<?php echo get_page_link( get_page_by_title( Sverige )->ID ); ?>">Sverige</a></h2></figure>
                </div>
                <div class="cell">
                    <img class="galleri-img" src="<?php echo $theme; ?>/wp-content/themes/wma-theme/img/vatten.jpg"/>
                    <figure><h2 class="galleri-title"><a href="<?php echo get_page_link( get_page_by_title( Vatten )->ID ); ?>">Vatten</a></h2></figure>
                </div>
                <div class="cell">
                    <img class="galleri-img" src="<?php echo $theme; ?>/wp-content/themes/wma-theme/img/words.jpg"/>
                    <figure><h2 class="galleri-title"><a href="<?php echo get_page_link( get_page_by_title( Words )->ID ); ?>">Words</a></h2></figure>
                </div>

            </div> <!-- grid -->
        </div> <!-- galleri -->


	</div> <!-- wma-textruta -->


<?php get_footer();