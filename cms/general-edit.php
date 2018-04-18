<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php
$cod_general = $_REQUEST['cod_general'];
if (isset($_REQUEST['proceso'])) {
  $proceso  = $_POST['proceso'];
} else {
  $proceso  = "";
}
if($proceso == ""){
  $consultaGeneral = "SELECT * FROM general WHERE cod_general='$cod_general'";
  $ejecutarGeneral = mysqli_query($enlaces,$consultaGeneral) or die('Consulta fallida: ' . mysqli_error($enlaces));
  $filaGen = mysqli_fetch_array($ejecutarGeneral);
  $cod_general      = $filaGen['cod_general'];
  if ($cod_general == 1){
    $campo_1          = $filaGen['campo_1'];
    $campo_2          = $filaGen['campo_2'];
  }
  if ($cod_general == 2){
    $campo_1          = $filaGen['campo_1'];
    $campo_2          = $filaGen['campo_2'];
    $campo_3          = $filaGen['campo_3'];
    $campo_4          = $filaGen['campo_4'];
    $campo_5          = $filaGen['campo_5'];
    $campo_6          = $filaGen['campo_6'];
    $campo_7          = $filaGen['campo_7'];
  }
  if ($cod_general == 3){
    $campo_1          = $filaGen['campo_1'];
    $campo_2          = $filaGen['campo_2'];
  }
  if ($cod_general == 4){
    $campo_1          = $filaGen['campo_1'];
    $campo_2          = $filaGen['campo_2'];
    $campo_5          = $filaGen['campo_5'];
  }
  if ($cod_general == 5){
    $campo_1          = $filaGen['campo_1'];
    $campo_2          = $filaGen['campo_2'];
    $campo_5          = $filaGen['campo_5'];
  }
  if ($cod_general == 6){
    $campo_1          = $filaGen['campo_1'];
    $campo_2          = $filaGen['campo_2'];
    $campo_5          = $filaGen['campo_5'];
  }
  if ($cod_general == 7){
    $campo_1          = $filaGen['campo_1'];
    $campo_5          = $filaGen['campo_5'];
  }
  $estado           = $filaGen['estado'];
}

