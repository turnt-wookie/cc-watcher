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
        <li class="nav-item active">
          <a class="nav-link" href="#">Aulas</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Cerrar Sesión</button>
      </form>
    </div>
  </nav>

  <div class="container">
    <h1 class="text-center mt-5">Aulas</h1>
    <div class="row">
      <!-- Card -->
      <div class="col-sm-6 col-md-4 col-xl-3 mb-3">
        <div class="card">
          <div class="card-body text-center">
            <h4 class="card-title">CC1</h4>
            <h6><span class="badge badge-success">Disponible</span></h6>
            <p class="card-text">Aulas 
              <a href="#">A1</a>,
              <a href="#">B2</a>,
              <a href="#">C2</a>,
              <a href="#">C3</a>,
              <a href="#">D4</a>,
              <a href="#">E1</a>
              disponibles</p>
            <a href="#" class="btn btn-primary">Ver sala</a>
          </div>
        </div>
      </div>

      <!-- Card -->
      <div class="col-sm-6 col-md-4 col-xl-3 mb-3">
        <div class="card">
          <div class="card-body text-center">
            <h4 class="card-title">CC2</h4>
            <h6><span class="badge badge-danger">No disponible</span></h6>
            <p class="card-text">Ninguna aula disponible</p>
            <a href="#" class="btn btn-primary">Ver sala</a>
          </div>
        </div>
      </div>
  
      <!-- Card -->
      <div class="col-sm-6 col-md-4 col-xl-3 mb-3">
        <div class="card">
          <div class="card-body text-center">
            <h4 class="card-title">CC3</h4>
            <h6><span class="badge badge-success">Disponible</span></h6>
            <p class="card-text">Aulas 
              <a href="#">A1</a>,
              <a href="#">B2</a>,
              <a href="#">C2</a>
              disponibles</p>
            <a href="#" class="btn btn-primary">Ver sala</a>
          </div>
        </div>
      </div>
  
      <!-- Card -->
      <div class="col-sm-6 col-md-4 col-xl-3 mb-3">
        <div class="card">
          <div class="card-body text-center">
            <h4 class="card-title">CC4</h4>
            <h6><span class="badge badge-success">Disponible</span></h6>
            <p class="card-text">Todas las aulas disponibles</p>
            <a href="#" class="btn btn-primary">Ver sala</a>
          </div>
        </div>
      </div>
  
      <!-- Card -->
      <div class="col-sm-6 col-md-4 col-xl-3 mb-3">
        <div class="card">
          <div class="card-body text-center">
            <h4 class="card-title">CC5</h4>
            <h6><span class="badge badge-danger">No disponible</span></h6>
            <p class="card-text">Aula cerrada por mantenimiento</p>
            <a href="#" class="btn btn-primary">Ver sala</a>
          </div>
        </div>
      </div>

    </div>
  </div>

</body>
</html>
