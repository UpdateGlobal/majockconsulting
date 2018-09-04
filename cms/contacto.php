<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include("module/head.php"); ?>
  </head>
  <body>
    <!-- Preloader -->
    <div class="preloader">
      <div class="spinner-dots">
        <span class="dot1"></span>
        <span class="dot2"></span>
        <span class="dot3"></span>
      </div>
    </div>
    <?php $menu="contacto"; include("module/menu.php"); ?>
    <?php include("module/header.php"); ?>
    <!-- Main container -->
    <main>
      <header class="header bg-ui-general">
        <div class="header-info">
          <h1 class="header-title">
            <strong>Contacto</strong>
            <small>Datos de contacto de su empresa</small>
          </h1>
        </div>
        <?php $page="contacto"; include("module/menu-contacto.php"); ?>
      </header><!--/.header -->
      <div class="main-content">
        <div class="row">
          <div class="col-md-12">
            <?php
              $consultarContenido = "SELECT * FROM contenidos WHERE cod_contenido='9'";
              $resultadoContenido = mysqli_query($enlaces,$consultarContenido) or die('Consulta fallida: ' . mysqli_error($enlaces));
              $filaCon = mysqli_fetch_array($resultadoContenido);
                $xCodigo   = $filaCon['cod_contenido'];
                $xImagen   = $filaCon['img_contenido'];
                $xEstado   = $filaCon['estado'];
            ?>
            <div class="card card-bordered">
              <h4 class="card-title"><strong>Banner de fondo: Cont&aacute;cto</strong></h4>
              <div class="card-body icon-size">
                <p><img src="assets/img/nosotros/<?php echo $xImagen; ?>" /></p>
                <p><strong>Estado: <?php if($xEstado=="1"){echo "[Activo]";}else{ echo "[Inactivo]"; } ?> </strong></p>
              </div>
              <footer class="card-footer">
                <a href="imagenes-edit.php?cod_contenido=<?php echo $xCodigo; ?>" class="btn btn-bold btn-primary"><i class="fa fa-refresh"></i> Editar Banner</a>
              </footer>
            </div>
            <?php
              mysqli_free_result($resultadoContenido);
            ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card card-bordered">
              <h4 class="card-title"><strong>Contacto</strong></h4>
              <div class="media-list">
                <?php
                  $consultarCot = 'SELECT * FROM contacto';
                  $resultadoCot = mysqli_query($enlaces,$consultarCot) or die('Consulta fallida: ' . mysqli_error($enlaces));
                  while($filaCot  = mysqli_fetch_array($resultadoCot)){
                    $xCodigo      = $filaCot['cod_contact'];
                    $xDirection   = $filaCot['direction'];
                    $xPhone       = $filaCot['phone'];
                    $xEmail       = $filaCot['email'];
                    $xMap         = $filaCot['map'];
                    $xFormem      = $filaCot['form_mail'];
                ?>
                <ul class="list-group">
                  <li class="list-group-item">
                    <strong>Direcci&oacute;n:</strong><br>
                    <?php echo $xDirection; ?>
                  </li>
                  <li class="list-group-item">
                    <strong>Tel&eacute;fono:</strong><br>
                    <?php echo $xPhone; ?>
                  </li>
                  <li class="list-group-item">
                    <strong>Emails:</strong><br>
                    <?php echo $xEmail; ?>
                  </li>
                  <?php if($xMap!=""){ ?>
                  <li class="list-group-item">
                    <strong>Mapa:</strong><br>
                    <?php echo $xMap; ?>
                  </li>
                  <?php }else{ ?>
                  <?php } ?>
                  <li class="list-group-item">
                    <strong>Correo que recibe los mensajes del formulario:</strong><br>
                    <?php echo $xFormem; ?>
                  </li>
                </ul>
                <?php
                  }
                  mysqli_free_result($resultadoCot);
                ?>
              </div>
              <div class="publisher bt-1 border-light">
                <a href="contacto-edit.php?cod_contact=<?php echo $xCodigo; ?>" class="btn btn-bold btn-primary"><i class="fa fa-refresh"></i> Editar Contacto</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include("module/footer_int.php"); ?>
    </main>
    <!-- END Main container -->
  </body>
</html>