<?php get_header(); ?>
<!-- BEGIN HEADING -->
    <div class="container-fluid bg-yellow heading-title">
        <div class="row">
            <div class="col-sm-12">
                <div class="heading center-block">
                    <h1><?php single_term_title(); ?></h1>
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
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
           <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
             <div class="col-sm-12 blog-section">
                 <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                 <a href="<?php the_permalink();?>"><?php if (has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); }?></a>
                 <p><?php echo get_excerpt(); ?></p>
                 <a href="<?php the_permalink();?>" class="btn btn-yellow">Ver más</a>
             </div>

          <?php endwhile; else: ?>
          <h1>No se encontraron articulos</h1>
          <?php endif; ?>
                  <div class="col-sm-12 margin-top">
                    <div class="col-sm-6"><?php previous_posts_link('&lt; Anterior')?></div>
                    <div class="col-sm-6 text-right"><?php next_posts_link('Siguiente &gt;')?></div>
                  </div>
             </div>
            <div class="col-sm-4 sidebar">
                <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar')) : endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- END CONTENT -->
<?php get_footer(); ?>