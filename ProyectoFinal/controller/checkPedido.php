<?php
$nombre = $_POST["firstName"];
$apellido = $_POST["lastName"];
$usuario = $_POST["username"];
$mail = $_POST["email"];
$lugarentrega = $_POST["address"];
$idLocalidad = $_POST["localidad"];
$idProvincia = $_POST["provincia"];
$codpostal = $_POST["zip"];
$formadepago = $_POST["paymentMethod"];
$tarjtitular = $_POST["cc-name"];
$tarjnumero = $_POST["cc-number"];
$tarjvto = $_POST["cc-expiration"];
$tarjclave = $_POST["cc-cvv"];

//Este paso es necesario porque trabajamos con POO
//Creamos un objeto Pedido para luego guardarlo en la DB

require_once "../dao/PedidoDAO.php";
require_once "../model/Pedido.php";
require_once "../model/Localidad.php";

require_once "../model/Provincia.php";

$provincia = new Provincia($idProvincia, null);
$localidad = new Localidad($idLocalidad, null, $provincia);

$pedido = new Pedido(
  null,
  $nombre,
  $apellido,
  $usuario,
  $mail,
  $lugarentrega,
  $localidad,
  $codpostal,
  $formadepago,
  $tarjtitular,
  $tarjnumero,
  $tarjvto,
  $tarjclave
);

$pedidoDAO = new PedidoDAO();
$guardoOk = $pedidoDAO->guardarPedido($pedido);

if ($guardoOk) {
  header("Location: ../view/mensajeOK.php");
  exit();
} else {
  header("Location: ../view/mensajeError.php");
  exit();
}

?>
