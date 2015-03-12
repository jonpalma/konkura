<?php include('/modules/header.php'); ?>
<!-- BEGIN HEADING -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="center-block">
                    <h1>Nosotros</h1>
                    <svg></svg>
                </div>
            </div>
        </div>
    </div>
    <!-- END HEADING -->
    <!-- BEGIN CONTENT -->
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <address>
                  <h4>Dirección:</h4>
                   KONKURA Calle 22 #181, Col. Sta. Rita, C.P.31020<br />
                   Tel. 614 4100494<br />
                   Chihuahua, Chih.
               </address>
                </div>
                <div class="col-sm-4">
                    <div class="left_arrow">
                       <img src="img/flechita.png" alt="yellow arrow" class="img-responsive yellow_left_arrow">
                        <img src="img/nosotros.jpg" alt="Konkura Consultores" class="img-responsive">
                    </div>
                </div>
                <div class="col-sm-8">
                    <form action="" class="form-horizontal">
                           <div class="form-group">
                               <div class="col-sm-6">
                                   <label for="contacto_nombre" class="control-label">Nombre:</label>
                                   <input type="text" class="form-control" id="contacto_nombre">
                               </div>
                               <div class="col-sm-6">
                                   <label for="contacto_empresa" class="control-label">Empresa:</label>
                                   <input type="text" class="form-control" id="contacto_empresa">
                               </div>  
                           </div>
                           <div class="form-group">
                               <div class="col-sm-6">
                                   <label for="contacto_email" class="control-label">Email:</label>
                                   <input type="email" class="form-control" id="contacto_email">
                               </div>
                               <div class="col-sm-6">
                                   <label for="contacto_telefono" class="control-label">Teléfono:</label>
                                   <input type="text" class="form-control" id="contacto_telefono">
                               </div>
                           </div>
                           <div class="form-group">
                               <div class="col-sm-12">
                                   <div class="col-sm-12">
                                       <label for="contacto_mensaje" class="control-label">Mensaje:</label>
                                   </div>
                                   <textarea name="" id="" cols="30" rows="10"></textarea>
                               </div>
                           </div>
                           <div class="pull-left">
                            <button type="submit" id="sendBttn" class="">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT -->
    <!-- BEGIN MAP -->
    <div class="container-fluid" id="googleMap"></div>      
    <!-- END MAP -->
    <!-- BEGIN SOCIAL -->
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Siguenos en:</h2>
                    <ul class="center-block">
                        <li><a href=""><img src="img/social/fb.jpg" alt="Facebook" class="img-responsive"></a></li>
                        <li><a href=""><img src="img/social/yt.jpg" alt="Youtube" class="img-responsive"></a></li>
                        <li><a href=""><img src="img/social/insta.jpg" alt="Instagram" class="img-responsive"></a></li>
                        <li><a href=""><img src="img/social/twt.jpg" alt="Twitter" class="img-responsive"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END SOCIAL -->
<?php include('/modules/footer.php'); ?>