<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php
$cod_contenido  = $_REQUEST['cod_contenido'];
if (isset($_REQUEST['proceso'])) {
  $proceso  = $_POST['proceso'];
} else {
  $proceso  = "";
}
if($proceso==""){
  $consultaCon = "SELECT * FROM contenidos WHERE cod_contenido='$cod_contenido'";
  $ejecutarCon = mysqli_query($enlaces,$consultaCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
  $filaCon = mysqli_fetch_array($ejecutarCon);
  $cod_contenido    = $filaCon['cod_contenido'];
  $img_contenido    = $filaCon['img_contenido'];
  $estado           = $filaCon['estado'];
}

if($proceso == "Actualizar"){
  $cod_contenido    = $_POST['cod_contenido'];
  $img_contenido    = $_POST['img_contenido'];
  $estado           = $_POST['estado'];

  $ActualizarCon = "UPDATE contenidos SET cod_contenido='$cod_contenido', img_contenido='$img_contenido', estado='$estado' WHERE cod_contenido='$cod_contenido'";
  $resultadoActualizar = mysqli_query($enlaces,$ActualizarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));

  if($cod_contenido==5){
    header("Location:nosotros.php");
  };
  if($cod_contenido==6){
    header("Location:productos.php");
  };
  if($cod_contenido==7){
    header("Location:servicios.php");
  };
  if($cod_contenido==8){
    header("Location:noticias.php");
  };
  if($cod_contenido==9){
    header("Location:contacto.php");
  };
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include("module/head.php"); ?>
    <script type="text/javascript" src="assets/js/rutinas.js"></script>
    <script>
    function Validar(){
      
      document.fcms.action = "imagenes-edit.php";
      document.fcms.proceso.value="Actualizar";
      document.fcms.submit();
    }
    function Imagen(codigo){
      url = "agregar-foto.php?id=" + codigo;
      AbrirCentro(url,'Agregar', 475, 180, 'no', 'no');
    }
    </script>
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
    <?php if($cod_contenido==5){ $menu="nosotros"; };
          if($cod_contenido==6){ $menu="productos"; };
          if($cod_contenido==7){ $menu="servicios"; };
          if($cod_contenido==8){ $menu="noticias"; };
          if($cod_contenido==9){ $menu="contacto"; };
          include("module/menu.php"); ?>
    <?php include("module/header.php"); ?>
    <!-- Main container -->
    <main>
      <header class="header bg-ui-general">
        <div class="header-info">
          <h1 class="header-title">
            <strong><?php if($cod_contenido==5){ ?>Nosotros<?php };
                          if($cod_contenido==6){ ?>Productos<?php };
                          if($cod_contenido==7){ ?>Servicios<?php };
                          if($cod_contenido==8){ ?>Noticias<?php };
                          if($cod_contenido==9){ ?>Cont&aacute;cto<?php }; ?></strong>
            <small></small>
          </h1>
        </div>
      </header><!--/.header -->
      <div class="main-content">
        <div class="card">
          <h4 class="card-title"><strong>Editar Contenidos</strong></h4>
          <form class="fcms" name="fcms" method="post" action="" data-provide="validation" data-disable="false">
            <div class="card-body">
              <?php if($cod_contenido=='1'){ ?>
              <?php }else{ ?>
              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="logo">Imagen:</label><br>
                  <small>(1930px × 276px)</small>
                </div>
                <div class="col-4 col-lg-8">
                  <?php if($xVisitante=="1"){ ?><p><?php echo $img_contenido; ?></p><?php } ?>
                  <input class="form-control" id="img_contenido" name="img_contenido" type="<?php if($xVisitante=="1"){ ?>hidden<?php }else{ ?>text<?php } ?>" value="<?php echo $img_contenido; ?>" />
                </div>
                <div class="col-4 col-lg-2">
                  <?php if($xVisitante=="0"){ ?>
                  <button class="btn btn-bold btn-info" type="button" name="boton4" onClick="javascript:Imagen('NOS');" /><i class="fa fa-save"></i> Examinar</button>
                  <?php } ?>
                </div>
              </div>
              <?php } ?>
              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="description">Estado:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <?php if($xVisitante=="1"){ ?><p><?php if($estado=="1"){ echo "[Activo]";}else{ echo "[Inactivo]"; } ?></p><?php }else{ ?>
                  <input type="checkbox" name="estado" data-size="small" data-provide="switchery" value="1" <?php if($estado=="1"){echo "checked";} ?>>
                  <?php } ?>
                </div>
              </div>

            </div>
            <footer class="card-footer">
              <?php if($cod_contenido=='5'){ ?>
              <a href="nosotros.php" class="btn btn-secondary"><i class="fa fa-times"></i> Cancelar</a>
              <?php } ?>
              <?php if($cod_contenido=='6'){ ?>
              <a href="productos.php" class="btn btn-secondary"><i class="fa fa-times"></i> Cancelar</a>
              <?php } ?>
              <?php if($cod_contenido=='7'){ ?>
              <a href="servicios.php" class="btn btn-secondary"><i class="fa fa-times"></i> Cancelar</a>
              <?php } ?>
              <?php if($cod_contenido=='8'){ ?>
              <a href="noticias.php" class="btn btn-secondary"><i class="fa fa-times"></i> Cancelar</a>
              <?php } ?>
              <?php if($cod_contenido=='9'){ ?>
              <a href="contacto.php" class="btn btn-secondary"><i class="fa fa-times"></i> Cancelar</a>
              <?php } ?>
              <button class="btn btn-bold btn-primary" type="button" name="boton" onClick="javascript:Validar();" /><i class="fa fa-refresh"></i> Guardar Cambios</button>
              <input type="hidden" name="proceso">
              <input type="hidden" name="cod_contenido" value="<?php echo $cod_contenido; ?>">
            </footer>
          </form>
        </div>
      </div><!--/.main-content -->
      <?php include("module/footer_int.php"); ?>
    </main>
    <!-- END Main container -->
  </body>
</html>