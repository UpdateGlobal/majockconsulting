<?php include("cms/module/conexion.php"); ?>
<!doctype html>
<html class="no-js" lang="es">
<!-- head -->
<?php include 'include/head.php' ?>
<!-- end head -->
<body>
    <!--  Header Area Here -->
    <?php include 'include/header.php' ?>
    <!--  Header Area End Here -->

    <!-- CABECERA Start Here -->
    <div class="header-banner-area">
        <div class="container">
            <div class="row">
                <div class="header-banner">
                    <h1>Nuestro Equipo</h1>
                    <ul>
                        <li><a href="index.php">Inicio</a></li>
                        <li>/ Equipo</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- CABECERA End Here -->
    <!--  EQUIPO -->
    <?php include 'include/equipo.php' ?>
    <!--  EQUIPO End Here -->

    <!-- Partner Logo Area Start Here -->
    <?php include 'include/clientes.php' ?>
    <!-- Partner Logo Area End Here -->
    <!--  Get Free Consult Section Start Here -->
    <?php include 'include/banner-contact.php' ?>
    <!--  Get Free Consult Section End Here -->
    <!-- Footer Start Here -->
    <?php include 'include/footer.php' ?>
    <!-- Footer End Here -->
    <?php include 'include/scripts.php' ?>
</body>
</html>