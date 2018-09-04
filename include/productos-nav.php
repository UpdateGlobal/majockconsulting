    <script type="text/javascript" src="/jquery.min.js"></script>
    <script type="text/javascript" src="/jquery.sticky.js"></script>
    <script>
        $(window).load(function(){
            $("#stickera").sticky({ topSpacing: 50 });
        });
    </script>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <div class="single-service-inner-tab" id="stickera">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <?php
                    $consultarProducto = "SELECT * FROM productos WHERE estado='1' ORDER BY orden";
                    $resultadoProducto = mysqli_query($enlaces,$consultarProducto) or die('Consulta fallida: ' . mysqli_error($enlaces));
                    while($filaPro = mysqli_fetch_array($resultadoProducto)){
                        $xCodigo    = $filaPro['cod_producto'];
                        $xSlug      = $filaPro['slug'];
                        $xProducto  = $filaPro['titulo'];
                ?>
                <li<?php if($menu==$xCodigo){ ?> class="active" <?php } ?>><a href="/producto/<?php echo $xSlug; ?>"><?php echo $xProducto; ?></a></li>
                <?php
                    }
                    mysqli_free_result($resultadoProducto);
                ?>
            </ul>
        </div>
    </div>