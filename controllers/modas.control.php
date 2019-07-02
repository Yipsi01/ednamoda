<?php
/* Modas Controller
 * 2014-10-14
 * Created By OJBA
 * Last Modification 2014-10-14 20:04
 */
  require 'models/modas.model.php';
/**
*
*Controla la lista de Patron trabajar con
*
*/
  function run()
  {
    $viewData=array();
    $viewData["modas"]=obtenerModas();
    renderizar("modas", $viewData);
  }
  run();
?>
