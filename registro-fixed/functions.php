<?php
/*
  --------------------------------
  29/07/2019   by arm
  Funciones
  -------------------------------
*/
/*Obtener los datos del campo nacionalidad desde la tabla Pais*/
function obtenerNacionalidad(){
    require 'database.php';
$sentencia =$conn->prepare("SELECT id_Pais, nacionalidad from pais");
            $optNacionalidad="<select class='form-control' name='nacionalidad'><option value=''></option>";
            if ($sentencia->execute(array())) {
            while ($Fila = $sentencia->fetch()) {
              $optNacionalidad .="<option value='".$Fila["id_Pais"]."'>".$Fila["nacionalidad"]."</option>";
            }}
            $optNacionalidad .= "</select>";
            return $optNacionalidad;
}
/*Obtener los datos del campo nacionalidad desde la tabla Pais*/
function obtenerTipoArticulo(){
    require 'database.php';
$sentencia =$conn->prepare("SELECT id_TipoArticulo, descripcion from tipo_articulo");
            $optTipoArticulo="<select class='form-control' id='ddlTipoArticulo' name='ddlTipoArticulo'><option value=''></option>";
            if ($sentencia->execute(array())) {
            while ($Fila = $sentencia->fetch()) {
              $optTipoArticulo .="<option value='".$Fila["id_TipoArticulo"]."'>".$Fila["descripcion"]."</option>";
            }}
            $optTipoArticulo .= "</select>";
            return $optTipoArticulo;
}
/*Obtener los datos para el Estado Civil desde la tabla Estado Civll*/
function obtenerEstadoCivil(){
    require 'database.php';
    $sentencia =$conn->prepare("SELECT id_EstadoCivil, descripcion from estadocivil");
                              $optEstadoCivil="<select class='form-control' name='estadoCivil'>";
                              if ($sentencia->execute(array())) {
                              while ($Fila = $sentencia->fetch()) {
                                $optEstadoCivil .="<option value='".$Fila["id_EstadoCivil"]."'>".$Fila["descripcion"]."</option>";
                              }}
                              $optEstadoCivil .= "</select>";
                            return $optEstadoCivil;
}
/*Obtener los datos para el Tipo de identificacion desde la tabla tipoIdentificacion*/
function obtenerTipoIdentificacion(){
  require 'database.php';
$sentencia =$conn->prepare("SELECT id_TipoIdentificacion, descripcion from tipoidentificacion");
                  $optTipoIdentificacion="<select class='form-control' name='tipoIdentificacion'><option value=''></option>";
                  if ($sentencia->execute(array())) {
                  while ($Fila = $sentencia->fetch()) {
                    $optTipoIdentificacion .="<option value='".$Fila["id_TipoIdentificacion"]."'>".$Fila["descripcion"]."</option>";
                  }}
                $optTipoIdentificacion .= "</select>";
    return $optTipoIdentificacion;
  }

function obtenerEscolaridad(){
  require 'database.php';
$sentencia =$conn->prepare("SELECT id_Escolaridad, descripcion from escolaridad");
              $optEscolaridad="<select class='form-control' name='escolaridad'><option value=''></option>";
              if ($sentencia->execute(array())) {
              while ($Fila = $sentencia->fetch()) {
                    $optEscolaridad .="<option value='".$Fila["id_Escolaridad"]."'>".$Fila["descripcion"]."</option>";
              }}
              $optEscolaridad .= "</select>";
              return $optEscolaridad;
  }

function obtenerSeguroSocial(){
  require 'database.php';
$sentencia =$conn->prepare("SELECT id_SeguroSocial, descripcion from segurosocial");
                  $optSeguroSocial="<select class='form-control' name='seguroSocial'><option value=''></option>";
                  if ($sentencia->execute(array())) {
                  while ($Fila = $sentencia->fetch()) {
                        $optSeguroSocial .="<option value='".$Fila["id_SeguroSocial"]."'>".$Fila["descripcion"]."</option>";
                  }}
                  $optSeguroSocial .= "</select>";
      return $optSeguroSocial;
}

