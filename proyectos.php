<?php
$pg = "proyectos";
?>
<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proyectos</title>
  <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
  <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="images/favicon-img.png">
</head>

<body id="proyectos" class="d-flex flex-column h-100">
  <header class="container">
  <?php include_once ("menu.php"); ?>
  </header>
  <main class="container pro">
    <div class="row">
      <div class="col-12 pt-3 pb-5">
        <h1>Proyectos</h1>
      </div>
      <div class="row">
        <div class="col-12">
          <p class="pb-3">Los siguientes son algunos de los trabajos que he realizado:</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-4 p-4" x>
          <div class="row border proyecto pb-5">
            <div class="col-12 p-0">
              <img src="images/abmclientes.png" alt="abm clientes" class="img-fluid">
              <h2>ABM CLIENTES</h2>
              <p class="py-2 px-3">Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP,
                Bootstrap y Json</p>
            </div>
            <div class="col-6">
              <a href="#" class="btn-rojo"> Ver online</a>
            </div>
            <div class="col-6 text-center">
              <a href="#" class="link-rojo"> Codigo fuente</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-4 p-4"> 
          <div class="row border proyecto pb-5">
            <div class="col-12 p-0">
              <img src="images/abmventas.png" alt="sistema de gestion de ventas" class="img-fluid">
              <h2>SISTEMA DE GESTIÓN DE VENTAS</h2>
              <p class="py-2 px-3">Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC,
                Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
            </div>
            <div class="col-6">
              <a href="#" class="btn-rojo"> Ver online</a>
            </div>
            <div class="col-6 text-center">
              <a href="#" class="link-rojo"> Codigo fuente</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-4 p-4">
          <div class="row border proyecto pb-5">
            <div class="col-12 p-0">
              <img src="images/proyecto-integrador.png" alt="proyecto integrador" class="img-fluid">
              <h2>PROYECTO INTEGRADOR</h2>
              <p class="py-2 px-3">Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML,
                CSS, Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y funcionalidades a
                fines.</p>
            </div>
            <div class="col-6 text-center">
              <a href="#" class="btn-rojo"> Ver online</a>
            </div>
            <div class="col-6">
              <a href="#" class="link-rojo"> Codigo fuente</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </main>

  <footer class="container mt-auto pb-4">
    <div class="btn-whatsapp">
      <i class="fa-brands fa-whatsapp"></i>
    </div>
    <div class="row">
      <div class="col-3">
        <a href="" target="_blank" tittle="Github"><i class="fa-brands fa-github"></i></a>
        <a href="" target="_blank" tittle="Linkedin"><i class="fa-brands fa-linkedin-in"></i></a>
      </div>
      <div class="col-3">
        Sponsor <a href="http://https://depcsuite.com/?v=d72a48a8ebd2"> DePC Suite</a>
      </div>
      <div class="col-3">
        <a href="mailto:gab.alterio@gmail.com">info@gab.alterio.com.ar</a>
      </div>
    </div>
  </footer>
</body>

</html>