<?php
require_once "libs/dao.php";
/*
idmodas bigint(15) AI PK
dscmoda varchar(60)
blogmoda mediumtext
bannermod varchar(512)
thumbmoda varchar(512)
modelmoda varchar(512)
prcmoda decimal(15,2)
ivamoda decimal(5,2)
estmoda char(3)
idcategoria bigint(15)


SELECT `modas`.`idmodas`,
    `modas`.`dscmoda`,
    `modas`.`blogmoda`,
    `modas`.`bannermod`,
    `modas`.`thumbmoda`,
    `modas`.`modelmoda`,
    `modas`.`prcmoda`,
    `modas`.`ivamoda`,
    `modas`.`estmoda`,
    `modas`.`idcategoria`
FROM `ednamodasdb`.`modas`;

*/

/**
*Obtiene los registros de la tabla Modas
*@return Array
*/

    function obtenerModas()
    {
      $sqlstr="SELECT `modas`.`idmodas`,
          `modas`.`dscmoda`,
          `modas`.`prcmoda`,
          `modas`.`ivamoda`,
          `modas`.`estmoda`
      FROM `ednamodasdb`.`modas`";
      $modas= array();
      $modas=obtenerRegistros($sqlstr);
      return $modas;
    }


?>
