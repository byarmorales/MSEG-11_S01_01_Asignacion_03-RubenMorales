<?php
  session_start();
  if (isset($_SESSION['user_id'])) {
    header('Location: /registro/index.php');
  }
  require 'database.php';
  if (!empty($_POST['correoElectronico']) && !empty($_POST['contrasenia'])) {
    $records = $conn->prepare('SELECT id_Usuario, correoElectronico, contrasenia FROM usuario WHERE correoElectronico = :correoElectronico');
    $records->bindParam(':correoElectronico', $_POST['correoElectronico']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $message = '';
    if ($results !== false && password_verify($_POST['contrasenia'], $results['contrasenia'])) {
      $_SESSION['user_id'] = $results['id_Usuario'];
      header("Location: /registro/index.php");
    } else {
      $message ='Usuario o contraseña incorrectos';
    }
  }
?>

<!DOCTYPE html>
<html lang="es">
  <head>
  	<?php require 'partials/headSetting.php' ?>
  </head>
  <body>
  	<div class="full-box login-container cover">
        <form action="login.php" method="POST" autocomplete="off" class="logInForm">
      			<p class="text-center text-muted" id="logo"></p>
      			<p class="text-center text-muted text-uppercase">Bienvenido</p>
      			<div class="form-group label-floating">
        			  <label class="control-label" for="UserName">Correo</label>
        			  <input name="correoElectronico"  type="email" class="form-control" id="UserName" required type="text">
        			  <p class="help-block" >Escribe tú correo</p>
      			</div>
      			<div class="form-group label-floating">
        			  <label class="control-label" for="UserPass">Contraseña</label>
        			  <input name="contrasenia" class="form-control" required id="UserPass" type="password">
        			  <p class="help-block">Escribe tú contraseña</p>
      			</div>
      			<div class="form-group text-center">
      				    <input type="submit" value="Iniciar sesión" class="btn btn-info" >
      			</div>
            <?php if(!empty($message)): ?>
                  <p> <?= $message ?></p>
            <?php endif; ?>
    		</form>
  	</div>
  	<!--====== Scripts -->
    	<script src="./js/jquery-3.1.1.min.js"></script>
    	<script src="./js/bootstrap.min.js"></script>
    	<script src="./js/material.min.js"></script>
    	<script src="./js/ripples.min.js"></script>
    	<script src="./js/sweetalert2.min.js"></script>
    	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
    	<script src="./js/main.js"></script>
      <script src="./js/clock.js"></script>
    	<script>
    		$.material.init();
    	</script>
  </body>
</html>
