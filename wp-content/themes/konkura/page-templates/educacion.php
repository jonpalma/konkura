<?php

/* Template Name: Educación */
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
                      <div class="row head-blue">
                          <svg version="1.1" class="triangle-white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 width="100%" height="auto" viewBox="0 0 90.012 38" preserveAspectRatio="none">
                                  <polygon points="0.641,0 89.141,0 44.891,38 "/>
                            </svg>
                          <h2><?php echo CFS()->get('academica'); ?></h2>
                      </div>
                          <div class="top-arrow">
                             <div class="content-cursos">
                                 <h4><?php echo CFS()->get('academica1'); ?></h4>
                                 <?php echo CFS()->get('academica1_texto'); ?>
                             </div>
                          </div>
                              <div class="top-arrow">
                                <div class="content-cursos">
                                    <h4><?php echo CFS()->get('academica2'); ?></h4>
                                    <?php echo CFS()->get('academica2_texto'); ?>
                                </div> 
                             </div>
                              <div class="top-arrow">
                                <div class="content-cursos">
                                    <h4><?php echo CFS()->get('academica3'); ?></h4>
                                    <?php echo CFS()->get('academica3_texto'); ?>
                                    <svg version="1.1" class="teal-bottom" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 width="100%" height="auto" viewBox="0 0 200 70" preserveAspectRatio="none">
                                        <polygon points="90.661,29.56 110.204,29.56 100.433,40.941 "/>
                                        <line stroke-miterlimit="10" x1="1.593" y1="34.013" x2="80.269" y2="34.013"/>
                                        <line stroke-miterlimit="10" x1="119.729" y1="34.013" x2="198.406" y2="34.013"/>
                                    </svg>
                              </div>
                             </div>
                </div>
                <div class="col-sm-4">
                       <div class="row head-blue">
                          <svg version="1.1" class="triangle-white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 width="100%" height="auto" viewBox="0 0 90.012 38" preserveAspectRatio="none">
                                  <polygon points="0.641,0 89.141,0 44.891,38 "/>
                            </svg>
                          <h2><?php echo CFS()->get('institucional'); ?></h2>
                      </div>
                          <div class="content-cursos">
                             <div class="top-arrow">
                                 <h4><?php echo CFS()->get('insitucional1'); ?></h4>
                             </div>
                              <?php echo CFS()->get('institucional1_texto'); ?>
                              <svg version="1.1" class="teal-bottom" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 width="100%" height="auto" viewBox="0 0 200 70" preserveAspectRatio="none">
                        <polygon points="90.661,29.56 110.204,29.56 100.433,40.941 "/>
                        <line stroke-miterlimit="10" x1="1.593" y1="34.013" x2="80.269" y2="34.013"/>
                        <line stroke-miterlimit="10" x1="119.729" y1="34.013" x2="198.406" y2="34.013"/>
                    </svg>
                          </div>
                </div>
                <div class="col-sm-4">
                      <div class="row head-blue">
                          <svg version="1.1" class="triangle-white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 width="100%" height="auto" viewBox="0 0 90.012 38" preserveAspectRatio="none">
                                  <polygon points="0.641,0 89.141,0 44.891,38 "/>
                            </svg>
                          <h2><?php echo CFS()->get('institucional'); ?></h2>
                      </div>
                          <div class="content-cursos">
                             <div class="top-arrow">
                                 <h4><?php echo CFS()->get('insitucional1'); ?></h4>
                             </div>
                              <?php echo CFS()->get('institucional1_texto'); ?>
                              <svg version="1.1" class="teal-bottom" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 width="100%" height="auto" viewBox="0 0 200 70" preserveAspectRatio="none">
                        <polygon points="90.661,29.56 110.204,29.56 100.433,40.941 "/>
                        <line stroke-miterlimit="10" x1="1.593" y1="34.013" x2="80.269" y2="34.013"/>
                        <line stroke-miterlimit="10" x1="119.729" y1="34.013" x2="198.406" y2="34.013"/>
                    </svg>
                          </div>
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