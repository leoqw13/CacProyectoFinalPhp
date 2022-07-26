<?php
function footer()
{
  $html = ' <link href="../assets/css/footer.css" rel="stylesheet" type="text/css" />

  <div class="footer-dark">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <h3>Servicios</h3>
                    <ul>
                        <li><a href="#">Venta</a></li>
                        <li><a href="#">Colocación</a></li>
                        <li><a href="#">Reparación</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 item">
                    <h3>Acerca de</h3>
                    <ul>
                        <li><a href="#">Nosotros</a></li>
                        <li><a href="#historia">Nuestra Historia</a></li>
                        <li><a href="#mision">Nuestra Misión</a></li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3>Objetivo</h3>
                    <p>Realizar un CRUD aplicando todo lo aprendido en el curso Full Stack PHP de <a class="text-decoration-none text-info" href="https://www.buenosaires.gob.ar/educacion/codo-codo" target="_blank"><strong>Codo a Codo 4.0</strong></a></p>
                </div>
                <div class="col item social">
                    <a href="mailto:leonardowolf97@gmail.com" target="_blank"><i class="fas fa-envelope"></i></a>
                    <a href="https://www.linkedin.com/in/leonardo-wolf/" target="_blank"><i class="fab fa-linkedin"></i></i></a>
                    <a href="https://github.com/leoqw13" target="_blank"><i class="fab fa-github"></i></a>
            </div>
            <p class="copyright">Leonardo Wolf © 2022</p>
        </div>
    </footer>
</div>';
  return $html;
}
