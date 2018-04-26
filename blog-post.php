<?php include("cms/module/conexion.php"); ?>
<?php $slug = $_REQUEST['slug']; ?>
<?php
    $consultaNoticias = "SELECT * FROM noticias WHERE slug='$slug'";
    $ejecutarNoticias = mysqli_query($enlaces,$consultaNoticias) or die('Consulta fallida: ' . mysqli_error($enlaces));
    $filaNot = mysqli_fetch_array($ejecutarNoticias);
        $cod_noticia   = $filaNot['cod_noticia'];
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
        $consultaNoticias = "SELECT * FROM noticias WHERE cod_noticia='$cod_noticia'";
        $ejecutarNoticias = mysqli_query($enlaces,$consultaNoticias) or die('Consulta fallida: ' . mysqli_error($enlaces));
        $filaNot = mysqli_fetch_array($ejecutarNoticias);
            $xTitulo   = htmlspecialchars($filaNot['titulo']);
            $xImagen   = $filaNot['imagen'];
            $xNoticia  = strip_tags($filaNot['noticia']);
    ?>
    <title><?php echo $xTitulo." | ".$xWebname; ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($xNoticia); ?>" />
    <meta name="keywords" content="<?php echo $xKey; ?>" />
    <meta name="DC.title" content="<?php echo $xTitulo." | ".$xWebname; ?>" />
    <meta name="DC.description" lang="es" content="<?php echo htmlspecialchars($xNoticia); ?>" />
    <meta name="geo.region" content="PE-LIM" />
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />

    <meta property="og:title" content="<?php echo $xTitulo." | ".$xWebname; ?>" />
    <meta property="og:type" content="company" />
    <meta property="og:description" content="<?php echo htmlspecialchars($xNoticia); ?>" />
    <meta property="og:url" content="<?php echo $xUrl; ?>" />
    <meta property="og:image" content="/cms/assets/img/productos/<?php echo $xImagen; ?>" />
    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="/cms/assets/img/meta/<?php echo $xIco; ?>">
    <?php
        mysqli_free_result($ejecutarNoticias);
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
    <?php
        $consultaNoticias = "SELECT * FROM noticias WHERE cod_noticia='$cod_noticia'";
        $ejecutarNoticias = mysqli_query($enlaces,$consultaNoticias) or die('Consulta fallida: ' . mysqli_error($enlaces));
        $filaNot = mysqli_fetch_array($ejecutarNoticias);
            $xImagen   = $filaNot['imagen'];
            $xTitulo   = $filaNot['titulo'];
            $xFecha    = $filaNot['fecha'];
            $xNoticia  = $filaNot['noticia'];
    ?>
    <!-- Header Banner Area section Start Here -->
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

    <!-- Main News Page start Here -->
    <div class="main-news-page-section-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="news-page-content-section-area">
                        <div class="single-news-area"><h3 class="news-title"><a><?php echo $xTitulo; ?></a></h3><br>
                            <a><img class="media-object" src="/cms/assets/img/noticias/<?php echo $xImagen; ?>" /></a><br>
                            <div class="news-body">
                                <p class="mata"><?php
                                    $mydate = strtotime($xFecha);
                                    $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
                                    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                                    echo $dias[date('w', $mydate)]." ".date('d', $mydate)." de ".$meses[date('n', $mydate)-1]. " del ".date('Y', $mydate);
                                ?></p>
                                <?php echo $xNoticia; ?>
                                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                                <div class="addthis_inline_share_toolbox"></div>
                                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ae1e6fc57e4c84d"></script>
                            </div>
                            <a href="/blog.php" class="btn-template">&lt; Volver</a>
                        </div>
                    </div>
                </div>
                <!-- CATEGORIAS -->
                <?php include 'include/categorias-blog.php' ?>
                <!-- CATEGORIAS END -->
            </div>
        </div>
    </div>
    <!-- Main News Page End Here -->
    <!-- Footer Start Here -->
    <?php include 'include/footer.php' ?>
    <!-- Footer End Here -->
    <!-- all js here -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a392b411b1ea275"></script>
    <?php include 'include/scripts.php' ?>
</body>
</html>