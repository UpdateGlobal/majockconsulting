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
    <?php $menu="inicio"; include("module/menu.php"); ?>
    <?php include("module/header.php"); ?>
    <!-- Main container -->
    <main>
      <header class="header bg-ui-general">
        <div class="header-info">
          <h1 class="header-title">
            <strong>General</strong>
            <small></small>
          </h1>
        </div>
        <?php $page="general"; include("module/menu-inicio.php"); ?>
      </header><!--/.header -->
      <div class="main-content">
        
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            <?php
              $consultarGeneral = "SELECT * FROM general WHERE cod_general='1'";
              $resultadoGeneral = mysqli_query($enlaces,$consultarGeneral) or die('Consulta fallida: ' . mysqli_error($enlaces));
              while($filaGen = mysqli_fetch_array($resultadoGeneral)){
                $xCodigo      = $filaGen['cod_general'];
                $xTitulo      = $filaGen['campo_1'];
                $xDescripcion = $filaGen['campo_2'];
                $xEstado      = $filaGen['estado'];
            ?>
            <div class="card card-bordered">
              <h4 class="card-title"><strong><?php echo $xTitulo; ?></strong></h4>
              <div class="card-body">
                <p><?php echo $xDescripcion; ?></p>
                <p><strong>Estado: <?php if($xEstado=="1"){echo "[Activo]";}else{ echo "[Inactivo]"; } ?> </strong></p>
              </div>
              <footer class="card-footer">
                <a href="general-edit.php?cod_general=<?php echo $xCodigo; ?>" class="btn btn-bold btn-primary"><i class="fa fa-refresh"></i> Editar</a>
              </footer>
            </div>
            <?php
              }
              mysqli_free_result($resultadoGeneral);
            ?>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            <?php
              $consultarGeneral = "SELECT * FROM general WHERE cod_general='2'";
              $resultadoGeneral = mysqli_query($enlaces,$consultarGeneral) or die('Consulta fallida: ' . mysqli_error($enlaces));
              while($filaGen = mysqli_fetch_array($resultadoGeneral)){
                $xCodigo      = $filaGen['cod_general'];
                $xTitulo      = $filaGen['campo_1'];
                $xValor_1     = $filaGen['campo_2'];
                $xValor_2     = $filaGen['campo_3'];
                $xValor_3     = $filaGen['campo_4'];
                $xValor_4     = $filaGen['campo_5'];
                $xValor_5     = $filaGen['campo_6'];
                $xValor_6     = $filaGen['campo_7'];
                $xEstado      = $filaGen['estado'];
            ?>
            <div class="card card-bordered">
              <h4 class="card-title"><strong><?php echo $xTitulo; ?></strong></h4>
              <div class="card-body">
                <ul>
                  <li><strong><?php echo $xValor_1; ?> :</strong> <?php echo $xValor_4; ?>%</li>
                  <li><strong><?php echo $xValor_2; ?> :</strong> <?php echo $xValor_5; ?>%</li>
                  <li><strong><?php echo $xValor_3; ?> :</strong> <?php echo $xValor_6; ?>%</li>
                </ul>
                <p><strong>Estado: <?php if($xEstado=="1"){echo "[Activo]";}else{ echo "[Inactivo]"; } ?> </strong></p>
              </div>
              <footer class="card-footer">
                <a href="general-edit.php?cod_general=<?php echo $xCodigo; ?>" class="btn btn-bold btn-primary"><i class="fa fa-refresh"></i> Editar</a>
              </footer>
            </div>
            <?php
              }
              mysqli_free_result($resultadoGeneral);
            ?>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <?php
              $consultarGeneral = "SELECT * FROM general WHERE cod_general='3'";
              $resultadoGeneral = mysqli_query($enlaces,$consultarGeneral) or die('Consulta fallida: ' . mysqli_error($enlaces));
              while($filaGen = mysqli_fetch_array($resultadoGeneral)){
                $xCodigo      = $filaGen['cod_general'];
                $xTitulo      = $filaGen['campo_1'];
                $xDescripcion = $filaGen['campo_2'];
                $xEstado      = $filaGen['estado'];
            ?>
            <div class="card card-bordered">
              <h4 class="card-title"><strong><?php echo $xTitulo; ?></strong></h4>
              <div class="card-body">
                <p><?php echo $xDescripcion; ?></p>
                <p><strong>Estado: <?php if($xEstado=="1"){echo "[Activo]";}else{ echo "[Inactivo]"; } ?> </strong></p>
              </div>
              <footer class="card-footer">
                <a href="general-edit.php?cod_general=<?php echo $xCodigo; ?>" class="btn btn-bold btn-primary"><i class="fa fa-refresh"></i> Editar</a>
              </footer>
            </div>
            <?php
              }
              mysqli_free_result($resultadoGeneral);
            ?>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <?php
              $consultarGeneral = "SELECT * FROM general WHERE cod_general='4'";
              $resultadoGeneral = mysqli_query($enlaces,$consultarGeneral) or die('Consulta fallida: ' . mysqli_error($enlaces));
              while($filaGen = mysqli_fetch_array($resultadoGeneral)){
                $xCodigo      = $filaGen['cod_general'];
                $xTitulo      = $filaGen['campo_1'];
                $xDescripcion = $filaGen['campo_2'];
                $xIcon        = $filaGen['campo_5'];
                $xEstado      = $filaGen['estado'];
            ?>
            <div class="card card-bordered">
              <h4 class="card-title"><strong><?php echo $xTitulo; ?></strong></h4>
              <div class="card-body text-center icon-size">
                <i class="fa <?php echo $xIcon; ?>" aria-hidden="true"></i>
                <p><?php echo $xDescripcion; ?></p>
                <p><strong>Estado: <?php if($xEstado=="1"){echo "[Activo]";}else{ echo "[Inactivo]"; } ?> </strong></p>
              </div>
              <footer class="card-footer">
                <a href="general-edit.php?cod_general=<?php echo $xCodigo; ?>" class="btn btn-bold btn-primary"><i class="fa fa-refresh"></i> Editar</a>
              </footer>
            </div>
            <?php
              }
              mysqli_free_result($resultadoGeneral);
            ?>
          </div>
          <div class="col-md-4">
            <?php
              $consultarGeneral = "SELECT * FROM general WHERE cod_general='5'";
              $resultadoGeneral = mysqli_query($enlaces,$consultarGeneral) or die('Consulta fallida: ' . mysqli_error($enlaces));
              while($filaGen = mysqli_fetch_array($resultadoGeneral)){
                $xCodigo      = $filaGen['cod_general'];
                $xTitulo      = $filaGen['campo_1'];
                $xDescripcion = $filaGen['campo_2'];
                $xIcon        = $filaGen['campo_5'];
                $xEstado      = $filaGen['estado'];
            ?>
            <div class="card card-bordered">
              <h4 class="card-title"><strong><?php echo $xTitulo; ?></strong></h4>
              <div class="card-body text-center icon-size">
                <i class="fa <?php echo $xIcon; ?>" aria-hidden="true"></i>
                <p><?php echo $xDescripcion; ?></p>
                <p><strong>Estado: <?php if($xEstado=="1"){echo "[Activo]";}else{ echo "[Inactivo]"; } ?> </strong></p>
              </div>
              <footer class="card-footer">
                <a href="general-edit.php?cod_general=<?php echo $xCodigo; ?>" class="btn btn-bold btn-primary"><i class="fa fa-refresh"></i> Editar</a>
              </footer>
            </div>
            <?php
              }
              mysqli_free_result($resultadoGeneral);
            ?>
          </div>
          <div class="col-md-4">
            <?php
              $consultarGeneral = "SELECT * FROM general WHERE cod_general='6'";
              $resultadoGeneral = mysqli_query($enlaces,$consultarGeneral) or die('Consulta fallida: ' . mysqli_error($enlaces));
              while($filaGen = mysqli_fetch_array($resultadoGeneral)){
                $xCodigo      = $filaGen['cod_general'];
                $xTitulo      = $filaGen['campo_1'];
                $xDescripcion = $filaGen['campo_2'];
                $xIcon        = $filaGen['campo_5'];
                $xEstado      = $filaGen['estado'];
            ?>
            <div class="card card-bordered">
              <h4 class="card-title"><strong><?php echo $xTitulo; ?></strong></h4>
              <div class="card-body text-center icon-size">
                <i class="fa <?php echo $xIcon; ?>" aria-hidden="true"></i>
                <p><?php echo $xDescripcion; ?></p>
                <p><strong>Estado: <?php if($xEstado=="1"){echo "[Activo]";}else{ echo "[Inactivo]"; } ?> </strong></p>
              </div>
              <footer class="card-footer">
                <a href="general-edit.php?cod_general=<?php echo $xCodigo; ?>" class="btn btn-bold btn-primary"><i class="fa fa-refresh"></i> Editar</a>
              </footer>
            </div>
            <?php
              }
              mysqli_free_result($resultadoGeneral);
            ?>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <?php
              $consultarGeneral = "SELECT * FROM general WHERE cod_general='7'";
              $resultadoGeneral = mysqli_query($enlaces,$consultarGeneral) or die('Consulta fallida: ' . mysqli_error($enlaces));
              while($filaGen = mysqli_fetch_array($resultadoGeneral)){
                $xCodigo      = $filaGen['cod_general'];
                $xTitulo      = $filaGen['campo_1'];
                $xLink        = $filaGen['campo_5'];
                $xEstado      = $filaGen['estado'];
            ?>
            <div class="card card-bordered">
              <h4 class="card-title"><strong>Contactanos</strong></h4>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <p><strong>Texto :</strong> <?php echo $xTitulo; ?><br>
                    <strong>Enlace :</strong> <?php echo $xLink; ?></p>
                    <p><strong>Estado: <?php if($xEstado=="1"){echo "[Activo]";}else{ echo "[Inactivo]"; } ?> </strong></p>
                  </div>
                </div>
              </div>
              <footer class="card-footer">
                <a href="general-edit.php?cod_general=<?php echo $xCodigo; ?>" class="btn btn-bold btn-primary"><i class="fa fa-refresh"></i> Editar</a>
              </footer>
            </div>
            <?php
              }
              mysqli_free_result($resultadoGeneral);
            ?>
          </div>
        </div>

      </div>
      <?php include("module/footer_int.php"); ?>
    </main>
    <!-- END Main container -->
  </body>
</html>