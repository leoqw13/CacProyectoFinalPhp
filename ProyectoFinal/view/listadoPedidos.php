 <?php
 include "../assets/fragments/session.php";

 if (isset($_GET["del"])) {
   $id = $_GET["del"];
   require_once "../dao/PedidoDAO.php";
   $pedidoDAO = new PedidoDAO();
   $pedidoDAO->borrarPedido($id);
 }
 ?>

<!doctype html>
<html lang="en">

<head>
    <title>PHP - Listado de Pedidos</title>
  
    <?php include "../assets/fragments/head.php"; ?>
    <!-- Style CSS -->
    <link href="../assets/css/inicio.css" rel="stylesheet" type="text/css" />
</head>

<body class="bg-grad">
    <header>
        <?= menu() ?>
    </header>

    <div class="d-flex justify-content-center align-items-center my-7">
        <div class="container text-center bg-light rounded-3 shadow">
            <div class="py-4 text-center">
                <img class="d-block mx-auto mb-4" src="../assets/images/logo.jpg" alt="Logo caba" width="72" height="72">
                <h1>Pedidos</h1>
                <p class="lead">Listado de Pedidos pendientes</p>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-sm bg-light">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#ID</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">e-mail</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">Localidad</th>
                            <th scope="col">Provincia</th>
                            <th scope="col">Código Postal</th>
                            <th scope="col">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once "../dao/PedidoDAO.php";
                        $pedidoDAO = new PedidoDAO();
                        $listaPedidos = $pedidoDAO->listarPedidos();

                        foreach ($listaPedidos as $pedido) {

                          $html = "<tr>";
                          $html .= "<td>" . $pedido->getIdPedido() . "</td>";
                          $html .= "<td>" . $pedido->getApellido() . "</td>";
                          $html .= "<td>" . $pedido->getNombre() . "</td>";
                          $html .= "<td>" . $pedido->getMail() . "</td>";
                          $html .=
                            "<td>" . $pedido->getLugarEntrega() . "</td>";
                          $html .=
                            "<td>" .
                            $pedido->getLocalidad()->getNombre() .
                            "</td>";
                          $html .=
                            "<td>" .
                            $pedido
                              ->getLocalidad()
                              ->getProvincia()
                              ->getNombre() .
                            "</td>";
                          $html .= "<td>" . $pedido->getCodPostal() . "</td>";

                          echo $html;
                          ?>
                            <td>
                             <a class='btn btn-sm btn-warning text-white' role='button' href='updatePedido.php?id=<?php echo $pedido->getIdPedido(); ?>'><i class='fas fa-pencil-alt'></i></a>
                            
                             <a class='btn btn-sm btn-danger' href='#' role='button' onclick="confirmar(<?php echo $pedido->getIdPedido(); ?>)" ><i class='fas fa-trash-alt'></i></a>
                        
                            </td>
                             
                           
                            <?php echo "</tr>";
                        }
                        ?>

                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <?= footer() ?>
    <script type="text/javascript">
        function confirmar(id){
            if(confirm('¿Esta seguro que quiere eliminar el pedido?')){
                window.location.href = "listadoPedidos.php?del="+id;
            }
        }
    </script>
</body>

</html>