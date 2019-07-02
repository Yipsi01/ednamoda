<?php
/* Home Controller
 * 2019-06-27
 * Created By EFGGM
 */

/**


*Correo el controlador de la ficha
*@return void
*
**/
require_once 'models/application.model.php';
  function run(){
    $dataArray=obtenerDatosDeAplicacion();
    //$dataArray["Cuenta"]="0809199800030";
    //$dataArray["Nombre"]="Galileo García";
    //$dataArray["Correo"]="galileoga63@gmail.com";
    renderizar("ficha", $dataArray);
  }
  run();
?>
