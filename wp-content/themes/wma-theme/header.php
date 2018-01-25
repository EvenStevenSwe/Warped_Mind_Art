<!DOCTYPE html>
<html>
  <head>
     <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
     <?php wp_head(); ?>
  </head>
<body>
<header>

       <div class="wma-header">
            <div class="wma-mainmenu"><?php dynamic_sidebar('header-menu'); ?></div> <!-- wma-mainmenu -->

            <div class="wma-mobilemenu">

                <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
                    <div class="wma-container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div> <!-- navbar-header -->

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="<?php echo get_page_link( get_page_by_title( Dreams )->ID ); ?>">Startsida</a></li>
                                <li><a href="<?php echo get_page_link( get_page_by_title( Dreams )->ID ); ?>">Galleri</a></li>
                                <li><a href="<?php echo get_page_link( get_page_by_title( Dreams )->ID ); ?>">Kontakt</a></li>
                                <li><a href="<?php echo get_page_link( get_page_by_title( Dreams )->ID ); ?>">Nyheter</a></li>
                                <li><a href="<?php echo get_page_link( get_page_by_title( Dreams )->ID ); ?>">Konto</a></li>
                                <li><a href="<?php echo get_page_link( get_page_by_title( Dreams )->ID ); ?>">Om WMA</a></li>
                                <li><a href="<?php echo get_page_link( get_page_by_title( Dreams )->ID ); ?>">Beställning</a></li>
                            </ul>
                        </div> <!-- collapse navbar-collapse -->
                    </div> <!-- container -->
                </nav>

            </div> <!-- wma-mobilemenu -->
       </div> <!-- wma-header -->


    </header>
</body>
</html>





