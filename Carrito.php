<!-- La diagonal "/" al inicio de un comentario siginifica que Termina la seccion de ese comentario -->
<!DOCTYPE html>
<html>
<!-- Inicio de cabezera -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Titulo de la pestaña -->
    <title>Ecommerce Navi</title>
    <!-- Bootstrap 4 & Estilo personal -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estiloPersonal.css">
    <!-- Iconos de FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  </head>
<!-- /Inicio de cabezera -->

  <!-- Inicio del cuerpo -->
  <body>
    <!-- Inicio de Header -->
    <?php include("Componentes/Header.php"); ?>
    <!-- /Inicio de Header -->

    <!-- Menu -->
    <?php include("Componentes/Menu.php"); ?>
    <!-- /Menu -->

    <!-- Footer -->
    <?php include("Componentes/Footer.php"); ?>
    <!-- /Footer -->


    <!-- Imporacion de Bootstrap Js & Jquery -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- /Imporacion de Bootstrap Js & Jquery -->
    <!-- Importacion de archivo para validacion de envio de email -->
    <script src="js/validacionSuscripcion.js"></script>
    <!-- /Importacion de archivo para validacion de envio de email -->
  </body>
  <!-- /Inicio del cuerpo -->
</html>
