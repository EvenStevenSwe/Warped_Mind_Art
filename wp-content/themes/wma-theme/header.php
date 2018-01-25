<!DOCTYPE html>
<html>
  <head>
     <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
     <?php wp_head(); ?>
  </head>
<body>

<header>
   <div class="wma-header">
       <div class="wma-mainmenu">
			    <?php dynamic_sidebar('header-menu'); ?>
       </div> <!-- wma-mainmenu -->

       <!-- Mobilsidans meny knapp -->
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
       </button>
       <!-- Mobilsidans meny knapp -->
       <!-- wma-smallmenu -->
       <div class="wma-smallmenu">

       </div>
   </div> <!-- wma-header -->
</header>

</body>
</html>





