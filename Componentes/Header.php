<!-- Inicio de Header -->
<header id="header-container">
  <!-- Contenedor de las Filas & columnas -->
  <div class="container-fluid">
    <!-- Fila -->
    <div class="row align-items-center">
      <!-- Barra principal -->
      <nav class="navbar col-12 py-0 px-0 px-sm-2">
        <!-- Columna logotipo -->
        <div class="col-10 col-sm-6 col-md-4">
          <a class="navbar-brand" href="#">
            <div class="row align-items-center">
              <i class="fa fa-atom fa-2x text-dark d-none d-sm-block"></i>
              <h3 class="pt-2">
                <span class="mx-2 text-white">
                  <strong>Navi Shop</strong>
                </span>
              </h3>
            </div>
          </a>
        </div>
        <!-- /Columna logotipo -->
        <!-- Columna del boton iniciar session -->
        <div class="col-2 col-sm-6 col-md-8">
          <div class="row justify-content-center justify-content-sm-end pr-1">
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#ModalLogin">
              <div class="row align-items-center px-2">
                <span class="d-none d-sm-block">Iniciar Session</span>
                <i class="fa fa-sign-in-alt ml-1"></i>
              </div>
            </button>
          </div>
        </div>
        <!-- Columna del boton iniciar session -->
      </nav>
      <!-- /Barra principal -->
    </div>
    <!-- /Fila -->
  </div>
  <!-- /Contenedor de las columnas -->
</header>
<!-- /Inicio de Header -->

<!-- Modal -->
<?php include("Componentes/modalLogin.php"); ?>
<!-- /Modal -->