    <!--  Header Area Start Here -->
    <header>
        <div class="header-area" id="sticker">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <div class="logo-area">
                            <a href="index.php"><img src="img/logo.png" alt="image"></a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                        <div class="main-menu-area">
                            <nav>
                                <ul id="nav">
                                    <li class="active"><a href="index.php">INICIO</a></li>
                                    <li>
                                        <a href="#">NOSOTROS</a>
                                        <ul>
                                            <li><a href="nosotros.php">Majock Consulting</a></li>
                                            <li><a href="equipo.php">Equipo</a></li>
                                        </ul>
                                    </li>
                                    <li class='has-submenu'><a href="#">PRODUCTOS</a>
                                        <ul>
                                            <?php
                                                $consultarProducto = "SELECT * FROM productos WHERE estado='1' ORDER BY orden";
                                                $resultadoProducto = mysqli_query($enlaces,$consultarProducto) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                                while($filaPro = mysqli_fetch_array($resultadoProducto)){
                                                    $xCodigo    = $filaPro['cod_producto'];
                                                    $xSlug      = $filaPro['slug'];
                                                    $xProducto  = $filaPro['titulo'];
                                            ?>
                                            <li><a href="producto-detalle.php?cod_producto=<?php echo $xCodigo; ?>"><?php echo $xProducto; ?></a></li>
                                            <?php
                                                }
                                                mysqli_free_result($resultadoProducto);
                                            ?>
                                        </ul>
                                    </li>
                                    <li class='has-submenu'>
                                        <a href="#">SERVICIOS</a>
                                        <ul>
                                            <?php
                                                $consultarServicio = "SELECT * FROM servicios WHERE estado='1' ORDER BY orden";
                                                $resultadoServicio = mysqli_query($enlaces,$consultarServicio) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                                while($filaSer = mysqli_fetch_array($resultadoServicio)){
                                                    $xCodigo    = $filaSer['cod_servicio'];
                                                    $xSlug      = $filaSer['slug'];
                                                    $xServicio  = $filaSer['titulo'];
                                            ?>
                                            <li><a href="servicio-detalle.php?cod_servicio=<?php echo $xCodigo; ?>"><?php echo $xServicio; ?></a></li>
                                            <?php
                                                }
                                                mysqli_free_result($resultadoServicio);
                                            ?>
                                        </ul>
                                    </li>
                                    <li class='has-submenu'><a href="#">SOPORTE</a></li>
                                    <li><a href="blog.php">BLOG</a></li>
                                    <li><a href="contacto.php">Contacto</a></li>
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
                                    <li><a href="index.php">INICIO</a></li>
                                    <li><a href="#">NOSOTROS</a>
                                        <ul>
                                            <li><a href="nosotros.php">Majock Consulting</a></li>
                                            <li><a href="equipo.php">Equipo</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">SERVICIOS</a>
                                        <ul>
                                            <li><a href="servicio-detalle.php">Service 1</a></li>
                                            <li><a href="servicio-detalle.php">Service 2</a></li>
                                            <li><a href="servicio-detalle.php">Service 3</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li><a href="#">PRODUCTO</a>
                                        <ul>
                                            <li><a href="servicio-detalle.php">Producto 1</a></li>
                                            <li><a href="servicio-detalle.php">Producto 2</a></li>
                                            <li><a href="servicio-detalle.php">Producto 3</a></li>
                                            <li><a href="servicio-detalle.php">Producto 4</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">SOPORTE</a>
                                    </li>
                                    <li><a href="/blog.php">BLOG</a>
                                    </li>
                                   
                                    <li><a href="contacto.php">CONTACTO</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--  Header Area End Here -->