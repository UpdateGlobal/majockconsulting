    <div class="slider-area home-one-slider">
        <div class="bend niceties preview-2">
            <div id="ensign-nivoslider" class="slides">
                <?php
                    $consultarBanner = "SELECT * FROM banners WHERE estado='1' ORDER BY orden";
                    $resultadoBanner = mysqli_query($enlaces,$consultarBanner) or die('Consulta fallida: ' . mysqli_error($enlaces));
                    while($filaBan = mysqli_fetch_array($resultadoBanner)){
                        $xImagen    = $filaBan['imagen'];
                        $num++;
                ?>
                <img src="cms/assets/img/banner/<?php echo $xImagen; ?>" alt="" title="#slider-direction-<?php echo $num; ?>" />
                <?php 
                    }
                    mysqli_free_result($resultadoBanner);
                ?>
            </div>
            <?php
                $consultarBanner = "SELECT * FROM banners WHERE estado='1' ORDER BY orden";
                $resultadoBanner = mysqli_query($enlaces,$consultarBanner) or die('Consulta fallida: ' . mysqli_error($enlaces));
                while($filaBan = mysqli_fetch_array($resultadoBanner)){
                    $xTitulo    = $filaBan['titulo'];
                    $xImagen    = $filaBan['imagen'];
                    $xSubtitulo = $filaBan['subtitulo'];
                    $xTexto     = $filaBan['texto'];
                    $xLink      = $filaBan['link'];
                    $xContacto  = $filaBan['contacto'];
                    $num_b++;
            ?>
            <div id="slider-direction-<?php echo $num_b; ?>" class="t-cn slider-direction">
                <div class="slider-content t-cn s-tb slider-<?php echo $num_b; ?>">
                    <div class="title-container s-tb-c title-compress">
                        <div class="medium-text"><?php echo $xTitulo; ?></div>
                        <div class="title1"><?php echo $xSubtitulo; ?></div>
                        <p><?php echo $xTexto; ?></p>
                        <div class="read-more">
                            <ul>
                                <li><a href="http://<?php echo $xLink; ?>">CON&Oacute;CENOS <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></li>
                                <?php if($xContacto=="1"){ ?>
                                <li><a href="contacto.php">CONT&Aacute;CTANOS <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                }
                mysqli_free_result($resultadoBanner);
            ?>
        </div>
    </div>