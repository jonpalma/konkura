<!DOCTYPE html>
<html lang="en">

<head>
    <title><? the_title(); ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="author" content="Agencia Mixen"/>
</head>
<body>
    <div id="transmitter">
        <section id="singlePageContent" class="white">
            <div class="container single-course">
                <!--content-->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="row bg-gray">
                    <div class="col-sm-12">
                        <div class="col-sm-2">
                            <a href="#" class="overlay-close center-block"><img src="<?php bloginfo('template_url')?>/img/return.png" alt="" class="img-responsive"></a>
                        </div>
                        <div class="col-sm-10">
                            <h2><? the_title(); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <div class="col-sm-12 bg-orange">
                            <h3>Requisitos</h3>
                        </div>
                        <div class="col-sm-2">
                            <img src="<?php bloginfo('template_url')?>/img/cursos/requisito1.png" alt="" class="img-responsive">
                        </div>
                        <div class="col-sm-10 requisitos">
                            <span>Dirigido a:</span>
                            <p><?php echo CFS()->get('dirigido'); ?></p>
                        </div>
                        <div class="col-sm-2">
                            <img src="<?php bloginfo('template_url')?>/img/cursos/requisito2.png" alt="" class="img-responsive">
                        </div>
                        <div class="col-sm-10 requisitos">
                            <span>Producto:</span>
                            <p><?php echo CFS()->get('producto'); ?></p>
                        </div>
                        <div class="col-sm-2">
                            <img src="<?php bloginfo('template_url')?>/img/cursos/requisito3.png" alt="" class="img-responsive">
                        </div>
                        <div class="col-sm-10 requisitos">
                            <span>Duración:</span>
                            <p><?php echo CFS()->get('duracion'); ?></p>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-5">
                        <div class="col-sm-12 bg-orange">
                            <h3>Resultado del aprendizaje</h3>
                        </div>
                        <div class="col-sm-2">
                            <img src="<?php bloginfo('template_url')?>/img/cursos/aprendizaje1.png" alt="" class="img-responsive">
                        </div>
                        <div class="col-sm-10">
                            <p><?php echo CFS()->get('resultado1'); ?></p>
                        </div>
                        <div class="col-sm-2">
                            <img src="<?php bloginfo('template_url')?>/img/cursos/aprendizaje2.png" alt="" class="img-responsive">
                        </div>
                        <div class="col-sm-10">
                            <p><?php echo CFS()->get('resultado2'); ?></p>
                        </div>
                        <div class="col-sm-2">
                            <img src="<?php bloginfo('template_url')?>/img/cursos/aprendizaje3.png" alt="" class="img-responsive">
                        </div>
                        <div class="col-sm-10">
                            <p><?php echo CFS()->get('resultado3'); ?></p>
                        </div>
                        <div class="col-sm-2">
                            <img src="<?php bloginfo('template_url')?>/img/cursos/aprendizaje4.png" alt="" class="img-responsive">
                        </div>
                        <div class="col-sm-10">
                            <p><?php echo CFS()->get('resultado4'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <div class="col-sm-12 bg-orange">
                            <h3>Metodología</h3>
                        </div>
                        <div class="col-sm-12">
                            <p><?php echo CFS()->get('metodologia'); ?></p>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-5">
                        <div class="col-sm-12 bg-orange">
                            <h3>Contacto</h3>
                        </div>
                        <div class="col-sm-12">
                            <p><?php echo CFS()->get('contacto'); ?></p>
                        </div>
                    </div>
                </div>
                <!--end content-->
                <?php endwhile; else: ?>
                    <h1>No se encontraron articulos</h1>
                <?php endif; ?>
            </div><!-- /container -->
        </section>
        <!--end section-->
    </div>
    <script src="js/overlay.js"></script>
</body>
</html>