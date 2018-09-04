<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php
$mensaje = "";
if (isset($_REQUEST['proceso'])) {
  $proceso  = $_POST['proceso'];
} else {
  $proceso  = "";
}
if($proceso == "Registrar"){
  $titulo       = mysqli_real_escape_string($enlaces, $_POST['titulo']);
  $slug         = $titulo;
  $slug         = preg_replace('~[^\pL\d]+~u', '-', $slug);
  $slug         = iconv('utf-8', 'us-ascii//TRANSLIT', $slug);
  $slug         = preg_replace('~[^-\w]+~', '', $slug);
  $slug         = trim($slug, '-');
  $slug         = preg_replace('~-+~', '-', $slug);
  $slug         = strtolower($slug);
  if (empty($slug)){
      return 'n-a';
  }
  $imagen       = $_POST['imagen'];
  $descripcion  = mysqli_real_escape_string($enlaces, $_POST['descripcion']);
  if(isset($_POST['orden'])){$orden = $_POST['orden'];}else{$orden = 0;}
  if(isset($_POST['estado'])){$estado = $_POST['estado'];}else{$estado = 0;}

  /* ---  --- */
  if(isset($_POST['subtitulo'])){$subtitulo = $_POST['subtitulo'];}else{$subtitulo = "";}
  if(isset($_POST['titulo_a'])){$titulo_a = $_POST['titulo_a'];}else{$titulo_a = "";}
  if(isset($_POST['contenido_a'])){$contenido_a = $_POST['contenido_a'];}else{$contenido_a = "";}
  if(isset($_POST['titulo_b'])){$titulo_b = $_POST['titulo_b'];}else{$titulo_b = "";}
  if(isset($_POST['contenido_b'])){$contenido_b = $_POST['contenido_b'];}else{$contenido_b = "";}
  if(isset($_POST['titulo_c'])){$titulo_c = $_POST['titulo_c'];}else{$titulo_c = "";}
  if(isset($_POST['contenido_c'])){$contenido_c = $_POST['contenido_c'];}else{$contenido_c = "";}
  if(isset($_POST['estado_tab'])){$estado_tab = $_POST['estado_tab'];}else{$estado_tab = 0;}
      
  $insertarServicio = "INSERT INTO servicios(slug, titulo, imagen, descripcion, orden, estado, subtitulo, titulo_a, contenido_a, titulo_b, contenido_b, titulo_c, contenido_c, estado_tab) VALUE ('$slug', '$titulo', '$imagen', '$descripcion', '$orden', '$estado', '$subtitulo', '$titulo_a', '$contenido_a', '$titulo_b', '$contenido_b', '$titulo_c', '$contenido_c', '$estado_tab')";
  $resultadoInsertar = mysqli_query($enlaces,$insertarServicio);
  $mensaje = "<div class='alert alert-success' role='alert'>
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
          <strong>Nota:</strong> El servicio se registr&oacute; con exitosamente. <a href='servicios.php'>Ir a servicios</a>
        </div>";
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <?php include("module/head.php"); ?>
    <script type="text/javascript" src="assets/js/rutinas.js"></script>
    <script>
    function Validar(){
      if(document.fcms.titulo.value==""){
        alert("Debe escribir un título");
        document.fcms.titulo.focus();
        return;
      }
      document.fcms.action = "servicio-nuevo.php";
      document.fcms.proceso.value="Registrar";
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
    <?php $menu="servicios"; include("module/menu.php"); ?>
    <?php include("module/header.php"); ?>
    <!-- Main container -->
    <main>
      <header class="header bg-ui-general">
        <div class="header-info">
          <h1 class="header-title">
            <strong>Servicios</strong>
            <small></small>
          </h1>
        </div>
      </header><!--/.header -->
      <div class="main-content">
        <div class="card">
          <h4 class="card-title"><strong>Servicio Nuevo</strong></h4>
          <form class="fcms" name="fcms" method="post" action="" data-provide="validation" data-disable="false">
            <div class="card-body">
              <?php if(isset($mensaje)){ echo $mensaje; } else {}; ?>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label required" for="titulo">T&iacute;tulo:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input class="form-control" name="titulo" type="text" id="titulo" required/>
                  <div class="invalid-feedback"></div>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="imagen">Imagen:</label><br>
                  <small>(847px x 557px)</small>
                </div>
                <div class="col-4 col-lg-8">
                  <input class="form-control" id="imagen" name="imagen" type="text">
                </div>
                <div class="col-4 col-lg-2">
                  <button class="btn btn-info" type="button" name="boton2" onClick="javascript:Imagen('SER');" /><i class="fa fa-save"></i> Examinar</button>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="texto">Texto:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <textarea data-provide="summernote" id="descripcion" name="descripcion" data-min-height="150"></textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="orden">Orden:</label>
                </div>
                <div class="col-2 col-lg-1">
                  <input class="form-control" name="orden" type="text" id="orden" onKeyPress="return soloNumeros(event)" />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="estado">Estado:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input type="checkbox" name="estado" data-size="small" data-provide="switchery" value="1" checked>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-12 col-lg-12">
                  <div class="accordion" id="accordion-1">
                    <div class="card">
                      <h5 class="card-title">
                        <a data-toggle="collapse" data-parent="#accordion-1" href="#collapse-1-1">Caracter&iacute;sticas Adicionales</a>
                      </h5>
                      <div id="collapse-1-1" class="collapse">
                        <div class="card-body">
                          <div class="form-group row">
                            <div class="col-4 col-lg-2">
                              <label class="col-form-label" for="subtitulo">Subt&iacute;tulo:</label>
                            </div>
                            <div class="col-8 col-lg-10">
                              <input class="form-control" id="subtitulo" name="subtitulo" type="text" />
                              <div class="invalid-feedback"></div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-4 col-lg-2">
                              <label class="col-form-label" for="titulo_a">T&iacute;tulo (Tab 1):</label>
                            </div>
                            <div class="col-8 col-lg-10">
                              <input class="form-control" id="titulo_a" name="titulo_a" type="text" />
                              <div class="invalid-feedback"></div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-4 col-lg-2">
                              <label class="col-form-label" for="contenido_a">Descripci&oacute;n (Tab 1):</label>
                            </div>
                            <div class="col-8 col-lg-10">
                              <textarea class="form-control" name="contenido_a" id="contenido_a" data-provide="summernote" data-min-height="150"></textarea>
                            </div>
                          </div>
                          <hr>
                          <div class="form-group row">
                            <div class="col-4 col-lg-2">
                              <label class="col-form-label" for="titulo_b">T&iacute;tulo (Tab 2):</label>
                            </div>
                            <div class="col-8 col-lg-10">
                              <input class="form-control" id="titulo_b" name="titulo_b" type="text" />
                              <div class="invalid-feedback"></div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-4 col-lg-2">
                              <label class="col-form-label" for="contenido_b">Descripci&oacute;n (Tab 2):</label>
                            </div>
                            <div class="col-8 col-lg-10">
                              <textarea class="form-control" name="contenido_b" id="contenido_b" data-provide="summernote" data-min-height="150"></textarea>
                            </div>
                          </div>
                          <hr>
                          <div class="form-group row">
                            <div class="col-4 col-lg-2">
                              <label class="col-form-label" for="titulo_c">T&iacute;tulo (Tab 3):</label>
                            </div>
                            <div class="col-8 col-lg-10">
                              <input class="form-control" id="titulo_c" name="titulo_c" type="text" />
                              <div class="invalid-feedback"></div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-4 col-lg-2">
                              <label class="col-form-label" for="contenido_c">Descripci&oacute;n (Tab 3):</label>
                            </div>
                            <div class="col-8 col-lg-10">
                              <textarea class="form-control" name="contenido_c" id="contenido_c" data-provide="summernote" data-min-height="150"></textarea>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-4 col-lg-2">
                              <label class="col-form-label" for="estado_tab">Estado (Mostrar tabs):</label>
                            </div>
                            <div class="col-8 col-lg-10">
                              <input type="checkbox" name="estado_tab" data-size="small" data-provide="switchery" value="1">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>  
                </div>
              </div>

            </div>

            <footer class="card-footer">
              <a href="servicios.php" class="btn btn-secondary"><i class="fa fa-times"></i> Cancelar</a>
              <button class="btn btn-bold btn-primary" type="button" name="boton" onClick="javascript:Validar();" /><i class="fa fa-chevron-circle-right"></i> Registrar Servicio</button>
              <input type="hidden" name="proceso">
            </footer>

          </form>
        </div>
      </div><!--/.main-content -->
      <?php include("module/footer_int.php"); ?>
    </main>
    <!-- END Main container -->
  </body>
</html>