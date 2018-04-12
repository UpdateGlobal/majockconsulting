<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include("module/head.php"); ?>
    <script src="assets/js/visitante-alert.js"></script>
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
    <?php $menu="nosotros"; include("module/menu.php"); ?>
    <?php include("module/header.php"); ?>
    <!-- Main container -->
    <main>
      <header class="header bg-ui-general">
        <div class="header-info">
          <h1 class="header-title">
            <strong>Nosotros</strong>
            <small></small>
          </h1>
        </div>
      </header><!--/.header -->
      <div class="main-content">
        <div class="row">
          <div class="col-4 col-lg-4">
            <div class="card card-bordered">
              <h4 class="card-title"><strong>Misi&oacute;n</strong></h4>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-lg-12">
                    <?php
                      $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='2'";
                      $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
                      while($filaCon = mysqli_fetch_array($resultadoCon)){
                        $xCodigo      = $filaCon['cod_contenido'];
                        $xTitulo      = $filaCon['titulo_contenido'];
                        $xImagen      = $filaCon['img_contenido'];
                        $xContenido   = $filaCon['contenido'];
                        $xEstado      = $filaCon['estado'];
                    ?>
                    <img class="d-block b-1 border-light hover-shadow-2 p-1" src="assets/img/nosotros/<?php echo $xImagen; ?>" />
                    <h5><?php echo $xTitulo; ?></h5>
                    <p><?php 
                        $strCut = substr($xContenido,0,200);
                        $xContenido = substr($strCut,0,strrpos($strCut, ' ')).'...';
                        echo strip_tags($xContenido);
                      ?></p>
                    <hr>
                    <p><strong>Estado: <?php if($xEstado=="1"){echo "[Activo]";}else{ echo "[Inactivo]"; } ?> </strong></p>
                    <?php
                      }
                      mysqli_free_result($resultadoCon);
                    ?>
                  </div>
                </div>
              </div>
              <div class="publisher bt-1 border-light">
                <a href="nosotros-edit.php?cod_contenido=<?php echo $xCodigo; ?>" class="btn btn-bold btn-primary"><i class="fa fa-refresh"></i> Editar Misi&oacute;n</a>
              </div>
            </div>
          </div>

          <div class="col-4 col-lg-4">
            <div class="card card-bordered">
              <h4 class="card-title"><strong>Visi&oacute;n</strong></h4>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-lg-12">
                    <?php
                      $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='3'";
                      $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
                      while($filaCon = mysqli_fetch_array($resultadoCon)){
                        $xCodigo      = $filaCon['cod_contenido'];
                        $xTitulo      = $filaCon['titulo_contenido'];
                        $xImagen      = $filaCon['img_contenido'];
                        $xContenido   = $filaCon['contenido'];
                        $xEstado      = $filaCon['estado'];
                    ?>
                    <img class="d-block b-1 border-light hover-shadow-2 p-1" src="assets/img/nosotros/<?php echo $xImagen; ?>" />
                    <h5><?php echo $xTitulo; ?></h5>
                    <p><?php 
                          $strCut = substr($xContenido,0,200);
                          $xContenido = substr($strCut,0,strrpos($strCut, ' ')).'...';
                          echo strip_tags($xContenido);
                      ?></p>
                    <hr>
                    <p><strong>Estado: <?php if($xEstado=="1"){echo "[Activo]";}else{ echo "[Inactivo]"; } ?> </strong></p>
                      <?php
                        }
                        mysqli_free_result($resultadoCon);
                      ?>
                  </div>
                </div>
              </div>
              <div class="publisher bt-1 border-light">
                <a href="nosotros-edit.php?cod_contenido=<?php echo $xCodigo; ?>" class="btn btn-bold btn-primary"><i class="fa fa-refresh"></i> Editar Visión</a>
              </div>
            </div>
          </div>



          <div class="col-4 col-lg-4">
            <div class="card card-bordered">
              <h4 class="card-title"><strong>Objetivos</strong></h4>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-lg-12">
                    <?php
                      $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='4'";
                      $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
                      while($filaCon = mysqli_fetch_array($resultadoCon)){
                        $xCodigo      = $filaCon['cod_contenido'];
                        $xTitulo      = $filaCon['titulo_contenido'];
                        $xImagen      = $filaCon['img_contenido'];
                        $xContenido   = $filaCon['contenido'];
                        $xEstado      = $filaCon['estado'];
                    ?>
                    <img class="d-block b-1 border-light hover-shadow-2 p-1" src="assets/img/nosotros/<?php echo $xImagen; ?>" />
                    <h5><?php echo $xTitulo; ?></h5>
                    <p><?php 
                        $strCut = substr($xContenido,0,200);
                        $xContenido = substr($strCut,0,strrpos($strCut, ' ')).'...';
                        echo strip_tags($xContenido);
                      ?></p>
                    <hr>
                    <p><strong>Estado: <?php if($xEstado=="1"){echo "[Activo]";}else{ echo "[Inactivo]"; } ?> </strong></p>
                    <?php
                      }
                      mysqli_free_result($resultadoCon);
                    ?>
                  </div>
                </div>
              </div>
              <div class="publisher bt-1 border-light">
                <a href="nosotros-edit.php?cod_contenido=<?php echo $xCodigo; ?>" class="btn btn-bold btn-primary"><i class="fa fa-refresh"></i> Editar Objetivos</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="card card-bordered">
              <h4 class="card-title"><strong>Nuestro Equipo</strong></h4>
              <div class="card-body">
                <div class="row">
                  <?php
                    $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='1'";
                    $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
                    while($filaCon = mysqli_fetch_array($resultadoCon)){
                      $xCodigo      = $filaCon['cod_contenido'];
                      $xTitulo      = $filaCon['titulo_contenido'];
                      $xImagen      = $filaCon['img_contenido'];
                      $xContenido   = $filaCon['contenido'];
                      $xEstado      = $filaCon['estado'];
                  ?>
                  <div class="col-12 col-lg-12">
                    <h4><?php echo $xTitulo; ?></h4>
                    <p><?php 
                      $strCut = substr($xContenido,0,800);
                      $xContenido = substr($strCut,0,strrpos($strCut, ' ')).'...';
                      echo strip_tags($xContenido);
                    ?></p>
                    <hr>
                    <p><strong>Estado: <?php if($xEstado=="1"){echo "[Activo]";}else{ echo "[Inactivo]"; } ?> </strong></p>
                  </div>
                </div>
                <?php
                  }
                  mysqli_free_result($resultadoCon);
                ?>
              </div>
              <div class="publisher bt-1 border-light">
                <a href="nosotros-edit.php?cod_contenido=<?php echo $xCodigo; ?>" class="btn btn-bold btn-primary"><i class="fa fa-refresh"></i> Editar Equipo</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="card card-bordered">
              <h4 class="card-title"><strong>Lista de miembros</strong></h4>
              <div class="card-body">
                <a class="btn btn-info" href="<?php if($xVisitante=="0"){ ?>miembros-nuevo.php<?php }else{ ?>javascript:visitante();<?php } ?>"><i class="fa fa-plus"></i> A&ntilde;adir nuevo</a>
                <hr>
                <form name="fcms" method="post" action="">
                  <table class="table">
                    <thead>
                      <tr>
                        <th width="45%" scope="col">Imagen
                          <input type="hidden" name="proceso">
                          <input type="hidden" name="eliminar" value="false">
                        </th>
                        <th width="20%" scope="col">Nombre</th>
                        <th width="10%" scope="col">Orden</th>
                        <th width="10%" scope="col">Estado</th>
                        <th width="5%" scope="col"></th>
                        <th width="5%" scope="col"></th>
                        <th width="5%" scope="col"><a href="javascript:Procedimiento('eliminar','N');"><img src="assets/img/borrar.png" width="18" height="25" alt="Borrar"></a></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $consultarMiembros = "SELECT * FROM equipo_miembros ORDER BY orden";
                        $resultadoMiembros = mysqli_query($enlaces,$consultarMiembros) or die('Consulta fallida: ' . mysqli_error($enlaces));
                        while($filaMim = mysqli_fetch_array($resultadoMiembros)){
                          $xCodigo    = $filaMim['cod_miembro'];
                          $xNombre    = $filaMim['nombre'];
                          $xImagen    = $filaMim['imagen'];
                          $xOrden     = $filaMim['orden'];
                          $xEstado    = $filaMim['estado'];
                      ?>
                      <tr>
                        <td><img class="d-block b-1 border-light hover-shadow-2 p-1 img-admin" src="assets/img/member/<?php echo $xImagen; ?>" /></td>
                        <td><?php echo $xNombre; ?></td>
                        <td><?php echo $xOrden; ?></td>
                        <td><strong>
                          <?php if($xEstado=="1"){ echo "[Activo]"; }else{ echo "[Inactivo]";} ?>
                          </strong>
                        </td>
                        <td>
                          <a class="boton-eliminar <?php if($xVisitante=="1"){ ?>boton-eliminar-bloqueado<?php } ?>" href="<?php if($xVisitante=="0"){ ?>miembro-delete.php?cod_miembro=<?php echo $xCodigo; ?><?php }else{ ?>javascript:visitante();<?php } ?>">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                          </a>
                        </td>
                        <td><a class="boton-editar" href="miembro-edit.php?cod_miembro=<?php echo $xCodigo; ?>"><i class="fa fa-pencil-square" aria-hidden="true"></i></a></td>
                        <td>
                          <?php if($xVisitante=="0"){ ?>
                          <div class="hidden">
                            <label class="custom-control custom-control-lg custom-checkbox" for="chkbx-<?php echo $xCodigo; ?>">
                              <input type="checkbox" class="custom-control-input" id="chkbx-<?php echo $xCodigo; ?>" name="chk<?php echo $xCodigo; ?>" />
                              <span class="custom-control-indicator"></span>
                            </label>
                          </div>
                          <?php } ?>
                        </td>
                      </tr>
                      <?php
                        }
                        mysqli_free_result($resultadoMiembros);
                      ?>
                    </tbody>
                  </table>
                </form>
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