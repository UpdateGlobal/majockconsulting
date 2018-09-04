<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php
$cod_icono = $_REQUEST['cod_icono'];
if (isset($_REQUEST['proceso'])) {
  $proceso  = $_POST['proceso'];
} else {
  $proceso  = "";
}
if($proceso == ""){
  $consultaIcono = "SELECT * FROM iconos WHERE cod_icono='$cod_icono'";
  $ejecutarIcono = mysqli_query($enlaces,$consultaIcono) or die('Consulta fallida: ' . mysqli_error($enlaces));
  $filaIco = mysqli_fetch_array($ejecutarIcono);
  $xCodigo      = $filaIco['cod_icono'];
  $xTitulo      = $filaIco['titulo'];
  $xDescripcion = $filaIco['descripcion'];
  $xIcono       = $filaIco['icono'];
  $xEstado      = $filaIco['estado'];
}

if($proceso=="Actualizar"){ 
  $cod_icono   = $_POST['cod_icono'];
  $titulo      = $_POST['titulo'];
  $descripcion = $_POST['descripcion'];
  $icono       = $_POST['icono'];
  $estado      = $_POST['estado'];

  $actualizarIcono = "UPDATE iconos SET cod_icono='$cod_icono', titulo='$titulo', descripcion='$descripcion', icono='$icono', estado='$estado' WHERE cod_icono='$cod_icono'";
  $resultadoActualizar = mysqli_query($enlaces,$actualizarIcono) or die('Consulta fallida: ' . mysqli_error($enlaces));               
  header("Location:general.php");
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include("module/head.php"); ?>
    <script type="text/javascript" src="assets/js/rutinas.js"></script>
    <script>
      function Validar(){
        document.fcms.action = "icono-edit.php";
        document.fcms.proceso.value="Actualizar";
        document.fcms.submit();
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
        <div class="card">
          <h4 class="card-title"><strong>Editar Contenido</strong></h4>
          <form class="fcms" name="fcms" method="post" action="" data-provide="validation" data-disable="false">
            <div class="card-body">

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="titulo">T&iacute;tulo:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input class="form-control" name="titulo" type="text" id="titulo" value="<?php echo $xTitulo; ?>" />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="descripcion">Texto:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <textarea class="form-control" name="descripcion" type="text" id="descripcion"><?php echo $xDescripcion; ?></textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="icono">&Iacute;cono:</label>
                </div>
                <div class="col-8 col-lg-4">
                  <input class="form-control" name="icono" type="text" id="icono" value="<?php echo $xIcono; ?>" />                 
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="estado">Estado:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input type="checkbox" name="estado" data-size="small" data-provide="switchery" value="1" <?php if($xEstado="1"){echo "checked";} ?>>
                </div>
              </div>

            </div>

            <footer class="card-footer">
              <a href="general.php" class="btn btn-secondary"><i class="fa fa-times"></i> Cancelar</a>
              <button class="btn btn-bold btn-primary" type="button" name="boton" onClick="javascript:Validar();" /><i class="fa fa-refresh"></i> Guardar Cambios</button>
              <input type="hidden" name="proceso">
              <input type="hidden" name="cod_icono" value="<?php echo $xCodigo; ?>">
            </footer>

          </form>
        </div>
      </div><!--/.main-content -->
      <?php include("module/footer_int.php"); ?>
    </main>
    <!-- END Main container -->
  </body>
</html>