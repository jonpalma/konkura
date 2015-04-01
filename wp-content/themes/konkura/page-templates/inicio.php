<?php

/* Template Name: Inicio */
    get_header(); 
?>
     <!-- SLIDE -->
                    <?php if( function_exists('cyclone_slider') ) cyclone_slider('banner-principal'); ?>
           <!-- END SLIDE -->
           <!-- BEGIN DISTINCION -->
           <div class="container-fluid bg-gray">
                  <span>Nos distinguimos por:</span>
           </div>
           <div class="bg-white margin-bottom">
                  <svg version="1.1" class="triangle-gray" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 width="100%" height="auto" viewBox="0 0 90.012 38" preserveAspectRatio="none">
                  <polygon points="0.641,0 89.141,0 44.891,38 "/>
                  </svg>
           </div>
           <div class="jumbotron bg-white">
              <div class="container distinction">
                   <div class="row">
                       <div class="col-sm-3">
                           <img src="<?php bloginfo('template_url')?>/img/cuadro_azul.jpg" alt="" class="img-responsive img-circle center-block">
                           <h5>Escuchamos a nuestros clientes</h5>
                       </div>
                       <div class="col-sm-3">
                           <img src="<?php bloginfo('template_url')?>/img/cuadro_azul.jpg" alt="" class="img-responsive img-circle center-block">
                           <h5>Diseñamos estrategias funcionales</h5>
                       </div>
                       <div class="col-sm-3">
                           <img src="<?php bloginfo('template_url')?>/img/cuadro_azul.jpg" alt="" class="img-responsive img-circle center-block">
                           <h5>Orientamos nuestros procesos a generar resultados</h5>
                       </div>
                       <div class="col-sm-3">
                           <img src="<?php bloginfo('template_url')?>/img/cuadro_azul.jpg" alt="" class="img-responsive img-circle center-block">
                           <h5>hacemos las cosas simples</h5>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col-sm-3">
                           <img src="<?php bloginfo('template_url')?>/img/cuadro_azul.jpg" alt="" class="img-responsive img-circle center-block">
                           <h5>Desarrolamos lenguaje significativo</h5>
                       </div>
                       <div class="col-sm-3">
                           <img src="<?php bloginfo('template_url')?>/img/cuadro_azul.jpg" alt="" class="img-responsive img-circle center-block">
                           <h5>Capacitamos de una forma práctica y competitiva</h5>
                       </div>
                       <div class="col-sm-3">
                           <img src="<?php bloginfo('template_url')?>/img/cuadro_azul.jpg" alt="" class="img-responsive img-circle center-block">
                           <h5>Generamos ambientes propicios para el aprendizaje</h5>
                       </div>
                       <div class="col-sm-3">
                           <img src="<?php bloginfo('template_url')?>/img/cuadro_azul.jpg" alt="" class="img-responsive img-circle center-block">
                           <h5>Medimos todo lo que hacemos</h5>
                       </div>
                   </div>
               </div>
           </div>
           <!-- END DISTICION -->
           <!-- BEGIN NOSOTROS -->
           <div class="jumbotron bg-yellow">
              <svg version="1.1" class="triangle-white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 width="100%" height="auto" viewBox="0 0 90.012 38" preserveAspectRatio="none">
                  <polygon points="0.641,0 89.141,0 44.891,38 "/>
            </svg>
               <div class="container nosotros">
                   <div class="row">
                       <div class="col-sm-6">
                           <h2><?php echo CFS()->get('nosotros_header'); ?></h2>
                           <p>
                               <?php echo CFS()->get('nosotros_texto'); ?>
                           </p>
                       </div>
                       <div class="col-sm-6">
                           <h2><?php echo CFS()->get('hacemos_header'); ?></h2>
                           <p>
                               <?php echo CFS()->get('hacemos_texto'); ?>
                           </p>
                       </div>
                   </div>
               </div>
           </div>
           <!-- END NOSOTROS -->
           <!-- BEGIN FILOSOFIA -->
           <div class="jumbotron bg-white">
               <div class="container">
                   <div class="row">
                       <div class="col-sm-12">
                           <h3>Filosofía</h3>
                       </div>
                   </div>
               </div>
           </div>
           <!-- END FILOSOFIA -->
           <!-- BEGIN CURSOS -->
               <div class="container-fluid bg-white">
                   <div class="row">
                       <div class="col-sm-12">
                          <div class="center-block">
                              <h3>Cursos</h3>
                              <svg></svg>
                          </div>
                       </div>
                   </div>
                </div>
                   <div class="jumbotron  bg-img-cursos">
                       <div class="container">
                          <div class="row">
                              <h3>Descarga nuestros cursos en línea.</h3>
                              <a href="cursos.php" class="btn btn-white">Ver cursos disponibles</a>
                          </div>
                       </div>
                   </div>
           <!-- END CURSOS -->
           <!-- BEGIN KONKURA -->
           <div class="jumbotron bg-white">
               <div class="container">
                   <div class="row konkura">
                       <div class="col-sm-12"><a href="#top" class="smoothScroll"><img src="<?php bloginfo('template_url')?>/img/konkura.png" alt="Konkura Consultores" class="img-responsive center-block"></a></div>
                   </div>
               </div>
           </div>
           <!-- END KONKURA -->
           
<?php get_footer(); ?>