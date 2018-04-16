<!doctype html>
<html class="no-js" lang="">

<?
include 'include/head.php'
?>

<body>
    <!--  Header Area Start Here -->
    <? include 'include/header.php' ?>
    <!--  Header Area End Here -->
    <!-- Header Banner Area section Start Here -->
    <div class="header-banner-area">
        <div class="container">
            <div class="row">
                <div class="header-banner">
                    <h1>Contáctanos</h1>
                    <ul>
                        <li><a href="index.html">Inicio</a></li>
                        <li>/ Contacto</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Banner Area section End Here -->

    <!-- Main Contact Page Section Area start here-->
    <div class="main-contact-page-area">
        <!-- Google Map Integrate Start Here -->
        <div class="google-map-area">
            <div class="container">
                <div id="googleMap" style="width:100%;height:450px;"></div>
            </div>
        </div>
        <div class="clearfix"></div>
        <!-- Google Map Integrate End Here -->
    </div>
    <br><br>
    <div class="homepage-our-service-area">
        <div class="container">
            <div class="page-sidebar-area">
                <div class="single-sidebar">
                    <h3>Contáctanos</h3>
                    <p>Bríndanos tus datos y te contactaremos</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form Page start Here -->
    <div class="main-conatct-form-area" style="padding:15px 0 80px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="main-contact-form contact-form">
                        <form id='contact-form' role="form">
                            <fieldset>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Nombres y Apellidos*" class="form-control" id="form-name" data-error="Name field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Razón Social" class="form-control" id="form-empresa" data-error="Empresa field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Celular*" class="form-control" id="form-celular" data-error="celular field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" placeholder="Email*" class="form-control" id="form-email" data-error="Email field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea placeholder="¿Cómo podemos ayudarte?*" class="textarea form-control" id="form-message" rows="8" cols="20" data-error="Message field is required" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <button type="submit" class="btn-read-more-fill btn-send">Contactarme</button>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class='form-response'></div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="page-sidebar-area">
                        <div class="single-sidebar">
                            <h3>Nuestros Datos</h3>
                            <nav>
                                <ul>
                                    <li><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Calle Manco Segundo 2462 Ofic. 401, Lima - Perú</li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i> (511) 111-252-3333</li>
                                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i> info@majock.com</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form Page start Here -->
    <!-- Main Contact Page Section Area End here-->
    
    <!-- FOOTER -->
    <? include 'include/footer.php' ?>
    <? include 'include/scripts.php' ?>
</body>
</html>