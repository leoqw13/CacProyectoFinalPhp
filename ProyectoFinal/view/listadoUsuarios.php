<?php
include "../assets/fragments/session.php"; ?>

<!doctype html>
<html lang="en">

<head>
    <title>PHP - Listado de Usuarios</title>
    
  <?php include "../assets/fragments/head.php"; ?>
    <!--Style CSS -->
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
                <h2>Usuarios</h2>
                <p class="lead">Listado de Usuarios</p>
            </div>

            <div class="table-responsive">
                <table class="table table-hover table-sm bg-light">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#ID</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Contraseña</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once "../dao/UsuarioDAO.php";
                        $dao = new UsuarioDAO();
                        $listaUsu = $dao->listarUsuarios();
                        //var_dump($listaUsu);

                        for ($i = 0; $i < count($listaUsu); $i++) { ?>
                            <tr>
                                <td><?php echo $listaUsu[$i][
                                  "idusuario"
                                ]; ?></td>
                                <td><?php echo $listaUsu[$i]["usuario"]; ?></td>
                                <td><?php echo $listaUsu[$i]["clave"]; ?></td>
                            </tr>

                        <?php }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
      
    <?= footer() ?>
</body>

</html>