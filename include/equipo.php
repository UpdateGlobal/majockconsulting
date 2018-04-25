<div class="portfolio4-area service1-area">
    <div class="container">
        <div class="row">
            <div class="section-styling-area">
                <?php
                    $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='1' AND estado='1'";
                    $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
                    $filaCon = mysqli_fetch_array($resultadoCon);
                        $xTitulo      = $filaCon['titulo_contenido'];
                        $xContenido   = $filaCon['contenido'];
                ?>
                <h2><?php echo $xTitulo; ?></h2>
                <p class="icon-border"><i class="fa fa-clone" aria-hidden="true"></i></p>
                <p class="section-text"><?php echo $xContenido; ?></p>
                <?php
                  mysqli_free_result($resultadoCon);
                ?>
            </div>
        </div>
        <div class="row">
            <?php
                $consultarMiembros = "SELECT * FROM equipo_miembros WHERE estado='1' ORDER BY orden";
                $resultadoMiembros = mysqli_query($enlaces,$consultarMiembros) or die('Consulta fallida: ' . mysqli_error($enlaces));
                while($filaMim = mysqli_fetch_array($resultadoMiembros)){
                    $xNombre        = $filaMim['nombre'];
                    $xImagen        = $filaMim['imagen'];
                    $xCargo         = $filaMim['cargo'];
                    $xDescripcion   = $filaMim['descripcion'];
            ?>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="single-portfolio-area">
                    <div class="portfolio-img">
                        <img src="/cms/assets/img/miembros/<?php echo $xImagen; ?>" />
                    </div>
                    <div class="portfolio2-overley">
                        <div class="content">
                            <h3><a><?php echo $xNombre; ?><br><span class="cargo-titulo"><?php echo $xCargo; ?></span></a></h3>
                            <p><?php echo $xDescripcion; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                }
                mysqli_free_result($resultadoMiembros);
            ?>
        </div>
    </div>
</div>