<?php 
session_start();

include './LdapHandler.php';
  $error = false;

if(isset($_POST['inetUsername']) && isset($_POST['inetPassword'])) {



  $user = $_POST['inetUsername'];
  $pass = $_POST['inetPassword'];

  $result = LdapHandler.validateUser($user, $pass);

  if($result == 'invalid_user') $error = true;
  if($result == 'incorrect_user') $error = true;
  if($result == 'ldap_error') $error = true;

  if(!$error) {
    $_SESSION["name"] = $result;
    header('Location: /rooms/index.php');
  }

}

?>
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
  <div class="container">
    <h1 class="text-center">CC Watcher</h1>  
    <div class="row mt-5 justify-content-center">
      <div class="col-md-8 col-lg-6 col-xl-4">
        <?php if($error): ?>
        <div class="alert alert-danger" role="alert">
          <strong>ERROR</strong>
          <?php if($result == 'invalid_user') echo 'Usuario Invalido' ?>
          <?php if($result == 'incorrect_user') echo 'Usuario Incorrecto' ?>
          <?php if($result == 'ldap_error') echo 'Conexion con directorio activo' ?>
        </div>
        <?php endif ?>
        <form method="POST", action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <div class="form-group">
            <label for="inetUsername">Usuario</label>
            <input type="text" class="form-control" name="inetUsername" id="inetUsername" aria-describedby="inetHelp" value="<?php echo (isset($_POST['inetUsername']) ? $_POST['inetUsername'] : ''); ?>">
            <small id="inetHelp" class="form-text text-muted">Inicia sesión con tu usuario en el directorio activo (INET).</small>
          </div>
          <div class="form-group">
            <label for="inetPassword">Contraseña</label>
            <input type="password" class="form-control" name="inetPassword" id="inetPassword">
          </div>
          <div class="row justify-content-center">
            <div class="col-sm-6">
              <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <nav class="navbar fixed-bottom navbar-dark bg-dark">
    <a href="#" class="navbar-brand"></a>
    <a href="#" class="text-light">¿Qué es CC Watcher?</a>
  </nav>
</body>
</html>