function obtenerPaisNacimiento(){
  require 'database.php';
$sentencia =$conn->prepare("SELECT id_Pais, descripcion from pais");
                  $optPaisNacimiento="<select class='form-control' id='paisNacimiento' name='paisNacimiento'><option value=''></option>";
                  if ($sentencia->execute(array())) {
                     while ($Fila = $sentencia->fetch()) {
                            $optPaisNacimiento .="<option value='".$Fila["id_Pais"]."'>".$Fila["descripcion"]."</option>";
                     }}
                     $optPaisNacimiento .= "</select>";
    return $optPaisNacimiento;
}

function obtenerProvinciaNacimiento(){
  require 'database.php';
$sentencia =$conn->prepare("SELECT id_Provincia, descripcion from provincia");
                  $optProvinciaNacimiento="<select class='form-control' di name='provinciaNacimiento'><option value=''></option>";
                  if ($sentencia->execute(array())) {
                        while ($Fila = $sentencia->fetch()) {
                              $optProvinciaNacimiento .="<option value='".$Fila["id_Provincia"]."'>".$Fila["descripcion"]."</option>";
                        }}
                      $optProvinciaNacimiento .= "</select>";
          return $optProvinciaNacimiento;
    }

function obtenerActividades(){
      require 'database.php';
    $sentencia =$conn->prepare("SELECT id_TipoActividad, descripcion from tipoactividad");
                      $optActividad="<select class='form-control' di name='ddl_actividad'><option value=''></option>";
                      if ($sentencia->execute(array())) {
                            while ($Fila = $sentencia->fetch()) {
                                  $optActividad .="<option value='".$Fila["id_TipoActividad"]."'>".$Fila["descripcion"]."</option>";
                            }}
                          $optActividad .= "</select>";
              return $optActividad;
        }

function obtenerCantonNacimiento(){
  require 'database.php';
$sentencia =$conn->prepare("SELECT id_Canton, descripcion from canton");
                $optCantonNacimiento="<select class='form-control' name='cantonNacimiento'><option value=''></option>";
                if ($sentencia->execute(array())) {
                    while ($Fila = $sentencia->fetch()) {
                          $optCantonNacimiento .="<option value='".$Fila["id_Canton"]."'>".$Fila["descripcion"]."</option>";
                  }}
                $optCantonNacimiento .= "</select>";
  return $optCantonNacimiento;
}

function obtenerMotivoConsulta(){
  require 'database.php';
$sentencia =$conn->prepare("SELECT id_MotivoConsulta, descripcion from motivoconsulta");
            $optMotivoConsulta="<select class='form-control' name='motivoConsulta'><option value=''></option>";
            if ($sentencia->execute(array())) {
                while ($Fila = $sentencia->fetch()) {
                $optMotivoConsulta .="<option value='".$Fila["id_MotivoConsulta"]."'>".$Fila["descripcion"]."</option>";
                }}
                $optMotivoConsulta .= "</select>";
      return $optMotivoConsulta;
}

function obtenerParentezco(){
  require 'database.php';
$sentencia =$conn->prepare("SELECT id_Parentezco, descripcion from parentezco");
            $optParentezco="<select class='form-control' name='parentezco'><option value=''></option>";
            if ($sentencia->execute(array())) {
                while ($Fila = $sentencia->fetch()) {
                $optParentezco .="<option value='".$Fila["id_Parentezco"]."'>".$Fila["descripcion"]."</option>";
                }}
                $optParentezco .= "</select>";
      return $optParentezco;
}

function obtenerTipoDroga(){
  require 'database.php';
  $sentencia =$conn->prepare("SELECT id_TipoDroga, descripcion from tipodroga");
                $chkBoxTipoDroga='';
              if ($sentencia->execute(array())) {
              while ($Fila = $sentencia->fetch()) {
                $chkBoxTipoDroga .="<span class='button-checkbox'> <button type='button' class='btn'>".$Fila["descripcion"]."</button> <input type='checkbox' class='hidden' name='chkTipoDroga[]' value='".$Fila["id_TipoDroga"]."'></span>";
              }}
      return $chkBoxTipoDroga;
}
function obtenerTipoEnfermedad(){
  require 'database.php';
  $sentencia =$conn->prepare("SELECT id_TipoEnfermedad, descripcion from tipoenfermedad");
                $chkBoxTipoEnfermedad='';
              if ($sentencia->execute(array())) {
              while ($Fila = $sentencia->fetch()) {
                $chkBoxTipoEnfermedad .="<span class='button-checkbox'> <button type='button' class='btn'>".$Fila["descripcion"]."</button> <input type='checkbox' class='hidden' name='chkTipoEnfermedad[]' value='".$Fila["id_TipoEnfermedad"]."'></span>";
              }}
      return $chkBoxTipoEnfermedad;
}

