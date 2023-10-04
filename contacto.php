<?php
$pg = "contacto";
?>

<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="shortcut icon" href="images/favicon-img.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="images/favicon-img.png">
</head>

<body id="contacto" class="d-flex flex-column h-100">
    <header class="container">
<?php include_once ("menu.php"); ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Te invito a que te contactes enviándome un mensaje o bien por whatsapp.</p>
            </div>
            <div class="col-12 col-sm-6">
                <form action="" method="POST">
                    <div class="pb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre"
                            class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo"
                            class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Telefono/Whatsapp"
                            class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <textarea name="txtMensaje" id="txtMensaje" class="form-control"
                            placeholder="Escribe aquí tu mensaje"> </textarea>
                    </div>
                    <div class="">
                        <button type="submit" id="btnEnviar" name="btnEnviar" class="btn">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
        <footer class="container mt-auto pb-4 ">
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
                    <a href="mailto:info@nelsontarche.com.ar">info@nelsontarche.com.ar</a>
                </div>
            </div>
        </footer>
    </main>


</body>

</html>