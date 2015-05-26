<?php 

/* Template Name: Nosotros */
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
            <div class="row">
                <div class="col-sm-12">
                    <h2>
                        <?php echo CFS()->get('header'); ?>
                    </h2>
                    <hr />
                </div>
                <div class="col-sm-4">
                    <div class="left-arrow">
                        <div class="yellow-left-arrow">
                           <img src="<?php bloginfo('template_url')?>/img/nosotros.jpg" alt="Konkura Consultores" class="img-responsive">
                       </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                          <?php the_content(); ?>

                    <?php endwhile; else: ?>
                     <h1>No se encontraron articulos</h1>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT -->
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
        <div class="container philosophy">
            <div class="row">
                <div class="col-sm-12 margin-bottom">
                    <h3>Filosofía</h3>
                </div>
                    <div class="col-sm-12">
                           <div class="value value-first-row">
                            <img src="<?php echo CFS()->get('filosofia_1_corto'); ?>" class="init img-responsive center-block">   
                            <p class="second">
                                <?php echo CFS()->get('filosofia_1_largo'); ?>
                            </p>
                        </div>
                        <div class="value">
                            <img src="<?php echo CFS()->get('filosofia_2_corto'); ?>" class="init img-responsive center-block">
                            <p class="second">
                                <?php echo CFS()->get('filosofia_2_largo'); ?>
                            </p>
                        </div>
                        <div class="value">
                            <img src="<?php echo CFS()->get('filosofia_3_corto'); ?>" class="init img-responsive center-block">
                            <p class="second">
                                <?php echo CFS()->get('filosofia_3_largo'); ?>
                            </p>
                        </div>
                        <div class="value">
                            <img src="<?php echo CFS()->get('filosofia_4_corto'); ?>" class="init img-responsive center-block">
                            <p class="second">
                                <?php echo CFS()->get('filosofia_4_largo'); ?>
                            </p>
                        </div>
                        <div class="value value-last">
                            <img src="<?php echo CFS()->get('filosofia_5_corto'); ?>" class="init img-responsive center-block">
                            <p class="second">
                                <?php echo CFS()->get('filosofia_5_largo'); ?>
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-sm-12">
                        <div class="value value-second-row">
                            <img src="<?php echo CFS()->get('filosofia_6_corto'); ?>" class="init img-responsive center-block">
                            <p class="second">
                                <?php echo CFS()->get('filosofia_6_largo'); ?>
                            </p>
                        </div>
                        <div class="value">
                            <img src="<?php echo CFS()->get('filosofia_7_corto'); ?>" class="init img-responsive center-block">
                            <p class="second">
                                <?php echo CFS()->get('filosofia_7_largo'); ?>
                            </p>
                        </div>
                        <div class="value">
                            <img src="<?php echo CFS()->get('filosofia_8_corto'); ?>" class="init img-responsive center-block">
                            <p class="second">
                                <?php echo CFS()->get('filosofia_8_largo'); ?>
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
            </div>
        </div>
    </div>
    <!-- END FILOSOFIA -->
    <!-- BEGIN SOCIAL -->
    <div class="jumbotron bg-white">
        <div class="container socials">
            <div class="row">
                <div class="col-sm-12">
                   <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Socials')) : endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- END SOCIAL -->    
<?php get_footer(); ?>