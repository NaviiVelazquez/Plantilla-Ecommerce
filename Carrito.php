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

    <!-- Contenido principal -->
    <div id="contenidoPrincipal" class="mt-5 mb-5 ml-3">
      <!-- Tabla de productos -->
      <div id="tablaProductos" class="col-md-9 shadow">
          <!-- Titulos de las columnas de la tabla -->
          <div class="table-responsive">
            <table id="tituloTabla" class="table table-bordered mt-3">
              <tr>
                <th class="col-md-3">Producto</th>
                <th class="col-md-2">Envio a</th>                  
                <th class="col-md-2">Precio unitario</th>
                <th class="col-md-2">Cantidad</th>
              </tr>
            </table>            
          </div>
          <!-- Titulos de las columnas de la tabla -->
          <!-- Tabla de productos -->
          <div class="table-responsive">
            <table class="table table-striped table-bordered mt-0">
              <!-- Cuerpo de la tabla -->
              <tbody>
                <!-- Fila de la tabla -->
                <tr>
                  <td class="col-md-3">
                    <div id="celdaProducto">
                      <div id="imagenProducto" class="mr-1 ml-1 shadow">
                        <a href="#">
                          <img id="imgProducto" src="Imagenes/4.jpg" alt="" srcset="">
                        </a>
                      </div>
                      <div id="nombreProducto" class="mr-1 ml-1">
                        <a id="nomProducto" href="#">
                        Maecenas id varius magna. Vivamus vel lobortis est, nec
                        </a>
                      </div>
                    </div>
                  </td>
                  <td class="col-md-2 align-middle">
                    <div id="opcionEnvio" class="d-flex justify-content-center">
                      <form>
                        <div class="radio">
                          <label id="radioEnvio">
                            <input class="mr-1" type="radio" name="opcEnvio" value="">Domicilio
                          </label>
                        </div>
                        <div class="radio">
                          <label id="radioEnvio">
                            <input class="mr-1" type="radio" name="opcEnvio" value="">Sucursal
                          </label>
                        </div>
                      </form> 
                    </div>
                  </td>
                  <td class="col-md-2 align-middle">
                    <div class="d-flex justify-content-center">
                      <span>
                        <strong>A: $ 4,599</strong>
                      </span>
                    </div>
                  </td>
                  <td class="col-md-2 align-middle">
                    <div id="celdaCantidad" class="d-flex justify-content-center">
                      <div class="mr-2 ml-1">
                        <select name="" id="comboPiezas" class="btn">
                            <option value="">1 pieza</option>
                            <option value="">2 piezas</option>
                            <option value="">3 piezas</option>
                            <option value="">4 piezas</option>
                            <option value="">5 piezas</option>
                        </select>
                      </div>
                      <div class="mr-1 ml-2">
                        <button type="button" class="btn btn-outline-danger">
                          <i class="fa fa-trash"></i>
                        </button>
                      </div>
                    </div>
                  </td>
                </tr>
                <!-- /Fila de la tabla -->
                <!-- Fila de la tabla -->
                <tr>
                  <td class="col-md-3">
                    <div id="celdaProducto">
                      <div id="imagenProducto" class="mr-1 ml-1 shadow">
                        <a href="#">
                          <img id="imgProducto" src="Imagenes/5.jpg" alt="" srcset="">
                        </a>
                      </div>
                      <div id="nombreProducto" class="mr-1 ml-1">
                        <a id="nomProducto" href="#">
                        In faucibus in elit nec suscipit. Nam quis metus tincidunta
                        </a>
                      </div>
                    </div>
                  </td>
                  <td class="col-md-2 align-middle">
                    <div id="opcionEnvio" class="d-flex justify-content-center">
                      <form>
                        <div class="radio">
                          <label id="radioEnvio">
                            <input class="mr-1" type="radio" name="opcEnvio" value="">Domicilio
                          </label>
                        </div>
                        <div class="radio">
                          <label id="radioEnvio">
                            <input class="mr-1" type="radio" name="opcEnvio" value="">Sucursal
                          </label>
                        </div>
                      </form> 
                    </div>
                  </td>
                  <td class="col-md-2 align-middle">
                    <div class="d-flex justify-content-center">
                      <span>
                        <strong>A: $ 3,899</strong>
                      </span>
                    </div>
                  </td>
                  <td class="col-md-2 align-middle">
                    <div id="celdaCantidad" class="d-flex justify-content-center">
                      <div class="mr-2 ml-1">
                        <select name="" id="comboPiezas" class="btn">
                            <option value="">1 pieza</option>
                            <option value="">2 piezas</option>
                            <option value="">3 piezas</option>
                            <option value="">4 piezas</option>
                            <option value="">5 piezas</option>
                        </select>
                      </div>
                      <div class="mr-1 ml-2">
                        <button type="button" class="btn btn-outline-danger">
                          <i class="fa fa-trash"></i>
                        </button>
                      </div>
                    </div>
                  </td>
                </tr>
                <!-- /Fila de la tabla -->
                <!-- Fila de la tabla -->
                <tr>
                  <td class="col-md-3">
                    <div id="celdaProducto">
                      <div id="imagenProducto" class="mr-1 ml-1 shadow">
                        <a href="#">
                          <img id="imgProducto" src="Imagenes/6.jpg" alt="" srcset="">
                        </a>
                      </div>
                      <div id="nombreProducto" class="mr-1 ml-1">
                        <a id="nomProducto" href="#">
                        Nulla ac pharetra ex, in semper justo. Suspendisse
                        </a>
                      </div>
                    </div>
                  </td>
                  <td class="col-md-2 align-middle">
                    <div id="opcionEnvio" class="d-flex justify-content-center">
                      <form>
                        <div class="radio">
                          <label id="radioEnvio">
                            <input class="mr-1" type="radio" name="opcEnvio" value="">Domicilio
                          </label>
                        </div>
                        <div class="radio">
                          <label id="radioEnvio">
                            <input class="mr-1" type="radio" name="opcEnvio" value="">Sucursal
                          </label>
                        </div>
                      </form> 
                    </div>
                  </td>
                  <td class="col-md-2 align-middle">
                    <div class="d-flex justify-content-center">
                      <span>
                        <strong>A: $ 1,299</strong>
                      </span>
                    </div>
                  </td>
                  <td class="col-md-2 align-middle">
                    <div id="celdaCantidad" class="d-flex justify-content-center">
                      <div class="mr-2 ml-1">
                        <select name="" id="comboPiezas" class="btn">
                            <option value="">1 pieza</option>
                            <option value="">2 piezas</option>
                            <option value="">3 piezas</option>
                            <option value="">4 piezas</option>
                            <option value="">5 piezas</option>
                        </select>
                      </div>
                      <div class="mr-1 ml-2">
                        <button type="button" class="btn btn-outline-danger">
                          <i class="fa fa-trash"></i>
                        </button>
                      </div>
                    </div>
                  </td>
                </tr>
                <!-- /Fila de la tabla -->
              </tbody>
              <!-- /Cuerpo de la tabla -->
            </table>
          </div>
          <!-- /Tabla de productos -->
      </div>
      <!-- /Tabla de productos -->
      <!-- Detalle de compra -->
      <div class="col-md-3">
      </div>
      <!-- Detalle de compra -->
    </div>
    <!-- /Contenido principal -->

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
