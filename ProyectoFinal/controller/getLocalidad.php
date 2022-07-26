<?php
require_once "../dataBase/ConexionDB.php";
$Db = new ConexionDB();
$Db->conectar();
$idprovincia = $_POST["idprovincia"];

$resultadoM = $Db->ejecutar(
  "SELECT idlocalidad, nombre FROM localidades WHERE idprovincia = '$idprovincia' ORDER BY nombre"
);

//$html= "<option value='0'>Seleccionar Localidad</option>";

while ($rowM = $resultadoM->fetch_assoc()) {
  $html .=
    "<option value='" .
    $rowM["idlocalidad"] .
    "'>" .
    $rowM["nombre"] .
    "</option>";
}

echo $html;
?>
