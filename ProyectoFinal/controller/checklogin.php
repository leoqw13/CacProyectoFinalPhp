<?php
session_start();

require_once "../dataBase/ConexionDB.php";
$Db = new ConexionDB();
$Db->conectar();

$usuario = $_POST["usuario"];
$contrasenia = $_POST["contrasenia"];

//$contrasenia = hash('sha512', $contrasenia); //Encriptado

$validar_login = $Db->ejecutar(
  "SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$contrasenia'"
);

if (mysqli_num_rows($validar_login) > 0) {
  $_SESSION["usuario"] = $usuario;
  header("location: ../view/inicio.php");
  exit();
} else {
  echo '
    <script>
    alert("Usuario no existe, verifique los datos");
    window.location = "../index.php";
    </script>';
  exit();
}

?>
