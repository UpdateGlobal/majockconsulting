<?php include("cms/module/conexion.php"); ?>
<!doctype html>
<html class="no-js" lang="es">
<!-- HEAD -->
<?php include 'include/head.php'; ?>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123882503-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-123882503-1');
</script>
<!-- HEAD END -->
<?php
    $num=0;
    $num_b=0;
?>
<body>
    <!-- Header -->
    <?php include 'include/header.php'; ?>
    <!-- Header End -->

    <!-- Slider Area -->
    <?php include 'include/slider.php'; ?>
    <!-- Slider Area End -->

    <!-- QUIENES SOMOS -->
    <?php include 'include/quienes-somos.php'; ?>
    <!-- QUIENES SOMOS End -->

    <!-- SERVICIOS GALERÍA -->
    <?php include 'include/galeria.php'; ?>
    <!-- SERVICIOS GALERÍA End -->

    <!-- PORQUE CONFIAR -->
    <?php include 'include/porque-confiar.php'; ?>
    <!-- PORQUE CONFIAR End -->

    <!-- Partner Logo -->
    <?php include 'include/clientes.php'; ?>
    <!-- Partner Logo End -->

    <!-- NOTICIAS ADELANTO -->
    <?php include 'include/noticias-adelanto.php'; ?>
    <!-- NOTICIAS ADELANTO End -->

    <!-- Get Free Consult Section -->
    <?php include 'include/banner-contact.php'; ?>
    <!-- Get Free Consult Section End -->

    <!-- Footer -->
    <?php include 'include/footer.php'; ?>
    <!-- Footer End -->

    <?php include 'include/scripts.php'; ?>
    <script>
        $(function(){
             $('a[href*=#]').click(function() {
             if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
                 && location.hostname == this.hostname) {
                     var $target = $(this.hash);
                     $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
                     if ($target.length) {
                         var targetOffset = $target.offset().top;
                         $('html,body').animate({scrollTop: targetOffset}, 1000);
                         return false;
                    }
               }
           });
        });
    </script>
</body>
</html>