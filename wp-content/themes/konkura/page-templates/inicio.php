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
                          <div class="icon img-responsive img-circle center-block">
                              <img src="<?php bloginfo('template_url')?>/img/1.png" alt="" class="center-block">
                          </div>
                           <h5>Escuchamos a nuestros clientes</h5>
                       </div>
                       <div class="col-sm-3">
                          <div class="icon img-responsvie img-circle center-block">
                              <img src="<?php bloginfo('template_url')?>/img/2.png" alt="" class="center-block">
                          </div>
                           <h5>Diseñamos estrategias funcionales</h5>
                       </div>
                       <div class="col-sm-3">
                          <div class="icon img-responsive img-circle center-block">
                              <img src="<?php bloginfo('template_url')?>/img/3.png" alt="" class="center-block">
                          </div>
                           <h5>Orientamos nuestros procesos a generar resultados</h5>
                       </div>
                       <div class="col-sm-3">
                          <div class="icon img-responsive img-circle center-block">
                              <img src="<?php bloginfo('template_url')?>/img/4.png" alt="" class="center-block">
                          </div>
                           <h5>Hacemos las cosas simples</h5>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col-sm-3">
                          <div class="icon img-responsive img-circle center-block">
                              <img src="<?php bloginfo('template_url')?>/img/5.png" alt="" class="center-block">
                          </div>
                           <h5>Desarrollamos lenguaje significativo</h5>
                       </div>
                       <div class="col-sm-3">
                          <div class="icon img-responsive img-circle center-block">
                              <img src="<?php bloginfo('template_url')?>/img/6.png" alt="" class="center-block">
                          </div>
                           <h5>Capacitamos de una forma práctica y competitiva</h5>
                       </div>
                       <div class="col-sm-3">
                          <div class="icon img-responsive img-circle center-block">
                              <img src="<?php bloginfo('template_url')?>/img/7.png" alt="" class="center-block">
                          </div>
                           <h5>Generamos ambientes propicios para el aprendizaje</h5>
                       </div>
                       <div class="col-sm-3">
                          <div class="icon img-responsive img-circle center-block">
                              <img src="<?php bloginfo('template_url')?>/img/8.png" alt="" class="center-block">
                          </div>
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
           <!-- BEGIN EVENTOS -->
           <div class="jumbotron bg-white">
               <div class="container">
                   <div class="row">
                       <div class="col-sm-12">
                           <h3>Próximos eventos</h3>
                       </div>
                       <div class="col-sm-12 margin-top">
                           <div class="col-sm-2"></div>
                           <div class="col-sm-8 events">
                               <h4 class="margin-top"><?php echo CFS()->get('nombre_curso'); ?></h4>
                               <p class="description"><?php echo CFS()->get('descripcion_curso'); ?></p>
                               <p>Duración: <?php echo CFS()->get('duracion_curso'); ?></p>
                               <p>Días: <?php echo CFS()->get('dias_curso'); ?></p>
                               <p>Hora: <?php echo CFS()->get('hora_curso'); ?></p>
                               <p>Lugar: <?php echo CFS()->get('lugar_curso'); ?></p>
                               
                               <a href="<?php echo CFS()->get('link_descarga'); ?>" class="btn btn-white btn-full margin-top margin-bottom">Descargar</a>
                           </div>
                           <div class="col-sm-2"></div>
                       </div>
                   </div>
               </div>
           </div>
           <!-- END EVENTOS -->
           <!-- BEGIN CURSOS -->
               <div class="container-fluid bg-white">
                   <div class="row">
                       <div class="col-sm-12">
                          <div class="center-block margin-bottom">
                              <h3>Cursos</h3>
                          </div>
                       </div>
                   </div>
                </div>
                   <div class="jumbotron  bg-img-cursos">
                       <div class="container">
                          <div class="row">
                              <h3>Descarga nuestros cursos en línea.</h3>
                              <a href="http://konkura.com.mx/capacitacion-y-desarrollo/" class="btn btn-white">Ver cursos disponibles</a>
                          </div>
                       </div>
                   </div>
           <!-- END CURSOS -->
           <!-- BEGIN KONKURA -->
           <div class="jumbotron bg-white">
               <div class="container">
                   <div class="row konkura">
                       <div class="col-sm-12">
                          <h3>Experiencias</h3>
                           <div id="myCarousel" style="height:250px;" class="carousel slide" data-ride="carousel">
                               <!-- Indicators -->
            <ol class="carousel-indicators margin-top">
                <?php 
                    $loop = new WP_Query(array( 'post_type' => 'testimonial', 'order' => 'ASC', 'showposts' => '11'));
                    $i = 0;
                    if($loop->have_posts()):
                    while($loop->have_posts()) : $loop->the_post();
                    if($i == 0) { ?>
                        <li data-target="#myCarousel" data-slide-to="<?php echo $i;?>" class="active"></li>
               <?php
                    }else { ?>
                        <li data-target="#myCarousel" data-slide-to="<?php echo $i;?>"></li>
               <?php
                    }
                    $i++;
                    endwhile;
                    else: ?>
                    <p><?php _e( 'Oh God Why?' ); ?></p>
                    <?php endif; ?>
            </ol>
                          <!-- Wrapper for slides -->
            <div class="carousel-inner" >
              <?php 
                $j = 0;
                if($loop->have_posts()):
                while($loop->have_posts()) : $loop->the_post();
                if($use_excerpt){
                     $testimonial['content'] = get_the_excerpt();
                } else {				
                     $testimonial['content'] = get_the_content();
                }
                
                if($j == 0) { ?>
                    <div class="item active">
             <?php
                }else { ?>
                    <div class="item">
             <?php
                } ?>
                <div class="carousel-caption">
                  <?php echo $testimonial['content']; ?>
                </div>
            </div>
            <?php
                $j++;
                endwhile;
                endif;
                wp_reset_postdata();
            ?>
            </div>

            
      
          </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <!-- END KONKURA -->
           
<?php get_footer(); ?>