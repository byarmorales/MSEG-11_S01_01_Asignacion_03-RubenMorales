<?php
 session_start();
 if (isset($_SESSION['user_id'])) {
    header('Location: /registro/index.php');
  }
$conexion = new mysqli('10.142.0.9', 'redish', '5NZXdZm#@M7!', 'registro_redish');
if ($conexion->connect_errno) {
    echo "ERROR al conectar con la DB.";
    exit;
}

// 2. isset() del boton login
if (!empty($_POST['correoElectronico']) && !empty($_POST['contrasenia'])) {

    // 3. Variables $_POST[]
    $u = $_POST['correoElectronico'];
    $c = $_POST['contrasenia']; // La función MD5() estará encriptando lo ingresado para comparar con lo guardado

    if($u == "" || $_POST['contrasenia'] == null){ // Validamos que ningún campo quede vacío
        echo "<script>alert('Error: usuario y/o clave vacios!!');</script>"; // Se utiliza Javascript dentro de PHP
    }else{
        // 4. Cadena de SQL
        $sql = "SELECT id_Usuario,correoElectronico,contrasenia FROM usuario WHERE correoElectronico = '$u' AND contrasenia = '$c'";

        // 5. Ejecuto cadena query()
        if(!$consulta = $conexion->query($sql)){
            echo "ERROR: no se pudo ejecutar la consulta!";
        }else{

            // 6. Cuento registros obtenidos del select. 
            // Como el nombre de usuario en la clave primaria no debería de haber mas de un registro con el mismo nombre.
            $filas = mysqli_num_rows($consulta);
             $res= mysqli_fetch_array($consulta);
            // 7. Comparo cantidad de registros encontrados
            if($filas == 0){
                echo "<script>alert('Error: usuario y/o clave incorrectos!!');</script>";
            }else{
		$_SESSION['user_id'] =$res['id_Usuario'];
                header('Location: /registro/index.php'); // Si está todo correcto redirigimos a otra página
		//echo $consulta;
            }

        }
    }
}




 // require 'database.php';
 // if (!empty($_POST['correoElectronico']) && !empty($_POST['contrasenia'])) {
 //   $records = $conn->prepare('SELECT id_Usuario, correoElectronico, contrasenia FROM usuario WHERE correoElectronico = :correoElectronico');
 //   $records->bindParam(':correoElectronico', $_POST['correoElectronico']);
 //   $records->execute();
 //   $results = $records->fetch(PDO::FETCH_ASSOC);
 //   $message = '';
 //   if ($results !== false && password_verify($_POST['contrasenia'], $results['contrasenia'])) {
 //     $_SESSION['user_id'] = $results['id_Usuario'];
 //     header("Location: /registro/index.php");
 //   } else {
 //     $message ='Usuario o contraseña incorrectos';
 //   }
//  }
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
        			  <input name="correoElectronico"  type="text" class="form-control" id="UserName" required type="text">
        			  <p class="help-block" >Escribe tú correo</p>
      			</div>
      			<div class="form-group label-floating">
        			  <label class="control-label" for="UserPass">Contraseña</label>
        			  <input name="contrasenia" class="form-control" required id="UserPass" type="password">
        			  <p class="help-block">Escribe tú contraseña</p>
      			</div>
      			<div class="form-group text-center">
      				    <input type="submit" name"login" value="Iniciar sesión" class="btn btn-info" >
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
