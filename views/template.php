<!DOCTYPE html>
<html lang="es">

<head>
<?php include "views/modules/head.php"; ?>
<!--<link rel="stylesheet" id="wpr-addons-css-css" href="./frontend.min.css" type="text/css" media="all"> -->
<link rel="stylesheet" id="wp-block-library-css" href="./style.min.css" type="text/css" media="all">
</head>
<body
    class="home page-template page-template-elementor_canvas page page-id-22 wp-embed-responsive theme-royal-elementor-kit woocommerce-js elementor-default elementor-template-canvas elementor-kit-880 elementor-page elementor-page-22 e--ua-blink e--ua-chrome e--ua-webkit"
    data-elementor-device-mode="desktop" style="overflow: visible;">
 
    <?php include ("views/modules/mega_navbar/nav.php"); ?>
    
    
  <section>
  <?php 
  
  $mvc = new MvcController();
  $mvc -> enlacesPaginasController();
  
  ?> 

  </section>
    
    
    
    
    <?php include "views/modules/js/archivosjs.php"; ?>
    <script type="text/javascript" data-cfasync="false" src="./frontend.min(1).js" id="wpr-addons-js-js"></script>
    <script type="text/javascript" src="./modal-popups.min.js" id="wpr-modal-popups-js-js"></script>
</body>

</html>
