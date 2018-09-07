<?php include("cms/module/conexion.php"); ?>
<?php $slug = $_REQUEST['slug']; ?>
<?php 
    $consultaProductos = "SELECT * FROM productos WHERE slug='$slug'";
    $ejecutarProductos = mysqli_query($enlaces,$consultaProductos) or die('Consulta fallida: ' . mysqli_error($enlaces));
    $filaPro        = mysqli_fetch_array($ejecutarProductos);
    $cod_producto   = $filaPro['cod_producto'];
?>
<!doctype html>
<html class="no-js" lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php
        $consultarMet = 'SELECT * FROM metatags';
        $resultadoMet = mysqli_query($enlaces,$consultarMet) or die('Consulta fallida: ' . mysqli_error($enlaces));
        $filaMet = mysqli_fetch_array($resultadoMet);
            $xWebname   = $filaMet['titulo'];
            $xKey       = $filaMet['keywords'];
            $xUrl       = $filaMet['url'];
            $xIco       = $filaMet['ico'];
    ?>
    <?php 
        $consultaProductos = "SELECT * FROM productos WHERE cod_producto='$cod_producto'";
        $ejecutarProductos = mysqli_query($enlaces,$consultaProductos) or die('Consulta fallida: ' . mysqli_error($enlaces));
        $filaPro = mysqli_fetch_array($ejecutarProductos);
            $xTitulo        = htmlspecialchars($filaPro['titulo']);
            $xImagen        = $filaPro['imagen'];
            $xDescripcion   = strip_tags($filaPro['descripcion']);
    ?>
    <title><?php echo $xTitulo." | ".$xWebname; ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($xDescripcion); ?>" />
    <meta name="keywords" content="<?php echo $xKey; ?>" />
    <meta name="DC.title" content="<?php echo $xTitulo." | ".$xSlogan; ?>" />
    <meta name="DC.description" lang="es" content="<?php echo htmlspecialchars($xDescripcion); ?>" />
    <meta name="geo.region" content="PE-LIM" />
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />

    <meta property="og:title" content="<?php echo $xTitulo." | ".$xWebname; ?>" />
    <meta property="og:type" content="company" />
    <meta property="og:description" content="<?php echo htmlspecialchars($xDescripcion); ?>" />
    <meta property="og:url" content="<?php echo $xUrl; ?>" />
    <meta property="og:image" content="/cms/assets/img/productos/<?php echo $xImagen; ?>" />
    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="/cms/assets/img/meta/<?php echo $xIco; ?>">
    <?php
        mysqli_free_result($ejecutarProductos);
    ?>
    <?php
        mysqli_free_result($resultadoMet);
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">


    <!-- animate css -->
    <link rel="stylesheet" href="/css/animate.css">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="/css/jquery-ui.min.css">
    <!-- nivo slider CSS
    ============================================ -->
    <link rel="stylesheet" href="/lib/custom-slider/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="/lib/custom-slider/css/preview.css" type="text/css" media="screen" />
    <!-- meanmenu css -->
    <link rel="stylesheet" href="/css/meanmenu.min.css">
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="/vendor/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/vendor/OwlCarousel/owl.theme.default.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <!-- flaticon css -->
    <link rel="stylesheet" href="/css/flaticon.css">
    <!-- style css -->
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/css/custom.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="/css/responsive.css">
    <!-- modernizr css -->
    <script src="/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<style>
    h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6{
font-family:helvetica !important;
}
</style>

