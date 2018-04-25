<!-- About Page4 Inner Section Start Here -->
    <div class="about-us4-area">
        <div class="container">
            <div class="row">
                <div class="section-styling-area">
                    <h2>Porqu&eacute; confiar en Majock</h2>
                    <p class="icon-border"><i class="fa fa-clone" aria-hidden="true"></i></p>
                </div>
            </div>
        </div>
        <div class="about-us4-second-part-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="single-about-us4">
                            <?php
                                $consultarGeneral = "SELECT * FROM general WHERE cod_general='4'";
                                $resultadoGeneral = mysqli_query($enlaces,$consultarGeneral) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                $filaGen = mysqli_fetch_array($resultadoGeneral);
                                    $xTitulo      = $filaGen['campo_1'];
                                    $xDescripcion = $filaGen['campo_2'];
                                    $xIcono       = $filaGen['campo_5'];
                            ?>
                            <i class="fa <?php echo $xIcono; ?>" aria-hidden="true"></i>
                            <h3><?php echo $xTitulo; ?></h3>
                            <p><?php echo $xDescripcion; ?></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="single-about-us4">
                            <?php
                                $consultarGeneral = "SELECT * FROM general WHERE cod_general='5'";
                                $resultadoGeneral = mysqli_query($enlaces,$consultarGeneral) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                $filaGen = mysqli_fetch_array($resultadoGeneral);
                                    $xTitulo      = $filaGen['campo_1'];
                                    $xDescripcion = $filaGen['campo_2'];
                                    $xIcono       = $filaGen['campo_5'];
                            ?>
                            <i class="fa <?php echo $xIcono; ?>" aria-hidden="true"></i>
                            <h3><?php echo $xTitulo; ?></h3>
                            <p><?php echo $xDescripcion; ?></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="single-about-us4">
                            <?php
                                $consultarGeneral = "SELECT * FROM general WHERE cod_general='6'";
                                $resultadoGeneral = mysqli_query($enlaces,$consultarGeneral) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                $filaGen = mysqli_fetch_array($resultadoGeneral);
                                    $xTitulo      = $filaGen['campo_1'];
                                    $xDescripcion = $filaGen['campo_2'];
                                    $xIcono       = $filaGen['campo_5'];
                            ?>
                            <i class="fa <?php echo $xIcono; ?>" aria-hidden="true"></i>
                            <h3><?php echo $xTitulo; ?></h3>
                            <p><?php echo $xDescripcion; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Page4 Inner Section End Here -->