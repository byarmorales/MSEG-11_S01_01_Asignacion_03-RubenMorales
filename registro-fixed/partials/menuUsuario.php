<?php
$id=$_GET['id'];
  /*$nombre=ObtenerNombreUsuario();*/
$menu="
<div class='main'>
        <nav class='cbp-hsmenu-wrapper' id='cbp-hsmenu-wrapper'>
          <div class='cbp-hsinner'>
            <ul class='cbp-hsmenu'>
              <li><a href='usuarioAso-info.php?id=".$id."'>Información General</a></li>
              <li><a href='habilidades-usuario-list.php?id=".$id."'>Habilidades</a></li>
              <li><a href='salud-usuario-list.php?id=".$id."'>Control Salud</a></li>
              <li><a href='asistencia-usuario-list.php?id=".$id."'>Control Asistencia</a></li>
              <li><a href='actividades-usuario-list.php?id=".$id."'>Actividades</a></li>
            </ul>
          </div>
        </nav>
      </div>";
      echo ($menu);
?>