<body>
<?php include 'include/header.php' ?>
    <!--  Header Area End Here -->
    <!-- Header Banner Area section Start Here -->
    <?php 
        $consultaProductos = "SELECT * FROM productos WHERE cod_producto='$cod_producto'";
        $ejecutarProductos = mysqli_query($enlaces,$consultaProductos) or die('Consulta fallida: ' . mysqli_error($enlaces));
        $filaPro        = mysqli_fetch_array($ejecutarProductos);
        $cod_producto   = $filaPro['cod_producto'];
        $xTitulo        = htmlspecialchars($filaPro['titulo']);
        $xImagen        = $filaPro['imagen'];
        $xDescripcion   = $filaPro['descripcion'];
        $xDescripcion2  = $filaPro['descripcion_b'];
        // Tabs
        $subtitulo      = $filaPro['subtitulo'];
        $tab_a          = $filaPro['tab_a'];
        $tab_b          = $filaPro['tab_b'];
        $tab_c          = $filaPro['tab_c'];
        $titulo_a       = $filaPro['titulo_a'];
        $titulo_b       = $filaPro['titulo_b'];
        $titulo_c       = $filaPro['titulo_c'];
        $img_a          = $filaPro['img_a'];
        $img_b          = $filaPro['img_b'];
        $img_c          = $filaPro['img_c'];
        $contenidos_a   = $filaPro['contenido_a'];
        $contenidos_b   = $filaPro['contenido_b'];
        $contenidos_c   = $filaPro['contenido_c'];
        $estado_tab     = $filaPro['estado_tab'];
    ?>
    <?php
        $consultarContenido = "SELECT * FROM contenidos WHERE cod_contenido='6'";
        $resultadoContenido = mysqli_query($enlaces,$consultarContenido) or die('Consulta fallida: ' . mysqli_error($enlaces));
        $filaCon = mysqli_fetch_array($resultadoContenido);
            $xCodigo   = $filaCon['cod_contenido'];
            $xImagenx  = $filaCon['img_contenido'];
            $xEstado   = $filaCon['estado'];
    ?>
    <div class="header-banner-area" style="background: url(/cms/assets/img/nosotros/<?php echo $xImagenx; ?>) no-repeat;">
        <div class="container">
            <div class="row">
                <div class="header-banner">
                    <h1><?php echo $xTitulo; ?></h1>
                    <ul>
                        <li><a href="/index.php">Inicio</a></li>
                        <li>/ <?php echo $xTitulo; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php
        mysqli_free_result($resultadoContenido);
    ?>
    <!-- Header Banner Area section End Here -->
    <!-- Single Service Inner Section Start Here -->
    <div class="single-service-inner-page-area">
        <div class="container">
            <div class="row">
                <div class="single-service-inner-page">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="single-service-inner-content">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <div class="single-service">
                                        <div class="row">
                                            <div class_="col-md-12">
                                                <h2 class="wow fadeInRight" data-wow-duration="3s" data-wow-delay=".3s"><?php echo $xTitulo; ?></h2>
                                            </div><!--fin de div class col-md-12-->
                                        </div>
                                        <div class="row">
                                            <div class="wow fadeInRight" data-wow-duration="3s" data-wow-delay=".3s">
                                                <div class="col-md-6">
                                                    <img src="/cms/assets/img/productos/<?php echo $xImagen; ?>" alt="<?php echo $xTitulo; ?>">
                                                </div>
                                                <div class="col-md-6">
                                                    <?php echo $xDescripcion; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="wow fadeInLeft" data-wow-duration="3s" data-wow-delay=".3s">
                                                    <?php echo $xDescripcion2; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row about-inner-page-area" style="padding-top: 10px;">
                                            <?php if($estado_tab==1){ ?>
                                            <div class="col-md-12">
                                                <h4 style="text-align: center;"><?php echo $subtitulo; ?></h4>
                                                <div class="about-inner-page">
                                                    <!-- Nav tabs -->
                                                    <ul class="nav nav-tabs" role="tablist">
                                                        <?php if($tab_a==""){ }else{ ?>
                                                        <li role="presentation" class="active"><a href="#taba" aria-controls="taba" role="tab" data-toggle="tab"><?php echo $tab_a; ?></a></li>
                                                        <?php } ?>
                                                        <?php if($tab_b==""){ }else{ ?>
                                                        <li role="presentation"><a href="#tabb" aria-controls="tabb" role="tab" data-toggle="tab"><?php echo $tab_b; ?></a></li>
                                                        <?php } ?>
                                                        <?php if($tab_c==""){ }else{ ?>
                                                        <li role="presentation"><a href="#tabc" aria-controls="tabc" role="tab" data-toggle="tab"><?php echo $tab_c; ?></a></li>
                                                        <?php } ?>
                                                    </ul>
                                                    <!-- Tab panes -->
                                                    <div class="tab-content">
                                                        <?php if($contenidos_a==""){ }else{ ?>
                                                        <div role="tabpanel" class="tab-pane active" id="taba" onclick="myFunction()">
                                                            <div class="media contenido_media">
                                                                <div class="media-body" id="titulo_a">
                                                                    <div class="row">
                                                                    <?php if($img_a!=""){ ?>
                                                                        <div class="col-md-6">
                                                                            <img src="/cms/assets/img/servicios/fotos/<?php echo $img_a; ?>" alt="<?php echo $titulo_a; ?>">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <h2 class="media-heading"><?php echo $titulo_a; ?></h2>
                                                                            <?php echo $contenidos_a; ?>
                                                                        </div>
                                                                        <?php }else{ ?>
                                                                        <div class="col-md-12">
                                                                            <h2 class="media-heading"><?php echo $titulo_a; ?></h2>
                                                                            <?php echo $contenidos_a; ?>
                                                                        </div>
                                                                    <?php } ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                        <?php if($contenidos_b==""){ }else{ ?>
                                                        <div role="tabpanel" class="tab-pane" id="tabb" onclick="myFunction2()">
                                                            <div class="media contenido_media">
                                                                <div class="media-body" id="titulo_b">
                                                                    <div class="row">
                                                                    <?php if($img_b!=""){ ?>
                                                                        <div class="col-md-6">
                                                                            <img src="/cms/assets/img/servicios/fotos/<?php echo $img_b; ?>" alt="<?php echo $titulo_b; ?>">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <h2 class="media-heading"><?php echo $titulo_b; ?></h2>
                                                                            <?php echo $contenidos_b; ?>
                                                                        </div>
                                                                        <?php }else{ ?>
                                                                        <div class="col-md-12">
                                                                            <h2 class="media-heading"><?php echo $titulo_b; ?></h2>
                                                                            <?php echo $contenidos_b; ?>
                                                                        </div>
                                                                    <?php } ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                        <?php if($contenidos_c==""){ }else{ ?>
                                                        <div role="tabpanel" class="tab-pane" id="tabc">
                                                            <div class="media contenido_media" id="titulo_c">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                    <?php if($img_c!=""){ ?>
                                                                        <div class="col-md-6">
                                                                            <img src="/cms/assets/img/servicios/fotos/<?php echo $img_c; ?>" alt="<?php echo $titulo_c; ?>">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <h2 class="media-heading"><?php echo $titulo_c; ?></h2>
                                                                            <?php echo $contenidos_c; ?>
                                                                        </div>
                                                                        <?php }else{ ?>
                                                                        <div class="col-md-12">
                                                                            <h2 class="media-heading"><?php echo $titulo_c; ?></h2>
                                                                            <?php echo $contenidos_c; ?>
                                                                        </div>
                                                                    <?php } ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                    </div><!--Fin div tab panes-->
                                                </div><!--fin div about-inner-page-->
                                                <?php } ?>
                                                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                                                <div class="addthis_inline_share_toolbox"></div>
                                                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                                                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ae1e6fc57e4c84d"></script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single Service Inner Section End Here -->
    <!--  Get Free Consult Section Start Here -->
    <?php include 'include/banner-contact.php' ?>
    <!--  Get Free Consult Section End Here -->
    <!-- Footer Start Here -->
    <?php include 'include/footer.php' ?>
    <!-- Footer End Here -->
    <!-- all js here -->
    <?php include 'include/scripts.php' ?>

    <script src="js/jquery-3.3.min.js"></script>

    <script src="js/jquery-3.2.1.slim.min.js"></script>

    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    

    <script>
        function myFunction() {

            alert("me diste clic");
              
            /*
            document.getElementById("taba").style.color="white";
            document.getElementById("taba").style.background="blue";
            */
        }

        function myFunction2() {

            alert("me diste clic");
              
            /*
            document.getElementById("taba").style.color="white";
            document.getElementById("taba").style.background="blue";
            */
        }


    </script>

</body>
</html>