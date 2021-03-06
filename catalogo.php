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

    <!-- Breadcrumbs -->
    <section id="breadcrumbs-container">
      <!-- Divicion contenedora -->
      <div class="container-fluid">
        <!-- fila -->
        <div class="row">
          <!-- columna pequeña -->
          <div class="col-sm">
            <!-- menu de navegacion -->
            <nav aria-label="breadcrumb">
              <!-- lista de elementos -->
              <ol class="breadcrumb">
                <!-- Elementos -->
                <a href="catalogo.html" class="breadcrumb-item">Catálogo</a>
                <span class="breadcrumb-item active">Todos los productos</span>
                <!-- /Elementos -->
              </ol>
              <!-- /lista de elementos -->
            </nav>
            <!-- /menu de navegacion -->
          </div>
          <!-- /columna pequeña -->
        </div>
        <!-- fila -->
      </div>
      <!-- Divicion contenedora -->
    </section>
    <!-- /Breadcrumbs -->

    <!-- Productos -->
    <section id="productos-container">
      <!-- contenedor -->
      <div class="container-fluid">
        <!-- fila -->
        <div class="row">
        
        <!-- filtros -->
        <?php include("Componentes/filtrosCatalogo.php"); ?>
        <!-- /filtros -->

          <!-- productos -->
          <div class="col-sm-12 col-md-9">
            <!-- Fila contenedora de productos -->
            <div id="fila-productos" class="row">
              <!-- columna de producto -->
              <div class="col-sm-6 col-lg-4">
                <!-- card -->
                <div class="card-deck mb-3">
                  <!-- Card contenido -->
                  <div class="card border-dark shadow">
                    <!-- imagen -->
                    <img class="card-img-top img-fluid" src="Imagenes/4.jpg" alt="Producto 1">
                    <!-- cuerpo de la card -->
                    <div class="card-body">
                      <!-- titulo -->
                      <h5 class="card-title text-center">Producto 1</h5>
                      <p class="card-text text-center">
                        Maecenas id varius magna. Vivamus vel lobortis est, nec
                      </p>
                    </div>
                    <!-- /cuerpo de la card -->
                  </div>
                  <!-- /Card contenido -->
              </div>
              <!-- /card -->
            </div>
            <!-- columna de producto -->
            <div class="col-sm-6 col-lg-4">
              <!-- card -->
              <div class="card-deck mb-3">
                <!-- Card contenido -->
                <div class="card border-dark shadow">
                  <!-- imagen -->
                  <img class="card-img-top img-fluid" src="Imagenes/5.jpg" alt="Producto 2">
                  <!-- cuerpo de la card -->
                  <div class="card-body">
                    <!-- titulo -->
                    <h5 class="card-title text-center">Producto 2</h5>
                    <p class="card-text text-center">
                      In faucibus in elit nec suscipit. Nam quis metus tincidunta
                    </p>
                  </div>
                  <!-- /cuerpo de la card -->
                </div>
                <!-- /Card contenido -->
            </div>
            <!-- /card -->
          </div>
          <!-- /columna de producto -->
          <!-- columna de producto -->
          <div class="col-sm-6 col-lg-4">
            <!-- card -->
            <div class="card-deck mb-3">
              <!-- Card contenido -->
              <div class="card border-dark shadow">
                <!-- imagen -->
                <img class="card-img-top img-fluid" src="Imagenes/6.jpg" alt="Producto 3">
                <!-- cuerpo de la card -->
                <div class="card-body">
                  <!-- titulo -->
                  <h5 class="card-title text-center">Producto 3</h5>
                  <p class="card-text text-center">
                    Nulla ac pharetra ex, in semper justo. Suspendisse
                  </p>
                </div>
                <!-- /cuerpo de la card -->
              </div>
              <!-- /Card contenido -->
            </div>
            <!-- /card -->
          </div>
          <!-- /columna de producto -->
          <!-- columna de producto -->
          <div class="col-sm-6 col-lg-4">
            <!-- card -->
            <div class="card-deck mb-3">
              <!-- Card contenido -->
              <div class="card border-dark shadow">
                <!-- imagen -->
                <img class="card-img-top img-fluid" src="Imagenes/7.jpg" alt="Producto 4">
                <!-- cuerpo de la card -->
                <div class="card-body">
                  <!-- titulo -->
                  <h5 class="card-title text-center">Producto 4</h5>
                  <p class="card-text text-center">
                    Nulla ac pharetra ex, in semper justo. Suspendisse
                  </p>
                </div>
                <!-- /cuerpo de la card -->
              </div>
              <!-- /Card contenido -->
            </div>
            <!-- /card -->
          </div>
          <!-- /columna de producto -->
          <!-- columna de producto -->
          <div class="col-sm-6 col-lg-4">
            <!-- card -->
            <div class="card-deck mb-3">
              <!-- Card contenido -->
              <div class="card border-dark shadow">
                <!-- imagen -->
                <img class="card-img-top img-fluid" src="Imagenes/8.jpg" alt="Producto 5">
                <!-- cuerpo de la card -->
                <div class="card-body">
                  <!-- titulo -->
                  <h5 class="card-title text-center">Producto 5</h5>
                  <p class="card-text text-center">
                    Nulla ac pharetra ex, in semper justo. Suspendisse
                  </p>
                </div>
                <!-- /cuerpo de la card -->
              </div>
              <!-- /Card contenido -->
            </div>
            <!-- /card -->
          </div>
          <!-- /columna de producto -->
          <!-- columna de producto -->
          <div class="col-sm-6 col-lg-4">
            <!-- card -->
            <div class="card-deck mb-3">
              <!-- Card contenido -->
              <div class="card border-dark shadow">
                <!-- imagen -->
                <img class="card-img-top img-fluid" src="Imagenes/9.jpg" alt="Producto 6">
                <!-- cuerpo de la card -->
                <div class="card-body">
                  <!-- titulo -->
                  <h5 class="card-title text-center">Producto 6</h5>
                  <p class="card-text text-center">
                    Nulla ac pharetra ex, in semper justo. Suspendisse
                  </p>
                </div>
                <!-- /cuerpo de la card -->
              </div>
              <!-- /Card contenido -->
            </div>
            <!-- /card -->
          </div>
          <!-- /columna de producto -->
          <!-- columna de producto -->
          <div class="col-sm-6 col-lg-4">
            <!-- card -->
            <div class="card-deck mb-3">
              <!-- Card contenido -->
              <div class="card border-dark shadow">
                <!-- imagen -->
                <img class="card-img-top img-fluid" src="Imagenes/10.jpg" alt="Producto 7">
                <!-- cuerpo de la card -->
                <div class="card-body">
                  <!-- titulo -->
                  <h5 class="card-title text-center">Producto 7</h5>
                  <p class="card-text text-center">
                    Nulla ac pharetra ex, in semper justo. Suspendisse
                  </p>
                </div>
                <!-- /cuerpo de la card -->
              </div>
              <!-- /Card contenido -->
            </div>
            <!-- /card -->
          </div>
          <!-- /columna de producto -->
          <!-- columna de producto -->
          <div class="col-sm-6 col-lg-4">
            <!-- card -->
            <div class="card-deck mb-3">
              <!-- Card contenido -->
              <div class="card border-dark shadow">
                <!-- imagen -->
                <img class="card-img-top img-fluid" src="Imagenes/11.jpg" alt="Producto 8">
                <!-- cuerpo de la card -->
                <div class="card-body">
                  <!-- titulo -->
                  <h5 class="card-title text-center">Producto 8</h5>
                  <p class="card-text text-center">
                    Nulla ac pharetra ex, in semper justo. Suspendisse
                  </p>
                </div>
                <!-- /cuerpo de la card -->
              </div>
              <!-- /Card contenido -->
            </div>
            <!-- /card -->
          </div>
          <!-- /columna de producto -->
          <!-- columna de producto -->
          <div class="col-sm-6 col-lg-4">
            <!-- card -->
            <div class="card-deck mb-3">
              <!-- Card contenido -->
              <div class="card border-dark shadow">
                <!-- imagen -->
                <img class="card-img-top img-fluid" src="Imagenes/12.jpg" alt="Producto 9">
                <!-- cuerpo de la card -->
                <div class="card-body">
                  <!-- titulo -->
                  <h5 class="card-title text-center">Producto 9</h5>
                  <p class="card-text text-center">
                    Nulla ac pharetra ex, in semper justo. Suspendisse
                  </p>
                </div>
                <!-- /cuerpo de la card -->
              </div>
              <!-- /Card contenido -->
            </div>
            <!-- /card -->
          </div>
          <!-- /columna de producto -->
          <!-- columna de producto -->
          <div class="col-sm-6 col-lg-4">
            <!-- card -->
            <div class="card-deck mb-3">
              <!-- Card contenido -->
              <div class="card border-dark shadow">
                <!-- imagen -->
                <img class="card-img-top img-fluid" src="Imagenes/13.jpg" alt="Producto 10">
                <!-- cuerpo de la card -->
                <div class="card-body">
                  <!-- titulo -->
                  <h5 class="card-title text-center">Producto 10</h5>
                  <p class="card-text text-center">
                    Nulla ac pharetra ex, in semper justo. Suspendisse
                  </p>
                </div>
                <!-- /cuerpo de la card -->
              </div>
              <!-- /Card contenido -->
            </div>
            <!-- /card -->
          </div>
          <!-- /columna de producto -->
          <!-- columna de producto -->
          <div class="col-sm-6 col-lg-4">
            <!-- card -->
            <div class="card-deck mb-3">
              <!-- Card contenido -->
              <div class="card border-dark shadow">
                <!-- imagen -->
                <img class="card-img-top img-fluid" src="Imagenes/14.jpg" alt="Producto 11">
                <!-- cuerpo de la card -->
                <div class="card-body">
                  <!-- titulo -->
                  <h5 class="card-title text-center">Producto 11</h5>
                  <p class="card-text text-center">
                    Nulla ac pharetra ex, in semper justo. Suspendisse
                  </p>
                </div>
                <!-- /cuerpo de la card -->
              </div>
              <!-- /Card contenido -->
            </div>
            <!-- /card -->
          </div>
          <!-- /columna de producto -->
          <!-- columna de producto -->
          <div class="col-sm-6 col-lg-4">
            <!-- card -->
            <div class="card-deck mb-3">
              <!-- Card contenido -->
              <div class="card border-dark shadow">
                <!-- imagen -->
                <img class="card-img-top img-fluid" src="Imagenes/15.jpg" alt="Producto 12">
                <!-- cuerpo de la card -->
                <div class="card-body">
                  <!-- titulo -->
                  <h5 class="card-title text-center">Producto 12</h5>
                  <p class="card-text text-center">
                    Nulla ac pharetra ex, in semper justo. Suspendisse
                  </p>
                </div>
                <!-- /cuerpo de la card -->
              </div>
              <!-- /Card contenido -->
            </div>
            <!-- /card -->
          </div>
          <!-- /columna de producto -->
          </div>
          <!-- /Fila contenedora de productos -->
          <!-- /productos -->
          <!-- Paginacion -->
          <!-- Fila -->
          <div class="row">
            <!-- contenedor -->
            <div id="Paginator-container" class="col-sm text-sm-center">
              <!-- Barra de navegacion -->
              <nav aria-label="Page navigation example">
                <!-- lista de elementos -->
                <ul class="pagination justify-content-center">
                  <!-- item regresar -->
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <!-- /item regresar -->
                  <!-- elementos -->
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="#">5</a></li>
                  <!-- elementos -->
                  <!-- item siguiente -->
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                  <!-- /item siguiente -->
                </ul>
                <!-- lista de elementos -->
              </nav>
              <!-- Barra de navegacion -->
            </div>
            <!-- contenedor -->
          </div>
          <!-- /Fila -->
          <!-- /Paginacion -->
        </div>
        <!-- fila -->
      </div>
      <!-- /contenedor -->
    </section>
    <!-- /Productos -->

    <!-- Footer -->
    <?php include("Componentes/Footer.php"); ?>
    <!-- /Footer -->

    <!-- Modal -->
    <?php include("Componentes/modalDescuento.php"); ?>
    <!-- /Modal -->


    <!-- Imporacion de Bootstrap Js & Jquery -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- /Imporacion de Bootstrap Js & Jquery -->
    <!-- Importacion de archivo para validacion de envio de email -->
    <script src="js/validacionSuscripcion.js"></script>
    <!-- /Importacion de archivo para validacion de envio de email -->
    <!-- Para mandar llamar modal de descuento -->
    <script>mostrarModal()</script>
    <!-- /Para mandar llamar modal de descuento -->
  </body>
  <!-- /Inicio del cuerpo -->
</html>
