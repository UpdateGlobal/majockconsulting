    <!--  Header Area Start Here -->
    <header>
        <div class="header-area" id="sticker">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <div class="logo-area">
                            <?php
                                $consultarMet = 'SELECT * FROM metatags';
                                $resultadoMet = mysqli_query($enlaces,$consultarMet) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                $filaMet = mysqli_fetch_array($resultadoMet);
                                    $xTitulo    = $filaMet['titulo'];
                                    $xSlogan    = $filaMet['slogan'];
                                    $xLogo    = $filaMet['logo'];
                            ?>
                            <a href="/index.php"><img src="/cms/assets/img/meta/<?php echo $xLogo; ?>" alt="<?php echo $xTitulo." | ".$xSlogan; ?>"></a>
                            <?php mysqli_free_result($resultadoMet); ?>
                        </div>
                    </div>

                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                        <div class="main-menu-area">
                            <nav>
                                <ul id="nav">
                                    <li><a href="/index.php">INICIO</a></li>
                                    <li>
                                        <a href="/nosotros.php">NOSOTROS</a>
                                        <!-- <ul>
                                            <li><a href="/nosotros.php">Majock Consulting</a></li>
                                            <li><a href="/equipo.php">Equipo</a></li>
                                        </ul> -->
                                    </li>
                                    <li>
                                        <a href="#productos">PRODUCTOS</a>
                                        <ul>
                                            <?php
                                                $consultarProducto = "SELECT * FROM productos WHERE estado='1' ORDER BY orden";
                                                $resultadoProducto = mysqli_query($enlaces,$consultarProducto) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                                while($filaPro = mysqli_fetch_array($resultadoProducto)){
                                                    $xCodigo    = $filaPro['cod_producto'];
                                                    $xSlug      = $filaPro['slug'];
                                                    $xProducto  = $filaPro['titulo'];
                                            ?>
                                            <li><a href="/producto/<?php echo $xSlug; ?>"><?php echo $xProducto; ?></a></li>
                                            <?php
                                                }
                                                mysqli_free_result($resultadoProducto);
                                            ?>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#servicios">SERVICIOS</a>
                                        <ul>
                                            <?php
                                                $consultarServicio = "SELECT * FROM servicios WHERE estado='1' ORDER BY orden";
                                                $resultadoServicio = mysqli_query($enlaces,$consultarServicio) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                                while($filaSer = mysqli_fetch_array($resultadoServicio)){
                                                    $xCodigo    = $filaSer['cod_servicio'];
                                                    $xSlug      = $filaSer['slug'];
                                                    $xServicio  = $filaSer['titulo'];
                                            ?>
                                            <li><a href="/servicio/<?php echo $xSlug; ?>"><?php echo $xServicio; ?></a></li>
                                            <?php
                                                }
                                                mysqli_free_result($resultadoServicio);
                                            ?>
                                        </ul>
                                    </li>
                                    <li><a href="#">SOPORTE</a></li>
                                    <li><a href="/blog.php">BLOG</a></li>
                                    <li><a href="/contacto.php">Contacto</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li><a href="/index.php">INICIO</a></li>
                                    <li><a href="#">NOSOTROS</a>
                                        <ul>
                                            <li><a href="/nosotros.php">Majock Consulting</a></li>
                                            <li><a href="/equipo.php">Equipo</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">PRODUCTO</a>
                                        <ul>
                                            <?php
                                                $consultarProducto = "SELECT * FROM productos WHERE estado='1' ORDER BY orden";
                                                $resultadoProducto = mysqli_query($enlaces,$consultarProducto) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                                while($filaPro = mysqli_fetch_array($resultadoProducto)){
                                                    $xCodigo    = $filaPro['cod_producto'];
                                                    $xSlug      = $filaPro['slug'];
                                                    $xProducto  = $filaPro['titulo'];
                                            ?>
                                            <li><a href="/producto/<?php echo $xSlug; ?>"><?php echo $xProducto; ?></a></li>
                                            <?php
                                                }
                                                mysqli_free_result($resultadoProducto);
                                            ?>
                                        </ul>
                                    </li>
                                    <li><a href="#">SERVICIOS</a>
                                        <ul>
                                            <?php
                                                $consultarServicio = "SELECT * FROM servicios WHERE estado='1' ORDER BY orden";
                                                $resultadoServicio = mysqli_query($enlaces,$consultarServicio) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                                while($filaSer = mysqli_fetch_array($resultadoServicio)){
                                                    $xCodigo    = $filaSer['cod_servicio'];
                                                    $xSlug      = $filaSer['slug'];
                                                    $xServicio  = $filaSer['titulo'];
                                            ?>
                                            <li><a href="/servicio/<?php echo $xSlug; ?>"><?php echo $xServicio; ?></a></li>
                                            <?php
                                                }
                                                mysqli_free_result($resultadoServicio);
                                            ?>
                                        </ul>
                                    </li>
                                    <li><a href="#">SOPORTE</a></li>
                                    <li><a href="/blog.php">BLOG</a></li>
                                    <li><a href="/contacto.php">CONTACTO</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="header-back"></div>
    <!--  Header Area End Here -->