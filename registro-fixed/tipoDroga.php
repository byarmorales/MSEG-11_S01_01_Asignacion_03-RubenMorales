<?php
  require 'database.php';
  $message = '';
  $estado=1;
  if (!empty($_POST['txt_Tipodroga'])){
    $sql = "INSERT INTO tipoDroga (descripcion) VALUES (:descripcion)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':descripcion', $_POST['txt_Tipodroga']);
    if ($stmt->execute()){
        $message = 'Se ingreso el tipo de droga';
      }
      else
      {
        $message = 'No se pudo ingresar el registro';
      }
     }
?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php require 'partials/headSetting.php' ?>
</head>
<body>
 <?php require 'partials/header.php' ?>
  <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
<!-- SideBar -->
<!-- Content page-->
	  <section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
      </ul>
		</nav>
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class=""></i><small>Tipo Droga</small></h1>
			</div>
			<p class="lead"></p>
		</div>
		<div class="container-fluid">
			<ul class="breadcrumb breadcrumb-tabs">
			  	<li>
			  		<a href="tipoDroga.php" class="btn btn-info">
			  			<i class="zmdi zmdi-plus"></i> &nbsp;Agregar Tipo droga
			  		</a>
			  	</li>
			  	<li>
			  		<a href="tipoDroga-list.php" class="btn btn-success">
			  			<i class="zmdi zmdi-format-list-bulleted"></i> &nbsp;LISTA DE TIPO DROGA
			  		</a>
			  	</li>
			</ul>
		</div>
		<!-- panel datos de la empresa -->
		<div class="container-fluid">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="zmdi zmdi-plus"></i> &nbsp; DATOS DEL TIPO DROGA </h3>
				</div>
				<div class="panel-body">
					 <form action="tipodroga.php" method="POST">
				    	<fieldset>
				    		<legend><i class="zmdi zmdi-assignment"></i> &nbsp; Datos básicos</legend>
				    		<div class="container-fluid">
				    			<div class="row">
				    				<div class="col-xs-12 col-sm-6">
								    	<div class="form-group label-floating">
										  	<label class="control-label">Descripción*</label>
										  	<input pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" type="text" name="txt_Tipodroga" required="" maxlength="200">
										</div>
				    				</div>
				    			</div>
				    		</div>
				    	</fieldset>
              <p class="text-center" style="margin-top: 20px;">
					    	<button type="submit" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar</button>
                <?php if(!empty($message)): ?>
                    <p> <?= $message ?></p>
                  <?php endif; ?>
              </p>
				    </form>
				</div>
			</div>
		</div>
	</section>
	<!--====== Scripts -->
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>
