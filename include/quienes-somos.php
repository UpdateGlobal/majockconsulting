    <div class="homepage3-about-us-area" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="home3-about-content-area">
                        <?php
                            $consultarGeneral = "SELECT * FROM general WHERE cod_general='1' AND estado='1'";
                            $resultadoGeneral = mysqli_query($enlaces,$consultarGeneral) or die('Consulta fallida: ' . mysqli_error($enlaces));
                            $filaGen = mysqli_fetch_array($resultadoGeneral);
                                $xTitulo      = $filaGen['campo_1'];
                                $xDescripcion = $filaGen['campo_2'];
                        ?>
                        <h2><?php echo $xTitulo; ?></h2>
                        <p><?php echo $xDescripcion; ?></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 acurate">
                    <?php
                        $consultarGeneral = "SELECT * FROM general WHERE cod_general='2' AND estado='1'";
                        $resultadoGeneral = mysqli_query($enlaces,$consultarGeneral) or die('Consulta fallida: ' . mysqli_error($enlaces));
                        $filaGen = mysqli_fetch_array($resultadoGeneral);
                            $xCodigo      = $filaGen['cod_general'];
                            $xTitulo      = $filaGen['campo_1'];
                            $xValor_1     = $filaGen['campo_2'];
                            $xValor_2     = $filaGen['campo_3'];
                            $xValor_3     = $filaGen['campo_4'];
                            $xValor_4     = $filaGen['campo_5'];
                            $xValor_5     = $filaGen['campo_6'];
                            $xValor_6     = $filaGen['campo_7'];
                    ?>
                    <div class="home3-our-sucess-area">
                        <h2><?php echo $xTitulo; ?></h2>
                    </div>
                    <div class="our-skill-area fix">
                        <div class="container">
                            
                            <div class="row">
                                <!-- single-skill start -->
                                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
                                    <div class="single-skill wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                                        <div class="progress-circular">
                                            <input type="text" class="knob knob-nopercent" value="0" data-max="10000" data-min="0" data-angleArc="180" data-angleOffset="270" data-height="80" data-rel="<?php echo $xValor_4; ?>00" data-linecap="butt" data-width="175" data-bgcolor="#f2f2f2" data-fgcolor="#ef162a" data-thickness=".30" data-readonly="true" disabled>
                                            <h4 class="progress-h4"><?php echo $xValor_1; ?></h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-skill end -->
                                <!-- single-skill start -->
                                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
                                    <div class="single-skill wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                                        <div class="progress-circular">
                                            <input type="text" class="knob knob-nopercent" value="0" data-angleArc="180" data-max="10000" data-min="0" data-angleOffset="270" data-height="80" data-rel="<?php echo $xValor_5; ?>00" data-linecap="butt" data-width="175" data-bgcolor="#f2f2f2" data-fgcolor="#ef7716" data-thickness=".30" data-readonly="true" disabled>
                                            <h4 class="progress-h4"><?php echo $xValor_2; ?></h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-skill end -->
                                <!-- single-skill start -->
                                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
                                    <div class="single-skill wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                                        <div class="progress-circular">
                                            <input type="text" class="knob knob-nopercent" value="0" data-angleArc="180" data-max="10000" data-min="0" data-angleOffset="270" data-height="80" data-rel="<?php echo $xValor_6; ?>00" data-linecap="butt" data-width="175" data-bgcolor="#f2f2f2" data-fgcolor="#2BCDC1" data-thickness=".30" data-readonly="true" disabled>
                                            <h4 class="progress-h4"><?php echo $xValor_3; ?></h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-skill end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>