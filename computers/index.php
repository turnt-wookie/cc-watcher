<?php session_start();if(!isset($_SESSION["name"])) header('Location: /login/index.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CC Watcher</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" href="index.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand text-primary font-weight-bold" href="/">CC Watcher</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" id="roomsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Aulas
          </a>
          <div class="dropdown-menu" aria-labelledby="roomsDropdown">
            <a href="#" class="dropdown-item">CC1</a>
            <a href="#" class="dropdown-item">CC2</a>
            <a href="#" class="dropdown-item">CC3</a>
            <a href="#" class="dropdown-item">CC4</a>
            <a href="#" class="dropdown-item">CC5</a>
          </div>
        </li>
      </ul>
      <div class="text-light mr-3">Hola <i><?php echo$_SESSION['name'] ?></i></div>

      <div class="form-inline my-2 my-lg-0">
        <a class="btn btn-outline-light my-2 my-sm-0" href="/login/session_close.php">Cerrar Sesión</a>
      </div>
    </div>
  </nav>

  <div class="container">
    <h1 class="text-center mt-5">Computadoras del CC1</h1>
    <div class="row mb-5" id="row-A">
      <!-- Card -->
      <div class="col-6 col-sm-4 col-md-3 col-xl-2 mb-3" id="column-1">
        <div class="card text-center">
          <div class="card-body">
            <h6 class="card-title">A1</h6>
            <h6><span class="badge badge-success">Disponible</span></h6>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm">Reservar</a>
          </div>
        </div>
      </div>

      <!-- Card -->
      <div class="col-6 col-sm-4 col-md-3 col-xl-2 mb-3" id="column-2">
        <div class="card text-center">
          <div class="card-body">
            <h6 class="card-title">A2</h6>
            <h6><span class="badge badge-danger">No disponible</span></h6>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm disabled">Reservar</a>
          </div>
        </div>
      </div>

      <!-- Card -->
      <div class="col-6 col-sm-4 col-md-3 col-xl-2 mb-3" id="column-3">
        <div class="card text-center">
          <div class="card-body">
            <h6 class="card-title">A3</h6>
            <h6><span class="badge badge-warning">Reservado</span></h6>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm disabled">Reservar</a>
          </div>
        </div>
      </div>

      <!-- Card -->
      <div class="col-6 col-sm-4 col-md-3 col-xl-2 mb-3" id="column-4">
        <div class="card text-center">
          <div class="card-body">
            <h6 class="card-title">A4</h6>
            <h6><span class="badge badge-danger">No disponible</span></h6>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm disabled">Reservar</a>
          </div>
        </div>
      </div>

      <!-- Card -->
      <div class="col-6 col-sm-4 col-md-3 col-xl-2 mb-3" id="column-5">
        <div class="card text-center">
          <div class="card-body">
            <h6 class="card-title">A5</h6>
            <h6><span class="badge badge-success">Disponible</span></h6>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm">Reservar</a>
          </div>
        </div>
      </div>

      <!-- Card -->
      <div class="col-6 col-sm-4 col-md-3 col-xl-2 mb-3" id="column-6">
        <div class="card text-center">
          <div class="card-body">
            <h6 class="card-title">A6</h6>
            <h6><span class="badge badge-success">Disponible</span></h6>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm">Reservar</a>
          </div>
        </div>
      </div>

    </div>


    <div class="row mb-5" id="row-B">
      <!-- Card -->
      <div class="col-6 col-sm-4 col-md-3 col-xl-2 mb-3" id="column-1">
        <div class="card text-center">
          <div class="card-body">
            <h6 class="card-title">B1</h6>
            <h6><span class="badge badge-success">Disponible</span></h6>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm">Reservar</a>
          </div>
        </div>
      </div>

      <!-- Card -->
      <div class="col-6 col-sm-4 col-md-3 col-xl-2 mb-3" id="column-2">
        <div class="card text-center">
          <div class="card-body">
            <h6 class="card-title">B2</h6>
            <h6><span class="badge badge-danger">No disponible</span></h6>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm disabled">Reservar</a>
          </div>
        </div>
      </div>

      <!-- Card -->
      <div class="col-6 col-sm-4 col-md-3 col-xl-2 mb-3" id="column-3">
        <div class="card text-center">
          <div class="card-body">
            <h6 class="card-title">B3</h6>
            <h6><span class="badge badge-warning">Reservado</span></h6>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm disabled">Reservar</a>
          </div>
        </div>
      </div>

      <!-- Card -->
      <div class="col-6 col-sm-4 col-md-3 col-xl-2 mb-3" id="column-4">
        <div class="card text-center">
          <div class="card-body">
            <h6 class="card-title">B4</h6>
            <h6><span class="badge badge-danger">No disponible</span></h6>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm disabled">Reservar</a>
          </div>
        </div>
      </div>

      <!-- Card -->
      <div class="col-6 col-sm-4 col-md-3 col-xl-2 mb-3" id="column-5">
        <div class="card text-center">
          <div class="card-body">
            <h6 class="card-title">B5</h6>
            <h6><span class="badge badge-success">Disponible</span></h6>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm">Reservar</a>
          </div>
        </div>
      </div>

      <!-- Card -->
      <div class="col-6 col-sm-4 col-md-3 col-xl-2 mb-3" id="column-6">
        <div class="card text-center">
          <div class="card-body">
            <h6 class="card-title">B6</h6>
            <h6><span class="badge badge-success">Disponible</span></h6>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm">Reservar</a>
          </div>
        </div>
      </div>

    </div>
  </div>

</body>
</html>
