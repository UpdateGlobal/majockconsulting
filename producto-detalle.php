<?php include("cms/module/conexion.php"); ?>
<?php $cod_producto = $_REQUEST['cod_producto']; ?>
<!doctype html>
<html class="no-js" lang="es">
<?php include 'include/head.php' ?>
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
                        <li><a href="index.php">Inicio</a></li>
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
                                        <img src="cms/assets/img/productos/<?php echo $xImagen; ?>" alt="<?php echo $xTitulo; ?>">
                                        <?php echo $xDescripcion; ?>
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