<?php include("cms/module/conexion.php"); ?>
<?php $slug = $_REQUEST['slug'];?>
<?php 
$consultarCategorias = "SELECT * FROM noticias_categorias WHERE slug='$slug'";
$resultadoCategorias = mysqli_query($enlaces,$consultarCategorias) or die('Consulta fallida: ' . mysqli_error($enlaces));
$filaCat = mysqli_fetch_array($resultadoCategorias);
    $cod_categoria   = $filaCat['cod_categoria'];
?>
<!doctype html>
<html class="no-js" lang="es">
<?php include 'include/head.php' ?>
<body>
    <?php include 'include/header.php' ?>
    <!--  Header Area End Here -->
    <?php
        $consultarContenido = "SELECT * FROM contenidos WHERE cod_contenido='8'";
        $resultadoContenido = mysqli_query($enlaces,$consultarContenido) or die('Consulta fallida: ' . mysqli_error($enlaces));
        $filaCon = mysqli_fetch_array($resultadoContenido);
            $xCodigo   = $filaCon['cod_contenido'];
            $xImagen   = $filaCon['img_contenido'];
            $xEstado   = $filaCon['estado'];
    ?>
    <!-- Header Banner Area section Start Here -->
    <div class="header-banner-area" style="background: url(/cms/assets/img/nosotros/<?php echo $xImagen; ?>) no-repeat;">
        <div class="container">
            <div class="row">
                <div class="header-banner">
                    <h1>Nuestro Blog</h1>
                    <ul>
                        <li><a href="/index.php">Inicio</a></li>
                        <li>/ Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php
        mysqli_free_result($resultadoContenido);
    ?>
    <!-- Header Banner Area section End Here -->
    <!-- Main News Page start Here -->
    <div class="main-news-page-section-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <?php
                        $consultarNoticias = "SELECT * FROM noticias WHERE cod_categoria='$cod_categoria' AND estado='1'";
                        $resultadoNoticias = mysqli_query($enlaces, $consultarNoticias);
                        $total_registros = mysqli_num_rows($resultadoNoticias);
                        if($total_registros==0){ 
                    ?>
                        <h3>No hay entradas en nuestro blog, pronto tendremos novedades.</h3>
                        <div style="height: 40px;"></div>
                    <?php 
                        }else{
                        $registros_por_paginas = 4;
                        $total_paginas = ceil($total_registros/$registros_por_paginas);
                        $pagina = intval($_GET['p']);
                        if($pagina<1 or $pagina>$total_paginas){
                            $pagina=1;
                        }
                        $posicion = ($pagina-1)*$registros_por_paginas;
                        $limite = "LIMIT $posicion, $registros_por_paginas";

                        $consultarNoticias = "SELECT * FROM noticias WHERE cod_categoria='$cod_categoria' AND estado='1' ORDER BY fecha,cod_noticia ASC $limite";
                        $resultadoNoticias = mysqli_query($enlaces,$consultarNoticias) or die('Consulta fallida: ' . mysqli_error($enlaces));
                        while($filaNot = mysqli_fetch_array($resultadoNoticias)){
                            $xCodigo        = $filaNot['cod_noticia'];
                            $xTitulo        = $filaNot['titulo'];
                            $xImagen        = $filaNot['imagen'];
                            $xNoticia       = $filaNot['noticia'];
                            $xFecha         = $filaNot['fecha'];
                            $xSlug          = $filaNot['slug'];
                    ?>
                    <div class="news-page-content-section-area">
                        <div class="row single-news-area">
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                <div class="new-featured-image">
                                    <a href="/blog/<?php echo $xSlug; ?>">
                                        <img class="media-object" src="/cms/assets/img/noticias/<?php echo $xImagen; ?>" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                <div class="media-body news-body">
                                    <h3 class="media-heading"><a href="/blog/<?php echo $xSlug; ?>"><?php echo $xTitulo; ?></a></h3>
                                    <p class="meta"><?php
                                        $mydate = strtotime($xFecha);
                                        $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
                                        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                                        echo $dias[date('w', $mydate)]." ".date('d', $mydate)." de ".$meses[date('n', $mydate)-1]. " del ".date('Y', $mydate);
                                        ?>
                                    </p>
                                    <p class="news-content">
                                        <?php 
                                            $xResumen_m = strip_tags($xNoticia);
                                            $strCut = substr($xResumen_m,0,200);
                                            $xResumen_m = $strCut.'...';
                                        ?>
                                        <?php echo $xResumen_m; ?>
                                    </p>
                                    <div class="read-more">
                                        <a href="/blog/<?php echo $xSlug; ?>">leer m&aacute;s <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                        mysqli_free_result($resultadoNoticias);
                    ?>
                    <?php       
                        $paginas_mostrar = 10;
                        if ($total_paginas>1){
                            echo "<div class='pagination-area'>
                                    <ul>";
                            if($pagina>1){
                                echo "<li><a href='/categoria/".$slug."&p=".($pagina-1)."'><i class='fa fa-angle-double-left' aria-hidden='true'></i></a></li>";
                            }
                            for($i=$pagina; $i<=$total_paginas && $i<=($pagina+$paginas_mostrar); $i++){
                                if($i==$pagina){
                                    echo "<li class='active'><a>$i</a></li>";
                                }else{
                                    echo "<li><a href='/categoria/".$slug."&p=$i'>$i</a></li>";
                                }
                            }
                            if(($pagina+$paginas_mostrar)<$total_paginas){
                                echo "<li><a>...</a></li>";
                            }
                            if($pagina<$total_paginas){
                                echo "<li><a href='/categoria/".$slug."&p=".($pagina+1)."'><i class='fa fa-angle-double-right' aria-hidden='true'></i></a></li>";
                            }
                            echo "  </ul>
                                </div>
                            <hr>";
                        }
                    }
                    ?>
                </div>
                <?php include 'include/categorias-blog.php' ?>
            </div>
        </div>
    </div>
    <!-- Main News Page End Here -->
    <!--  Get Free Consult Section Start Here -->
    <?php include 'include/banner-contact.php' ?>
    <!--  Get Free Consult Section End Here -->
    <!-- Footer Start Here -->
    <?php include 'include/footer.php' ?>
    <!-- Footer End Here -->
    <!-- all js here -->
    <?php include 'include/scripts.php' ?>
</body>
</html>