function obtenerHabilidades(){
  require 'database.php';
  $sentencia =$conn->prepare("SELECT id_Habilidad, descripcion from habilidadeslaborales");
                $chkBoxHabilidad='';
              if ($sentencia->execute(array())) {
              while ($Fila = $sentencia->fetch()) {
                $chkBoxHabilidad .="<span class='button-checkbox'> <button type='button' class='btn'>".$Fila["descripcion"]."</button> <input type='checkbox' class='hidden' name='chkBoxHabilidad[]' value='".$Fila["id_Habilidad"]."'></span>";
              }}
      return $chkBoxHabilidad;
}

function listarParentezco()
{
  require 'database.php';

  $sentencia = $conn->prepare("SELECT id_Parentezco, descripcion FROM parentezco");
  $Tabla= "
        <div class='container-fluid'>
           <div class='panel panel-success'>
                <div class='panel-heading'>
                       <h3 class='panel-title'><i class='zmdi zmdi-format-list-bulleted'></i> Parentezco</h3>
                </div>
                <div class='panel-body'>
                <div class='table-responsive'>
                <table class='table table-hover table-bordered text-center'>
                <thead>";
  $Tabla .="
              <tr>
              <th class='text-center'>#</th>
              <th class='text-center'>Descripción</th>
              </tr>
            </thead>
            <tbody>";
 if ($sentencia->execute(array())) {
  while ($Fila = $sentencia->fetch()) {
    $Tabla .= "<tr>";
    $Tabla .= "<td>".$Fila["id_Parentezco"]. "</td>";
    $Tabla .= "<td>".$Fila["descripcion"]. "</td>";
    $Tabla .= "<td><a class='btn btn-success btn-raised btn-xs' href='parentezco-edit.php?id=".$Fila['id_Parentezco']."' > <i class='zmdi zmdi-refresh'></i></a></td>";
    $Tabla .= "</tr> ";
  }}
  $Tabla .= "
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>";
return $Tabla;
}

