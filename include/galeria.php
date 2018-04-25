    <a name="servicios"></a><a name="productos"></a>
    <div class="portfolio1-area" style="background-color: rgb(200, 237, 240);">
        <div class="gallery-area">
            <div class="container">
                <div class="row">
                    <div class="section-styling-area">
                        <?php
                            $consultarGeneral = "SELECT * FROM general WHERE cod_general='3' AND estado='1'";
                            $resultadoGeneral = mysqli_query($enlaces,$consultarGeneral) or die('Consulta fallida: ' . mysqli_error($enlaces));
                            $filaGen = mysqli_fetch_array($resultadoGeneral);
                                $xTitulo      = $filaGen['campo_1'];
                                $xDescripcion = $filaGen['campo_2'];
                        ?>
                        <h2><?php echo $xTitulo; ?></h2>
                        <p class="icon-border"><i class="fa fa-clone" aria-hidden="true"></i></p>
                        <p class="section-text"><?php echo $xDescripcion; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="portfolioFilter">
                            <a href="#" data-filter=".productos">Productos</a>
                            <a href="#" data-filter=".servicios">Servicios</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="portfolioContainer">
                            <?php
                                $consultarProducto = "SELECT * FROM productos WHERE estado='1' ORDER BY orden";
                                $resultadoProducto = mysqli_query($enlaces,$consultarProducto) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                while($filaPro = mysqli_fetch_array($resultadoProducto)){
                                    $xCodigo    = $filaPro['cod_producto'];
                                    $xSlug      = $filaPro['slug'];
                                    $xProducto  = $filaPro['titulo'];
                                    $xImagen    = $filaPro['imagen'];
                                    $nump++;
                            ?>
                            
                            <div class="single-item productos all" <?php if($nump>3){?> style="display: none;" <?php } ?>>
                                <img src="/cms/assets/img/productos/<?php echo $xImagen; ?>" alt="<?php echo $xProducto; ?>">
                                <div class="portfolio1-overley">
                                    <div class="item-content">
                                        <h2><a href="/producto/<?php echo $xSlug; ?>"><?php echo $xProducto; ?></a></h2>
                                        <p>Majock Consulting || Productos</p>
                                    </div>
                                </div>
                            </div>
                            <?php
                                }
                                mysqli_free_result($resultadoProducto);
                            ?>
                            <?php
                                $consultarServicio = "SELECT * FROM servicios WHERE estado='1' ORDER BY orden";
                                $resultadoServicio = mysqli_query($enlaces,$consultarServicio) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                while($filaSer = mysqli_fetch_array($resultadoServicio)){
                                    $xCodigo    = $filaSer['cod_servicio'];
                                    $xSlug      = $filaSer['slug'];
                                    $xServicio  = $filaSer['titulo'];
                                    $xImagen    = $filaSer['imagen'];
                                    $nums++;
                            ?>
                            <div class="single-item servicios all" <?php if($nums>3){?> style="display: none;" <?php } ?>>
                                <img src="/cms/assets/img/servicios/<?php echo $xImagen; ?>" alt="<?php echo $xServicio; ?>">
                                <div class="portfolio1-overley">
                                    <div class="item-content">
                                        <h2><a href="/servicio/<?php echo $xSlug; ?>"><?php echo $xServicio; ?></a></h2>
                                        <p>Majock Consulting || Servicios</p>
                                    </div>
                                </div>
                            </div>
                            <?php
                                }
                                mysqli_free_result($resultadoServicio);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>