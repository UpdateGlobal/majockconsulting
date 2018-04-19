<?php include("cms/module/conexion.php"); ?>
<?php $cod_noticia   = $_REQUEST['cod_noticia'];?>
<!doctype html>
<html class="no-js" lang="es">
<?php include 'include/head.php' ?>
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
                        <li><a href="index.php">Inicio</a></li>
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
                            <a><img class="media-object" src="cms/assets/img/noticias/<?php echo $xImagen; ?>" /></a><br>
                            <div class="news-body">
                                <p class="mata"><?php
                                    $mydate = strtotime($xFecha);
                                    $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
                                    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                                    echo $dias[date('w', $mydate)]." ".date('d', $mydate)." de ".$meses[date('n', $mydate)-1]. " del ".date('Y', $mydate);
                                ?></p>
                                <?php echo $xNoticia; ?>
                            </div>
                            <a href="blog.php" class="btn-template">&lt; Volver</a>
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
    <?php include 'include/scripts.php' ?>
</body>
</html>