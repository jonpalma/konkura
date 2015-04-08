<?php

/* Template Name: Empresarial */
    get_header(); 
?>
<!-- BEGIN HEADING -->
    <div class="container-fluid bg-yellow heading-title">
        <div class="row">
            <div class="col-sm-12">
                <div class="heading center-block">
                    <h1><?php the_title(); ?></h1>
                    <svg version="1.1" class="heading-bottom" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 width="100%" height="auto" viewBox="0 0 200 70" preserveAspectRatio="none">
                        <polygon points="90.661,29.56 110.204,29.56 100.433,40.941 "/>
                        <line stroke-miterlimit="10" x1="1.593" y1="34.013" x2="80.269" y2="34.013"/>
                        <line stroke-miterlimit="10" x1="119.729" y1="34.013" x2="198.406" y2="34.013"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <!-- END HEADING -->
    <!-- BEGIN CONTENT -->
    <div class="jumbotron bg-white">
        <div class="container content">
            <div class="row margin-bottom">
                <div class="col-sm-12 margin-bottom">
                    <h2>
                        ÁREAS DE SERVICIO
                    </h2>
                    <hr />
                </div>
                <div class="col-sm-4">
                      <img src="<?php bloginfo('template_url')?>/img/negocio.jpg" alt="Konkura Consultores" class="img-responsive center-block margin-bottom">
                       <div class="content-empresarial">
                           <?php $loop = new WP_Query(array( 'post_type' => 'course', 'course_category' => 'negocio'));
                           if($loop->have_posts()): ?>
                           <h4><?php $terms = wp_get_object_terms( $loop->post->ID,  'course_category' );
print_r($terms[0]->name); ?></h4>
                           <ul>
                   <?php while($loop->have_posts()) : $loop->the_post(); ?>
                            <li>
                                <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                            </li>
                            <?php
                                endwhile;
                                endif;
                                wp_reset_postdata();
                            ?>
                            </ul>
                            <svg version="1.1" class="orange-bottom" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 width="100%" height="auto" viewBox="0 0 200 70" preserveAspectRatio="none">
                        <polygon points="90.661,29.56 110.204,29.56 100.433,40.941 "/>
                        <line stroke-miterlimit="10" x1="1.593" y1="34.013" x2="80.269" y2="34.013"/>
                        <line stroke-miterlimit="10" x1="119.729" y1="34.013" x2="198.406" y2="34.013"/>
                    </svg>
                        </div>
                </div>
                <div class="col-sm-4">
                       <img src="<?php bloginfo('template_url')?>/img/personal.jpg" alt="Konkura Consultores" class="img-responsive center-block margin-bottom">
                        <div class="content-empresarial">
                            <?php $loop = new WP_Query(array( 'post_type' => 'course', 'course_category' => 'personal'));
                           if($loop->have_posts()): ?>
                           <h4><?php $terms = wp_get_object_terms( $loop->post->ID,  'course_category' );
print_r($terms[0]->name); ?></h4>
                           <ul>
                   <?php while($loop->have_posts()) : $loop->the_post(); ?>
                            <li>
                                <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                            </li>
                            <?php
                                endwhile;
                                endif;
                                wp_reset_postdata();
                            ?>
                            </ul>
                            <svg version="1.1" class="light-gray-bottom" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 width="100%" height="auto" viewBox="0 0 200 70" preserveAspectRatio="none">
                        <polygon points="90.661,29.56 110.204,29.56 100.433,40.941 "/>
                        <line stroke-miterlimit="10" x1="1.593" y1="34.013" x2="80.269" y2="34.013"/>
                        <line stroke-miterlimit="10" x1="119.729" y1="34.013" x2="198.406" y2="34.013"/>
                    </svg>
                        </div>   
                </div>
                <div class="col-sm-4">
                      <img src="<?php bloginfo('template_url')?>/img/organizacion.jpg" alt="Konkura Consultores" class="img-responsive center-block margin-bottom">
                       <div class="content-empresarial">
                            <?php $loop = new WP_Query(array( 'post_type' => 'course', 'course_category' => 'organizacion'));
                           if($loop->have_posts()): ?>
                           <h4><?php $terms = wp_get_object_terms( $loop->post->ID,  'course_category' );
