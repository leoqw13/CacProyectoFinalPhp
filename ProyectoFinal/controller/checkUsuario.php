<?php
$usuario = isset($_POST["usuario"]) ? $_POST["usuario"] : "";
$password = isset($_POST["contrasenia"]) ? $_POST["contrasenia"] : "";
$nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
//$password = hash('sha512',  $password);//Encriptacion de contrasena
require_once "../dao/UsuarioDAO.php";
$conexion = mysqli_connect("localhost", "root", "", "cacproyecto");

$usuarioDAO = new UsuarioDAO();
$verificar_correo = mysqli_query(
  $conexion,
  "SELECT * FROM usuarios WHERE usuario='$usuario'"
);

if (mysqli_num_rows($verificar_correo) > 0) {
  echo '
        <script>
        alert("Este correo ya esta registrado, intenta otro diferente");
        window.location = "../index.php";
        </script>';
  exit();
}
$guardoOk = $usuarioDAO->guardarUsuario($usuario, $password, $nombre);

if ($guardoOk) {
  echo '
            <script>
            alert("Usuario registrado exitosamente");
        
            </script>';
  session_start();
  $_SESSION["usuario"] = $usuario;
  header("Location: ../view/inicio.php");
  exit();
}
?>