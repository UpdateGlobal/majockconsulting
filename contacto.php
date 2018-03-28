<!doctype html>
<html class="no-js" lang="">

<?
include 'include/head.php'
?>

<body>
    
    <!--  Header Area Start Here -->
    <?
include 'include/header.php'
?>
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
    <!-- Contact Form Page start Here -->
    <div class="main-conatct-form-area">
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
                            <h3>Contáctanos</h3>
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
    <?
    include 'include/footer.php'
    ?>
    
    <!-- all js here -->
    <!-- jquery latest version -->
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Owl Cauosel JS -->
    <script src="vendor/OwlCarousel/owl.carousel.min.js" type="text/javascript"></script>
    <!-- Nivo slider js -->
    <script src="lib/custom-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="lib/custom-slider/home.js" type="text/javascript"></script>
    <!-- meanmenu js -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- jquery-ui js -->
    <script src="js/jquery-ui.min.js"></script>
    <!-- wow js -->
    <script src="js/wow.min.js"></script>
    <!-- jquery.scrollUp js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Cycle 2 slider js -->
    <script src="js/cycle2.js"></script>
    <script src="js/jquery.cycle2.carousel.js"></script>
    <!-- knob circle js -->
    <script src="js/jquery.knob.js"></script>
    <!-- jquery.appear js -->
    <script src="js/jquery.appear.js"></script>
    <!-- Isotope js -->
    <script src="js/isotope.pkgd.js"></script>
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgREM8KO8hjfbOC0R_btBhQsEQsnpzFGQ"></script>
    <!-- Validator js -->
    <script src="js/validator.min.js" type="text/javascript"></script>
    <!-- main js -->
    <script src="js/main.js"></script>
</body>

</html>
