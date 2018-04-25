<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php
$cod_miembro = $_REQUEST['cod_miembro'];
if (isset($_REQUEST['proceso'])) {
  $proceso  = $_POST['proceso'];
} else {
  $proceso  = "";
}
if($proceso==""){
  $consultaMin = "SELECT * FROM equipo_miembros WHERE cod_miembro='$cod_miembro'";
  $ejecutarMin = mysqli_query($enlaces,$consultaMin) or die('Consulta fallida: ' . mysqli_error($enlaces));
  $filaMin = mysqli_fetch_array($ejecutarMin);
  $cod_miembro   = $filaMin['cod_miembro'];
  $nombre        = $filaMin['nombre'];
  $cargo         = $filaMin['cargo'];
  $descripcion   = $filaMin['descripcion'];
  $imagen        = $filaMin['imagen'];
  $orden         = $filaMin['orden'];
  $estado        = $filaMin['estado'];
}

if($proceso == "Actualizar"){
  $cod_miembro   = $_POST['cod_miembro'];
  $nombre        = mysqli_real_escape_string($enlaces, $_POST['nombre']);
  $cargo         = mysqli_real_escape_string($enlaces, $_POST['cargo']);
  $descripcion   = mysqli_real_escape_string($enlaces, $_POST['descripcion']);
  $imagen        = $_POST['imagen'];
  $orden         = $_POST['orden'];
  $estado        = $_POST['estado'];

  $ActualizarMin = "UPDATE equipo_miembros SET cod_miembro='$cod_miembro', nombre='$nombre', cargo='$cargo', descripcion='$descripcion', imagen='$imagen', orden='$orden', estado='$estado' WHERE cod_miembro='$cod_miembro'";
  $resultadoActualizar = mysqli_query($enlaces,$ActualizarMin) or die('Consulta fallida: ' . mysqli_error($enlaces));
  header("Location:nosotros.php");
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include("module/head.php"); ?>
    <script type="text/javascript" src="assets/js/rutinas.js"></script>
    <script>
      function Validar(){
        if(document.fcms.imagen.value==""){
          alert("Debe subir una imagen");
          return;
        }
        document.fcms.action = "miembros-edit.php";
        document.fcms.proceso.value="Actualizar";
        document.fcms.submit();
      }
      function Imagen(codigo){
        url = "agregar-foto.php?id=" + codigo;
        AbrirCentro(url,'Agregar', 475, 180, 'no', 'no');
      }
      function soloNumeros(e){
        var key = window.Event ? e.which : e.keyCode 
        return ((key >= 48 && key <= 57) || (key==8)) 
      }
    </script>
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
        <div class="card">
          <h4 class="card-title"><strong>Editar Miembros</strong></h4>
          <form class="fcms" name="fcms" method="post" action="" data-provide="validation" data-disable="false">
            <div class="card-body">
              <?php if(isset($mensaje)){ echo $mensaje; } else {}; ?>
              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label require" for="imagen">Foto:</label><br>
                  <small>(400px x 300px)</small>
                </div>
                <div class="col-4 col-lg-8">
                  <input class="form-control" id="imagen" name="imagen" type="text" value="<?php echo $imagen; ?>" required>
                  <div class="invalid-feedback"></div>
                </div>
                <div class="col-4 col-lg-2">
                  <button class="btn btn-info" type="button" name="boton2" onClick="javascript:Imagen('MIM');" /><i class="fa fa-save"></i> Examinar</button>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="nombre">Nombres:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <?php if($xVisitante=="1"){ ?><p><?php echo $nombre; ?></p><?php } ?>
                  <input class="form-control" name="nombre" type="<?php if($xVisitante=="1"){ ?>hidden<?php }else{ ?>text<?php } ?>" id="nombre" value="<?php echo $nombre; ?>" />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="cargo">Cargo:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <?php if($xVisitante=="1"){ ?><p><?php echo $cargo; ?></p><?php } ?>
                  <input class="form-control" name="cargo" type="<?php if($xVisitante=="1"){ ?>hidden<?php }else{ ?>text<?php } ?>" id="cargo" value="<?php echo $cargo; ?>" />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="descripcion">Descripci&oacute;n:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <textarea class="form-control" name="descripcion" id="descripcion"><?php echo $descripcion; ?></textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="orden">Orden:</label>
                </div>
                <div class="col-2 col-lg-1">
                  <input class="form-control" name="orden" type="text" id="orden" onKeyPress="return soloNumeros(event)" value="<?php echo $orden; ?>" />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="estado">Estado:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <?php if($xVisitante=="1"){ ?><p><?php if($estado=="1"){ echo "[Activo]";}else{ echo "[Inactivo]"; } ?></p><?php }else{ ?>
                  <input type="checkbox" name="estado" data-size="small" data-provide="switchery" value="1" <?php if($estado=="1"){echo "checked";} ?>>
                  <?php } ?>
                </div>
              </div>

            </div>

            <footer class="card-footer">
              <a href="nosotros.php" class="btn btn-secondary"><i class="fa fa-times"></i> Cancelar</a>
              <button class="btn btn-bold btn-primary" type="button" name="boton" onClick="javascript:Validar();" /><i class="fa fa-refresh"></i> Guardar Cambios</button>
              <input type="hidden" name="proceso">
              <input type="hidden" name="cod_miembro" value="<?php echo $cod_miembro; ?>">
            </footer>

          </form>
        </div>
      </div><!--/.main-content -->
      <?php include("module/footer_int.php"); ?>
    </main>
    <!-- END Main container -->
  </body>
</html>