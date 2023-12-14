<?php
// Inicia la sesión
session_start();

// Verifica si el usuario ha iniciado sesión
if (isset($_SESSION['username'])) {
    $nombre_usuario = $_SESSION['username'];
} else {
    // Si no ha iniciado sesión, redirige a la página de inicio de sesión
    header("Location: iniciar_sesion.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Bienvenido</title>
  <link rel="stylesheet" type="text/css" href="estilob.css">
</head>
<body>
  <div class="container">
    <h2>Bienvenido, <?php echo $nombre_usuario; ?>!</h2>
    <p>Has iniciado sesión con éxito.</p>
    <a href="index.php">Cerrar sesión</a>
  </div>
  <div class="container mt-3">
    <div class="row">
        <!-- Logo -->
        <div class="col-md-4">
            <img class="img-fluid w-50 " src="/img/logo.jfif" alt="logo">
        </div>
        <!-- Barra de búsqueda -->
        <div class="col-md-3 "> 
            <nav class="navbar bg-body-tertiary">
                <div class="container-fluid">
                    <form class="d-flex" role="search">
                        <input class="form-control me-3 col-md-12" type="search" placeholder="Buscar" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                </div>
            </nav>
        </div>
       <div class="col-md-3"></div>
        <!-- Dropdown de usuario -->
        <div class="col-md-2"> 
          
          <div class="dropdown">
                <a class="btn btn-success dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                   aria-expanded="false">
                    Andres Ramirez
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Área Personal</a></li>
                    <li><a class="dropdown-item" href="#">Perfil</a></li>
                    <li><a class="dropdown-item" href="#">Mensajes</a></li>
                    <li><a class="dropdown-item" href="#">Preferencias</a></li>
                    <li><a class="dropdown-item" href="#">Cerrar Sesión</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

    <hr class="h-50 border-5 btn-primary">

    <div class="container ">
      <div class="row">
          <div class="col-md-3">
              <!-- Menú lateral -->
              <div class="list-group">
                  <a href="#" class="list-group-item list-group-item-action">Enlace 1</a>
                  <a href="#" class="list-group-item list-group-item-action">Enlace 2</a>
                  <a href="#" class="list-group-item list-group-item-action">Enlace 3</a>
                  <!-- ... Agrega más enlaces según sea necesario ... -->
              </div>
          </div>

          <div class="col-md-6">
              <!-- Contenido de tarjetas -->
              <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>                </div>
              </div>

              <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>                </div>
              </div>

                
              </div>
          </div>
      </div>
  </div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>


</body>
</html>