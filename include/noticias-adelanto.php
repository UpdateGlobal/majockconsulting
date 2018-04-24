<!-- Homepage2 Latest News area Start Here -->
    <div class="homepage2-news-area">
        <div class="container">
            <div class="row">
                <div class="homepage2-new">
                    <h2>Últimas Noticias</h2>
                    <div class="homepage2-total-news-area">
                        <?php
                            $consultarNoticias = "SELECT * FROM noticias WHERE estado='1' ORDER BY fecha ASC LIMIT 3";
                            $resultadoNoticias = mysqli_query($enlaces,$consultarNoticias) or die('Consulta fallida: ' . mysqli_error($enlaces));
                            while($filaNot = mysqli_fetch_array($resultadoNoticias)){
                                $xCodigo        = $filaNot['cod_noticia'];
                                $xTitulo        = $filaNot['titulo'];
                                $xImagen        = $filaNot['imagen'];
                                $xNoticia       = $filaNot['noticia'];
                                $xFecha         = $filaNot['fecha'];
                                $xSlugn         = $filaNot['slug'];
                        ?>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="single-news-area">
                                <div class="media">
                                    <div class="pull-left">
                                        <a href="blog-post.php?cod_noticia=<?php echo $xCodigo; ?>">
                                            <img src="cms/assets/img/noticias/<?php echo $xImagen; ?>" alt="<?php echo $xTitulo; ?>">
                                            <?php 
                                                $mydate = strtotime($xFecha);
                                                $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
                                            ?>
                                            <span><?php echo date('d', $mydate); ?><br/><?php echo $meses[date('n', $mydate)-1]; ?></span>
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h3><a href="blog-post.php?cod_noticia=<?php echo $xCodigo; ?>"><?php echo $xTitulo; ?></a></h3>
                                        <?php 
                                            $xResumen_m = strip_tags($xNoticia);
                                            $strCut = substr($xResumen_m,0,200);
                                            $xResumen_m = $strCut.'...';
                                        ?>
                                        <?php echo $xResumen_m; ?>
                                        <p class="date"><a href="blog-post.php?cod_noticia=<?php echo $xCodigo; ?>">Leer m&aacute;s</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                            mysqli_free_result($resultadoNoticias);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Homepage2 Latest News area End Here -->