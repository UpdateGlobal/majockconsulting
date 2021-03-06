<?php include("cms/module/conexion.php"); ?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <?php include 'include/head.php' ?>
    <script>
        function sendContact() {
            var valid;
            valid = validateContact();
            if(valid) {
                jQuery.ajax({
                    url: "/contact_form.php",
                    data:'nombre='+$("#nombre").val()+'&razon_social='+$("#razon_social").val()+'&email='+$("#email").val()+'&telefono='+$("#telefono").val()+'&mensaje='+$("#mensaje").val()+'&fecha_ingreso='+$("#fecha_ingreso").val(),
                    type: "POST",
                    success:function(data){
                        $("#mail-status").html(data);
                    },
                    error:function (){}
                });
            }
        }

        function validateContact() {
            var valid = true;
            if(!$("#nombres").val()) {
                $("#nombres").css('background-color','#f2dede');
                valid = false;
            }
            if(!$("#email").val()) {
                $("#email").css('background-color','#f2dede');
                valid = false;
            }
            if(!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
                $("#email").css('background-color','#f2dede');
                valid = false;
            }
            if(!$("#telefono").val()) {
                $("#telefono").css('background-color','#f2dede');
                valid = false;
            }
            if(!$("#mensaje").val()) {
                $("#mensaje").css('background-color','#f2dede');
                valid = false;
            }
            return valid;
        }
    </script>

    <style>
        h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6{
        font-family:helvetica !important;
        }
    </style>

</head>
<body>
    <!--  Header Area Start Here -->
    <?php include 'include/header.php' ?>
    <!--  Header Area End Here -->
    <?php
        $consultarContenido = "SELECT * FROM contenidos WHERE cod_contenido='9'";
        $resultadoContenido = mysqli_query($enlaces,$consultarContenido) or die('Consulta fallida: ' . mysqli_error($enlaces));
        $filaCon = mysqli_fetch_array($resultadoContenido);
            $xCodigo   = $filaCon['cod_contenido'];
            $xImagen   = $filaCon['img_contenido'];
            $xEstado   = $filaCon['estado'];
    ?>
    <!-- Header Banner Area section Start Here -->
    <div class="header-banner-area" style="background: url(/cms/assets/img/nosotros/<?php echo $xImagen; ?>) no-repeat;">
        <div class="container">
            <div class="row">
                <div class="header-banner">
                    <h1>Contactanos</h1>
                    <ul>
                        <li><a href="/index.php">Inicio</a></li>
                        <li>/ Contacto</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php
        mysqli_free_result($resultadoContenido);
    ?>
    <!-- Header Banner Area section End Here -->

    <!-- Main Contact Page Section Area start here-->
    <div class="main-contact-page-area">
        <!-- Google Map Integrate Start Here -->
        <?php 
            $consultarCot = "SELECT * FROM contacto";
            $resultadoCot = mysqli_query($enlaces,$consultarCot) or die('Consulta fallida: ' . mysqli_error($enlaces));
            $filaCot  = mysqli_fetch_array($resultadoCot);
                $xMap         = $filaCot['map'];
        ?>
        <div class="google-map-area">
            <div class="container map-width">
                <?php echo $xMap; ?>
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
                    <div class="wow fadeInDown" data-wow-duration="3s" data-wow-delay=".3s">
                        <h3>Contactanos</h3>
                        <p>Brindanos tus datos y te contactaremos</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form Page start Here -->
    <div class="main-conatct-form-area" style="padding:15px 0 80px;">
        <div class="wow fadeInDown" data-wow-duration="3s" data-wow-delay=".3s">
        <div class="container">
            <div class="row">
                
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="row">
                            <div class="main-contact-form contact-form">
                                <div id='contact-form' role="form">
                                    <fieldset>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" placeholder="Nombres y Apellidos *" class="form-control" name="nombres" id="nombres" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" placeholder="Razón Social" class="form-control" id="razon_social" name="razon_social" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" placeholder="Celular *" class="form-control" id="telefono" name="telefono" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="email" placeholder="Email *" class="form-control" id="email" name="email" required />
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <textarea placeholder="¿Cómo podemos ayudarte? *" class="textarea form-control" id="mensaje" name="mensaje" rows="8" cols="20" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <?php 
                                                    $fecha = date("Y-m-d");
                                                ?>
                                                <input type="hidden" id="fecha_ingreso" name="fecha_ingreso" value="<?php echo $fecha ?>">
                                                <button name="submit" class="btn-read-more-fill btn-send" onClick="sendContact();">Contactarme</button>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="mail-status"></div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                               

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    
                        <div class="page-sidebar-area">
                            <div class="single-sidebar">
                                <h3>Nuestros Datos</h3>
                                <nav>
                                    <ul>
                                        <?php 
                                            $consultarCot = "SELECT * FROM contacto";
                                            $resultadoCot = mysqli_query($enlaces,$consultarCot) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                            $filaCot  = mysqli_fetch_array($resultadoCot);
                                                $xDirection   = $filaCot['direction'];
                                                $xPhone       = $filaCot['phone'];
                                                $xEmail       = $filaCot['email'];
                                        ?>
                                        <li><i class="fa fa-paper-plane-o" aria-hidden="true"></i> <?php echo $xDirection; ?></li>
                                        <li><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $xPhone; ?></li>
                                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <?php echo $xEmail; ?></li>
                                        <?php
                                        mysqli_free_result($resultadoCot);
                                        ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Contact Form Page start Here -->
    <!-- Main Contact Page Section Area End here-->
    <!-- FOOTER -->
    <?php include 'include/footer.php' ?>
    <?php include 'include/scripts.php' ?>
</body>
</html>