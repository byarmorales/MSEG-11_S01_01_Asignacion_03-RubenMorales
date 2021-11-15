<?php
ob_start();
session_start();
     require '../registro/database.php';
     if (isset($_SESSION['user_id'])) {
      $records = $conn->prepare('SELECT id_Usuario, correoElectronico, nombre, contrasenia FROM usuario WHERE id_Usuario = :id_Usuario');
      $records->bindParam(':id_Usuario', $_SESSION['user_id']);
      $records->execute();
      $results = $records->fetch(PDO::FETCH_ASSOC);
      $user = null;
      if (count($results) > 0) {
        $user = $results;
      }
    }
    //Establecer tiempo de vida de la sesión en segundos
    $inactividad = 1200;
    //Comprobar si $_SESSION["timeout"] está establecida
    if(isset($_SESSION["timeout"])){
     // Calcular el tiempo de vida de la sesión (TTL = Time To Live)
      $sessionTTL = time() - $_SESSION["timeout"];
        if($sessionTTL > $inactividad){
          session_destroy();
          header("Location: /registro/logout.php");
        }
      }
      // El siguiente key se crea cuando se inicia sesión
      $_SESSION["timeout"] = time();
      ?>
<section class="full-box cover dashboard-sideBar">
    <div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
      <div class="full-box dashboard-sideBar-ct">
        <div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
        REDISH <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
        </div>
    <!-- SideBar Menu-->
    <ul class="list-unstyled full-box dashboard-sideBar-Menu">

      <li>
        <a href="#!" class="btn-sideBar-SubMenu">
          <i class="zmdi zmdi-case zmdi-hc-fw"></i>Personas<i class="zmdi zmdi-caret-down pull-right"></i>
        </a>
        <ul class="list-unstyled full-box">
          <li>
            <a href="asistencia.php"><i class="zmdi zmdi-balance zmdi-hc-fw"></i>Asistencia</a>
          </li>
          <li>
            <a href="actividad-usuarios.php"><i class="zmdi zmdi-labels zmdi-hc-fw"></i>Actividades</a>
          </li>
          <li>
            <a href="usuarioAso-list.php"><i class="zmdi zmdi-account zmdi-hc-fw"></i>Usuarios REDISH</a>
          </li>

        <!-- <li>
            <a href="client.php"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i> Clientes</a>
          </li>
          <li>
            <a href="client.php"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i> Equipos</a>
          </li>-->
        </ul>
      </li>
      <li>
        <a href="#!" class="btn-sideBar-SubMenu">
          <i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Administrar <i class="zmdi zmdi-caret-down pull-right"></i>
        </a>
        <ul class="list-unstyled full-box">
      <!--   <li>
            <a href="admin.php"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Tipo Equipo</a>
          </li>-->
          <li>
            <a href="usuario-list.php"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Usuario-Funcionario</a>
          </li>
          <li>
            <a href="casillero-list.php"><i class="zmdi zmdi zmdi-hc-fw"></i> Casilleros</a>
          </li>
          <li>
            <a href="inventario-list.php"><i class="zmdi zmdi-file-text zmdi-hc-fw"></i>Inventario</a>
          </li>
          <li>
            <a href="escolaridad-list.php"><i class="zmdi zmdi zmdi-hc-fw"></i>Escolaridad</a>
          </li>
          <li>
            <a href="pais-list.php"><i class="zmdi zmdi zmdi-hc-fw"></i> Paises</a>
          </li>
          <li>
            <a href="canton-list.php"><i class="zmdi zmdi zmdi-hc-fw"></i> Cantón</a>
          </li>
          <li>
            <a href="provincia-list.php"><i class="zmdi zmdi zmdi-hc-fw"></i> Provincia</a>
          </li>
          <li>
            <a href="tipoEnfermedad-list.php"><i class="zmdi zmdi zmdi-hc-fw"></i>Tipo Enfermedades</a>
          </li>
          <li>
            <a href="tipoDroga-list.php"><i class="zmdi zmdi zmdi-hc-fw"></i>Tipo Drogas</a>
          </li>
          <li>
            <a href="tipoArticulo-list.php"><i class="zmdi zmdi zmdi-hc-fw"></i>Tipo Artículo</a>
          </li>
          <li>
            <a href="parentezco-list.php"><i class="zmdi zmdi zmdi-hc-fw"></i>Parentesco</a>
          </li>
          <li>
            <a href="habilidadeslaborales-list.php"><i class="zmdi zmdi zmdi-hc-fw"></i>Habilidades Laborales</a>
          </li>
          <li>
            <a href="motivosancion-list.php"><i class="zmdi zmdi zmdi-hc-fw"></i>Motivos Sanción</a>
          </li>
          <li>
            <a href="actividades-list.php"><i class="zmdi zmdi zmdi-hc-fw"></i>Tipo Actividad</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="#!" class="btn-sideBar-SubMenu">
          <i class=""></i>Reportes <i class="zmdi zmdi-caret-down pull-right"></i>
        </a>
        <ul class="list-unstyled full-box">
      <!--   <li>
            <a href="admin.php"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Tipo Equipo</a>
          </li>-->
          <li>
            <a href="report-asistencia-select.php"><i class="zmdi zmdi-account zmdi-file-text"></i> Asistencia</a>
          </li>
          <li>
            <a href="report-sancion-select.php"><i class="zmdi zmdi-account zmdi-file-text"></i> Sanciones</a>
          </li>
          <li>
            <a href="report-articulo-select.php"><i class="zmdi zmdi-account zmdi-file-text"></i> Articulos</a>
          </li>
          <li>
            <a href="report-actividades-select.php"><i class="zmdi zmdi-account zmdi-file-text"></i> Actividades</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="#!" class="btn-sideBar-SubMenu">
          <i class=""></i> Acerca de <i class="zmdi zmdi-caret-down pull-right"></i>
        </a>
        <ul class="list-unstyled full-box">
      <!--   <li>
            <a href="admin.php"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Tipo Equipo</a>
          </li>-->
          <li>
            <a href="documentos-list.php"><i class="zmdi zmdi-account zmdi-hc-fw"></i>Manual Usuario</a>
          </li>
          <li>
            <i class="zmdi zmdi zmdi-hc-fw"></i> Registro REDISH
          </li>
          <li>
            <i class="zmdi zmdi zmdi-hc-fw"></i> V.1.0 09.2019
          </li>
        </ul>
      </li>
    <!--  <li>
        <a href="tiquetes.php">
          <i class="zmdi zmdi-book-image zmdi-hc-fw"></i> Tiquetes
        </a>
      </li>
      <li>
        <a href="reporte.php">
          <i class="zmdi zmdi-book-image zmdi-hc-fw"></i> Reportes
        </a>
      </li>-->
    </ul>
    <div class="full-box dashboard-sideBar-UserInfo">
      <?php if(!empty($user)): ?>
        <br> Bienvenido. <?=$user['nombre'];?></br>
      <?php else:
          header("Location: /registro/login.php");
          exit();
      ?>
      <?php endif; ?>

      <ul class="full-box list-unstyled text-center">
        <li>
          <a href="my-data.php" title="<?=$user['nombre'];?>">
            <i class="zmdi zmdi-account-circle"></i>
          </a>
        </li>
        <li>
          <a href="logout.php" title="Cerrar Sesión" class="bn-exit-system">
            <i class="zmdi zmdi-power"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
  </section>
  <?php
  ob_end_flush();
  ?>
