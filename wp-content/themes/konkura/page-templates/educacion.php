<?php

/* Template Name: Educación */
    get_header(); 
?>
<!-- BEGIN/MODAL SECTION -->
        <div class="container overlay overlay-slidedown">
            <div class="row">
                <div class="overlay-section"></div>
                <div class="col-md-12 ">
                    <button class="overlay-close btn-gray center-block margin-bottom">Regresar</button>
                </div>
            </div>
        </div><!-- the overlay element -->
<!-- END/MODAL SECTION -->
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
    <?php 
        $taxonomy = 'course_category';
    ?>
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
                      <div class="head-blue">
                         <?php
                            if(term_exists('academica', $taxonomy)) {
                                $academica = get_term_by('slug', 'academica', $taxonomy);
                          ?>
                          <svg version="1.1" class="triangle-white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 width="100%" height="auto" viewBox="0 0 90.012 38" preserveAspectRatio="none">
                                  <polygon points="0.641,0 89.141,0 44.891,38 "/>
                            </svg>
                          <h2>Gestión <?php echo $academica->name; ?></h2>
                      </div>
                                <?php
                                    $term_children = get_term_children(intval($academica->term_id), $taxonomy);
                                    $i = 0;
                                    $len = count($term_children);
                                    foreach($term_children as $child) { ?>
                        <div class="top-arrow-blue">
                             <div class="content-cursos">
                                <?php
                                        $term = get_term_by( 'id', $child, $taxonomy );
                                        $i++;                    
                                 $loop = new WP_Query(array( 'post_type' => 'course', $taxonomy => $term->slug));
                           ?>
                               <h4><?php echo $term->name; ?></h4>
                               <ul>
                       <?php if($loop->have_posts()) : while($loop->have_posts()) : $loop->the_post(); ?>
                                <li>
                                    <a href="<?php the_permalink();?>" class="overlay-ajax trigger-overlay" data-modal="modal"><?php the_title(); ?></a>
                                </li>
                                <?php
                                        endwhile;
                                        endif;
                                        wp_reset_postdata();
                                        ?>
                                </ul>
                                <?php
                                        if($i == $len) {
                                        ?>
                                            <svg version="1.1" class="blue-bottom" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 width="100%" height="auto" viewBox="0 0 200 70" preserveAspectRatio="none">
                                            <polygon points="90.661,29.56 110.204,29.56 100.433,40.941 "/>
                                            <line stroke-miterlimit="10" x1="1.593" y1="34.013" x2="80.269" y2="34.013"/>
                                            <line stroke-miterlimit="10" x1="119.729" y1="34.013" x2="198.406" y2="34.013"/>
                                        </svg>
                                        <?php } ?>
                             </div>
                          </div>
                              <?php
                                        }  
                                } 
                            ?>
                </div>
                <div class="col-sm-4">
                       <div class="head-green">
                         <?php
                            if(term_exists('institucional', $taxonomy)) {
                                $institucional = get_term_by('slug', 'institucional', $taxonomy);
                          ?>
                          <svg version="1.1" class="triangle-white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 width="100%" height="auto" viewBox="0 0 90.012 38" preserveAspectRatio="none">
                                  <polygon points="0.641,0 89.141,0 44.891,38 "/>
                            </svg>
                          <h2>Gestión <?php echo $institucional->name; ?></h2>
                      </div>
                                <?php
                                    $term_children = get_term_children(intval($institucional->term_id), $taxonomy);
                                    $i = 0;
                                    $len = count($term_children);
                                    foreach($term_children as $child) { ?>
                        <div class="top-arrow-green">
                             <div class="content-cursos">
                                <?php
                                        $term = get_term_by( 'id', $child, $taxonomy );
                                        $i++;                    
                                 $loop = new WP_Query(array( 'post_type' => 'course', $taxonomy => $term->slug));
                           ?>
                               <h4><?php echo $term->name; ?></h4>
                               <ul>
                       <?php if($loop->have_posts()) : while($loop->have_posts()) : $loop->the_post(); ?>
                                <li>
                                    <a href="<?php the_permalink();?>" class="overlay-ajax trigger-overlay" data-modal="modal"><?php the_title(); ?></a>
                                </li>
                                <?php
                                        endwhile;
                                        endif;
                                        wp_reset_postdata();
                                        ?>
                                </ul>
                                <?php
                                        if($i == $len) {
                                        ?>
                                            <svg version="1.1" class="lime-bottom" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 width="100%" height="auto" viewBox="0 0 200 70" preserveAspectRatio="none">
                                            <polygon points="90.661,29.56 110.204,29.56 100.433,40.941 "/>
                                            <line stroke-miterlimit="10" x1="1.593" y1="34.013" x2="80.269" y2="34.013"/>
                                            <line stroke-miterlimit="10" x1="119.729" y1="34.013" x2="198.406" y2="34.013"/>
                                        </svg>
                                        <?php } ?>
                             </div>
                          </div>
                              <?php
                                        }  
                                } 
                            ?>
                </div>
                <div class="col-sm-4">
                      <div class="head-yellow">
                         <?php
                            if(term_exists('escolar', $taxonomy)) {
                                $escolar = get_term_by('slug', 'escolar', $taxonomy);
                          ?>
                          <svg version="1.1" class="triangle-white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 width="100%" height="auto" viewBox="0 0 90.012 38" preserveAspectRatio="none">
                                  <polygon points="0.641,0 89.141,0 44.891,38 "/>
                            </svg>
                          <h2>Gestión <?php echo $escolar->name; ?></h2>
                      </div>
                                <?php
                                    $term_children = get_term_children(intval($escolar->term_id), $taxonomy);
                                    $i = 0;
                                    $len = count($term_children);
                                    foreach($term_children as $child) { ?>
                        <div class="top-arrow">
                             <div class="content-cursos">
                                <?php
                                        $term = get_term_by( 'id', $child, $taxonomy );
                                        $i++;                    
                                 $loop = new WP_Query(array( 'post_type' => 'course', $taxonomy => $term->slug));
                           ?>
                               <h4><?php echo $term->name; ?></h4>
                               <ul>
                       <?php if($loop->have_posts()) : while($loop->have_posts()) : $loop->the_post(); ?>
                                <li>
                                    <a href="<?php the_permalink();?>" class="overlay-ajax trigger-overlay" data-modal="modal"><?php the_title(); ?></a>
                                </li>
                                <?php
                                        endwhile;
                                        endif;
                                        wp_reset_postdata();
                                        ?>
                                </ul>
                                <?php
                                        if($i == $len) {
                                        ?>
                                            <svg version="1.1" class="yellow-bottom" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 width="100%" height="auto" viewBox="0 0 200 70" preserveAspectRatio="none">
                                            <polygon points="90.661,29.56 110.204,29.56 100.433,40.941 "/>
                                            <line stroke-miterlimit="10" x1="1.593" y1="34.013" x2="80.269" y2="34.013"/>
                                            <line stroke-miterlimit="10" x1="119.729" y1="34.013" x2="198.406" y2="34.013"/>
                                        </svg>
                                        <?php } ?>
                             </div>
                          </div>
                              <?php
                                        }  
                                } 
                            ?>
                </div>
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