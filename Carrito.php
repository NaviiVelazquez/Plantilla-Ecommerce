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
    <div id="contenidoPrincipal" class="row mt-5 mb-5 ml-3 mr-3">
      <!-- Tabla de productos -->
      <div id="tablaProductos" class="col-sm-12 col-md-8 shadow">
        <!-- Tabla de productos -->
        <div class="table-responsive">
            <table class="table table-striped table-bordered mt-3">
              <!-- Titulos de las columnas de la tabla -->
              <tr id="tituloTabla">
                <th class="col-md-3">Producto</th>
                <th class="col-md-2">Envio a</th>                  
                <th class="col-md-2">Precio unitario</th>
                <th class="col-md-2">Cantidad</th>
              </tr>
              <!-- /Titulos de las columnas de la tabla -->
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
      <div id="resumenCompra" class="col-sm-12 col-md-4 shadow">
        <!-- Resumen de la compra -->
        <section>
          <!-- Titulo -->
          <div class="ml-2 mr-2 mt-3 mb-3 border-bottom border-secondary">
            <h5 id="tituloResumen">
              <strong>Resumen de pedido</strong>
            </h5>
          </div>
          <!-- /Titulo -->
          <!-- Input de cupon -->
          <div class="ml-2 mr-2 mt-1 mb-5">
            <div class="input-group">
              <!-- input -->
              <input id="inputCupon" type="text" class="form-control" placeholder="¿Tienes un cupón?" maxlength="12">
              <!-- /input -->
              <!-- Grupo de elementos  -->
              <span class="input-group-btn">
                <!-- Boton -->
                <button class="btn btn-Navi" type="button">
                  <span>Aplicar</span>
                </button>
                <!-- /Boton -->
              </span>
              <!-- /Grupo de elementos  -->
            </div>
            <!-- /divicion para elementos -->
          </div>
          <!-- /Input de cupon -->
          <!-- Texto del detalle -->
          <div class="ml-2 mr-2 mt-1 mb-5">
            <!-- Subtotal -->
            <div id="subtotalRow" class="mt-2 mb-2">
              <div class="w-50">Subtotal :</div>
              <div class="w-50 d-flex justify-content-end">
                <strong>$ 9,797</strong>
              </div>
            </div>
            <!-- /Subtotal -->
            <!-- Envio -->
            <div id="envioRow" class="mb-2">
              <div class="w-50">Envío :</div>
              <div class="w-50 d-flex justify-content-end">
                <strong>Gratis</strong>
              </div>
            </div>
            <!-- /Envio -->
            <!-- Total a pagar -->
            <div id="totalRow">
              <div class="w-50">Total :</div>
              <div class="w-50 d-flex justify-content-end">
                <strong>$ 9,797</strong>
              </div>
            </div>
            <!-- /Total a pagar -->
          </div>
          <!-- /Texto del detalle -->
          <!-- Boton para pagar -->
          <div class="ml-2 mr-2 mt-1 mb-3">
            <div>
              <button type="button" class="btn btn-outline-success btn-block">
                Continuar con la compra
                <i class="fa fa-chevron-right ml-2"></i>
              </button>
            </div>
          </div>
          <!-- /Boton para pagar -->
          <!-- Boton para agregar mas productos -->
          <div class="ml-2 mr-2 mt-1 mb-3">
            <div>
              <button type="button" class="btn btn-outline-secondary btn-block">
              Agregar más productos
              <i class="fa fa fa-plus ml-2"></i>
              </button>
            </div>
          </div>
          <!-- /Boton para agregar mas productos -->
        </section>
        <!-- /Resumen de la compra -->
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
