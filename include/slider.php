    <!-- <div class="slider-area home-one-slider">
        <div class="bend niceties preview-2">

            <div id="ensign-nivoslider" class="slides">
                <img src="img/slider/3.jpg" alt="" title="#slider-direction-1" />
                <img src="img/slider/1.jpg" alt="" title="#slider-direction-2" />
                <img src="img/slider/2.jpg" alt="" title="#slider-direction-3" />
            </div>
            
            <!-- direction 1 - ->
            <div id="slider-direction-1" class="t-cn slider-direction">
                <div class="slider-content t-cn s-tb slider-1">
                    <div class="title-container s-tb-c title-compress">
                        <div class="medium-text">EXPERIENCIA DE 30 AÑOS</div>
                        <div class="title1">SOLUCIONES HOTELERAS A MEDIDA</div>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat.</p>
                        <div class="read-more">
                            <ul>
                                <li><a href="index.html#">CONÓCENOS <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></li>
                                <li><a href="index.html#">CONTÁCTANOS <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- direction 2 - ->
            <div id="slider-direction-2" class="t-cn slider-direction">
                <div class="slider-content t-cn s-tb slider-2">
                    <div class="title-container s-tb-c title-compress">
                        <div class="medium-text">EXPERIENCIA DE 30 AÑOS</div>
                        <div class="title1">AYUDANDO A EXPANDIR TU NEGOCIO</div>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat</p>
                        <div class="read-more">
                            <ul>
                                <li><a href="index.html#">CONÓCENOS <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></li>
                                <li><a href="index.html#">CONTÁCTANOS <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- direction 3 - ->
            <div id="slider-direction-3" class="t-cn slider-direction">
                <div class="slider-content t-cn s-tb slider-3">
                    <div class="title-container s-tb-c title-compress">
                        <div class="medium-text">EXPERIENCIA DE 30 AÑOS</div>
                        <div class="title1">AYUDANDO A EXPANDIR TU NEGOCIO</div>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non pa qui officia deserunt mollit anim id est laborum. Consect petur adipiscing elit.</p>
                        <div class="read-more">
                            <ul>
                                <li><a href="index.html#">CONÓCENOS <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></li>
                                <li><a href="index.html#">CONTÁCTANOS <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> -->

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
                                <li><a href="#">CONÓCENOS <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></li>
                                <li><a href="#">CONTÁCTANOS <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></li>
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