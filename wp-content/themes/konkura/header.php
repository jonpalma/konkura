<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php wp_title(''); ?></title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Agencia Mixen www.mixen.mx">
    <meta name="description" content="">
    <meta name="keywords" content="">
   
   <!-- favicon -->
   <!--<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">-->
    
    <!-- CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
    <?php wp_head();?>
</head>
<body data-spy="scroll" data-target=".navbar-nav" data-offset="0">
  <div id="top"></div>
  <header>
        <nav class="navbar navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand">
                       <img src="<?php bloginfo('template_url')?>/img/logo-sm.png" alt="" class="img-responsive logo-sm">
                        <img src="<?php bloginfo('template_url')?>/img/logo.png" alt="KONKURA logotipo" class="img-responsive logo-lg">
                    </a>
                </div>
                <div class="collapse navbar-collapse navbar-right">
                  <?php wp_nav_menu( array(
                            'theme_location'    => 'menu',
                            'container'     => false,
                            'menu_class'        => 'nav navbar-nav',
                            'echo'          => true,
                            'items_wrap'        => '<ul class="%2$s">%3$s</ul>',
                            'depth'         => 10,
                            'walker'        => new themeslug_walker_nav_menu
                        ) );

            ?>  
          </div>
            </div>
        </nav> 
    </header>