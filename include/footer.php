<!-- Footer Start Here -->
<footer class="footer-area">
    <div class="footer-buttom-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="copy-right-text">
                        <p>&copy; Majock Consulting 2018 - Dise&ntilde;o Update Global Marketing</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="footer-social-media">
                        <ul id="fnav">
                            <?php
                                $consultarSol = 'SELECT * FROM social ORDER BY orden';
                                $resultadoSol = mysqli_query($enlaces,$consultarSol) or die('Consulta fallida: ' . mysqli_error($enlaces));
                                while($filaSol = mysqli_fetch_array($resultadoSol)){
                                    $xType      = $filaSol['type'];
                                    $xLinks     = $filaSol['links'];
                            ?>
                            <li><a href="<?php echo $xLinks; ?>"><i class="fa <?php echo $xType; ?>"></i></a></li>
                            <?php 
                                }
                                mysqli_free_result($resultadoSol);
                            ?>  
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>