<?php 

/* Template Name: Capacitación */
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
        $term = term_exists('capacitacion-empresarial', $taxonomy);
        $term_id = 0;
        $term_children = null;
        if ($term !== 0 && $term !== null) {
            $term_id = $term[term_id];
            $term_children = get_term_children($term_id, $taxonomy);
        } 
    ?>
    <div class="jumbotron bg-white">
        <div class="container content">
            <div class="row">
                <h2>Cursos y talleres por áreas de especialidad</h2>
                <hr />
                <?php 
                        foreach($term_children as $child) {
                                        $cat = get_term_by('id', $child, $taxonomy);
                                    $loop = new WP_Query(array( 'post_type' => 'course', $taxonomy => $cat->slug));
                ?>
                <div class="col-sm-3 margin-bottom">
                   <div class="top-arrow">
                       <div class="content-cursos">
                            <h4><?php echo $cat->name; ?></h4>
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
                            <svg version="1.1" class="yellow-bottom" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 width="100%" height="auto" viewBox="0 0 200 70" preserveAspectRatio="none">
                        <polygon points="90.661,29.56 110.204,29.56 100.433,40.941 "/>
                        <line stroke-miterlimit="10" x1="1.593" y1="34.013" x2="80.269" y2="34.013"/>
                        <line stroke-miterlimit="10" x1="119.729" y1="34.013" x2="198.406" y2="34.013"/>
                    </svg>
                        </div>
                   </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
<!-- END CONTENT -->
<!-- BEGIN MODELS -->
<div class="jumbotron bg-yellow">
    <div class="container models">
        <div class="row">
            <svg version="1.1" class="triangle-white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 width="100%" height="auto" viewBox="0 0 90.012 38" preserveAspectRatio="none">
                  <polygon points="0.641,0 89.141,0 44.891,38 "/>
            </svg>
            <h2 class="center">Modalidades de capacitación</h2>
            <div class="col-sm-4">
               <div class="col-sm-12">
                  <a href="#top" class="smoothScroll">
                      <img src="<?php bloginfo('template_url')?>/img/presencial.jpg" alt="Presencial" class="img-responsive img-border">
                  </a>
               </div>
               <div class="col-sm-12">
                   <h6>Presencial</h6>
               </div>
            </div>
            <div class="col-sm-4">
                <div class="col-sm-12">
                  <a href="http://www.konkura.com.mx/virtual">
                      <img src="<?php bloginfo('template_url')?>/img/b-learning.jpg" alt="B-learning" class="img-responsive img-border">
                  </a>
               </div>
                <div class="col-sm-12">
                   <h6>B-Learning</h6>
               </div>
            </div>
            <div class="col-sm-4">
                <div class="col-sm-12">
                  <a href="http://www.konkura.com.mx/virtual">
                      <img src="<?php bloginfo('template_url')?>/img/e-learning.jpg" alt="E-learning" class="img-responsive img-border">
                  </a>
               </div>
                <div class="col-sm-12">
                   <h6>E-Learning</h6>
               </div>
            </div>
        </div>
    </div>
</div>
<!-- END MODELS -->
<!-- BEGIN VALUES -->
<div class="jumbotron bg-white">
    <div class="container values">
        <div class="row">
            <h2>Nuestro valor agregado</h2>
            <h5>¿Qué nos hace diferentes?</h5>
            <div class="row margin-bottom">
                <div class="col-sm-3">
                    <div class="col-sm-4">
                        <img src="<?php bloginfo('template_url')?>/img/capacitacion/1.png" alt="konkura" class="img-responsive">
                    </div>
                    <div class="col-sm-8">
                        <h4><?php echo CFS()->get('valor1_header'); ?></h4>
                        <p><?php echo CFS()->get('valor1'); ?></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="col-sm-4">
                        <img src="<?php bloginfo('template_url')?>/img/capacitacion/2.png" alt="konkura" class="img-responsive">
                    </div>
                    <div class="col-sm-8">
                        <h4><?php echo CFS()->get('valor2_header'); ?></h4>
                        <p><?php echo CFS()->get('valor2'); ?></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="col-sm-4">
                        <img src="<?php bloginfo('template_url')?>/img/capacitacion/3.png" alt="konkura" class="img-responsive">
                    </div>
                    <div class="col-sm-8">
                        <h4><?php echo CFS()->get('valor3_header'); ?></h4>
                        <p><?php echo CFS()->get('valor3'); ?></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="col-sm-4">
                        <img src="<?php bloginfo('template_url')?>/img/capacitacion/4.png" alt="konkura" class="img-responsive">
                    </div>
                    <div class="col-sm-8">
                        <h4><?php echo CFS()->get('valor4_header'); ?></h4>
                        <p><?php echo CFS()->get('valor4'); ?></p>
                    </div>
                </div>
            </div>
            <div class="row margin-bottom">
                <div class="col-sm-3">
                    <div class="col-sm-4">
                        <img src="<?php bloginfo('template_url')?>/img/capacitacion/5.png" alt="konkura" class="img-responsive">
                    </div>
                    <div class="col-sm-8">
                        <h4><?php echo CFS()->get('valor5_header'); ?></h4>
                        <p><?php echo CFS()->get('valor5'); ?></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="col-sm-4">
                        <img src="<?php bloginfo('template_url')?>/img/capacitacion/6.png" alt="konkura" class="img-responsive">
                    </div>
                    <div class="col-sm-8">
                        <h4><?php echo CFS()->get('valor6_header'); ?></h4>
                        <p><?php echo CFS()->get('valor6'); ?></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="col-sm-4">
                        <img src="<?php bloginfo('template_url')?>/img/capacitacion/7.png" alt="konkura" class="img-responsive">
                    </div>
                    <div class="col-sm-8">
                        <h4><?php echo CFS()->get('valor7_header'); ?></h4>
                        <p><?php echo CFS()->get('valor7'); ?></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="col-sm-4">
                        <img src="<?php bloginfo('template_url')?>/img/capacitacion/8.png" alt="konkura" class="img-responsive">
                    </div>
                    <div class="col-sm-8">
                        <h4><?php echo CFS()->get('valor8_header'); ?></h4>
                        <p><?php echo CFS()->get('valor8'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END VALUES -->
<?php get_footer(); ?>