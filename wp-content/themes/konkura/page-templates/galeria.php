<?php 

/* Template Name: Galeria */
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
<!-- BEGIN GALLERY -->
<div class="jumbotron bg-white">
    <div class="container gallery">
        <div class="row">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                          <?php the_content(); ?>

            <?php endwhile; else: ?>
                     <h1>No se encontraron articulos</h1>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- END GALLERY -->
<?php get_footer(); ?>