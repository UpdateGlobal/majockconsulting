<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php
$cod_servicio   = $_REQUEST['cod_servicio'];
if (isset($_REQUEST['proceso'])) {
  $proceso  = $_POST['proceso'];
} else {
  $proceso  = "";
}
if($proceso == ""){
  $consultaServicios = "SELECT * FROM servicios WHERE cod_servicio='$cod_servicio'";
  $ejecutarServicios = mysqli_query($enlaces,$consultaServicios) or die('Consulta fallida: ' . mysqli_error($enlaces));
  $filaSer = mysqli_fetch_array($ejecutarServicios);
  $cod_servicio = $filaSer['cod_servicio'];
  $titulo      = $filaSer['titulo'];
  $imagen      = $filaSer['imagen'];
  $descripcion = $filaSer['descripcion'];
  $descripcion_b = $filaSer['descripcion_b'];
  $orden       = $filaSer['orden'];
  $estado      = $filaSer['estado'];
  $subtitulo      = $filaSer['subtitulo'];
  $tab_a          = $filaSer['tab_a'];
  $titulo_a       = $filaSer['titulo_a'];
  $contenido_a    = $filaSer['contenido_a'];
  $img_a          = $filaSer['img_a'];
  $tab_b          = $filaSer['tab_b'];
  $titulo_b       = $filaSer['titulo_b'];
  $contenido_b    = $filaSer['contenido_b'];
  $img_b          = $filaSer['img_b'];
  $tab_c          = $filaSer['tab_c'];
  $titulo_c       = $filaSer['titulo_c'];
  $contenido_c    = $filaSer['contenido_c'];
  $img_c          = $filaSer['img_c'];
  $estado_tab     = $filaSer['estado_tab'];
}
if($proceso=="Actualizar"){
  $cod_servicio     = $_POST['cod_servicio'];
  $titulo           = mysqli_real_escape_string($enlaces, $_POST['titulo']);
  $slug             = $titulo;
  $slug             = preg_replace('~[^\pL\d]+~u', '-', $slug);
  $slug             = iconv('utf-8', 'us-ascii//TRANSLIT', $slug);
  $slug             = preg_replace('~[^-\w]+~', '', $slug);
  $slug             = trim($slug, '-');
  $slug             = preg_replace('~-+~', '-', $slug);
  $slug             = strtolower($slug);
  if (empty($slug)){
      return 'n-a';
  }
  $imagen           = $_POST['imagen'];
  $descripcion      = mysqli_real_escape_string($enlaces, $_POST['descripcion']);
  $descripcion_b    = mysqli_real_escape_string($enlaces, $_POST['descripcion_b']);
  if(isset($_POST['orden'])){$orden = $_POST['orden'];}else{$orden = 0;}
  if(isset($_POST['estado'])){$estado = $_POST['estado'];}else{$estado = 0;}
  if(isset($_POST['tab_a'])){$tab_a = $_POST['tab_a'];}else{$tab_a = "";}
  if(isset($_POST['subtitulo'])){$subtitulo = $_POST['subtitulo'];}else{$subtitulo = "";}
  if(isset($_POST['titulo_a'])){$titulo_a = $_POST['titulo_a'];}else{$titulo_a = "";}
  if(isset($_POST['img_a'])){$img_a = $_POST['img_a'];}else{$img_a = "";}
  if(isset($_POST['contenido_a'])){$contenido_a = $_POST['contenido_a'];}else{$contenido_a = "";}
  if(isset($_POST['tab_b'])){$tab_b = $_POST['tab_b'];}else{$tab_b = "";}
  if(isset($_POST['titulo_b'])){$titulo_b = $_POST['titulo_b'];}else{$titulo_b = "";}
  if(isset($_POST['img_b'])){$img_b = $_POST['img_b'];}else{$img_b = "";}
  if(isset($_POST['contenido_b'])){$contenido_b = $_POST['contenido_b'];}else{$contenido_b = "";}
  if(isset($_POST['tab_c'])){$tab_c = $_POST['tab_c'];}else{$tab_c = "";}
  if(isset($_POST['titulo_c'])){$titulo_c = $_POST['titulo_c'];}else{$titulo_c = "";}
  if(isset($_POST['img_c'])){$img_c = $_POST['img_c'];}else{$img_c = "";}
  if(isset($_POST['contenido_c'])){$contenido_c = $_POST['contenido_c'];}else{$contenido_c = "";}
  if(isset($_POST['estado_tab'])){$estado_tab = $_POST['estado_tab'];}else{$estado_tab = 0;}

  $actualizarServicios  = "UPDATE servicios SET cod_servicio='$cod_servicio', slug='$slug', titulo='$titulo', imagen='$imagen', descripcion='$descripcion', descripcion_b='$descripcion_b', orden='$orden', estado='$estado', subtitulo='$subtitulo', tab_a='$tab_a', titulo_a='$titulo_a', img_a='$img_a', contenido_a='$contenido_a', tab_b='$tab_b', titulo_b='$titulo_b', img_b='$img_b', contenido_b='$contenido_b', tab_c='$tab_c', titulo_c='$titulo_c', img_c='$img_c', contenido_c='$contenido_c', estado_tab='$estado_tab' WHERE cod_servicio='$cod_servicio'";
  $resultadoActualizar = mysqli_query($enlaces,$actualizarServicios) or die('Consulta fallida: ' . mysqli_error($enlaces));
  header("Location:servicios.php");
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <?php include("module/head.php"); ?>
    <script type="text/javascript" src="assets/js/rutinas.js"></script>
    <script>
    function Validar(){
      if(document.fcms.titulo.value==""){
        alert("Debe escribir un título");
        document.fcms.titulo.focus();
        return;
      }
      document.fcms.action = "servicio-edit.php";
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
                  <input class="form-control" name="titulo" type="text" id="titulo" value="<?php echo $titulo; ?>" required/>
                  <div class="invalid-feedback"></div>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="imagen">Imagen:</label><br>
                  <small>(847px x 557px)</small>
                </div>
                <div class="col-4 col-lg-8">
                  <input class="form-control" id="imagen" name="imagen" type="text" value="<?php echo $imagen; ?>">
                </div>
                <div class="col-4 col-lg-2">
                  <button class="btn btn-info" type="button" name="boton2" onClick="javascript:Imagen('SER');" /><i class="fa fa-save"></i> Examinar</button>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="descripcion">Descripci&oacute;n:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <textarea data-provide="summernote" id="descripcion" name="descripcion" data-toolbar="full" data-min-height="150"><?php echo $descripcion; ?></textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="descripcion_b">Descripci&oacute;n 2:</label>
                  <small>(Descripci&oacute;n Larga)</small>
                </div>
                <div class="col-8 col-lg-10">
                  <textarea data-provide="summernote" id="descripcion_b" name="descripcion_b" data-toolbar="full" data-min-height="150"><?php echo $descripcion_b; ?></textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="orden">Orden:</label>
                </div>
                <div class="col-2 col-lg-1">
                  <input class="form-control" name="orden" type="text" id="orden" value="<?php echo $orden; ?>" onKeyPress="return soloNumeros(event)" />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="estado">Estado:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input type="checkbox" id="estado" name="estado" data-size="small" data-provide="switchery" value="1" <?php if($estado=="1"){echo "checked";} ?>>
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
                              <input class="form-control" id="subtitulo" name="subtitulo" type="text" value="<?php echo $subtitulo; ?>" />
                              <div class="invalid-feedback"></div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-4 col-lg-2">
                              <label class="col-form-label" for="tab_a">Tab 1:</label>
                            </div>
                            <div class="col-8 col-lg-10">
                              <input class="form-control" id="tab_a" name="tab_a" type="text" value="<?php echo $tab_a; ?>" />
                              <div class="invalid-feedback"></div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-4 col-lg-2">
                              <label class="col-form-label" for="titulo_a">T&iacute;tulo (Tab 1):</label>
                            </div>
                            <div class="col-8 col-lg-10">
                              <input class="form-control" id="titulo_a" name="titulo_a" type="text" value="<?php echo $titulo_a; ?>" />
                              <div class="invalid-feedback"></div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-4 col-lg-2">
                              <label class="col-form-label" for="img_a">Imagen:</label><br>
                              <small>(385px x 400px)</small>
                            </div>
                            <div class="col-4 col-lg-8">
                              <input class="form-control" id="img_a" name="img_a" type="text" value="<?php echo $img_a; ?>">
                            </div>
                            <div class="col-4 col-lg-2">
                              <button class="btn btn-info" type="button" name="boton2" onClick="javascript:Imagen('SERGALA');" /><i class="fa fa-save"></i> Examinar</button>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-4 col-lg-2">
                              <label class="col-form-label" for="contenido_a">Descripci&oacute;n (Tab 1):</label>
                            </div>
                            <div class="col-8 col-lg-10">
                              <textarea class="form-control" name="contenido_a" id="contenido_a" data-provide="summernote" data-toolbar="full" data-min-height="150"><?php echo $contenido_a; ?></textarea>
                            </div>
                          </div>
                          <hr>
                          <div class="form-group row">
                            <div class="col-4 col-lg-2">
                              <label class="col-form-label" for="tab_b">Tab 2:</label>
                            </div>
                            <div class="col-8 col-lg-10">
                              <input class="form-control" id="tab_b" name="tab_b" type="text" value="<?php echo $tab_b; ?>" />
                              <div class="invalid-feedback"></div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-4 col-lg-2">
                              <label class="col-form-label" for="titulo_b">T&iacute;tulo 2 (Tab 2):</label>
                            </div>
                            <div class="col-8 col-lg-10">
                              <input class="form-control" id="titulo_b" name="titulo_b" type="text" value="<?php echo $titulo_b; ?>" />
                              <div class="invalid-feedback"></div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-4 col-lg-2">
                              <label class="col-form-label" for="img_b">Imagen:</label><br>
                              <small>(385px x 400px)</small>
                            </div>
                            <div class="col-4 col-lg-8">
                              <input class="form-control" id="img_b" name="img_b" type="text" value="<?php echo $img_b; ?>">
                            </div>
                            <div class="col-4 col-lg-2">
                              <button class="btn btn-info" type="button" name="boton2" onClick="javascript:Imagen('SERGALB');" /><i class="fa fa-save"></i> Examinar</button>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-4 col-lg-2">
                              <label class="col-form-label" for="contenido_b">Descripci&oacute;n (Tab 2):</label>
                            </div>
                            <div class="col-8 col-lg-10">
                              <textarea class="form-control" name="contenido_b" id="contenido_b" data-provide="summernote" data-toolbar="full" data-min-height="150"><?php echo $contenido_b; ?></textarea>
                            </div>
                          </div>
                          <hr>
                          <div class="form-group row">
                            <div class="col-4 col-lg-2">
                              <label class="col-form-label" for="tab_c">Tab 3:</label>
                            </div>
                            <div class="col-8 col-lg-10">
                              <input class="form-control" id="tab_c" name="tab_c" type="text" value="<?php echo $tab_c; ?>" />
                              <div class="invalid-feedback"></div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-4 col-lg-2">
                              <label class="col-form-label" for="titulo_c">T&iacute;tulo (Tab 3):</label>
                            </div>
                            <div class="col-8 col-lg-10">
                              <input class="form-control" id="titulo_c" name="titulo_c" type="text" value="<?php echo $titulo_c; ?>" />
                              <div class="invalid-feedback"></div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-4 col-lg-2">
                              <label class="col-form-label" for="img_c">Imagen:</label><br>
                              <small>(385px x 400px)</small>
                            </div>
                            <div class="col-4 col-lg-8">
                              <input class="form-control" id="img_c" name="img_c" type="text" value="<?php echo $img_c; ?>">
                            </div>
                            <div class="col-4 col-lg-2">
                              <button class="btn btn-info" type="button" name="boton2" onClick="javascript:Imagen('SERGALC');" /><i class="fa fa-save"></i> Examinar</button>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-4 col-lg-2">
                              <label class="col-form-label" for="contenido_c">Descripci&oacute;n (Tab 3):</label>
                            </div>
                            <div class="col-8 col-lg-10">
                              <textarea class="form-control" name="contenido_c" id="contenido_c" data-provide="summernote" data-toolbar="full" data-min-height="150"><?php echo $contenido_c; ?></textarea>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-4 col-lg-2">
                              <label class="col-form-label" for="estado_tab">Estado (Mostrar tabs):</label>
                            </div>
                            <div class="col-8 col-lg-10">
                              <input type="checkbox" name="estado_tab" data-size="small" data-provide="switchery" value="1" <?php if($estado=="1"){echo "checked";} ?>>
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
              <button class="btn btn-bold btn-primary" type="button" name="boton" onClick="javascript:Validar();" /><i class="fa fa-refresh"></i> Guardar Cambios</button>
              <input type="hidden" name="proceso">
              <input type="hidden" name="cod_servicio" value="<?php echo $cod_servicio; ?>">
            </footer>

          </form>
        </div>
      </div><!--/.main-content -->
      <?php include("module/footer_int.php"); ?>
    </main>
    <!-- END Main container -->
  </body>
</html>