<?php
function menu()
{
  $html = '  <nav class="nav navbar navbar-expand-lg unique-color">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="inicio.php">Inicio</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Usuarios
          </a>
          <ul class="dropdown-menu unique-color" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../controller/cerrar_session.php">Crear Usuario</a></li>
            <li><a class="dropdown-item" href="listadoUsuarios.php">Listado de Usuarios</a></li>
           </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Pedidos
          </a>
          <ul class="dropdown-menu unique-color" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="pedido.php">Crear Pedidos</a></li>
            <li><a class="dropdown-item" href="listadoPedidos.php">Listado de Pedidos</a></li>
           </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Servicios
          </a>
          <ul class="dropdown-menu unique-color" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Venta</a></li>
            <li><a class="dropdown-item" href="#">Colocacion</a></li> 
            <li><a class="dropdown-item" href="#">Reparacion</a></li>        </ul>
        </li>

        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Acerca de
          </a>
          <ul class="dropdown-menu unique-color" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="inicio.php#nosotros">Nosotros</a></li>
            <li><a class="dropdown-item" href="inicio.php#historia">Historia</a></li> 
            <li><a class="dropdown-item" href="inicio.php#mision">Nuestra Mision</a></li>        </ul>
        </li>

        <li class="nav-item">
          <a  class="nav-link" href="#">Contacto</a>
        </li>
             
        <li class="nav-item">
          <a  class="nav-link" href="../controller/cerrar_session.php">Cerrar Sesion</a>
        </li>    
      </ul>
    </div>
  </div>

  <ul class="navbar-nav ml-auto nav-flex-icons">
  <a class="nav-link">
  <img src="../assets/images/logo.jpg" alt="Logo CABA"  class="img-fluid rounded-circle" style="width: 75px;">
</a>
          </ul>
</nav>';

  return $html;
}
