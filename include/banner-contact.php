<?php
    $consultarGeneral = "SELECT * FROM general WHERE cod_general='7' AND estado='1'";
    $resultadoGeneral = mysqli_query($enlaces,$consultarGeneral) or die('Consulta fallida: ' . mysqli_error($enlaces));
    while($filaGen = mysqli_fetch_array($resultadoGeneral)){
        $xTitulo      = $filaGen['campo_1'];
        $xLink        = $filaGen['campo_5'];
?>
<div class="free-consult">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="free-consult-text">
                    <p><?php echo $xTitulo; ?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="get-free-consult">
                    <a href="<?php echo $xLink; ?>">Cont&aacute;ctanos</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
    }
    mysqli_free_result($resultadoGeneral);
?>