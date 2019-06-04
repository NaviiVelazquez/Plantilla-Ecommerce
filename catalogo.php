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
          <div class="col-sm-12 col-md-3">
            <div id="filtros-container">
              <!-- filtros de categoria -->
              <div id="listaCategoria" class="list-group shadow-lg">
                <!-- Elementos de la lista -->
                <a href="#" class="list-group-item list-group-item-action active">
                  <h5 class="list-group-item-heading">Categoría</h5>
                </a>
                <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                  Asesorios <span class="badge badge-primary badge-pill">48</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                  Carros <span class="badge badge-primary badge-pill">14</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                  Camionetas <span class="badge badge-primary badge-pill">8</span>
                </a>
                <!-- /Elementos de la lista -->
              </div>
              <!-- /filtros de categoria -->
              <!-- filtros de color -->
              <div class="list-group shadow-lg">
                <!-- Elementos de la lista -->
                <a href="#" class="list-group-item list-group-item-action active">
                  <h5 class="list-group-item-heading">Color</h5>
                </a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-success d-flex justify-content-between align-items-center">
                  Verde <span class="badge badge-primary badge-pill">4</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-danger d-flex justify-content-between align-items-center">
                  Rojo <span class="badge badge-primary badge-pill">11</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-warning d-flex justify-content-between align-items-center">
                  Amarillo <span class="badge badge-primary badge-pill">8</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-info d-flex justify-content-between align-items-center">
                  Azul <span class="badge badge-primary badge-pill">9</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-dark d-flex justify-content-between align-items-center">
                  Negro <span class="badge badge-primary badge-pill">18</span>
                </a>
                <!-- /Elementos de la lista -->
              </div>
              <!-- /filtros de color -->
              <!-- filtros de Estilo -->
              <div id="listaEstilo" class="list-group shadow-lg">
                <!-- Elementos de la lista -->
                <a href="#" class="list-group-item list-group-item-action active">
                  <h5 class="list-group-item-heading">Estilo</h5>
                </a>
                <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                  <!-- formulario del checkbox -->
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" value="Nor" class="form-check-input">
                      Normales
                    </label>
                  </div>
                  <!-- /formulario del checkbox -->
                  <span class="badge badge-primary badge-pill">49</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                  <!-- formulario del checkbox -->
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" value="Dep" class="form-check-input">
                      Deportivos
                    </label>
                  </div>
                  <!-- /formulario del checkbox -->
                  <span class="badge badge-primary badge-pill">21</span>
                </a>
                <!-- /Elementos de la lista -->
              </div>
              <!-- /filtros de Estilo -->
            </div>
          </div>
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
    <div class="modal fade" id="modalOferta">
      <!-- Cuerpo del modal -->
      <div class="modal-dialog modal-lg">
        <!-- contenido del modal -->
        <div class="modal-content">
          <!-- Titulo del modal -->
          <div class="modal-header">
            <!-- etiqueta -->
            <h4 class="modal-title">Oferta exclusiva</h4>
            <!-- /etiqueta -->
            <!-- botton para cerrar modal -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <!-- /botton para cerrar modal -->
          </div>
          <!-- /Titulo del modal -->
          <!-- cuerpo del modal -->
          <div class="modal-body">
          Regístrate hoy y recibe $50 de descuento!
          <!-- formulario para correo -->
          <form action="#" class="form">
            <!-- divicion contenedora de elementos -->
            <div class="form-group">
              <!-- input -->
              <input type="email" class="form-control mt-3" id="inputCorreoModal" name="email" placeholder="micorreo@correo.com">
              <!-- /input -->
              <!-- Etiqueta -->
              <small class="form-text text-muted">
                <i class="fa fa-lock mr-1"></i>Tu información está protegida
              </small>
              <!-- /Etiqueta -->
            </div>
            <!-- divicion contenedora de elementos -->
          </form>
          <!-- formulario para correo -->
          </div>
          <!-- /cuerpo del modal -->
          <!-- Footer del modal -->
          <div class="modal-footer">
            <!-- botones  -->
            <button type="button" class="btn btn-danger" data-dismiss="modal">No, no quiero el descuento</button>
            <button type="submit" class="btn btn-Navi">Regístrame</button>
            <!-- /botones  -->
          </div>
          <!-- /Footer del modal -->
        </div>
        <!-- contenido del modal -->
      </div>
      <!-- /Cuerpo del modal -->
    </div>
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