print_r($terms[0]->name); ?></h4>
                           <ul>
                   <?php while($loop->have_posts()) : $loop->the_post(); ?>
                            <li>
                                <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                            </li>
                            <?php
                                endwhile;
                                endif;
                                wp_reset_postdata();
                            ?>
                            </ul>
                            <svg version="1.1" class="teal-bottom" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 width="100%" height="auto" viewBox="0 0 200 70" preserveAspectRatio="none">
                        <polygon points="90.661,29.56 110.204,29.56 100.433,40.941 "/>
                        <line stroke-miterlimit="10" x1="1.593" y1="34.013" x2="80.269" y2="34.013"/>
                        <line stroke-miterlimit="10" x1="119.729" y1="34.013" x2="198.406" y2="34.013"/>
                    </svg>
                        </div>
                </div>
            </div>
                <div class="row margin-top">
                    <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <img src="<?php bloginfo('template_url')?>/img/gestion.jpg" alt="Konkura Consultores" class="img-responsive center-block margin-bottom">
                       <div class="content-empresarial">
                            <?php $loop = new WP_Query(array( 'post_type' => 'course', 'course_category' => 'gestion'));
                           if($loop->have_posts()): ?>
                           <h4><?php $terms = wp_get_object_terms( $loop->post->ID,  'course_category' );
print_r($terms[0]->name); ?></h4>
                           <ul>
                   <?php while($loop->have_posts()) : $loop->the_post(); ?>
                            <li>
                                <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                            </li>
                            <?php
                                endwhile;
                                endif;
                                wp_reset_postdata();
                            ?>
                            </ul>
                            <svg version="1.1" class="green-bottom" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 width="100%" height="auto" viewBox="0 0 200 70" preserveAspectRatio="none">
                        <polygon points="90.661,29.56 110.204,29.56 100.433,40.941 "/>
                        <line stroke-miterlimit="10" x1="1.593" y1="34.013" x2="80.269" y2="34.013"/>
                        <line stroke-miterlimit="10" x1="119.729" y1="34.013" x2="198.406" y2="34.013"/>
                    </svg>
                        </div>
                </div>
                <div class="col-sm-4">
                    <img src="<?php bloginfo('template_url')?>/img/clientes.jpg" alt="Konkura Consultores" class="img-responsive center-block margin-bottom">
                       <div class="content-empresarial">
                            <?php $loop = new WP_Query(array( 'post_type' => 'course', 'course_category' => 'clientes'));
                           if($loop->have_posts()): ?>
                           <h4><?php $terms = wp_get_object_terms( $loop->post->ID,  'course_category' );
print_r($terms[0]->name); ?></h4>
                           <ul>
                   <?php while($loop->have_posts()) : $loop->the_post(); ?>
                            <li>
                                <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                            </li>
                            <?php
                                endwhile;
                                endif;
                                wp_reset_postdata();
                            ?>
                            </ul>
                            <svg version="1.1" class="gray-bottom" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 width="100%" height="auto" viewBox="0 0 200 70" preserveAspectRatio="none">
                        <polygon points="90.661,29.56 110.204,29.56 100.433,40.941 "/>
                        <line stroke-miterlimit="10" x1="1.593" y1="34.013" x2="80.269" y2="34.013"/>
                        <line stroke-miterlimit="10" x1="119.729" y1="34.013" x2="198.406" y2="34.013"/>
                    </svg>
                        </div>
                </div>
                <div class="col-sm-2"></div>
                </div>
        </div>
    </div>
    <!-- END CONTENT -->
    <!-- BEGIN DUDAS -->
           <div class="jumbotron bg-yellow margin-bottom">
              <svg version="1.1" class="triangle-white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 width="100%" height="auto" viewBox="0 0 90.012 38" preserveAspectRatio="none">
                  <polygon points="0.641,0 89.141,0 44.891,38 "/>
            </svg>
               <div class="container cintillo">
                   <div class="row padding-tb">
                       <div class="col-sm-12">
                           <h2><?php echo CFS()->get('texto_cintillo'); ?></h2>
                       </div>
                   </div>
               </div>
           </div>
    <!-- END DUDAS -->
<?php get_footer(); ?>