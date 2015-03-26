<?php include('modules/header.php'); ?>
<!-- BEGIN HEADING -->
    <div class="container-fluid bg-yellow heading-title">
        <div class="row">
            <div class="col-sm-12">
                <div class="heading center-block">
                    <h1>Contactanos</h1>
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
                    <address>
                       Dirección:<br /><br />
                       KONKURA Calle 22 #181, Col. Sta. Rita, C.P.31020<br />
                       Tel. 614 4100494<br />
                       Chihuahua, Chih.
                    </address>
               <hr />
                </div>
                <div class="col-sm-4">
                    <div class="left-arrow">
                       <div class="yellow-left-arrow">
                           <img src="img/contacto.jpg" alt="Konkura Consultores" class="img-responsive">
                       </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <form action="" class="form-horizontal">
                           <div class="form-group">
                               <div class="col-sm-6">
                                   <label for="contacto_nombre" class="control-label">Nombre:</label>
                                   <input type="text" class="form-control form-textfield" id="contacto_nombre">
                               </div>
                               <div class="col-sm-6">
                                   <label for="contacto_empresa" class="control-label">Empresa:</label>
                                   <input type="text" class="form-control form-textfield" id="contacto_empresa">
                               </div>  
                           </div>
                           <div class="form-group">
                               <div class="col-sm-6">
                                   <label for="contacto_email" class="control-label">Email:</label>
                                   <input type="email" class="form-control form-textfield" id="contacto_email">
                               </div>
                               <div class="col-sm-6">
                                   <label for="contacto_telefono" class="control-label">Teléfono:</label>
                                   <input type="text" class="form-control form-textfield" id="contacto_telefono">
                               </div>
                           </div>
                           <div class="form-group">
                               <div class="col-sm-12">
                                       <label for="contacto_mensaje" class="control-label">Mensaje:</label>
                                   <textarea class="form-textarea" name="" id="contacto_mensaje" cols="30" rows="10"></textarea>
                               </div>
                           </div>
                           <div class="pull-left">
                            <button type="submit" id="sendBttn" class="btn btn-yellow">Enviar</button>
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
    <div class="jumbotron bg-white margin-top">
        <div class="container socials">
            <div class="row">
                <div class="col-sm-12">
                   <div class="social-heading">
                       <h2>Siguenos en:</h2>
                       <hr />
                   </div>
                    <ul>
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
<?php include('modules/footer.php'); ?>