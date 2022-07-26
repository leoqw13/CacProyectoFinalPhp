<?php
include "../assets/fragments/session.php"; ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    
  <?php include "../assets/fragments/head.php"; ?>
    <title>PHP - Registro de Pedido</title>

    <!-- Style CSS -->
    <link href="../assets/css/inicio.css" rel="stylesheet" type="text/css" />
  </head>

  <body class="bg-grad">
    <header>
      <?= menu() ?>
    </header>
    <div class="d-flex justify-content-center align-items-center my-7">
      <div class="container bg-light rounded-3 shadow">
        <div class="py-4 text-center">
          <img
            class="d-block mx-auto mb-4"
            src="../assets/images/logo.jpg"
            alt="Logo caba"
            width="72"
            height="72"
          />
          <h2>Formulario de Pedido</h2>
          <p class="lead">
            La fecha de entrega será coordinada telefónicamente.
          </p>
        </div>

        <div class="container">
          <h4 class="mb-3 text-center">Tu pedido</h4>
          <form
            class="needs-validation"
            novalidate
            action="../controller/checkPedido.php"
            method="POST"
          >
            <div class="row">
              <div class="col-md-6 mb-3 text-center">
                <label for="firstName">Nombre</label>
                <input
                  type="text"
                  class="form-control"
                  id="firstName"
                  name="firstName"
                  placeholder="Tu nombre"
                  value=""
                  required
                />
                <div class="invalid-feedback">Debe ingresar su nombre.</div>
              </div>
              <div class="col-md-6 mb-3 text-center">
                <label for="lastName">Apellido</label>
                <input
                  type="text"
                  class="form-control"
                  id="lastName"
                  name="lastName"
                  placeholder="Tu apellido"
                  value=""
                  required
                />
                <div class="invalid-feedback">Faltó ingresar el apellido.</div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 mb-3 text-center">
                <label for="username">Nombre de Usuario</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                  </div>
                  <input
                    type="text"
                    class="form-control"
                    id="username"
                    name="username"
                    placeholder="Usuario"
                    required
                  />
                  <div class="invalid-feedback" style="width: 100%">
                    Faltó ingresar el usuario.
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 mb-3 text-center">
                <label for="email"
                  >Email <span class="text-muted">(Opcional)</span></label
                >
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  name="email"
                  placeholder="tumail@gmail.com"
                />
                <div class="invalid-feedback">El e-mail es inválido.</div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 mb-3 text-center">
                <label for="address">Lugar de Entrega</label>
                <input
                  type="text"
                  class="form-control"
                  id="address"
                  name="address"
                  placeholder="Calle, n°, piso, dpto, ..."
                  required
                />
                <div class="invalid-feedback">
                  Faltó ingresar el domicilio de entrega.
                </div>
              </div>
            </div>

 <div class="row">
                      
  <div class="col-md-4 mb-3">
  <?php include "../combos/provincias.php"; ?>
   </div>

  <div class="col-md-4 mb-3">
  <?php include "../combos/localidades.php"; ?>
  </div>

  
  <div class="col-md-3 mb-3">
    <label for="zip">Cod.Postal</label>
    <input
      type="text"
      class="form-control"
      id="zip"
      name="zip"
      placeholder=""
      required
    />
    <div class="invalid-feedback">Faltó ingresar el Código Postal.</div>
  </div>
</div>

              <hr class="mb-6" />

                  
             <h4 class="mb-3 text-center">Forma de Pago</h4>

             <div class="row mb-3 justify-content-center">
              <div
                class="col-12 col-sm-6 form-check d-flex justify-content-center"
              >
                <input
                  id="credit"
                  name="paymentMethod"
                  type="radio"
                  class="form-check-input"
                  checked
                  required
                />
                <label class="form-check-label" for="credit"
                  >Tarjeta de Crédito</label
                >
              </div>
              <div
                class="col-12 col-sm-6 form-check d-flex justify-content-center"
              >
                <input
                  id="debit"
                  name="paymentMethod"
                  type="radio"
                  class="form-check-input"
                  required
                />
                <label class="form-check-label" for="debit">Mercado Pago</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3 text-center">
                <label for="cc-name">Nombre del Titular de la Tarjeta</label>
                <input
                  type="text"
                  class="form-control"
                  id="cc-name"
                  name="cc-name"
                  placeholder=""
                  required
                />
                <small class="text-muted"
                  >Nombre como se muestra en la tarjeta</small
                >
                <div class="invalid-feedback">
                  El nombre debe ser ingresado.
                </div>
              </div>
              <div class="col-md-6 mb-3 text-center">
                <label for="cc-number">Número de la tarjeta</label>
                <input
                  type="number"
                  class="form-control"
                  id="cc-number"
                  name="cc-number"
                  placeholder=""
                  required
                />
                <div class="invalid-feedback">El n° es obligatorio.</div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3"></div>
              <div class="col-md-3 mb-3 text-center">
                <label for="cc-expiration">Fecha de Vto.</label>
                <input
                  type="date"
                  class="form-control"
                  id="cc-expiration"
                  name="cc-expiration"
                  placeholder=""
                  required
                />
                <div class="invalid-feedback">
                  Falta ingresar la fecha de Vto.
                </div>
              </div>
              <div class="col-md-3 mb-3 text-center">
                <label for="cc-cvv">Código</label>
                <input
                  type="number"
                  class="form-control"
                  id="cc-cvv"
                  name="cc-cvv"
                  placeholder=""
                  required
                />
                <div class="invalid-feedback">N° de seguridad obligatorio.</div>
              </div>
            </div>
            <hr class="mb-4" />
            <div class="row text-center">
              <div class="col">
                <button class="btn btn-primary btn-lg btn-block" type="submit">
                  Ingresar la Solicitud
                </button>
              </div>
            </div>
          </form>
        </div>
        <footer class="my-4 pt-5 text-muted text-center text-small">
          <p class="mb-1">&copy; 2017-2022 Codo a Codo</p>
        </footer>
      </div>
    </div>
  
    <?= footer() ?>
    <script src="../assets/js/form-validation.js"></script>
     <script language="javascript" src="../assets/js/jquery-3.6.0.min.js"></script>
		 <script language="javascript" src="../assets/js/combos.js"> </script>
		</body>
</html>
