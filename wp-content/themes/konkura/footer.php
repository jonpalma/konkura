<footer>
   <div class="container footer-black">
       <div class="row">
          <div class="col-sm-3">
              <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer1')) : endif; ?>
          </div>
          <div class="col-sm-3">
              <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer2')) : endif; ?>
          </div>
          <div class="col-sm-3">
              <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer3')) : endif; ?>
          </div>
          <div class="col-sm-3 contacto">
              <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer4')) : endif; ?>
          </div>
           <div class="clearfix"></div>
       </div>
   </div>
   <div class="footer-rights">
       <h6>Todos los derechos reservados KONKURA 2015 | Design by: <a href="http://mixen.mx"><img src="http://mixen.mx/firma/logo-mixen.png" alt="Agencia Mixen"> mixen.mx</a></h6>
   </div>
   <br />
    <script src="<?php bloginfo('template_url')?>/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/modernizr.custom.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="<?php bloginfo('template_url')?>/js/googleMapInit.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/smoothscroll.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/classie.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/overlay.js"></script>
    <script type="text/javascript">
            $(document).ready(function(){
                $("#myCarousel").carousel();
                $('body').scrollspy();
                $('.value').hover(function() {
                    $('.init', this).hide();
                    $('.second', this).show();
                }, function() {
                    $('.second', this).hide();
                    $('.init', this).show();
                });
                $("a.overlay-ajax").click(function(){
                    var url = $(this).attr("href");
                    $(".overlay-section").load(url + ' #transmitter');
                    return false;
                });
            });
    </script>
    <?php wp_footer();?>
</footer>
</body>
</html>