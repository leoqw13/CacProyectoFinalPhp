<?php
session_start();
if (isset($_SESSION["usuario"])) {
  header("location: view/inicio.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login y Register</title>

    <?php include "assets/fragments/head.php"; ?>

          <!--CSS-->
    <link rel="stylesheet" href="assets/css/estilos.css" />
  </head>
  <body>
    <main>
      <div class="contenedor__todo">
        <div class="caja__trasera">
          <div class="caja__trasera-login">
            <h3>¿Ya tienes una cuenta?</h3>
            <p>Inicia sesión para entrar en la página</p>
            <button id="btn__iniciar-sesion">Iniciar Sesión</button>
          </div>
          <div class="caja__trasera-register">
            <h3>¿Aún no tienes una cuenta?</h3>
            <p>Regístrate para que puedas iniciar sesión</p>
            <button id="btn__registrarse">Regístrarse</button>
          </div>
        </div>

        <!--Formulario de Login y registro-->
        <div class="contenedor__login-register">
          <!--Login-->

          <form
            action="controller/checklogin.php"
            method="POST"
            class="formulario__login"
          >
            <img src="assets\images\logo.jpg" alt="Logo CABA" />

            <div class="text-center">
              <h2>Iniciar Sesión</h2>
            </div>

            <input
            class="form-control"
              type="text"
              placeholder="Correo Electronico"
              name="usuario"
            />
            <input
            class="form-control"
              type="password"
              placeholder="Contraseña"
              name="contrasenia"
            />
            <button>Entrar</button>
          </form>

          <!--Register-->
          <form
            action="controller/checkUsuario.php"
            method="POST"
            class="formulario__register needs-validation"
            novalidate
          >
            <img src="assets\images\logo.jpg" alt="Logo CABA" />
            <h2>Regístrarse</h2>
            <input
            class="form-control"
              type="text"
              placeholder="Nombre completo"
              name="nombre"
              required
            />
            <div class="invalid-feedback">
              El nombre debe contener un alfabético
            </div>
            <input
            class="form-control"
              type="text"
              placeholder="Correo Electronico"
              name="usuario"
              required
              pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
            />
            <div class="invalid-feedback">El email debe contener un @</div>

            <div class="input-group">
              <input
                id="txtPassword"
                type="Password"
                class="form-control"
                placeholder="Contraseña"
                name="contrasenia"
                required
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
              /><button
                id="show_password"
                class="btn-pass"
                type="button"
                onclick="mostrarPassword()"
                style="margin-top: 20px;
    height: 44px;
    width: 44px;
    padding-left: 10px;
    padding-right: 10px;
    border-radius: 10%;
   "
              >
                <span class="fa fa-eye-slash icon"></span>
              </button>

              <div class="invalid-feedback">
                <ul>
                  La contraseña debe tener:

                  <li>más de 8 caracteres</li>
                  <li>contener letras minúsuculas y mayúsculas</li>
                  <li>al menos un dígito</li>
                </ul>
              </div>
            </div>

            <button>Regístrarse</button>
          </form>
        </div>
      </div>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/form-validation.js"></script>
    <script type="text/javascript" src="assets/js/password.js"></script>
  </body>
</html>
