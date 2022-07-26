 <?php
 require_once "../dataBase/ConexionDB.php";
 require_once "../model/Pedido.php";
 require_once "../dao/LocalidadDAO.php";

 class PedidoDAO
 {
   public function guardarPedido(Pedido $pedido)
   {
     $conexionDB = new ConexionDB();
     $conexionDB->conectar();

     $sql = "INSERT INTO pedidos 
        (nombre, apellido, usuario, mail, lugarentrega, localidad, codpostal, formadepago, tarjtitular, tarjnumero, tarjvto, tarjclave) 
        VALUES (
        '{$pedido->getNombre()}', 
        '{$pedido->getApellido()}', 
        '{$pedido->getUsuario()}', 
        '{$pedido->getMail()}', 
        '{$pedido->getLugarentrega()}', 
         {$pedido->getLocalidad()->getIdLocalidad()}, 
         '{$pedido->getCodpostal()}', 
         '{$pedido->getFormadepago()}', 
         '{$pedido->getTarjtitular()}', 
         {$pedido->getTarjnumero()}, 
         '{$pedido->getTarjvto()}', 
         {$pedido->getTarjclave()})";

     $conexionDB->ejecutar($sql);

     return $conexionDB->cantFilas() > 0;
   }

   public function editarPedido(Pedido $pedido)
   {
     $conexionDB = new ConexionDB();
     $conexionDB->conectar();

     $sql = "UPDATE pedidos SET 
      
        nombre = '{$pedido->getNombre()}', 
        apellido='{$pedido->getApellido()}', 
        usuario ='{$pedido->getUsuario()}', 
        mail='{$pedido->getMail()}', 
        lugarentrega= '{$pedido->getLugarentrega()}', 
        localidad= {$pedido->getLocalidad()->getIdLocalidad()}, 
        codpostal= '{$pedido->getCodpostal()}', 
        formadepago=  '{$pedido->getFormadepago()}', 
        tarjtitular='{$pedido->getTarjtitular()}', 
        tarjnumero= {$pedido->getTarjnumero()}, 
        tarjvto='{$pedido->getTarjvto()}', 
        tarjclave=  {$pedido->getTarjclave()}
        WHERE idpedido= '{$pedido->getIdPedido()}'";

     $conexionDB->ejecutar($sql);

     return $conexionDB->cantFilas() > 0;
   }

   function borrarPedido($id)
   {
     $conexionDB = new ConexionDB();
     $conexionDB->conectar();
     $conexionDB->ejecutar("DELETE FROM pedidos WHERE idpedido='$id'");

     header("location:listadoPedidos.php");
     return $conexionDB->cantFilas() > 0;
   }

   public function listarPedidos()
   {
     $con = new ConexionDB();
     $con->conectar();
     $result = $con->ejecutar("SELECT * FROM pedidos");

     $locDAO = new LocalidadDAO();
     while ($pedido = $result->fetch_assoc()) {
       $localidad = $locDAO->getLocalidadXID($pedido["localidad"]);

       $pedObj = new Pedido(
         $pedido["idpedido"],
         $pedido["nombre"],
         $pedido["apellido"],
         $pedido["usuario"],
         $pedido["mail"],
         $pedido["lugarentrega"],
         $localidad,
         $pedido["codpostal"],
         $pedido["formadepago"],
         $pedido["tarjtitular"],
         $pedido["tarjnumero"],
         $pedido["tarjvto"],
         $pedido["tarjclave"]
       );

       $listPedidos[] = $pedObj;
     }

     return $listPedidos;
   }

   public function getPedidoXID($id)
   {
     $con = new ConexionDB();
     $con->conectar();
     $result = $con->ejecutar("SELECT * FROM pedidos WHERE idpedido = $id");
     $locDAO = new LocalidadDAO();
     while ($pedido = $result->fetch_assoc()) {
       $localidad = $locDAO->getLocalidadXID($pedido["localidad"]);

       $pedObj = new Pedido(
         $pedido["idpedido"],
         $pedido["nombre"],
         $pedido["apellido"],
         $pedido["usuario"],
         $pedido["mail"],
         $pedido["lugarentrega"],
         $localidad,
         $pedido["codpostal"],
         $pedido["formadepago"],
         $pedido["tarjtitular"],
         $pedido["tarjnumero"],
         $pedido["tarjvto"],
         $pedido["tarjclave"]
       );
     }

     return $pedObj;
   }
 }

?>
