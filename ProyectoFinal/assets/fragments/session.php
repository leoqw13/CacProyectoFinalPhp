<?php

if (!isset($_SESSION)) {
  session_start();
}

if (!isset($_SESSION["usuario"])) {
  echo '
      <script>
      alert("Por favor debes iniciar sesion");
      window.location = "../index.php";
      </script>';
  session_destroy();
  die();
}

require_once "../assets/fragments/menu.php";
require_once "../assets/fragments/footer.php";

?>
