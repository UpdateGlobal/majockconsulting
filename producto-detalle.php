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
    ?>
    <div class="header-banner-area">
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
    <!-- Header Banner Area section End Here -->
    <!-- Single Service Inner Section Start Here -->
    <div class="single-service-inner-page-area">
        <div class="container">
            <div class="row">
                <div class="single-service-inner-page">
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="single-service-inner-content">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <div class="single-service">
                                        <h2><?php echo $xTitulo; ?></h2>
                                        <img src="/cms/assets/img/productos/<?php echo $xImagen; ?>" alt="<?php echo $xTitulo; ?>">
                                        <?php echo $xDescripcion; ?>
                                        <!-- Go to www.addthis.com/dashboard to customize your tools -->
                                        <div class="addthis_inline_share_toolbox"></div>
                                        <!-- Go to www.addthis.com/dashboard to customize your tools -->
                                        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ae1e6fc57e4c84d"></script>
                                    </div>
                                </div>            
                            </div>
                        </div>
                    </div>
                    <!-- PRODUCTOS Y SERVICIOS NAV -->
                    <?php $menu=$cod_producto; include 'include/productos-nav.php'; ?>
                    <!-- PRODUCTOS Y SERVICIOS NAV -->
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
</body>
</html>