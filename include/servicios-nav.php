    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <div class="single-service-inner-tab">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <?php
                    $consultarServicio = "SELECT * FROM servicios WHERE estado='1' ORDER BY orden";
                    $resultadoServicio = mysqli_query($enlaces,$consultarServicio) or die('Consulta fallida: ' . mysqli_error($enlaces));
                    while($filaSer = mysqli_fetch_array($resultadoServicio)){
                        $xCodigo    = $filaSer['cod_servicio'];
                        $xSlug      = $filaSer['slug'];
                        $xServicio  = $filaSer['titulo'];
                ?>
                <li<?php if($menu==$xCodigo){ ?> class="active" <?php } ?>><a href="/servicio/<?php echo $xSlug; ?>"><?php echo $xServicio; ?></a></li>
                <?php
                    }
                    mysqli_free_result($resultadoServicio);
                ?>
            </ul>
        </div>
    </div>