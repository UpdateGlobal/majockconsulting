<div class="client-logo-area" style="background-color: rgb(200, 237, 240);">
    <div class="row">
        <div class="section-styling-area">
            <h2>Conf&iacute;an en Majock Consulting</h2>
            <p class="icon-border"><i class="fa fa-clone" aria-hidden="true"></i></p>
        </div>
    </div>
    <div class="container" style="background-color: rgb(200, 237, 240);">
        <div class="rc-carousel client-logo" data-loop="true" data-items="5" data-margin="30" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="3" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="3" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="5" data-r-medium-nav="true" data-r-medium-dots="false">
            <?php
                $consultarCarrusel = "SELECT * FROM carrusel WHERE estado='1' ORDER BY orden";
                $resultadoCarrusel = mysqli_query($enlaces,$consultarCarrusel) or die('Consulta fallida: ' . mysqli_error($enlaces));
                while($filaCar = mysqli_fetch_array($resultadoCarrusel)){
                    $xImagen    = $filaCar['imagen'];
            ?>
            <div class="single-logo">
                <a><img src="cms/assets/img/carrusel/<?php echo $xImagen; ?>" /></a>
            </div>
            <?php
                }
                mysqli_free_result($resultadoCarrusel);
            ?>
        </div>
    </div>
</div>