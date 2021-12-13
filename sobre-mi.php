<?php

$pg = "sobre-mi";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mí</title>
    <!--archivo bootstrap-->
    <link rel="stylesheet" href="./css/bootstrap/css/bootstrap.min.css">
    <!--archivo fontawesome -->
    <link rel="stylesheet" href="./css/fontawesome/css/all.min.css">
    <!--archivo css-->
    <link rel="stylesheet" href="./css/estilos.css">
    <!--favicon-->
    <link rel="shortcut icon" href="./images/favicon.ico">
</head>

<body>
    <!--Inicio del header-->
    <?php include_once("header.php"); ?>
    <!--Fin del header-->

    <!--inicio sobre mí-->
    <main>
        <section class="area-sobre-mi">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <h1 class="text-title my-5">Sobre mí</h1>
                        <p class="texto-secundario">
                            Soy un desarrollador web recién iniciado en este mundo de la tecnologías. Tengo experiencia en programación. Soy competente en HTML, CSS, PHP y Laravel.
                        </p>
                        <button type="button" class="btn button secundary-button text-uppercase"><a href="./pdf/ANDERSON_SARMIENTO_CV.pdf">descargar
                                cv</a></button>
                    </div>
                    <div class="col-lg-6 col-md-12 imagen mt-5">
                        <img src="./images/anderson.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <section id="tabla-tecnologica">
            <div class="container">
                <div class="row">
                    <div class="col-12 mt-5">
                        <h2 class="texto-mi">Conocimiento Tecnológico</h2>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 mt-5">
                        <div class="t-tecnologica">
                            <div class="tecnologia-imagen text-center">
                                <img src="https://img.stackshare.io/service/2538/kEpgHiC9.png" alt="HTML 5" width="50">
                            </div>
                            <div class="card-body text-center">
                                <p class="card-text texto-secundario">
                                    HTML 5
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 mt-5">
                        <div class="t-tecnologica">
                            <div class="tecnologia-imagen text-center">
                                <img src="https://img.stackshare.io/service/6727/css.png" alt="CSS 3" width="50">
                            </div>
                            <div class="card-body text-center">
                                <p class="card-text texto-secundario">
                                    CCS 3
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 mt-5">
                        <div class="t-tecnologica">
                            <div class="tecnologia-imagen text-center">
                                <img src="https://img.stackshare.io/service/991/hwUcGZ41_400x400.jpg" alt="PHP" width="50">
                            </div>
                            <div class="card-body text-center">
                                <p class="card-text texto-secundario">
                                    PHP
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 mt-5">
                        <div class="t-tecnologica">
                            <div class="tecnologia-imagen text-center">
                                <img src="https://img.stackshare.io/service/1101/C9QJ7V3X.png" alt="Bootstrap" width="50">
                            </div>
                            <div class="card-body text-center">
                                <p class="card-text texto-secundario">
                                    Bootstrap
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 mt-5">
                        <div class="t-tecnologica">
                            <div class="tecnologia-imagen text-center">
                                <img src="https://img.stackshare.io/service/1025/logo-mysql-170x170.png" alt="MySQL" width="50">
                            </div>
                            <div class="card-body text-center">
                                <p class="card-text texto-secundario">
                                    MySQL
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 mt-5">
                        <div class="t-tecnologica">
                            <div class="tecnologia-imagen text-center">
                                <img src="https://img.stackshare.io/service/992/AcA2LnWL_400x400.jpg" alt="Laravel" width="50">
                            </div>
                            <div class="card-body text-center">
                                <p class="card-text texto-secundario">
                                    Laravel
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <div class="t-tecnologica mt-3">
                            <div class="tecnologia-imagen text-center">
                                <img src="https://img.stackshare.io/service/1209/javascript.jpeg" alt="Javascript" width="50">
                            </div>
                            <div class="card-body text-center">
                                <p class="card-text texto-secundario">
                                    Javascript
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <div class="t-tecnologica mt-3">
                            <div class="tecnologia-imagen text-center">
                                <img src="https://img.stackshare.io/service/1020/OYIaJ1KK.png" alt="React.js" width="50">
                            </div>
                            <div class="card-body text-center">
                                <p class="card-text texto-secundario">
                                    React.js
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <div class="t-tecnologica mt-3">
                            <div class="tecnologia-imagen text-center">
                                <img src="https://img.stackshare.io/service/1046/git.png" alt="Git" width="50">
                            </div>
                            <div class="card-body text-center">
                                <p class="card-text texto-secundario">
                                    Git
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <div class="t-tecnologica mt-3">
                            <div class="tecnologia-imagen text-center">
                                <img src="https://mycroft.ai/wp-content/uploads/2017/06/the-right-license.png" alt="Apache" width="50" height="50">
                            </div>
                            <div class="card-body text-center">
                                <p class="card-text texto-secundario">
                                    Apache
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <div class="t-tecnologica mt-3">
                            <div class="tecnologia-imagen text-center">
                                <img src="https://img.stackshare.io/service/1021/lxEKmMnB_400x400.jpg" alt="jQuery" width="50">
                            </div>
                            <div class="card-body text-center">
                                <p class="card-text texto-secundario">
                                    jQuery
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <div class="t-tecnologica mt-3">
                            <div class="tecnologia-imagen text-center">
                                <img src="https://img.stackshare.io/service/12698/gUjuxmmd_400x400.jpg" alt="Mercadopago" width="50">
                            </div>
                            <div class="card-body text-center">
                                <p class="card-text texto-secundario">
                                    Mercadopago
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="experiencias">
            <div class="container">
                <div class="row">
                    <div class="col-12 py-5">
                        <h2 class="texto-mi">
                            <i class="fas fa-briefcase"></i> Experiencia laboral
                        </h2>
                    </div>
                </div>
                <div class="row rounded shadow">
                    <div class="col-12 text-center">
                        <h4 class="title-text text-uppercase">
                            sin experiencias laborales
                            </h3>
                    </div>
                </div>
            </div>
        </section>
        <section id="formacion">
            <div class="container">
                <div class="row">
                    <div class="col-12 pt-5 pb-4">
                        <h2 class="texto-mi">
                            <i class="fas fa-graduation-cap"></i> Formación acádémica
                        </h2>
                    </div>
                </div>
                <div class="row shadow rounded">
                    <div class="col-lg-6 col-sm-12">
                        <div class="row">
                            <div class="col-2 py-4">
                                <img src="./images/Logo_UMC.jpg" class="umc img-fluid" width="83.33" title="depcsuite">
                            </div>
                            <div class="col-12- col-sm-10 py-4">
                                <h3>Ingeniería Informática</h3>
                                <h4>Universidad Maritima del Caribe</h4>
                                <h5>ene 2016 - ene 2019</h5>
                                <p>
                                    Materias aprobadas 53 de 81, 66%.</br>
                                    www.umc.edu.ve
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="cursos">
            <div class="container">
                <div class="row">
                    <div class="col-12 py-5">
                        <h2 class="texto-mi">
                            <i class="fas fa-briefcase"></i> Cursos de desarrollo profesional
                        </h2>
                    </div>
                </div>
                <div class="row shadow rounded">
                    <div class="col-lg-6 col-sm-12">
                        <div class="row">
                            <div class="col-2 py-4">
                                <img src="./images/logo.jpg" class="umc img-fluid" width="83.33" title="depcsuite">
                            </div>
                            <div class="col-12- col-sm-10 py-5">
                                <h3>Desarrollador Web Full Stack</h3>
                                <h4>DePC Suite</h4>
                                <h5>Finalizado</h5>
                                <h5>Promedio: 7.75/10</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row">
                            <div class="col-2 py-4">
                                <img src="./images/sin-logo.png" class="umc img-fluid" width="83.33" title="depcsuite">
                            </div>
                            <div class="col-12- col-sm-10 py-5">
                                <h3>English Intermediate B1</h3>
                                <h4>Oxford Institute</h4>
                                <h5>Finalizado</h5>
                                <h5>Promedio: 7.5/10</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="idiomas">
            <div class="container">
                <div class="row py-5 mx-0">
                    <div class="col-sm-6 col-12 pb-3 pb-sm-0">
                        <div class="row card-idioma shadow">
                            <div class="col-4 text-center card">
                                <i class="fas fa-comment-alt mt-2"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2 class="text-uppercase">idiomas</h2>
                                <ul>
                                    <li>ESPAÑOL - Nativo</li>
                                    <li>INGLÉS - Intermediate B1</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="row card-idioma shadow ms-1">
                            <div class="col-4 text-center card">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2 class="text-uppercase">pasatiempos</h2>
                                <ul>
                                    <li>Leer</li>
                                    <li>Tocar el violín</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--fin sobre mí-->

    <!--inicio del footer-->
    <?php include_once("footer.php"); ?>
    <!--fin del footer-->
</body>

</html>