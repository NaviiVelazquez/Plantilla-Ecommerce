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

    <!-- Carousel -->
    <div id="carousel-container">
      <!-- carousel -->
      <div id="productosCarousel" class="carousel slide" data-ride="carousel">
        <!-- lista de indicador para el cambio de imagenes -->
        <ol class="carousel-indicators">
          <li data-target="#productosCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#productosCarousel" data-slide-to="1"></li>
          <li data-target="#productosCarousel" data-slide-to="2"></li>
        </ol>
        <!-- /lista de indicador para el cambio de imagenes -->
        <div class="carousel-inner">
          <!-- items de carousel -->
          <div class="carousel-item active">
            <!-- imagen -->
            <img class="d-block w-100" src="Imagenes/2.jpg" alt="Primer producto">
            <!-- /imagen -->
            <!-- Texto de descripcion de la imagen -->
            <div class="carousel-caption d-none d-md-block">
              <h4>Producto 1</h4>
              <p class="d-none d-sm-none d-md-block">Quisque sed diam vitae leo tincidunt fermentum. Morbi in sem vitae libero consectetur pharetra
                 at in quam. Fusce risus ante, pharetra quis ex id, tristique tempus urna. Interdum et malesuada
                 fames ac ante ipsum primis in faucibus.
              </p>
            </div>
            <!-- /Texto de descripcion de la imagen -->
          </div>
          <div class="carousel-item">
            <!-- imagen -->
            <img class="d-block w-100" src="Imagenes/1.jpg" alt="Segundo producto">
            <!-- /imagen -->
            <!-- Texto de descripcion de la imagen -->
            <div class="carousel-caption d-none d-md-block">
              <h4>Producto 2</h4>
              <p class="d-none d-sm-none d-md-block">Proin ex dolor, iaculis vitae erat nec, dapibus fermentum est. Ut elementum et diam eget elementum.
                 Maecenas sed sapien aliquet nibh ullamcorper tristique quis non enim. Nunc quis erat mattis, elementum
                 diam sed, ultricies purus.
              </p>
            </div>
            <!-- /Texto de descripcion de la imagen -->
          </div>
          <div class="carousel-item">
            <!-- imagen -->
            <img class="d-block w-100" src="Imagenes/3.jpg" alt="Tercero producto">
            <!-- /imagen -->
            <!-- Texto de descripcion de la imagen -->
            <div class="carousel-caption d-none d-md-block">
              <h4>Producto 3</h4>
              <p class="d-none d-sm-none d-md-block">Duis vel neque eu augue lobortis pretium et vel ex. Phasellus ipsum purus, sollicitudin id velit non,
                maximus mattis nibh. Pellentesque at est in dolor fringilla mattis.
              </p>
            </div>
            <!-- /Texto de descripcion de la imagen -->
          </div>
        </div>
        <!-- /items de carousel -->
        <!-- Flechas de navegacion del carousel -->
        <a class="carousel-control-prev" href="#productosCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Producto anterior</span>
        </a>
        <!-- /Flechas de navegacion del carousel -->
        <!-- Flechas de navegacion del carousel -->
        <a class="carousel-control-next" href="#productosCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Producto siguiente</span>
        </a>
        <!-- /Flechas de navegacion del carousel -->
      </div>
      <!-- /carousel -->
    </div>
    <!-- /Carousel -->

    <!-- Información -->
    <div id="info-container">
      <!-- Contenedor de las colunas -->
      <div class="container">
        <!-- fila de las columnas -->
        <div class="row text-sm-center">
          <!-- colunas -->
          <div class="col-sm-12 col-md-4">
            <img src="Imagenes/Calidad.png" alt="" class="img-fluid">
            <h3>Calidad</h3>
          </div>
          <div class="col-sm-12 col-md-4">
            <img src="Imagenes/Envio.png" alt="" class="img-fluid">
            <h3>Envio Gratis</h3>
          </div>
          <div class="col-sm-12 col-md-4">
            <img src="Imagenes/Soporte.png" alt="" class="img-fluid">
            <h3>Soporte</h3>
          </div>
          <!-- /colunas -->
        </div>
        <!-- /fila de las columnas -->
      </div>
      <!-- /Contenedor de las colunas -->
    </div>
    <!-- /Información -->

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
