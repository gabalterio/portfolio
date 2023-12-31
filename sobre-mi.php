<?php
$pg = "sobre-mi";
?>

<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mi</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="images/favicon-img.png">
</head>

<body id="sobre mi" class="d-flex flex-column h-100">
    <header class="container">
    <?php include_once ("menu.php"); ?> 
    </header>
    <main>
        <section id="bio" class="container">
            <div class="row mb-5">
                <div class="col-12 col-sm-7">
                    <h1>Sobre mi</h1>
                    <p class="col-sm-12 col-12">Apasionada por la tecnología y gestión de proyectos. Conocimientos en Full Stack y de Base de
                        datos.</p>
                        <div class="my-5">
                        <a href="contacto.php" class="btn-rojo d-none d-sm-block w-25 "> Enviar mensaje</a>
                    </div>
                </div>
                <div class="col-12 col-sm-5 mx-auto text-center d-none d-sm-block">
                    <img src="images/mi-cara.png.jpg" alt="Gabriela" class="img-fluid">
                </div>
            </div>
           
            <div class="col-sm-6 d-sm-block d-sm-none w-50">
                <img src="images/mi-cara.png.jpg" alt="Gabriela" class="img-fluid">
            </div>
            <div class="col-sm-6 d-sm-block d-sm-none">
                <a href="contacto.php" class="btn-rojo"> Enviar mensaje</a>
          
        </div>
        </section>
        <section id="stack">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="py-5">
                            Stack tecnológico<br>
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia my-3 mb-4">
                            <h3 class="pt-5 pb-1">Javascript</h3>
                            <i class="fa-brands fa-js pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia my-3 mb-4">
                            <h3 class="pt-5 pb-1">PHP</h3>
                            <i class="fa-brands fa-php pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia my-3 mb-4">
                            <h3 class="pt-5 pb-1"> HTML</h3>
                            <i class="fa-brands fa-html5 pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia my-3 mb-4">
                            <h3 class="pt-5 pb-1">API Rest</h3>
                            <i class="fa-solid fa-gears pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia my-3 mb-4">
                            <h3 class="pt-5 pb-1">Laravel</h3>
                            <i class="fa-brands fa-laravel pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia my-3 mb-4">
                            <h3 class="pt-5 pb-1"> Bootstrap</h3>
                            <i class="fa-brands fa-bootstrap pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2 ">
                        <div class="tecnologia my-3 mb-4">
                            <h3 class="pt-5 pb-1">MySQL</h3>
                            <i class="fa-solid fa-database pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia my-3 mb-4">
                            <h3 class="pt-5 pb-1">CSS</h3>
                            <i class="fa-brands fa-css3-alt pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia my-3 mb-4">
                            <h3 class="pt-5 pb-1">Git</h3>
                            <i class="fa-brands fa-git pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia my-3 mb-4">
                            <h3 class="pt-5 pb-1">React.js</h3>
                            <i class="fa-brands fa-react pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia my-3 mb-4">
                            <h3 class="pt-5 pb-1">Mercadopago</h3>
                            <i class="fa-solid fa-wallet pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia my-3 mb-4">
                            <h3 class="pt-5 pb-1">Amazon AWS</h3>
                            <i class="fa-brands fa-aws pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia my-3 mb-4">
                            <h3 class="pt-5 pb-1">Linux</h3>
                            <i class="fa-brands fa-linux pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia my-3 mb-4">
                            <h3 class="pt-5 pb-1">Apache</h3>
                            <i class="fa-solid fa-server pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia my-3 mb-4">
                            <h3 class="pt-5 pb-1">Paypal</h3>
                            <i class="fa-brands fa-paypal pb-5"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="experiencia" class="container">
            <div class="row">
                <div class="col-12 py-5">
                   <h2>
                    <i class="fa-solid fa-briefcase"></i>Experiencia laboral
                </h2>
                </div>
            </div>
            <div class="row shadow">
                <div class="col-sm-2 d-none d-sm-block p-5">
                    <i class="fa-solid fa-landmark"></i>
                </div>
                <div class="col-sm-10 lorem my-3">
                   <h3> DirectorA- Founder</h3>
                    <h4>LOREM SA</h4>
                    <h5>2016 - presente</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quidem, voluptas perferendis fuga aspernatur numquam expedita officia dolorem ex fugit dolore obcaecati quaerat autem est alias! Necessitatibus nesciunt velit amet!        </p>       
                 </div>
                 <div class="col-sm-2 d-none d-sm-block p-5">
                    <i class="fa-solid fa-landmark"></i>
                </div>
                <div class="col-sm-10 lorem my-3">
                    <h3> DirectorA- Founder</h3>
                    <h4>LOREM SA</h4>
                    <h5>2016 - presente</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quidem, voluptas perferendis fuga aspernatur numquam expedita officia dolorem ex fugit dolore obcaecati quaerat autem est alias! Necessitatibus nesciunt velit amet!        </p>       
                 </div>
                 <div class="col-sm-2 d-none d-sm-block p-5">
                    <i class="fa-solid fa-landmark"></i>
                </div>
                <div class="col-sm-10 lorem my-3">
                    <h3> DirectorA- Founder</h3>
                    <h4>LOREM SA</h4>
                    <h5>2016 - presente</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quidem, voluptas perferendis fuga aspernatur numquam expedita officia dolorem ex fugit dolore obcaecati quaerat autem est alias! Necessitatibus nesciunt velit amet!        </p>       
                 </div>
                 <div class="col-sm-2 d-none d-sm-block p-5">
                    <i class="fa-solid fa-landmark"></i>
                </div>
                <div class="col-sm-10 lorem my-3">
                    <h3> DirectorA- Founder</h3>
                    <h4>LOREM SA</h4>
                    <h5>2016 - presente</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quidem, voluptas perferendis fuga aspernatur numquam expedita officia dolorem ex fugit dolore obcaecati quaerat autem est alias! Necessitatibus nesciunt velit amet!        </p>       
                 </div>
                 <div class="col-sm-2 d-none d-sm-block p-5">
                    <i class="fa-solid fa-landmark"></i>
                </div>
                <div class="col-sm-10 lorem my-3">
                    <h3> DirectorA- Founder</h3>
                    <h4>LOREM SA</h4>
                    <h5>2016 - presente</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quidem, voluptas perferendis fuga aspernatur numquam expedita officia dolorem ex fugit dolore obcaecati quaerat autem est alias! Necessitatibus nesciunt velit amet!        </p>       
                 </div>
                 <div class="col-sm-2 d-none d-sm-block p-5">
                    <i class="fa-solid fa-landmark"></i>
                </div>
                <div class="col-sm-10 lorem my-3">
                    <h3> DirectorA- Founder</h3>
                    <h4>LOREM SA</h4>
                    <h5>2016 - presente</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quidem, voluptas perferendis fuga aspernatur numquam expedita officia dolorem ex fugit dolore obcaecati quaerat autem est alias! Necessitatibus nesciunt velit amet!        </p>       
                 </div>
            </div>
        </section>
        <section id="formacion" class="container">
            <div class="row">
                <div class="col-12 py-5">
                    <h2 >
                        Formación académica
                    </h2>
                </div>
            </div>
            <div class="row shadow">
                <div class="col-sm-2">
                    <i class="fa-solid fa-landmark"></i>
                </div>
                <div class="col-sm-4">
                    <h3> Licenciado en economia </h3>
                    <h4>Escuela argentina de negocios </h4>
                    <h5>2020-2028</h5>
                    <p> lorem lorem lorem</p>
                </div>
                <div class="col-sm-2">
                    <i class="fa-solid fa-landmark"></i>
                </div>
                <div class="col-sm-4">
                    <h3> Licenciado en economia </h3>
                    <h4>Escuela argentina de negocios </h4>
                    <h5>2020-2028</h5>
                    <p> lorem lorem lorem</p>
                </div>
                <div class="col-sm-2">
                    <i class="fa-solid fa-landmark"></i>
                </div>
                <div class="col-sm-4">
                    <h3> Licenciado en economia </h3>
                    <h4>Escuela argentina de negocios </h4>
                    <h5>2020-2028</h5>
                    <p> lorem lorem lorem</p>
                </div>
                <div class="col-sm-2">
                    <i class="fa-solid fa-landmark"></i>
                </div>
                <div class="col-sm-4">
                    <h3> Licenciado en economia </h3>
                    <h4>Escuela argentina de negocios </h4>
                    <h5>2020-2028</h5>
                    <p> lorem lorem lorem</p>
                </div>
            </div>
        
    
            <div class="row ">
                <div class="col-12">
                    <h2 class="pt-5 pb-4">
                        Cursos de desarrollo profesional
                    </h2>
                </div>
                <div class="col-12 shadow">
                    <div class="row">
                        <div class="col-2 p-5">
                            <img src="images/sin-logo.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-4 my-3">
                            <h3>Programación</h3>
                            <h4>Depcsuite</h4>
                            <h5>Expedición:2023</h5>
                        </div>
                        <div class="col-2 p-5">
                            <img src="images/sin-logo.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-4 my-3">
                            <h3>Programación</h3>
                            <h4>Depcsuite</h4>
                            <h5>Expedición:2023</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 p-5">
                            <img src="images/sin-logo.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-4 my-3">
                            <h3>Programación</h3>
                            <h4>Depcsuite</h4>
                            <h5>Expedición:2023</h5>
                        </div>
                        <div class="col-2 p-5">
                            <img src="images/sin-logo.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-4 my-3">
                            <h3>Programación</h3>
                            <h4>Depcsuite</h4>
                            <h5>Expedición:2023</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 p-5">
                            <img src="images/sin-logo.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-4 my-3">
                            <h3>Programación</h3>
                            <h4>Depcsuite</h4>
                            <h5>Expedición:2023</h5>
                        </div>
                        <div class="col-2 p-5">
                            <img src="images/sin-logo.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-4 my-3">
                            <h3>Programación</h3>
                            <h4>Depcsuite</h4>
                            <h5>Expedición:2023</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 p-5">
                            <img src="images/sin-logo.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-4 my-3">
                            <h3>Programación</h3>
                            <h4>Depcsuite</h4>
                            <h5>Expedición:2023</h5>
                        </div>
                        <div class="col-2 p-5">
                            <img src="images/sin-logo.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-4 my-3">
                            <h3>Programación</h3>
                            <h4>Depcsuite</h4>
                            <h5>Expedición:2023</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="idiomas">
            <div class="container mt-3 py-5 ">
                <div class="row">
                    <div class="col-2 card">
                        <i class="fas fa-comment-alt"></i>
                    </div>
                    <div class="col-4 c-ih">
                        <h2>IDIOMAS</h2>
                        <h3>ESPAÑOL - Nativo</h3>
                        <h3>INGLES - Intermedio</h3>
                    </div>
                    <div class="col-2 card">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="col-4 c-ih">
                        <h2>HOBBIES</h2>
                        <h3>Futbol</h3>
                    </div>
                </div>
            </div>
        </section>
        <footer class="container mt-auto py-4"> <!--no deberia ir aca el footer-->
            <div class="btn-whatsapp">
                <i class="fa-brands fa-whatsapp"></i>
            </div>
            <div class="row">
                <div class="col-sm-3 col-12">
                    <a href="" target="_blank" tittle="Github"><i class="fa-brands fa-github"></i></a>
                    <a href="" target="_blank" tittle="Linkedin"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <div class="col-sm-3 col-12">
                    Sponsor <a href="http://https://depcsuite.com/?v=d72a48a8ebd2"> DePC Suite</a>
                </div>
                <div class="col-sm-3 col-12">
                    <a href="mailto:info@nelsontarche.com.ar">info@nelsontarche.com.ar</a>
                </div>
            </div>
        </footer>
    </main>
</body>


</html>