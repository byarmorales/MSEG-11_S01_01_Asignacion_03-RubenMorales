<?php
    require 'functions.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php require 'partials/headSetting.php' ?>
</head>
<body>
	  <?php require 'partials/header.php'?>
	<!-- SideBar-->
	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar-->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
        </li>
				<li>
					<a href="search.html" class="btn-search">
						<i class="zmdi zmdi-search"></i>
					</a>
				</li>
			</ul>
		</nav>

		<!-- Content page-->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi mdi-balance zmdi-hc-fw"></i><small>Lista Tipo Droga</small></h1>
			</div>
			<p class="lead"></p>
		</div>

		<div class="container-fluid">
			<ul class="breadcrumb breadcrumb-tabs">
			  	<li>
			  		<a href="tipoDroga.php" class="btn btn-info">
			  			<i class="zmdi zmdi-plus"></i> &nbsp;Agregar Tipo Droga
              </a>
			  	</li>
			  	<li>
			  		<a href="tipoDroga-list.php" class="btn btn-success">
			  			<i class="zmdi zmdi-format-list-bulleted"></i> &nbsp;LISTA TIPO DROGA
			  		</a>
			  	</li>
			</ul>
		</div>
    <!-- panel lista de empresas-->
    <?php
      echo listarTipoDroga();
    ?>
  </section>
	<!--====== Scripts-->
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
