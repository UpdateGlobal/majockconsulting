<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <div class="page-sidebar-area">                
        <div class="single-sidebar">
            <h3>Categorías</h3>
            <ul>
                <?php
                    $consultarCategoria = "SELECT * FROM noticias_categorias WHERE estado='1' ORDER BY orden";
                    $resultadoCategoria = mysqli_query($enlaces,$consultarCategoria) or die('Consulta fallida: ' . mysqli_error($enlaces));
                    while($filaCat = mysqli_fetch_array($resultadoCategoria)){
                        $xCodigo    = $filaCat['cod_categoria'];
                        $xCategoria = $filaCat['categoria'];
                ?>
                <li><a href="categorias.php?cod_categoria=<?php echo $xCodigo; ?>"><?php echo $xCategoria; ?></a></li>
                <?php
                    }
                    mysqli_free_result($resultadoCategoria);
                ?>
            </ul>
        </div>                    
    </div>
</div>