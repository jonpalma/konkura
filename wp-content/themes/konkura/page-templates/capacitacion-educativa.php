<?php 

/* Template Name: Capacitación Educativa */
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
        $term = term_exists('capacitacion-educativa', $taxonomy);
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
               <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="col-sm-12">
                        <?php the_content();  ?>
                <?php endwhile; else: ?>
                 <h2>No se encontraron articulos</h2>
              <?php endif; ?>
                    <hr />
                </div>
                <?php 
                        foreach($term_children as $child) {
                                        $cat = get_term_by('id', $child, $taxonomy);
                                    $loop = new WP_Query(array( 'post_type' => 'course', $taxonomy => $cat->slug));
                ?>
                <div class="col-sm-4 margin-bottom">
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