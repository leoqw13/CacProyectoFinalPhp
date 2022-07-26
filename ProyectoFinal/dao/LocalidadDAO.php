<?php

require_once "../dataBase/ConexionDB.php";
require_once "../model/Localidad.php";
require_once "../dao/ProvinciaDAO.php";

class LocalidadDAO
{
  public function listarLocalidades()
  {
    $con = new ConexionDB();
    $con->conectar();
    $result = $con->ejecutar("SELECT * FROM localidades ORDER BY nombre");

    $provDAO = new ProvinciaDAO();

    while ($localidad = $result->fetch_assoc()) {
      $provincia = $provDAO->getProvinciaXID($localidad["idProvincia"]);

      $locObj = new Localidad(
        $localidad["idlocalidad"],
        $localidad["nombre"],
        $provincia
      );

      $listLocalidades[] = $locObj;
    }

    return $listLocalidades;
  }

  public function getLocalidadXID($id)
  {
    $con = new ConexionDB();
    $con->conectar();
    $result = $con->ejecutar(
      "SELECT * FROM localidades WHERE idlocalidad = $id"
    );

    $provDAO = new ProvinciaDAO();

    while ($localidad = $result->fetch_assoc()) {
      $provincia = $provDAO->getProvinciaXID($localidad["idProvincia"]);

      $locObj = new Localidad(
        $localidad["idlocalidad"],
        $localidad["nombre"],
        $provincia
      );
    }

    return $locObj;
  }
}
?>