function listarInventario()
{
  require 'database.php';

  $sentencia = $conn->prepare("SELECT AR.id_Articulo as id_Articulo,TP.descripcion as descripcion , AR.cantidad_disponible as disponible FROM articulo AR
  inner join tipo_articulo TP on TP.id_TipoArticulo=AR.id_TipoArticulo");
  $Tabla= "
        <div class='container-fluid'>
           <div class='panel panel-success'>
                <div class='panel-heading'>
                       <h3 class='panel-title'><i class='zmdi zmdi-format-list-bulleted'></i> Inventario</h3>
                </div>
                <div class='panel-body'>
                <div class='table-responsive'>
                <table class='table table-hover table-bordered text-center'>
                <thead>";
  $Tabla .="
              <tr>
              <th class='text-center'>Descripción</th>
              <th class='text-center'>Cantidad Disponible</th>
              </tr>
            </thead>
            <tbody>";
 if ($sentencia->execute(array())) {
  while ($Fila = $sentencia->fetch()) {
    $Tabla .= "<tr>";
    $Tabla .= "<td>".$Fila["descripcion"]. "</td>";
    $Tabla .= "<td>".$Fila["disponible"]. "</td>";
    $Tabla .= "</tr> ";
  }}
  $Tabla .= "
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>";
return $Tabla;
}


function listarTipoActividad()
{
  require 'database.php';
    $estado=1;
  $sentencia = $conn->prepare("SELECT id_TipoActividad, descripcion from tipoactividad where estado=$estado");
  $Tabla= "
        <div class='container-fluid'>
           <div class='panel panel-success'>
                <div class='panel-heading'>
                       <h3 class='panel-title'><i class='zmdi zmdi-format-list-bulleted'></i> Tipo Actividad</h3>
                </div>
                <div class='panel-body'>
                <div class='table-responsive'>
                <table class='table table-hover table-bordered text-center'>
                <thead>";
  $Tabla .="
              <tr>
              <th class='text-center'>#</th>
              <th class='text-center'>Descripción</th>
              </tr>
            </thead>
            <tbody>";
 if ($sentencia->execute(array())) {
  while ($Fila = $sentencia->fetch()) {
    $Tabla .= "<tr>";
    $Tabla .= "<td>".$Fila["id_TipoActividad"]. "</td>";
    $Tabla .= "<td>".$Fila["descripcion"]. "</td>";
    $Tabla .= "<td><a class='btn btn-success btn-raised btn-xs' href='actividades-edit.php?id=".$Fila['id_TipoActividad']."' > <i class='zmdi zmdi-refresh'></i></a></td>";
    $Tabla .= "</tr> ";
  }}
  $Tabla .= "
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>";
return $Tabla;
}

function listarTipoDroga()
{
  require 'database.php';

  $sentencia = $conn->prepare("SELECT id_TipoDroga, descripcion FROM tipodroga");
  $Tabla= "
        <div class='container-fluid'>
           <div class='panel panel-success'>
                <div class='panel-heading'>
                       <h3 class='panel-title'><i class='zmdi zmdi-format-list-bulleted'></i> Droga</h3>
                </div>
                <div class='panel-body'>
                <div class='table-responsive'>
                <table class='table table-hover table-bordered text-center'>
                <thead>";
  $Tabla .="
              <tr>
              <th class='text-center'>#</th>
              <th class='text-center'>Descripción</th>
              </tr>
            </thead>
            <tbody>";
 if ($sentencia->execute(array())) {
    while ($Fila = $sentencia->fetch()) {
      
           
    $Tabla .= "<tr>";
    $Tabla .= "<td>".$Fila["id_TipoDroga"]. "</td>";
    $Tabla .= "<td>".$Fila["descripcion"]. "</td>";
    $Tabla .= "<td><a class='btn btn-success btn-raised btn-xs' href='tipoDroga-edit.php?id=".$Fila['id_TipoDroga']."' > <i class='zmdi zmdi-refresh'></i></a></td>";
    $Tabla .= "</tr> ";
   
  }}
  else
  {
      $foo_arr = $sentencia->errorInfo();
     print_r($foo_arr);
      
  }
  $Tabla .= "
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
";


return $Tabla;
}

function listarTipoArticulo()
{
  require 'database.php';
  $sentencia = $conn->prepare("SELECT id_TipoArticulo, descripcion FROM tipo_articulo");
  $Tabla= "
        <div class='container-fluid'>
           <div class='panel panel-success'>
                <div class='panel-heading'>
                       <h3 class='panel-title'><i class='zmdi zmdi-format-list-bulleted'></i> Articulo</h3>
                </div>
                <div class='panel-body'>
                <div class='table-responsive'>
                <table class='table table-hover table-bordered text-center'>
                <thead>";
  $Tabla .="
              <tr>
              <th class='text-center'>#</th>
              <th class='text-center'>Descripción</th>
              </tr>
            </thead>
            <tbody>";
 if ($sentencia->execute(array())) {
  while ($Fila = $sentencia->fetch()) {
    $Tabla .= "<tr>";
    $Tabla .= "<td>".$Fila["id_TipoArticulo"]. "</td>";
    $Tabla .= "<td>".$Fila["descripcion"]. "</td>";
    $Tabla .= "<td><a class='btn btn-success btn-raised btn-xs' title='Editar Artículo' href='tipoArticulo-edit.php?id=".$Fila['id_TipoArticulo']."' > <i class='zmdi zmdi-refresh'></i></a></td>";
    $Tabla .= "</tr> ";
  }}
  $Tabla .= "
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>";

return $Tabla;
}
function listarTipoEnfermedad()
{
  require 'database.php';

  $sentencia = $conn->prepare("SELECT id_TipoEnfermedad, descripcion FROM tipoenfermedad");
  $Tabla= "
        <div class='container-fluid'>
           <div class='panel panel-success'>
                <div class='panel-heading'>
                    <h3 class='panel-title'><i class='zmdi zmdi-format-list-bulleted'></i> Tipo Enfermedad</h3>
                </div>
                <div class='panel-body'>
                <div class='table-responsive'>
                <table class='table table-hover table-bordered text-center'>
                <thead>";
  $Tabla .="
              <tr>
              <th class='text-center'>#</th>
              <th class='text-center'>Descripción</th>
              </tr>
            </thead>
            <tbody>";
 if ($sentencia->execute(array())) {
  while ($Fila = $sentencia->fetch()) {
    $Tabla .= "<tr>";
    $Tabla .= "<td>".$Fila["id_TipoEnfermedad"]. "</td>";
    $Tabla .= "<td>".$Fila["descripcion"]. "</td>";
    $Tabla .= "<td><a class='btn btn-success btn-raised btn-xs' href='tipoEnfermedad-edit.php?id=".$Fila['id_TipoEnfermedad']."' > <i class='zmdi zmdi-refresh'></i></a></td>";
    $Tabla .= "</tr> ";
  }}
  $Tabla .= "
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>";

return $Tabla;
}


function listarEscolaridad()
{
  require 'database.php';

  $sentencia = $conn->prepare("SELECT id_Escolaridad, descripcion FROM escolaridad");
  $Tabla= "
        <div class='container-fluid'>
           <div class='panel panel-success'>
                <div class='panel-heading'>
                       <h3 class='panel-title'><i class='zmdi zmdi-format-list-bulleted'></i> Escolaridad</h3>
                </div>
                <div class='panel-body'>
                <div class='table-responsive'>
                <table class='table table-hover table-bordered text-center'>
                <thead>";
  $Tabla .="
              <tr>
              <th class='text-center'>#</th>
              <th class='text-center'>Descripción</th>
              </tr>
            </thead>
            <tbody>";
 if ($sentencia->execute(array())) {
  while ($Fila = $sentencia->fetch()) {
    $Tabla .= "<tr>";
    $Tabla .= "<td>".$Fila["id_Escolaridad"]. "</td>";
    $Tabla .= "<td>".$Fila["descripcion"]. "</td>";
    $Tabla .= "<td><a class='btn btn-success btn-raised btn-xs' href='escolaridad-edit.php?id=".$Fila['id_Escolaridad']."' > <i class='zmdi zmdi-refresh'></i></a></td>";
    $Tabla .= "</tr> ";
  }}
  $Tabla .= "
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>";

return $Tabla;
}

function listarPais()
{
  require 'database.php';

  $sentencia = $conn->prepare("SELECT id_Pais, descripcion FROM pais");
  $Tabla= "
        <div class='container-fluid'>
           <div class='panel panel-success'>
                <div class='panel-heading'>
                  <h3 class='panel-title'><i class='zmdi zmdi-format-list-bulleted'></i> País</h3>
                </div>
                <div class='panel-body'>
                <div class='table-responsive'>
                <table class='table table-hover table-bordered text-center'>
                <thead>";
  $Tabla .="
              <tr>
              <th class='text-center'>#</th>
              <th class='text-center'>Descripción</th>
              </tr>
            </thead>
            <tbody>";
 if ($sentencia->execute(array())) {
  while ($Fila = $sentencia->fetch()) {
    $Tabla .= "<tr>";
    $Tabla .= "<td>".$Fila["id_Pais"]. "</td>";
    $Tabla .= "<td>".$Fila["descripcion"]. "</td>";
    $Tabla .= "<td><a class='btn btn-success btn-raised btn-xs' href='pais-edit.php?id=".$Fila['id_Pais']."' > <i class='zmdi zmdi-refresh'></i></a></td>";
    $Tabla .= "</tr> ";
  }}
  $Tabla .= "
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>";

return $Tabla;
}
function listarCanton()
{
  require 'database.php';
  $sentencia = $conn->prepare("SELECT CA.id_Canton, CA.descripcion as canton, PA.descripcion as pais, PR.descripcion as provincia FROM canton CA
inner join pais PA on PA.id_Pais=CA.id_Pais
inner join provincia PR on PR.id_Provincia=CA.id_Provincia");



  $Tabla= "
        <div class='container-fluid'>
           <div class='panel panel-success'>
                <div class='panel-heading'>
                    <h3 class='panel-title'><i class='zmdi zmdi-format-list-bulleted'></i> Cantón</h3>
                </div>
                <div class='panel-body'>
                <div class='table-responsive'>
                <table class='table table-hover table-bordered text-center'>
                <thead>";
  $Tabla .="
              <tr>
              <th class='text-center'>#</th>
              <th class='text-center'>Descripción</th>
              <th class='text-center'>Provincia</th>
              <th class='text-center'>País</th>
              </tr>
            </thead>
            <tbody>";
 if ($sentencia->execute(array())) {
  while ($Fila = $sentencia->fetch()) {
    $Tabla .= "<tr>";
    $Tabla .= "<td>".$Fila["id_Canton"]. "</td>";
    $Tabla .= "<td>".$Fila["canton"]. "</td>";
    $Tabla .= "<td>".$Fila["provincia"]. "</td>";
    $Tabla .= "<td>".$Fila["pais"]. "</td>";
    $Tabla .= "<td><a class='btn btn-success btn-raised btn-xs' href='canton-edit.php?id=".$Fila['id_Canton']."' > <i class='zmdi zmdi-refresh'></i></a></td>";
    $Tabla .= "</tr> ";
  }}
  $Tabla .= "
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>";
return $Tabla;
}


function listarProvincia()
{
  require 'database.php';
  $sentencia = $conn->prepare("SELECT PR.id_Provincia, PR.descripcion as provincia, PA.descripcion as pais FROM provincia PR
inner join pais PA on PA.id_Pais=PR.id_Pais");



  $Tabla= "
        <div class='container-fluid'>
           <div class='panel panel-success'>
                <div class='panel-heading'>
                    <h3 class='panel-title'><i class='zmdi zmdi-format-list-bulleted'></i> Provincia</h3>
                </div>
                <div class='panel-body'>
                <div class='table-responsive'>
                <table class='table table-hover table-bordered text-center'>
                <thead>";
  $Tabla .="
              <tr>
              <th class='text-center'>#</th>
              <th class='text-center'>Descripción</th>
              <th class='text-center'>País</th>
              </tr>
            </thead>
            <tbody>";
 if ($sentencia->execute(array())) {
  while ($Fila = $sentencia->fetch()) {
    $Tabla .= "<tr>";
    $Tabla .= "<td>".$Fila["id_Provincia"]. "</td>";
    $Tabla .= "<td>".$Fila["provincia"]. "</td>";
    $Tabla .= "<td>".$Fila["pais"]. "</td>";
    $Tabla .= "<td><a class='btn btn-success btn-raised btn-xs' href='provincia-edit.php?id=".$Fila['id_Provincia']."' > <i class='zmdi zmdi-refresh'></i></a></td>";
    $Tabla .= "</tr> ";
  }}
  $Tabla .= "
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>";
return $Tabla;
}

function listarHabilidadesLaborales()
{
  require 'database.php';

  $sentencia = $conn->prepare("SELECT id_Habilidad, descripcion FROM habilidadeslaborales");
  $Tabla= "
        <div class='container-fluid'>
           <div class='panel panel-success'>
                <div class='panel-heading'>
                       <h3 class='panel-title'><i class='zmdi zmdi-format-list-bulleted'></i> Habilidades</h3>
                </div>
                <div class='panel-body'>
                <div class='table-responsive'>
                <table class='table table-hover table-bordered text-center'>
                <thead>";
  $Tabla .="
              <tr>
              <th class='text-center'>#</th>
              <th class='text-center'>Descripción</th>
              </tr>
            </thead>
            <tbody>";
 if ($sentencia->execute(array())) {
  while ($Fila = $sentencia->fetch()) {
    $Tabla .= "<tr>";
    $Tabla .= "<td>".$Fila["id_Habilidad"]. "</td>";
    $Tabla .= "<td>".$Fila["descripcion"]. "</td>";
    $Tabla .= "<td><a class='btn btn-success btn-raised btn-xs' href='habilidadeslaborales-edit.php?id=".$Fila['id_Habilidad']."'> <i class='zmdi zmdi-refresh'></i></a></td>";
    $Tabla .= "</tr> ";
  }}
  $Tabla .= "
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>";

return $Tabla;
}

function listarUsuarios()
{
  require 'database.php';

  $sentencia = $conn->prepare("SELECT id_Usuario,nombre,primerApellido,numTelefono,correoElectronico FROM usuario where estado=1");
  $Tabla= "
        <div class='container-fluid'>
           <div class='panel panel-success'>
                <div class='panel-heading'>
                       <h3 class='panel-title'><i class='zmdi zmdi-format-list-bulleted'></i> Usuarios</h3>
                </div>
                <div class='panel-body'>
                <div class='table-responsive'>
                <table class='table table-hover table-bordered text-center'>
                <thead>";
  $Tabla .="
              <tr>
                <th class='text-center'>#</th>
                <th class='text-center'>Nombre</th>
                <th class='text-center'>Apellido</th>
                <th class='text-center'>Teléfono</th>
                <th class='text-center'>Correo</th>
                <th class='text-center'>Editar</th>
              </tr>
            </thead>
            <tbody>";
 if ($sentencia->execute(array())) {
  while ($Fila = $sentencia->fetch()) {
    $Tabla .= "<tr>";
    $Tabla .= "<td>".$Fila["id_Usuario"]. "</td>";
    $Tabla .= "<td>".$Fila["nombre"]. "</td>";
    $Tabla .= "<td>".$Fila["primerApellido"]. "</td>";
    $Tabla .= "<td>".$Fila["numTelefono"]. "</td>";
    $Tabla .= "<td>".$Fila["correoElectronico"]. "</td>";
    $Tabla .= "<td><a class='btn btn-success btn-raised btn-xs' href='usuario-edit.php?id=".$Fila['id_Usuario']."' > <i class='zmdi zmdi-refresh'></i></a></td>";
    $Tabla .= "</tr> ";
  }}
  $Tabla .= "
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>";

return $Tabla;
}

function listarMotivoSancion()
{
  require 'database.php';

  $sentencia = $conn->prepare("SELECT id_MotivoSancion, descripcion FROM motivosancion");
  $Tabla= "
        <div class='container-fluid'>
           <div class='panel panel-success'>
                <div class='panel-heading'>
                       <h3 class='panel-title'><i class='zmdi zmdi-format-list-bulleted'></i> Motivos</h3>
                </div>
                <div class='panel-body'>
                <div class='table-responsive'>
                <table class='table table-hover table-bordered text-center'>
                <thead>";
  $Tabla .="
              <tr>
              <th class='text-center'>#</th>
              <th class='text-center'>Descripción</th>
              </tr>
            </thead>
            <tbody>";
 if ($sentencia->execute(array())) {
  while ($Fila = $sentencia->fetch()) {
    $Tabla .= "<tr>";
    $Tabla .= "<td>".$Fila["id_MotivoSancion"]. "</td>";
    $Tabla .= "<td>".$Fila["descripcion"]. "</td>";
    $Tabla .= "<td><a class='btn btn-success btn-raised btn-xs' href='motivosancion-edit.php?id=".$Fila['id_MotivoSancion']."' > <i class='zmdi zmdi-refresh'></i></a></td>";
    $Tabla .= "</tr> ";
  }}
  $Tabla .= "
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>";

return $Tabla;
}


function listarCasillero()
{
  require 'database.php';

  $sentencia = $conn->prepare("SELECT id_Casillero, num_casillero, estado FROM casillero");
  $Tabla= "
        <div class='container-fluid'>
           <div class='panel panel-success'>
                <div class='panel-heading'>
                  <h3 class='panel-title'><i class='zmdi zmdi-format-list-bulleted'></i> Casillero</h3>
                </div>
                <div class='panel-body'>
                <div class='table-responsive'>
                  <table class='table table-hover table-bordered text-center'>
                  <thead>";
  $Tabla .="
                  <tr>
                  <th class='text-center'>#</th>
                  <th class='text-center'>Número Casillero</th>
                  <th class='text-center'>Estado</th>
                </tr>
            </thead>
            <tbody>";
 if ($sentencia->execute(array())) {
  while ($Fila = $sentencia->fetch()) {
    $Tabla .= "<tr>";
    $Tabla .= "<td>".$Fila["id_Casillero"]. "</td>";
    $Tabla .= "<td>".$Fila["num_casillero"]. "</td>";
    $Tabla .= "<td>".$Fila["estado"]. "</td>";
    $Tabla .= "<td><a class='btn btn-success btn-raised btn-xs' href='casillero-edit.php?id=".$Fila['id_Casillero']."' > <i class='zmdi zmdi-refresh'></i></a></td>";
    $Tabla .= "</tr> ";
  }}
  $Tabla .= "
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>";
return $Tabla;

}
function listarUsuarioAso()
{
  require 'database.php';
  $sentencia = $conn->prepare("SELECT US.id_UsuarioAso, US.numeroIdentificacion, CONCAT(US.Nombre, ' ', US.primerApellido,' ',US.segundoApellido) As nombre, PA.nacionalidad as nacionalidad FROM usuarioaso US inner join pais PA on PA.id_Pais=US.id_Pais where estado=1");

  $Tabla= "
        <div class='container-fluid'>
           <div class='panel panel-success'>
                <div class='panel-heading'>
                    <h3 class='panel-title'><i class='zmdi zmdi-format-list-bulleted'></i> Usuarios</h3>
                </div>
                <div class='panel-body'>
                <div class='table-responsive'>
                <table class='table table-hover table-bordered text-center'>
                <thead>";
  $Tabla .="
              <tr>
              <th class='text-center'>Número Identificación</th>
              <th class='text-center'>Nombre</th>
              <th class='text-center'>Nacionalidad</th>
              <th class='text-center'>Ver</th>
              </tr>
            </thead>
            <tbody>";
 if ($sentencia->execute(array())) {
  while ($Fila = $sentencia->fetch()) {
    $Tabla .= "<tr>";
    $Tabla .= "<td>".$Fila["numeroIdentificacion"]. "</td>";
    $Tabla .= "<td>".$Fila["nombre"]. "</td>";
    $Tabla .= "<td>".$Fila["nacionalidad"]. "</td>";
    $Tabla .= "<td><a title='Ver datos Usuario' class='btn btn-success btn-raised btn-xs' href='usuarioAso-info.php?id=".$Fila['id_UsuarioAso']."' > <i class='zmdi zmdi-account-calendar'></i></a></td>";
    $Tabla .= "</tr> ";
  }}
  $Tabla .= "
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>";
return $Tabla;
}

function listarDocumentos()
{
  require 'database.php';
  $sentencia = $conn->prepare("SELECT  titulo,descripcion, CONCAT(ubicacion, nombre_archivo) As ubicacion, nombre_archivo  FROM documento");

  $Tabla= "
        <div class='container-fluid'>
           <div class='panel panel-success'>
                <div class='panel-heading'>
                    <h3 class='panel-title'><i class='zmdi zmdi-format-list-bulleted'></i> Manuales</h3>
                </div>
                <div class='panel-body'>
                <div class='table-responsive'>
                <table class='table table-hover table-bordered text-center'>
                <thead>";
  $Tabla .="
              <tr>
              <th class='text-center'>Titulo</th>
              <th class='text-center'>Descripción</th>
              <th class='text-center'>Nombre</th>
              </tr>
            </thead>
            <tbody>";
 if ($sentencia->execute(array())) {
  while ($Fila = $sentencia->fetch()) {
    $Tabla .= "<tr>";
    $Tabla .= "<td>".$Fila["titulo"]. "</td>";
    $Tabla .= "<td>".$Fila["descripcion"]. "</td>";
    $Tabla .= "<td><a target='_blank' href='".$Fila['ubicacion']."'>'".$Fila['nombre_archivo']."'</a></td>";
    $Tabla .= "</tr> ";
  }}
  $Tabla .= "
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>";
return $Tabla;
}
?>
