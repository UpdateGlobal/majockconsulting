<?php include("cms/module/conexion.php"); ?>
<!doctype html>
<html class="no-js" lang="es">
<!-- head -->
<?php include 'include/head.php' ?>
<!-- end head -->

<style>
    h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6{
font-family:helvetica !important;
}
</style>

<body>
    <!--  Header Area Here -->
    <?php include 'include/header.php' ?>
    <!--  Header Area End Here -->
    <?php
        $consultarContenido = "SELECT * FROM contenidos WHERE cod_contenido='5'";
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
                    <h1>Nosotros</h1>
                    <ul>
                        <li><a href="/index.php">Inicio</a></li>
                        <li>/ Nosotros</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Banner Area section End Here -->

    <!-- About Page Inner Section Start Here -->
    <div class="about-inner-page-area">
        <div class="container">
            <div class="row">
                <div class="about-inner-page">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Misi&oacute;n</a></li>
                        <li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Visi&oacute;n</a></li>
                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Historia</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">

                        <div role="tabpanel" class="tab-pane" id="home">
                            <?php
                                $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='2' AND estado='1'";
                                $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                while($filaCon = mysqli_fetch_array($resultadoCon)){
                                    $xCodigo      = $filaCon['cod_contenido'];
                                    $xTitulo      = $filaCon['titulo_contenido'];
                                    $xImagen      = $filaCon['img_contenido'];
                                    $xContenido   = $filaCon['contenido'];
                            ?>
                            <!--<div class="wow fadeInRight" data-wow-duration="3s" data-wow-delay=".3s">-->
                                <div class="media">
                                                
                                            <a class="pull-left" href="#">
                                                <!--<div class="wow fadeInLeft" data-wow-duration="3s" data-wow-delay=".3s">-->
                                                    <img src="/cms/assets/img/nosotros/<?php echo $xImagen; ?>" alt="<?php echo $xTitulo; ?>">
                                                <!--</div>-->
                                
                                            </a>
                                    <div class="media-body">
                                                <!--<div class="wow fadeInRight" data-wow-duration="3s" data-wow-delay=".3s">-->
                                                    <h2 class="media-heading"><?php echo $xTitulo; ?></h2>
                                                    <?php echo $xContenido;?>
                                                <!--</div>-->
                                            



                                    </div>
                                </div>
                            <!--</div>-->

                            <?php
                                }
                                mysqli_free_result($resultadoCon);
                            ?>
                        </div>


                        <div role="tabpanel" class="tab-pane active" id="profile">
                            <?php
                                $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='3' AND estado='1'";
                                $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                while($filaCon = mysqli_fetch_array($resultadoCon)){
                                    $xCodigo      = $filaCon['cod_contenido'];
                                    $xTitulo      = $filaCon['titulo_contenido'];
                                    $xImagen      = $filaCon['img_contenido'];
                                    $xContenido   = $filaCon['contenido'];
                            ?>

                            <!--<div class="wow fadeInRight" data-wow-duration="3s" data-wow-delay=".3s">-->
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <!--<div class="wow fadeInLeft" data-wow-duration="3s" data-wow-delay=".3s">-->
                                            <img src="/cms/assets/img/nosotros/<?php echo $xImagen; ?>" alt="<?php echo $xTitulo; ?>">
                                        <!--</div>-->
                                        
                                    </a>
                                    <div class="media-body">
                                        <!--<div class="wow fadeInRight" data-wow-duration="3s" data-wow-delay=".3s">-->
                                            <h2 class="media-heading"><?php echo $xTitulo; ?></h2>
                                            <?php echo $xContenido; ?>
                                        <!--</div>-->
                                        
                                    </div>
                                </div>
                            <!--</div>-->

                            <?php
                                }
                                mysqli_free_result($resultadoCon);
                            ?>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="messages">
                            <?php
                                $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='4' AND estado='1'";
                                $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                while($filaCon = mysqli_fetch_array($resultadoCon)){
                                    $xCodigo      = $filaCon['cod_contenido'];
                                    $xTitulo      = $filaCon['titulo_contenido'];
                                    $xImagen      = $filaCon['img_contenido'];
                                    $xContenido   = $filaCon['contenido'];
                            ?>

                            <!--<div class="wow fadeInRight" data-wow-duration="3s" data-wow-delay=".3s">-->
                                <div class="media">

                            
                                    <a class="pull-left" href="#">
                                        <!--<div class="wow fadeInLeft" data-wow-duration="3s" data-wow-delay=".3s">-->
                                            <img src="/cms/assets/img/nosotros/<?php echo $xImagen; ?>" alt="<?php echo $xTitulo; ?>">
                                        <!--</div>-->
                                        
                                    </a>

                                
                                    <div class="media-body">
                                        <!--<div class="wow fadeInRight" data-wow-duration="3s" data-wow-delay=".3s">-->
                                            <h2 class="media-heading"><?php echo $xTitulo; ?></h2>
                                            <?php echo $xContenido; ?>
                                        <!--</div>-->

                                    </div>


                                </div>
                            <!--</div>-->


                            <?php
                                }
                                mysqli_free_result($resultadoCon);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Page Inner Section End Here -->
    <!-- CLIENTES Logo Area Start Here -->
    <!-- Partner Logo Area Start Here -->
    <?php include 'include/clientes.php' ?>
    <!-- Partner Logo Area End Here -->
    <!-- CLIENTES Logo Area End Here -->
    <!--  Get Free Consult Section Start Here -->
    <?php include 'include/banner-contact.php' ?>
    <!--  Get Free Consult Section End Here -->
    <!-- Footer Start Here -->
    <?php include 'include/footer.php' ?>
    <!-- Footer End Here -->
    <?php include 'include/scripts.php' ?>
</body>
</html>