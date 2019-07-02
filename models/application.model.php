<?php
/**
* Modelo de datos de los parametros de la aplicación
*/
    require_once "libs/dao.php";
    /*
    function obtenerTodosMensajes(){
        $sqlstr = "Select * from mensajes;";
        return obtenerRegistros($sqlstr);
    }
  */
  /**
  * Obtiene los datos de la aplicación
  *@return Array
  */
  function obtenerDatosDeAplicacion()
  {
      $sqlstr="SELECT * FROM application;";
      return obtenerUnRegistro($sqlstr);
  }

 ?>