if($proceso=="Actualizar"){ 
  $cod_general      = $_POST['cod_general'];
  if ($cod_general == 1){
    $campo_1          = $_POST['campo_1'];
    $campo_2          = $_POST['campo_2'];
  }
  if ($cod_general == 2){
    $campo_1          = $_POST['campo_1'];
    $campo_2          = $_POST['campo_2'];
    $campo_3          = $_POST['campo_3'];
    $campo_4          = $_POST['campo_4'];
    $campo_5          = $_POST['campo_5'];
    $campo_6          = $_POST['campo_6'];
    $campo_7          = $_POST['campo_7'];
  }
  if ($cod_general == 3){
    $campo_1          = $_POST['campo_1'];
    $campo_2          = $_POST['campo_2'];
  }
  if ($cod_general == 4){
    $campo_1          = $_POST['campo_1'];
    $campo_2          = $_POST['campo_2'];
    $campo_5          = $_POST['campo_5'];
  }
  if ($cod_general == 5){
    $campo_1          = $_POST['campo_1'];
    $campo_2          = $_POST['campo_2'];
    $campo_5          = $_POST['campo_5'];
  }
  if ($cod_general == 6){
    $campo_1          = $_POST['campo_1'];
    $campo_2          = $_POST['campo_2'];
    $campo_5          = $_POST['campo_5'];
  }
  if ($cod_general == 7){
    $campo_1          = $_POST['campo_1'];
    $campo_5          = $_POST['campo_5'];
  }
  $estado           = $_POST['estado'];

  if ($cod_general == 1){
    $actualizarGeneral = "UPDATE general SET cod_general='$cod_general', campo_1='$campo_1', campo_2='$campo_2', estado='$estado' WHERE cod_general='$cod_general'";
  }
  if ($cod_general == 2){
    $actualizarGeneral = "UPDATE general SET cod_general='$cod_general', campo_1='$campo_1', campo_2='$campo_2', campo_3='$campo_3', campo_4='$campo_4', campo_5='$campo_5', campo_6='$campo_6', campo_7='$campo_7', estado='$estado' WHERE cod_general='$cod_general'";
  }
  if ($cod_general == 3){
    $actualizarGeneral = "UPDATE general SET cod_general='$cod_general', campo_1='$campo_1', campo_2='$campo_2', estado='$estado' WHERE cod_general='$cod_general'";
  }
  if ($cod_general == 4){
    $actualizarGeneral = "UPDATE general SET cod_general='$cod_general', campo_1='$campo_1', campo_2='$campo_2', campo_5='$campo_5', estado='$estado' WHERE cod_general='$cod_general'";
  }
  if ($cod_general == 5){
    $actualizarGeneral = "UPDATE general SET cod_general='$cod_general', campo_1='$campo_1', campo_2='$campo_2', estado='$estado' WHERE cod_general='$cod_general'";
  }
  if ($cod_general == 6){
    $actualizarGeneral = "UPDATE general SET cod_general='$cod_general', campo_1='$campo_1', campo_2='$campo_2', estado='$estado' WHERE cod_general='$cod_general'";
  }
  if ($cod_general == 7){
    $actualizarGeneral = "UPDATE general SET cod_general='$cod_general', campo_1='$campo_1', campo_5='$campo_5', estado='$estado' WHERE cod_general='$cod_general'";
  }

  $resultadoActualizar = mysqli_query($enlaces,$actualizarGeneral) or die('Consulta fallida: ' . mysqli_error($enlaces));               
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
        document.fcms.action = "general-edit.php";
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
              <?php if($cod_general == 1){ ?>
              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="campo_1">T&iacute;tulo:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input class="form-control" name="campo_1" type="text" id="campo_1" value="<?php echo $campo_1; ?>" />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="campo_2">Texto:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <textarea class="form-control" name="campo_2" type="text" id="campo_2"><?php echo $campo_2; ?></textarea>
                </div>
              </div>

              <?php } ?>
              <?php if($cod_general == 2){ ?>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="campo_1">T&iacute;tulo:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input class="form-control" name="campo_1" type="text" id="campo_1" value="<?php echo htmlspecialchars($campo_1); ?>" />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="campo_2">Fortaleza 1:</label>
                </div>
                <div class="col-8 col-lg-6">
                  <input class="form-control" name="campo_2" type="text" id="campo_2" value="<?php echo $campo_2; ?>" />
                </div>
                <div class="col-4 col-lg-1">
                  <label class="col-form-label" for="campo_5">Porcentaje:</label>
                </div>
                <div class="col-8 col-lg-3">
                  <input class="form-control" name="campo_5" type="text" id="campo_5" value="<?php echo htmlspecialchars($campo_5); ?>" />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="campo_3">Fortaleza 2:</label>
                </div>
                <div class="col-8 col-lg-6">
                  <input class="form-control" name="campo_3" type="text" id="campo_3" value="<?php echo $campo_3; ?>" />
                </div>
                <div class="col-4 col-lg-1">
                  <label class="col-form-label" for="campo_6">Porcentaje:</label>
                </div>
                <div class="col-8 col-lg-3">
                  <input class="form-control" name="campo_6" type="text" id="campo_6" value="<?php echo htmlspecialchars($campo_6); ?>" />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="campo_4">Fortaleza 3:</label>
                </div>
                <div class="col-8 col-lg-6">
                  <input class="form-control" name="campo_4" type="text" id="campo_4" value="<?php echo $campo_4; ?>" />
                </div>
                <div class="col-4 col-lg-1">
                  <label class="col-form-label" for="campo_7">Porcentaje:</label>
                </div>
                <div class="col-8 col-lg-3">
                  <input class="form-control" name="campo_7" type="text" id="campo_7" value="<?php echo htmlspecialchars($campo_7); ?>" />
                </div>
              </div>
              <?php } ?>
              <?php if($cod_general==3){ ?>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="campo_1">T&iacute;tulo:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input class="form-control" name="campo_1" type="text" id="campo_1" value="<?php echo htmlspecialchars($campo_1); ?>" />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="campo_2">Texto:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <textarea class="form-control" name="campo_2" type="text" id="campo_2"><?php echo htmlspecialchars($campo_2); ?></textarea>
                </div>
              </div>

              <?php } ?>
              <?php if($cod_general==4){ ?>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="campo_1">T&iacute;tulo:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input class="form-control" name="campo_1" type="text" id="campo_1" value="<?php echo $campo_1; ?>" />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="campo_2">Texto:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <textarea class="form-control" name="campo_2" type="text" id="campo_2"><?php echo $campo_2; ?></textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="campo_5">&Iacute;cono:</label>
                </div>
                <div class="col-8 col-lg-4">
                  <input class="form-control" name="campo_5" type="text" id="campo_5" value="<?php echo $campo_5; ?>" />                  
                </div>
              </div>

              <?php } ?>
              <?php if($cod_general==5){ ?>
              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="campo_1">T&iacute;tulo:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input class="form-control" name="campo_1" type="text" id="campo_1" value="<?php echo $campo_1; ?>" />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="campo_2">Texto:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <textarea class="form-control" name="campo_2" type="text" id="campo_2"><?php echo $campo_2; ?></textarea>
                </div>
              </div>

           

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="campo_5">&Iacute;cono:</label>
                </div>
                <div class="col-8 col-lg-4">
                  <select class="form-control" name="campo_5" id="campo_5">
                    <option value="<?php echo $campo_5; ?>"><?php echo $campo_5; ?> (Actual)</option>
                    <option value="fa-info-circle">&#xf05a Informaci&oacute;n</option>
                    <option value="fa-paper-plane-o">&#xf1d9 Avi&oacute;n de Papel</option>
                    <option value="fa-trophy">&#xf091 Trofeo</option>
                  </select>
                </div>
              </div>

              <?php } ?>
              <?php if($cod_general==6){ ?>
              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="campo_1">T&iacute;tulo:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input class="form-control" name="campo_1" type="text" id="campo_1" value="<?php echo $campo_1; ?>" />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="campo_2">Texto:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <textarea class="form-control" name="campo_2" type="text" id="campo_2"><?php echo $campo_2; ?></textarea>
                </div>
              </div>

              <style>
                select{
                  font-family: FontAwesome, sans-serif;
                }
              </style>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="campo_5">&Iacute;cono 1:</label>
                </div>
                <div class="col-8 col-lg-4">
                  <select class="form-control" name="campo_5" id="campo_5">
                    <option value="<?php echo $campo_5; ?>"><?php echo $campo_5; ?> (Actual)</option>
                    <option value="fa-info-circle">&#xf05a Informaci&oacute;n</option>
                    <option value="fa-paper-plane-o">&#xf1d9 Avi&oacute;n de Papel</option>
                    <option value="fa-trophy">&#xf091 Trofeo</option>
                  </select>
                </div>
              </div>

              <?php } ?>
              <?php if($cod_general==7){ ?>
              
              <div class="form-group row">
                <div class="col-2 col-lg-2">
                  <label class="col-form-label" for="campo_1">T&iacute;tulo:</label>
                </div>
                <div class="col-4 col-lg-4">
                  <input class="form-control" name="campo_1" type="text" id="campo_1" value="<?php echo $campo_1; ?>" />
                </div>
                <div class="col-2 col-lg-2">
                  <label class="col-form-label" for="campo_5">Enlace:</label>
                </div>
                <div class="col-4 col-lg-4">
                  <input class="form-control" name="campo_5" type="text" id="campo_5" value="<?php echo $campo_5; ?>" />
                </div>
              </div>

              <?php } ?>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="estado">Estado:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input type="checkbox" name="estado" data-size="small" data-provide="switchery" value="1" <?php if($estado="1"){echo "checked";} ?>>
                </div>
              </div>

            </div>

            <footer class="card-footer">
              <a href="general.php" class="btn btn-secondary"><i class="fa fa-times"></i> Cancelar</a>
              <button class="btn btn-bold btn-primary" type="button" name="boton" onClick="javascript:Validar();" /><i class="fa fa-refresh"></i> Guardar Cambios</button>
              <input type="hidden" name="proceso">
              <input type="hidden" name="cod_general" value="<?php echo $cod_general; ?>">
            </footer>

          </form>
        </div>
      </div><!--/.main-content -->
      <?php include("module/footer_int.php"); ?>
    </main>
    <!-- END Main container -->
  </body>
</html>