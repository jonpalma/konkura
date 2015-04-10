<?php 

/* Template Name: Forma de trabajo */
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
    <div class="container work margin-top">
        <div class="row padding-tb">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                          <?php the_content(); ?>

            <?php endwhile; else: ?>
                     <h1>No se encontraron articulos</h1>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- END CONTENT -->
<!-- BEGIN RIBBON -->
<div class="jumbotron bg-img-cursos">
    <div class="container">
        <div class="row">
            <svg version="1.1" class="triangle-white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 width="100%" height="auto" viewBox="0 0 90.012 38" preserveAspectRatio="none">
                  <polygon points="0.641,0 89.141,0 44.891,38 "/>
            </svg>
            <h3 class="text-center padding-tb"><?php echo CFS()->get('texto_banner'); ?></h3>
        </div>
    </div>
</div>
<!-- END RIBBON -->
<!-- BEGIN METODOLOGY -->
<div class="jumbotron bg-white">
    <div class="container metodology">
        <div class="row">
            <h2>Metodología</h2>
            <div class="col-sm-12" role="tabpanel">
                <div class="col-sm-4">
                     <ul class="nav nav-pills nav-stacked metodology-tab" role="tablist">
                        <li role="presentation" class="active">
                            <a id="diagnostic-pill" href="#diagnostic" aria-controls="diagnostic" role="tab" data-toggle="tab">
                                1. <?php echo CFS()->get('paso_1'); ?>
                            </a>
                        </li>
                        <li role="presentation"><a id="design-pill" href="#design" aria-controls="design" role="tab" data-toggle="tab">2. <?php echo CFS()->get('paso_2'); ?></a></li>
                        <li role="presentation"><a id="implement-pill" href="#implement" aria-controls="implement" role="tab" data-toggle="tab">3. <?php echo CFS()->get('paso_3'); ?></a></li>
                        <li role="presentation"><a id="measure-pill" href="#measure" aria-controls="measure" role="tab" data-toggle="tab">4. <?php echo CFS()->get('paso_4'); ?></a></li>
                        <li role="presentation"><a id="results-pill" href="#results" aria-controls="results" role="tab" data-toggle="tab">5. <?php echo CFS()->get('paso_5'); ?></a></li>
                     </ul>
                </div>
                <div class="col-sm-8">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="diagnostic">
                            <?php echo CFS()->get('texto_paso_1'); ?>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="design">
                            <?php echo CFS()->get('texto_paso_2'); ?>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="implement">
                            <?php echo CFS()->get('texto_paso_3'); ?>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="measure">
                            <?php echo CFS()->get('texto_paso_4'); ?>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="results">
                            <?php echo CFS()->get('texto_paso_5'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END METODOLOGY -->
<?php get_footer(); ?>